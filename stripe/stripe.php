<?php

require_once '../vendor/autoload.php'; 

\Stripe\Stripe::setApiKey('sk_test_51Lb3HfIrHud9qlwW96eWLSn3CdF7pbqJI8Ysy5HTNuma4zOjlfNPA4zTa6g7AVVraTPPNXLhf0CebXugGUDax0xg00Wlom8mXR');



// try {
//     $session = \Stripe\Checkout\Session::create([
//         'payment_method_types' => ['card'],
//         'line_items' => [[
//             'price_data' => [
//                 'currency' => 'eur',
//                 'unit_amount' => 50 * 100, 
//                 'product_data' => [
//                     'name' => 'Nom du produit',
//                 ],
//             ],
//             'quantity' => 1,
//         ]],
//         'mode' => 'payment',
//         'success_url' => 'https://example.com/success', 
//         'cancel_url' => 'https://example.com/cancel', 
//     ]);

//     header("Location: {$session->url}");
// } catch (\Stripe\Exception\ApiErrorException $e) {
//     echo "Erreur de l'API Stripe: " . $e->getMessage();
// } catch (Exception $e) {
//     echo "Erreur générale: " . $e->getMessage();
// }

$price = $_GET['price'];
$plan = $_GET['plan'];
$quantity = 1;
$currency = 'eur';

// get today's date
$today = date("d-m-Y");
// get the date of the next month
$nextMonth = date("d-m-Y", strtotime("+1 month"));


if($plan == "starter") {
    $success_url = 'http://localhost/CookMaster/stripe/success.php?plan=1&start_date='.$today.'&end_date='.$nextMonth.'';
    $name = "FoodieLand Starter Plan - 1 month subscription";
} elseif ($plan == "master") {
    $success_url = 'http://localhost/CookMaster/stripe/success.php?plan=2&start_date='.$today.'&end_date='.$nextMonth.'';
    $name = "FoodieLand Master Plan - 1 month subscription";
}

$cancel_url = 'http://localhost/CookMaster/stripe/cancel.php';

function payment($price, $name, $quantity, $currency, $success_url, $cancel_url) {
    try {
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => $currency,
                    'unit_amount' => $price * 100, 
                    'product_data' => [
                        'name' => $name,
                    ],
                ],
                'quantity' => $quantity,
            ]],
            'mode' => 'payment',
            'success_url' => $success_url, 
            'cancel_url' => $cancel_url, 
        ]);
    
        header("Location: {$session->url}");
    } catch (\Stripe\Exception\ApiErrorException $e) {
        echo "Erreur de l'API Stripe: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erreur générale: " . $e->getMessage();
    }
}

payment($price, $name, $quantity, $currency, $success_url, $cancel_url);