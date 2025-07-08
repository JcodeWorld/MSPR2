<?php

namespace App\Controller;

use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/api/contact', name: 'api_contact', methods: ['POST'])]
    public function contact(
        Request $request,
        ValidatorInterface $validator,
        EntityManagerInterface $em
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $constraints = new Assert\Collection([
            'nom' => [new Assert\NotBlank()],
            'prenom' => [new Assert\NotBlank()],
            'codePostal' => [new Assert\NotBlank()],
            'ville' => [new Assert\NotBlank()],
            'email' => [new Assert\Email()],
            'telephone' => [new Assert\NotBlank()],
            'message' => [new Assert\NotBlank()],
            'devis' => [new Assert\Type('bool')],
            'cgu' => [new Assert\EqualTo(true)],
        ]);

        $violations = $validator->validate($data, $constraints);

        if (count($violations) > 0) {
            $errors = [];
            foreach ($violations as $violation) {
                $errors[] = $violation->getMessage();
            }

            return $this->json(['errors' => $errors], 400);
        }

        $message = new Message();
        $message->setNomMessage($data['nom']);
        $message->setPrenomMessage($data['prenom']);
        $message->setAdresseMessage($data['codePostal'] . ' ' . $data['ville']);
        $message->setAdresseMailMessage($data['email']);
        $message->setTelephoneMessage($data['telephone']);
        $message->setTexteMessage($data['message']);
        $message->setStatutMessage('A_Traiter');

        $em->persist($message);
        $em->flush();

        return $this->json(['message' => 'Message enregistré avec succès !']);
    }
}
