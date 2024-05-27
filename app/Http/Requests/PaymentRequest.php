<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'cpfCnpj' => ['required'],
            'mobilePhone' => ['required'],
            'email' => ['required'],
            'address.address' => ['required'],
            'address.number' => ['required'],
            // 'address.neighborhood' => ['required'],
            'address.city' => ['required'],
            'address.state' => ['required'],
            'address.zipcode' => ['required'],
            'paymentInfo.billingType' => ['required'],
            'paymentInfo.value' => ['required'],
        ];
    }
    
    public function withValidator($validator)
    {
        $validator->sometimes('creditCardInfo.holderName', 'required', function ($input) {
            return $this->input('paymentInfo.billingType') == 'CREDIT_CARD';
        });
        $validator->sometimes('creditCardInfo.number', 'required', function ($input) {
            return $this->input('paymentInfo.billingType') == 'CREDIT_CARD';
        });
        $validator->sometimes('creditCardInfo.expiryMonth', 'required', function ($input) {
            return $this->input('paymentInfo.billingType') == 'CREDIT_CARD';
        });
        $validator->sometimes('creditCardInfo.expiryYear', 'required', function ($input) {
            return $this->input('paymentInfo.billingType') == 'CREDIT_CARD';
        });
        $validator->sometimes('creditCardInfo.cvv', 'required', function ($input) {
            return $this->input('paymentInfo.billingType') == 'CREDIT_CARD';
        });
        
    }
}
