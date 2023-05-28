<?php


require_once '../vendor/autoload.php'; // Chemin vers le fichier autoload.php de Stripe

\Stripe\Stripe::setApiKey('sk_test_51Lb3HfIrHud9qlwW96eWLSn3CdF7pbqJI8Ysy5HTNuma4zOjlfNPA4zTa6g7AVVraTPPNXLhf0CebXugGUDax0xg00Wlom8mXR');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $cardNumber = $_POST['cc-number'];
    $ccv = $_POST['cc-cvv'];
    $name = $_POST['cc-name'];
    $expiration = $_POST['cc-expiration'];

    $names = explode(' ', $name);

    $expirations = explode('/', $expiration);

    $expMonth = $expirations[0];
    $expYear = $expirations[1];
    $expYears = '20' . $expYear;

    $firstName = $names[0];
    $lastName = $names[1];


    try {
        // Création de la charge
        $charge = \Stripe\Charge::create([
            'amount' => 1000, // Montant en cents (ex. : 10,00 € -> 1000)
            'currency' => 'eur',
            'source' => [
                'object' => 'card',
                'number' => $cardNumber,
                'cvc' => $ccv,
                'exp_month' => $expMonth,
                'exp_year' => $expYears,
                'name' => $firstName . ' ' . $lastName,
            ],
        ]);

        // Gestion de la réponse de Stripe
        if ($charge->status === 'succeeded') {
            // La charge a été traitée avec succès
            echo 'Paiement réussi !';
        } else {
            // La charge a échoué
            echo 'Le paiement a échoué. Veuillez réessayer.';
        }
    } catch (\Stripe\Exception\CardException $e) {
        // Gestion des erreurs spécifiques liées à la carte
        echo 'Erreur de carte : ' . $e->getMessage();
    } catch (\Stripe\Exception\InvalidRequestException $e) {
        // Gestion des erreurs de requête invalides
        echo 'Erreur de requête : ' . $e->getMessage();
    } catch (\Stripe\Exception\ApiErrorException $e) {
        // Gestion des erreurs générales de l'API Stripe
        echo 'Erreur de l\'API Stripe : ' . $e->getMessage();
    }
}
?>