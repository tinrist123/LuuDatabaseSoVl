<?php
// echo "<pre>";
// var_dump($_POST);
// die();
session_start();
// unset($_SESSION['cart']);
// die();

function formatStringtoPrice($strPrice)
{
    $strPrice = str_replace(',', '', $strPrice);
    $strPrice = str_replace('VNĐ', "", $strPrice);
    $strPrice = str_replace('₫', "", $strPrice);
    return trim($strPrice);
}

if (isset($_POST['dataCome'])) {
    $idlaptop = $_POST['product_id'];
    $tenlaptop = $_POST['product_name'];
    $giaban = formatStringtoPrice($_POST['product_price']);
    $url_image = $_POST['product_image'];


    $addingProduct = array(
        "product_id" => $idlaptop,
        "product_name" => $tenlaptop,
        "product_price" => $giaban,
        "product_image" => $url_image,
        "product_quantity" => 1

    );

    if (isset($_SESSION['cart'])) {
        $list_product_id = array_column($_SESSION['cart'], "product_id");

        if (!in_array($idlaptop, $list_product_id)) {


            $_SESSION['cart'][$idlaptop] = $addingProduct;
        } else {
            $_SESSION['cart'][$idlaptop]['product_quantity']++;
        }
    } else {
        $_SESSION['cart'][$idlaptop] = $addingProduct;
    }

    // echo "<pre>";
    // unset($_SESSION['cart']);
    // var_dump($_SESSION['cart']);




    // unset($_SESSION['cart']);
    // die();



    if (isset($_SESSION['cart'])) {
        $countProduct = 0;

        $shoppingCart = $_SESSION['cart'];
        $totalPrice = 0;
        foreach ($shoppingCart as $Product) {
            // echo "<pre>";
            $countProduct += (int) $Product['product_quantity'];
            // echo $Product['product_price'];
            $totalPrice = (float) $Product['product_price'] * (float) $Product['product_quantity'];
        }
        // echo "<pre>";
        // var_dump($_SESSION['cart']);
    }

    if (!isset($_SESSION['countProduct'])) {
        $_SESSION['countProduct'] = $countProduct;
    } else {
        $_SESSION['countProduct'] += $countProduct;
    }
    echo $countProduct;
}
