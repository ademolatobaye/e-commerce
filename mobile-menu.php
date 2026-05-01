    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
            <form action="search.php" method="post" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <li><a href="wishlist.php">Wishlist</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <?php if (isset($_SESSION['customer_email'])) { ?>
                            <li><a href="my-account.php"><?php echo $_SESSION['fullname']; ?></a></li>
                            <li>
                                <a href="signout.php" onclick="return confirm('Are you certain to sign out?')">
                                    <i class="w-icon-account"></i> Sign Out
                                </a>
                            </li>
                        <?php } else { ?>
                            <li><a href="my-account.php">My Account</a></li>
                            <li><a href="../reg/user-login.php">Sign In</a></li>
                            <li><a href="../reg/index.php">Register</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        <?php
                        $sql = "SELECT * FROM `category` ORDER BY id ASC";
                        $mobileCatResult = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($mobileCatResult) > 0) {
                            while ($row = mysqli_fetch_array($mobileCatResult)) {
                        ?>
                        <li>
                            <a href="shop.php?cat=<?php echo $row['id']; ?>"><?php echo $row['categoryname']; ?></a>
                        </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->