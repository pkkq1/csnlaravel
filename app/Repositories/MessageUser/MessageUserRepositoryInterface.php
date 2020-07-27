<?php
namespace App\Repositories\MessageUser;

interface MessageUserRepositoryInterface
{
    /**
     * Get all posts only published
     * @return mixed
     */
    public function getAllPublished();

    /**
     * Get post only published
     * @return mixed
     */
    public function findOnlyPublished($id);
}
