function createItem() {
  var form = document.getElementById("form");
  var formData = new FormData(form);

  jQuery.ajax({
    url: "addCategoryExe.php",
    type: "POST",
    dataType: "json",
    data: formData,
    contentType: false,
    processData: false,
    success: function (result) {
      Swal.fire(
        "Tudo certo!",
        "Categoria cadastrada com sucesso!",
        "success"
      ).then(function () {
        window.location = "./categoryTable.php";
      });
    },
    error: function (resp) {
      console.log(resp);
      Swal.fire("Erro ao cadastrar a categoria!", "", "error");
    },
  });
}

const form = document.querySelector("#form");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  createItem();
});
