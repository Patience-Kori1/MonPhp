<?php
session_start();

if (!isset($_SESSION['cart']) || count($_SESSION['cart']) < 1) {
    echo "Aucun produit dans le panier.";
} else {
    echo "<h2>Votre panier :</h2>";
    foreach ($_SESSION['cart'] as $product) {
        foreach ($product as $name => $price) {
            ?>
            <p>Nom du produit : <strong><?= htmlspecialchars($name) ?></strong></p>
            <p>Prix : <strong><?= htmlspecialchars($price) ?> €</strong></p>
            <hr>
            <?php
        }
    }
}
?>
