<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Css Links -->
        <link rel="stylesheet" href="../../css/reset.css" />
        <link rel="stylesheet" href="../../css/style.css" />

        <!-- Font Awesome -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
        />
        
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
        />

        <!-- MDB -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
            rel="stylesheet"
        />

        <title>Mercadão da carne</title>
    </head>
    <body>
        <?php 
            require_once '../../components/header.php'; 
            require_once './load.php';
        ?>
        <div class="box">
            <div class="imgs">
                <div class="imgMain">
                <img src="data:image/jpeg;base64,<?php echo $imagem; ?>" alt="" class="profile__pic img_fluid" />
                </div>
            </div>
            <div class="info">
                <h2 id="titulo"><?php echo ($nome);?></h2>
                <p>PREÇO POR KG</p>
                <h4 id="preco">R$ <?php echo ($preco);?></h4>
                <button class="button-24" role="button">COMPRAR PELO WHATSAPP</button>
                <p class="pix"><i class="fab fa-pix"></i> Pagamento por <span>PIX</span></p>
                <h7><i class="fas fa-truck-fast"></i>Entrega Agendada</h7>
                <div class="description">
                    <h5>Descrição</h5>
                    <p><?php echo ($descricao);?></p>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </body>
</html>
