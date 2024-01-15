<?php

namespace App\Repositories;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Orkhanahmadov\EloquentRepository\EloquentRepository;

class UserRepository extends EloquentRepository
{
     protected $entity = User::class;

    /**
     * Handle register user
     *
     * @param  \App\Http\Requests\UserCreateRequest  $user
     */
     public function registerUser(UserCreateRequest $user) {
         $this->model->create($user->toArray());
     }
}
