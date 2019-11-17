<?php /** @noinspection ALL */

namespace App\Http\Controllers;
use http\Env\Request;
use Illuminate\Support\Facades;

class OrderController extends Controller
{

    public function __construct( )
  {
      $this->middleware('auth');

  }
    public function notification()
    {
        return view('order.notification');
    }

}
