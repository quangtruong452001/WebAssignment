<?php
ob_start();
include 'header.php';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart-submit'])) {
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }
    if (isset($_POST['delete-cart'])) {
        $deletedrecord = $Cart->deleteDataCart();
    }
};
if(count($product->getData('cart')) == 0){ include ('HaveNoCart.php');}
?>
<link rel="stylesheet" href="../styles/cart.css">
<title>Product desciptions</title>
<div class="container-fluid">
    <div class="justify-content-md-center">
        <div class="ecommerce container">
            <table class="table">
                <thead>
                    <td class="product-remove"></td>
                    <td class="product-thumbnail"></td>
                    <td class="product-name">Name</td>
                    <td class="product-price">Price</td>
                    <td class="product-quantity">Quantity</td>
                    <td class="product-subtotal">Subtotal</td>
                </thead>
                <tbody>


                    <?php
                    foreach ($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['item_id']);
                        //print_r($cart);
                        $subTotal[] = array_map(function ($item) {
                    ?>
                            <tr class="ecommerce-cart">
                                <td class="product-remove">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn close">
                                            <span>&times;</span>
                                        </button>
                                    </form>

                                </td>
                                <td class="product-thumbnail">
                                    <a href="">
                                        <img class="img-thumbnail " src="<?php echo $item['image'] ?? "../images/product/1.png" ?>" width="100" height="100">
                                    </a>
                                </td>
                                <td class="product-name" data-title="name">
                                    <p>
                                        <?php echo $item['name'] ?? "Apple Macbook Air M1 2020 (MGN93SA/A) Silver" ?>
                                    </p>
                                </td>
                                <td class="product-price" data-title="price">
                                    <span class="amount">
                                        <?php
                                        echo number_format($item['price'] ?? "33300000");
                                        echo " VND";
                                        ?></span>
                                </td>
                                <td class="product-quantity qty" data-title="quantity">
                                    <div class="quantity">
                                        <!--                                    <label for "quantity_id1"></label>-->
                                        <!--                                    <input type="number" id="quantity_id1" min="1" value="1">-->
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="subtotal">
                                    <span class="amount product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['price'] ?? 0; ?></span>
                                </td>
                            </tr>
                    <?php
                            return $item['price'];
                        }, $cart); // closing array_map function

                    endforeach;
                    ?>

                </tbody>
            </table>
            <div class="cart-total">
                <h2>Shopping Cart</h2>
                <table class="table">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Total</th>
                            <td data-title="Tạm tính">
                                <?php
                                //                                echo isset($subTotal) ? count($subTotal) : 0;
                                //                                echo " items\n";
                                ?>

                                <span id="deal-price">
                                    <?php
                                    echo isset($subTotal) ? $Cart->getSum($subTotal) : 0;
                                    echo " VND";
                                    ?>
                                </span>

                            </td>
                        </tr>
                        <tr class="shipping-total">
                            <th>Delivery</th>
                            <td data-title="Giao hàng">

                                <p>Free Delivery</p>
                                <p>Shipping options will be updated during checkout.</p>

                            </td>
                        </tr>

<!--                        <tr>-->
<!--                            <th>Payment method</th>-->
<!--                            <td>-->
<!--                                <div class="tab container-fluid ">-->
<!--                                    <button class="tablinks" >Acer</button>-->
<!--                                    <button class="tablinks" >Asus</button>-->
<!--                                    <button class="tablinks" >Msi</button>-->
<!--                                </div>-->
<!--                            </td>-->
<!---->
<!--                        </tr>-->

                        <tr>
                            <td colspan="6">
                                <div class="infor"></div>
                                <div class="coupon">
                                    <form method="post">
                                        <input type="hidden" value="cart" name="cart">
                                        <button type="submit" class="btn btn-danger" name="delete-cart">Pay</button>
                                    </form>

                                </div>

                            </td>

                        </tr>

                        <!--                        <tr class="cart-total">-->
                        <!--                            <th>Total</th>-->
                        <!--                            <td>-->
                        <!---->
                        <!---->
                        <!--                            </td>-->
                        <!--                        </tr>-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>







</div>

<?php
//if(isset($_COOKIE['user'])){
//    include ('history.php');
//}
?>
<?php
include 'footer.php';
include 'topbutton.php';
?>