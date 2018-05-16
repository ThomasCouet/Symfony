<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $array = array(
            "titre_page" => "Ceci est mon titre.",
            "navigation" => array(
                array("href" => "lien 1", "titre" => "titre 1"),
                array("href" => "lien 2", "titre" => "titre 2")
            )
        );
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', $array);
        return new Response($content);
    }
}