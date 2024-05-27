<?php

namespace App\Support\Asaas;

use App\Exceptions\BadRequestException;
use Illuminate\Support\Facades\Http;


class Asaas {

    public static function checkCustomerExist(string $cpf)
    {
        $url = config('services.saas.base_url').'/customers';
        $options = ['cpfCnpj' => $cpf];
        $response = Http::timeout(30)
                            ->withOptions(['query' => $options])
                            ->withHeaders([ 'Accept' => 'application/json', 'access_token' => config('services.saas.api_key') ])
                            ->get($url);

        if($response->status() == 200 && isset($response->json()['data']) && count($response->json()['data']) > 0){
            return $response->json()['data'][0];
        }

        return [];
    }

    public static function createCustomer(array $payload)
    {
        $url = config('services.saas.base_url').'/customers';
        $customer = self::checkCustomerExist($payload['cpfCnpj']);

        if(count($customer) == 0){
            $response = Http::timeout(30)
                                ->withHeaders([ 'Accept' => 'application/json', 'access_token' => config('services.saas.api_key') ])
                                ->post($url, $payload);
    
            return $response->json();
        }

        return $customer;
    }

    public static function payment(array $payload)
    {
        $url = config('services.saas.base_url').'/payments';
        info($payload);
        $response = Http::timeout(30)
                            ->withHeaders([ 'Accept' => 'application/json', 'access_token' => config('services.saas.api_key') ])
                            ->post($url, $payload);
                            info($response);

        if($response->status() == 400){
            throw new BadRequestException($response->json()['errors'][0]['description']);
        }
        return $response->json();
    }

    public static function qrCodePix(array $payload)
    {
        $url = config('services.saas.base_url').'/pix/qrCodes/static';
        // info($payload);
        $response = Http::timeout(30)
                            ->withHeaders([ 'Accept' => 'application/json', 'access_token' => config('services.saas.api_key') ])
                            ->post($url, $payload);
                            info($response);

        if($response->status() == 400){
            throw new BadRequestException($response->json()['errors'][0]['description']);
        }
        return $response->json();
    }

    public static function createPixKey()
    {
        $url = config('services.saas.base_url').'/pix/addressKeys';
        $pixKey = self::getPixKey();

        if(!is_null($pixKey)){
            return $pixKey;
        }
        
        $response = Http::timeout(30)
                            ->withHeaders([ 'Accept' => 'application/json', 'access_token' => config('services.saas.api_key') ])
                            ->post($url, ['type' => 'EVP']);

        if($response->status() == 400){
            throw new BadRequestException($response->json()['errors'][0]['description']);
        }

        if($response->status() == 200){
            $key = $response->json();
            self::createFilePix(['pix_key' => $key['key']]);
            return $key['key'];
        }

        return null;
    }

    public static function createFilePix(array $data)
    {
        $newData = [];
        if (!file_exists(storage_path('pix'))){
            mkdir(storage_path('pix'), 0777, true);
        }

        $fileName = 'pix_key.json';

        // if(file_exists(storage_path('pix/'.$fileName))){
        //     $fileSize = filesize(storage_path('pix/'.$fileName));
        //     $jsonData = file_get_contents(storage_path('pix/'.$fileName));
        //     if($fileSize > 0){
        //         $newData = array_merge($newData, json_decode($jsonData));
        //     }
        // }

        file_put_contents(storage_path('pix/'.$fileName), json_encode($data, JSON_PRETTY_PRINT));
    }

    public static function getPixKey()
    {
        if(file_exists(storage_path('pix/pix_key.json'))){
            
            $pixKey = json_decode(file_get_contents(storage_path('pix/pix_key.json')), true);
            if(!isset($pixKey['pix_key'])){
                return null;
            }
            return $pixKey['pix_key'];
        }

        return null;
    }
}