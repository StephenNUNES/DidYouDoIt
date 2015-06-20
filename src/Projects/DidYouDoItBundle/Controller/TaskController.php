<?php

namespace Projects\DidYouDoItBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Projects\DidYouDoItBundle\Entity\Task;
use Projects\DidYouDoItBundle\Form\TaskType;

/**
 * Task controller.
 *
 */
class TaskController extends Controller
{

    /**
     * Lists all Task entities.
     *
     */
    /*public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DidYouDoItBundle:Task')->findAll();

        return $this->render('DidYouDoItBundle:Task:index.html.twig', array(
            'entities' => $entities,
        ));
    }*/
    
    /**
     * Creates a new Task entity.
     *
     */
    public function createAction(Request $request, $idTaskList)
    {
		$persistance = $this->get('persistance');
		$entityTaskList = $persistance->findTaskListById($idTaskList);
        $entity = new Task();
        $entity->setChecked(false);
        $entity->setTasklist($entityTaskList);

        $form = $this->createCreateForm($entity, $idTaskList);
        $form->handleRequest($request);

        if ($form->isValid()) {
            //$em = $this->getDoctrine()->getManager();
            $persistance->persistTask($entity);
            //$em->persist($entity);
            $persistance->flush();
            //$em->flush();

            //return $this->redirect($this->generateUrl('did_you_do_it_get_all_tasklist', array('id' => $entity->getTaskId())));
            return $this->redirect($this->generateUrl('did_you_do_it_get_one_tasklist', array('id' => $idTaskList)));
        }

        return $this->render('DidYouDoItBundle:Task:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Task entity.
     *
     */
    
    public function newAction($idTaskList)
    {
        $entity = new Task();
        $form = $this->createCreateForm($entity, $idTaskList);

        return $this->render('DidYouDoItBundle:Task:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Task entity.
     *
     * @param Task $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Task $entity, $idTaskList)
    {
        $taskType = $this->get('TaskType');
        $taskType->setCreateMode(true);
        $form = $this->createForm($taskType, $entity, array(
            'action' => $this->generateUrl('did_you_do_it_create_task', array('idTaskList' => $idTaskList)),
            'method' => 'POST',
            
        ));


        return $form;
    }
    /**
     * Edits an existing Task entity.
     *
     */
    public function modifyAction(Request $request, $idTask, $idTaskList)
    {
        $persistance = $this->get('persistance');
        //$em = $this->getDoctrine()->getManager();
        $entity = $persistance->findTaskById($idTask);
        //$entity = $em->getRepository('DidYouDoItBundle:Task')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Task entity.');
        }

        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity, $idTaskList);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $persistance->flush();
            //$em->flush();

            //return $this->redirect($this->generateUrl('did_you_do_it_modify_task_from_tasklist', array('idTask' => $idTask, 'idTaskList' => $idTaskList)));
            return $this->redirect($this->generateUrl('did_you_do_it_get_one_tasklist', array('id' => $idTaskList)));
        }

        return $this->render('DidYouDoItBundle:Task:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Task entity.
     *
     */
    public function editAction($idTaskList, $idTask)
    {
        $persistance = $this->get('persistance');
        //$em = $this->getDoctrine()->getManager();
        $entity = $persistance->findTaskById($idTask);
        //$entity = $em->getRepository('DidYouDoItBundle:Task')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Task entity.');
        }

        $editForm = $this->createEditForm($entity, $idTaskList);
        //$deleteForm = $this->createDeleteForm($idTask);

        return $this->render('DidYouDoItBundle:Task:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Task entity.
    *
    * @param Task $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Task $entity, $idTaskList)
    {
        $taskType = $this->get('TaskType');
        $taskType->setCreateMode(false);
        $form = $this->createForm($taskType, $entity, array(
            'action' => $this->generateUrl('did_you_do_it_modify_task_from_tasklist', array('idTask' => $entity->getTaskId(), 'idTaskList' => $idTaskList)),
            'method' => 'PUT',
        ));
        return $form;
    }
    /**
     * Creates a form to delete a Task entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
 *//*
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('task_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }*/
    /**
     * Deletes a Task entity.
     *
     */
    /*
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DidYouDoItBundle:Task')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Task entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('task'));
    }
     */


    /**
     * Finds and displays a Task entity.
     *
     */
    /*
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DidYouDoItBundle:Task')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Task entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DidYouDoItBundle:Task:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }
     */
}
