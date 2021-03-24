<div class="auth-card align-self-center">
    <div class="auth-card-header d-flex flex-row justify-content-center align-items-center">
        <div class="p-2">
            <img src="/FamilyBrowser/images/logo.png" alt="" style="height:60px">
        </div>
        <div>
            Family Browser
        </div>
    </div>
    <div class="auth-card-body p-3">
        <form action="/FamilyBrowser/de/Auth/Register" method="post" class="d-flex flex-column align-items-stretch">
            <div class="input-group mt-3 mb-3 w-75 align-self-center">
                <input type="email" class="form-control" placeholder="Name" name="login">
            </div>
            <div class="input-group mb-4 w-75 align-self-center">
                <input type="password" class="form-control" placeholder="Passwort" name="password">
            </div>
            <div class="input-group mb-1 w-75 align-self-center">
                <input type="password" class="form-control" placeholder="Passwort" name="password-confirm">
            </div>

            <div class="align-self-center mb-3 auth-error"><?php print htmlentities(isset($this->error) ? $this->error : "") ?></div>

            <button type="submit" class="btn btn-success w-75 align-self-center">REGISTRIEREN</button>
            <a class="nav-link align-self-center auth-link" href="/FamilyBrowser/de/Auth/Login">Haben Sie bereits ein Konto? Hier anmelden.</a>
        </form>
    </div>
</div>