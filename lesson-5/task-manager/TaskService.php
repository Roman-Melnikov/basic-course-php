<?php

class TaskService
{
    public static function addComment(Comment $comment): void
    {
        $task = $comment->getTask();
        $user = $comment->getAuthor();
        $text = $comment->getText();

        $task->setComments($user->getUsername(), $text);
    }
}