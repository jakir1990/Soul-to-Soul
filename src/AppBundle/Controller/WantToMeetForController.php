<?php

namespace AppBundle\Controller;

use AppBundle\Entity\WantToMeetFor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Wanttomeetfor controller.
 *
 * @Route("wanttomeetfor")
 */
class WantToMeetForController extends Controller
{
    /**
     * Lists all wantToMeetFor entities.
     *
     * @Route("/", name="wanttomeetfor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $wantToMeetFors = $em->getRepository('AppBundle:WantToMeetFor')->findAll();

        return $this->render('wanttomeetfor/index.html.twig', array(
            'wantToMeetFors' => $wantToMeetFors,
        ));
    }

    /**
     * Creates a new wantToMeetFor entity.
     *
     * @Route("/new", name="wanttomeetfor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $wantToMeetFor = new Wanttomeetfor();
        $form = $this->createForm('AppBundle\Form\WantToMeetForType', $wantToMeetFor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($wantToMeetFor);
            $em->flush();

            return $this->redirectToRoute('wanttomeetfor_show', array('id' => $wantToMeetFor->getId()));
        }

        return $this->render('wanttomeetfor/new.html.twig', array(
            'wantToMeetFor' => $wantToMeetFor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a wantToMeetFor entity.
     *
     * @Route("/{id}", name="wanttomeetfor_show")
     * @Method("GET")
     */
    public function showAction(WantToMeetFor $wantToMeetFor)
    {
        $deleteForm = $this->createDeleteForm($wantToMeetFor);

        return $this->render('wanttomeetfor/show.html.twig', array(
            'wantToMeetFor' => $wantToMeetFor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing wantToMeetFor entity.
     *
     * @Route("/{id}/edit", name="wanttomeetfor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, WantToMeetFor $wantToMeetFor)
    {
        $deleteForm = $this->createDeleteForm($wantToMeetFor);
        $editForm = $this->createForm('AppBundle\Form\WantToMeetForType', $wantToMeetFor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('wanttomeetfor_edit', array('id' => $wantToMeetFor->getId()));
        }

        return $this->render('wanttomeetfor/edit.html.twig', array(
            'wantToMeetFor' => $wantToMeetFor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a wantToMeetFor entity.
     *
     * @Route("/{id}", name="wanttomeetfor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, WantToMeetFor $wantToMeetFor)
    {
        $form = $this->createDeleteForm($wantToMeetFor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($wantToMeetFor);
            $em->flush();
        }

        return $this->redirectToRoute('wanttomeetfor_index');
    }

    /**
     * Creates a form to delete a wantToMeetFor entity.
     *
     * @param WantToMeetFor $wantToMeetFor The wantToMeetFor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(WantToMeetFor $wantToMeetFor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('wanttomeetfor_delete', array('id' => $wantToMeetFor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
