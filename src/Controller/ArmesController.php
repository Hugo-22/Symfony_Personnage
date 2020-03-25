<?php

namespace App\Controller;


use App\Entity\Armes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArmesController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('armes/index.html.twig');
    }

    /**
     * @Route("/armes", name="armes")
     */
    public function armes()
    {
        Armes::creerArmes();
        return $this->render('armes/armes.html.twig', [
            "armes" => Armes::$armes
        ]);
    }

    /**
     * @Route("/armes/{nom}", name="afficher_arme")
     */
    public function afficherArme($nom) {

        Armes::creerArmes();
        $arme = Armes::getArmesParNom($nom);
        return $this->render('armes/arme.html.twig', [
            "arme" => $arme
        ]);

    }


   
}