function searchData(search) {
  window.location =
    "http://localhost/Mercad%C3%A3o%20da%20carne/src/pages/categories/categorySearch.php?search=" +
    search.value;
}
const search = document.querySelector("#search");
const button = document.querySelector("#button");

button.addEventListener("click", () => {
  searchData(search);
});

search.addEventListener("keydown", (ev) => {
  if (ev.key === "Enter") {
    searchData(search);
  }
});
