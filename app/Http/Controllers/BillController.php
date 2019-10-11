<?php

namespace App\Http\Controllers;

use App\Service\BillServiceInterface;
use Illuminate\Http\Request;

class BillController extends Controller
{
    protected $billServise;
    public function __construct(BillServiceInterface $billService)
    {
        $this->billServise=$billService;
        $this->middleware('auth');
    }

    public function index(){
        $bills= $this->billServise->getAll();
        return view('bill.show',compact('bills'));
    }

    public function show($id){
        $bills= $this->billServise->findbyid($id);
        return view('bill.showid',compact('bills'));
    }
}
