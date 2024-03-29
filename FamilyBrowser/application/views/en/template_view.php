<html lang="en">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Family Browser Help Page</title>
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
            <div class="col-md-9">
                <a href="/FamilyBrowser/en/overview">
                    <div id='logo-browser'>
                        <img src="/FamilyBrowser/images/logo.png" style="width: 55px">
                    </div>
                    <div id="title" class='header-title'>
                        FAMILY BROWSER User Guide
                    </div>
                </a>
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
            <button class="accordion">Get Started</button>
            <div class='panel'>
                <a class="nav-button" target="_self" data-name="Overview" href="/FamilyBrowser/en/Overview">Overview</a>
                <a class="nav-button" target="_self" data-name="Account_Management" href="/FamilyBrowser/en/Account_Management">Registration / login</a>
                <a class="nav-button" target="_self" data-name="Settings" href="/FamilyBrowser/en/Settings">Settings</a>
                <a class="nav-button" target="_self" data-name="FAQ" href="/FamilyBrowser/en/FAQ">FAQ</a>
            </div>

            <button class="accordion">Installation</button>
            <div class="panel">
                <a class="nav-button" target="_self" data-name="Installation" href="/FamilyBrowser/en/Installation">How to install</a>
                <a class="nav-button" target="_self" data-name="Content" href="/FamilyBrowser/en/Content">Content</a>
                <a class="nav-button" target="_self" data-name="Update" href="/FamilyBrowser/en/Update">How to update</a>
                <a class="nav-button" target="_self" data-name="Release Notes" href="/FamilyBrowser/en/Release_History">Release history</a>
            </div>

            <button class="accordion">Inserting Families</button>
            <div class="panel">
                <a class="nav-button" target="_self" data-name="Interface" href="/FamilyBrowser/en/Interface">Interface</a>
                <a class="nav-button" target="_self" data-name="Basic_functions" href="/FamilyBrowser/en/Basic_functions">Families insertion</a>
                <a class="nav-button" target="_self" data-name="Architecture" href="/FamilyBrowser/en/Architecture">Architecture</a>
                <a class="nav-button" target="_self" data-name="Tools" href="/FamilyBrowser/en/Tools">Tools</a>

            </div>

            <button class="accordion">Families ordering</button>
            <div class="panel">
                <a class="nav-button" target="_self" data-name="FamilyOrderForm" href="/FamilyBrowser/en/Order">Families ordering</a>
                <a class="nav-button" target="_self" data-name="FamilyOrderForm" href="/FamilyBrowser/en/Order/Status">Order status</a>
            </div>
        </div>

        <div class="col-md" style="padding:0px; margin-bottom:0px; margin-right:0px;">
            <div id="content"><?php include 'application/views/en/' . $content_view; ?></div>
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