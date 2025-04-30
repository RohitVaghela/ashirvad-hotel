<header class="cs_site_header cs_style_1 cs_transparent_header cs_primary_color cs_sticky_header">
    <div class="cs_main_header">
        <div class="container">
            <div class="cs_main_header_in">
                <div class="cs_main_header_left">
                    <a class="cs_site_branding" href="index">
                        <img src="<?= LOGO ?>" alt="ashirwad logo">
                    </a>
                </div>
                <div class="cs_main_header_center">
                    <nav class="cs_nav cs_fs_13 cs_semibold">
                        <ul class="cs_nav_list">

                            <!-- Index Link -->
                            <li class="<?= $currentPage == 'index.php' ? 'active' : '' ?>"><a href="index">Home</a></li>

                            <!-- About Us Link -->
                            <li class="menu-item-has-children <?= in_array($currentPage, ['about-us.php', 'resort.php', 'management.php']) ? 'active' : '' ?>">
                                <a href="javascript:void(0);">About Us</a>
                                <ul>
                                    <!-- <li class="<?= $currentPage == 'about-us.php' ? 'active' : '' ?>">
                                        <a href="about-us.php">About Us</a>
                                    </li> -->
                                    <li class="<?= $currentPage == 'resort.php' ? 'active' : '' ?>">
                                        <a href="resort">Resort</a>
                                    </li>
                                    <li class="<?= $currentPage == 'management.php' ? 'active' : '' ?>">
                                        <a href="management">Management</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Rooms Link -->
                            <li class="menu-item-has-children <?= in_array($currentPage, ['luxury-deluxe-room.php', 'suite-room.php', 'grand-delux-room.php']) ? 'active' : '' ?>">
                                <a href="javascript:void(0);">Rooms</a>
                                <ul>
                                    <li class="<?= $currentPage == 'luxury-deluxe-room.php' ? 'active' : '' ?>">
                                        <a href="luxury-deluxe-room">Luxury Deluxe Room</a>
                                    </li>
                                    <li class="<?= $currentPage == 'suite-room.php' ? 'active' : '' ?>">
                                        <a href="suite-room">Suite Room</a>
                                    </li>
                                    <li class="<?= $currentPage == 'grand-delux-room.php' ? 'active' : '' ?>">
                                        <a href="grand-delux-room">Grand Deluxe Room</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Services Link -->
                            <li class="<?= $currentPage == 'services.php' ? 'active' : '' ?>"><a href="services">Services</a></li>

                            <!-- Restaurant Link -->
                            <li class="menu-item-has-children <?= in_array($currentPage, ['restaurant.php', 'garden-restaurant.php', 'cafe-name.php']) ? 'active' : '' ?>">
                                <a href="javascript:void(0);">Dine</a>
                                <ul>
                                    <li class="<?= $currentPage == 'restaurant.php' ? 'active' : '' ?>">
                                        <a href="restaurant">Restaurant [A/C]</a>
                                    </li>
                                    <li class="<?= $currentPage == 'garden-restaurant.php' ? 'active' : '' ?>">
                                        <a href="garden-restaurant">Restaurant [Garden]</a>
                                    </li>
                                    <li class="<?= $currentPage == 'cafe.php' ? 'active' : '' ?>">
                                        <a href="cafe">Café</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Gallery Link -->
                            <li class="<?= $currentPage == 'gallery.php' ? 'active' : '' ?>"><a href="gallery">Gallery</a></li>

                            <!-- Contact Us Link -->
                            <li class="<?= $currentPage == 'contact-us.php' ? 'active' : '' ?>"><a href="contact-us">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="cs_main_header_right">
                    <a href="tel:<?= PHONE ?>" class="cs_btn cs_style_2 cs_medium cs_radius_20 cs_fs_15">
                        <?= PHONE ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Start Preloader -->
<div class="cs_preloader cs_accent_color cs_primary_font">
    <div class="cs_preloader_in">
        <img src="assets/img/header/loader.webp" alt="loader" style="width: 100px; height: auto;">
    </div>
</div>
<!-- End Preloader -->