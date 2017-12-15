<?php

namespace Taseera\BackendBundle\Controller;

use Taseera\BackendBundle\Entity\TUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tuser controller.
 *
 */
class TUserController extends Controller
{
    /**
     * Lists all tUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tUsers = $em->getRepository('TaseeraBackendBundle:TUser')->findBy(array(), array('id' => 'desc'));

        return $this->render('TaseeraBackendBundle:tuser:index.html.twig', array(
            'tUsers' => $tUsers,
        ));
    }

    /**
     * Creates a new tUser entity.
     *
     */
    public function newAction(Request $request)
    {
        $tUser = new Tuser();
        $form = $this->createForm('Taseera\BackendBundle\Form\TUserType', $tUser);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $dtRegDate = new \DateTime();
            $b_enabled = 1;
            $b_active = 1;
            $bCompany = 0; // To see it again
            $dtAccess = new \DateTime();
            $s_access = $request->getClientIp();
            $em = $this->getDoctrine()->getManager();
            $tUser->setDtRegDate($dtRegDate);
            $tUser->setBEnabled($b_active);
            $tUser->setBEnabled($b_enabled);
            $tUser->setBActive($b_active);
            $tUser->setBCompany($bCompany);
            $tUser->setSAccessIp($s_access);
            $tUser->setDtAccessDate($dtAccess);
            $em->persist($tUser);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('msg', 'تم اضافة المستخدم بنجاح');
            return $this->redirectToRoute('tuser_index');
        }
        return $this->render('TaseeraBackendBundle:tuser:new.html.twig', array(
            'tUser' => $tUser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tUser entity.
     *
     */
    public function showAction(TUser $tUser)
    {
        $deleteForm = $this->createDeleteForm($tUser);

        return $this->render('TaseeraBackendBundle:tuser:show.html.twig', array(
            'tUser' => $tUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tUser entity.
     *
     */
    public function editAction(Request $request, TUser $tUser)
    {
        $deleteForm = $this->createDeleteForm($tUser);
        $editForm = $this->createForm('Taseera\BackendBundle\Form\TUserType', $tUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tuser_edit', array('id' => $tUser->getId()));
        }

        return $this->render('TaseeraBackendBundle:tuser:edit.html.twig', array(
            'tUser' => $tUser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tUser entity.
     *
     */
    public function deleteUserAction(Request $request, TUser $tUser)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tUser);
            $em->flush();
            return $this->redirectToRoute('tuser_index');
    }

    public function deleteAction(Request $request, TUser $tUser)
    {
        $form = $this->createDeleteForm($tUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tUser);
            $em->flush();
        }

        return $this->redirectToRoute('tuser_index');
    }

    /**
     * Creates a form to delete a tUser entity.
     *
     * @param TUser $tUser The tUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TUser $tUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tuser_delete', array('id' => $tUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
