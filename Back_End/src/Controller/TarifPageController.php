<?php
namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class TarifPageController extends AbstractController
{
    #[Route('/api/tarif', name: 'api_tarif', methods: ['GET'])]
    public function getTarif(EntityManagerInterface $em): JsonResponse
    {
        $qb = $em->createQueryBuilder();

        $qb->select(
                'c.id AS idContainer',
                'c.Nom_Container AS nomContainer',
                'trf.Designation_Tarif AS prestation',
                'trf.Prix_Tarif AS prix'
            )
            ->from('App\Entity\AssocierTarif', 'atrf')
            ->join('atrf.IdContainer', 'c')
            ->join('atrf.IdTarif', 'trf');
       
        $results = $qb->getQuery()->getArrayResult();

        return $this->json($results);
    }
}
