<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Css Links -->
        <link rel="stylesheet" href="../../../css/reset.css" />
        <link rel="stylesheet" href="../../../css/style.css" />

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
    <body class="body-login">
        <div class="boxLogin">
            <form id="form" method="POST">

                <div class="logo">
                    <img class="logoLogin" src="../../../img/logo.png" alt="Logo mercadão da carne">
                </div>
                
                    <form class="login">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="email" id="email" class="form-control" />
                        <label class="form-label" for="form1Example1">Login</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="senha" name ="senha" class="form-control" />
                        <label class="form-label" for="form1Example2">Senha</label>
                    </div>

                
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </form>
                
        
            </form>
        </div>
        <!-- Jquery -->
        <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>

        <!-- SweetAlert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
        ></script>
        <script src="./login.js"></script>
    </body>
</html>