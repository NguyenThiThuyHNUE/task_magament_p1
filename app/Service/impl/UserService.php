<?php


namespace App\Service\impl;


use App\Repository\UserRepositoryInterface;
use App\Service\UserServiceInterface;
use App\User;

class UserService implements UserServiceInterface
{
    public $userRepository;

    public function __construct(UserRepositoryInterface $customerRepository)
    {
        $this->userRepository =$customerRepository;
    }
    public function getAll()
    {
       return $this ->userRepository->getAll();
    }
    public function edit($id)
    {
      return $this->userRepository->edit($id);
    }

    public function update($id, $request)
    {
        return $this->userRepository->update($id, $request);
    }
    public function show($id)
    {
       return $this-> userRepository->show($id);
    }
    public function delete($id)
    {
        return $this->userRepository->delete($id);
    }
    public function store($request)
    {
        $user=new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        return $this->userRepository->store($user);
    }

    public function show_profile()
    {
        return $this->userRepository->show_profile();
    }
}
