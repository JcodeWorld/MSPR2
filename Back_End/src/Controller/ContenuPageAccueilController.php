<?php
namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class ContenuPageAccueilController extends AbstractController
{
    #[Route('/contenu/Accueil', name: 'api_contenu_accueil', methods: ['GET'])]
    public function getContenusAccueil(EntityManagerInterface $em): JsonResponse
    {
        $qb = $em->createQueryBuilder();

 $qb->select(
        'pw.id AS idPage',
        'pw.Adresse_Url AS urlPage',
        'c.id AS idContainer',
        'c.Nom_Container AS nomContainer',
        'ctu.Description_Contenu AS description',
        'ctu.Adresse_image_Contenu AS image',
        'ctu.Contenu_texte_Contenu AS texte'
    )
    ->from('App\Entity\Contenir', 'ctir')
    ->join('ctir.IdPageWeb', 'pw')
    ->join('ctir.IdContainer', 'c')
    ->join('c.associerContenus', 'assctu')
    ->join('assctu.IdContenu', 'ctu')
    ->where('pw.Adresse_Url = :url')
    ->setParameter('url', 'accueil');

        $results = $qb->getQuery()->getArrayResult();

        return $this->json($results);
    }
}
