<?php
include "../testShopCart/header/header.php"
?>
<header>
    <link rel="stylesheet" href="cart.css">
</header>
<?php
if (isset($_SESSION['cart'])) {
    $itemsCart = $_SESSION['cart'];
}
?>

<main>
    <section class="name">
        <h2 class="name__title">
            Giỏ hàng
        </h2>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="content__img">
                        <p>Sản phẩm</p>
                    </div>
                    <div class="content__name">
                        <p>Tên sản phẩm</p>
                    </div>
                    <div class="content__sl">
                        <p>Số lượng</p>
                    </div>
                    <div class="content__gia">
                        <p>Giá tiền</p>
                    </div>
                    <div class="content__xoa">
                        <p>Xóa</p>
                    </div>
                </div>
                <?php
                if (isset($itemsCart)) {
                ?>
                    <?php foreach ($itemsCart as $product) : ?>
                        <div class="col-auto">
                            <div class="about__img">
                                <img src="<?php echo $product['product_image']; ?>" alt="">
                                <input class="js-product_id" type="hidden" name="product_id" value=<?php echo $product['product_id']; ?>>
                            </div>
                            <div class="about__name">
                                <a href="https://gearvn.com/products/ban-phim-e-dra-ek701-rgb"><?php echo $product['product_name']; ?></a>
                            </div>
                            <div class="about__sl">
                                <input class="js-inputChange" type="number" name="quantity" value="<?php echo $product['product_quantity']; ?>" min="1">
                            </div>
                            <div class="about__gia">
                                <span class="js-product_price"><?php echo number_format((int) $product['product_price'] * $product['product_quantity']); ?></span>
                            </div>
                            <div class="about__xoa">
                                <i style="cursor:pointer;" class="js-btnXoa fa fa-trash"></i>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-auto">
                    <div class="total__name">
                        <p>Tổng tiền</p>
                    </div>
                    <div class="total__cost">
                        <span class="js-totalPrice">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $listCart = $_SESSION['cart'];
                                $totalPrice = 0;
                                foreach ($listCart as $product) {
                                    $totalPrice += (int) $product['product_price'] * $product['product_quantity'];
                                }
                                echo number_format($totalPrice);
                            }

                            ?>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="pay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="button">
                        <button type="submit" id="checkout" class="button-default" name="checkout" value="">Thanh
                            toán</button>
                        <button type="submit" id="update-cart" class="button-default" name="update" value="">Cập
                            nhật</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="ajaxQuantityChange.js"></script>
<script src="ajaxBtnXoa.js"></script>