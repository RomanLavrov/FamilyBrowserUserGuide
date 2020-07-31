<h4 class="pb-2">Status der Bestellung</h4>

<table class="table table-hover table-bordered table-sm">
    <colgroup>
        <col span="1" style="width: 2%;">
        <col span="1" style="width: 5%;">
        <col span="1" style="width: 5%;">
        <col span="1" style="width: 15%;">
        <col span="1" style="width: 5%;">
        <col span="1" style="width: 5%;">
        <col span="1" style="width: 5%;">
        <col span="1" style="width: 15%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 10%;">
        <col span="1" style="width: 8%;">
        <col span="1" style="width: 5%;">
    </colgroup>

    <thead class="thead-dark">
        <tr>
            <th class="orderTableHeader">#</th>
            <th class="orderTableHeader">System</th>
            <th class="orderTableHeader">Revit Kategorie</th>
            <th class="orderTableHeader">Beschreibung</th>
            <th class="orderTableHeader">Optionen</th>
            <th class="orderTableHeader">Größe</th>
            <th class="orderTableHeader">Datein</th>
            <th class="orderTableHeader">Datum der Bestellung</th>
            <th class="orderTableHeader">Status</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($this->orders as $order) : ?>
            <tr>
                <td style="text-align:center"><?php print htmlentities($order['idOrders']) ?></td>
                <td style="text-align:center"><?php print htmlentities($order['System']) ?></td>
                <td style="text-align:center"><?php print htmlentities($order['RevitCategory']) ?></td>
                <td><?php print htmlentities($order['Description']) ?></td>
                <td>
                    <div class="d-flex flex-row pb-1">
                        <div class="w-50">Installationsart:</div>
                        <div class="w-50"> <?php print htmlentities($order['Mount']) ?></div>
                    </div>
                   
                    <div class="d-flex flex-row pb-1">
                        <div class="w-50">Installationsort:</div>
                        <div class="w-50"><?php print htmlentities($order['Placement']) ?></div>
                    </div>
                  
                    <div class="d-flex flex-column pb-1">
                        <div >Installationsmedium:</div>
                        <div ><?php print htmlentities($order['InstallationMedium']) ?></div>
                    </div>
                </td>

                <td>
                    <div>
                        <div class="d-flex flex-row">
                            <div class="p-1">Höhe:</div>
                            <div class="p-1"><?php print htmlentities($order['Height']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-1">Breite:</div>
                            <div class="p-1"><?php print htmlentities($order['Width']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-1">Tiefe:</div>
                            <div class="p-1"><?php print htmlentities($order['Depth']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-1">Durchmesser:</div>
                            <div class="p-1"><?php print htmlentities($order['Diameter']) ?></div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-50 align-self-center">2D Symbol:</div>
                        <div class="p-2 w-50 align-self-center">
                            <img class="img-thumbnail rounded file-preview" src="<?php print htmlentities($order['File2d']) ?>" alt="No Image" data-link="<?php print htmlentities($order['File2d']) ?>">
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2 w-50 align-self-center">3D Symbol:</div>
                        <div class="p-2 w-50 align-self-center">
                            <img class="img-thumbnail rounded file-preview" src="<?php print htmlentities($order['File3d']) ?>" alt="No Image" data-link="<?php print htmlentities( $order['File3d']) ?>">
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

                <td style="text-align:center"><?php print htmlentities($order['CreatedAt']) ?></td>
                <td style="text-align:center">
                    <span><?php print htmlentities($order['NameDE']) ?></span>
                    <?php if (isset($order['FamilyFile'])) : ?>
                        <a class="btn btn-success w-100 mt-2" id="<?php print htmlentities("downloadLink" . $order['idOrders']) ?>" href="<?php print htmlentities('/readyFamilies/' . $order['FamilyFile']) ?>" download="<?php print htmlentities(substr($order['FamilyFile'], 15, strlen($order['FamilyFile']))) ?>">Herunterladen</a>

                    <?php endif ?>
                </td>
            <tr>
            <?php endforeach ?>
    </tbody>
</table>