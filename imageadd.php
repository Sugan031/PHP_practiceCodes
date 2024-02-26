<?php
 require('./connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="my_image">

        <input type="submit" name="submit" value="upload">
        <br><br>
        <!-- <?php
            if(mysqli_num_rows($res) >0){
                while($image = mysqli_fetch_assoc($res)){
        ?>
            <div class="div1">
                    <img src="imgUploads/<?php $image["image_url"]; ?>" alt="image is lo">
            </div>
         <?php               
                }
            }
        ?> -->
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"]) && isset($_FILES["my_image"])){
    echo "<pre>";
    print_r($_FILES["my_image"]);
    echo "</pre>";

    $img_name = $_FILES["my_image"]["name"];
    $img_size = $_FILES["my_image"]["size"];
    $tmp_name = $_FILES["my_image"]["tmp_name"];
    $error    = $_FILES["my_image"]["error"];

    if($error === 0){
        if($img_size>650000){
            $em = "sorry your file is too large";
            echo $em;
        }
        else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $alloed_ex = array('png','jpg', 'jpeg', 'webp');
            if(in_array($img_ex_lc, $alloed_ex)){
                $new_img_name    = uniqid("IMG-").'.'. $img_ex_lc;
                $img_upload_path = 'imgUploads/'. $new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);

                //insert into db
                $sql = "INSERT INTO image_table(image_url) VALUES('$new_img_name')";
                mysqli_query($conn,$sql);

                // $sqlSelect = "SELECT * FROM image_table ORDER BY id DESC";
                // $res = mysqli_query($conn, $sqlSelect);

            }
            else{
                echo "This type of files not allowed";
            }
        }
    }
    else{
        echo "Unknown error occured!";
    }
}

?>