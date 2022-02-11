<?php include("header.php");?>
<div class="mt-5">

    <div class="container"><h1 class="text-center">TWÓJ KOSZYK</h1></div>

    <div class="container bg-white" style="border-radius:9px">
        PRODUKTY

        <br>
        zdjecie - produkt - cena
    </div>
    <div class="container bg-white" style="border-radius:9px">
<p> cena: </p>
<p> razem do zapłaty:</p>

    </div>
    <div class="container input-group mb-3 d-flex mt-4">
    <button type="button" class="btn btn-warning">Dodaj kod rabatowy</button>
    <input type="text" class="form-control" placeholder="Kod rabatowy" aria-label="Kod rabatowy">
    </div>
    <div class="container">    <button type="button" class="container btn btn-primary btn-lg">Przejdź do kasy </button></div>
    <!-- Szersze niż container -->
    <script>
        document.getElementsByTagName('body')[0].style.background = "url('img/sklep.png')";
    </script>
</div>
<?php include("footer.php");?>