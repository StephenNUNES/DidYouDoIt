<?php 

namespace Projects\DidYouDoItBundle\DependencyInjection;

use Projects\DidYouDoItBundle\Entity\Task;
use Projects\DidYouDoItBundle\Entity\TaskList;

/**
 * Service allow application to persist data in data base with Doctrine
 */
class DoctrinePersistance implements PersistanceManager
{
    /** Doctrine manager
     */
    private $manager;

    /** Constructor of DoctrinePersistance with 2 parameters
     * @param doctrineEntityManager EntityManager from Doctrine service
     * @param googleClient Client of Google Taks API
     */
    public function __construct($doctrineEntityManager, $googleClient)
    {
        $this->manager = $doctrineEntityManager;
    }

    /** Find all task lists with their tasks
     */
    public function findTaskList()
    {
        $repository = $this->manager->getRepository('DidYouDoItBundle:TaskList');
        return $repository->findAll();
    }

    /** Find one task list by his id with their tasks
     */
    public function findTaskListById($id)
    {
        $repository = $this->manager->getRepository('DidYouDoItBundle:TaskList');
        return $repository->find($id);
    }

    /** Find all Tasks in one Tasklist
     */
    public function findAllTaskInOneTaskList(TaskList $tasklist)
    {
        $query = $this->manager->createQuery(
            'SELECT t
            FROM DidYouDoItBundle:Task t
            WHERE t.tasklist = :tasklistid
            ORDER BY t.checked ASC'
            )->setParameter('tasklistid', $tasklist->getTasklistId());
        $tasks = $query->getResult();
        return $tasks;
    }

    /** Create a new tasklist
     */
    public function persistTaskList(TaskList $tasklist)
    {
        $this->manager->persist($tasklist);
    }

    /** modify the task list
     */
    public function updateTaskList(TaskList $tasklist, $id)
    {
        return null;
    }

    /** Delete a task list and his tasks
     */
    public function removeTaskList(TaskList $tasklist)
    {
        $query = $this->manager->createQuery(
            'SELECT t
            FROM DidYouDoItBundle:Task t
            WHERE t.tasklist = :tasklistid'
            )->setParameter('tasklistid', $tasklist->getTasklistId());
        $tasks = $query->getResult();
        foreach ($tasks as $task)
        {
            $this->manager->remove($task);
        }
        $this->manager->remove($tasklist);
    }

    /** Find a Task by Id
     */
    public function findTaskById($id)
    {
        $repository = $this->manager->getRepository('DidYouDoItBundle:Task');
        return $repository->find($id);
    }

    /** add new task in a tasklist 
     */
    public function persistTask(Task $task)
    {
        $this->manager->persist($task);
    }

    /** modify label of task or if is checked
     * parameters must be optionnal
     */
    public function updateTask(Task $task, $newlabel, $checked)
    {
        return null;
    }

    /**
     * Allow persistance to flush on Doctrine
     */
    public function flush()
    {
        $this->manager->flush();
    }
}
