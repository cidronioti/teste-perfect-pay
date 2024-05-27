<?php

namespace App\Services;

use App\Support\Asaas\Asaas;
use Carbon\Carbon;

class PaymentService {
    public function __construct(){}

    public function payment(array $data)
    {
        $customer = Asaas::createCustomer($this->makeCustomer($data));

        if($data['paymentInfo']['billingType'] == 'CREDIT_CARD'){
            return Asaas::payment($this->makePayloadCard($data, $customer));
        }
        if($data['paymentInfo']['billingType'] == 'PIX'){
            $pixKey = Asaas::createPixKey();
            if(!is_null($pixKey)){
                info('PIX DATA: ');
                info(Asaas::qrCodePix($this->makePayloadPix($pixKey, $data['paymentInfo'])));
                return Asaas::qrCodePix($this->makePayloadPix($pixKey, $data['paymentInfo']));
            }
        }
        return Asaas::payment($this->makePayload($data, $customer));
    }

    public function makeCustomer(array $data)
    {
        return ["cpfCnpj"=> $data["cpfCnpj"], "name"=>$data["name"], "mobilePhone"=> $data["mobilePhone"]];
    }

    public function makePayload(array $data, array $customer)
    {
        return ["customer"=> $customer['id'], "billingType"=> $data['paymentInfo']['billingType'], "value"=> $data['paymentInfo']['value'], "dueDate"=> Carbon::now()->format('Y-m-d')];
    }
    public function makePayloadPix(string $pixKey, array $paymentInfo)
    {
        return ["addressKey"=> $pixKey, "description"=> "Pagamento via pix teste.", "value"=> $paymentInfo['value'], "format" => "ALL", "expirationDate"=> Carbon::now()->addSeconds(60)->format('Y-m-d H:i:s')];
    }
    
    public function makePayloadCard(array $data, array $customer)
    {
        $cardInfo = $data['creditCardInfo'];
        return [
            "customer"=> $customer['id'], 
            "billingType"=> $data['paymentInfo']['billingType'], 
            "value"=> $data['paymentInfo']['value'], 
            "dueDate"=> Carbon::now()->format('Y-m-d'),
            "creditCard"=> [
                "holderName"=> $cardInfo['holderName'],
                "number"=> $cardInfo['number'],
                "expiryMonth"=> $cardInfo['expiryMonth'],
                "expiryYear"=> $cardInfo['expiryYear'],
                "ccv"=> $cardInfo['cvv']
            ],
            "creditCardHolderInfo"=> [
                "name"=> $data['name'],
                "email"=> $data['email'],
                "cpfCnpj"=> preg_replace("/[^0-9]/", "", $data['cpfCnpj']),
                "postalCode"=> preg_replace("/[^0-9]/", "", $data['address']['zipcode']),
                "addressNumber"=> $data['address']['number'],
                "addressComplement"=> null,
                "phone"=> preg_replace("/[^0-9]/", "", $data['mobilePhone']),
                "mobilePhone"=> preg_replace("/[^0-9]/", "", $data['mobilePhone'])
            ],
            "remoteIp"=> "116.213.42.532"
        ];
    }
}