<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Service\CustomerServiceInterface;
use App\Service\impl\UserService;
use App\Service\UserServiceInterface;
use Illuminate\Support\Facades;
use App\Http\Requests\CreateCustomerRequest;

class OrderController extends Controller
{
    /**
     * @var CustomerServiceInterface
     */
    private $customerService;

    public function __construct(CustomerServiceInterface $customerService)
  {
      $this->middleware('auth');
      $this->customerService = $customerService;
  }

    public function create()
    {
        return view('order.createCustomer');
    }


    public function store(CreateCustomerRequest $request)
    {
        $customers= $this->customerService->store($request);
        return view('order.thanhtoanthanhcong',compact('customers'));

    }

}
