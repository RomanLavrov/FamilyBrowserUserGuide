<?php

class Order_Model extends Model
{
    public function getOrders()
    {
        $orders = [];
        $sql = "SELECT *, Orders.Name as 'UserName' FROM Orders left join OrderStatus on Orders.StatusId = OrderStatus.idOrderStatus";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

                    $order = $row;
                    $order['ReservedNumbers'] = $this->getReservedNumbers($order['idOrders']);
                    /*
                    echo("<pre>");
                    print_r($order);
                    echo("</pre>");*/
                    $orders[] = $order;
                }
            }
        }

        $orders = array_reverse($orders);
        return $orders;
    }

    private function getReservedNumbers($orderId)
    {
        $reservedNumbers = [];
        $sql = "SELECT * FROM `ReserveTypeNumber` WHERE OrderId = '$orderId'";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

                    switch ($row['System']) {
                        case 'Electrics':
                            $prefix = "E";
                            break;

                        case 'Heating':
                            $prefix = "H";
                            break;

                        case 'Ventilation':
                            $prefix = "L";
                            break;

                        case 'AirConditioning':
                            $prefix = "K";
                            break;

                        case 'Piping':
                            $prefix = "S";
                            break;

                        default:
                            $prefix = "";
                            break;
                    }

                    $reservedNumbers[] =  $prefix . $row['ReservedNumber'];
                }
            }
        }
        return $reservedNumbers;
    }

    public function getOrdersForExcel()
    {
        $orders = [];
        $sql = "SELECT idOrders, Mail, Project, Orders.Company, System, RevitCategory, Description, Mount, Placement,
        InstallationMedium, Diameter, Height, Depth, Width, eBKP, BKP, OmniClass, IFCExportAs, File2d, File3d, FileSpecification, CreatedAt, idOrderStatus as StatusID, OrderStatus.Name as StatusEN, NameDE as StatusDE, Comment, OtherInfo
        FROM Orders 
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
        if (!isset($order['mail']) || $order['mail'] == "") return;

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

        $file2D = isset($order['file2d']) ? $order['file2d'] : 'logo.png';
        $file3D = isset($order['file3d']) ? $order['file3d'] : 'logo.png';
        $fileSpec = isset($order['fileSpecification']) ?  $order['fileSpecification'] : 'logo.png';

        $File2d = $order['file2dLink'] != '' ? $order['file2dLink'] : "https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/" . $file2D;
        $File3d = $order['file3dLink'] != '' ? $order['file3dLink'] : "https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/" . $file3D;
        $FileSpecification = $order['fileSpecificationLink'] != '' ? $order['fileSpecificationLink'] : "https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/" . $fileSpec;
        $CreatedAt = date('Y-m-d H:i:s');
        $Comment = $order['comment'];
        $OtherInfo = $order['otherInfo'];

        $sql = "INSERT INTO `Orders`
         (`Name`, `Mail`, `Company`, `Project`, `System`, `RevitCategory`, `Description`, 
         `Mount`, `Placement`, `InstallationMedium`, `Diameter`, `Height`, 
         `Depth`, `Width`, `eBKP`, `BKP`, `OmniClass`, `IFCexportAs`, 
         `IFCexportType`, `File2d`, `File3d`, `FileSpecification`, `CreatedAt`, `Comment`, `OtherInfo`) 
         
         VALUES ('$Name', '$Mail', '$Company', '$Project', '$System', 
         '$RevitCategory', '$Description', '$Mount', '$Placement', '$InstallationMedium', 
         '$Diameter', '$Height', '$Depth', '$Width', '$eBKP', '$BKP', 
         '$OmniClass', '$IFCexportAs', '$IFCexportType', '$File2d', 
         '$File3d', '$FileSpecification', '$CreatedAt', '$Comment', '$OtherInfo')";

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
        $sql = "UPDATE `Orders` SET `StatusId` = '$status' WHERE (`idOrders` = '$orderId')";
        $result = false;
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                $result = true;
            }
        }

        return $result;
    }

    public function setReadyFamily($idOrder, $fileName)
    {
        $sql = "UPDATE `Orders` SET `FamilyFile` = '$fileName' WHERE (`idOrders` = '$idOrder');";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                $result = true;
            }
        }

        return $result;
    }

    public function getLargestReservedNumber($system, $version)
    {
        $sql = "SELECT ReservedNumber FROM `ReserveTypeNumber` WHERE System = '$system' AND Version = '$version' Order by ReservedNumber desc limit 1";

        $largestLocal = '';
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $largestLocal = intval($row['ReservedNumber']);
                }
            }
        }

        return $largestLocal;
    }

    public function createNewReserve($parameters)
    {
        $system = $parameters['System'];
        $version = $parameters['Version'];
        $reservedNumber = $parameters['ReservedNumber'];
        $orderId = $parameters['OrderId'];

        $sql = "INSERT INTO `ReserveTypeNumber` (`System`, `Version`, `ReservedNumber`, `OrderId`) VALUES ('$system', '$version', '$reservedNumber', '$orderId')";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                $result = true;
            }
        }

        return $result;
    }
}
