<?php
require("predis-2.x/autoload.php");
require_once("./connect.php");
try{
    Predis\Autoloader::register();

   
    $redis = new Predis\Client([
        'scheme' => 'tcp',
        'host'   => '127.0.0.1',
        'port'   => 6379,
    ]);

    // print_r($redis)."<br><br><br>";

    // $redis->set("name","Sugan");

    // if($redis->exists("name")){
    //     $name = $redis->get("name");
    //     echo $name;
    //     echo($redis->getrange("name",0,3));
    //     echo($redis->strlen("name"))."";
    //     echo "<br><br><br>";

    //     $redis->hmset("cricket",array("CSK","MI","RCB","KKR","SRH","LSG","GT","DC","PBKS","RR"));
    //     print_r($redis->hgetall("cricket"));

    //     $redis->del("name");
    //     echo $redis->get("name");
    // }

       $cachedName = $redis->get("name");
       if($cachedName){
        echo"the data is from redis cache<br>";
        print_r($cachedName);
        exit();
       }
       else{
             echo "the data is from database<br>";
            $sql = 'SELECT * FROM person_details';
            $result = $conn->query($sql);
            $temp ="";
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["name"]."<br>";
                    $temp .= $row["name"];

                }
              }
              $redis->set("name", $temp);
              exit();
       }

}catch(Exception $e){
    echo 'Error'.$e->getMessage().'';
}
?>