<?php
session_start();
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
if(isset($_GET['delcart']) && ($_GET['delcart']==1)) unset($_SESSION['giohang']);
//xóa sản phẩm giỏ hàng
if(isset($_GET['delid']) && ($_GET['delid']>=0)){
array_splice($_SESSION['giohang'],$_GET['delid'],1);
};


// lấy array
if (isset($_POST['addcart'])&&($_POST['addcart'])) {
    $hinh = $_POST['hinh'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    // kiểm tra sản phẩm có trong giỏ hàng hay không
    $fl=0;

    for ($i=0; $i < count($_SESSION['giohang']) ; $i++) { 
        if ($_SESSION['giohang'][$i][1]==$tensp) {
            $fl=1;
            $soluongnew =$soluong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $soluongnew;
            break;
        }
    }
    if($fl==0){
        //them sản phẩm vòa giỏ hàng
        $sp=[$hinh,$tensp,$gia,$soluong];
        $_SESSION['giohang'][]=$sp;
    }
}
function showcart() {
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (count($_SESSION['giohang']) > 0) {
            $tong = 0;

            // Move the common HTML elements outside of the loop
            echo '<section class="main__cart-total">
                <div class="main__cart_total-left">
                    <div class="cart_total-left-content">
                        <div class="cart_total-left-nember">
                            <div class="cart_total-left-nember-item">
                                <h3 class="cart_total-lef-nember-title">
                                    Miễn phí vận chuyển cho thành viên.
                                </h3>
                                <span class="cart_total-lef-nember-content">Trở thành Thành viên Nike để được vận chuyển nhanh và miễn
                                    phí.
                                    <a href="#"> Tham gia với chúng tôi</a></span>
                            </div>
                        </div>
                        <div class="total__left_summary">
                            <h3 class="total__left_summary-title">Tóm tắt giỏ hàng</h3>
                            <span class="total__left_summary-content">
                                Kiểm tra mặt hàng của bạn và chọn vận chuyển của bạn để có
                                trải nghiệm tốt hơn
                            </span>
                        </div>  <div class="total__left_product">
                        <div class="total__left_product-container">';

            for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                $total = $tong - 7.00;
                echo '
              
                        <div class="total__left_product-item">
                            <div class="total__left_product-images">
                                <div class="total__left_product-image">
                                    <img src="../img/' . $_SESSION['giohang'][$i][0] . '" alt="" />
                                </div>
                            </div>
                            <div class="total__left_product-content">
                                <h3 class="total__left_product-content-title">
                                    ' . $_SESSION['giohang'][$i][1] . '
                                </h3>
                                <p class="total__left_product-content-size">42 EU - 9US</p>
                                <div class="total__left_product-content-quantity">
                                    <span class="total__left_product-content-quantity-text">Quantity</span>
                                    <input class="total__left_product-content-quantity-number" type="number" min="1" value="' . $_SESSION['giohang'][$i][3] . '" data-index="' . $i . '"/>
                                </div>
                                <div class="total__left_product-content-price">
                                    <p>$' . $_SESSION['giohang'][$i][2] . '</p>
                                </div>
                            </div>
                            <a href="cart.php?delid=' . $i . '" class="total__left_product-delete">
                                <i class="total__left_product-delete-icon bi bi-trash3-fill"></i>
                            </a>
                        </div>
                        
                    ';
            }

            // Move the rest of the HTML elements outside of the loop
            echo '<a href="cart.php?delcart=1"><button class="delete">Xóa giỏ hàng</button></a>
            <a href="../index.php"><button class="contine">tiếp tục đặt hàng</button></a></div>
            </div>
                <div class="total__left_shipping">
                <h3 class="total__left_shipping_title">
                  Phương thức vận chuyển có sẵn
                </h3>
                <div class="total__left_shipping-item">
                  <div class="total__left_shipping-item-image">
                    <img
                      src="../img/shipping1.png"
                      alt=""
                      class="total__left_shipping-item-img"
                    />
                  </div>
                  <div class="total__left_shipping-item-content">
                    <h3 class="total__left_shipping-item-content-title">
                      Chuyển phát Fedex
                    </h3>
                    <span class="total__left_shipping-item-content-title-span">
                      Giao hàng tận nơi: 2-3 ngày làm việc</span
                    >
                  </div>
                  <div class="total__left_shipping-item-right">
                    <h3 class="total__left_shipping-item-right-title">
                      Miễn phí
                    </h3>
                    <div class="total__left_shipping-item-right-icon">
                      <i class="bi bi-circle-fill"></i>
                    </div>
                  </div>
                </div>
                <h3 class="total__left_shipping_title">
                  Vận chuyển quốc tế có sẵn
                </h3>
                <div class="total__left_shipping-item">
                  <div class="total__left_shipping-item-image">
                    <img
                      class="shipping2-img"
                      src="../img/shipping2.png"
                      alt=""
                      class="total__left_shipping-item-img"
                    />
                  </div>
                  <div class="total__left_shipping-item-content">
                    <h3 class="total__left_shipping-item-content-title">
                      Chuyển Phát DHL
                    </h3>
                    <span class="total__left_shipping-item-content-title-span"
                      >Giao hàng tận nơi: 1-3 ngày làm việc</span
                    >
                  </div>
                  <div class="total__left_shipping-item-right">
                    <h3 class="total__left_shipping-item-right-title">
                      $ 12.00
                    </h3>
                    <div class="total__left_shipping-item-right-icon">
                      <i class="icon-shipping2 bi bi-circle"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="main__cart_total-right">
            <div class="main__cart_total-right-container">
            <h3 class="main__cart_total-right-title">
            Xem lại chi tiết đơn hàng
          </h3>
          <p class="main__cart_total-right-code-content">
            Bạn có Mã khuyến mại không?
          </p>
          <div class="main__cart_total-right-code">
            <input
              type="text"
              class="main__cart_total-right-code-input"
              placeholder="Code voucher"
            />
            <a class="main__cart_total-right-code-link" href=""
              ><button class="main__cart_total-right-code-button">
                Áp dụng
              </button></a
            >
          </div>
          <div class="main__cart_total-right-subtotal">
            <h3 class="main__cart_total-right-subtotal-content">
              Tổng phụ
            </h3>
            <p class="main__cart_total-right-subtotal-price">$'.$tong.'</p>
          </div>
          <div class="main__cart_total-right-subtotal">
            <h3 class="main__cart_total-right-subtotal-content">
              Ước tính Vận Chuyển & Bàn Giao
            </h3>
            <p class="main__cart_total-right-subtotal-price">$7.00</p>
          </div>
          <div class="main__cart_total-right-subtotal">
            <h3 class="main__cart_total-right-subtotal-content">
              Thuế ước tính
            </h3>
            <p class="main__cart_total-right-subtotal-price">-</p>
          </div>
          <div class="main__cart_total-right-total">
            <h3 class="main__cart_total-right-total-content">Tổng</h3>
            <p class="main__cart_total-right-total-price">$'.$total.'</p>
          </div>
          <div class="main__cart_total-right-checkout">
            <button
              id="checkoutt"
              class="main__cart_total-right-checkout-btn btn"
            >
              Thanh toán
            </button>

            <a href="" class="main__cart_total-right-checkout-link"
              ><button class="main__cart_total-right-checkout-btn btn">
                Pay Pal
              </button></a
            >
          
        </div>
    </section>';
        } else {
            echo '
            <div class="empty-cart"><img class="empty_img-cart"  src="../img/empty-cart.webp" alt="">;
           </div>; <div class="center"> <a href="../index.php"><button class="contine">tiếp tục đặt hàng</button></a></div>
            ';
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/cart.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <title>Document</title>
</head>

<body>
    <!-- toast -->
    <div class="toast__success">
        <div class="toast">
            <div class="toast__container">
                <div class="toast__main">
                    <div class="toast__header">
                        <i id="check" class="toast__icon bi bi-check-circle-fill"></i>
                        <i id="delete" class="toast__icon bi bi-x-lg"></i>
                    </div>
                    <div class="toast__body">
                        <div class="toast__button">
                            <a href="#" class="toast__button-link"><button class="toast__btn btn">Success</button></a>
                            <a href="#" class="toast__button-link"><button
                                    class="toast__btn btn history">History</button></a>
                        </div>
                        <div class="toast__body_content">
                            <img src="../img/logo toast.png" alt="" class="toast__body_content-logo" />
                            <h3 class="toast__body_content-thanks">
                                Thank you customers for ordering
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app">
        <header class="header">
            <div class="header-main grid">
                <div class="header__logo">
                    <img src="../img/logo.png" alt="" class="header__logo-img" />
                </div>
                <nav class="header__nav">
                    <ul class="header__nav-ul">
                        <li class="header__nav-li">
                            <a href="../index.php" class="header__nav-item">Home</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="#" class="header__nav-item">Man</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="#" class="header__nav-item">Women</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="#" class="header__nav-item">Sales</a>
                        </li>
                        <li class="header__nav-li">
                            <a href="#" class="header__nav-item">Collection</a>
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
                        <a href="./cart.html">
                            <i class="header__right-icon bi bi-cart-check-fill"></i></a>
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
        <!-- main -->
        <div class="main__cart grid">
            <?php
            showcart();
            ?>
            <!-- moresection -->
            <section class="explore">
                <div class="explore__title">
                    <div class="explore__title-item">More to Explore</div>
                    <div class="explore__title-all">
                        <span> All products</span>
                        <i class="explore__title-shop-icon bi bi-sliders"></i>
                    </div>
                </div>
                <div class="explore__container">
                    <div class="explore__container-items">
                        <img src="../img/more1.png" alt="" class="explore__container-img" />
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
                                <span class="explore__container-option-brand">Brand Nike</span>
                                <a href="#" class="explore__container-option-a"><i
                                        class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="explore__container-items">
                        <img src="../img/more2.png" alt="" class="explore__container-img" />
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
                                <span class="explore__container-option-brand">Brand Nike</span>
                                <a href="#" class="explore__container-option-a"><i
                                        class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="explore__container-items">
                        <img src="../img/more3.png" alt="" class="explore__container-img" />
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
                                <span class="explore__container-option-brand">Brand Nike</span>
                                <a href="#" class="explore__container-option-a"><i
                                        class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="explore__container-items">
                        <img src="../img/more4.png" alt="" class="explore__container-img" />
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
                                <span class="explore__container-option-brand">Brand Nike</span>
                                <a href="#" class="explore__container-option-a"><i
                                        class="explore__container-option-icon bi bi-bag-check-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- footer -->
        <div class="member">
            <div class="member__container">
                <div class="member__title">
                    <h3 class="member__title-content">Become A Member</h3>
                    <img src="../img/logo text.png" alt="" class="member__title-img" />
                </div>
                <h3 class="member__title-slogan">
                    Sign up for free. Join the community.
                </h3>
                <div class="member__btns">
                    <a href="#" class="member__link">
                        <button class="member__btn">Login</button>
                    </a>
                    <a href="#" class="member__link">
                        <button class="member__btn-signup">Sign up</button>
                    </a>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer__header">
                <div class="footer__header_content grid">
                    <div class="footer__header_items">
                        <a href="#" class="footer__header-link">
                            <h2 class="footer__header-text">GIFT CARDS</h2>
                        </a><a href="#" class="footer__header-link">
                            <h2 class="footer__header-text">PROMOTIONS</h2>
                        </a><a href="#" class="footer__header-link">
                            <h2 class="footer__header-text">FIND A STORE</h2>
                        </a><a href="#" class="footer__header-link">
                            <h2 class="footer__header-text">SIGN UP FOR EMAIL</h2>
                        </a><a href="#" class="footer__header-link">
                            <h2 class="footer__header-text">BECOME A MEMBER</h2>
                        </a><a href="#" class="footer__header-link">
                            <h2 class="footer__header-text">SNEAK CARE JOURNAL</h2>
                        </a><a href="#" class="footer__header-link">
                            <h2 class="footer__header-text">SEND US FEEDBACK</h2>
                        </a>
                    </div>
                    <div class="footer__header_items">
                        <a href="#" class="footer__header-link">
                            <h3 class="footer__header-h3">GET HELP</h3>
                        </a><a href="#" class="footer__header-link"><span class="footer__header-span">Order
                                Status</span></a><a href="#" class="footer__header-link"><span
                                class="footer__header-span">Shipping and Delivery</span></a><a href="#"
                            class="footer__header-link"><span class="footer__header-span">Returns</span></a><a href="#"
                            class="footer__header-link"><span class="footer__header-span">Payment Options</span></a><a
                            href="#" class="footer__header-link"><span class="footer__header-span">Gift Card
                                Balance</span></a><a href="#" class="footer__header-link"><span
                                class="footer__header-span">Contact Us</span></a>
                    </div>

                    <div class="footer__header_items">
                        <a href="#" class="footer__header-link">
                            <h3 class="footer__header-h3">ABOUT SNEAK CARE</h3>
                        </a><a href="#" class="footer__header-link"><span class="footer__header-span">News</span></a><a
                            href="#" class="footer__header-link"><span class="footer__header-span">Careers</span></a><a
                            href="#" class="footer__header-link"><span
                                class="footer__header-span">Investors</span></a><a href="#"
                            class="footer__header-link"><span class="footer__header-span">Purpose</span></a><a href="#"
                            class="footer__header-link"><span class="footer__header-span">Sustainability</span></a>
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
                    <span class="footer__slogan">© 2023 por Quick Thinking. Proud to be collaborating with leading
                        experts in the field</span>
                </div>
            </div>
        </footer>
        <script src="../js/cart.js"></script>
        <!-- Include the following JavaScript snippet within <script> tags -->
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const quantityInputs = document.querySelectorAll(".total__left_product-content-quantity-number");
            const subtotalElement = document.querySelector(".main__cart_total-right-subtotal-price");
            const totalElement = document.querySelector(".main__cart_total-right-total-price");

            // Function to update item total and overall total
            function updateTotals() {
                let subtotal = 0;
                quantityInputs.forEach((input) => {
                    const index = input.dataset.index;
                    const price = parseFloat(<?php echo $_SESSION['giohang'][0][2]; ?>);
                    const quantity = parseInt(input.value);
                    const itemTotal = price * quantity;
                    subtotal += itemTotal;

                    // Update the displayed item total price
                    const itemTotalElement = input.parentElement.nextElementSibling.querySelector(
                        ".total__left_product-content-price p");
                    itemTotalElement.textContent = "$" + itemTotal.toFixed(2);
                });

                // Update the displayed subtotal and total
                const shippingCost = 7.00; // Estimated Shipping & Handling cost
                const total = subtotal - shippingCost;

                subtotalElement.textContent = "$" + subtotal.toFixed(2);
                totalElement.textContent = "$" + total.toFixed(2);
            }

            // Attach event listeners to quantity input fields
            quantityInputs.forEach((input) => {
                input.addEventListener("change", updateTotals);
            });

            // Call the updateTotals function initially to display the correct totals
            updateTotals();
        });
        </script>

    </div>
</body>

</html>