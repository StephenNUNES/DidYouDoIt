<?php

namespace Projects\DidYouDoItBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TaskController extends Controller
{
    //public function indexAction($name)
    //{
    //    return $this->render('DidYouDoItBundle:Default:index.html.twig', array('name' => $name));
    //}

    /** Allow users to create a new task for a tasklist
     */
    public function createAction()
    {

    }

    /** Allow users to modify the libelle or if the task is checked
     */
    public function modifyLibelleOrCheckedAction($libelle)
    {
        
    }
}
