<?php

class Checkout
{
    public function payment($type)
    {
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
echo $checkout->payment('bitcoin');
