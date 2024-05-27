<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if(isset($this['encodedImage'])){
            return [
                'encodedImage' => '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',
                'payload' => '00020126860014br.gov.bcb.pix0136f397d396-a4d7-4be2-9404-4db6e95aa5710224Pagamento via pix teste.520400005303986540520.005802BR5919Minha Empresa Teste6008Salvador62290525MINHAEMP00000000459177ASA6304499E',
                'expirationDate' => NULL,
            ];
        }
        
        return [
            "object" => $this['object'] ?? null,
            "id" => $this['id'] ?? null,
            "dateCreated" => $this['dateCreated'] ?? null,
            "customer" => $this['customer'] ?? null,
            "paymentLink" => $this['paymentLink'] ?? null,
            "value" => $this['Value'] ?? null,
            "netValue" => $this['netValue'] ?? null,
            "originalValue" => $this['originalValue'] ?? null,
            "interestValue" => $this['interestValue'] ?? null,
            "description" => $this['description'] ?? null,
            "billingType" => $this['billingType'] ?? null,
            "canBePaidAfterDueDate" => $this['canBePaidAfterDueDate'] ?? null,
            "pixTransaction" => $this['pixTransaction'] ?? null,
            "status" => $this['status'] ?? null,
            "dueDate" => $this['dueDate'] ?? null,
            "originalDueDate" => $this['originalDueDate'] ?? null,
            "paymentDate" => $this['paymentDate'] ?? null,
            "clientPaymentDate" => $this['clientPaymentDate'] ?? null,
            "installmentNumber" => $this['installmentNumber'] ?? null,
            "invoiceUrl" => $this['invoiceUrl'] ?? null,
            "invoiceNumber" => $this['invoiceNumber'] ?? null,
            "externalReference" => $this['externalReference'] ?? null,
            "deleted" => $this['deleted'] ?? null,
            "anticipated" => $this['antecipated'] ?? null,
            "anticipable" => $this['anticipable'] ?? null,
            "creditDate" => $this['creditDate'] ?? null,
            "estimatedCreditDate" => $this['estimatedCreditDate'] ?? null,
            "transactionReceiptUrl" => $this['transactionReceiptUrl'] ?? null,
        ];
    }
}
