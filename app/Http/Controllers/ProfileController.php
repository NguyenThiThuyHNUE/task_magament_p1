<?php

namespace App\Http\Controllers;

use App\Service\UserServiceInterface;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public $userService;

    public function __construct(UserServiceInterface $customerService)
    {
        $this->userService = $customerService;
        $this->middleware('auth');
    }

    public function show(){
        $profile= $this->userService->show_profile();
        return view('profile.show',compact('profile'));
    }
}
