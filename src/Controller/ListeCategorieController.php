<?php

namespace App\Controller;

use App\Entity\Categorie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeCategorieController extends AbstractController
{
    /*  Contrôleur sans route car il sera inclus dans le template de base  */
    public function listeCategorie(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Categorie::class);
        $categories = $repository->findAll();
        return $this->render('liste_categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }
}
