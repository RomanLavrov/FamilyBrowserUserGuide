﻿<div style="margin: 0px 30px;" class="d-flex flex-row justify-content-center">
    <form id="orderForm" action="/FamilyBrowser/de/Order/Submit" method="post" enctype="multipart/form-data" class="w-75">
        <h3>BUILDing360 Familien-Bestellformular</h3>
        <br>
        <h4>Antragsteller</h4>
        <hr />
        <div class="form-row d-flex justify-content-center">

            <div class="form-row w-75">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="order-name">Vorname/Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-name" name="name">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">E-Mail Adresse</span>
                    </div>
                    <input type="email" id="order-mail" class="form-control" required placeholder="Ihre Antwort eingeben" aria-label="mail" aria-describedby="order-mail" name="mail">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Firma</span>
                    </div>
                    <input type="text" id="order-company" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="company" aria-describedby="order-company" name="company">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Projekt (für HHM Mitarbeiter)</span>
                    </div>
                    <input type="text" id="order-project" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="project" aria-describedby="order-project" name="project">
                </div>

            </div>

        </div>

        <br>
        <!--h4>Bestellungsart</h4>
        <hr />

        <div class="d-flex flex-column align-items-center">
            <div class="flex-box w-75">
                Express-Bestellung: ist kostenpflichtig (Ausnahme: HHM Mitarbeiter) und dauert maximal 3 tage. Die Familie wird per E-Mail als ein separates File geliefert.
                Die Familie wird eventuell später in den FamilyBrowser integriert, falls es nach der Meinung von BUILDing360-Team auch für andere Benutzer wertvoll ist.
            </div>
            <br>
            <div class="flex-box w-75">
                Standard-Bestellungen: ist kostenfrei. Die Familie wird innerhalb eines Monats erstellt und in den Family Browser integriert.
                Sie bekommen eine E-Mail, sobald die Familie im Family Browser drin ist.
            </div>
        </div>
        <br-->
        <h4>Wahlen Sie die Kategorie der Familie</h4>
        <hr />
        <div class="form-check">
            <input class="form-check-input" type="radio" name="systemSelection" id="systemElektro" value="Elektro" checked name="system">
            <label class="form-check-label" for="systemElektro">
                Elektro
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="systemSelection" id="systemHVAC" value="HLKS" name="system">
            <label class="form-check-label" for="systemHVAC">
                HLKS
            </label>
        </div>

        <div class="d-flex justify-content-center">
            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="inputGroupSelect01">Revit Kategorie</label>
                </div>
                <select class="custom-select" id="revitCategory" name="revitCategory">
                    <option selected>Wählen Sie...</option>
                    <?php foreach ($this->revitCategories as $category) : ?>
                        <option><?php print htmlentities($category) ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <br>
        <h4>Bestellung Elektrofamilie</h4>
        <hr />

        <div class="form-row justify-content-center">

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Beschreibung</span>
                </div>
                <input type="text" id="order-description" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="description" aria-describedby="order-description" name="description">
            </div>

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Datei hochladen ⇪</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file2d" aria-describedby="order-2dFile" accept=".png, .bmp, .jpeg" style="display:inline-block" name="file2d">
                    <label class="custom-file-label" for="file2d" data-browse="Suchen">Mögliches 2D Symbol einfügen...</label>
                </div>
            </div>

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Datei hochladen ⇪</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file3d" aria-describedby="order-3dFile"  accept=".png, .bmp, .jpeg" style="display:inline-block" name="file3d">
                    <label class="custom-file-label" for="file3d" data-browse="Suchen">Mögliches 3D Symbol einfügen...</label>
                </div>
            </div>

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Datei hochladen ⇪</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="fileSpecification" aria-describedby="order-fileSpecification"  accept=".pdf, .docx, .xlsx" style="display:inline-block" name="fileSpecification">
                    <label class="custom-file-label" for="fileSpecification" data-browse="Suchen">Datenblatt einfügen...</label>
                </div>
            </div>

            <!--div class="input-group mb-3">
                <input type="file" class="custom-file-input" id="file2d" aria-describedby="order-2dFile" style="display:inline-block" name="file2d">
                <label class="custom-file-label" for="file2d" data-browse="⇪ Datei hochladen">Mögliches 2D Symbol einfügen...</label>
            </div-->

            <!--div class="input-group mb-3">
                <input type="file" class="custom-file-input" id="file3d" aria-describedby="order-3dFile" style="display:inline-block" name="file3d">
                <label class="custom-file-label" for="file3d" data-browse="⇪  Datei hochladen">Mögliche 3D Ansicht einfügen...</label>
            </div-->

            <!--div class="input-group mb-3">
                <input type="file" class="custom-file-input" id="fileSpecification" aria-describedby="order-3dFile" style="display:inline-block" name="fileSpecification">
                <label class="custom-file-label" for="fileSpecification" data-browse="⇪  Datei hochladen">Datenblatt einfügen...</label>
            </div-->

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="order-mount">Installationsart</label>
                </div>
                <select class="custom-select" id="order-mount" name="mount">
                    <option selected>Nicht ausgewählt</option>
                    <option>Unterputzmontage</option>
                    <option>Aufputzmontage</option>
                </select>
            </div>

            <!--div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Installationsart</span>
                </div>
                <input type="text" id="order-mount" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-mount" name="mount">
            </div-->


            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="order-placement">Installationsort</label>
                </div>
                <select class="custom-select" id="order-placement" name="placement">
                    <option selected>Nicht ausgewählt</option>
                    <option>Decke</option>
                    <option>Wande</option>
                    <option>Boden</option>
                </select>
            </div>

            <!--div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Installationsort</span>
                </div>
                <input type="text" id="order-placement" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-placement" name="placement">
            </div-->

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="order-installationMedium">Installationsmedium</label>
                </div>
                <select class="custom-select" id="order-installationMedium" name="installationMedium">
                    <option selected>Nicht ausgewählt</option>
                    <?php foreach ($this->installationMedium as $medium) : ?>
                        <option><?php print htmlentities($medium)?></option>
                    <?php endforeach?>
                </select>
            </div>

            <!--div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Installationsmedium</span>
                </div>
                <input type="text" id="order-installationMedium" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-installationMedium" name="installationMedium">
            </div-->


            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Durchmesser</span>
                </div>
                <input type="text" id="order-diameter" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-diameter" name="diameter">
            </div>

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Höhe</span>
                </div>
                <input type="text" id="order-height" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-height" name="height">
            </div>

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Breite</span>
                </div>
                <input type="text" id="order-width" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-width" name="width">
            </div>

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">Tiefe</span>
                </div>
                <input type="text" id="order-depth" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-depth" name="depth">
            </div>



            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">eBKP-H</span>
                </div>
                <input type="text" id="order-eBKP" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-eBKP" name="eBKP">
            </div>

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">BKP</span>
                </div>
                <input type="text" id="order-BKP" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-BKP" name="BKP">
            </div>

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">OmniClass</span>
                </div>
                <input type="text" id="order-omniClass" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-omniClass" name="omniClass">
            </div>



            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">IFC Export As</span>
                </div>
                <input type="text" id="order-ifcExportAs" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-ifcExportAs" name="ifcExportAs">
            </div>

            <div class="input-group mb-3 w-75">
                <div class="input-group-prepend">
                    <span class="input-group-text">IFC Export Type</span>
                </div>
                <input type="text" id="order-ifcExportType" class="form-control" placeholder="Ihre Antwort eingeben" aria-label="name" aria-describedby="order-ifcExportType" name="ifcExportType">
            </div>
        </div>


        <hr>
        <button class="btn btn-success" type="submit" id="submitFamilyOrder">BESTELLUNG</button>
    </form>
</div>

<script src="/FamilyBrowser/js/familyOrder.js"></script>