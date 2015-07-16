<?php

namespace DJET\GimelaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

$session = new Session();
$session->start();
$session->set('login', 'jehrlich');
$session->set('statut', 'ADMINISTRATEUR');

class AcceuilController extends Controller
{
  /**
  * Menu principal
  *
  * @Route("/acceuil", name="acceuil")
  * @Method("GET")
  * @Template("DJETGimelaBundle:Acceuil:menuracine.html.twig")
  */
    public function menuracineAction()
    {
    return $this->render('DJETGimelaBundle:Acceuil:menuracine.html.twig', array(
          'login' => 'jehrlich',
	  'login_statut' => 'ADMINISTRATEUR'
        ));
    }
}
