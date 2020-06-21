<?php
require_once '../header/header.php';
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<main>

    <!-- Khuyến Mãi Category -->
    <div class="listProduct mgt20">
        <div class="container">
            <div class="listProduct__productItems">
                <div id="js-ajaxNextPage" class="grid">
                    <?php
                    // echo "<pre>";
                    // var_dump($_SERVER['DOCUMENT_ROOT']);
                    // die();
                    require_once '../../Templates/DBconnection.php';
                    $db = new DBconnection();
                    $conn = $db::$connectionInstance;

                    $sql = "SELECT idlaptop,tenlaptop,giaban,url_image from detaillaptop limit 10";

                    $stmt = mysqli_stmt_init($conn);

                    if (mysqli_stmt_prepare($stmt, $sql)) {
                        if (mysqli_stmt_execute($stmt)) {
                            $result = mysqli_stmt_get_result($stmt);
                            while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                                <div class="col">
                                    <!-- <form> -->
                                    <a href="" class="relative">
                                        <img src="./images/discount-mini.png" alt="" class="khuyenmai-icon">
                                        <img class="js-imgAjaxChange" src="<?php echo $row['url_image']; ?>" alt="" class="imgProduct">
                                    </a>
                                    <p class="nameProduct"><a href="" class="relative">
                                        </a><a class="js-nameAjaxChange" href=""><?php echo $row['tenlaptop']; ?></a>
                                    </p>
                                    <span class="priceProduct">

                                        <p class="discountPrice js-giabanAjaxChange" style="color: red;">
                                            <?php echo $row['giaban']; ?>
                                        </p>
                                    </span>
                                    <div class="addToCart">
                                        <button class="js-sendValAjax" id="js-ajaxShoppingCart" name="addToCart" value="addToCart" style="
                            margin-top: 15px;
                            font-weight: 500;
                            background: url('./images/icon-cart.png') no-repeat
                            right 10px center #838484;
                        "><span>+ Thêm vào giỏ hàng</span>
                                        </button>
                                        <input class="js-product_id" type="hidden" name="product_id" value="<?php echo $row['idlaptop']; ?>">
                                        <input class="js-product_name" type="hidden" name="product_name" value="<?php echo $row['tenlaptop']; ?>">
                                        <input class="js-product_price" type="hidden" name="product_price" value="<?php echo $row['giaban']; ?>">
                                        <input class="js-product_image" type="hidden" name="product_price" value="<?php echo $row['url_image']; ?>">
                                    </div>
                                    <!-- </form> -->
                                </div>
                    <?php
                            }
                        }
                        mysqli_stmt_close($stmt);
                    } ?>
                </div>
            </div>

            <div class="page-number">
                <ul class="page-number">
                    <?php
                    $indexPage = ceil((int) $db->getIndexPageNumber() / 10);
                    for ($index = 0; $index < $indexPage; $index++) {
                    ?>
                        <li>
                            <button class="js-indexPage" style="cursor:pointer;"><?php echo $index + 1; ?></button>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</main>
<script src="AjaxNextPage.js"></script>
<script src="ajaxShoppingCart.js"></script>