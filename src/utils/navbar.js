let navbarMenuIcon = document.querySelector("#app__nav-icon");
let navbarMenuClose = document.querySelector(".menu__bar-icon");
let navbarMenu = document.querySelector(".aside-bar");

navbarMenuIcon.onclick = () => {
  navbarMenu.classList.toggle("openNavbar");
  console.log("alo");
};

navbarMenuClose.onclick = () => {
  navbarMenu.classList.toggle("openNavbar");
};

document.onclick = (event) => {
  if (
    navbarMenu.contains(event.target) ||
    navbarMenuIcon.contains(event.target)
  ) {
    return;
  }

  navbarMenu.classList.remove("openNavbar");
};
