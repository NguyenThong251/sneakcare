<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <!-- <link rel="stylesheet" href="./css/grid.css" /> -->
    <title>Main</title>
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="header-main grid">
                <a href="./index.html" class="header__logo">
                    <img src="./img/logo.png" alt="" class="header__logo-img" />
                </a>

                <!-- icon list -->
                <nav class="header__nav">
                    <ul class="header__nav-ul">
                        <li class="header__nav-li">
                            <a href="#" class="header__nav-item">Trang chủ</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="./page/shop.html" class="header__nav-item">Nam</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="./page/shop.html" class="header__nav-item">Nữ</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="./page/shop.html" class="header__nav-item">Giảm giá</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="./page/shop.html" class="header__nav-item">Bộ sưu tầm
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="header__right">
                    <!-- icon list -->
                    <div class="menu__nav_list">
                        <i class="menu__nav_list-icon bi bi-list"></i>
                    </div>
                    <div class="header__right-user">
                        <a href="#">
                            <i class="header__right-icon bi bi-person-circle"></i></a>
                    </div>
                    <div class="header__right-cart">
                        <a href="#">
                            <i class="header__right-icon bi bi-cart-check-fill" onclick="showCart()"></i>
                            <!-- <span id="countsp">0</span> -->
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="content__header">
            <span class="content__header-span">
                <h3 class="content__header-h3">FREE DELIVERY</h3>
                in orders over $400 - Buy with confidence: Free Return and
                cashback
            </span>
        </div>
        <div class="app__container grid">
            <!-- slider -->
            <div class="slider">
                <div class="slider__background">
                    <img src="./img/slider img.png" alt="" class="slider__background-img" />
                </div>
                <div class="slider__arrow">
                    <i class="slider__arrow-icon bi bi-arrow-left-circle-fill"></i><i
                        class="slider__arrow-icon bi bi-arrow-right-circle-fill"></i>
                </div>
                <button class="slider__search">
                    <input type="text" placeholder="Search" class="slider__search-content" />
                    <i class="slider__search-icon bi bi-search"></i>
                </button>
                <div class="slider__option">
                    <div class="slider__option-item"></div>
                    <div class="slider__option-item"></div>
                    <div class="slider__option-item"></div>
                </div>
            </div>
            <!-- interest -->
            <div class="interest interest__container">
                <div class="interest__container-item">
                    <div class="interest__container-icon">
                        <img src="./img/policy.png" alt="" />
                    </div>
                    <div class="interest__container-content">
                        <h3>Chính sách bảo hành an toàn</h3>
                        <span>1 đổi 1 hoàn tiền 100%</span>
                    </div>
                </div>
                <div class="interest__container-item">
                    <div class="interest__container-icon">
                        <img src="./img/support.png" alt="" />
                    </div>
                    <div class="interest__container-content">
                        <h3>Hỗ trợ 24/24</h3>
                        <span>Liên hệ chúng tôi ngay bây giờ</span>
                    </div>
                </div>
                <div class="interest__container-item">
                    <div class="interest__container-icon">
                        <img src="./img/Delivery.png" alt="" />
                    </div>
                    <div class="interest__container-content">
                        <h3>Chuyển phát nhanh</h3>
                        <span>Giao hàng nhanh theo đơn hàng</span>
                    </div>
                </div>
            </div>
            <!-- Treding -->
            <div class="section__trending">
                <div class="trending__content">
                    <h3>Xu hướng</h3>
                </div>
                <div class="trending__container">
                    <div class="trending__container-item">
                        <img src="./img/trending image1.png " alt="" class="trending__container-img" />
                        <a href="#">
                            <button class="trending__container-btn">Mua</button></a>
                    </div>
                    <div class="trending__container-item">
                        <img src="./img/trending image2.png " alt="" class="trending__container-img" />
                        <a href="#">
                            <button class="trending__container-btn">Mua</button></a>
                    </div>
                </div>
            </div>
            <!-- slogan -->
            <div class="content__slogan">
                <h1 class="content__slogan-h1">MANG LẠI NĂNG LƯỢNG</h1>
                <span class="content__slogan-span">Nâng tầm phong cách của bạn với tất cả sự thoải mái và màu sắc của
                    Air Max SC.</span>
                <a href=""><button class="content__slogan-btn">Mua tất cả Air Max</button></a>
            </div>
            <!-- Popular -->
            <div class="popular">
                <div class="popular__title">
                    <div class="popular__title-item">Phổ biến ngay bây giờ</div>
                    <div class="popular__title-shop">
                        <span> Mua tất cả</span>
                        <i class="popular__title-shop-icon bi bi-arrow-left-circle-fill"></i><i
                            class="popular__title-shop-icon bi bi-arrow-right-circle-fill"></i>
                    </div>
                </div>
                <div class="popular__content">
                    <div class="popular__content-items">
                        <form action="page/cart.php" method="post">
                            <img src="./img/popular image1.png" alt="" class="popular__content-items-img" />
                            <div class="icon__popular">
                                <i class="popular__content-items-icon bi bi-bag-check-fill"></i>
                            </div>
                            <div class="popular__content-items-detail">
                                <h3 class="popular__content-items-h3">Nike Air Max 90</h3>

                                <input class="product__quatity" type="number" name="soluong" id="" min="1" value="1" />

                                <input type="hidden" name="tensp" value="Nike Air Max 90">
                                <input type="hidden" name="gia" value="180">
                                <input type="hidden" name="hinh" value="popular image1.png">

                                <div class="popular__content-detail">
                                    <span class="popular__content-gender">Giày nam</span>
                                    <div class="popular__content-price">180<span>$</span></div>
                                </div>
                                <input type="submit" name="addcart" value="Mua ngay" class="btn-buy"></input>
                        </form>
                    </div>
                </div>
                <div class="popular__content-items">
                    <form action="page/cart.php" method="post">
                        <img src="./img/popular image2.png" alt="" class="popular__content-items-img" />
                        <i class="popular__content-items-icon bi bi-bag-check-fill" onclick="addtocart(this)"></i>
                        <div class="popular__content-items-detail">
                            <h3 class="popular__content-items-h3">Nike Air Force 107</h3>
                            <input class="product__quatity" type="number" name="soluong" id="" min="1" value="1" />

                            <input type="hidden" name="tensp" value="Nike Air Force 107">
                            <input type="hidden" name="gia" value="190">
                            <input type="hidden" name="hinh" value="popular image2.png">

                            <div class="popular__content-detail">
                                <span class="popular__content-gender">Giày nam</span>
                                <div class="popular__content-price">190<span>$</span></div>
                            </div>
                            <input type="submit" name="addcart" value="Mua ngay" class="btn-buy"></input>
                        </div>
                    </form>
                </div>
                <div class="popular__content-items">
                    <form action="page/cart.php" method="post">
                        <img src="./img/popular image3.png" alt="" class="popular__content-items-img" />
                        <i class="popular__content-items-icon bi bi-bag-check-fill"></i>
                        <div class="popular__content-items-detail">
                            <h3 class="popular__content-items-h3">Nike Invincible 90</h3>
                            <input class="product__quatity" type="number" name="soluong" id="" min="1" value="1" />

                            <input type="hidden" name="tensp" value="Nike Invincible 90">
                            <input type="hidden" name="gia" value="150">
                            <input type="hidden" name="hinh" value="popular image3.png">

                            <div class="popular__content-detail">
                                <span class="popular__content-gender">Giày nữ</span>
                                <div class="popular__content-price">150<span>$</span></div>
                            </div>
                            <input type="submit" name="addcart" value="Mua ngay" class="btn-buy"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- more explore -->
        <div class="explore">
            <div class="explore__title">
                <div class="explore__title-item">Thêm để khám phá</div>
                <div class="explore__title-all">
                    <span>Tất cả sản phẩm </span>
                    <div class="explore__title-shop-icon-main">
                        <i class="explore__title-shop-icon bi bi-sliders"></i>
                    </div>
                </div>
            </div>
            <div class="explore__container">
                <div class="explore__container-items">
                    <img src="./img/more1.png" alt="" class="explore__container-img" />
                    <i class="explore__container-icon bi bi-heart"></i>
                    <div class="explore__container-detal">
                        <div class="explore__container-title">
                            <h3 class="explore__container-title-item">Nike Womens 1</h3>
                            <div class="explore__container-title-star">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div class="explore__container-option">
                            <span class="explore__container-option-brand">Thương hiệu Nike</span>
                            <a href="#" class="explore__container-option-a"><i
                                    class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="explore__container-items">
                    <img src="./img/more2.png" alt="" class="explore__container-img" />
                    <i class="explore__container-icon bi bi-heart"></i>
                    <div class="explore__container-detal">
                        <div class="explore__container-title">
                            <h3 class="explore__container-title-item">Nike Womens 1</h3>
                            <div class="explore__container-title-star">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div class="explore__container-option">
                            <span class="explore__container-option-brand">Thương hiệu Adidas</span>
                            <a href="#" class="explore__container-option-a"><i
                                    class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="explore__container-items">
                    <img src="./img/more3.png" alt="" class="explore__container-img" />
                    <i class="explore__container-icon bi bi-heart"></i>
                    <div class="explore__container-detal">
                        <div class="explore__container-title">
                            <h3 class="explore__container-title-item">Nike Womens 1</h3>
                            <div class="explore__container-title-star">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                        <div class="explore__container-option">
                            <span class="explore__container-option-brand">Thương hiệu Nike</span>
                            <a href="#" class="explore__container-option-a"><i
                                    class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                        </div>
                    </div>
                </div>
                <div class="explore__container-items">
                    <img src="./img/more4.png" alt="" class="explore__container-img" />
                    <div class="explore__container-sale"><span> -30%</span></div>
                    <i class="explore__container-icon bi bi-heart"></i>
                    <div class="explore__container-detal">
                        <div class="explore__container-title">
                            <h3 class="explore__container-title-item">Nike Womens 1</h3>
                            <div class="explore__container-title-star">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                        <div class="explore__container-option">
                            <span class="explore__container-option-brand">Thương hiệu Nike</span>
                            <a href="#" class="explore__container-option-a"><i
                                    class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- essential -->
        <div class="essential">
            <h3 class="essential__content">Mua sắm những thứ cần thiết</h3>
            <div class="essential__title">
                <div class="essential__title-content">
                    <img src="./img/Essential image1.png" alt="" class="essential__title-image" />
                    <a href="#">
                        <button class="essential__container-btn--fisrt">
                            Cửa hàng
                        </button></a>
                    <div class="essential__title-banrd">
                        <span>Quần áo</span>
                    </div>
                </div>
                <div class="essential__title-content">
                    <img src="./img/Essential image2.png" alt="" class="essential__title-image" /><a href="#">
                        <button class="essential__container-btn">Cửa hàng</button></a>
                    <div class="essential__title-banrd">
                        <span>Giày</span>
                    </div>
                </div>
                <div class="essential__title-content">
                    <img src="./img/Essential image3.png" alt="" class="essential__title-image" />
                    <a href="#">
                        <button class="essential__container-btn">Cửa hàng</button></a>
                    <div class="essential__title-banrd">
                        <span>Phụ kiện</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Icons for Any Season -->
        <div class="season">
            <h3 class="season__content_h3">Biểu tượng cho bất kỳ mùa nào</h3>
            <div class="season__container">
                <a href="./page/detal.html">
                    <div class="season__container-items">
                        <img src="./img/season 1.png" alt="" class="season__container-image" />
                        <div class="season__content">
                            <h3 class="season__content-banrd">Air Jordan</h3>
                            <span class="season__content-price">180$</span>
                            <div class="cartoverlay">
                                <div class="cartoverlay__icon">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./page/detal.html">
                    <div class="season__container-items">
                        <img src="./img/season 2.png" alt="" class="season__container-image" />
                        <div class="season__content">
                            <h3 class="season__content-banrd">Yeezy</h3>
                            <span class="season__content-price">150$</span>
                            <div class="cartoverlay">
                                <div class="cartoverlay__icon">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./page/detal.html">
                    <div class="season__container-items">
                        <img src="./img/season 3.png" alt="" class="season__container-image" />
                        <div class="season__content">
                            <h3 class="season__content-banrd">Bape</h3>
                            <span class="season__content-price">190$</span>
                            <div class="cartoverlay">
                                <div class="cartoverlay__icon">
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- become a member -->
    <div class="member">
        <div class="member__container">
            <div class="member__title">
                <h3 class="member__title-content">Trở thành một thành viên</h3>
                <img src="./img/logo text.png" alt="" class="member__title-img" />
            </div>
            <h3 class="member__title-slogan">
                Đăng kí miễn phí. Tham gia vào cộng đồng.
            </h3>
            <div class="member__btns">
                <a href="#" class="member__link">
                    <button class="member__btn">Đăng nhập</button>
                </a>
                <a href="#" class="member__link">
                    <button class="member__btn-signup">Đăng kí</button>
                </a>
            </div>
        </div>
    </div>
    <!-- voucher -->
    <div class="voucher grid">
        <a href="#" class="voucher__link">
            <div class="voucher__container">
                <img src="./img/voucher1.png" alt="" class="voucher__image" />
                <h3 class="voucher__content">
                    Mua sắm phong cách dành riêng cho thành viên.
                </h3>
            </div>
        </a>
        <a href="#" class="voucher__link">
            <div class="voucher__container">
                <img src="./img/voucher2.png" alt="" class="voucher__image" />
                <h3 class="voucher__content">
                    Miễn phí giao hàng tiêu chuẩn cho tất cả các đơn hàng.
                </h3>
            </div>
        </a>
        <a href="#" class="voucher__link">
            <div class="voucher__container">
                <img src="./img/voucher3.png" alt="" class="voucher__image" />
                <h3 class="voucher__content">Tùy chỉnh giày so-you của bạn.</h3>
            </div>
        </a>
    </div>
    <footer class="footer">
        <div class="footer__header">
            <div class="footer__header_content grid">
                <div class="footer__header_items">
                    <a href="#" class="footer__header-link">
                        <h2 class="footer__header-text">THẺ QUÀ TẶNG</h2>
                    </a><a href="#" class="footer__header-link">
                        <h2 class="footer__header-text">KHUYẾN MÃI</h2>
                    </a><a href="#" class="footer__header-link">
                        <h2 class="footer__header-text">TÌM MÔT CỬA HÀNG</h2>
                    </a><a href="#" class="footer__header-link">
                        <h2 class="footer__header-text">ĐĂNG KÝ EMAIL</h2>
                    </a><a href="#" class="footer__header-link">
                        <h2 class="footer__header-text">
                            TRỞ THÀNH MỘT THÀNH VIÊN
                        </h2>
                    </a><a href="#" class="footer__header-link">
                        <h2 class="footer__header-text">TẠP CHÍ CHĂM SÓC</h2>
                    </a><a href="#" class="footer__header-link">
                        <h2 class="footer__header-text">GỬI PHẢN HỒI CHO CHÚNG TÔI</h2>
                    </a>
                </div>
                <div class="footer__header_items">
                    <a href="#" class="footer__header-link">
                        <h3 class="footer__header-h3">ĐƯỢC GIÚP ĐỠ</h3>
                    </a><a href="#" class="footer__header-link"><span class="footer__header-span">Tình trạng đặt
                            hàng</span></a><a href="#" class="footer__header-link"><span class="footer__header-span">Vận
                            chuyển và giao hàng</span></a><a href="#" class="footer__header-link"><span
                            class="footer__header-span">Đổi trả</span></a><a href="#" class="footer__header-link"><span
                            class="footer__header-span">Các lựa chọn thanh
                            toán</span></a><a href="#" class="footer__header-link"><span class="footer__header-span">Số
                            dư thẻ quà tặng</span></a><a href="#" class="footer__header-link"><span
                            class="footer__header-span">Liên hệ chúng tôi</span></a>
                </div>

                <div class="footer__header_items">
                    <a href="#" class="footer__header-link">
                        <h3 class="footer__header-h3">VỀ CHÚNG TÔI</h3>
                    </a><a href="#" class="footer__header-link"><span class="footer__header-span">Tin
                            tức</span></a><a href="#" class="footer__header-link"><span class="footer__header-span">Nghề
                            nghiệp</span></a><a href="#" class="footer__header-link"><span
                            class="footer__header-span">Nhà đầu tư</span></a><a href="#"
                        class="footer__header-link"><span class="footer__header-span">Mục đích</span></a><a href="#"
                        class="footer__header-link"><span class="footer__header-span">Sự bền
                            vững</span></a>
                </div>
                <div class="footer__header_items">
                    <div class="footer__header_items_icon">
                        <i class="footer__header_icon bi bi-youtube"></i>

                        <i class="footer__header_icon bi bi-instagram"></i>

                        <i class="footer__header_icon bi bi-facebook"></i>

                        <i class="footer__header_icon bi bi-twitter"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__footer">
            <div class="footer__footer__content grid">
                <div class="footer__location">
                    <div class="footer__location-icon"><i class="bi bi-map"></i></div>
                    <span class="footer__location-text">Viet Nam</span>
                </div>
                <span class="footer__slogan">© 2023 bởi Sneak care. Tự hào được hợp tác với các nhà lãnh đạo
                    các chuyên gia trong lĩnh vực</span>
            </div>
        </div>
    </footer>
    <script src="./js/index.js"></script>
    </div>
</body>

</html>