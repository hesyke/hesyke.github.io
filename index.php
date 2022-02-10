<?php include("header.php");?>
<div class="mt-5">
    <div class="container p-0">
        <h1 class="text-center">Kreator Creatode</h1>
        <!-- Slider -->
            
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/ok.jpg" alt="Los Angeles" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>Witaj</h3>
            <p>w markecie postaci creatode</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/ok2.jpg" alt="Chicago" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>Postacie</h3>
            <p>Personalizujemy według twojego uznania</p>
            </div> 
        </div>
        <div class="carousel-item">
            <img src="img/ok3.jpg" alt="New York" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>Więcej informacji</h3>
            <p>Na naszych mediach lub w zakładce kontakt</p>
            </div>  
        </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        </button>
        </div>
    </div>
    <div class="container text-white mb-4" style="background: rgba(1,1,1,0.3)"> 
        <span>pierwszy produkt -20 zł </span>
    </div>
<p class="container text-white" style="background: rgba(1,1,1,0.3)"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley </p>
      <!-- Lista produktów -->
      <div class="products container">
             <div class="product card">
                <img class="" src="img/1.jpg" alt="Praca 1">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley</p>
             </div>
             <div class="product">
                <img class="" src="img/ikonka_produkt.svg" alt="Praca 2" style="width: 300px; margin-top:50%;" >
             </div>
             <div class="product card">
                <img class="" src="img/3.jpg" alt="Praca 3">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley</p>
             </div>

        </div>
  <!-- Lista produktów -->
  <div class="products container">
             <div class="product card">
                <img class="" src="img/1.jpg" alt="Praca 1">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley</p>
             </div>
             <div class="product" style="width:100%">
                 
             </div>
             <div class="product card">
                <img class="" src="img/3.jpg" alt="Praca 3">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley</p>
             </div>

        </div>

    <!-- Szersze niż container -->
</div>
<?php include("footer.php");?>