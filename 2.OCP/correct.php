<?php

interface PaymentContract
{
    public function payment();
}

class Cash implements PaymentContract
{
    public function payment()
    {
        return 'cash';
    }
}

class CreditCard implements PaymentContract
{
    public function payment()
    {
        return 'creadit card';
    }
}

class Bitcoin implements PaymentContract
{
    public function payment()
    {
        return 'bitcoin';
    }
}

class Checkout
{
    public function begin(PaymentContract $checkout)
    {
        return $checkout->payment();
    }
}

$checkout = new Checkout();
$payment = $checkout->begin(new CreditCard());
echo $payment;
