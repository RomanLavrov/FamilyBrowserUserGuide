<table class="table table-hover">
    <thead class="thead-dark" >
        <tr>
            <th class="orderTableHeader">#</th>
            <th class="orderTableHeader">System</th>
            <th class="orderTableHeader">Beschreibung</th>
            <th class="orderTableHeader">Installationsart</th>
            <th class="orderTableHeader">Installationsort</th>
            <th class="orderTableHeader">Installationsmedium</th>
            <th class="orderTableHeader">Größe</th>
            <th class="orderTableHeader">2D Bild</th>
            <th class="orderTableHeader">3D Bild</th>
            <th class="orderTableHeader">Spezifikation</th>
            <th class="orderTableHeader">Datum der Bestellung</th>
            <th class="orderTableHeader">Satus bestellen</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($this->orders as $order) : ?>
            <tr>
                <td  style="text-align:center"><?php print htmlentities($order['idOrders']) ?></td>
                <td><?php print htmlentities($order['System']) ?></td>
                <td><?php print htmlentities($order['Description']) ?></td>
                <td style="text-align:center"><?php print htmlentities($order['Mount']) ?></td>
                <td  style="text-align:center"><?php print htmlentities($order['Placement']) ?></td>
                <td><?php print htmlentities($order['InstallationMedium']) ?></td>
                <td>
                    <div>
                        <div class="d-flex flex-row">
                            <div class="p-2">Höhe:</div>
                            <div class="p-2"><?php print htmlentities($order['Height']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2">Breite:</div>
                            <div class="p-2"><?php print htmlentities($order['Width']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2">Tiefe:</div>
                            <div class="p-2"><?php print htmlentities($order['Depth']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2">Durchmesser:</div>
                            <div class="p-2"><?php print htmlentities($order['Diameter']) ?></div>
                        </div>
                    </div>
                </td>
                <td><img class="img-thumbnail" src="<?php print htmlentities('/FamilyBrowser/application/orderFilesUploads/'.$order['File2d'])?>" alt="No Image"></th>
                <td><img class="img-thumbnail" src="<?php print htmlentities('/FamilyBrowser/application/orderFilesUploads/'.$order['File3d'])?>" alt="No Image"></th>
                <td><img class="img-thumbnail" src="<?php print htmlentities('/FamilyBrowser/application/orderFilesUploads/'.$order['FileSpecification'])?>" alt="No Image"></th>
                <td><?php print htmlentities($order['CreatedAt'])?></td>
                <td>Status</td>
            <tr>
            <?php endforeach ?>
    </tbody>
</table>