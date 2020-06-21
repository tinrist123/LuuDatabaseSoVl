<?php
session_start();
if (isset($_POST['data_Come'])) {
    $product_id = $_POST['product_Id'];
    $product_quantity = $_POST['product_Quantity'];
    $product_price = $_SESSION['cart'][$product_id]['product_price'];
    $total = 0;
    if (isset($_SESSION['cart'])) {
        if ($product_quantity == "") {
            $_SESSION['cart'][$product_id]['product_quantity'] = 0;
        } else {
            $_SESSION['cart'][$product_id]['product_quantity'] = $product_quantity;
        }
        $listCart = $_SESSION['cart'];
        foreach ($listCart as $product) {
            $total += (int) $product['product_price'] * (int) $product['product_quantity'];
        }
    }
    // echo "<pre>";
    // var_dump($_SESSION['cart']);
    echo number_format($total) . "||" . $product_price;
}
