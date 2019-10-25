<div class="article-header">Toolbox</div>
<div class="article-content">
      <p>
      Ab der Version 2.0.4 wird der Family Browser neue Tools darstellen, die die Revit-Möglichkeiten erweitern und
            die Zusammenarbeit mit anderen Diensten ermöglichen. </p>
</div>

<div class="article-header">Absteckpunkt</div>
<div class="article-content">
      <img src="/FamilyBrowser/images/LocationPointButton_en.png" alt="LocationPoint" />
      <p>Dieses Tool funktioniert nur mit Familien ab Version 2.0.0.</p>
      <p>Familien haben einen Punkt, der für die Übertragung seiner Koordinaten und die Platzierung in realen Gebäuden benötigt wird.</p>
      <p>Das Standortpunktwerkzeug fügt in diesen Punkt eine spezielle Familie ein - GDP gemäß der Elementdrehung
            <img style="height:32px" src="/FamilyBrowser/images/GDP.png" alt="">. Dieses Element ist nicht verbunden mit
            Familientyp und ob die Familie verschoben oder gedreht wurde - bitte verwenden Sie dieses Tool erneut, um GDP-Punkte zu verschieben und zu entfernen
            unnötig.
      </p>
</div>

<div class="article-header">Otto Fischer</div>
<div class="article-content">
      <img src="/FamilyBrowser/images/OttoFischerButton.png" alt="OttoFischer" />

      <p>Dieses Tool sammelt alle elektrischen Geräte und Einrichtungen aus Projekt, Wand, Architekturraum und Ebene von
            angehängtes Architekturprojekt und erstellen Sie eine Datendatei für die zukünftige Verarbeitung in der <a
                  href="https://www.ottofischer.ch/">OttoFisher</a> Web-Service.</p>

      <iframe class="embeded-video" src="https://www.youtube.com/embed/Z98-TgcMif0" allowfullscreen="allowfullscreen"
            mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen"
            oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"> </iframe>
      <br />
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">
            Schritt 1.
            </div>
            <div class="col-md-5">
                  <img src="/FamilyBrowser/images/OF_ProjectSelection.png" />
            </div>
            <div class="col-md-6">
                  <p>To use this tool you need <a href="https://www.ottofischer.ch/">OttoFisher</a> account.</p>
                  <p>The tool has to be started in an electrical project with devices and attached architectural project
                        with walls and rooms. </p>
                  <p>If there are multiple attached projects, please select one the that has necessary architectural
                        data.</p>
            </div>
      </div>

      <div class="row">
            <div style="font-weight:bold" class="col-md-1">
            Schritt 2.
            </div>
            <div class="col-md-5" style="min-width:490px;">
                  <img src="/FamilyBrowser/images/OF_ParametersSelection.png" />
            </div>
            <div class="col-md-6">
                  <p>OttoFischer web-service need to have 5 parameters, and you have to match up which parameter from
                        architectural project describes Room.</p>
                  <p>This procedure has to bo done once for the project and all selected pairs will be saved.</p>
                  <p>If Area and Volume are default Revit parameters - they will be exported in the metric system,
                        otherwise please control these values as the can be given in the imperial system</p>
            </div>
      </div>
      <br />
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">
            Schritt 3.
            </div>
            <div class="col-md-5" style="min-width:490px;">
                  <img src="/FamilyBrowser/images/OF_MaterialSelection.png" />
            </div>
            <div class="col-md-6">
                  <p>OttoFischer web-service process 4 essential materials for walls regardless details. As
                        architectural project can contains more than 4 essential types, please math up project materials
                        with materials for export.</p>
                  <p>This procedure has to bo done once for the project and all selected pairs will be saved.</p>
            </div>
      </div>
      <br />
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">
            Schritt 4.
            </div>
            <div class="col-md-5" style="min-width:490px;">
                  <img src="/FamilyBrowser/images/OF_RoomSelection.png" />
            </div>
            <div class="col-md-6">
                  <p>Set rooms, devices from which have to be visible in OttoFisher web-service.</p>
                  <p>Rooms and levels will be obtained from the attached architectural project. You can pick whole level
                        or only several rooms from the building.</p>
            </div>
      </div>
      <br />
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">
            Schritt 5.
            </div>
            <div class="col-md-5" style="min-width:490px;">
                  <img src="/FamilyBrowser/images/OF_VersionSelection.png" />
            </div>
            <div class="col-md-6">
                  <p>It is necessary to set Project Name before export. If project name wasn't specified before you can
                        make it in this field. Project will be processed on OttoFisher web-service with this specified
                        name.</p>
                  <p>Version Info is a user field dedicated to store information about changes between project versions.
                  </p>
                  <p>On Submit data will be send to the web-service.</p>

            </div>
      </div>
      <br />
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">Projektcode</div>
            <div class="col-md-5"><img src="/FamilyBrowser/images/OF_PDFsample.png" alt=""> </div>
            <div class="col-md-6"><p> Ein PDF-Dokument mit eindeutigem Projektcode wird erstellt.
                        im lokalen Ordner Ihres Dokuments gespeichert und nach Beendigung des Exports automatisch geöffnet.</p></div>
      </div>
            <br/>
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">Daten</div>
            <div class="col-md-5"><a target="blank" href="/FamilyBrowser/images/OF_excelSample.png"><img style="max-width:480px" src="/FamilyBrowser/images/OF_excelSample.png" alt=""></a>
            </div>
            <div class="col-md-6">
                  <p>Alle exportierten Daten werden in Ihrem Documents-Ordner im Excel-Format zur Visualisierung und Darstellung gespeichert.
                        Überprüfung.</p>
            </div>
      </div>



</div>