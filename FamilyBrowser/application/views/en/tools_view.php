<div class="article-header">Tools</div>
<div class="article-content">
      <p>
            Starting from version 2.0.4 Family Browser will represent new tools that extend Revit opportunities and
            allow collaboration with other services. </p>   
</div>

<div class="article-header">
      <img style="box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.55);" src="/FamilyBrowser/images/LocationPointButton_en.png"
            alt="LocationPoint" />
</div>
<div class="article-content">
      <iframe class="embeded-video" src="https://www.youtube.com/embed/M_5dVhfTwzQ" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen"   oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"> </iframe>
      <p>This tool works only with families version 2.0.0 and newer.</p>
      <p>Families have point required for transer its coordinates and placement in real buildings.</p>
      <p>Location point tool will insert in this point special family - GDP in accordance with element rotation
            <img style="height:32px" src="/FamilyBrowser/images/GDP.png" alt="">. This element is not connected to
            family type and if family was moved or rotated - please re-use this tool to move GDP points and remove
            unnecessary.
      </p>
</div>

<div class="article-header">
      <div style="box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.55); padding: 0.3em">
            <img src="/FamilyBrowser/images/Search-icon.png" alt="Search" /> Search
      </div>
      
</div>
<div class="article-content">
      <p>This tool represents a global search through all available items of Electrical or HVAC Catalogs. 
      The search is being executed within your chosen version in <a href="/FamilyBrowser/en/Settings">Settings</a>. Available from version 3.0.0 of Family Browser.</p>
      <p>How does it work? You write your search queue, which may contain one word or more and get the results filtered by your request “on fly”.</p>
      <p>The search engine is looking for elements by your request in such parameters: Family name, Type name, Description, Category, Product, Product number, E-Number, OmniClass number, BKP, eBKP_H. If there is an occurrence of at least one parameter the element will be in the resulting list. For convenience your request queue will be highlighted in bold font. Example is represented at the figure below.
      </p>
      <div class="d-flex justify-content-center modal-img-container">
            <img class="search-imgs" src="/FamilyBrowser/images/search1_en.jpg" alt="">
      </div>
      <p>Moving a cursor over the element leads to a hint, which will be a preview image of this element.</p>
      <div class="d-flex justify-content-center modal-img-container">
            <img class="search-imgs" src="/FamilyBrowser/images/search2_en.jpg" alt="">
      </div>
      <p>If you enter a search query and press "Enter" after they are displayed, all found elements will be loaded into the Revit FamilyBrowser <a href="/FamilyBrowser/en/Interface#main-panel">dockable panel</a>. Afterwards you will be able to manipulate these items in the usual way.</p>
      <div class="d-flex justify-content-center modal-img-container">
            <img class="search-imgs" src="/FamilyBrowser/images/Dockable_search_en.PNG" alt="">
      </div>
      <p>You can also insert any of the found elements directly into the project. To do this, you must select an item using the arrow keys and press "Enter" or double-click on found element with the left mouse button.</p>
      <div class="d-flex justify-content-center modal-img-container">
            <img class="search-imgs" src="/FamilyBrowser/images/search3_en.jpg" alt="">
      </div>
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
<div class="article-header"> <img style="box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.55);"
            src="/FamilyBrowser/images/OttoFischerButton.png" alt="OttoFischer" /></div>
<div class="article-content">


      <p>This tool collects all electrical devices and equipment from project, wall, architectural room and level from
            attached architectural project and create data file for future processing in <a
                  href="https://www.ottofischer.ch/">OttoFisher</a> web-service.</p>

      <iframe class="embeded-video" src="https://www.youtube.com/embed/Z98-TgcMif0" allowfullscreen="allowfullscreen"
            mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen"
            oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"> </iframe>
      <br />
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">
                  Step 1.
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
                  Step 2.
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
                  Step 3.
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
                  Step 4.
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
                  Step 5.
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
            <div style="font-weight:bold" class="col-md-1">Project Code</div>
            <div class="col-md-5" style="min-width:490px;"><img src="/FamilyBrowser/images/OF_PDFsample.png" alt="">
            </div>
            <div class="col-md-6">
                  <p> A PDF document with unique project code will be
                        stored in your Documents local folder and opened automatically after export ended.</p>
            </div>
      </div>
      <br />
      <div class="row">
            <div style="font-weight:bold" class="col-md-1">Data</div>
            <div class="col-md-5" style="min-width:490px;"><a target="blank"
                        href="/FamilyBrowser/images/OF_excelSample.png"><img style="max-width:480px"
                              src="/FamilyBrowser/images/OF_excelSample.png" alt=""></a>
            </div>
            <div class="col-md-6">
                  <p>All exported data will be saved in your Documents folder in excel format for visualisation and
                        checking.</p>
            </div>
      </div>

      -->

</div>
<script src="/FamilyBrowser/js/imageModal.js"></script>