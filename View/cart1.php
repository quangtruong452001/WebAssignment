<?php
include 'header.php';
?>
<link rel="stylesheet" href="../styles/cart.css">
<div class="container-fluid">
    <div class="justify-content-md-center">
        <div class="ecommerce">
            <table class="table">
                <thead>
                    <th class="product-remove"></th>
                    <th class="product-thumbnail"></th>
                    <th class="product-name">Name</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-subtotal">Subtotal</th>
                </thead>
                <tbody>
                    <tr class="ecommerce-cart">
                        <td class="product-remove">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </td>
                        <td class="product-thumbnail">
                            <a href="">
                                <img class="img-thumbnail " src="../images/product/1.png" width="100" height="100">
                            </a>
                        </td>
                        <td class="product-name" data-title="name">
                            <a href="">
                                Apple Macbook Air M1 2020 (MGN93SA/A) Silver
                            </a>
                        </td>
                        <td class="product-price" data-title="price">
                            <span class="amount">38,000,000</span>
                        </td>
                        <td class="product-quantity" data-title="quantity">
                            <div class="quantity">
                                <label for "quantity_id1"></label>
                                <input type="number" id="quantity_id1" min="0">
                            </div>
                        </td>
                        <td class="product-subtotal" data-title="subtotal">
                            <span class="amount">38,000,000</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <div class="infor"></div>
                            <div class="coupon">
                                <label for="coupon_code"></label>
                                <input type="text" name="coupon_code" placeholder="Coupon code">
                                <button type="submit" class="btn btn-danger" name="apply_coupon" value="Apply">Apply</button>
                                <button type="submit" class="btn btn-danger" aria-disabled="true" name="update_cart" value="update_cart">Update cart</button>
                                <a href="" class="btn btn-danger btn-checkout">Purpose</a>
                            </div>

                        </td>

                    </tr>
                </tbody>
            </table>
            <div class="cart-total">
                <h2>Cộng giỏ hàng</h2>
                <table class="table">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Tạm tính</th>
                            <td data-title="Tạm tính">
                                3900000
                            </td>
                        </tr>
                        <tr class="shipping-total">
                            <th>Giao hàng</th>
                            <td data-title="Giao hàng">
                                <ul id="shipping-method">
                                    <label for="">Giao hàng miễn phí</label>
                                    <p>Tùy chọn giao hàng sẽ được cập nhật trong quá trình thanh toán.</p>
                                </ul>
                            </td>
                        </tr>
                        <tr class="cart-total">
                            <th>Total</th>
                            <td>3900000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>