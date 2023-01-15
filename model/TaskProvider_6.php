<?php


class TaskProvider
{
    private array $tasks = [];

    public function getTasks(string $task, bool $isDone): ?Task
    {
        $taskname = $this->tasks[$task] ?? null;
        /*Часть кода из UserProvider
        $expectedPassword = $this->accounts[$username] ?? null;

        if ($expectedPassword === $password) {
            return new User($username);
        }*/

        return null;
    }
}