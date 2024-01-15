<?php

namespace App\Services\Contracts;

use App\Http\Requests\UserCreateRequest;

interface UserServices
{
    /**
     * Process logic register user
     *
     * @param  \App\Http\Requests\UserCreateRequest  $request
     *
     * @return void
     */
    public function registerUser(UserCreateRequest $request): void;
}
