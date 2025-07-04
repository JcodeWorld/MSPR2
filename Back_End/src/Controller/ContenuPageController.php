<?php

// namespace App\Controller;

// use App\Repository\ContenuRepository;
// use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\Routing\Attribute\Route;
// use Symfony\Component\HttpFoundation\JsonResponse;
// use Symfony\Component\HttpFoundation\Request;

// final class ContenuPageController extends AbstractController
// {
//     #[Route('/api/contenu/Toutepage', name: 'api_contenu_page', methods: ['GET'])]public function getContenusParPage(Request $request, EntityManagerInterface $em): JsonResponse
//     {
//         $qb = $em->createQueryBuilder();
//         $qb->select(
//                 'pw.adresse_url AS nomPage','c.id AS idContainer','c.Nom_Container AS nomContainer',
//                 'ctu.Adresse_image_Contenu AS image',
//                 'ctu.Contenu_texte_Contenu AS texte'
//             )
//             ->from('App\Entity\Contenir', 'ctir')
//             ->join('ctir.IdPageWeb', 'pw')
//             ->join('ctir.IdContainer', 'c')
//             ->join('c.associerContenus', 'assctu')
//             ->join('assctu.IdContenu', 'ctu')
//             ->where('pw.Adresse_Url = :url')
//             ->setParameter('url', $url);

//         $results = $qb->getQuery()->getArrayResult();

//         return $this->json($results);
//     }
// }

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class ContenuPageController extends AbstractController
{
    #[Route('/api/contenu/Toutepage', name: 'api_contenu_toute_page', methods: ['GET'])]
    public function getContenusToutesPages(EntityManagerInterface $em): JsonResponse
    {
        $qb = $em->createQueryBuilder();

        $qb->select(
                'pw.id AS idPage',
                'pw.Adresse_Url AS urlPage',
                'c.id AS idContainer',
                'c.Nom_Container AS nomContainer',
                'ctu.Adresse_image_Contenu AS image',
                'ctu.Contenu_texte_Contenu AS texte'
            )
            ->from('App\Entity\Contenir', 'ctir')
            ->join('ctir.IdPageWeb', 'pw')
            ->join('ctir.IdContainer', 'c')
            ->join('c.associerContenus', 'assctu')
            ->join('assctu.IdContenu', 'ctu');

        $results = $qb->getQuery()->getArrayResult();

        return $this->json($results);
    }
}
