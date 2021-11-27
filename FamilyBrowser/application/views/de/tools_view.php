<div class="article-header">Toolbox</div>
<div class="article-content">
      <p>
            Ab der Version 2.0.4 hat der Family Browser neue Funktionen, die die Revit-Möglichkeiten
            erweitern und die Zusammenarbeit mit anderen Diensten ermöglichen.
      </p>
</div>

<div class="article-header">
      <img style="box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.55);" src="/FamilyBrowser/images/LocationPointButton_de.png" alt="LocationPoint" />
</div>
<div class="article-content">
      <iframe class="embeded-video" src="https://www.youtube.com/embed/M_5dVhfTwzQ" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"> </iframe>


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

<div class="article-header">
      <div style="box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.55); padding: 0.3em">
            <img src="/FamilyBrowser/images/Search-icon.png" alt="Durchsuchen" /> Durchsuchen
      </div>

</div>
<div class="article-content">
      <p>Dieses Tool dient als globale Suche durch alle verfügbaren Artikel in Elektro- oder HLKS-Katalogen. Die Suche wird innerhalb der gewählten Version ausgeführt, die Sie in den <a href="/FamilyBrowser/de/Settings">Einstellungen</a> ändern können.</p>
      <p>Wie funktioniert die Suche? Sie tippen Ihre Anfrage ein, die ein Wort oder mehrere Wörter enthalten kann, und erhalten sofort die Ergebnisse gefiltert nach Ihrer Anfrage.</p>
      <p>Die Suchmaschine sucht Elemente nach Ihrer Anfrage in solchen Parametern: Familienname, Typname, Beschreibung, Kategorie, Produkt, Produktnummer, E-Nummer, OmniClass-Nummer, BKP, eBKP_H. Wenn mindestens ein Parameter auftritt, wird das Element in der Ergebnisliste aufgeführt. Dabei wird Ihre Anfrage in Fettschrift hervorgehoben. Ein Beispiel ist in der Abbildung unten dargestellt.
      </p>
      <div class="d-flex justify-content-center modal-img-container">
            <img class="search-imgs" src="/FamilyBrowser/images/search1_de.jpg" alt="">
      </div>
      <p>Wenn Sie den Cursor über das Element bewegen, erscheint ein Hinweis mit einem Vorschaubild von diesem Element.</p>
      <div class="d-flex justify-content-center modal-img-container">
            <img class="search-imgs" src="/FamilyBrowser/images/search2_de.jpg" alt="">
      </div>
      <p>Wenn Sie eine Suchanfrage eingeben und nach der Anzeige die Eingabetaste drücken, werden alle gefundenen Elemente ins <a href="/FamilyBrowser/de/Interface#main-panel">Fenster von Revit Family Browser</a> geladen. Anschließend können Sie diese Elemente in der gewohnten Reihenfolge bearbeiten.</p>
      <div class="d-flex justify-content-center modal-img-container">
            <img class="search-imgs" src="/FamilyBrowser/images/Dockable_search_de.PNG" alt="">
      </div>
      <p>Sie können auch ein gefundenes Element direkt in das Projekt einfügen. Dazu müssen Sie dieses Element anwählen und «Enter» drücken; oder mit der linken Maustaste auf das gefundene Element doppelklicken.</p>
      <div class="d-flex justify-content-center modal-img-container">
            <img class="search-imgs" src="/FamilyBrowser/images/search3_de.jpg" alt="">
      </div>
</div>

<div class="article-header">Elektro Schalterkonfigurator</div>
<div class="article-content">
      <p>
            Ab Version 2021.1 ist der Elektro Schalterkonfigurator im FamilyBrowser (Tab Elektro) verfügbar. Er ermöglicht die einfache Zusammenstellung von Schalterkombinationen mittels Drag & Drop mit automatischer Platzierung relativ zur ausgewählten Tür dank Konfigurationsmöglichkeiten für Türbandung, Abstand zur Tür und Abstand von der Geschossebene.
      </p>
</div>

<div class="article-header-small">Aufbau</div>
<div class="article-content">
      <p>
            Der Elektro Schalterkonfigurator ist folgendermassen aufgebaut:
      </p>
      <div class="d-flex justify-content-center modal-img-container">
            <img class="search-imgs" src="/FamilyBrowser/images/Schalterkonfigurator mit Hager DE.png" alt="">
      </div>
      <p>
            In folgendem Video wird die Anwendung beispielhaft gezeigt:
      </p>
      <iframe class="embeded-video" src="https://www.youtube.com/embed/xV73T2km7jA?start=60" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="article-header-small">Funktionen</div>
<div class="article-header-micro">Bauteilauswahl und Filterung</div>
<div class="article-content">
      <p>
            Im rechten Bereich des Schalterkonfigurators sind alle Bauteile aufgelistet, die in der Kombination verwendet werden können. Beim Klick auf ein Kategoriesymbol wird die Auswahl gefiltert, sodass nur noch Objekte der ausgewählten Kategorie angezeigt werden. </p>
</div>

<div class="article-header-micro">Kombination zusammenstellen</div>
<div class="article-content">
      <p>
            Bauteile werden mittels Drag- & Drop ins gewünschte Schalterfeld gezogen. Beim Rechtsklick auf ein platziertes Bauteil öffnet sich ein Kontextmenü mit der Option «Löschen»; dadurch wird das Objekt aus der Kombination entfernt.
      </p>
</div>

<div class="article-header-micro">Türbandung & -abstand festlegen</div>
<div class="article-content">
      <p>
            Die Türbandung kann mit den Buttons oben entweder auf «links» oder «rechts» festgelegt werden.
            Das Eingabefeld auf der linken oberen Seite ermöglicht das Festlegen eines Abstands in mm zwischen der Tür und der Kombination. Beim Einfügen wird die Kombination automatisch passend zur Tür platziert. Für eine freie Platzierung im Plan kann 0 als Abstand eingetragen werden.
      </p>
</div>

<div class="article-header-micro">Abstände zur Ebene definieren</div>
<div class="article-content">
      <p>
            Die Eingabefelder auf der linken Seite definieren jeweils den Abstand in mm der entsprechenden Kombination von der Geschossebene aus. Die gelbe Linie des Eingabefelds zielt jeweils auf den Mittelpunkt der Kombination (bei Kombinationen mit Höhe 1) bzw. den Mittelpunkt der obersten Linie der Kombination (bei Kombinationen mit Höhen grösser als 1), von wo aus der Abstand gemessen wird.
      </p>
</div>

<div class="article-header-micro">Kombinationsgrösse verändern</div>
<div class="article-content">
      <p>
            Mit den Plus- und Minusbuttons neben den Kombinationen kann die Grösse (Höhe und Breite) der Kombination festgelegt werden.
      </p>
</div>

<div class="article-header-micro">Kombinationen verwalten</div>
<div class="article-content">
      <p>Einmal erstellte Kombinationen können mit dem Schalterkonfigurator gespeichert werden.</p>
      <p>Beim Klick auf das Ordner-Symbol kann der Speicherort festgelegt werden. Dies kann auch ein Netzwerklaufwerk sein. Um gespeicherte Kombinationen von anderen Nutzern zu verwenden, können die Dateien einfach im als Speicherort definierten Ordner abgelegt werden.</p>
      <p>Mit einem Klick auf das Disketten-Symbol können Kombinationen unter einer bestimmten Bezeichnung gespeichert werden.</p>
      <p>Alle gespeicherten Kombinationen sind im Dropdown links neben dem Disketten-Symbol aufgelistet. Beim Klick auf die gewünschte Kombination wird sie in die aktuelle Auswahl übernommen. </p>
      <p>Um eine Kombination zu bereinigen, kann unten das Wischmopp-Symbol betätigt werden.</p>
      <p>Mit dem Mülleimer-Symbol kann eine gespeicherte Kombination gelöscht werden. Achtung: Die Kombination wird sofort gelöscht, es gibt keine Sicherheitsfrage.</p>
</div>

<div class="article-header-micro">Interaktionsmöglichkeiten</div>
<div class="article-content">
      <p>
            Zum Einfügen der Kombination in den Plan kann rechts unten der «Einfügen»-Button geklickt werden. Mit einem Klick auf den Türrahmen der gewünschten Tür wird die Kombination automatisch mit den zuvor definierten Abständen zu Ebene und Tür sowie auf der richtigen Seite der Tür eingefügt. </p>
      <p>
            Mit einem Klick auf den «Schliessen»-Button kann das Fenster ohne Platzierung einer Schalterkombination verlassen werden. Beim nächsten Öffnen des Konfigurators wird jeweils die zuletzt verwendete Kombination übernommen. </p>
</div>

<div class="article-header-micro">Fabrikatauswahl</div>
<div class="article-content">
      <p>
            Seit der Version 2022.1 kann mit der Hager Produktlinie für Schalter/Steckdosen geplant werden.
            Beim ersten Aufstarten des Schalterkonfigurators sind die beiden Auswahlfelder für «Fabrikat» und «Farbe» gesperrt.
            Mit einem Klick auf das Barcode-Icon kann die herstellerspezifische Auswahl aktiviert und auch wieder deaktiviert werden.
            Sobald eine Auswahl für Fabrikat und Farbe getroffen wurde, wird im Kombinationsbereich mit einem «Verbot»-Icon dargestellt,
            wenn ein zuvor geplantes Bauteil nicht in der ausgewählten Fabrikat-/Farbkombination verfügbar ist.
      </p>
      <iframe class="embeded-video" src="https://www.youtube.com/embed/Usu82NjcKPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>


<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                  <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Close</span>
                        </button>
                        <img src="" class="imagepreview" style="width:100%">
                  </div>
            </div>
      </div>
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
      -->
</div>
<script src="/FamilyBrowser/js/imageModal.js"></script>