function searchData(search) {
  window.location =
    "http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/categorySearch.php?search=" +
    search.value;
}
const search = document.querySelector("#search");
const button = document.querySelector("#button");
const searchResponsive = document.querySelector("#search-responsive");
const buttonResponsive = document.querySelector("#button-responsive");

button.addEventListener("click", () => {
  searchData(search);
});

buttonResponsive.addEventListener("click", () => {
  searchData(searchResponsive);
});

search.addEventListener("keydown", (ev) => {
  if (ev.key === "Enter") {
    searchData(search);
  }
});

searchResponsive.addEventListener("keydown", (ev) => {
  if (ev.key === "Enter") {
    searchData(searchResponsive);
  }
});
