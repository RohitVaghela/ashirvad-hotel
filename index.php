<?php
$pageName = "Home";
$metaKeywords = "Ashirwad Hotels & Resorts, Luxury Resort Jamnagar, Wedding Venues Jamnagar, Club & Resort Gujarat, Family Resort Jamnagar, Destination Wedding Gujarat, Resort with Pool Jamnagar, Event Venue Jamnagar, Best Resort in Jamnagar";
$metaDescription = "Welcome to Ashirwad Hotels & Resorts — Jamnagar's premier destination for luxury stays, grand celebrations, and unforgettable experiences. Discover our elegant accommodations, event venues, and resort facilities designed for relaxation and joy.";
$metaImage = "";
$articleSection = '';
$articleTag = '';
$publishTime = date('Y-m-d H:i:sP');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
require_once 'includes/head.php';
?>

<body>
    <!-- Start Header Section -->
    <?php require_once 'includes/header.php'; ?>
    <!-- End Header Section -->

    <!-- Start Hero Section -->
    <section>
        <div class="cs_parallax_slider loading overflow-hidden position-relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cs_hero cs_style_1 cs_center text-center position-relative">
                        <figure class="cs_swiper_parallax_bg cs_hero_bg cs_bg_filed h-100 w-100 position-absolute top-0 start-0 mb-0" data-src="assets/img/home/home-slider-1.jpg"></figure>
                        <div class="container position-relative cs_zindex_3">
                            <!-- <div class="cs_hero_text">
                                <p class="cs_hero_subtitle cs_white_color text-uppercase d-inline-flex position-relative cs_mb_25 cs_letter_spacing_1">
                                    <img class="cs_hero_subtitle_icon_1 position-absolute start-0" src="assets/img/icons/star.svg" alt="Star">
                                    Ashirwad Club Resort & Hotel
                                    <img class="cs_hero_subtitle_icon_2 position-absolute end-0" src="assets/img/icons/star.svg" alt="Star">
                                </p>
                                <h1 class="cs_hero_title cs_fs_89 cs_white_color mb-0">Welcome to Our Luxurious <br>Hotel & Resort</h1>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cs_hero cs_style_1 cs_center text-center position-relative">
                        <figure class="cs_swiper_parallax_bg cs_hero_bg cs_bg_filed h-100 w-100 position-absolute top-0 start-0 mb-0" data-src="assets/img/home/home-slider-2.webp"></figure>
                        <div class="container position-relative cs_zindex_3">
                            <!-- <div class="cs_hero_text">
                                <p class="cs_hero_subtitle cs_white_color text-uppercase d-inline-flex position-relative cs_mb_25 cs_letter_spacing_1">
                                    <img class="cs_hero_subtitle_icon_1 position-absolute start-0" src="assets/img/icons/star.svg" alt="Star">
                                    A peaceful haven by the sea for rest and renewal
                                    <img class="cs_hero_subtitle_icon_2 position-absolute end-0" src="assets/img/icons/star.svg" alt="Star">
                                </p>
                                <h1 class="cs_hero_title cs_fs_89 cs_white_color mb-0">Greetings from Our Opulent <br>Hotel & Resort</h1>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cs_hero cs_style_1 cs_center text-center position-relative">
                        <figure class="cs_swiper_parallax_bg cs_hero_bg cs_bg_filed h-100 w-100 position-absolute top-0 start-0 mb-0" data-src="assets/img/home/home-slider-3.webp"></figure>
                        <div class="container position-relative cs_zindex_3">
                            <!-- <div class="cs_hero_text">
                                <p class="cs_hero_subtitle cs_white_color text-uppercase d-inline-flex position-relative cs_mb_25 cs_letter_spacing_1">
                                    <img class="cs_hero_subtitle_icon_1 position-absolute start-0" src="assets/img/icons/star.svg" alt="Star">
                                    A seaside oasis for tranquility and rejuvenation
                                    <img class="cs_hero_subtitle_icon_2 position-absolute end-0" src="assets/img/icons/star.svg" alt="Star">
                                </p>
                                <h1 class="cs_hero_title cs_fs_89 cs_white_color mb-0">Welcome to Our Luxurious <br>Hotel & Resort</h1>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cs_hero cs_style_1 cs_center text-center position-relative">
                        <figure class="cs_swiper_parallax_bg cs_hero_bg cs_bg_filed h-100 w-100 position-absolute top-0 start-0 mb-0" data-src="assets/img/home/home-slider-4.webp"></figure>
                        <div class="container position-relative cs_zindex_3">
                            <!-- <div class="cs_hero_text">
                                <p class="cs_hero_subtitle cs_white_color text-uppercase d-inline-flex position-relative cs_mb_25 cs_letter_spacing_1">
                                    <img class="cs_hero_subtitle_icon_1 position-absolute start-0" src="assets/img/icons/star.svg" alt="Star">
                                    A peaceful haven by the sea for rest and renewal
                                    <img class="cs_hero_subtitle_icon_2 position-absolute end-0" src="assets/img/icons/star.svg" alt="Star">
                                </p>
                                <h1 class="cs_hero_title cs_fs_89 cs_white_color mb-0">Greetings from Our Opulent <br>Hotel & Resort</h1>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="cs_slider_navigation cs_white_color">
                <div class="cs_swiper_button_prev">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z" fill="currentColor" />
                    </svg>
                </div>
                <div class="cs_swiper_button_next">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- <div class="cs_half_ternary_bg position-relative">
            <div class="container">
                <form action="search-result.html" class="cs_form cs_style_4 cs_accent_bg cs_radius_5 position-relative cs_zindex_10">
                    <div class="cs_date_items">
                        <input type="text" name="datetimes" class="cs_datetimes">
                        <div class="cs_form_item cs_date_item">
                            <label class="cs_white_color">Check in :</label>
                            <span class="cs_start_date cs_start_date_value cs_white_color">Start Date:</span>
                        </div>
                        <div class="cs_form_item cs_date_item">
                            <label class="cs_white_color">Check out :</label>
                            <span class="cs_end_date cs_end_date_value cs_white_color">End Date:</span>
                        </div>
                    </div>
                    <div class="cs_form_item">
                        <label class="cs_white_color">Rooms :</label>
                        <div class="cs_quantity_wrap">
                            <span class="cs_quantity_btn" data-initial-number="1"></span>
                            <div class="cs_quantity_dropdown cs_primary_color">
                                <div class="cs_quantity_dropdown_item">
                                    <span class="cs_quantity_title">Rooms :</span>
                                    <div class="cs_count">
                                        <button class="cs_quantity_decrement cs_center" type="button">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <span class="cs_quantity_number" data-min-value="1" data-max-value="50"></span>
                                        <button class="cs_quantity_increment cs_center" type="button">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs_form_item">
                        <label class="cs_white_color">Adults :</label>
                        <div class="cs_quantity_wrap">
                            <span class="cs_quantity_btn" data-initial-number="1"></span>
                            <div class="cs_quantity_dropdown cs_primary_color">
                                <div class="cs_quantity_dropdown_item">
                                    <span class="cs_quantity_title">Adults :</span>
                                    <div class="cs_count">
                                        <button class="cs_quantity_decrement cs_center" type="button">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <span class="cs_quantity_number" data-min-value="1" data-max-value="30"></span>
                                        <button class="cs_quantity_increment cs_center" type="button">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs_form_item cs_children_item">
                        <label class="cs_white_color">Children :</label>
                        <div class="cs_quantity_wrap">
                            <span class="cs_quantity_btn" data-initial-number="00"></span>
                            <div class="cs_quantity_dropdown cs_primary_color">
                                <div class="cs_quantity_dropdown_item">
                                    <span class="cs_quantity_title">Children :</span>
                                    <div class="cs_count">
                                        <button class="cs_quantity_decrement cs_center" type="button">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <span class="cs_quantity_number" data-min-value="0" data-max-value="10"></span>
                                        <button class="cs_quantity_increment cs_center" type="button">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs_form_item_btn">
                        <button class="cs_btn cs_style_1 cs_color_1 cs_fs_15 cs_medium cs_radius_5 w-100">Check Availability</button>
                    </div>
                </form>
            </div>
        </div> -->
    </section>
    <!-- End Hero Section -->

    <!-- Start About Section -->
    <section class="cs_gray_bg">
        <div class="cs_height_141 cs_height_lg_75"></div>
        <div class="container">
            <div class="cs_about cs_style_1">
                <div class="cs_section_heading cs_style_1 text-center">
                    <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><img src="assets/img/home/icon-2.webp" class="icon"> WHY CHOOSE US <img src="assets/img/home/icon-1.webp" class="icon"></p>
                    <h2 class="cs_fs_67 cs_mb_45">Curated to match your preferences and desires, our selection includes luxury resorts, exclusive tours, and transfers for an unparalleled experience</h2>
                    <a href="about.html" class="cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15">
                        Learn More
                        <span>
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor" />
                                </svg>
                            </i>
                            <i>
                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor" />
                                </svg>
                            </i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End About Section -->

    <!-- Start Rooms Section -->
    <section>
        <div class="cs_height_141 cs_height_lg_75"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase"><img src="assets/img/home/icon-2.webp" class="icon">Rooms & Suites<img src="assets/img/home/icon-1.webp" class="icon"></p>
                <h2 class="cs_fs_67 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Exquisite Rooms & Suites Collection</h2>
            </div>
            <div class="cs_height_80 cs_height_lg_50"></div>
        </div>
        <div class="container-fluid">
            <div class="cs_slider cs_style_1 cs_slider_gap_40 cs_hover_show_arrows">
                <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="3">
                    <div class="cs_slider_wrapper">
                        <div class="cs_slide">
                            <div class="cs_card cs_style_1">
                                <a href="luxury-deluxe-room.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                                    <img src="assets/img/home/room-2.webp" alt="Room 2">
                                    <img src="assets/img/home/room-1.webp" alt="Room 1">
                                </a>
                                <div class="cs_card_info position-relative">
                                    <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="luxury-deluxe-room.php">Luxury Deluxe Room</a></h2>
                                    <!-- <div class="cs_card_price cs_mb_17">
                                        <span class="cs_primary_color">Single</span>
                                        <span class="cs_accent_color cs_fs_38 cs_primary_font">2400Rs / 1 Day</span>
                                    </div> -->
                                    <!-- <div class="cs_card_price cs_mb_17">
                                        <span class="cs_primary_color">Double</span>
                                        <span class="cs_accent_color cs_fs_38 cs_primary_font">2800Rs / 1 Day</span>
                                    </div> -->
                                    <ul class="cs_card_list cs_mp_0">
                                        <li>110 Sq</li>
                                        <li>3-5 Guests</li>
                                        <li>Free Wi-Fi</li>
                                    </ul>
                                    <a href="luxury-deluxe-room.php" class="cs_card_btn cs_center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_1">
                                <a href="suite-room.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                                    <img src="assets/img/home/room-7.webp" alt="Room 7">
                                    <img src="assets/img/home/room-3.webp" alt="Room 3">
                                </a>
                                <div class="cs_card_info position-relative">
                                    <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="suite-room.php">Suite Room</a></h2>
                                    <ul class="cs_card_list cs_mp_0">
                                        <li>110 Sq</li>
                                        <li>3-5 Guests</li>
                                        <li>Free Wi-Fi</li>
                                    </ul>
                                    <a href="suite-room.php" class="cs_card_btn cs_center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_1">
                                <a href="grand-delux-room.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                                    <img src="assets/img/home/room-8.webp" alt="Room 8">
                                    <img src="assets/img/home/room-4.webp" alt="Room 4">
                                </a>
                                <div class="cs_card_info position-relative">
                                    <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="grand-delux-room.php">Superior Room</a></h2>
                                    <ul class="cs_card_list cs_mp_0">
                                        <li>110 Sq</li>
                                        <li>3-5 Guests</li>
                                        <li>Free Wi-Fi</li>
                                    </ul>
                                    <a href="grand-delux-room.php" class="cs_card_btn cs_center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_1">
                                <a href="luxury-deluxe-room.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                                    <img src="assets/img/home/room-7.webp" alt="Room 7">
                                    <img src="assets/img/home/room-5.webp" alt="Room 5">
                                </a>
                                <div class="cs_card_info position-relative">
                                    <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="luxury-deluxe-room.php">Luxury Deluxe Room</a></h2>
                                    <ul class="cs_card_list cs_mp_0">
                                        <li>110 Sq</li>
                                        <li>3-5 Guests</li>
                                        <li>Free Wi-Fi</li>
                                    </ul>
                                    <a href="luxury-deluxe-room.php" class="cs_card_btn cs_center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_1">
                                <a href="suite-room.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                                    <img src="assets/img/home/room-2.webp" alt="Room 8">
                                    <img src="assets/img/home/room-1.webp" alt="Room 6">
                                </a>
                                <div class="cs_card_info position-relative">
                                    <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="suite-room.php">Standard Room</a></h2>
                                    <ul class="cs_card_list cs_mp_0">
                                        <li>110 Sq</li>
                                        <li>3-5 Guests</li>
                                        <li>Free Wi-Fi</li>
                                    </ul>
                                    <a href="suite-room.php" class="cs_card_btn cs_center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_1">
                                <a href="grand-delux-room.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                                    <img src="assets/img/home/room-2.webp" alt="Room 2">
                                    <img src="assets/img/home/room-1.webp" alt="Room 1">
                                </a>
                                <div class="cs_card_info position-relative">
                                    <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="grand-delux-room.php">Superior Room</a></h2>
                                    <ul class="cs_card_list cs_mp_0">
                                        <li>110 Sq</li>
                                        <li>3-5 Guests</li>
                                        <li>Free Wi-Fi</li>
                                    </ul>
                                    <a href="grand-delux-room.php" class="cs_card_btn cs_center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_slider_arrows cs_style_1 cs_mobile_hide">
                    <div class="cs_left_arrow cs_center cs_primary_color">
                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM22 7L1 7V9L22 9V7Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="cs_right_arrow cs_center cs_primary_color">
                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.7071 8.70711C22.0976 8.31658 22.0976 7.68342 21.7071 7.29289L15.3431 0.928932C14.9526 0.538408 14.3195 0.538408 13.9289 0.928932C13.5384 1.31946 13.5384 1.95262 13.9289 2.34315L19.5858 8L13.9289 13.6569C13.5384 14.0474 13.5384 14.6805 13.9289 15.0711C14.3195 15.4616 14.9526 15.4616 15.3431 15.0711L21.7071 8.70711ZM0 9H21V7H0L0 9Z" fill="currentColor" />
                        </svg>
                    </div>
                </div>
                <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
            </div>
        </div>
        <div class="cs_height_145 cs_height_lg_75"></div>
    </section>
    <!-- End Rooms Section -->

    <!-- Start Video Section -->
    <a href="https://www.youtube.com/embed/UJEUwEJ6gH4" class="cs_video_block cs_style_1 cs_video_open text-center cs_center position-relative">
        <!-- <h2 class="cs_video_block_title cs_fs_150 mb-0 position-relative cs_zindex_3">Ashirwad Hotels & Resorts</h2> -->
        <div class="cs_video_block_bg h-100 w-100 position-absolute start-0 top-0 cs_bg_filed cs_primary_bg" data-src="assets/img/home/home-slider-1.jpg"></div>
        <span class="cs_play_btn">
            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35 0C15.7004 0 0 15.7004 0 35C0 54.2996 15.7004 70 35 70C54.2996 70 70 54.2996 70 35C70 15.7004 54.2996 0 35 0ZM35 64.1667C18.9175 64.1667 5.83333 51.0825 5.83333 35C5.83333 18.9175 18.9175 5.83333 35 5.83333C51.0825 5.83333 64.1667 18.9175 64.1667 35C64.1667 51.0825 51.0825 64.1667 35 64.1667ZM23.3333 51.4704L52.6167 35L23.3333 18.5296V51.4733V51.4704ZM29.1667 28.5017L40.7167 35L29.1667 41.4983V28.5017Z" fill="currentColor" />
            </svg>
        </span>
    </a>
    <!-- End Video Section -->

    <!-- Start Features Section -->
    <section>
        <div class="cs_height_141 cs_height_lg_75"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase"><img src="assets/img/home/icon-2.webp" class="icon">LUXURIOUS FACILITIES<img src="assets/img/home/icon-1.webp" class="icon"></p>
                <h2 class="cs_fs_67 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Explore Our Exclusive Resort Facilities</h2>
            </div>
            <div class="cs_height_80 cs_height_lg_50"></div>
        </div>
        <div class="cs_slider cs_style_1 cs_slider_gap_60 cs_hover_show_arrows">
            <div class="container">
                <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="3">
                    <div class="cs_slider_wrapper">
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1">
                                <a href="#" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/home/facilities-4.jpg" alt="facilities 4">
                                </a>
                                <div class="cs_post_info">
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="#">Garden Restaurant</a>
                                    </h2>
                                    <p class="cs_post_subtitle cs_mb_36 justify">Savor the extraordinary at our Garden Restaurant, where gourmet cuisine meets serene surroundings. Delight in a curated menu of exquisite flavors, crafted to perfection and served with a view that soothes the soul. From sunrise breakfasts to starlit dinners, every meal is a celebration of taste and tranquility. Pure indulgence, effortlessly delivered.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1">
                                <a href="#" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/home/facilities-1.jpg" alt="facilities 1">
                                </a>
                                <div class="cs_post_info">
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="#">Meeting Boardroom</a>
                                    </h2>
                                    <p class="cs_post_subtitle cs_mb_36 justify">Host your meetings in style and comfort at the Ashirwad Club Resort's exclusive Boardroom — a space designed for productive conversations, strategic planning, and high-level decision-making.High-speed Wi-Fi & multimedia presentation equipment.Air-conditioned comfort with ambient lighting.Soundproof environment for private discussions</p>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1">
                                <a href="#" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/home/facilities-5.jpg" alt="facilities 5">
                                </a>
                                <div class="cs_post_info">
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19"><a href="#">Swimming Pool</a></h2>
                                    <p class="cs_post_subtitle cs_mb_36 justify">Dive into relaxation at our pristine swimming pool, where crystal-clear waters and lush surroundings create the perfect escape. Whether you're enjoying a refreshing swim, lounging poolside, or soaking up the sun, the tranquil ambiance offers a blissful retreat for all ages. Refresh. Rejuvenate. Repeat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1">
                                <a href="#" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/home/facilities-6.jpg" alt="facilities 6">
                                </a>
                                <div class="cs_post_info">
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="#">Open Cafe</a>
                                    </h2>
                                    <p class="cs_post_subtitle cs_mb_36 justify">Sip, savor, and unwind under the open skies at our charming Open Café. Surrounded by nature and filled with the aroma of freshly brewed coffee and gourmet bites, it's the perfect spot for casual conversations, quiet moments, or a cozy evening with friends. Where every cup comes with a view.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1">
                                <a href="restaurant.html" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/home/facilities-3.jpg" alt="facilities 3">
                                </a>
                                <div class="cs_post_info">
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="#">Game Zone</a>
                                    </h2>
                                    <p class="cs_post_subtitle cs_mb_36 justify">Step into the excitement at our vibrant Game Zone — the ultimate hangout for kids, teens, and the young at heart. From classic arcade thrills to modern gaming experiences, it's packed with non-stop fun and friendly competition. Play, laugh, and create memories that level up every stay.</p>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1">
                                <a href="#" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/home/facilities-7.jpg" alt="facilities 7">
                                </a>
                                <div class="cs_post_info">
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19"><a href="#">Children Park</a></h2>
                                    <p class="cs_post_subtitle cs_mb_36 justify">A joyful haven for our youngest guests, the Children's Park is where imagination runs wild and laughter fills the air. Safe, colorful, and full of engaging play structures, it's the perfect place for kids to explore, play, and make new friends — all while parents relax nearby.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_slider_arrows cs_style_2 cs_mobile_hide">
                <div class="cs_left_arrow slick-arrow">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z" fill="currentColor" />
                    </svg>
                </div>
                <div class="cs_right_arrow slick-arrow">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor" />
                    </svg>
                </div>
            </div>
            <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
        </div>
        <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Features Section -->

    <!-- Start Testimonial Section -->
    <section class="cs_shape_wrap position-relative">
        <div class="cs_shape_1 cs_ternary_color">
            <svg width="1920" height="384" viewBox="0 0 1920 384" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.2" d="M0 383C90.6874 266.048 351.673 65.6815 670.116 199.836C988.56 333.99 1184.62 249.079 1242.85 189.854C1367.34 67.7444 1677.25 -118.98 1921 110.998" stroke="currentColor" stroke-width="3" />
            </svg>
        </div>
        <div class="cs_height_141 cs_height_lg_75"></div>
        <div class="cs_slider cs_style_1 cs_slider_gap_24 cs_hover_show_arrows">
            <div class="container">
                <div class="cs_section_heading_wrap_1">
                    <div class="cs_section_heading cs_style_1">
                        <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">CLIENTS FEEDBACK</p>
                        <h2 class="cs_fs_67 mb-0">Rave Reviews from Our <br>Satisfied Guests</h2>
                    </div>
                    <div class="cs_section_heading_icon cs_accent_color">
                        <svg width="187" height="187" viewBox="0 0 187 187" fill="none" xmlns="http://www.w3.org/2000/svg" opacity="0.2">
                            <path d="M114.467 85C115.6 85 115.6 85 116.733 85C137.133 85 157.533 85 176.8 85C177.933 85 179.067 85 180.2 85C184.733 86.1333 187 89.5333 185.867 94.0667C185.867 98.6 182.467 102 177.933 102C176.8 102 175.667 102 175.667 102C155.267 102 136 102 115.6 102C114.467 102 114.467 102 113.333 102C114.467 103.133 114.467 103.133 115.6 104.267C130.333 119 145.067 133.733 158.667 147.333C162.067 150.733 163.2 156.4 159.8 159.8C156.4 163.2 151.867 163.2 147.333 159.8C143.933 156.4 139.4 151.867 136 148.467C124.667 137.133 114.467 126.933 103.133 115.6C103.133 115.6 102 114.467 100.867 114.467C100.867 115.6 100.867 116.733 100.867 116.733C100.867 137.133 100.867 157.533 100.867 176.8C100.867 177.933 100.867 179.067 100.867 180.2C99.7333 184.733 96.3333 187 91.8 185.867C87.2667 185.867 83.8667 182.467 83.8667 177.933C83.8667 176.8 83.8667 175.667 83.8667 174.533C83.8667 154.133 83.8667 134.867 83.8667 114.467C83.8667 113.333 83.8667 113.333 83.8667 112.2C83.8667 112.2 82.7333 112.2 82.7333 111.067C82.7333 112.2 82.7333 112.2 81.6 113.333C66.8667 128.067 52.1333 142.8 38.5333 156.4C35.1333 159.8 31.7333 159.8 28.3333 158.667C23.8 158.667 22.6667 151.867 27.2 148.467C32.8667 141.667 39.6667 136 45.3333 130.333C54.4 121.267 62.3333 113.333 71.4 104.267C71.4 104.267 72.5333 103.133 73.6667 103.133C73.6667 103.133 73.6667 103.133 73.6667 102C71.4 102 71.4 102 70.2667 102C49.8667 102 30.6 102 10.2 102C9.06667 102 7.93333 102 6.8 102C2.26667 100.867 0 97.4667 0 92.9333C0 88.4 3.4 85 7.93333 85C9.06667 85 10.2 85 10.2 85C30.6 85 49.8667 85 70.2667 85C71.4 85 71.4 85 73.6667 85C72.5333 83.8667 71.4 83.8667 71.4 82.7333C56.6667 69.1333 41.9333 54.4 27.2 39.6667C23.8 36.2667 22.6667 30.6 27.2 27.2C30.6 23.8 35.1333 23.8 39.6667 27.2C45.3333 32.8667 51 39.6667 57.8 45.3333C66.8667 54.4 74.8 62.3333 83.8667 71.4C83.8667 71.4 85 72.5333 85 73.6667C85 73.6667 86.1333 73.6667 86.1333 72.5333C86.1333 71.4 86.1333 71.4 86.1333 70.2667C86.1333 49.8667 86.1333 29.4667 86.1333 10.2C86.1333 9.06667 86.1333 7.93333 86.1333 6.8C86.1333 2.26667 89.5333 0 94.0667 0C98.6 0 102 3.4 102 7.93333C102 9.06667 102 10.2 102 11.3333C102 31.7333 102 51 102 71.4C102 72.5333 102 72.5333 102 73.6667C103.133 72.5333 103.133 72.5333 104.267 71.4C119 56.6667 132.6 41.9333 147.333 27.2C151.867 22.6667 156.4 22.6667 159.8 27.2C163.2 30.6 163.2 35.1333 159.8 38.5333C159.8 39.6667 158.667 39.6667 158.667 40.8C143.933 55.5333 130.333 69.1333 115.6 83.8667C115.6 83.8667 114.467 83.8667 114.467 85Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="cs_slider_arrows cs_style_4 cs_mobile_hide">
                        <div class="cs_left_arrow slick-arrow cs_center">
                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM21 7L1 7V9L21 9V7Z" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="cs_right_arrow slick-arrow cs_center">
                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.2929L14.3431 0.928933C13.9526 0.538409 13.3195 0.538409 12.9289 0.928933C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM-8.74228e-08 9L20 9L20 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cs_height_80 cs_height_lg_50"></div>
                <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="3">
                    <div class="cs_slider_wrapper">
                        <div class="cs_slide">
                            <div class="cs_testimonial cs_style_3 position-relative cs_radius_5">
                                <div class="cs_testimonial_avatar cs_mb_26">
                                    <img src="assets/img/avatar_1.png" alt="Avatar">
                                    <div class="cs_testimonial_avatar_right">
                                        <h3 class="cs_fs_28 mb-0">Angrew Bolar</h3>
                                        <p class="mb-0">Hotel Guest</p>
                                    </div>
                                </div>
                                <blockquote class="cs_testimonial_blockquote cs_fs_16 cs_primary_color fst-normal cs_mb_45 justify">My stay at Ashirwad Hotels & Resorts was truly exceptional. The serene atmosphere, beautiful landscapes, and courteous staff made my visit unforgettable.The rooms were spotless and comfortable, and the food was absolutely delicious.</blockquote>
                                <div class="cs_rating cs_green_color" data-rating="5">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="cs_rating_percentage">
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                    </div>
                                </div>
                                <div class="cs_quote_icon">
                                    <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_495_64)">
                                            <path d="M9.7683 16.1975C7.56475 16.579 5.54756 16.1866 3.69482 14.9767C0.833489 13.1128 -0.56977 9.61385 0.219563 6.33291C1.03082 2.94296 3.80445 0.46863 7.23586 0.0653247C12.1144 -0.512383 16.4228 3.22637 16.4447 8.10963C16.4667 12.6114 15.8747 17.015 14.1535 21.2116C12.7283 24.6996 10.6673 27.7408 7.58667 30.0189C7.09334 30.3786 6.55616 30.6838 6.01897 30.9781C5.88741 31.0544 5.58045 31.0108 5.49275 30.9018C5.40504 30.7928 5.40504 30.4876 5.50371 30.3677C7.53186 27.6645 8.50756 24.547 9.12149 21.3097C9.42845 19.7183 9.57097 18.1051 9.77927 16.5027C9.77927 16.4046 9.7683 16.3065 9.7683 16.1975ZM7.34549 29.1578C7.41127 29.1033 7.47704 29.0597 7.54282 29.0052C10.459 26.6726 12.3446 23.6423 13.6492 20.2088C14.7565 17.2766 15.3265 14.2355 15.5129 11.129C15.6006 9.74465 15.6883 8.33853 15.5019 6.97601C14.9209 2.81216 10.733 0.0653247 6.58904 0.991837C2.45601 1.91835 -0.054511 6.1585 1.11853 10.1916C2.20386 13.9521 6.02993 16.1975 9.86697 15.3364C10.5247 15.1947 10.6673 15.3037 10.6234 15.9686C10.5796 16.6662 10.5247 17.3529 10.448 18.0397C10.152 20.6775 9.66964 23.2935 8.74875 25.8006C8.33216 26.9342 7.82786 28.0351 7.34549 29.1578Z" fill="currentColor" />
                                            <path d="M30.3234 16.1976C28.8324 16.4701 27.4182 16.3502 26.015 15.8706C22.5945 14.6824 20.3252 11.2707 20.5664 7.64095C20.8075 3.98941 23.5373 0.871967 27.1222 0.174358C32.2419 -0.839355 36.9779 2.99749 36.9889 8.18596C36.9998 12.437 36.4627 16.6009 34.9388 20.6012C33.6561 23.9912 31.7815 26.9996 28.964 29.354C28.2404 29.9644 27.4072 30.455 26.596 30.9564C26.4644 31.0436 26.1246 31.0109 26.0259 30.9128C25.9272 30.8147 25.9492 30.4767 26.0478 30.3459C27.8238 27.9806 28.8105 25.2774 29.4025 22.4324C29.8081 20.4704 30.0164 18.4539 30.3124 16.4701C30.3344 16.3829 30.3234 16.3066 30.3234 16.1976ZM27.8896 29.1687C27.9773 29.1033 28.0431 29.0488 28.1089 29.0052C30.729 26.9124 32.5269 24.2419 33.8096 21.1898C35.5747 16.9933 36.1995 12.5787 36.1667 8.06606C36.1447 3.6951 32.22 0.31606 27.8567 0.871967C24.809 1.26437 22.3643 3.4226 21.5969 6.40924C20.8514 9.31958 21.9915 12.3934 24.4801 14.1592C26.2781 15.4237 28.2624 15.8161 30.4111 15.3474C31.0689 15.2057 31.2114 15.3147 31.1675 15.9905C31.1237 16.6554 31.0689 17.3203 31.0031 17.9852C30.7071 20.7538 30.1918 23.4789 29.2052 26.0949C28.8105 27.1086 28.3391 28.1223 27.8896 29.1687Z" fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_495_64">
                                                <rect width="37" height="31" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_testimonial cs_style_3 position-relative cs_radius_5">
                                <div class="cs_testimonial_avatar cs_mb_26">
                                    <img src="assets/img/avatar_4.png" alt="Avatar">
                                    <div class="cs_testimonial_avatar_right">
                                        <h3 class="cs_fs_28 mb-0">Rohit Singh</h3>
                                        <p class="mb-0">Hotel Guest</p>
                                    </div>
                                </div>
                                <blockquote class="cs_testimonial_blockquote cs_fs_16 cs_primary_color fst-normal cs_mb_45 justify">Ashirwad Hotels & Resorts is the perfect place to unwind and enjoy quality time with family and friends. The rooms are spacious, the service is excellent, and the entire property has a warm, welcoming vibe And the poolside dining experience.</blockquote>
                                <div class="cs_rating cs_green_color" data-rating="5">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="cs_rating_percentage">
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                    </div>
                                </div>
                                <div class="cs_quote_icon">
                                    <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_495_64)">
                                            <path d="M9.7683 16.1975C7.56475 16.579 5.54756 16.1866 3.69482 14.9767C0.833489 13.1128 -0.56977 9.61385 0.219563 6.33291C1.03082 2.94296 3.80445 0.46863 7.23586 0.0653247C12.1144 -0.512383 16.4228 3.22637 16.4447 8.10963C16.4667 12.6114 15.8747 17.015 14.1535 21.2116C12.7283 24.6996 10.6673 27.7408 7.58667 30.0189C7.09334 30.3786 6.55616 30.6838 6.01897 30.9781C5.88741 31.0544 5.58045 31.0108 5.49275 30.9018C5.40504 30.7928 5.40504 30.4876 5.50371 30.3677C7.53186 27.6645 8.50756 24.547 9.12149 21.3097C9.42845 19.7183 9.57097 18.1051 9.77927 16.5027C9.77927 16.4046 9.7683 16.3065 9.7683 16.1975ZM7.34549 29.1578C7.41127 29.1033 7.47704 29.0597 7.54282 29.0052C10.459 26.6726 12.3446 23.6423 13.6492 20.2088C14.7565 17.2766 15.3265 14.2355 15.5129 11.129C15.6006 9.74465 15.6883 8.33853 15.5019 6.97601C14.9209 2.81216 10.733 0.0653247 6.58904 0.991837C2.45601 1.91835 -0.054511 6.1585 1.11853 10.1916C2.20386 13.9521 6.02993 16.1975 9.86697 15.3364C10.5247 15.1947 10.6673 15.3037 10.6234 15.9686C10.5796 16.6662 10.5247 17.3529 10.448 18.0397C10.152 20.6775 9.66964 23.2935 8.74875 25.8006C8.33216 26.9342 7.82786 28.0351 7.34549 29.1578Z" fill="currentColor" />
                                            <path d="M30.3234 16.1976C28.8324 16.4701 27.4182 16.3502 26.015 15.8706C22.5945 14.6824 20.3252 11.2707 20.5664 7.64095C20.8075 3.98941 23.5373 0.871967 27.1222 0.174358C32.2419 -0.839355 36.9779 2.99749 36.9889 8.18596C36.9998 12.437 36.4627 16.6009 34.9388 20.6012C33.6561 23.9912 31.7815 26.9996 28.964 29.354C28.2404 29.9644 27.4072 30.455 26.596 30.9564C26.4644 31.0436 26.1246 31.0109 26.0259 30.9128C25.9272 30.8147 25.9492 30.4767 26.0478 30.3459C27.8238 27.9806 28.8105 25.2774 29.4025 22.4324C29.8081 20.4704 30.0164 18.4539 30.3124 16.4701C30.3344 16.3829 30.3234 16.3066 30.3234 16.1976ZM27.8896 29.1687C27.9773 29.1033 28.0431 29.0488 28.1089 29.0052C30.729 26.9124 32.5269 24.2419 33.8096 21.1898C35.5747 16.9933 36.1995 12.5787 36.1667 8.06606C36.1447 3.6951 32.22 0.31606 27.8567 0.871967C24.809 1.26437 22.3643 3.4226 21.5969 6.40924C20.8514 9.31958 21.9915 12.3934 24.4801 14.1592C26.2781 15.4237 28.2624 15.8161 30.4111 15.3474C31.0689 15.2057 31.2114 15.3147 31.1675 15.9905C31.1237 16.6554 31.0689 17.3203 31.0031 17.9852C30.7071 20.7538 30.1918 23.4789 29.2052 26.0949C28.8105 27.1086 28.3391 28.1223 27.8896 29.1687Z" fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_495_64">
                                                <rect width="37" height="31" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_testimonial cs_style_3 position-relative cs_radius_5">
                                <div class="cs_testimonial_avatar cs_mb_26">
                                    <img src="assets/img/avatar_5.png" alt="Avatar">
                                    <div class="cs_testimonial_avatar_right">
                                        <h3 class="cs_fs_28 mb-0">Kuber Shoni</h3>
                                        <p class="mb-0">Hotel Guest</p>
                                    </div>
                                </div>
                                <blockquote class="cs_testimonial_blockquote cs_fs_16 cs_primary_color fst-normal cs_mb_45 justify">I had a fantastic stay at Ashirwad Hotels & Resorts. The hospitality was top-notch, and the staff made sure every need was taken care of. The property is beautifully maintained with peaceful surroundings, perfect for a weekend getaway.The food was excellent</blockquote>
                                <div class="cs_rating cs_green_color" data-rating="5">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="cs_rating_percentage">
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                    </div>
                                </div>
                                <div class="cs_quote_icon">
                                    <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_495_64)">
                                            <path d="M9.7683 16.1975C7.56475 16.579 5.54756 16.1866 3.69482 14.9767C0.833489 13.1128 -0.56977 9.61385 0.219563 6.33291C1.03082 2.94296 3.80445 0.46863 7.23586 0.0653247C12.1144 -0.512383 16.4228 3.22637 16.4447 8.10963C16.4667 12.6114 15.8747 17.015 14.1535 21.2116C12.7283 24.6996 10.6673 27.7408 7.58667 30.0189C7.09334 30.3786 6.55616 30.6838 6.01897 30.9781C5.88741 31.0544 5.58045 31.0108 5.49275 30.9018C5.40504 30.7928 5.40504 30.4876 5.50371 30.3677C7.53186 27.6645 8.50756 24.547 9.12149 21.3097C9.42845 19.7183 9.57097 18.1051 9.77927 16.5027C9.77927 16.4046 9.7683 16.3065 9.7683 16.1975ZM7.34549 29.1578C7.41127 29.1033 7.47704 29.0597 7.54282 29.0052C10.459 26.6726 12.3446 23.6423 13.6492 20.2088C14.7565 17.2766 15.3265 14.2355 15.5129 11.129C15.6006 9.74465 15.6883 8.33853 15.5019 6.97601C14.9209 2.81216 10.733 0.0653247 6.58904 0.991837C2.45601 1.91835 -0.054511 6.1585 1.11853 10.1916C2.20386 13.9521 6.02993 16.1975 9.86697 15.3364C10.5247 15.1947 10.6673 15.3037 10.6234 15.9686C10.5796 16.6662 10.5247 17.3529 10.448 18.0397C10.152 20.6775 9.66964 23.2935 8.74875 25.8006C8.33216 26.9342 7.82786 28.0351 7.34549 29.1578Z" fill="currentColor" />
                                            <path d="M30.3234 16.1976C28.8324 16.4701 27.4182 16.3502 26.015 15.8706C22.5945 14.6824 20.3252 11.2707 20.5664 7.64095C20.8075 3.98941 23.5373 0.871967 27.1222 0.174358C32.2419 -0.839355 36.9779 2.99749 36.9889 8.18596C36.9998 12.437 36.4627 16.6009 34.9388 20.6012C33.6561 23.9912 31.7815 26.9996 28.964 29.354C28.2404 29.9644 27.4072 30.455 26.596 30.9564C26.4644 31.0436 26.1246 31.0109 26.0259 30.9128C25.9272 30.8147 25.9492 30.4767 26.0478 30.3459C27.8238 27.9806 28.8105 25.2774 29.4025 22.4324C29.8081 20.4704 30.0164 18.4539 30.3124 16.4701C30.3344 16.3829 30.3234 16.3066 30.3234 16.1976ZM27.8896 29.1687C27.9773 29.1033 28.0431 29.0488 28.1089 29.0052C30.729 26.9124 32.5269 24.2419 33.8096 21.1898C35.5747 16.9933 36.1995 12.5787 36.1667 8.06606C36.1447 3.6951 32.22 0.31606 27.8567 0.871967C24.809 1.26437 22.3643 3.4226 21.5969 6.40924C20.8514 9.31958 21.9915 12.3934 24.4801 14.1592C26.2781 15.4237 28.2624 15.8161 30.4111 15.3474C31.0689 15.2057 31.2114 15.3147 31.1675 15.9905C31.1237 16.6554 31.0689 17.3203 31.0031 17.9852C30.7071 20.7538 30.1918 23.4789 29.2052 26.0949C28.8105 27.1086 28.3391 28.1223 27.8896 29.1687Z" fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_495_64">
                                                <rect width="37" height="31" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_testimonial cs_style_3 position-relative cs_radius_5">
                                <div class="cs_testimonial_avatar cs_mb_26">
                                    <img src="assets/img/avatar_2.png" alt="Avatar">
                                    <div class="cs_testimonial_avatar_right">
                                        <h3 class="cs_fs_28 mb-0">Sagar Sharma</h3>
                                        <p class="mb-0">Hotel Guest</p>
                                    </div>
                                </div>
                                <blockquote class="cs_testimonial_blockquote cs_fs_16 cs_primary_color fst-normal cs_mb_45 justify">Ashirwad Hotels & Resorts exceeded my expectations in every way. From the moment I arrived, the staff was friendly and welcoming. The rooms were clean, comfortable, and well-equipped. I especially enjoyed the resort’s peaceful atmosphere and excellent food.</blockquote>
                                <div class="cs_rating cs_green_color" data-rating="5">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <div class="cs_rating_percentage">
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                        <i class="fa-solid fa-star fa-fw"></i>
                                    </div>
                                </div>
                                <div class="cs_quote_icon">
                                    <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_495_64)">
                                            <path d="M9.7683 16.1975C7.56475 16.579 5.54756 16.1866 3.69482 14.9767C0.833489 13.1128 -0.56977 9.61385 0.219563 6.33291C1.03082 2.94296 3.80445 0.46863 7.23586 0.0653247C12.1144 -0.512383 16.4228 3.22637 16.4447 8.10963C16.4667 12.6114 15.8747 17.015 14.1535 21.2116C12.7283 24.6996 10.6673 27.7408 7.58667 30.0189C7.09334 30.3786 6.55616 30.6838 6.01897 30.9781C5.88741 31.0544 5.58045 31.0108 5.49275 30.9018C5.40504 30.7928 5.40504 30.4876 5.50371 30.3677C7.53186 27.6645 8.50756 24.547 9.12149 21.3097C9.42845 19.7183 9.57097 487051 9.77927 16.5027C9.77927 16.4046 9.7683 16.3065 9.7683 16.1975ZM7.34549 29.1578C7.41127 29.1033 7.47704 29.0597 7.54282 29.0052C10.459 26.6726 12.3446 23.6423 13.6492 20.2088C14.7565 17.2766 15.3265 14.2355 15.5129 11.129C15.6006 9.74465 15.6883 8.33853 15.5019 6.97601C14.9209 2.81216 10.733 0.0653247 6.58904 0.991837C2.45601 1.91835 -0.054511 6.1585 1.11853 10.1916C2.20386 13.9521 6.02993 16.1975 9.86697 15.3364C10.5247 15.1947 10.6673 15.3037 10.6234 15.9686C10.5796 16.6662 10.5247 17.3529 10.448 18.0397C10.152 20.6775 9.66964 23.2935 8.74875 25.8006C8.33216 26.9342 7.82786 28.0351 7.34549 29.1578Z" fill="currentColor" />
                                            <path d="M30.3234 16.1976C28.8324 16.4701 27.4182 16.3502 26.015 15.8706C22.5945 14.6824 20.3252 11.2707 20.5664 7.64095C20.8075 3.98941 23.5373 0.871967 27.1222 0.174358C32.2419 -0.839355 36.9779 2.99749 36.9889 8.18596C36.9998 12.437 36.4627 16.6009 34.9388 20.6012C33.6561 23.9912 31.7815 26.9996 28.964 29.354C28.2404 29.9644 27.4072 30.455 26.596 30.9564C26.4644 31.0436 26.1246 31.0109 26.0259 30.9128C25.9272 30.8147 25.9492 30.4767 26.0478 30.3459C27.8238 27.9806 28.8105 25.2774 29.4025 22.4324C29.8081 20.4704 30.0164 18.4539 30.3124 16.4701C30.3344 16.3829 30.3234 16.3066 30.3234 16.1976ZM27.8896 29.1687C27.9773 29.1033 28.0431 29.0488 28.1089 29.0052C30.729 26.9124 32.5269 24.2419 33.8096 21.1898C35.5747 16.9933 36.1995 12.5787 36.1667 8.06606C36.1447 3.6951 32.22 0.31606 27.8567 0.871967C24.809 1.26437 22.3643 3.4226 21.5969 6.40924C20.8514 9.31958 21.9915 12.3934 24.4801 14.1592C26.2781 15.4237 28.2624 15.8161 30.4111 15.3474C31.0689 15.2057 31.2114 15.3147 31.1675 15.9905C31.1237 16.6554 31.0689 17.3203 31.0031 17.9852C30.7071 20.7538 30.1918 23.4789 29.2052 26.0949C28.8105 27.1086 28.3391 28.1223 27.8896 29.1687Z" fill="currentColor" />
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_495_64">
                                                <rect width="37" height="31" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
            </div>
        </div>
        <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Servide Section -->
    <section>
        <div class="cs_height_150 cs_height_lg_80"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_45">
                <div class="col-lg-7 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="cs_pr_110">
                        <div class="cs_image_layer cs_style_1 position-relative">
                            <div class="cs_image_layer_1_wrap">
                                <div class="cs_image_layer_1">
                                    <img src="assets/img/home/service-1.jpg" alt="service 1" class="cs_radius_5">
                                </div>
                            </div>
                            <div class="cs_image_layer_2_wrap">
                                <div class="cs_image_layer_2">
                                    <img src="assets/img/home/service-2.jpg" alt="service 2" class="cs_radius_5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cs_section_heading cs_style_1">
                        <div class="cs_section_heading">
                            <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase"><img src="assets/img/home/icon-2.webp" class="icon">PREMIUM SERVICES<img src="assets/img/home/icon-1.webp" class="icon"></p>
                            <h2 class="cs_fs_67 mb-0">Ashirwad Hotel Need, Met with Our Diverse Services.</h2>
                        </div>
                    </div>
                    <div class="cs_height_35 cs_height_lg_35"></div>
                    <ul class="cs_list cs_style_1 cs_mp_0">
                        <li>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(.clip0_95_13)">
                                    <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath class="clip0_95_13">
                                        <rect width="25" height="25" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Transportation Services
                        </li>
                        <li>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(.clip0_95_13)">
                                    <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath class="clip0_95_13">
                                        <rect width="25" height="25" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Multi Cuisine Restaurant
                        </li>
                        <li>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(.clip0_95_13)">
                                    <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath class="clip0_95_13">
                                        <rect width="25" height="25" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Puppet Show & Free Parking
                        </li>
                        <li>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(.clip0_95_13)">
                                    <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath class="clip0_95_13">
                                        <rect width="25" height="25" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            24/7 Room Service
                        </li>
                        <li>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(.clip0_95_13)">
                                    <path d="M24.9996 12.5001C24.9996 10.7334 24.1038 9.17611 22.7413 8.25736C23.0549 6.64486 22.5871 4.91048 21.3382 3.66048C20.0892 2.41152 18.3549 1.94382 16.7413 2.25736C15.8226 0.894857 14.2653 -0.000976562 12.4986 -0.000976562C10.7319 -0.000976562 9.17464 0.894857 8.25589 2.25736C6.64339 1.94382 4.90798 2.41152 3.65902 3.66048C2.41006 4.90944 1.94235 6.64382 2.25589 8.25736C0.893392 9.17611 -0.00244141 10.7334 -0.00244141 12.5001C-0.00244141 14.2667 0.893392 15.824 2.25589 16.7428C1.94235 18.3553 2.41006 20.0907 3.65902 21.3396C4.90798 22.5886 6.64235 23.0563 8.25589 22.7428C9.17464 24.1053 10.7319 25.0011 12.4986 25.0011C14.2653 25.0011 15.8226 24.1053 16.7413 22.7428C18.3538 23.0563 20.0892 22.5886 21.3382 21.3396C22.5871 20.0907 23.0549 18.3563 22.7413 16.7428C24.1038 15.824 24.9996 14.2667 24.9996 12.5001ZM12.4049 16.0615C12.0017 16.4646 11.4715 16.6657 10.9392 16.6657C10.4069 16.6657 9.87152 16.4626 9.46423 16.0563L6.56631 13.248L8.01735 11.7511L10.9267 14.5709L16.9778 8.63236L18.4403 10.1167L12.4049 16.0615Z" fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath class="clip0_95_13">
                                        <rect width="25" height="25" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Free Wi-Fi Connectivity
                        </li>
                    </ul>
                    <div class="cs_height_48 cs_height_lg_30"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Servide Section -->

    <!-- Start Gallery Section -->
    <section>
        <div class="cs_height_141 cs_height_lg_75"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase"><img src="assets/img/home/icon-2.webp" class="icon">EXCITING GALLERY <img src="assets/img/home/icon-1.webp" class="icon"></p>
                <h2 class="cs_fs_67 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Explore Unforgettable Experiences</h2>
            </div>
            <div class="cs_height_80 cs_height_lg_50"></div>
        </div>
        <div class="cs_grid_style_1 cs_lightgallery">
            <div class="cs_grid_item">
                <a href="assets/img/gallery_1.jpeg" class="cs_gallery_item cs_lightbox_item cs_style_1 d-block cs_bg_filed position-relative" data-src="assets/img/gallery_1.jpeg">
                    <div class="cs_gallery_item_hover cs_primary_font cs_white_color cs_fs_38 cs_center text-center">Beach View</div>
                    <img src="assets/img/gallery_1.jpeg" alt="" class="d-none">
                </a>
            </div>
            <div class="cs_grid_item">
                <a href="assets/img/gallery_2.jpeg" class="cs_gallery_item cs_lightbox_item cs_style_1 d-block cs_bg_filed position-relative" data-src="assets/img/gallery_2.jpeg">
                    <div class="cs_gallery_item_hover cs_primary_font cs_white_color cs_fs_38 cs_center text-center">Restaurant View</div>
                    <img src="assets/img/gallery_2.jpeg" alt="" class="d-none">
                </a>
            </div>
            <div class="cs_grid_item">
                <a href="assets/img/gallery_3.jpeg" class="cs_gallery_item cs_lightbox_item cs_style_1 d-block cs_bg_filed position-relative" data-src="assets/img/gallery_3.jpeg">
                    <div class="cs_gallery_item_hover cs_primary_font cs_white_color cs_fs_38 cs_center text-center">Relax View</div>
                    <img src="assets/img/gallery_3.jpeg" alt="" class="d-none">
                </a>
            </div>
            <div class="cs_grid_item">
                <a href="assets/img/gallery_4.jpeg" class="cs_gallery_item cs_lightbox_item cs_style_1 d-block cs_bg_filed position-relative" data-src="assets/img/gallery_4.jpeg">
                    <div class="cs_gallery_item_hover cs_primary_font cs_white_color cs_fs_38 cs_center text-center">Hotel View</div>
                    <img src="assets/img/gallery_4.jpeg" alt="" class="d-none">
                </a>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Start Blog Section -->
    <!-- <section class="cs_gray_bg">
        <div class="cs_height_141 cs_height_lg_75"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">NEWS & MEDIA</p>
                <h2 class="cs_fs_67 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Explore Our Latest Updates</h2>
            </div>
            <div class="cs_height_80 cs_height_lg_50"></div>
        </div>
        <div class="cs_slider cs_style_1 cs_slider_gap_60 cs_hover_show_arrows">
            <div class="container">
                <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="3">
                    <div class="cs_slider_wrapper">
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a href="blog-details.html" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/post_thumb_1.jpeg" alt="Feature">
                                    <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <div class="cs_post_meta cs_mb_24">
                                        <span>By Jenifar</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>3 Aug 2024</span>
                                    </div>
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="blog-details.html">A Journey into Our Luxurious Resort</a>
                                    </h2>
                                    <a href="blog-details.html" class="cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15">
                                        Learn More
                                        <span>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a href="blog-details.html" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/post_thumb_2.jpeg" alt="Feature">
                                    <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <div class="cs_post_meta cs_mb_24">
                                        <span>By Jenifar</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>1 Feb 2024</span>
                                    </div>
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="blog-details.html">Exquisite Dining Experiences at Our Resort</a>
                                    </h2>
                                    <a href="blog-details.html" class="cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15">
                                        Learn More
                                        <span>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a href="blog-details.html" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/post_thumb_3.jpeg" alt="Feature">
                                    <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <div class="cs_post_meta cs_mb_24">
                                        <span>By Jenifar</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>4 Sep 2024</span>
                                    </div>
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="blog-details.html">Rejuvenation Secrets from Our Spa</a>
                                    </h2>
                                    <a href="blog-details.html" class="cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15">
                                        Learn More
                                        <span>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a href="blog-details.html" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/post_thumb_1.jpeg" alt="Feature">
                                    <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <div class="cs_post_meta cs_mb_24">
                                        <span>By Jenifar</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>3 Aug 2024</span>
                                    </div>
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="blog-details.html">A Journey into Our Luxurious Resort</a>
                                    </h2>
                                    <a href="blog-details.html" class="cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15">
                                        Learn More
                                        <span>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a href="blog-details.html" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/post_thumb_2.jpeg" alt="Feature">
                                    <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <div class="cs_post_meta cs_mb_24">
                                        <span>By Jenifar</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>1 Feb 2024</span>
                                    </div>
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="blog-details.html">Exquisite Dining Experiences at Our Resort</a>
                                    </h2>
                                    <a href="blog-details.html" class="cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15">
                                        Learn More
                                        <span>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_post cs_style_1 cs_size_1">
                                <a href="blog-details.html" class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                                    <img src="assets/img/post_thumb_3.jpeg" alt="Feature">
                                    <span class="cs_hover_icon cs_center position-absolute cs_white_color cs_zindex_2 cs_radius_5">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </span>
                                </a>
                                <div class="cs_post_info">
                                    <div class="cs_post_meta cs_mb_24">
                                        <span>By Jenifar</span>
                                        <span class="cs_post_meta_seperator"></span>
                                        <span>4 Sep 2024</span>
                                    </div>
                                    <h2 class="cs_post_title cs_fs_38 cs_mb_19">
                                        <a href="blog-details.html">Rejuvenation Secrets from Our Spa</a>
                                    </h2>
                                    <a href="blog-details.html" class="cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15">
                                        Learn More
                                        <span>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                            <i>
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                                </svg>
                                            </i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_slider_arrows cs_style_2 cs_mobile_hide">
                <div class="cs_left_arrow slick-arrow">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z" fill="currentColor" />
                    </svg>
                </div>
                <div class="cs_right_arrow slick-arrow">
                    <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor" />
                    </svg>
                </div>
            </div>
            <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
        </div>
        <div class="cs_height_150 cs_height_lg_80"></div>
    </section> -->
    <!-- End Blog Section -->

    <!-- Start Newsletter Section -->
    <section>
        <div class="cs_height_150 cs_height_lg_80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-10 offset-xl-1">
                    <div class="cs_newsletter cs_style_1 text-center">
                        <span class="cs_newsletter_icon cs_center cs_accent_bg rounded-circle cs_mb_26 wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_124_203)">
                                    <path d="M1.80486 8.33637C1.38631 8.45596 1.00624 8.68277 0.702253 8.99435C0.398268 9.30593 0.180908 9.69149 0.0716809 10.1129C-0.0375465 10.5342 -0.0348553 10.9768 0.0794879 11.3969C0.193831 11.8169 0.415863 12.1998 0.723615 12.5076L4.98861 16.7676V25.0001H13.2299L17.5236 29.2876C17.7541 29.5201 18.0282 29.7047 18.3302 29.8308C18.6323 29.9569 18.9563 30.0221 19.2836 30.0226C19.4987 30.0222 19.713 29.9945 19.9211 29.9401C20.3423 29.834 20.7281 29.6188 21.0397 29.3162C21.3513 29.0136 21.5777 28.6343 21.6961 28.2164L29.9886 0.0263672L1.80486 8.33637ZM2.49986 10.7401L23.7849 4.46512L7.49111 20.7326V15.7326L2.49986 10.7401ZM19.2999 27.5201L14.2661 22.5001H9.26611L25.5574 6.22262L19.2999 27.5201Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_124_203">
                                        <rect width="30" height="30" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <!-- <h2 class="cs_fs_50 cs_mb_26">For exclusive offers and the latest updates, subscribe to the Ashirwad Hotels & Resorts Newsletter!</h2> -->
                        <h2 class="cs_fs_50 cs_mb_26">Your Destination for Joy, Comfort, and Celebration <br> Ashirwad Hotels & Resorts!</h2>
                        <!-- <form action="#" class="cs_newsletter_form position-relative">
                            <input type="email" class="cs_newsletter_input cs_radius_5" placeholder="Enter Your Email Address">
                            <button class="cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15">
                                Subscribe Now
                                <span>
                                    <i>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                        </svg>
                                    </i>
                                    <i>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                                        </svg>
                                    </i>
                                </span>
                            </button>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Newsletter Section -->

    <!-- Start Footer -->
    <?php require_once 'includes/footer.php'; ?>
    <!-- End Footer -->

    <!-- Script -->
    <?php require_once 'includes/script.php'; ?>
</body>

</html>