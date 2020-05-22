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
            <th class="orderTableHeader">Revit Category</th>
            <th class="orderTableHeader">Description</th>
            <th class="orderTableHeader">Mount</th>
            <th class="orderTableHeader">Placement</th>
            <th class="orderTableHeader">Installation Medium</th>
            <th class="orderTableHeader">Size</th>
            <th class="orderTableHeader">2D Image</th>
            <th class="orderTableHeader">3d Image</th>
            <th class="orderTableHeader">Specification</th>
            <th class="orderTableHeader">Order Date</th>
            <th class="orderTableHeader">Order status</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($this->orders as $order) : ?>
            <tr style="text-align:center">
                <td><?php print htmlentities($order['idOrders']) ?></td>
                <td><?php print htmlentities($order['System']) ?></td>
                <td><?php print htmlentities($order['RevitCategory']) ?></td>
                <td style="text-align:left"><?php print htmlentities($order['Description']) ?></td>
                <td><?php print htmlentities($order['Mount']) ?></td>
                <td><?php print htmlentities($order['Placement']) ?></td>
                <td><?php print htmlentities($order['InstallationMedium']) ?></td>
                <td>
                    <div>
                        <div class="d-flex flex-row">
                            <div class="p-2">Height:</div>
                            <div class="p-2"><?php print htmlentities($order['Height']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2">Width:</div>
                            <div class="p-2"><?php print htmlentities($order['Width']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2">Depth:</div>
                            <div class="p-2"><?php print htmlentities($order['Depth']) ?></div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2">Diameter:</div>
                            <div class="p-2"><?php print htmlentities($order['Diameter']) ?></div>
                        </div>
                    </div>
                </td>
                <td><img class="img-thumbnail" src="<?php print htmlentities('/FamilyBrowser/application/orderFilesUploads/' . $order['File2d']) ?>" alt="No Image"></th>
                <td><img class="img-thumbnail" src="<?php print htmlentities('/FamilyBrowser/application/orderFilesUploads/' . $order['File3d']) ?>" alt="No Image"></th>
                <td><img class="img-thumbnail" src="<?php print htmlentities('/FamilyBrowser/application/orderFilesUploads/' . $order['FileSpecification']) ?>" alt="No Image"></th>
                <td><?php print htmlentities($order['CreatedAt']) ?></td>
                <td>Status</td>
            <tr>
            <?php endforeach ?>
    </tbody>
</table>