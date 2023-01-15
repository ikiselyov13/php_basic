<?php

class Task 
{
    public string $task;
    public bool $isDone = false;

    public function __construct (string $task) 
    {
        $this->task = $task;
        $this->isDone = $isDone;
    }

    public function getTask(): string 
    {
       return $this->task;
    }
}