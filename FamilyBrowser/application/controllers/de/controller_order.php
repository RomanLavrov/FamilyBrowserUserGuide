<?php
require_once("./application/models/model_orders.php");
//require_once("../vendor/autoload.php");

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;


class Controller_Order extends Controller
{
    private $categories = [
        "Allgemeines Modell",
        "Bepflanzung",
        "Bewehrung - linear",
        "Bewehrung - Matten",
        "Bewehrung - Stabstahl",
        "Bewehrung - Verlegebereich Fläche",
        "Bewehrung - Verlegebereich Matten",
        "Brandmelder",
        "Brückenkabel",
        "Brückentafeln",
        "Brückentragwerk",
        "Dächer",
        "Datengeräte",
        "Decken",
        "Dehnfugen",
        "Detailelemente",
        "Elektrische Ausstattung",
        "Elektroinstallationen",
        "Fachwerkbinder",
        "Fassadenelemente",
        "Fassadenpfosten",
        "Fenster",
        "Flexible Rohre",
        "Flexkanäle",
        "Fundamente",
        "Geländer",
        "Geschossdecken",
        "Grundstück",
        "HLS-Bauteile",
        "Kabel",
        "Kabeltrassen",
        "Kabeltrassenformteile",
        "Kommunikationsgeräte",
        "Körper",
        "Lager",
        "Leerrohr",
        "Leerrohrformteile",
        "Leuchten",
        "Lichtschalter",
        "Linien",
        "Luftdurchlässe",
        "Luftkanaldämmung außen",
        "Luftkanaldämmung innen",
        "Luftkanäle",
        "Luftkanalformteile",
        "Luftkanalplatzhalter",
        "Luftkanalzubehör",
        "MEP Fabrication Halterungen",
        "MEP Fabrication Kabelführungen",
        "MEP Fabrication Luftkanäle",
        "MEP Fabrication Rohre",
        "Möbel",
        "Möbelsysteme",
        "Notrufgeräte",
        "Parkplatz",
        "Pfeiler",
        "Rampen",
        "Rohrdämmung",
        "Rohre",
        "Rohrformteile",
        "Rohrplatzhalter",
        "Rohrzubehör",
        "Sanitärinstallationen",
        "Schachtöffnungen",
        "Schreinerarbeiten",
        "Schwingungsmanagement",
        "Sicherheitsgeräte",
        "Skelettbau",
        "Sonderausstattung",
        "Spannglieder",
        "Sprinkler",
        "Steifen",
        "Straßen",
        "Stützen",
        "Teile",
        "Telefongeräte",
        "Topografie",
        "Trägersysteme",
        "Tragwerksstützen",
        "Tragwerksverbindungen",
        "Treppen",
        "Türen",
        "Umgebung",
        "Verbindungsmittel",
        "Wände",
        "Widerlager",
        "Zonen"
    ];

    private $installationMedium = [
        '230V',
        '400V',
        'Allgemein',
        'Audio/Video',
        'Brandschutz',
        'EDV',
        'GAS',
        'GRA',
        'GSA',
        'Gebäudeautomation',
        'HLKS',
        'NOT',
        'Res',
        'RWA',
        'PVA',
        'Radio/TV',
        'Sicherheit',
        'Spitalruf-Anlage',
        'Telefon',
        'Uhr',
        'UKV',
        'ZUKO',
    ];

    private $installationMediumHVAC = [
        'Abwasser',        
        'Brandschutz Andere',
        'Brandschutz Nass',
        'Brandschutz Trocken',
        'Brandschutz Andere',
        'Belüftung',
        'Brauchwasser',
        'Druckluft',
        'Glyco',
        'Kaltwasser',
        'Kaltwasser enthärtet 0°fH',
        'Kaltwasser enthärtet 10°fH',
        'Kaltwasser enthärtet 12°fH',
        'Kaltwasser Netzdtuck',
        'Kaltwasser reduzierter Druck',      
        'Luftkanal Abluft',
        'Luftkanal Aussenluft',
        'Luftkanal Fortluft',
        'Luftkanal Zuluft',
        'Regenwasser',
        'Regenwasser Bestehend',
        'Regenwasser Pluvia',
        'Regenwasser Spengler',  
        'Rohrdämmung Armaflex',     
        'Rohrdämmung Mineralwolle',
        'Rohrdämmung PIR', 
        'Rohrdämmung Standard', 
        'Rücklauf',
        'Saugleitung',
        'Schmutzwasser',
        'Schmutzwasser Bestehend',
        'Schmutzwasser fetthaltig',
        'Sickerwasser',
        'Sprinkler Nass',
        'Sprinkler Trocken',
        'Sprinkler Vorgesteuert',
        'Solar',
        'Sonstige',
        'Trinkwasser',
        'Vorlauf',
        'Wascht',
        'Wascht Druck|tg',        
        'Warmwasser',
        'Zirkulation'
    ];

    public function action_index()
    {
        if (isset($_SESSION['userData'])) {
            $this->view->user = $_SESSION['userData'];
            $this->view->installationMedium = $this->installationMedium;
            $this->view->installationMediumHVAC = $this->installationMediumHVAC;
            $this->view->revitCategories = $this->categories;
            $this->view->generate('Orders/order_view.php', 'de/template_view.php');
        } else {
            header('Location: /FamilyBrowser/de/Auth/Login');
        }
    }

    public function action_Submit()
    {
        $order = $_POST;

        foreach ($_FILES  as $fileId => $file) {
            $order[$fileId] = "logo.png";
            if ($file['size'] != 0) {
                $order[$fileId] = $this->UploadFile($file);
            }
        }

        $this->model = new Order_Model;
        $orderId = $this->model->createOrder($order);
        if (isset($orderId)) {
            $this->mailOrder($_POST['mail'], $orderId);
            $this->mailManager($orderId, $order);
            $this->view->orders = $this->model->getOrders();
            $this->view->generate('Orders/orderStatus_view.php', 'de/template_view.php');
        }
    }

    public function action_Status()
    {
        $this->model = new Order_Model;
        $this->view->orders = $this->model->getOrders();
        $this->view->generate('Orders/orderStatus_view.php', 'de/template_view.php');
    }

    public function action_Manage()
    {
        if (isset($_SESSION['userData'])) {
            $this->model = new Order_Model;
            $this->view->statuses = $this->model->getStatuses();
            $this->view->orders = $this->model->getOrders();
            $this->view->generate('Orders/orderManage_view.php', 'de/template_view.php');
        } else {
            header('Location: /FamilyBrowser/de/Auth/Login');
        }
    }

    public function action_GetExportData()
    {
        $this->model = new Order_Model;
        echo json_encode($this->model->getOrdersForExcel());
    }

    public function action_DeleteOrder()
    {
        $orderId = $_POST['orderId'];
        $this->model = new Order_Model;

        print_r($this->model->deleteOrder($orderId));
    }

    public function action_SetStatus()
    {
        $orderId = $_POST['orderId'];
        $status = $_POST['status'];

        $this->model = new Order_Model;
        $this->model->setStatus($orderId, $status);
    }

    function UploadFile($file)
    {
        $targetDir = "./application/orderFilesUploads/";
        $uniqueFileName = uniqid(true) . basename($file['name']);
        $targetFile = $targetDir . $uniqueFileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if (
            $fileType == "jpg" ||
            $fileType == "png" ||
            $fileType == "jpeg" ||
            $fileType == "gif" ||
            $fileType == "pdf" ||
            $fileType == "doc" ||
            $fileType == "docx" ||
            $fileType == "xls" ||
            $fileType == "xlsx"
        ) {

            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                return ($uniqueFileName);
            } else {
                echo ('File not uploaded');
            }
        }
    }

    function mailOrder($mailAdress, $orderId)
    {
        ini_set('SMTP', "asmtp.mail.hostpoint.ch");
        ini_set('smtp_port', "465");
        //ini_set('sendmail_from', "no-reply@building360.ch");
        //ini_set('password', 'nUK2E253ZJA-WG7');

        ini_set('sendmail_from', "support@building360.ch");
        ini_set('password', 'BITImpactHub-2021');

        $to = $mailAdress; // 'johny@example.com, sally@example.com'; 
        $subject = 'Familie bestellen BUILDing360'; //Your order was successfully added to system

        $message = '
        <html>

        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        </head>
        
        <body>
            <div>
                <div>
                    <h3>Sehr geehrter Kunde</h3>
                </div>
        
                <br />
                <div>Vielen Dank, dass Sie den BUILDing360-Service nutzen, um Familien für Ihr Projekt zu bestellen</div>
                <div>Ihre Familienbestellung wurde erfolgreich in das System aufgenommen mit der Nummer</div>
                <div >
                    <br>
                    <h5>' . $orderId . '</h5>
                    <br>
                </div>
                <div>Den Fortschritt bei der Bearbeitung Ihrer Bestellung können Sie auf unserer Website überprüfen.</div>
                <br />
                <div >
                    <div>
                        <a  href="https://help.building360.ch/FamilyBrowser/en/Order/Submit">Bestellstatus prüfen</a> </div>
                    </div> <br />
                <div>Wenn die Arbeit an Ihrem Auftrag abgeschlossen ist, erhalten Sie eine E-Mail-Benachrichtigung</div>
                <br>
                <div>Mit freundlichen Grüßen,</div>
                <div>BUILDing360 Team</div>
            </div>
        </body>
        
        </html>';

        $headers = array(
            'From' => 'support@building360.ch',
            'Reply-To' => 'admin@building360.ch',
            'Content-type' => 'text/html',
            'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($to, $subject, $message, $headers);
    }

    function mailManager($orderId, $order)
    {
        $file2D = isset($order['file2dLink']) ? $order['file2dLink'] : "https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/" . $order['file2d'];
        $file3D = isset($order['file3dLink']) ? $order['file3dLink'] : "https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/" . $order['file3d'];
        $fileSpec = isset($order['fileSpecificationLink']) ? $order['fileSpecificationLink'] : "https://help.building360.ch/FamilyBrowser/application/orderFilesUploads/" . $order['fileSpecification'];

        ini_set('SMTP', "asmtp.mail.hostpoint.ch");
        ini_set('smtp_port', "465");
        //ini_set('sendmail_from', "no-reply@building360.ch");
        //ini_set('password', 'nUK2E253ZJA-WG7');

        ini_set('sendmail_from', "support@building360.ch");
        ini_set('password', 'BITImpactHub-2021');

        $to = 'roman.lavrov@hhm.ch, daniel.wollenmann@hhm.ch, galina.gordienko@hhm.ch, roger.horat@hhm.ch';
        $subject = 'Neue Familienordnung'; //Your order was successfully added to system

        $message = '
        <html>

        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <style>
                table{
                    margin:0, auto;
                    padding:10px;
                }
                tr{
                    border:1px solid black
                }
                
                th{
                    border:1px solid black;
                    padding:8px;
                }
                td{
                    padding:8px;
                    border:1px solid black;
                }

                </style>
        </head>
        
        <body>
            <h3>Sehr geehrter Manager<h3>
            <br>
            <div>
                Neue Familienbestellung mit Nummer ' . $orderId . ' wurde soeben aufgegeben. 
                Bitte überprüfen Sie die Bestellung und geben Sie dem Kunden eine Rückmeldung.
            </div>
                <table>
                    <thead>
                        <tr>
                            <th>System</th>
                            <th>Revit Kategorie</th>
                            <th>Beschreibung</th>
                            <th>Optionen</th>
                            <th>Größe</th>
                            <th>Datein</th>
                            <th>Datum der Bestellung</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>' . $order['systemSelection'] . '</td>
                        <td>' . $order['revitCategory'] . '</td>
                        <td>' . $order['description'] . '</td>
                        <td>
                            <div>Installationsart: ' . $order['mount'] . '</div>
                            <div>Installationsort: ' . $order['placement'] . '</div>
                            <div>Installationsmedium: ' . $order['installationMedium'] . '</div>
                        </td>
                        <td>
                            <div>Höhe: ' . $order['height'] . '</div>
                            <div>Breite: ' . $order['width'] . '</div>
                            <div>Tiefe: ' . $order['depth'] . '</div>
                            <div>Durchmesser: ' . $order['diameter'] . '</div>
                        </td>
                        <td>
                            <div><a href="' . $file2D . '">2D Symbol</a></div>
                            <div><a href="' . $file3D . '">3D Symbol</a></div>
                            <div><a href="' . $fileSpec . '">Spezifikation</a></div>
                        </td>
                        <td>' . date('d-m-Y') . '</td>
                    </tr>
                </tbody>
            </table>

            <div>
                <a  href="https://help.building360.ch/FamilyBrowser/en/Order/Submit">Bestellstatus prüfen</a></div>
            </div> 
             <br />
            <div>Mit freundlichen Grüßen,</div>
            <div>BUILDing360 Team</div>
        </body>
        </html>
        ';

        $headers = array(
            'From' => 'support@building360.ch',
            'Reply-To' => 'admin@building360.ch',
            'Content-type' => 'text/html',
            'X-Mailer' => 'PHP/' . phpversion(),
            'List-Unsubscribe' => '<mailto:admin@building360.ch.com?subject=unsubscribe>'
        );


        mail($to, $subject, $message, $headers);
    }

    function action_UploadFamily()
    {
        $orderId = $_POST['orderId'];
        $file = $_FILES['fileFamily'];

        $targetDir = "./application/readyFamilies/";
        $uniqueFileName = uniqid(true) . "-" . basename($file['name']);
        $targetFile = $targetDir . $uniqueFileName;

        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            $this->model = new Order_Model;
            $this->model->setReadyFamily($orderId, $uniqueFileName);

            echo json_encode(array('fileName' => $uniqueFileName));
        } else {
            echo ('File not uploaded');
        }
    }

    function action_GetLargestReservedNumber()
    {
        $this->model = new Order_Model;
        echo (json_encode($this->model->getLargestReservedNumber($_POST['system'], $_POST['version'])));
    }

    function action_CreateNewReserve()
    {
        $this->model = new Order_Model;
        $this->model->createNewReserve($_POST);
    }
}
