<?php include("header.php");?>
<div class="mt-5">

    <div class="container"><h1 class="text-center">MOJE KONTO</h1></div>

    <div class="szczegoly bg-white p-4 d-flex">
    <div>
        <strong>Dostępne operacje</strong>
        <a href="#">Sprawdź swoje zamówienia</a>
        <a href="#">Zgłość reklamacje</a>
    </div>
    <div>
        <strong>Twoje dane:</strong> 
        <strong>ID:</strong> <?php echo $_COOKIE["login"]; ?>
        <strong>Login:</strong> <?php echo $_COOKIE["login"];?>
        <strong>E-Mail:</strong> <?php echo $_COOKIE["email"];?>
    </div>
    </div>

</div>
<?php include("footer.php");?>