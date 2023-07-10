document.addEventListener("DOMContentLoaded", () => {
  const containerItems = document.querySelectorAll(".season__container-items");

  containerItems.forEach((item) => {
    const cartIcon = item.querySelector(".cartoverlay");

    item.addEventListener("mouseenter", () => {
      cartIcon.style.display = "block";
    });

    item.addEventListener("mouseleave", () => {
      cartIcon.style.display = "none";
    });
  });
});

/* menu reponsive */

const menuList = document.querySelector(".menu__nav_list");
menuList.onclick = function () {
  const navBar = document.querySelector(".header__nav");
  navBar.classList.toggle("active");
};
/*liveshow*/
// Lấy tất cả các phần tử cần thao tác
const slider = document.querySelector(".slider");
const backgroundImg = document.querySelector(".slider__background-img");
const optionItems = document.querySelectorAll(".slider__option-item");
const images = [
  "./img/slider img.png",
  "./img/slider2.webp",
  "./img/slider3.webp",
]; // Danh sách hình ảnh
let currentSlideIndex = 0;

// Xử lý sự kiện khi click vào một slide trong option
optionItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    // Xóa lớp active khỏi tất cả các option
    optionItems.forEach((item) => {
      item.classList.remove("active");
    });

    // Thêm lớp active cho option hiện tại
    item.classList.add("active");

    // Hiển thị slide tương ứng với option
    currentSlideIndex = index;
    showSlide(currentSlideIndex);
  });
});

// Xử lý sự kiện khi click vào nút mũi tên trái
const leftArrow = document.querySelector(
  ".slider__arrow-icon.bi-arrow-left-circle-fill"
);
leftArrow.addEventListener("click", () => {
  currentSlideIndex--;
  if (currentSlideIndex < 0) {
    currentSlideIndex = images.length - 1;
  }
  updateSlider();
});

// Xử lý sự kiện khi click vào nút mũi tên phải
const rightArrow = document.querySelector(
  ".slider__arrow-icon.bi-arrow-right-circle-fill"
);
rightArrow.addEventListener("click", () => {
  currentSlideIndex++;
  if (currentSlideIndex >= images.length) {
    currentSlideIndex = 0;
  }
  updateSlider();
});

// Hiển thị slide tương ứng với currentSlideIndex
function showSlide(index) {
  backgroundImg.src = images[index];
}

// Cập nhật lớp active cho option và hiển thị slide tương ứng với currentSlideIndex
function updateSlider() {
  optionItems.forEach((item, index) => {
    if (index === currentSlideIndex) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
  showSlide(currentSlideIndex);
}
/* header*/
window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", this.window.scrollY > 0);
});
/*add to cart*/

function addtocart(x) {
  var imgage = x
    .closest(".popular__content-items")
    .querySelector(".popular__content-items-img").src;
  var name = x
    .closest(".popular__content-items")
    .querySelector(".popular__content-items-h3").innerText;
  var price = x
    .closest(".popular__content-items")
    .querySelector(".popular__content-price").innerText;
  var sp = new Array(imgage, name, price);

  showcountsp();
}
let showcountsp = () => {
  let countSp = document.getElementById("countsp");
  console.log(basket.map((x) => x.item).reduce((x, y) => x + y, 0));
};
