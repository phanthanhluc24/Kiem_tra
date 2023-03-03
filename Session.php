
<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        <label for="">Img</label>
        <input type="text" name="img"> <br>
        <label for="">Name</label>
        <input type="text" name="name"><br>
        <label for="">Price</label>
        <input type="number" name="price"><br>
        <label for="">Code</label>
        <input type="text" name="code"><br>
        <label for="">Gender</label>
        <select name="gender" id="">
            <option value="Nam">Nam</option>
            <option value="Nu">Nu</option>
        </select><br>
        <input type="submit" name="sbm" value="submit">

    <?php
         session_start();   
        if(!isset($_SESSION["Product"])) $_SESSION["Product"]=[];
        if(isset($_POST['sbm'])){
            $Img=$_POST['img'];
            $Name=$_POST['name'];
            $Price=$_POST['price'];
            $Code=$_POST['code'];
            $Gender=$_POST['gender'];

            if($Img!='' && $Name!='' && $Price!='' && $Code!=""){
                $mang=array(
                    "Product"=>array(
                        "Img"=>$Img,
                        "Name"=>$Name,
                        "Price"=>$Price,
                        "Code"=>$Code,
                        "Gender"=>$Gender
                    )
                    );
                $_SESSION["Product"][]=$mang;
                header("location:product.php");
            }
            else{
            echo "<script> alert('vui lòng điền đâỳ đủ thông tin')</script>";
            }
        }
?>