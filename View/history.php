
<div class="justify-content-md-center">
    <div class="justify-content-md-center">
        <div class="ecommerce container">
            <table class="table">
                <thead>
                <td class="product-name">Name</td>
                <td class="product-price">Price</td>
                </thead>
                <tbody>
                <?php
                //printf($product->getHistory($id));
                foreach ($product->getHistory($id) as $item) :
                    ?>
                        <tr class="ecommerce-cart">
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

                        </tr>
                        <?php
                endforeach;
                ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

