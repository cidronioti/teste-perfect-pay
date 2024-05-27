<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Http\Resources\PaymentResource;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct(protected PaymentService $paymentService) { }

    public function index()
    {
        return view('checkout');
    }

    public function payment(PaymentRequest $request)
    {
        return new PaymentResource($this->paymentService->payment($request->all()));
    }

    // public function qrCodePix(PaymentRequest $request)
    // {
    //     return new PaymentResource($this->paymentService->payment($request->all()));
    // }
}
