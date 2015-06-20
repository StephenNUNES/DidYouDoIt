<?php 

namespace Projects\DidYouDoItBundle\DependencyInjection;

use Projects\DidYouDoItBundle\Entity\Task;
use Projects\DidYouDoItBundle\Entity\TaskList;

/** Define behaviour to persist data of DidYouDoIt
 */
interface PersistanceManager
{
    /** find all task lists with their tasks
     */
    public function findTaskList();

    /** find one task list by his id with their tasks
     */
    public function findTaskListById($id);

    /** create a new tasklist
     */
    public function persistTaskList(TaskList $tasklist);

    /** modify the name of the task list
     */
    public function updateTaskList(TaskList $tasklist, $id);

    /** Delete a task list and his tasks
     */
    public function removeTaskList(TaskList $tasklist);

    /** Find a Task by Id
     */
    public function findTaskById($id);

    /** add new task in a tasklist 
     */
    public function persistTask(Task $task);

    /** modify label of task or if is checked
     * parameters must be optionnal
     */
    public function updateTask(Task $task, $newlabel, $checked);

    /** Find all task in the tasklist
     */
    public function findAllTaskInOneTaskList(TaskList $tasklist);

    /** Allow persistance to commit changes
     */
    public function flush();

}
