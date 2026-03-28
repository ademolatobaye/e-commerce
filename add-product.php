<?php
include('session-check.php');
include('db_conn.php');
$id = 1;
$sql = "SELECT * FROM product_table WHERE id='$id'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$rows = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico">

    <!-- TITLE -->
    <title>THEADEMOLA – STAFF DASHBOARD</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
     <link href="assets/css/style.css" rel="stylesheet">

	<!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">
</head>

<body class="app sidebar-mini ltr light-mode">
    <?php
    include("menu.php");
    ?>

    <!-- GLOBAL-LOADER -->
    <!-- <div id="global-loader">
        <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
    </div> -->
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">New Product</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">New Product</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="javascript:history.back()"> > Go back</a></li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <form method="post" enctype="multipart/form-data">
                                        <?php
                                        include("db_conn.php");
                                        date_default_timezone_set("Africa/Lagos");
                                        $rand= rand(1000,9999);
                                        $today= date("dmyhis");
                                        $date= date("Y-m-d");
                                        $UIN= "PRODUCT" . $today . $rand;
                                        error_reporting(E_ALL);
                                        if(isset($_REQUEST["submit"])){
                                            $productname = trim(addslashes($_REQUEST["productname"]));
                                            $costprice = trim(addslashes($_REQUEST["costprice"]));
                                            $sellingprice = trim(addslashes($_REQUEST["sellingprice"]));
                                            $quantity = trim(addslashes($_REQUEST["quantity"]));
                                            $profit = $sellingprice - $costprice;
                                            $category =  trim(addslashes($_REQUEST["category"]));
                                            $description = trim(addslashes($_REQUEST["description"]));
                                            $staff = $session_role;

                                            // FILE UPLOAD
                                            $productimage = $_FILES["productimage"]['name'];
                                            $target = "productupload/";
                                            $target = $target . $_FILES["productimage"]['name'];

                                        // CHECKING FOR DUPLICATE PRODUCTS.
                                            $check = mysqli_query($conn, "SELECT * FROM product_table WHERE productname = '$productname' OR productimage = '$productimage'");
                                           $checkrows = mysqli_num_rows($check);
                                        
                                        if($checkrows > 0){
                                        echo "<script>alert('Product already exists.')</script>";
                                        }
                                        else{

                                        // CHECKING FOR DUPLICATE FILE UPLOAD
                                        if(move_uploaded_file($_FILES["productimage"]['tmp_name'], $target)){
                                       
                                    //  END

                                            // INSERTING VALUES INTO DATABASE.
                                        $sql="INSERT INTO product_table (uin, productname, `date`, costprice, sellingprice, quantity, productimage, profit, category, `description`, staff) VALUES ('$UIN', '$productname', '$date', '$costprice', '$sellingprice', '$quantity', '$productimage', '$profit', '$category', '$description', '$staff')";
                                        mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        $num = mysqli_insert_id($conn);
                                        if(mysqli_affected_rows($conn)!= 1){
                                        $message = "Error inserting record into database.";
                                        }
                                        else{

                                        echo "<script>alert('Product successfully added.');
                                            window.location.href='product.php'</script>";
                                    }
                                        }
                                        }
                                        }
                                        
                                        

                                        ?>

                                    <div class="card-header">
                                        <div class="card-title">Add New Product</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">

                                        <input type="hidden" class="form-control" name="uin" value="<?php echo $UIN;?>">

                                        <input type="hidden" class="form-control" name="date" value="<?php echo $date;?>">

                                            <label class="col-md-3 form-label">Product Name :</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Input product's name" name="productname">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Cost Price :</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="costprice" placeholder="Input product's cost price">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Selling Price :</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="sellingprice" placeholder="Input product's selling price">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Quantity :</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" name="quantity" placeholder="Input product's quantity">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-9">
                                                <input type="hidden" class="form-control" name="profit" placeholder="Input product's profit" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Category :</label>
                                            <div class="col-md-9">
                                                <select class="form-control form-select select2" data-bs-placeholder="Select Category" name="category">
                                                    <option value="">Select Category</option>
                                                    <option value="Food">Food</option>
                                                    <option value="Drinks">Drinks</option>
                                                    <option value="Shoe">Shoe</option>
                                                    <option value="Wristwatch">Wristwatch</option>
                                                    <option value="Gadget">Gadget</option>
                                                    <option value="Electronics">Electronics</option>
                                                    <option value="Fashion">Fashion</option>
                                                    <option value="Deodorant">Deodorant</option>
                                                    <option value="Home Decor">Home Decor</option>
                                                    <option value="Furniture">Furniture</option>
                                            </select>
                                            </div>
                                        </div>

                                        <!-- Row -->
                                        <div class="row">
                                            <label class="col-md-3 form-label mb-4">Product Description :</label>
                                            <div class="col-md-9 mb-4">
                                                <textarea class="content" name="description" placeholder="Write a description..."></textarea>
                                            </div>
                                        </div>
                                        <!--End Row-->

                                        <!--Row-->
                                        <div class="row">
                                            <label class="col-md-3 form-label mb-4">Product Upload :</label>
                                            <div class="col-md-9">
                                                <input id="demo" type="file" name="productimage" accept=".jpg, .png, image/jpeg, image/png">
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" name="submit" class="btn btn-primary btn-block" onclick="return confirm('Are you sure to add product?')">Add Product</button>
                                                
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /ROW-1 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>

      
       <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <script>document.write(new Date().getFullYear())</script> <a href="">THEADEMOLA</a>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/select2.js"></script>

	<!-- TypeHead js -->
	<script src="assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="assets/js/typehead.js"></script>

    <!-- INTERNAL WYSIWYG Editor JS -->
    <script src="assets/plugins/wysiwyag/jquery.richtext.js "></script>
    <script src="assets/plugins/wysiwyag/wysiwyag.js "></script>

    <!-- INTERNAL File-Uploads Js-->
    <!-- <script src="assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="assets/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="assets/plugins/fancyuploder/fancy-uploader.js"></script> -->

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="assets/plugins/p-scroll/pscroll.js"></script>
    <script src="assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

    <!-- Custom-switcher -->
    <script src="assets/js/custom-swicher.js"></script>

    <!-- Switcher js -->
    <script src="assets/switcher/js/switcher.js"></script>

</body>

</html>