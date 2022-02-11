<?php include("header.php");?>
<div class="mt-5">
<div class="container"><p> Tutaj znajdziesz informacje na nasz temat, oraz formularz, dzięki któremu możesz spersonalizować 
            swoje zamówienie na naszej stronie. </p></div>

            
    <div class="container"><h1 class="text-center">TWOJE INFORMACJE</h1></div>
    <div class="container">
     
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adres E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="imieinazwisko" class="form-label">Imię i nazwisko</label>
            <input type="text" class="form-control" id="imieinazwisko">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Powiadom mnie o wiadomości</label>
            <p> zaznaczenie pola "powiadom mnie o wiadomości" spowoduje natychmiastowe powiadomienie cię, o naszej 
                odpowiedzi na zadane pytanie, czy też zamówienie. </p>
        </div>
        <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Twoja wiadomość</label>
        
        </div>
        <button type="submit" class="btn btn-primary">Wyślij</button>
        </form>
    </div>

    <!-- Szersze niż container -->

    <div class="grafika mt-2 container"  style="display: flex; justify-content: center; ">
                     <img src="img/grafika.jpg" alt="test" style="width: 30%; height: 20%;"> <br>
                     </div>
                     <div class="container">
                         <h5 style="text-align:center;">Napisz do nas!</h5>
                     </div>
                          <i><p>
                          <p class="container text-white" style="background: rgba(1,1,1,0.3);text-align:center"> Szczegółowy opis pomoże nam sprostać twoim oczekiwaniom.
                             Stały kontakt z nami zapewniamy nie tylko przez kontakt telefoniczny oraz mail.
                             Od teraz możesz komunikować się z nami za pomocą formularza.
                             Prosimy sprawdzać zakładke "Powaidomienia" <p> <i> 

                             
                         
                         
</div>
<?php include("footer.php");?>