<button><a href="./Session.php">Add Product</a></button>
<link rel="stylesheet" href="./Sp.css">
<?php
session_start();

if(isset($_SESSION['Product']) && is_array($_SESSION['Product'])){
    ?>
    <h2>San Pham Nam</h2> 
    <div class="container_nam">

    <?php
   
    foreach ($_SESSION['Product'] as $key => $value) {
                    foreach ($value as $keys => $values) {
                        if($values["Gender"]=="Nam"){
                            ?>
                            <div>
                                <img src="<?php echo $values["Img"] ?>" alt="">
                                <h5><?php echo $values["Name"] ?></h5>
                                <p><?php echo $values["Code"] ?></p>
                                <p><?php echo $values["Price"] ?></p>
                                <button onclick="Buy()">Mua ngay</button>
                            </div>
                            <?php
                        }
                        
                    }
                    ?>
       
       

       <?php
    }
    ?>
    </div>
    <?php

    ///
    ?>
    <h2>San Pham nu</h2>
    <div class="container_nu">

    <?php
   
    foreach ($_SESSION['Product'] as $key => $value) {
                    foreach ($value as $keys => $values) {
                        if($values["Gender"]=="Nu"){
                            ?>
                            <div>
                                <img src="<?php echo $values["Img"] ?>" alt="">
                                <h5><?php echo $values["Name"] ?></h5>
                                <p><?php echo $values["Code"] ?></p>
                                <p><?php echo $values["Price"] ?></p>
                                <button onclick="Buy()">Mua ngay</button>
                            </div>
                            <?php
                        }
                        
                    }
                    ?>
       
       

       <?php
    }
    ?>
    </div>
    <?php
}

?>
<script>
    function Buy(){
        alert("Them thanh cong");
    }
</script>