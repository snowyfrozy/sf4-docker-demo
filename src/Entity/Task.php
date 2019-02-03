<?php
/**
 * Created by PhpStorm.
 * User: k4t
 * Date: 03.02.2019
 * Time: 22:02
 */

namespace App\Entity;

class Task
{
	protected $task;
	protected $dueDate;
	protected $name;

	public function getTask()
	{
		return $this->task;
	}

	public function setTask($task)
	{
		$this->task = $task;
	}

	public function getDueDate()
	{
		return $this->dueDate;
	}

	public function setDueDate(\DateTime $dueDate = null)
	{
		$this->dueDate = $dueDate;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName( $name ): void {
		$this->name = $name;
	}
}