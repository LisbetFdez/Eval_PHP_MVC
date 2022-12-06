<?php

    include('vue/vue_article.php');
    include('utils/connect_bdd.php');
    include('model/model_article.php');

if (
    isset($_POST['nom_article']) and $_POST['nom_article'] != ''
    and isset($_POST['nom_vendeur']) and $_POST['nom_vendeur'] != ''
    and isset($_POST['ticket']) and $_POST['ticket'] != ''
) {
    $nom_article = $_POST['nom_article'];
    $nom_vendeur = $_POST['nom_vendeur'];
    $ticket = $_POST['ticket'];
}
?>