<?php

require_once '../vendor/autoload.php'; 

\Stripe\Stripe::setApiKey('sk_test_51Lb3HfIrHud9qlwW96eWLSn3CdF7pbqJI8Ysy5HTNuma4zOjlfNPA4zTa6g7AVVraTPPNXLhf0CebXugGUDax0xg00Wlom8mXR');

try {
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'eur',
                'unit_amount' => 50 * 100, 
                'product_data' => [
                    'name' => 'Nom du produit',
                ],
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://example.com/success', 
        'cancel_url' => 'https://example.com/cancel', 
    ]);

    header("Location: {$session->url}");
} catch (\Stripe\Exception\ApiErrorException $e) {
    echo "Erreur de l'API Stripe: " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur générale: " . $e->getMessage();
}
?>