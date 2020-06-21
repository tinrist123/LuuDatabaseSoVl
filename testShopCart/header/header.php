<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/php/Admin/testShopCart/main/styleHeader.css" />
    <link rel="stylesheet" href="http://localhost/php/Admin/testShopCart//commonstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    // var_dump($_SESSION['cart']);
    if (isset($_SESSION['cart'])) {
        $shoppingCart = $_SESSION['cart'];

        $countItem = 0;

        foreach ($shoppingCart as $product) {
            $countItem += $product['product_quantity'];
        }
    }

    ?>
    <header>
        <nav class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href=""><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="col">
                        <div class="top-bar__links">
                            <div class="icon-signup">
                                <a href="#"><i class="fas fa-door-open"></i> Đăng Kí</a>
                            </div>
                            <span> / </span>
                            <div class="icon-Login">
                                <a href="#"><i class="far fa-user-circle"></i> Đăng Nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="menuList">
                            <i style="cursor: pointer;" class="fas fa-bars"></i>
                            <p>Danh Mục Sản Phẩm</p>
                            <i style="cursor: pointer;" class="fas fa-chevron-circle-right"></i>
                        </div>
                    </div>
                    <div class="col">
                        <ul class="header-bottom__socialIcon">
                            <li>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-google-plus-g"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="searchItem">
                            <form action="#" method="">
                                <div class="wrap">
                                    <select name="" id="">
                                        <option value="" selected>tất cả</option>
                                        <option value="">test2</option>
                                        <option value="">test3</option>
                                    </select>
                                    <input type="text" name="searchBar" placeholder="Gõ Từ Tìm Kiếm" />
                                    <input type="submit" value="Tìm Kiếm" name="submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shopping-cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-num" id="itemValue"><?php
                                                                    echo (isset($countItem)) ? $countItem : 0;
                                                                    ?></span>
                            <div class="shopping-cart__detailProduct">
                                <a href="../../Cart/total.php">
                                    <span style="font-size:12px;" id="subItemValue"><?php
                                                                                    echo (isset($countItem)) ? $countItem : 0;
                                                                                    ?> </span>
                                    <span style="font-size: 12px;">sản phẩm</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>