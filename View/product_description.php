<?php
ob_start();
include 'header.php';
?>
<?php
// request method post

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['cart_add'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        header("Location: product_description.php?item_id={$_POST['item_id']}");
    }
}

$in_cart = $Cart->getCartId($product->getData('cart'));

$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :

?>

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $item['name'] ?? "Product description" ?></title>


            <meta charset="UTF-8">
            <title>Description</title>

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!--            Boostrap link-->
            <!--            CSS-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <!--            JS-->

        </head>

        <body>

            <link rel="stylesheet" href="../styles/style1.css">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="white-box">
                            <img src="<?php echo $item['image'] ?? "../images/grey.png" ?>" class="img-responsive img-big" width="300px">
                            <p>
                                <span style="color: #0000ff; font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;">
                                    <strong>Extra service:</strong>
                                </span>

                            </p>
                            <p style="padding-left: 30px;"><span style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 12pt; color: #000000;">♦ <span style="color: #ff0000;"><b><span style="color: #000000;">12 Months Genuine </span> Warranty <span style="color: #000000;"></span></b></span></span></p>
                            <p style="padding-left: 30px;"><span style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 12pt; color: #000000;">♦ <strong><span style="color: #ff0000;">Free</span> cleaning and installation support.</strong></span>
                            </p>
                            <p style="padding-left: 30px;"><span style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 12pt; color: #000000;"><strong>♦ <span style="color: #ff0000;">Free</span> transport.</strong></span>
                            </p>
                            <p style="padding-left: 30px;"><span style="font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 12pt; color: #000000;"><strong>♦ <span style="color: #ff0000;">Shockproof bag.</span></strong></span>
                            </p>


                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">

                        <h3 class="name"><?php
                                            echo $item['name'] ?? "Apple Macbook Pro M1 2020 (MYD82SA/A) Space Grey";
                                            echo " ";
                                            echo $item['CPU'] ?? "Intel Core i5 12500H";
                                            echo " ";
                                            echo $item['RAM'] ?? "DDR4 8GB (1 x 8GB) 3200MHz";
                                            echo " ";
                                            echo $item['GPU'] ?? "512GB SSD NVMe M.2 PCIe Gen4";
                                            echo " ";
                                            echo $item['Screen'] ?? "15.6\" FullHD 144Hz, IPS Panel";

                                            ?></h3>

                        <div class=" vc_custom_1600254371583">

                            <table>
                                <tbody>

                                    <tr class="border-bottom border-secondary">
                                        <th>Brand</th>
                                        <td>
                                            <p class="p-des"><?php echo $item['brand'] ?? "Apple" ?> </p>
                                        </td>
                                    </tr>

                                    <tr class="border-bottom border-secondary">
                                        <th>CPU</th>
                                        <td>
                                            <p class="p-des"><?php echo $item['CPU'] ?? "Intel Core i5 12500H" ?> </p>
                                        </td>
                                    </tr>

                                    <tr class="border-bottom border-secondary">
                                        <th>RAM</th>
                                        <td>
                                            <p class="p-des"><?php echo $item['RAM'] ?? "DDR4 8GB (1 x 8GB) 3200MHz; 2 slots, up to 64GB" ?></p>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-secondary">
                                        <th>GPU</th>
                                        <td>
                                            <p class="p-des"><?php echo $item['GPU'] ?? "Geforce RTX 3050 4GB" ?></p>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-secondary">
                                        <th>Screen</th>
                                        <td>
                                            <p class="p-des"><?php echo $item['Screen'] ?? "15.6\" FullHD (1920 x 1080). 144Hz, IPS Panel" ?></p>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom border-secondary">
                                        <th>MEM</th>
                                        <td>
                                            <p class="p-des"><?php echo $item['Mem'] ?? "512GB SSD NVMe M.2 PCIe Gen4" ?></p>
                                        </td>
                                    </tr>

                                    <tr class="border-bottom border-secondary">
                                        <th>Weight</th>
                                        <td>
                                            <p class="p-des"><?php echo $item['Weight'] ?? "2.45 kg" ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3>Price:</h3>
                        <h2>
                            <?php echo number_format($item['price'] ?? "33300000");
                            echo " VND";
                            ?>
                        </h2>

                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1 ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1 ?>">

                            <?php
                            if (in_array($item['item_id'], $in_cart ?? [])) {
                                echo '<button type="submit" disabled name="cart_add" class="btn btn-primary btn-rounded mr-1">
                            In the cart
                        </button>';
                            } else {
                                echo '<button type="submit" name="cart_add" class="btn btn-primary btn-rounded mr-1">
                            Add to cart
                        </button>';
                            }
                            ?>


                        </form>



                    </div>


                </div>

            </div>


        </body>
<?php
    endif;
endforeach;
?>
<?php
include 'footer.php'
?>