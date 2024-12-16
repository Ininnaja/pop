<?php
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้าว</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Brygada+1918%3A400"/>
    <link rel="stylesheet" href="Durian.css">
</head>
<body>
    <nav>
        <div class="nav-container">
            <a href="index.php">
                <img src="./img/pop.png" class="logopop">
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="intro-Product">
            <div class="name-item">
                <p style="font-size: 42px;">ข้าว</p>
            </div>
        </div>
        <div class="city-product">
            <div class="city-item">
                <p style="font-size: 28px;">จังหวัดเด่นๆที่รับซื้อ</p>
                <p style="font-size: 24px;">ขอบเเก่น ศรีสะเกษ อำนาจเจริญ ยโสธร สุรินทร์ ร้อยเอ็ด บุรีรัมย์</p>
            </div>
        </div>
        <div class="imgand-price">
            <div class="img-Product">
                <img class="product-img" src="./assets/rice1.png"/>
            </div>
            <div class="price-Product">
                <div class="price1">
                    <p style="font-size: 32px;">ราคา</p>
                    <?php 
                        $sql = "SELECT Price as Price FROM rice";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetch();
                    ?>
                    <div style ="font-size: 32px;" >
                        <?=$fetch['Price']?>
                        <?style="font-size: 24px;">บาท/ตัน<?>
                    </div>
                </div>
                <div class="price2">
                    <p style="font-size: 24px;">วันที่</p>
                    <?php 
                        $sql = "SELECT Date as Date FROM rice";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $fetch = $query->fetch();
                    ?>
                    <div style="font-size: 24px;">
                        <?=$fetch['Date']?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="intro-Product">
            <p style="font-size: 36px;">กราฟ</p>
        </div>
        <div class="img-graph">
            <img class="graph-img" src="./assets/g-rice.png"/>
        </div>
        <div class="intro-Product">
            <a href="index.php"><button class="seatch-button">ย้อนกลับ</button></a>
        </div>
    </div>
    <nav>
        <div class="nav-container">
            <p class="about-this-website-copyright-2030-VDj">
                About this website 
                <br/>
                Copyright 2030
                </p>
        </div>
    </nav>
</body>