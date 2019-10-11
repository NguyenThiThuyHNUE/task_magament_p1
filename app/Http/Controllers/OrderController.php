<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Service\CustomerServiceInterface;
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
