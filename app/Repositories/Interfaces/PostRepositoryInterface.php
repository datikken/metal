<?php

namespace App\Repositories\Interfaces;
use App\Models\User;

interface PostRepositoryInterface
{
    public function all();

    public function singleByCategory($type, $id);
    public function allByCategory($type, $paginate);
    public function getById($type);
    public function getByTag($type);
}
