<?php 

namespace Projects\DidYouDoItBundle\DependencyInjection;


/**
 * Service allow application to persist data in data base with Google
 */
class GooglePersistance implements PersistanceManager
{
    /** Constructor of GooglePersistance with 2 parameters
     * @param doctrineEntityManager EntityManager from Doctrine service
     * @param googleClient Client of Google Taks API
     */
    public function __construct($doctrineEntityManager, $googleClient)
    {
    }

    /** find all task lists with their tasks
     */
    public function findtasklist()
    {

    }

    /** find one task list by his name with their tasks
     */
    public function findtasklistbyname($name);
    {

    }
    /** create a new tasklist
     */
    public function persisttasklist(tasklist $tasklist);
    {

    }
    /** modify the name of the task list
     */
    public function updatetasklist(tasklist $tasklist, $name);
    {

    }
    /** delete a task list
     */
    public function removetasklist(task $task);
    {

    }
    /** add new task in a tasklist 
     */
    public function persisttask(task $task, tasklist $tasklist);
    {

    }
    /** modify label of task or if is checked
     * parameters must be optionnal
     */
    public function updatetask(task $task, $newlabel, $checked);
    {

    }
}
