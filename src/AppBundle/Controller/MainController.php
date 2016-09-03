<?php

namespace AppBundle\Controller;

use AppBundle\Form\GameFormType;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Game;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homepageAction()
    {
        $games = $this->get('gl.games')->getGames();
        return $this->render('main/list.html.twig',
            array('games' => $games));
    }

    /**
     * @Route("/game/new")
     */
    public function newAction(Request $request)
    {
        $game = new Game();
        $form = $this->createForm(GameFormType::class, $game);
        // only handles data on POST
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($game);
            $em->flush();
            return $this->redirectToRoute('app_main_showall');
        }

        return $this->render('main/new.html.twig', [
            'gameForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/game/show/{id}")
     */
    public function showAction($id)
    {
        $game = $this->getDoctrine()
            ->getRepository('AppBundle:Game')
            ->find($id);

        if (!$game) {
            throw $this->createNotFoundException(
                'No game found for id ' . $id
            );
        }

        return $this->render('main/list.html.twig');
    }

    /**
     * @Route("/game/update/{id}")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $game = $em->getRepository('AppBundle:Game')->find($id);

        if (!$game) {
            throw $this->createNotFoundException(
                'Aucun jeu ne porte l\'id : ' . $id
            );
        }

        $form = $this->createForm(GameFormType::class, $game);
        // only handles data on POST
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($game);
            $em->flush();

            return $this->redirectToRoute('app_main_showall');
        }

        return $this->render('main/update.html.twig', [
            'gameForm' => $form->createView()
        ]);
    }


    /**
     * @Route("/game/delete/{id}")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $game = $em->getRepository('AppBundle:Game')->find($id);

        if ($game) {
            $em->remove($game);
            $em->flush();
        } else {
            throw new EntityNotFoundException('Il n\'y a rien à supprimer ici...');
        }

        return $this->redirectToRoute('app_main_showall');
    }
}