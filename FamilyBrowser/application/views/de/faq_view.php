<div class="article-header">Verbindungs- und Firewall-Probleme</div>
<div class="article-content">
      <p>Wenn nach dem Start von Revit eine der folgenden Warnungen erscheint:</p>
      <img src="/FamilyBrowser/images/RFB_db_error_DE.PNG" alt="">
      <img src="/FamilyBrowser/images/RFB_inet_error_DE.PNG" alt="">
     <p></p>
      <p>überprüfen Sie Ihre Internetverbindung und die Firewall-Einstellungen.</p>
      <p>Wenn Sie in einem Firmennetzwerk arbeiten, bitten Sie den Administrator, die Verbindung über die Firewall zum folgenden Endpunkt zuzulassen:</p>
      <p>ec2-3-120-172-21.eu-central-1.compute.amazonaws.com:443</p>
</div>

<div class="article-header">System Anforderungen</div>
<div class="article-content">
      <ul>
            <li>Autodesk Revit 2017 oder höher</li>
            <li>Windows 10</li>
            <li>Windows 7 + .NET Framework 4.6.0</li>
      </ul>
</div>

<div class="article-header expanding-header" data-theme="template">BUILDing360 Revit-Vorlagedatei einrichten und verwenden</div>
<div class="article-content">
      <div class="expanding-content">
            <p>Einrichten:</p>
            <p>Wenn Sie mit einem neuen Projekt beginnen, können Sie die gewünschte Vorlage anhand ihres Namens aus einer Liste auswählen. Den genauen Speicherort der Vorlage brauchen sie nicht zu kennen.</p>
            <p>So fügen Sie der Projektvorlagenliste die BUILDing360 Projektvorlage hinzu</p>
            <p>
                  <ol class="faq-bold-list">
                        <li>Durch die Installation vom Revit Family Browser wurden die BUILDing360 Projektvorlagen bereits auf Ihren Computer gespeichert.</li>
                        <li>Klicken Sie auf Registerkarte Datei 🠚 Optionen.</li>
                        <li>
                              Klicken Sie auf die Registerkarte Verzeichnisse.
                              <img class="illustration img-faq" src="/FamilyBrowser/images/template_setup_de.png" alt="Project template">
                        </li>
                        <li>Fügen Sie wie folgt eine oder mehrere Vorlagen der Liste der Projektvorlagedateien hinzu:
                              <ol type="a">
                                    <li>
                                          Klicken Sie auf 
                                          <img class="img-icon" style="width:15px" src="/FamilyBrowser/images/revit-plus-icon.png">
                                          (Wert hinzufügen).
                                    </li>
                                    <li>
                                    <p>Navigieren Sie zur gewünschten Projektvorlagendatei, wählen Sie sie aus, und klicken Sie auf Öffnen.</p>
                                    <p>Die Vorlage wird der Liste hinzugefügt.</p>
                                    <p>Der Speicherort für die Projektvorlagendateien ist<br>C:\ProgramData\Autodesk\RVT 2019\Templates\Generic\</p>
                                    </li>
                              </ol>
                        </li>
                        <li>
                              Ordnen Sie die Liste neu, damit die Vorlagen in der gewünschten Reihenfolge angezeigt werden. 
                              Wählen Sie eine Zeile mit einer Vorlage aus, und verschieben Sie sie mithilfe von 
                              <img class="img-icon" style="width:15px"  src="/FamilyBrowser/images/revit-order-up-icon.png">
                                    (Zeilen nach oben verschieben) und 
                              <img class="img-icon" style="width:15px"  src="/FamilyBrowser/images/revit-order-down-icon.png">
                                    (Zeilen nach unten verschieben) an die gewünschte Position.
                              <p>
                                    <br><b>Tipp:</b> Setzen Sie die Vorlagen, die voraussichtlich am häufigsten verwendet werden, an den Anfang der Liste, damit 
                                    sie über das Fenster Zuletzt verwendete Dateien aufgerufen werden können.
                              </p>
                              <p>
                                    <b>Hinweis:</b> Der BUILDing360 Katalog funktioniert nur einwandfrei, wenn die dazugehörige Projektvorlage verwendet wird.
                              </p>
                        </li>
                  </ol>
            </p>
      </div>
      <div class="expanding-button" data-theme="template">Mehr</div>
</div>


<div class="article-header expanding-header" data-theme="ifc">IFC Export mit BUILDing360 Standard</div>
<div class="article-content">
      <div class="expanding-content">
            <ol class="faq-bold-list">
                  <li>Klicken Sie auf Registerkarte Datei 🠚 Exportieren 🠚 <img class="img-icon" src="/FamilyBrowser/images/ifc_icon.png" alt="IFC icon"/> (IFC).</li>
                  <li>Klicken Sie im Dialogfeld IFC exportieren unter Dateiname auf Durchsuchen, und navigieren Sie zum Zielordner für die IFC-Datei.</li>
                  <li>Geben Sie einen Namen für die IFC-Datei ein, und klicken Sie auf Speichern.</li>
                  <li>Wählen Sie für die aktuell ausgewählte Einrichtung die IFC-Einrichtung, die zum Erstellen der Datei verwendet werden soll.<br>
                  Wählen sie dafür BUILDing360_IFC2x3 oder BUILDing360_IFC4.
                        <div>
                              <img style="width: 100%" class="illustration img-faq" src="/FamilyBrowser/images/export_ifc_en.png" alt="Exporting IFC">
                        </div>
                  </li>
                  <li> Hinweis: Sollten die IFC-Einrichtungen nicht vorhanden sein, können Sie sich diese laden.
                        <ol type="a">
                              <li>Installieren Sie hierfür den aktuellen IFC Exporter von Autodesk.</li>
                              <li>
                                    <p>Klicken Sie anschliessend auf «Modify Setup…» und importieren den BUILDing360 Standard aus folgendem Verzeichnis:</p>
                                    <p>C:\ProgramData\Autodesk\RVT 2019\Templates\IFC export</p>
                                    <div>
                                          <img style="width: 100%" class="illustration img-faq" src="/FamilyBrowser/images/modify_setup_ifc_en.png" alt="Modifying setup of IFC">
                                    </div>
                              </li>
                              <li>
                                    Überprüfen Sie, ob unter Property Sets die Verknüpfung zur user defined property sets von BUILDing360 korrekt ist. 
                                    Diese liegt ebenfalls im selben Verzeichnis wie die Setup Datei.
                                    <div>
                                          <img style="width: 100%" class="illustration img-faq" src="/FamilyBrowser/images/modify_propertysets_ifc_en.png" alt="Property sets modifying of IFC">
                                    </div>
                              </li>
                        </ol>
                  </li>
            </ol>
      </div>
      <div class="expanding-button" data-theme="ifc">Mehr</div>
</div>

<div class="article-header" >Das Fenster vom FamilyBrowser ist nach dem Arbeiten mit zwei Monitoren verschwunden.</div>
<div class="article-content" style="margin-bottom: 1em">
      <p>Lösungsweg von der Autodesk Hilfe:</p>
      <p><a href="https://knowledge.autodesk.com/de/support/revit-products/troubleshooting/caas/CloudHelp/cloudhelp/2019/DEU/Revit-Troubleshooting/files/GUID-686EE716-3DEA-4D84-8DAA-BA09F538B349-htm.html">
                  <img src="/FamilyBrowser/images/autodesk_logo.png" alt="">
                  Fehlerbehebung: Projektbrowser anzeigen
            </a>
      </p>
</div>

<script src="/FamilyBrowser/js/faq_view.js"></script>