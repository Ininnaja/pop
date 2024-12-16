<?php

    session_start();
    include_once 'config.php';

    // product all
    $query = mysqli_query($conn, "SELECT * FROM durian");
    $rows = mysqli_num_rows($query);

// var product form
$result = [
    'Price' => '',
    'Date' => '',
    'Graph' => '',
];

// product select edit
if(!empty($_GET['Product_id'])) {
    $query_durian = mysqli_query($conn, "SELECT * FROM durian WHERE Product_id='{$_GET['Product_id']}'");
    $row_durian = mysqli_num_rows($query_durian);

    if($row_product == 0) {
        header('location:' . $base_url . '/durian-insert.php');
    }

    $result = mysqli_fetch_assoc($query_durian);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <nav>
        <div class="nav-container">
            <a href="index.php">
                <img src="./img/pop.png" class="logopop">
            </a>
        </div> 
    </nav>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Brygada+1918%3A400"/>
    <link rel="stylesheet" href="index.css">
    <link href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</head>
<body class="bg-body-tertiary">
    <div class="container" style="margin-top: 30px;">
        <?php if(!empty($_SESSION['message'])): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <div class="row g-5">
            <div class="col-md-8 col-sm-12">
                <form action="<?php echo $base_url; ?>/durian-form.php" method="post" enctype="multipart/form-data">
                    <div class="row g-5 mb-5">
                        <div class="col-sm-6">
                            <label class="form-label">Price</label>
                            <input type="text" name="Price" class="form-control" value="<?php echo $result['Price']; ?>">
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">Date</label>
                            <input type="date" name="Date" class="form-control" value="<?php echo $result['Date']; ?>">
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">Graph</label>
                            <input type="text" name="Graph" class="form-control" value="<?php echo $result['Graph']; ?>">
                        </div>
                    </div>
                    <?php if(empty($result['id'])): ?>
                        <button class="btn btn-primary" type="submit"><i class="fa-regular fa-floppy-disk me-1"></i>Create</button>
                    <?php else: ?>
                        <button class="btn btn-primary" type="submit"><i class="fa-regular fa-floppy-disk me-1"></i>Update</button>
                    <?php endif; ?>
                    <a role="button" class="btn btn-secondary" href="<?php echo $base_url; ?>/index.php"><i class="fa-solid fa-rotate-left me-1"></i>Cancel</a>
                    <hr class="my-4">
                </form>
            </div>
            <div class="row">
                <?php if(!empty($statusMsg)) { ?>
                    <div class = "alert alert-secondary" role="alert">
                        <?php echo $statusMsg; ?>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered border-info">
                        <thead>
                            <tr>
                                <th style="width: 200px;">Price</th>
                                <th style="width: 200px;">Date</th>
                                <th style="width: 100px;">Graph</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if($rows > 0): ?>
                            <?php while($product = mysqli_fetch_assoc($query)): ?>
                            <tr>
                                <td><?php echo number_format($product['Price'], 2); ?></td>
                                <td>
                                    <?php echo $product['Date']; ?>
                                </td>
                                <td>
                                    <?php echo $product['Graph']; ?>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="4"><h4 class="text-center text-danger">ไม่มีรายการสินค้า</h4></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        <script src="<?php echo $base_url; ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
