<html>
<!DOCTYPE html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Family Browser Hilfe Page</title>
    <link rel="shortcut icon" href="/FamilyBrowser/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/FamilyBrowser/css/main.css">
</head>

<body>
    <div id="header-area" class="col-md-12">
        <div class="row">
            <div id='logo-building' class="col-md-2">
                <a href="http://building360.ch"><img src="/FamilyBrowser/images/logo_building360.png" style="width: 95px" /></a>
            </div>
            <div class="col-md-7">
                <a href="/FamilyBrowser/de/Overview">
                    <div id='logo-browser'>
                        <img src="/FamilyBrowser/images/logo.png" style="width: 55px">
                    </div>
                    <div id="title" class='header-title'>
                        FAMILY BROWSER Benutzerhandbuch
                    </div>
                </a>
            </div>

            <div class="col-md-2 d-flex flex-row">
                <?php if (isset($_SESSION['user'])) : ?>
                    <div class="dropdown align-self-center p-1">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php print htmlentities(isset($_SESSION['role']) ? $_SESSION['user'] : "Konto") ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php ?>
                            <a class="dropdown-item" href="/FamilyBrowser/de/Auth/Logout">Abmeldung</a>
                            <a class="dropdown-item" href="/FamilyBrowser/de/Order/Manage">Auftragsverwaltung</a>
                        </div>
                    </div>
                <?php endif ?>

                <?php if (!isset($_SESSION['user'])) : ?>
                    <div class="align-self-center p-1">
                        <a href="/FamilyBrowser/de/Auth/Login" class="btn btn-success" style="color:white"><?php print htmlentities(isset($_SESSION['role']) ? $_SESSION['user'] : "Anmeldung") ?></a>
                    </div>

                    <div class="align-self-center p-1">
                        <a href="/FamilyBrowser/de/Auth/Register" class="btn btn-success" style="color:white">Registrieren</a>
                    </div>
                <?php endif ?>
            </div>

            <div class="col-md-1">
                <div id="languageSelector" class="dropdown"></div>
                <div class="btn-lang">DE</div>
                <span>|</span>
                <div class="btn-lang">EN</div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <hr class='line' />
    </div>

    <div class="row" style="width:100%;   margin-left:0px">
        <div id="navigation" class="col-md-2">
            <button class="accordion">Loslegen</button>
            <div class='panel'>
                <a class="nav-button" target="_self" data-name="Overview" href="/FamilyBrowser/de/Overview">Überblick</a>

                <a class="nav-button" target="_self" data-name="Settings" href="/FamilyBrowser/de/Settings">Einstellungen</a>
                <a class="nav-button" target="_self" data-name="FAQ" href="/FamilyBrowser/de/FAQ">FAQ</a>
            </div>

            <button class="accordion">Installation</button>
            <div class="panel">
                <a class="nav-button" target="_self" data-name="Installation" href="/FamilyBrowser/de/Installation">Installation</a>
                <a class="nav-button" target="_self" data-name="Content" href="/FamilyBrowser/de/Content">Content</a>
                <a class="nav-button" target="_self" data-name="Update" href="/FamilyBrowser/de/Update">Aktualisierung</a>
            </div>

            <button class="accordion">Funktionen</button>
            <div class="panel">
                <a class="nav-button" target="_self" data-name="Interface" href="/FamilyBrowser/de/Interface">Interface</a>
                <a class="nav-button" target="_self" data-name="Basic_functions" href="/FamilyBrowser/de/Basic_functions">Familien einfügen</a>
                <a class="nav-button" target="_self" data-name="Tools" href="/FamilyBrowser/de/Tools">Toolbox</a>
            </div>

            <?php if (isset($_SESSION['user'])) : ?>
                <?php if ($_SESSION['role'] == 'Admin' || $_SESSION['role'] == 'Manager') : ?>
                    <button class="accordion">Familie beantragen</button>
                    <div class="panel">                       
                        <a class="nav-button" target="_self" data-name="FamilyOrderForm" href="/FamilyBrowser/de/Order">Familie beantragen</a>
                        <a class="nav-button" target="_self" data-name="FamilyOrderForm" href="/FamilyBrowser/de/Order/Status">Status der Bestellung</a>
                        <a class="nav-button" target="_self" data-name="FamilyOrderForm" href="/FamilyBrowser/de/Order/Manage">Auftragsverwaltung</a>
                        <a class="nav-button" target="_self" data-name="FamilyOrderForm" href="/FamilyBrowser/de/User">Benutzerverwaltung</a>
                    </div>
                <?php endif ?>
            <?php endif ?>
        </div>

        <div class="col-md" style="padding:0px; margin-bottom:0px; margin-right:0px;">
            <div id="content"><?php include 'application/views/de/' . $content_view; ?></div>
        </div>
    </div>

    <footer>
        <div class="col-md-12">
            <hr class="line" />
            <div>building360.ch Family Browser</div>
        </div>
    </footer>
</body>

<script src="/FamilyBrowser/js/accordeon.js"></script>
<script src="/FamilyBrowser/js/languages.js"></script>

</html>