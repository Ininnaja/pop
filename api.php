<?php
$con = mysqli_connect("localhost","root","123456789","pop");
$response = array();
if($con){
    $sql = "select * from datapop";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content-Type:JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['Price']=$row['Price'];
            $response[$i]['Date']=$row['Date'];
            $response[$i]['Graph']=$row['Graph'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo"DataBase connection failed";
}
?>