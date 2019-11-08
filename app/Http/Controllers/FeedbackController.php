<?php

namespace App\Http\Controllers;

use App\Service\FeedbackServiceInterface;
use App\Service\UserServiceInterface;
use Illuminate\Http\Request;
use function Sodium\compare;

class FeedbackController extends Controller
{
    protected $feedBackService;
    protected $userService;
    public function __construct(FeedbackServiceInterface $feedBackService, UserServiceInterface $userService)
    {
        $this->feedBackService = $feedBackService;
        $this->userService= $userService;
        $this->middleware('auth');
    }


    public function index()
    {
        $feedbacks= $this->feedBackService->getAll();
        $user= $this->userService->show_profile();
        return view('feedback.index',compact('feedbacks','user'));
    }


    public function create()
    {
        $user= $this->userService->show_profile();
        return view('feedback.createFeedback',compact('user'));
    }

    public function store(Request $request)
    {

        $feedbacks= $this->feedBackService->store($request);
        return redirect()->route('feedbacks.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $feedback= $this->feedBackService->edit($id);
        return view('feedback.editFeedback',compact('feedback'));

    }

    public function update(Request $request, $id)
    {
        $feedbacks= $this->feedBackService->update($request,$id);
        return redirect()->route('feedbacks.index');
    }


    public function destroy($id)
    {
        $feedbacks= $this->feedBackService->destroy($id);
        return redirect()->route('feedbacks.index');
    }

}
