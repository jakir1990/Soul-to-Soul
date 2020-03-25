<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Films;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Film controller.
 *
 * @Route("films")
 */
class FilmsController extends Controller
{
    /**
     * Lists all film entities.
     *
     * @Route("/", name="films_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $films = $em->getRepository('AppBundle:Films')->findAll();

        return $this->render('films/index.html.twig', array(
            'films' => $films,
        ));
    }

    /**
     * Creates a new film entity.
     *
     * @Route("/new", name="films_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $film = new Film();
        $form = $this->createForm('AppBundle\Form\FilmsType', $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($film);
            $em->flush();

            return $this->redirectToRoute('films_show', array('id' => $film->getId()));
        }

        return $this->render('films/new.html.twig', array(
            'film' => $film,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a film entity.
     *
     * @Route("/{id}", name="films_show")
     * @Method("GET")
     */
    public function showAction(Films $film)
    {
        $deleteForm = $this->createDeleteForm($film);

        return $this->render('films/show.html.twig', array(
            'film' => $film,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing film entity.
     *
     * @Route("/{id}/edit", name="films_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Films $film)
    {
        $deleteForm = $this->createDeleteForm($film);
        $editForm = $this->createForm('AppBundle\Form\FilmsType', $film);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('films_edit', array('id' => $film->getId()));
        }

        return $this->render('films/edit.html.twig', array(
            'film' => $film,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a film entity.
     *
     * @Route("/{id}", name="films_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Films $film)
    {
        $form = $this->createDeleteForm($film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($film);
            $em->flush();
        }

        return $this->redirectToRoute('films_index');
    }

    /**
     * Creates a form to delete a film entity.
     *
     * @param Films $film The film entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Films $film)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('films_delete', array('id' => $film->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
