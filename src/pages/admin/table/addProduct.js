function createItem() {
  var form = document.getElementById("form");
  var formData = new FormData(form);

  jQuery.ajax({
    url: "addProductExe.php",
    type: "POST",
    dataType: "json",
    data: formData,
    contentType: false,
    processData: false,
    success: function (result) {
      Swal.fire("Tudo certo!", "Carne cadastrada com sucesso!", "success").then(
        function () {
          window.location = "./productTable.php";
        }
      );
    },
    error: function (resp) {
      console.log(resp);
      Swal.fire("Erro ao cadastrar a carne!", "", "error");
    },
  });
}

const form = document.querySelector("#form");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  createItem();
});
