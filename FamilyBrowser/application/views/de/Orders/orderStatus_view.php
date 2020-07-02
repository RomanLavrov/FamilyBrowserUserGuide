<table class="table table-hover table-bordered">
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
                    <div class="d-flex flex-row pb-1">
                        <div class="w-75">Installationsmedium:</div>
                        <div class="w-25"><?php print htmlentities($order['InstallationMedium']) ?></div>
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
                <td> <div class="d-flex flex-row">
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
                    </div></td>
               
                <td style="text-align:center"><?php print htmlentities($order['CreatedAt']) ?></td>
                <td style="text-align:center"><?php print htmlentities($order['NameDE']) ?></td>
            <tr>
            <?php endforeach ?>
    </tbody>
</table>