<?php 

namespace Projects\DidYouDoItBundle\DependencyInjection;


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

    /** find all task lists with their tasks
     */
    public function findTaskList()
    {
        
    }

    /** find one task list by his name with their tasks
     */
    public function findTaskListByName($name);
    {

    }

    /** create a new tasklist
     */
    public function persistTaskList(TaskList $tasklist);
    {
        $manager->persist($tasklist);
        $manager->flush();
    }

    /** modify the name of the task list
     */
    public function updateTaskList(TaskList $tasklist, $name);
    {

    }
    /** delete a task list
     */
    public function removeTaskList(Task $task);
    {

    }
    /** add new task in a tasklist 
     */
    public function persistTask(Task $task, TaskList $tasklist);
    {
        $task->tasklist = $tasklist;
        $manager->persist($task);
        $manager->flush();
    }

    /** modify label of task or if is checked
     * parameters must be optionnal
     */
    public function updateTask(Task $task, $newlabel, $checked);
    {

    }
}
