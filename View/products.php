<!--Products-->
<?php
include 'header.php';
?>
<?php
$product_info = $product->getData();
$length = count($product_info);
print_r($length);
?>

<body>

<link rel="stylesheet" href="../styles/style.css">

<div class="container-fluid">

    <article class="text-center">
        <?php
            for($i=0; $i<$length; $i +=0){
                $j = 0;
                ?>
        <div class="new_list row">
        <?php for($j; $j < 3; $j++){
            if($i == $length){
                break;
            }
            ?>
            <div class="news_item col-lg-4 col-md-6" >
                <a href="apple_pro_m1.html" style="color: black; background-color: white; text-decoration: none;">
                    <img src="<?php echo $product_info[$i]['image'] ?>" alt="" class="img-fluid">
                    <h1>
                        <b style="background-color: white;font-size: large;"><?php echo $product_info[$i]['name'] ?></b>
                    </h1>
                </a>
                <div class="price_tag">
                    <?php echo $product_info[$i]['price'] ?>
                </div>
                <div class="spec">
                    <table>
                        <tbody>
                        <tr>
                            <td class="item-left"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><img src="../images/cpu.png"></span></td>
                            <td class="item-right"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><?php echo $product_info[$i]['CPU'] ?></span></td>
                            <td class="item-left"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><img src="../images/gpu.png"></span></td>
                            <td class="item-right"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><?php echo $product_info[$i]['GPU'] ?></span></td>
                        </tr>
                        <tr>
                            <td class="item-left"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><img src="../images/ram.png"></span></td>
                            <td class="item-right"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><?php echo $product_info[$i]['RAM'] ?></span></td>
                            <td class="item-left"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><img src="../images/hw.png"></span></td>
                            <td class="item-right"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><?php echo $product_info[$i]['Memory'] ?></span></td>
                        </tr>
                        <tr>
                            <td class="item-left"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><img src="../images/weight.png"></span></td>
                            <td class="item-right"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><?php echo $product_info[$i]['Weight'] ?></span></td>
                            <td class="item-left"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><img src="../images/size.png"></span></td>
                            <td class="item-right"><span style="font-size: 12pt; font-family: Tahoma, Arial, Helvetica, sans-serif;"><?php echo $product_info[$i]['Screen'] ?></span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php
            $i++; // increase i
        } ?>
        </div>

        <?php } ?>

    </article>


</div>

</body>

<?php
include 'footer.php'
?>
