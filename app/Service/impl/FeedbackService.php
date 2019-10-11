<?php


namespace App\Service\impl;


use App\Feedback;
use App\Repository\FeedbackRepositoryInterface;
use App\Service\FeedbackServiceInterface;

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
        $feedbacks->name = $request->input('name');
        $feedbacks->content = $request->input('content');
        return $this->feedBackRepository->store($feedbacks);
    }

    public function edit($id)
    {
        return $this->feedBackRepository->edit($id);
    }

    public function update($request, $id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->name = $request->input('name');
        $feedback->content = $request->input('content');
        return $this->feedBackRepository->store($feedback);

    }

}
