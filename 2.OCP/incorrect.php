<?php

class Checkout
{
    public function payment($type)
    {
        Account::type;

        if ($type == 'cash') {
            $payment = 'cash';//new Chash();
        } elseif ($type == 'credit-card') {
            $payment = 'creadit card';//new CreditCard();
        } elseif ($type == 'bitcoin') {
            $payment = 'bitcoin';//new Bitcoin();
        }

        return $payment;
    }
}

$checkout = new Checkout();
$payment = $checkout->payment('bitcoin');
echo $payment;
