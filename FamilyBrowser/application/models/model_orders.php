<?php

class Order_Model extends Model
{

    public function getOrders()
    {
        $orders = [];
        $sql = "SELECT * FROM Orders left join OrderStatus on Orders.StatusId = OrderStatus.idOrderStatus";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $orders[] = $row;
                }
            }
        }

        $orders = array_reverse($orders);
        return $orders;
    }

    public function getOrdersForExcel()
    {
        $orders = [];
        $sql = "SELECT idOrders, Mail, Company, System, RevitCategory, Description, Mount, Placement,
        InstallationMedium, Diameter, Height, Depth, Width, eBKP, BKP, OmniClass, IFCExportAs, File2d, File3d, FileSpecification, CreatedAt, idOrderStatus as StatusID, OrderStatus.Name as StatusEN, NameDE as StatusDE
        FROM hhmeweme_orderFamilies.Orders 
       left join OrderStatus on Orders.StatusId = OrderStatus.idOrderStatus 
       Left join Users on Orders.UserId = Users.idUsers;";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $orders[] = $row;
                }
            }
        }

        $orders = array_reverse($orders);
        return $orders;
    }

    public function createOrder($order)
    {
        $Name = $order['name'];
        $Mail = $order['mail'];
        $Company = $order['company'];
        $Project = $order['project'];
        $System = $order['systemSelection'];
        $RevitCategory = $order['revitCategory'];
        $Description = $order['description'];
        $Mount = $order['mount'];
        $Placement = $order['placement'];
        $InstallationMedium = $order['installationMedium'];
        $Diameter = $order['diameter'];
        $Height = $order['height'];
        $Depth = $order['depth'];
        $Width = $order['width'];
        $eBKP = $order['eBKP'];
        $BKP = $order['BKP'];
        $OmniClass = $order['omniClass'];
        $IFCexportAs = $order['ifcExportAs'];
        $IFCexportType = $order['ifcExportType'];
        $File2d = $order['file2d'];
        $File3d = $order['file3d'];
        $FileSpecification = $order['fileSpecification'];
        $CreatedAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `hhmeweme_orderFamilies`.`Orders`
         (`Name`, `Mail`, `Company`, `Project`, `System`, `RevitCategory`, `Description`, 
         `Mount`, `Placement`, `InstallationMedium`, `Diameter`, `Height`, 
         `Depth`, `Width`, `eBKP`, `BKP`, `OmniClass`, `IFCexportAs`, 
         `IFCexportType`, `File2d`, `File3d`, `FileSpecification`, `CreatedAt`) 
         
         VALUES ('$Name', '$Mail', '$Company', '$Project', '$System', '$RevitCategory', '$Description', '$Mount', '$Placement', '$InstallationMedium', 
         '$Diameter', '$Height', '$Depth', '$Width', '$eBKP', '$BKP', '$OmniClass', '$IFCexportAs', '$IFCexportType', '$File2d', '$File3d', '$FileSpecification', '$CreatedAt')";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                return $this->pdo->lastInsertId();
            }
        }
    }

    public function getStatuses()
    {
        $statuses = [];
        $sql = "Select * from OrderStatus";

        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $statuses[] = $row;
                }
            }
        }

        return $statuses;
    }

    public function deleteOrder($orderId)
    {
        $sql = "Delete from Orders where idOrders = '$orderId' ";
        $result = false;
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                $result = true;
            }
        }

        return $result;
    }

    public function setStatus($orderId, $status)
    {
        $sql = "UPDATE `hhmeweme_orderFamilies`.`Orders` SET `StatusId` = '$status' WHERE (`idOrders` = '$orderId')";
        $result = false;
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                $result = true;
            }
        }

        return $result;
    }
}
