<!DOCTYPE html>
<html>
    <head>
        <title>E-Commerce</title>
        <meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg" id="nav1">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"></span>
                <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                    <img src="//placehold.it/40?text=LOGO" alt="logo">
                </a>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar" style="padding-right: 10%;">
                <ul class="navbar-nav ms-auto flex-nowrap">
                    <li class="nav-item" style="text-align: center;">
                        <a href="#" style="color:white" class="nav-link m-2 menu-item nav-active" id="contact">Contact</a>
                    </li>
                    <li class="nav-item" style="text-align: center;">
                        <a href="#" style="color:white" class="nav-link m-2 menu-item" id="recrutement">Recrutement</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" style="color:white" class="nav-link m-2 menu-item">
                            <img src="asset/france.jpeg" class="rounded-circle" id="imgFrance"/>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" style="color:white" class="nav-link m-2 menu-item fa fa-search" id="search"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg" id="nav2">
            <div class="d-flex flex-grow-1" style="padding-left: 5%;">
                <span class="w-100 d-lg-none d-block">
                    </span>
                <a class="navbar-brand d-none d-lg-inline-block" href="#">
                    <img id="prisma" src="asset/Prisma-Final-3.png" />
                </a>
                <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                    <img src="//placehold.it/40?text=LOGO" alt="logo">
                </a>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="navbar-nav ms-auto flex-nowrap">
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item active">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Produit & Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Réference</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Partenaire</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">A propos</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid"  style="margin-top: 5%;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <center>
                            <h1 style="color:blue;">
                                Mesure de la Qos internet fixe en Tunisie (pour 2 années):
                            </h1>
                            <center>
                                <p style="color:blue">
                                    Exemples des KPIs mesurés : Débit HTTP en download / upload, Taux de perte de paquets,
                                    Débit TCP en download / upload , VoIP (MOS, Gigue, délai,taux de paquets perdus),
                                    Débit Streaming Youtube, Débit UDP en download / upload, Débit peer-to-peer ,
                                    Temps de réponse, Traceroute, Nombre de retransmissions, Ping RTT,
                                    Temps de résolution DNS, Vidéo (Délai, Gigue, délai, taux de paquets perdus,
                                    delay factor, media loss rate).
                                </p>
                            </center>
                            <button  class="rounded-pill" id="ref1">Voir plus</button>
                            <button class="rounded-pill" id="ref2">Consulter Nos réferences</button>
                        </center>        
                    </div>
                    <div class="col-xs-12 col-md-6" >
                        <img src="asset/Group 596.svg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6" style="background-color: #253D8A; top:800px;">
                    <center>
                        <h1 style="color:white;">
                            Fourniture, installation, intégration, test et mise en servicedes équipements de synchronisation :
                        </h1>
                        <center>
                            <p style="color:white">
                                Solution basée principalement sur le produit TP5000<br>
                                ✓ Produit supportant les dernières technologies en matière de synchronisation (SyncE, PTP,…)
                            </p>
                        </center>
                        <button  class="rounded-pill" id="ref1">Voir plus</button>
                        <button class="rounded-pill" id="ref2">Consulter Nos réferences</button>
                    </center>
                </div>
                <div class="col-xs-12 col-md-6" >
                    <img src="asset/Group 596.svg" />
                </div>
            </div>
        </div>
    </body>
</html>