<?php

namespace App\Http\Controllers;

use App\Service\UserServiceInterface;
use App\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userService;
    public function __construct(UserServiceInterface $customerService)
    {
        $this->userService = $customerService;
        $this->middleware('auth');
    }


    public function home(){
        return view('home');
    }

    public function index(){
        $users = $this->userService->getAll();
        return view('admin.list',compact('users'));
    }

    public function create(){

        return view('createUser');

    }
    public function store(Request $request ){

        $users= $this->userService->store($request);
        return redirect()->route('user.index',compact('users'));

    }

    public function show($id){

        $user= $this->userService->show($id);

        return view('showUser_id',compact('user'));

    }

    public function edit( $id ){
//    if(Gate::allows('CRUD-user')){
//        return abort('403');
//    }

        $users = $this->userService->edit($id);

        return view('editUser',compact('users'));

    }

    public function update($id ,Request $request){

        $users =  $this->userService-> update($id, $request);

        return redirect()-> route('user.index');

    }

    public function delete($id){
        $users = $this->userService->delete($id);
        return redirect()-> route('user.index');
    }
}
