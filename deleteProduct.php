<?php
require_once('product.class.php');
$us = new Product();
$us->supprimerProduct($_GET['id_prod']);
header('location:list_product.php');
