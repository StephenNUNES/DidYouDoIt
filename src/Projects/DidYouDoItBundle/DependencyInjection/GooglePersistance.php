<?php 

namespace Projects\DidYouDoItBundle\DependencyInjection;

use Projects\DidYouDoItBundle\Entity\Task;
use Projects\DidYouDoItBundle\Entity\TaskList;

/**
 * Service allow application to persist data in data base with Google
 */
class GooglePersistance implements PersistanceManager
{

    /** Wrapper of Google_Client
     */
    private $googleClient;

    /** Session for gogole client
     */
    private $session;

    /** Instance of Google_Service_Tasks
     */
    private $serviceTask;

    /** Constructor of DoctrinePersistance with 2 parameters
     * @param doctrineEntityManager EntityManager from Doctrine service
     * @param googleClient Client of Google Taks API
     */
    public function __construct($doctrineEntityManager, $googleClient, $session)
    {
        $this->googleClient = $googleClient->getGoogleClient();
        $this->googleClient->setScopes ( \Google_Service_Tasks::TASKS );
        $this->googleClient->setAccessType('offline');
        $this->session = $session;
        $this->serviceTask = new \Google_Service_Tasks($this->googleClient);
    }

    /*public function __construct($client, $session) {
        $this->client = $client->getGoogleClient ();
        $this->client->setScopes ( \Google_Service_Tasks::TASKS );
        $this->session = $session;

        parent::__construct ( $this->client );
    }*/


    public function authenticate($code)
    {
        /* Try catch à faire */

        $accessToken = $this->googleClient->authenticate($code);
        $this->session->set('access_token', $accessToken);
        $res = json_decode($accessToken);
        $this->session->set('refresh_token', $res->refresh_token);
    }

    public function createAuthUrl()
    {
        return $this->googleClient->createAuthUrl();
    }

    /** Allow access token for each request, and if the access token is expired, it is refresh
     */
    private function setAccessToken()
    {
        $this->googleClient->setAccessToken($this->session->get('access_token'));

        if ($this->googleClient->isAccessTokenExpired()) {
            $this->googleClient->refreshToken($this->session->get('refresh_token'));
            $this->session->set('access_token', $this->googleClient->getAccessToken());
        }
    } 

    /** Find all task lists with their tasks
     */
    public function findTaskList()
    {
        $this->setAccessToken();
        $taskListFromGoogle = $this->serviceTask->tasklists->listTasklists();
        $arrayTaskList = [];
        foreach ($taskListFromGoogle->getItems() as $taskList)
        {
            $taskListCreate = new TaskList();
            $taskListCreate->setName($taskList->getTitle());
            $taskListCreate->setTasklistId($taskList->getId());
            array_push($arrayTaskList, $taskListCreate);
        }
        return $arrayTaskList; 
    }

    /** Find one task list by his id with their tasks
     */
    public function findTaskListById($id)
    {
        $this->setAccessToken();
        $taskListByIdFromGoogle = $this->serviceTask->tasklists->get($id);
        $taskListCreate = new TaskList();
        $taskListCreate->setName($taskListByIdFromGoogle->getTitle());
        $taskListCreate->setTasklistId($taskListByIdFromGoogle->getId());
        return $taskListCreate;
    }

    /** Create a new tasklist
     */
    public function persistTaskList(TaskList $tasklist)
    {
        return null;
    }

    /** modify the task list
     */
    public function updateTaskList(TaskList $tasklist, $id)
    {
        return null;
    }
    /** delete a task list
     */
    public function removeTaskList(TaskList $tasklist)
    {
        return null;
    }
    /** Find a Task by Id
     */
    public function findTaskById($id)
    {
        return null;
    }
    /** add new task in a tasklist 
     */
    public function persistTask(Task $task)
    {
        $this->setAccessToken();
        $googleTask = new \Google_Service_Tasks_Task();
        //$googleTask->setStatus($task->getChecked());
        $googleTask->setStatus("needsAction");
        $googleTask->setTitle($task->getLibelle());
        $result = $this->serviceTask->tasks->insert($task->getTasklist()->getTasklistId(), $googleTask);

        return $result;
    }

    /** modify label of task or if is checked
     * parameters must be optionnal
     */
    public function updateTask(Task $task, $newlabel, $checked)
    {
        return null;
    }

    /** Find all task in the tasklist
     */
    public function findAllTaskInOneTaskList(TaskList $tasklist)
    {
        $this->setAccessToken();
        $tasks = $this->serviceTask->tasks->listTasks($tasklist->getTasklistid());
        $tasksEntities = array();
        foreach ($tasks->getItems() as $task)
        {
            $taskCreated = new Task();
            $taskCreated->setTaskId($task->getId()); 
            $taskCreated->setLibelle($task->getTitle()); 
            $taskCreated->setChecked($task->getStatus()); 
            array_push($tasksEntities, $taskCreated);
        }
        return $tasksEntities;
    }

    /**
     * Allow persistance to flush
     */
    public function flush()
    {
        return null;
    }


}
