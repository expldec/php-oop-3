
<?php
// importiamo tutti i file necessari con le classi
require_once __DIR__ . "/PetFood.php";
require_once __DIR__ . "/PetToy.php";
require_once __DIR__ . "/User.php";


//creiamo alcuni prodotti
$cat_food = new PetFood("Conad", "MicioMiao", 4, "Crocchette per gatti adulti", 2000, "Gatto");
$dog_food = new PetFood("Conad", "BauGnam", 5, "Crocchette per cani", 5000, "Cane");
$cat_toy_mouse = new PetToy("Giochi Pelosi", "JerryBot", 5, "Topo meccanico", "Gatto");


// creiamo un utente e aggiungiamo 2 prodotti al carrello
$morgan = new User("morgan", "morgan@gmail.com",12345678,false);
$morgan->addProductToCart($cat_food);
$morgan->addProductToCart($cat_toy_mouse);

// rendiamo un prodotto non disponibile
$cat_toy_mouse->in_stock = false;

// proviamo ad aggiungerlo al carrello e mostriamo un messaggio se possiamo aggiungerlo oppure no.
$result = $morgan->addProductToCart($cat_toy_mouse);
if ($result) {
    echo "Topo meccanico aggiunto";
} else {
    echo "Topo Meccanico non è più disponibile";
}

echo "<br>";

// registriamo l'utente
echo $morgan->register();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Elenchiamo i prodotti -->
    <h2>Prodotti disponibili</h2>
    <ul>
        <li> <?php echo $cat_food->printInfo(); ?> </li>
        <li> <?php echo $dog_food->printInfo(); ?> </li>
        <li> <?php echo $cat_toy_mouse->printInfo(); ?> </li>
    </ul>

    <!-- Elenchiamo i prodotti nel carrello -->
    <h2>Ciao <?php echo $morgan->name; ?>. Ecco il tuo carrello:</h2>
    <ul>
        <?php foreach($morgan->cart as $cartItem) { ?>
        <li><?php echo $cartItem->printInfo(); ?></li>
        <?php } ?>
    </ul>
    <!-- mostriamo il prezzo finale -->
    <h3>Totale: € <?php echo $morgan->getTotalPrice(); ?></h3>
    
    <!-- comunichiamo all'utente se la sua carta è valida oppure no -->
    <p>
        <?php
        if ($morgan->canPurchase()) {
            echo "La tua carta è valida. Puoi procedere all'acquisto";
        }
        else {
            echo "La tua carta è scaduta. Non puoi procedere all'acquisto!";
        }
        
        ?>
    </p>
</body>
</html>