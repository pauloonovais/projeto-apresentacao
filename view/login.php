<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/login.css " rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../js/login.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
<div class="container">
<<<<<<< HEAD:view/login2.php
    <h1>Tela de login</h1>
    <?php
    if ($_POST){
        include '../vendor/autoload.php';
        $u = new \App\Model\Usuario();
        $u->setEmail($_POST['email']);
        $u->setSenha($_POST['senha']);
        $uDAO = new \App\DAO\UsuarioDAO();
        if ($uDAO->login($u))
            header("Location: entrada.php");
        else
            echo "<div class='alert alert-danger'>E-mail ou senha incorretos!</div>";
    }
    ?>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" placeholder="exemplo@gmail.com" class="form-control">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" class="form-control">
        </div>
        <input type="submit" value="Logar" class="btn btn-success col-12">
    </form>
</div>
</body>
</html>
=======
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" id="inputEmail" class="form-control" placeholder="Endereço e-mail" required autofocus>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Relembre-me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
        </form><!-- /form -->

    </div><!-- /card-container -->
</div><!-- /container -->
>>>>>>> 0015e24eab87b2e7ac17b9a6e020ec4a730c6f22:view/login.php
