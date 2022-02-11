<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creatode</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="style.css">

</head>
<body>
        <div class="upper-header">
           <div class="logo">
             <img src="logo.svg" alt="Logo"/>
           </div>
           <div class="menu">
                <i class="bi bi-search"></i>
                <input placeholder="Wyszukaj"/>
                <a href="koszyk.html">     
                  <i class="bi bi-basket3-fill">Koszyk </i>
              
                
                <a href="kontakt.html">
                  <i class="bi bi-chat-right-dots-fill">Kontakt</i>
              
                </a>

                <a href="galeria.html">
                  <i class="bi bi-easel"> Galeria</i></a>
                <a href="login.php">
                  <i class="bi bi-person-circle">Konto</i>
                </a>
                
           </div>
        </div>

 
        
        <div class="container-fluid mt-3">
         <h1>Formularz logowania</h1>
         <form method="POST" action="login.php">
            <input name="login" placeholder="Login" />
            <input name="password" type="password" placeholder="Hasło"/>
            <button type="submit">Zaloguj się</button>
         </form>
        </div>
        
        <div class="container-fluid mt-3">
            <h2>Formularz rejestracji</h2>
            <form method="POST" action="register.php">
            <input name="login" placeholder="Login"/>
            <input name="email" placeholder="E-mail"/>
            <input name="password" type="password" placeholder="Hasło"/>
            <button type="submit">Zarejestruj się</button>
         </form>
        </div>
        
        <!-- Stopka -->
        <div class="footer">
          <div class="about-company">
            <p>CreatoDe</p>
            <p>Firma zajmujące się </p>
          </div>
        
          <div class="social-media">
            <img src="notification.svg" alt="powiadomienie" class="ikonka">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-youtube"></i>
            <i class="bi bi-instagram"></i>
          </div>
        </div>


</body>
</html>