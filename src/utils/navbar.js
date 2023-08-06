let navbarMenuIcon = document.querySelector("#app__nav-icon");
let navbarSearchIcon = document.querySelector("#app__search-icon");
let navbarMenuClose = document.querySelector(".menu__bar-icon");
let navbarSearchClose = document.querySelector(".search__bar-icon");
let navbarMenu = document.querySelector(".aside-bar");
let searchMenu = document.querySelector(".search-aside-bar");

navbarMenuIcon.onclick = () => {
  navbarMenu.classList.toggle("openNavbar");
};

navbarMenuClose.onclick = () => {
  navbarMenu.classList.toggle("openNavbar");
};

navbarSearchIcon.onclick = () => {
  searchMenu.classList.toggle("openNavbar");
  searchMenu.style.width = "100%";
};

navbarSearchClose.onclick = () => {
  searchMenu.classList.toggle("openNavbar");
};

document.onclick = (event) => {
  if (
    navbarMenu.contains(event.target) ||
    navbarMenuIcon.contains(event.target) ||
    searchMenu.contains(event.target) ||
    navbarSearchIcon.contains(event.target)
  ) {
    return;
  }

  navbarMenu.classList.remove("openNavbar");
  searchMenu.classList.remove("openNavbar");
};
