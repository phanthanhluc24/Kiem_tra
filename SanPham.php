<link rel="stylesheet" href="./Sp.css">
<?php
$Product = array(
    "Nam" => array(
        "sp1" => array(
            "ID" => 1,
            "Name" => "Quần short The Cosmo (Đen)- <br> TC1025011BA",
            "Code" => "TC1",
            "Price" => "398,000",
            "Img" => "data:image/jpeg;base64,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"
        ),
        "sp2" => array(
            "ID" => 2,
            "Name" => "Quần short The Cosmo (Đen)- <br> TC1025011BA",
            "Code" => "TC2",
            "Price" => "345,000",
            "Img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD2c2qhmMj5l2MteAuYd4C9AhTraCNvE4yhA&usqp=CAU"
        ),
        "sp3" => array(
            "ID" => 3,
            "Name" => "Quần short The Cosmo (Đen)- <br> TC1025011BA",
            "Code" => "TC3",
            "Price" => "545,000",
            "Img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkongEayDk_kfIr5TrVHAv3lldzHCykc6o4Q&usqp=CAU"
        ),
    ),
    "Nu" => array(
        "sp1" => array(
            "ID" => 1,
            "Name" => "Quần baggy đen san trọng QQ ",
            "Code" => "BC1",
            "Price" => "495,000",
            "Img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYJpdxqCVukhFEtttXm2ATwKdeBwV8vXFptrGrvMkY-WNON2CAN9MgiYhmBrKWeTGFNuo&usqp=CAU"
        ),
        "sp2" => array(
            "ID" => 2,
            "Name" => "Quần baggy đen san trọng QQ ",
            "Code" => "BC2",
            "Price" => "495,000",
            "Img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRslwYrYGoIpBRqslW9RhDd7XLrY4Op7qJ0eA&usqp=CAU"
        ),
        "sp3" => array(
            "ID" => 3,
            "Name" => "Quần baggy đen san trọng QQ ",
            "Code" => "BC3",
            "Price" => "495,000",
            "Img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTONTZfP0NVSxHH_wIhi1LHcO4OJZYzn9xh5w&usqp=CAU"
        ),
    )
);
foreach ($Product as $key => $value) {
    if ($key == "Nam") {
    ?>
        <div class="New"><?php echo $key ?></div>
        <?php foreach ($value as $keys=> $values) {
        ?> 
        <div class="Item">
            <div>
            <img class="image" src="<?php echo $values['Img'] ?>" alt="">
                        <h5><?php echo $values['Name'] ?></h5>  
                        <p><?php echo $values['Code'] ?></p>   
                        <p><?php echo $values['Price'] ?></p> 
                        <form action="" method="post">
                        <button name="ok">Thêm vào giỏ hàng</button> 
                        </form>
            </div>
        </div>
        <?php
        }
    }
    elseif($key == "Nu"){
        ?>
        <div class="New"><?php echo $key ?></div>
        <?php foreach ($value as $keys => $values) {
        ?> 
        <div class="Pro">
            <div>
            <img class="image" src="<?php echo $values['Img'] ?>" alt="">
                        <h5><?php echo $values['Name'] ?></h5>  
                        <p><?php echo $values['Code'] ?></p>   
                        <p><?php echo $values['Price'] ?></p>
                        <form action="" method="post">
                        <button name="ok">Thêm vào giỏ hàng</button> 
                        </form>
                      
            </div>
        </div>
        <?php
        }
    }
    }
    function Oder(){
        if(isset($_POST['ok'])){
          echo "<script> alert('thank you your order ') </script>" ;
        }
    }
   Oder();

?>