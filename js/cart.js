document.addEventListener("DOMContentLoaded", function () {
  // Lấy tham chiếu đến các phần tử toast
  const toastContainer = document.querySelector(".toast__success");
  const checkoutButton = document.querySelector("#checkout");
  const checkoutButtonn = document.getElementById("checkoutt");
  const deleteButton = document.getElementById("delete");
  const overlaytoast = document.querySelector(".toast");
  console.log(overlaytoast);

  // Hàm hiển thị toast
  function showToast() {
    toastContainer.style.display = "block";
  }

  // Hàm đóng toast
  function hideToast() {
    toastContainer.style.display = "none";
  }

  // Gắn sự kiện nhấp vào nút "Check Out"
  checkoutButton.addEventListener("click", showToast);
  checkoutButtonn.addEventListener("click", showToast);

  // Gắn sự kiện nhấp vào nút "Delete"
  deleteButton.addEventListener("click", hideToast);
  //   overlaytoast.addEventListener("click", hideToast);
  // Gắn sự kiện nhấp ra ngoài toast để đóng nó
  window.addEventListener("click", function (event) {
    const target = event.target;
    if (target === overlaytoast) {
      hideToast();
    }
  });
});
/*nav*/
const menuList = document.querySelector(".menu__nav_list");
menuList.onclick = function () {
  const navBar = document.querySelector(".header__nav");
  navBar.classList.toggle("active");
};
