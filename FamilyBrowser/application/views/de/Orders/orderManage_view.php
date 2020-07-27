<button class="btn btn-primary mb-2" id="btnExcelExport">Excel Exportieren</button>
<table class="table table-sm table-hover table-bordered">
    <colgroup>
        <col span="1" style="width: 5%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 25%;">
        <col span="1" style="width: 15%;">
        <col span="1" style="width: 20%;">
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
            <th class="orderTableHeader">Datum der Bestellung</th>
            <th class="orderTableHeader">Satus bestellen</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($this->orders as $order) : ?>
            <tr class="order" data-orderid=<?php print htmlentities($order['idOrders']) ?>>
                <td style="text-align:center"><?php print htmlentities($order['idOrders']) ?></td>
                <td>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-25">Name:</div>
                        <div class="p-2 w-75"><?php print htmlentities($order['Name']) ?></div>
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
                            <img class="img-thumbnail rounded file-preview" src="<?php print htmlentities('/FamilyBrowser/application/orderFilesUploads/' . $order['File2d']) ?>" alt="No Image"   data-link = "<?php  print htmlentities('/FamilyBrowser/application/orderFilesUploads/' . $order['File2d'])?>" >
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-50 align-self-center">3D Symbol:</div>
                        <div class="p-2 w-50 align-self-center">
                            <img class="img-thumbnail rounded file-preview" 
                            src="<?php print htmlentities('/FamilyBrowser/application/orderFilesUploads/' . $order['File3d']) ?>" alt="No Image"  
                            data-link = "<?php  print htmlentities('/FamilyBrowser/application/orderFilesUploads/' . $order['File3d'])?>">
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-50 align-self-center">Spezifikation</div>
                        <div class="p-2 w-50 align-self-center">
                            <img class="img-thumbnail rounded file-preview" 
                            src="<?php if (strpos($order['FileSpecification'], '.pdf') > 0) {
                                                                            print htmlentities('/FamilyBrowser/application/orderFilesUploads/logo-pdf.png');
                                                                        } else {
                                                                            print htmlentities('/FamilyBrowser/application/orderFilesUploads/' . $order['FileSpecification']);
                                                                        } ?>" alt="No Image"
                            data-link = "<?php  print htmlentities('/FamilyBrowser/application/orderFilesUploads/' . $order['FileSpecification'])?>">
                        </div>
                    </div>
                </td>
                <td style="text-align:center"><?php print htmlentities($order['CreatedAt']) ?></td>
                <td style="text-align:center">
                    <div>
                        <div class="input-group mb-3">
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

                    <div>
                        <button class="btn btn-danger w-100 deleteOrder" data-id=<?php print htmlentities($order['idOrders']) ?>>Auftrag löschen</button>
                    </div>
                </td>
            <tr>
            <?php endforeach ?>
    </tbody>
</table>
<script type="text/javascript" src="//unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/g/filesaver.js"></script>
<script src="/FamilyBrowser/js/orderManagement.js"></script>