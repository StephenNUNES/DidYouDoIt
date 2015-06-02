<?php 

namespace Projects\DidYouDoItBundle\DependencyInjection;

use Projects\DidYouDoItBundle\Entity\Task.php;
use Projects\DidYouDoItBundle\Entity\TaskList.php;

/** Define behaviour to persist data of DidYouDoIt
 */
interface PersistanceManager
{
    /** find all task lists with their tasks
     */
    public function findTaskList();

    /** find one task list by his name with their tasks
     */
    public function findTaskListByName($name);

    /** create a new tasklist
     */
    public function persistTaskList(TaskList $tasklist);

    /** modify the name of the task list
     */
    public function updateTaskList(TaskList $tasklist, $name);

    /** delete a task list
     */
    public function removeTaskList(Task $task);

    /** add new task in a tasklist 
     */
    public function persistTask(Task $task, TaskList $tasklist);

    /** modify label of task or if is checked
     * parameters must be optionnal
     */
    public function updateTask(Task $task, $newlabel, $checked);

}
