<?php

namespace App\Mail;
use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order )
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.send')
                    ->with([
                        'taille' => $this->order->taille,
                        'content' => $this->order->content,
                    ]);
    }
    public function ship(Request $request,$orderId){
        $order = Order::findOrFail($orderId);
        Mail::to($request->user())->send(new OrderShipped($order));

    }
}
