<?php
include('customer-session-check.php');
include('db_conn.php');

// Redirect if not logged in
if (!isset($_SESSION['customer_email'])){
    header("Location: ../reg/user-login.php?redirect=cart");
    exit();
}

if (!isset($_SESSION['invoicenumber'])){
    header("Location: index.php");
    exit();
}

$invoiceNumber = $_SESSION['invoicenumber'];

// Fetch User's cart items using invoicenumber
$stmt = mysqli_prepare($conn, "SELECT * FROM invoiceorder WHERE invoicenumber = ? AND paymentstatus = 'Pending' ORDER BY product_id DESC");
mysqli_stmt_bind_param($stmt, 's', $invoiceNumber);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$total = 0;
$cartItems = array();
while ($row = mysqli_fetch_assoc($result)) {
    $total += (float)$row['amount'];
    $cartItems[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>DEE MART || CART</title>
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>

<body>
    <div class="page-wrapper">
        <?php include("header.php"); ?>

        <main class="main cart">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="active"><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li>Complete Order</li>
                    </ul>
                </div>
            </nav>

            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg mb-10">
                        <div class="col-lg-8 pr-lg-4 mb-6">
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-name"><span>Product</span></th>
                                        <th></th>
                                        <th class="product-price"><span>Price</span></th>
                                        <th class="product-quantity"><span>Quantity</span></th>
                                        <th class="product-subtotal"><span>Subtotal</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($cartItems) > 0): ?>
                                        <?php foreach ($cartItems as $row): ?>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <div class="p-relative">
                                                    <a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                        <figure>
                                                            <img src="../dashboard/productupload/<?php echo $row['productimage']; ?>" 
                                                                 alt="product" width="300" height="338">
                                                        </figure>
                                                    </a>
                                                    <a href="remove-item.php?product_id=<?php echo $row['product_id']; ?>" 
                                                       class="btn btn-close" 
                                                       onclick="return confirm('Remove this item?')">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="product-name">
                                                <a href="product.php?uin=<?php echo $row['uin']; ?>">
                                                    <?php echo htmlspecialchars($row['productname']); ?>
                                                </a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">&#8358;<?php echo number_format((float)$row['amount'] / (int)$row['quantity'], 2); ?></span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="input-group">
                                                    <input style="text-align:center;" class="quantity form-control" type="number" 
                                                           value="<?php echo $row['quantity']; ?>">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">&#8358;<?php echo number_format((float)$row['amount'], 2); ?></span>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="5" class="text-center py-4">
                                                Your cart is empty. <a href="shop.php">Continue Shopping</a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <div class="cart-action mb-6">
                                <a href="shop.php" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                                <a href="clear-cart.php" class="btn btn-rounded btn-default btn-clear" onclick="return confirm('Are you certain to clear cart?')">Clear Cart</a>
                            </div>
                        </div>

                        <div class="col-lg-4 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar">
                                <div class="cart-summary mb-4">
                                    <h3 class="cart-title text-uppercase">Order Total</h3>
                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Subtotal</label>
                                        <span>&#8358;<?php echo number_format($total, 2); ?></span>
                                    </div>\
                                    <hr class="divider mb-6">
                                    <div class="order-total d-flex justify-content-between align-items-center">
                                        <label>Total</label>
                                        <span class="ls-50">&#8358;<?php echo number_format($total, 2); ?></span>
                                    </div>
                                    <a href="checkout.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-block btn-dark btn-icon-right btn-rounded btn-checkout">
                                        Proceed to checkout<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End of Main -->

        <?php
        include("footer.php");
        ?>
       
    </div>
    <!-- End of Page Wrapper -->

   <?php
   include("sticky-footer.php");
   ?>
    
    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70"> <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle> </svg> </a>
    <!-- End of Scroll Top -->

    <?php
    include("mobile-menu.php");
    ?>
   
    <!-- Plugin JS File -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/sticky/sticky.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.min.js"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9da9eb4ac8b762f4',t:'MTc3MzIyNTM5Ng=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"ecd4920e43e14654b78e65dbf8311922","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>

    <script>
    window.addEventListener('load', function () {
        setTimeout(function () {
            document.querySelectorAll('.cart-table .quantity').forEach(function (input) {
                var dbValue = input.getAttribute('value');
                input.value = dbValue;
            });
        }, 100);
    });
</script>

</body>

</html>