<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pub;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Pub controller.
 *
 * @Route("pub")
 */
class PubController extends Controller
{
    /**
     * Lists all pub entities.
     *
     * @Route("/", name="pub_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pubs = $em->getRepository('AppBundle:Pub')->findAll();

        return $this->render('pub/index.html.twig', array(
            'pubs' => $pubs,
        ));
    }

    /**
     * Creates a new pub entity.
     *
     * @Route("/new", name="pub_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pub = new Pub();
        $form = $this->createForm('AppBundle\Form\PubType', $pub);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pub);
            $em->flush();

            return $this->redirectToRoute('pub_show', array('id' => $pub->getId()));
        }

        return $this->render('pub/new.html.twig', array(
            'pub' => $pub,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pub entity.
     *
     * @Route("/{id}", name="pub_show")
     * @Method("GET")
     */
    public function showAction(Pub $pub)
    {
        $deleteForm = $this->createDeleteForm($pub);

        return $this->render('pub/show.html.twig', array(
            'pub' => $pub,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pub entity.
     *
     * @Route("/{id}/edit", name="pub_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pub $pub)
    {
        $deleteForm = $this->createDeleteForm($pub);
        $editForm = $this->createForm('AppBundle\Form\PubType', $pub);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pub_edit', array('id' => $pub->getId()));
        }

        return $this->render('pub/edit.html.twig', array(
            'pub' => $pub,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pub entity.
     *
     * @Route("/{id}", name="pub_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pub $pub)
    {
        $form = $this->createDeleteForm($pub);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pub);
            $em->flush();
        }

        return $this->redirectToRoute('pub_index');
    }

    /**
     * Creates a form to delete a pub entity.
     *
     * @param Pub $pub The pub entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pub $pub)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pub_delete', array('id' => $pub->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
