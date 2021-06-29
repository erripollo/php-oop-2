<?php 

//Classes
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/CreditCard.php';

//Database
require_once __DIR__ . '/database/db.php';

/* echo '<pre>';
var_dump($products);
echo '</pre>';

echo '<pre>';
var_dump($users);
echo '</pre>'; */

$card = new CreditCard(123456, '12/2022', 789)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>

    <?php foreach ($products as $product) : ?>

    <h2><?php echo $product->name(); ?></h2>
    <p><?= $product->desc() ?></p>

    <?php endforeach; ?>


    <?php foreach ($users as $user) : ?>

       
        <?php if ( method_exists($user, 'isPremium') && $user->isPremium()) : ?>

            <h3>Ciao <?= $user->name() ?></h3>
            <p>Sei un utente premium, hai diritto al <?php echo $user->discount(); ?>% di sconto</p>
            <p><?= $user->insertCreditCard($card) ?></p>

        <?php endif ?>

    <?php endforeach ?>

</body>

</html>