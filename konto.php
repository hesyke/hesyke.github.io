<?php include("header.php");?>
<div class="mt-5">

    <?php setcookie("id", "", time()-3600); ?>
    <?php setcookie("login", "", time()-3600); ?>
    <?php setcookie("email", "", time()-3600); ?>

    <div class="container"><h1 class="text-center">TWOJE KONTO</h1></div>

    <div class="container d-flex justify-content-between" id="loginScreen">
        <div>
            <h2>Logowanie</h2>
            <div>
            <form method="POST" action="login.php" style="display: flex; flex-direction: column; gap: 10px;">
                <input name="login" placeholder="Login" />
                <input name="password" type="password" placeholder="Hasło"/>
                <button type="submit">Zaloguj się</button>
            </form>
            </div>
        </div>
        <img src="img/marketing.svg" alt="Logowanie i rejestracja" />
        <div>
            <h2>Rejestracja</h2>
            <div>
            <form method="POST" action="register.php"  style="display: flex; flex-direction: column; gap: 10px;">
            <input name="login" placeholder="Login"/>
            <input name="email" placeholder="E-mail"/>
            <input name="password" type="password" placeholder="Hasło"/>
            <button type="submit">Zarejestruj się</button>
            </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php");?>