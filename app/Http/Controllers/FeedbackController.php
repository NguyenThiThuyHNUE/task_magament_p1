<?php

namespace App\Http\Controllers;

use App\Service\FeedbackServiceInterface;
use Illuminate\Http\Request;
use function Sodium\compare;

class FeedbackController extends Controller
{
    protected $feedBackService;

    public function __construct(FeedbackServiceInterface $feedBackService)
    {
        $this->feedBackService = $feedBackService;
//        $this->middleware('auth');
    }


    public function index()
    {
        $feedbacks= $this->feedBackService->getAll();
        return view('feedback.index',compact('feedbacks'));
    }


    public function create()
    {
        return view('feedback.createFeedback');
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
