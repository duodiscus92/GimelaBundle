<?php
namespace DJET\GimelaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DJET\GimelaBundle\Entity\GmlAeronef;
use DJET\GimelaBundle\Form\Aeronef\GmlAeronefType;
use DJET\GimelaBundle\Entity\FiltreAeronef;
use DJET\GimelaBundle\Form\Aeronef\FiltreAeronefType;
use DJET\GimelaBundle\Entity\SupprAeronef;
use DJET\GimelaBundle\Form\Aeronef\SupprAeronefType;

/**
 *@Route("/aeronef")
 */
class AeronefController extends Controller
{
  /**
  * Create a new  aeronef
  *
  * @Route("/add/{createur}", name="aeronef_ajoute")
  * @Method({"GET", "POST"})
  * @Template("DJETGimelaBundle:Aeronef:formadd.html.twig")
  */
 
  public function addAction(Request $request, $createur)
  {

    // Création de l'entité
    $aeronef = new GmlAeronef();
    $aeronef->setAeroDate(new \Datetime());
    // recupérer l'entité du createur
    //$createur = $request->query->get('createur');
    $repository = $this->getDoctrine()->getManager()->getRepository('DJETGimelaBundle:GmlUser');
    $createurentity = $repository->findOneByUsrLogin($createur);
    //hydrater le createur et la date
    $aeronef->setAeroCreateur($createurentity);

    // hydration de l'entité par POST et formulaire
    $form = $this->createForm(new GmlAeronefType(), $aeronef);
    // test si GET/POST
    if ($request->getMethod() == 'POST') {
    	$form->handleRequest($request);
    	if($form->isValid()){
		if ($form->get('Créer')->isClicked()) {
    			//recuperation de l'entity manager
    			$em = $this->getDoctrine()->getManager();
    			// on persiste l'entite
    			$em->persist($aeronef);
    			// inscription des valeurs
    			$em->flush();
			//$request->getSession()->getFlashBag()->add('info', 'Un nouvel aeronef a ete cree');
		    	return $this->render('DJETGimelaBundle:Aeronef:show.html.twig', array(
        			'titre_onglet' => "Création aéronef",
        			'titre_page' => "Nouvel  aéronef",
        			'operation' => "a été créé",
 				'immat' => $aeronef->getAeroImmat(),
				'type' => $aeronef->getAeroType(),
				'statut' => $aeronef->getAeroStatut()== 1 ? 'Remorqueur' : 'Planeur',
				'envol' => $aeronef->getAeroEnvol() == 1 ? "Aeronef à dispositif d'envol incorporé" : 'Planeur Pur',
				'createur' => $aeronef->getAeroCreateur()->getUsrLogin()
				));
		}
		else
		        return $this->redirect($this->generateUrl('acceuil'));
			
    	}
    }
    // si on est là c'est qu'on est arrivé par GET ou pas valid ou annuler
    return $this->render('DJETGimelaBundle:Aeronef:formadd.html.twig', array(
	'form_titre' => "Creation d'un nouvel aeronef",
     	'form' => $form->createView(),
        ));
  }
  
     /**
     * Lists all Aeronef entities.
     *
     * @Route("/list", name="aeronef_list")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function listAction(Request $request)
    {
        // hydration de l'entité par POST et formulaire
	$filtreaeronef = new FiltreAeronef();
        $form = $this->createForm(new FiltreAeronefType(), $filtreaeronef);
        // test si GET/POST
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
	    if ($form->isValid()) 
   		$results = $this->getDoctrine()->getManager()->getRepository('DJETGimelaBundle:GmlAeronef')
			->findFilteredAeronef($form->getData());
	    return array(
		'entities' => $results,
            );
	}
        else {
	    // si on est là c'est qu'on est arrivé par GET
	    return $this->render('DJETGimelaBundle:Aeronef:filtre.html.twig', array(
		'form_titre' => "Lister des aeronefs selon le filtre",
            	'form' => $form->createView(),
            ));
        }

	// récupérer tous les aeronefs
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('DJETGimelaBundle:GmlAeronef')->findAll();

	$quantites = $em->getRepository('DJETGimelaBundle:GmlAeronef')->getNbAeronef();
	$remorqueurs = $em->getRepository('DJETGimelaBundle:GmlAeronef')->getNbRemorqueur();
	$planeurs = $em->getRepository('DJETGimelaBundle:GmlAeronef')->getNbPlaneur();

        return array(
           'entities' => $entities,
           'quantites' => $quantites,
           'remorqueurs' => $remorqueurs,
           'planeurs' => $planeurs,
        );
    }

     /**
     * Modify an existing aeronef
     *
     * @Route("/modif/{id}", name="aeronef_modif")
     * @Method({"GET", "POST"})
     * @Template("DJETGimelaBundle:Aeronef:formmodif.html.twig")
     */
    public function modifyAction($id, Request $request)
    {
	//récuparartion des valeurs de l'article $id
	$aeronef = $this->getDoctrine()->getManager()->getRepository("DJETGimelaBundle:GmlAeronef")->find($id);
	//creation du formulaire et initialisation avec ces valeurs
	$form = $this->createForm(new GmlAeronefType(), $aeronef);
	// test si GET/POST
    	if ($request->getMethod() == 'POST') {
        	$form->handleRequest($request);
        	if($form->isValid()){
			if ($form->get('Créer')->isClicked()) {
        	        	//recuperation de l'entity manager
                		$em = $this->getDoctrine()->getManager();
                		// on persiste l'entite
                		$em->persist($aeronef);
                		// inscription des valeurs
                		$em->flush();
                		//$request->getSession()->getFlashBag()->add('info', 'Un nouvel aeronef a ete modifié');
    				return $this->render('DJETGimelaBundle:Aeronef:show.html.twig', array(
        				'titre_onglet' => "Modification aéronef",
			        	'titre_page' => "Mise à jour d'un aéronef",
        				'operation' => "a été mis à jour",
					'immat' => $aeronef->getAeroImmat(),
        				'type' => $aeronef->getAeroType(),
        				'statut' => $aeronef->getAeroStatut()== 1 ? 'Remorqueur' : 'Planeur',
        				'envol' => $aeronef->getAeroEnvol() == 1 ? "Aeronef à dispositif d'envol incorporé" : 'Planeur Pur',
        				'createur' => $aeronef->getAeroCreateur()->getUsrLogin()
        			));
			}
			else
		        	return $this->redirect($this->generateUrl('acceuil'));
	
		}
    	}
	// a ce stade on est entré dans la fonction par une GET et on affiche le formulaire
	return $this->render('DJETGimelaBundle:Aeronef:formmodif.html.twig', array(
		'form_titre' => "Modification d'un aeronef",
  		'form' => $form->createView(),
        ));
   }
 
    /**
     * Delete an existing aeronef
     *
     * @Route("/suppr/{id}", name="aeronef_suppr")
     * @Method({"GET", "POST"})
     * @Template("DJETGimelaBundle:Aeronef:suppr.html.twig")
     */
    public function deleteAction(Request $request, $id)
    {
	//récuparartion des valeurs de l'article $id
	$aeronef = $this->getDoctrine()->getManager()->getRepository("DJETGimelaBundle:GmlAeronef")->find($id);
	//creation du formulaire et initialisation avec ces valeurs
	$suppraeronef = new SupprAeronef();
        $form = $this->createForm(new SupprAeronefType(), $suppraeronef);
	// test si GET/POST
    	if ($request->getMethod() == 'POST') {
        	$form->handleRequest($request);
        	if($form->isValid()){
			if ($form->get('Supprimer')->isClicked()) {
                		//recuperation de l'entity manager
                		$em = $this->getDoctrine()->getManager();
                		// on persiste l'entite
                		$em->remove($aeronef);
                		// inscription des valeurs
                		$em->flush();
			}
		        return $this->redirect($this->generateUrl('acceuil'));
		}
    	}
	// a ce stade on est entré dans la fonction par une GET et on affiche le formulaire
	return $this->render('DJETGimelaBundle:Aeronef:suppr.html.twig', array(
        	'titre_onglet' => "Suppression d'un aéronef",
		'titre_page' => "Suppression d'un aéronef",
        	'operation' => "va être supprimé",
		'immat' => $aeronef->getAeroImmat(),
        	'type' => $aeronef->getAeroType(),
        	'statut' => $aeronef->getAeroStatut()== 1 ? 'Remorqueur' : 'Planeur',
        	'envol' => $aeronef->getAeroEnvol() == 1 ? "Aeronef à dispositif d'envol incorporé" : 'Planeur Pur',
        	'createur' => $aeronef->getAeroCreateur()->getUsrLogin(),
		'form_titre' => "Etes vous sur de vouloir supprimer cet aeronef ?",
  		'form' => $form->createView(),
        ));
    }

 }
