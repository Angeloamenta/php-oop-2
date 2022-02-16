<!-- immaginare quali sono le classi necessarie per creare uno shop online; 
ad esempio, ci saranno sicuramente 
dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; 
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, 
oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: 
ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); -->

<?php 

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Premium.php';
require_once __DIR__ . '/classes/CreditCard.php';



 $scarpe = new Product("Adidas", 50);
// var_dump($scarpe);

$user = new User ("Angelo", "Amenta");
// var_dump($user);

$userPremium = new Premium ("Angelo", "Amenta");
// var_dump($userPremium);

// function finalPrice($price, $sconto) {
//     $price - $sconto;
// };
// var_dump($scarpe->getPrice());
// var_dump($userPremium->getSconto());

// var_dump(finalPrice($scarpe->getPrice(), $userPremium->getSconto()));

$card = new CreditCard ('mastercard', 333333);

$user->setCard([
    new CreditCard('mastercard', 333333),
]);
var_dump($user);
// var_dump("prova",$user->setCard($card));



?>