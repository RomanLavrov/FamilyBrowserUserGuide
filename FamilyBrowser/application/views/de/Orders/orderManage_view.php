<button class="btn btn-primary mb-2" id="btnExcelExport">Excel Exportieren</button>
<table class="table table-sm table-hover table-bordered">
    <colgroup>
        <col span="1" style="width: 5%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 20%;">
        <col span="1" style="width: 15%;">
        <col span="1" style="width: 15%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">

    </colgroup>

    <thead class="thead-dark">
        <tr>
            <th class="orderTableHeader">#</th>
            <th class="orderTableHeader">Kunde</th>
            <th class="orderTableHeader">ID Daten</th>
            <th class="orderTableHeader">Abmessungen</th>
            <th class="orderTableHeader">Angehängte Dateien</th>
            <th class="orderTableHeader">Reserve-ID</th>
            <th class="orderTableHeader">Satus bestellen</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($this->orders as $order) : ?>
            <tr class="order" data-orderid=<?php print htmlentities($order['idOrders']) ?>>
                <td style="text-align:center"><?php print htmlentities($order['idOrders']) ?></td>
                <td>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-25">Datum:</div>
                        <div class="p-2 w-75"><?php print htmlentities($order['CreatedAt']) ?></div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-25">Name:</div>
                        <div class="p-2 w-75"><?php print htmlentities($order['UserName']) ?></div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-25">E-mail:</div>
                        <div class="p-2 w-75"><?php print htmlentities($order['Mail']) ?></div>
                    </div>
                </td>

                <td>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-50">System:</div>
                        <div class="p-2 w-50"><?php print htmlentities($order['System'] == "" ? "-" : $order['System']) ?></div>
                    </div>

                    <div class="d-flex flex-row">
                        <div class="p-2 w-50">Revit Kategorie:</div>
                        <div class="p-2 w-50"><?php print htmlentities($order['RevitCategory'] == "" ? "-" : $order['RevitCategory']) ?></div>
                    </div>

                    <div class="d-flex flex-row">
                        <div class="p-2 w-50">Beschreibung:</div>
                        <div class="p-2 w-50"><?php print htmlentities($order['Description'] == "" ? "-" : $order['Description']) ?></div>
                    </div>

                    <div class="d-flex flex-row">
                        <div class="p-2 w-50">Installationsart:</div>
                        <div class="p-2 w-50"><?php print htmlentities($order['Mount'] == "" ? "-" : $order['Mount']) ?></div>
                    </div>

                    <div class="d-flex flex-row">
                        <div class="p-2 w-50">Installationsort:</div>
                        <div class="p-2 w-50">
                            <div><?php print htmlentities($order['Placement'] == "" ? "-" : $order['Placement']) ?></div>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div class="p-2 w-50">Installationmedium:</div>
                        <div class="p-2 w-50"><?php print htmlentities($order['InstallationMedium'] == "" ? "-" : $order['InstallationMedium']) ?></div>
                    </div>

                </td>

                <td>
                    <div>
                        <div class="d-flex flex-row">
                            <div class="p-2 w-50">Höhe:</div>
                            <div class="p-2 w-50"><?php print htmlentities($order['Height'] == "" ? "-" : $order['Height']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2 w-50">Breite:</div>
                            <div class="p-2 w-50"><?php print htmlentities($order['Width'] == "" ? "-" : $order['Width']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2 w-50">Tiefe:</div>
                            <div class="p-2 w-50"><?php print htmlentities($order['Depth'] == "" ? "-" : $order['Depth']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2 w-50">Durchmesser:</div>
                            <div class="p-2 w-50"><?php print htmlentities($order['Diameter'] == "" ? "-" : $order['Diameter']) ?></div>
                        </div>
                    </div>
                </td>
                <td style="text-align:center">
                    <div class="d-flex flex-row">
                        <div class="p-2 w-50 align-self-center">2D Symbol:</div>
                        <div class="p-2 w-50 align-self-center">
                            <img class="img-thumbnail rounded file-preview" src="<?php print htmlentities($order['File2d']) ?>" alt="No Image" data-link="<?php print htmlentities($order['File2d']) ?>">
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-50 align-self-center">3D Symbol:</div>
                        <div class="p-2 w-50 align-self-center">
                            <img class="img-thumbnail rounded file-preview" src="<?php print htmlentities($order['File3d']) ?>" alt="No Image" data-link="<?php print htmlentities($order['File3d']) ?>">
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-50 align-self-center">Spezifikation</div>
                        <div class="p-2 w-50 align-self-center">

                            <img class="img-thumbnail rounded file-preview" src="<?php if (strpos($order['FileSpecification'], '.pdf') > 0) {
                                                                                        print htmlentities('/FamilyBrowser/application/orderFilesUploads/logo-pdf.png');
                                                                                    } else {
                                                                                        print htmlentities($order['FileSpecification']);
                                                                                    } ?>" alt="No Image" data-link="<?php print htmlentities($order['FileSpecification']) ?>">
                        </div>
                    </div>
                </td>

                <!-- Reserved ID's -->
                <td class="align-items-center text-center" id="<?php print htmlentities('reservedNumbers' . $order['idOrders']) ?>">
                    <?php foreach ($order['ReservedNumbers'] as $reservedNumber) : ?>
                        <div><?php print htmlentities($reservedNumber) ?></div>
                    <?php endforeach ?>

                    <?php if (count($order['ReservedNumbers']) == 0) : ?>
                        <button class="btn btn-success w-100 btnReserveId" data-toggle="modal" data-target="#modalReserveId" data-order="<?php print htmlentities($order['idOrders']) ?>">Reservieren Typen Id</button>
                    <?php endif ?>
                </td>

                <!-- Order Status -->
                <td class="text-center">
                    <div>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" for="order-mount">Status der Bestellung</label>
                            </div>
                            <select class="custom-select orderStatusSelect" id="order-mount" name="mount" data-orderid=<?php print htmlentities($order['idOrders']) ?>>

                                <?php foreach ($this->statuses as $status) : ?>
                                    <option value="<?php print htmlentities($status['idOrderStatus']) ?>" <?php if ($status['idOrderStatus'] == $order['StatusId']) print htmlentities("selected") ?>>
                                        <?php print htmlentities($status['NameDE']) ?>
                                    </option>
                                <?php endforeach ?>

                            </select>
                        </div>
                    </div>

                    <form class="mb-1" id="<?php print htmlentities('familyForm' . $order['idOrders']) ?>">
                        <div class="input-group mt-3 mb-0">
                            <div class="custom-file">
                                <input type="text " name='orderId' value="<?php print htmlentities('fileFamily' . $order['idOrders']) ?>">
                                <input type="file" class="custom-file-input familyUpload" id="<?php print htmlentities('fileFamily' . $order['idOrders']) ?>" aria-describedby="response-family" accept=".rfa" style="display:inline-block" name="fileFamily">
                                <label class="custom-file-label text-left" for="<?php print htmlentities('fileFamily' . $order['idOrders']) ?>" data-browse="Suchen">Fertige familie...</label>
                            </div>
                        </div>
                        <button hidden class="btn btn-success w-100 mt-1 submitFamily" type="submit" id="<?php print htmlentities('btnSubmitfileFamily' . $order['idOrders']) ?>" data-form="<?php print htmlentities('familyForm' . $order['idOrders']) ?>" data-file="<?php print htmlentities('fileFamily' . $order['idOrders']) ?>" data-order="<?php print htmlentities($order['idOrders']) ?>" style="background:#274B59; border: 1px solid #274B59">Hohlade</button>
                    </form>

                    <a class="btn btn-success w-100 mt-0" <?php print htmlentities(isset($order['FamilyFile']) ?: 'hidden') ?> id="<?php print htmlentities("downloadLink" . $order['idOrders']) ?>" href="<?php print htmlentities('/readyFamilies/' . $order['FamilyFile']) ?>" download="<?php print htmlentities(substr($order['FamilyFile'], 15, strlen($order['FamilyFile']))) ?>">Herunterladen</a>

                    <button class="btn btn-danger w-100 deleteOrder mt-5" data-id=<?php print htmlentities($order['idOrders']) ?>>Auftrag löschen</button>
                </td>
            <tr>
            <?php endforeach ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modalReserveId" tabindex="-1" role="dialog" aria-labelledby="modalReserveId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Familie Typen Nummern Reserve</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3 d-flex flex-row">
                    <div class="input-group-prepend w-25">
                        <label class="input-group-text flex-fill" for="inputSystem">System</label>
                    </div>
                    <select class="custom-select" id="inputSystem">
                        <option selected>Wählen Sie...</option>
                        <option value="Electrics">Elektro</option>
                        <option value="Heating">Heizung</option>
                        <option value="Ventilation">Lüftung</option>
                        <option value="AirConditioning">Kälte</option>
                        <option value="Piping">Sanitär</option>
                    </select>
                </div>

                <div class="input-group mb-3 d-flex flex-row">
                    <div class="input-group-prepend w-25">
                        <label class="input-group-text flex-fill" for="inputVersion">Version</label>
                    </div>
                    <select class="custom-select" id="inputVersion">
                        <option selected>Wählen Sie...</option>
                        <option value="2.1.0">2.1.0</option>
                        <option value="2.0.0">2.0.0</option>
                        <option value="1.0.0">1.0.0</option>
                        <option value="0.9.0">0.9.0</option>
                    </select>
                </div>

                <div class="input-group mb-3 d-flex flex-row">
                    <div class="w-25">
                        <label class="input-group-text" for="inputSystem">Typen Anzahl</label>
                    </div>

                    <button class="btn btn-secondary" id="btnLessTypes">-</button>

                    <input class="form-control text-center" id="inputTypeNumber" type="text" value="5">

                    <button class="btn btn-secondary" id="btnMoreTypes">+</button>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="reserveTypeNumbers">Reservieren</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="//unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/g/filesaver.js"></script>
<script src="/FamilyBrowser/js/orderManagement.js"></script>