function editProduct() {
  var form = document.getElementById("formEdit");
  var formData = new FormData(form);

  jQuery.ajax({
    url: "updateProductsExe.php",
    type: "POST",
    dataType: "json",
    data: formData,
    contentType: false,
    processData: false,
    success: function (result) {
      Swal.fire("Tudo certo!", "Carne editada com sucesso!", "success").then(
        function () {
          window.location = "./productTable.php";
        }
      );
    },
    error: function (resp) {
      console.log(resp);
      Swal.fire("Erro ao editar Produto!", "", "error");
    },
  });
}

var form = document.getElementById("formEdit");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  editProduct();
});
