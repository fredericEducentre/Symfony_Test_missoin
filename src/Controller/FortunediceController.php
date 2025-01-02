<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FortunediceController extends AbstractController
{
    #[Route('/fortunedice', name: 'app_fortunedice')]
    public function index(): Response
    {
        return $this->render('fortunedice/index.html.twig', [
            'controller_name' => 'FortunediceController',
        ]);
    }
    #[Route('/fortunedice/roll', name: 'app_fortunedice_roll')]
    function rollDice()
    {
        $random_number = rand(1, 6);
        $discountCode = "";
        switch ($random_number) {
            case 1:
                $discountCode = "BUDDY10";
                break;
            case 2:
                $discountCode = "BUDDY20";
                break;
            case 3:
                $discountCode = "BUDDY30";
                break;
            case 4:
                $discountCode = "BUDDY40";
                break;
            case 5:
                $discountCode = "BUDDY50";
                break;
            case 6:
                $discountCode = "BUDDY60";
                break;
        }

        return $this->render('fortunedice/rollResult.html.twig', [
            'discountCode' => $discountCode,
            'diceResult' => $random_number
        ]);
    }
}
