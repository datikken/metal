<?php

namespace App\Repositories\Interfaces;
use App\Models\User;

interface CategoryRepositoryInterface
{
    public function all();
    public function getById($id);
}
