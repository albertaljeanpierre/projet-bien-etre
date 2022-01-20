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
    /**
     * Fonction qui sert à afficher les catégories sous forme de liste html.
     *
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function listeCategorie(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Categorie::class);
        // La méthode findBy est identique à finAll si ce n'est que l'on peut y passer des paramètres.
        // La méthode findAll utilise d'ailleur findBy avec des paramètre par défaut. ==> findBy([]);
        $categories = $repository->findBy(array(),array('nom' => 'ASC'));
        return $this->render('liste_categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * Fonction qui sert à afficher les catégories sous forme de option pour une dataliste html.
     *
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function listOption(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Categorie::class);
        // La méthode findBy est identique à finAll si ce n'est que l'on peut y passer des paramètres.
        // La méthode findAll utilise d'ailleur findBy avec des paramètre par défaut. ==> findBy([]);
        $categories = $repository->findBy(array(),array('nom' => 'ASC'));
        return $this->render('liste_categorie/listOption.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * Fonction qui sert à afficher les catégories sous forme de select html.
     *
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function selectOption(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Categorie::class);
        // La méthode findBy est identique à finAll si ce n'est que l'on peut y passer des paramètres.
        // La méthode findAll utilise d'ailleur findBy avec des paramètre par défaut. ==> findBy([]);
        $categories = $repository->findBy(array(),array('nom' => 'ASC'));
        return $this->render('liste_categorie/selectOption.html.twig', [
            'categories' => $categories,
        ]);
    }


}
