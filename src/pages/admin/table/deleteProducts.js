function confirmarExclusao() {
    Swal.fire({
      title: "Você tem certeza?",
      text: "Você não podera reverter isso!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sim, desejo deletar!",
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById("#deleteForm").submit();
      }
    });
  }
  
  const button = document.querySelector("#deleteForm");
  
  button.addEventListener("click", confirmarExclusao);
  