<?php


namespace App\Repository\impl;


use App\Feedback;
use App\Repository\BillRerositoryInterface;
use App\Repository\FeedbackRepositoryInterface;

class FeedbackRepository implements FeedbackRepositoryInterface
{
    protected $feedback;
    public function __construct(Feedback $feedback)
    {
        $this->feedback =$feedback;
    }

    public function getAll()
    {
//        return  $this->feedback->all();
        return Feedback::all();
    }

    public function destroy($id)
    {
       $feedback= $this->feedback->findOrFail($id);
       return $feedback->delete();
    }

//    public function findbyid($id)
//    {
//        // TODO: Implement findbyid() method.
//    }
    public function store($feedback)
    {

        return $feedback->save();
    }

    public function edit($id)
    {
        $feedback= $this->feedback->findOrFail($id);
        return $feedback;
    }

    public function update($request, $id)
    {
        $feedback= Feedback::findOrFail($id);
        return $feedback->update($request->all());
    }
}
