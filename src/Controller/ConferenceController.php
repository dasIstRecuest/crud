<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/conference", name="conference")
     */
    public function index( Request $request ): Response
    {
      //  return $this->render('conference/index.html.twig', [
      //      'controller_name' => 'ConferenceController',
      //  ]);
        $greet =    '';
        if( $name = $request->query->get('hello') ) {
            $greet = sprintf( '<h1>Hello %s!</h1>', htmlspecialchars($name) );
        }
        $outline = '<html><body>' . $greet . '<img src="/images/under-construction.gif"/> </body></html>';
        return new Response( $outline );
    }
}
