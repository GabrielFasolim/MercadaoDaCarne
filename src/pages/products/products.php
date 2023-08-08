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

        <!-- FavIcon -->
        <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">

        <?php
            require_once './load.php';
            $title = "Mercadão barato";
            if (isset($nome)) {
                $title .= " - " . $nome;
            }
        ?>

        <title><?php echo $title; ?></title>
    </head>
    <body>
        <?php 
            require_once '../../components/header.php'; 
        ?>
        <div class="box container-md">
            <div class="imgs">
                <div class="imgMain">
                    <img src="data:image/jpeg;base64,<?php echo $imagem; ?>" alt="" class="profile__pic img_fluid" id='imgProduto'/>
                </div>
            </div>
            <div class="info">
                <h2 id="titulo"><?php echo ($nome);?></h2>
                <div class="price">
                    <p>PREÇO POR KG</p>
                    <h4 id="preco">R$ <?php echo ($preco);?></h4>
                </div>
                <a target="blank" href="https://web.whatsapp.com/send?phone=5553997012171"><button class="button-24" role="button"> COMPRAR PELO WHATSAPP</button></a>
                <p class="pix"><i class="fab fa-pix"></i> Pagamento por <span>PIX</span></p>
                <div class="entrega-agendada">
                    <i class="fas fa-truck-fast"></i>
                    <div>
                        <h3>Entrega Agendada</h3>
                        <p>Escolha o horário e faça seu pedido</p>
                    </div>
                </div>
                <div class="description">
                    <h5>Descrição</h5>
                    <p><?php echo ($descricao);?></p>
                </div>
            </div>
        </div>
        <div class="products container-md">
            <p class="product-title">NOSSAS CARNES <span>BOVINAS</span></p>
            <div class="products-content">
                <?php require "../home/loadBovinos.php"?>
            </div>
            <div class="btn-vermais"><a href="#" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
            <div class="main-division">
            </div>
            <div class="products container-md mt-3">
                <p class="product-title">NOSSAS CARNES DE <span>AVES</span></p>
            </div>
            <div class="products-content">
                <?php require "../home/loadAves.php"?>
            </div>
            <div class="btn-vermais"><a href="#" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
            <div class="main-division">
            </div>
            <div class="products container-md mt-3">
                <p class="product-title">NOSSAS CARNES <span>SUÍNAS</span></p>
            </div>
            <div class="products-content">
                <?php require "../home/loadSuinos.php"?>
            </div>
            <div class="btn-vermais"><a href="#" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
            <div class="main-division">
            </div>
            <div class="products container-md mt-3">
                <p class="product-title">NOSSAS <span>LINGUIÇAS</span></p>
            </div>
            <div class="products-content">
                <?php require "../home/loadLinguicas.php"?>
            </div>
            <div class="btn-vermais"><a href="#" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
            <div class="main-division"></div>
            <div class="products container-md mt-3">
                <p class="product-title">NOSSOS <span>KITS</span></p>
                <div class="products-content">
                    <?php require "../home/loadKits.php"?>
                </div>
                <div class="btn-vermais"><a href="#" class="btn"><i class="fas fa-angles-right"></i> Ver mais</a></div>
                <div class="main-division"></div>
            </div>
        </div>

        <? require_once "../../components/footer.php"; ?>
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <script src="../categories/categorySearch.js"></script>
    </body>
</html>
