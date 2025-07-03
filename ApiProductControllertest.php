<?php
use App\Entity\Contenu;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api')]
class ApiProductControllertest extends AbstractController
{
    #[Route('/contenu', name: 'api_products', methods: ['GET'])]
    public function list(EntityManagerInterface $em): JsonResponse
    {
        $contenu = $em->getRepository(Contenu::class)->findAll();
        $baseUrl = $this->getParameter('request_stack')->getCurrentRequest()->getSchemeAndHttpHost();

        $data = array_map(function (Contenu $contenu) use ($baseUrl) {
            return [
                'id' => $contenu->getId(),
                'DescriptionContenu' => $contenu->getDescriptionContenu(),
                'AdresseImageContenu' => $baseUrl . '/uploads/' . $contenu->getAdresseImageContenu(),
                'TexteContenu' => $contenu->getContenuTexteContenu(),
            ];
        }, $contenu);

        return $this->json($data);
    }
}
