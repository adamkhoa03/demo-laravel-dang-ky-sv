<?php

namespace App\Services\Implement;

use App\Http\Requests\UserCreateRequest;
use App\Repositories\UserRepository;
use App\Services\Contracts\UserServices;

class UserServicesImpl implements UserServices
{
    /**
     * UserRepo
     *
     * @var \App\Repositories\UserRepository
     */
    private UserRepository $userRepository;

    /**
     * Process logic register user
     *
     * @param  \App\Http\Requests\UserCreateRequest  $request
     *
     * @return void
     */
    public function registerUser(UserCreateRequest $request): void
    {
        $this->userRepository->registerUser($request);
    }
}
