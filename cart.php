<?php

require 'inc/head.php';


?>
<section class="cookies container-fluid">
    <div class="row">
        <form method="post" action="cart.php">
        </form>
        <style>
            .panier_table {
                margin: auto;
                border: black solid 3px;;
            }

            th {
                padding: 30px;
            }
        </style>
        <table class="panier_table" border="2">
            <tr>
                <th class="panier_th"> Référence</th>
                <th class="panier_th"> Produit</th>
                <th class="panier_th"> Prix Unitaire</th>
                <th class="panier_th"> Quantité</th>
                <th class="panier_th"> Prix Total TTC</th>
            </tr>
            <?php if (isset($_SESSION['nuts']) && $_SESSION['nuts'] > 0) {
                ?>
                <tr>
                    <th class="panier_th"> 46</th>
                    <th class="panier_th"> Pecan Nuts</th>
                    <th class="panier_th"> <?php $nutsprice = 2; echo $nutsprice ?> €</th>
                    <th class="panier_th"> <?= $_SESSION['nuts'] ?></th>
                    <th class="panier_th"> <?= $_SESSION['nuts'] * $nutsprice ?> €</th>
                </tr> <?php } ?>
            <?php if (isset($_SESSION['chips']) && $_SESSION['chips'] > 0) {
                ?>
                <tr>
                    <th class="panier_th"> 36</th>
                    <th class="panier_th"> Chocolate Chips</th>
                    <th class="panier_th"> <?php $chipsprice = 3; echo $chipsprice ?> €</th>
                    <th class="panier_th"> <?= $_SESSION['chips']?></th>
                    <th class="panier_th"> <?= $_SESSION['chips'] * $chipsprice ?> €</th>
                </tr> <?php } ?>
            <?php if (isset($_SESSION['choco']) && $_SESSION['choco'] > 0) {
                ?>
                <tr>
                    <th class="panier_th"> 58</th>
                    <th class="panier_th"> Chocolate Cookie</th>
                    <th class="panier_th"> <?php $chocoprice = 1.5; echo $chocoprice ?> €</th>
                    <th class="panier_th"> <?= $_SESSION['choco']?></th>
                    <th class="panier_th"> <?= $_SESSION['choco'] * $chocoprice ?> €</th>
                </tr> <?php } ?>
            <?php if (isset($_SESSION['m&ms']) && $_SESSION['m&ms'] > 0) {
                ?>
                <tr>
                    <th class="panier_th"> 32</th>
                    <th class="panier_th"> M&M's Cookies</th>
                    <th class="panier_th"> <?php $mmsprice = 4; echo $mmsprice ?>€</th>
                    <th class="panier_th"> <?= $_SESSION['m&ms']?></th>
                    <th class="panier_th"> <?= $_SESSION['m&ms'] * $mmsprice?> €</th>
                </tr> <?php } ?>
        </table>
    </div>
</section>

<?php
require 'inc/foot.php';
?>
