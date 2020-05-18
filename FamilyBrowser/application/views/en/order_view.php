<div style="margin: 0px 30px;">
    <h3>BUILDing360 Family order form</h3>

    <form id="orderForm" action = "/FamilyBrowser/de/Order/Submit" method="post" enctype="multipart/form-data">
        <br>
        <h4>Applicant</h4>
        <hr />

        <div class="form-row">

            <div class="form-group col-md-6">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="order-name">First name/Last Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-name">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">E-Mail Adress</span>
                    </div>
                    <input type="email" id="order-mail" class="form-control"  required placeholder="Enter your answer" aria-label="mail" aria-describedby="order-mail">
                </div>

            </div>

            <div class="form-group col-md-6">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Company</span>
                    </div>
                    <input type="text" id="order-company" class="form-control" placeholder="Enter your answer" aria-label="company" aria-describedby="order-company">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Project (for HHM employees)</span>
                    </div>
                    <input type="text" id="order-project" class="form-control" placeholder="Enter your answer" aria-label="project" aria-describedby="order-project">
                </div>

            </div>

        </div>

        <br>
        <h4>Order type</h4>
        <hr />
        <div>
            Express order: is subject to a charge (exception: HHm employees) and takes a maximum of 3 days. The family is delivered by e-mail as a separate file.
            The family may be integrated into the FamilyBrowser at a later date if the BUILDing360 team believes it is valuable for other users. </div>
        <br>
        <div>
            Standard orders: is free of charge. The family will be created within one month and integrated into the Family Browser.
            You will receive an e-mail as soon as the family is integrated in the Family Browser.
        </div>

        <br>
        <h4>Choose the category of the family</h4>
        <hr />
        <div class="form-check">
            <input class="form-check-input" type="radio" name="systemSelection" id="systemElektro" value="option1" checked>
            <label class="form-check-label" for="systemElektro">
                Electro
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="systemSelection" id="systemHVAC" value="option1">
            <label class="form-check-label" for="systemHVAC">
                HVAC
            </label>
        </div>

        <br>
        <h4>Order electrical family</h4>
        <hr />

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
            <input type="text" id="order-description" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-description">
        </div>

        <div class="form-row">

            <div class="form-group col-md-6">

                <div class="input-group mb-3">
                    <input type="file" class="custom-file-input file-upload-en" id="2dFileUpload"  aria-describedby="order-2dFile" style="display:inline-block">
                    <label class="custom-file-label" for="2dFileUpload" data-browse="⇪ File Upload">Upload possible 2D symbol...</label>
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="custom-file-input file-upload-en" id="3dFileUpload"  aria-describedby="order-3dFile" style="display:inline-block" lang="en">
                    <label class="custom-file-label" for="3dFileUpload" data-browse="⇪ File Upload">Upload possible 3D view...</label>
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="custom-file-input file-upload-en" id="specificationupload"  aria-describedby="order-3dFile" style="display:inline-block">
                    <label class="custom-file-label" for="specificationupload" data-browse="⇪ File Upload">Upload data sheet...</label>

                </div>

            </div>

            <div class="form-group col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Installation type</span>
                    </div>
                    <input type="text" id="order-mount" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-mount">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Installation location</span>
                    </div>
                    <input type="text" id="order-placement" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-placement">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Installation medium</span>
                    </div>
                    <input type="text" id="order-installationMedium" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-installationMedium">
                </div>

            </div>

        </div>

        <div class="form-row">

            <div class="form-group col-md-6">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Diameter</span>
                    </div>
                    <input type="text" id="order-diameter" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-diameter">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Height</span>
                    </div>
                    <input type="text" id="order-height" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-height">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Depth</span>
                    </div>
                    <input type="text" id="order-depth" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-depth">
                </div>

            </div>

            <div class="form-group col-md-6">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">eBKP-H</span>
                    </div>
                    <input type="text" id="order-eBKP" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-eBKP">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">BKP</span>
                    </div>
                    <input type="text" id="order-BKP" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-BKP">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">OmniClass</span>
                    </div>
                    <input type="text" id="order-omniClass" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-omniClass">
                </div>

            </div>

        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">IFC Export As</span>
            </div>
            <input type="text" id="order-ifcExportAs" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-ifcExportAs">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">IFC Export Type</span>
            </div>
            <input type="text" id="order-ifcExportType" class="form-control" placeholder="Enter your answer" aria-label="name" aria-describedby="order-ifcExportType">
        </div>


        <hr>
        <button class="btn btn-success" type="submit" id="submitFamilyOrder">ORDER</button>
    </form>
</div>

<script src="/FamilyBrowser/js/familyOrder.js"></script>