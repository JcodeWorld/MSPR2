<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SigninType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class SigninController extends AbstractController
{
    #[Route('/signin', name: 'app_signin')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = new User();
        $user->setRoles(["Utilisateur"]);
        $form = $this->createForm(SigninType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            if ($form->isValid()){
                $user = $form->getData();
                $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $user->getPassword()
            );
            $user->setPassword($hashedPassword);
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'Votre inscription a été enregistrée avec succès. Informer l\'administrateur site si vous souhaitez des droits administrateurs.');
            return $this->redirectToRoute('app_signin');
            }
            else{$this->addFlash('unsuccess', 'Veuillez vérifier les données saisies afin que l\'enregistrement soit possible');}
        }
        return $this->render('signin/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
