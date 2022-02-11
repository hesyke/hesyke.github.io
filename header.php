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
   
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!--<div class="upper-header">
           <div class="menu">
                <a href="koszyk.html">     
                  <i class="bi bi-basket3-fill">Koszyk </i>
              
                
                <a href="kontakt.html">
                  <i class="bi bi-chat-right-dots-fill">Kontakt</i>
              
                </a>

                <a href="galeria.html">
                  <i class="bi bi-easel"> Galeria</i></a>
                <a href="logowanie.php">
                  <i class="bi bi-person-circle">Konto</i>
                </a>
                
           </div>
            </div>
-->
       <div class="belka-gorna container shadow-lg pb-4">
            <div class="d-flex flex-column"> <!-- Dwa wiersze-->
                <div class="menu d-flex justify-content-between align-items-center pb-4">
                    <div class="lista">
                        <div class="dropdown">
                            <i class="bi bi-list" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a href="produkty.php"><button class="dropdown-item" type="button">Gotowe produkty</button></a></li>
                                <li><button class="dropdown-item" type="button">koszyk</button></li>
                                <li><button class="dropdown-item" type="button">moje konto</button></li>
                                <li><button class="dropdown-item" type="button">o firmie</button></li>
                               <li> <p class="dropdown-item">  kontakt tel. 143219651</p> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="logo">
                        <a href="index.php"><span>Creatode</span></a>
                    </div>
                    <div class="ikonki">
                    <a href="koszyk.php"><i class="bi bi-basket"></i></a>
                    <a href="informacje.php"><i class="bi bi-info-circle"></i></a>
                    <a href="konto.php"><i class="bi bi-person-circle"></i></a>
                    </div>
                </div>
                <div class="search">
                <input type="search" class="form-control" id="search" placeholder="Szukaj">
                
                </div>
            </div>

       </div>