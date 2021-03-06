<div class="article-header">Toolbox</div>
<div class="article-content">
      <p>
            Ab der Version 2.0.4 hat der Family Browser neue Funktionen, die die Revit-Möglichkeiten 
            erweitern und die Zusammenarbeit mit anderen Diensten ermöglichen.
      </p>
</div>

<div class="article-header">
      <img style="box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.55);"src="/FamilyBrowser/images/LocationPointButton_de.png" alt="LocationPoint" /></div>
<div class="article-content">
      
      <p>
            Diese Funktion arbeitet nur mit Familien ab Version 2.0.0.
      </p>
      <p>
            Die Familien haben einen Absteckpunkt, der für die Übertragung der Koordinaten und die Platzierung in realen Gebäuden benötigt wird.
      </p>
      <p>Das Standortpunktwerkzeug fügt in diesen Punkt eine spezielle Familie ein - GDP gemäß der Elementdrehung
            <img style="height:32px" src="/FamilyBrowser/images/GDP.png" alt="">. Dieses Element ist nicht verbunden mit
            Familientyp und ob die Familie verschoben oder gedreht wurde - bitte verwenden Sie dieses Tool erneut, um
            GDP-Punkte zu verschieben und zu entfernen
            unnötig.
      </p>
</div>
<!--
<div class="article-header">
      <img style="box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.55);" src="/FamilyBrowser/images/OttoFischerButton.png" alt="OttoFischer" />
</div>
<div class="article-content">

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
                  <p>Um dieses Tool nutzen zu können, benötigen Sie <a href="https://www.ottofischer.ch/">OttoFisher</a> Konto haben.</p>
                  <p>Das Tool muss in einem Elektroprojekt mit Geräten und angeschlossenem Architekturprojekt gestartet werden.
                        mit Wänden und Räumen. </p>
                  <p>Wenn es mehrere angehängte Projekte gibt, wählen Sie bitte eines der Projekte aus, das die erforderliche Architektur hat.
                        Daten.</p>
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
                  <p>Der OttoFischer Webservice muss 5 Parameter haben, und Sie müssen herausfinden, welcher Parameter
                        von
                        Architekturprojekt beschreibt Raum.</p>
                  <p>Dieser Vorgang muss einmalig für das Projekt durchgeführt werden und alle ausgewählten Paare werden
                        gespeichert.</p>
                  <p>Wenn Fläche und Volumen standardmäßig Revit-Parameter sind - werden sie in das metrische System
                        exportiert,
                        ansonsten kontrollieren Sie bitte diese Werte, da sie im imperialen System angegeben werden
                        können.</p>
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
                  <p>OttoFischer Webservice verarbeitet 4 wesentliche Materialien für Wände ohne Rücksicht auf Details.
                        Als
                        Architekturprojekt kann mehr als 4 wesentliche Typen enthalten, bitte rechnen Sie
                        Projektmaterialien zusammen.
                        mit Materialien für den Export.</p>
                  <p>Dieser Vorgang muss einmalig für das Projekt durchgeführt werden und alle ausgewählten Paare werden
                        gespeichert.</p>
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
                  <p>Räume einrichten, von denen aus die Geräte im OttoFisher Webservice sichtbar sein müssen.</p>
                  <p>Die Räume und Ebenen werden aus dem beigefügten Architekturprojekt bezogen. Du kannst die ganze
                        Stufe wählen.
                        oder nur mehrere Räume vom Gebäude entfernt.</p>
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
                  <p>Es ist notwendig, den Projektnamen vor dem Export festzulegen. Wenn der Projektname nicht angegeben
                        wurde, bevor Sie die Möglichkeit haben.
                        es in diesem Bereich schaffen. Das Projekt wird auf dem OttoFisher Webservice mit diesem
                        spezifizierten Namen bearbeitet.
                        Name.</p>
                  <p>Versionsinfo ist ein Benutzerfeld, das Informationen über Änderungen zwischen Projektversionen
                        speichert.
                  </p>
                  <p>Beim Absenden werden die Daten an den Webservice gesendet.</p>

            </div>
      </div>
      <br />
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">Projektcode</div>
            <div class="col-md-5" style="min-width:490px;"><img src="/FamilyBrowser/images/OF_PDFsample.png" alt=""> </div>
            <div class="col-md-6">
                  <p> Ein PDF-Dokument mit eindeutigem Projektcode wird erstellt.
                        im lokalen Ordner Ihres Dokuments gespeichert und nach Beendigung des Exports automatisch
                        geöffnet.</p>
            </div>
      </div>
      <br />
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">Daten</div>
            <div class="col-md-5" style="min-width:490px;"><a target="blank" href="/FamilyBrowser/images/OF_excelSample.png"><img
                              style="max-width:480px" src="/FamilyBrowser/images/OF_excelSample.png" alt=""></a>
            </div>
            <div class="col-md-6">
                  <p>Alle exportierten Daten werden in Ihrem Documents-Ordner im Excel-Format zur Visualisierung und
                        Darstellung gespeichert.
                        Überprüfung.</p>
            </div>
      </div>



</div>