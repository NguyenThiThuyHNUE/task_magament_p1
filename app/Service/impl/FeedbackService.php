<?php


namespace App\Service\impl;


use App\Feedback;
use App\Repository\FeedbackRepositoryInterface;
use App\Service\FeedbackServiceInterface;
use Illuminate\Support\Facades\Auth;

class FeedbackService implements FeedbackServiceInterface
{
    protected $feedBackRepository;

    public function __construct(FeedbackRepositoryInterface $blogRepository)
    {
        $this->feedBackRepository = $blogRepository;
    }

    public function getAll()
    {
        return $this->feedBackRepository->getAll();
    }


    public function destroy($id)
    {
        return $this->feedBackRepository->destroy($id);
    }

    public function store($request)
    {
        $feedbacks = new Feedback();
        $feedbacks->content = $request->input('content');
        $feedbacks->user_id = Auth::user()->id;
        $feedbacks->name_user = Auth::user()->name;

        return $this->feedBackRepository->store($feedbacks);
    }

    public function edit($id)
    {
        return $this->feedBackRepository->edit($id);
    }

    public function update($request, $id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->content = $request->input('content');
        return $this->feedBackRepository->store($feedback);

    }

}
