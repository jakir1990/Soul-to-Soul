<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Music;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Music controller.
 *
 * @Route("music")
 */
class MusicController extends Controller
{
    /**
     * Lists all music entities.
     *
     * @Route("/", name="music_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $musics = $em->getRepository('AppBundle:Music')->findAll();

        return $this->render('music/index.html.twig', array(
            'musics' => $musics,
        ));
    }

    /**
     * Creates a new music entity.
     *
     * @Route("/new", name="music_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $music = new Music();
        $form = $this->createForm('AppBundle\Form\MusicType', $music);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($music);
            $em->flush();

            return $this->redirectToRoute('music_show', array('id' => $music->getId()));
        }

        return $this->render('music/new.html.twig', array(
            'music' => $music,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a music entity.
     *
     * @Route("/{id}", name="music_show")
     * @Method("GET")
     */
    public function showAction(Music $music)
    {
        $deleteForm = $this->createDeleteForm($music);

        return $this->render('music/show.html.twig', array(
            'music' => $music,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing music entity.
     *
     * @Route("/{id}/edit", name="music_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Music $music)
    {
        $deleteForm = $this->createDeleteForm($music);
        $editForm = $this->createForm('AppBundle\Form\MusicType', $music);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('music_edit', array('id' => $music->getId()));
        }

        return $this->render('music/edit.html.twig', array(
            'music' => $music,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a music entity.
     *
     * @Route("/{id}", name="music_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Music $music)
    {
        $form = $this->createDeleteForm($music);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($music);
            $em->flush();
        }

        return $this->redirectToRoute('music_index');
    }

    /**
     * Creates a form to delete a music entity.
     *
     * @param Music $music The music entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Music $music)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('music_delete', array('id' => $music->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
