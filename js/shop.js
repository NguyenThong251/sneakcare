// Get the elements
const menuNavListOption = document.querySelector(".menu__nav_list_option");
const mainLeft = document.querySelector(".main__left");

// Add click event listener to menuNavListOption
menuNavListOption.addEventListener("click", () => {
  // Toggle the overlay
  mainLeft.classList.toggle("overlay-active");
});

const menuList = document.querySelector(".menu__nav_list");
menuList.onclick = function () {
  const navBar = document.querySelector(".header__nav");
  navBar.classList.toggle("active");
};

/* option nav*/
// const menuList = document.querySelector(".menu__nav_list");
// menuList.onclick = function () {
//   const navBar = document.querySelector(".header__nav");
//   if (navBar.style.display === "block") {
//     navBar.style.display = "none";
//   } else {
//     navBar.style.display = "block";
//   }
// };
