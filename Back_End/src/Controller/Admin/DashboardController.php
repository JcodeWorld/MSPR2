<?php

namespace App\Controller\Admin;

use App\Entity\Tarif;
use App\Entity\Contenu;
use App\Entity\ModifierTarif;
use App\Entity\ModifierContenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Redirection vers une page CRUD spécifique (ex: Tarif)
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);

        return $this->redirect($adminUrlGenerator->setController(TarifCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Panneau d\'Administration Site');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Tableau de bord', 'fa fa-home');

        yield MenuItem::section('Gestion principale');
        yield MenuItem::linkToCrud('Tarifs', 'fas fa-euro-sign', Tarif::class);
        yield MenuItem::linkToCrud('Contenus', 'fas fa-file-alt', Contenu::class);

        yield MenuItem::section('Historique des modifications');
        yield MenuItem::linkToCrud('Modifications des Tarifs', 'fas fa-history', ModifierTarif::class);
        yield MenuItem::linkToCrud('Modifications des Contenus', 'fas fa-history', ModifierContenu::class);
    }
}
