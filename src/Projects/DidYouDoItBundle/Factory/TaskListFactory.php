<?php

namespace Projects\DidYouDoItBundle\Factory;

use Projects\DidYouDoItBundle\Entity\TaskList;

class TaskListFactory
{
	public function buildGoogleTaskListFromEntity (TaskList $entityTaskList)
	{
		$googleTaskList = new \Google_Service_Tasks_TaskList();
		$googleTaskList->setTitle($entityTaskList->getName());
		return $googleTaskList;
	}
	
	public function buildEntityFromGoogleTaskList(\Google_Service_Tasks_TaskList $googleTaskList)
	{
		$entityTaskList = new TaskList();
		$entityTaskList->setName($googleTaskList->getTitle());
		$entityTaskList->setTasklistId($googleTaskList->getId());
		return $entityTaskList;

	}
}
?>
