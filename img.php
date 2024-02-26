<?php
    require("./connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* .div1 {
  width: 35mm;
  height: 45mm;
  overflow: hidden;
  border: 1px solid #000; /* Optional: add a border for visual representation */

/* .div1 img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Maintain aspect ratio while covering the container */
 /* */ 

    </style>
</head>
<body>
<?php
        $sqlSelect = "SELECT * FROM image_table ORDER BY id DESC";
        $res = mysqli_query($conn, $sqlSelect);
            if(mysqli_num_rows($res) >0){
                while($image = mysqli_fetch_assoc($res)){
        ?>
            <div class="div1">
                    <img src="./vidUploads/VID-65d5d6bb1a420.mp4" alt="<?php echo $image["video_url"];?>">
            </div>

         <?php               
                }
            }
        ?>
</body>
</html>