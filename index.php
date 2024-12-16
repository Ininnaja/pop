<!DOCTYPE html>
<html lang="en">
<head>
    <nav>
        <div class="nav-container">
            <div class="nav-con">
                <div class="logo">
                    <a href="index.php"><img src="./img/pop.png" class="logopop"></a>
                </div>
            </div>
        </div>
    </nav>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Brygada+1918%3A400"/>
    <link rel="stylesheet" href="index.css">
    <link href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        function searchsomething(input) {
            var searchText = input.value.toLowerCase();
            searchFruits(searchText);
        }

        function searchFruits(searchText) {
            var fruits = [
                { name: "ทุเรียน  ", url: "Durian.php" },
                { name: "ยางพารา  ", url: "para.php" },
                { name: "ปาล์ม  ", url: "palm.php" },
                { name: "ข้าว  ", url: "rice.php" },
                { name: "เงาะ  ", url: "rambutan.php" },
                { name: "มังคุด ", url: "mangosteen.php" },
                { name: "มันสำปะหลัง  ", url: "cassava.php" },
                { name: "ข้าวโพด  ", url: "corn.php" }
            ];

            var matchingFruits = fruits.filter(function(fruit) {
                return fruit.name.toLowerCase().includes(searchText);
            });

            displaySearchResults(matchingFruits);
        }

        function displaySearchResults(fruits) {
            var resultsContainer = document.querySelector(".search-results");
            resultsContainer.innerHTML = "";

            if (fruits.length === 0) {
                resultsContainer.innerHTML = "ไม่พบผลผลิตที่คุณค้นหา";
            } else {
                fruits.forEach(function(fruit) {
                    var link = document.createElement("a");
                    link.href = fruit.url;
                    link.textContent = fruit.name;
                    resultsContainer.appendChild(link);
                });
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <p style="font-size: 42px;">ผลผลิตแนะนำ</p>
    </div>
    <div class="container">
        <div class="intro-Product">
            <div class="intro-1">
                <a href="Durian.php"><img class="introdurian" src="./assets/durian1.jpg"/></a>
            </div>
            <div class="intro-1">
                <a href="palm.php"><img class="introdurian" src="./assets/parm1.jpg"/></a>
            </div>
        </div>
        <div class="search">
            <p style="font-size: 42px;">ค้นหา</p>
            <form class="">
                <input onkeyup="searchsomething(this)" id="txt_search" type="text" class="sidebar-search" placeholder="Search" required>
            </form>
            <div class="container">
                <div class="intro-Product">
                    <div style="font-size: 28px;" class="search-results"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p style="font-size: 42px;">ผลผลิตยอดนิยม</p>
    </div>
    <div class="container">
        <div class="product">
            <div class="product-item">
                <a href="Durian.php"><img class="product-img" src="./assets/rectangle-28-hHK.png"/></a>
                <p class="name-item">
                    <a href="Durian.php">ทุเรียน</a>
                </p>
            </div>
            <div class="product-item">
                <a href="para.php"><img class="product-img" src="./assets/rectangle-28-e6M.png"/></a>
                <p class="name-item">
                    <a href="para.php">ยางพารา</a>
                </p>
            </div>
            <div class="product-item">
                <a href="palm.php"><img class="product-img" src="./assets/rectangle-28-HLM.png"/></a>
                <p class="name-item">
                    <a href="palm.php">ปาล์ม</a>
                </p>
            </div>
            <div class="product-item">
                <a href="rice.php"><img class="product-img" src="./assets/rectangle-28.png"/></a>
                <p class="name-item">
                    <a href="rice.php">ข้าว</a>
                </p>
            </div>
            <div class="product-item">
                <a href="rambutan.php"><img class="product-img" src="./assets/rectangle-28-rXs.png"/></a>
                <p class="name-item">
                    <a href="rambutan.php">เงาะ</a>
                </p>
            </div>
            <div class="product-item">
                <a href="mangosteen.php"><img class="product-img" src="./assets/rectangle-28-7Ny.png"/></a>
                <p class="name-item">
                    <a href="mangosteen.php"> มังคุด</a>
                </p>
            </div>
            <div class="product-item">
                <a href="cassava.php"><img class="product-img" src="./assets/rectangle-28-xDP.png"/></a>
                <p class="name-item">
                    <a href="cassava.php">มันสำปะหลัง</a>
                </p>
            </div>
            <div class="product-item">
                <a href="corn.php"><img class="product-img" src="./assets/rectangle-28-9v1.png"/></a>
                <p class="name-item">
                    <a href="corn.php"> ข้าวโพด</a>
                </p>
            </div>
            <!-- รายการผลไม้อื่น ๆ ที่คุณต้องการแสดง -->
        </div>
    </div>
    <!-- ส่วนที่จะแสดงผลลัพธ์ค้นหา -->
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
</html>
