<?php

namespace App\Controller;

use Twig\Enviroment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    
    
    #[Route(path: '/', name: 'homepage')]
    public function home()
    {        
        return $this->render("home/index.html.twig");
    }

    #[Route(path: '/panier', name: 'panier')]
    public function panier()
    {        
        return $this->render("home/panier.html.twig");
    }

    #[Route(path: '/produit', name: 'produit')]
    public function produit()
    {        
        return $this->render("home/produit.html.twig");
    }

    public function menu(){
        $listMenu = [
            ['title'=> "Mon blog", "text"=>'Accueil', "url"=> $this->generateUrl('homepage')],
            ['title'=> "Connexion", "text"=>'Connexion', "url"=> $this->generateUrl('app_login'), "user"=>false],
            ['title'=> "Création de compte", "text"=>'Création de compte', "url"=> $this->generateUrl('app_register'), "user"=>false],
            ['title'=> "Déconnexion", "text"=>'Déconnexion', "url"=> $this->generateUrl('app_logout'), "user"=>true],
        ];

        return $this->render("parts/menu.html.twig", ["listMenu" => $listMenu]);
    }


    
}
