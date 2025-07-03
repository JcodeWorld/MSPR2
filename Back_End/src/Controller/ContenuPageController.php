<?php

namespace App\Controller;

use App\Repository\ContenuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class ContenuPageController extends AbstractController
{
    #[Route('/api/contenu/page', name: 'api_contenu_page', methods: ['GET'])]public function getContenusParPage(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $url = $request->query->get('url');
        if (!$url) {
            return $this->json(['error' => 'Missing "url" query parameter'], 400);
        }
        $qb = $em->createQueryBuilder();
        $qb->select(
                'c.id AS idContainer','c.Nom_Container AS nomContainer',
                'ctu.Adresse_image_Contenu AS image',
                'ctu.Contenu_texte_Contenu AS texte'
            )
            ->from('App\Entity\Contenir', 'ctir')
            ->join('ctir.IdPageWeb', 'pw')
            ->join('ctir.IdContainer', 'c')
            ->join('c.associerContenus', 'assctu')
            ->join('assctu.IdContenu', 'ctu')
            ->where('pw.Adresse_Url = :url')
            ->setParameter('url', $url);

        $results = $qb->getQuery()->getArrayResult();

        return $this->json($results);
    }
}
