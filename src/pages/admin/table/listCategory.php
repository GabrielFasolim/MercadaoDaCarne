<?php
  require_once "../../../database/connection.php";

  $sql = "SELECT id, nome, descricao
          FROM mercadaodacarne.tipo";

  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr class='panelContent'>";
            echo "<th class='id' scope='row'>$row[id]</th>";
            echo "<td>$row[nome]</td>";
            echo "<td class='descricaoCategory'>$row[descricao]</td>";
            echo "<td>
                  <a href ='./deleteCategory.php?id=$row[id]'>
                    <i class='fas fa-trash'></i>
                  </a>
                  <a href='./updateCategory.php?id=$row[id]'>
                    <i class='fas fa-pen'></i>
                  </a>
                </td>";
            echo "</tr>";
        }
    }
} 

?>

<script>
    var descricaoElements = document.getElementsByClassName("descricaoCategory");
    for (var i = 0; i < descricaoElements.length; i++) {
        var descricao = descricaoElements[i].textContent;
        var limiteCaracteres = 100;

        if (descricao.length > limiteCaracteres) {
            descricaoElements[i].textContent = descricao.substring(0, limiteCaracteres) + "...";
        }
    }
</script>