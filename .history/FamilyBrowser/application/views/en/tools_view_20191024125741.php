<div class="article-header">Tools</div>
<div class="article-content">
      <p>
            Starting from version 2.0.4 Family Browser will represent new tools that extend Revit opportunities and
            allow collaboration with other services. </p>
</div>

<div class="article-header">Location Point</div>
<div class="article-content">
      <img src="/FamilyBrowser/images/LocationPointButton_en.png" alt="LocationPoint" />
      <p>This tool works only with families version 2.0.0 and newer.</p>
      <p>Families have point required for transer its coordinates and placement in real buildings.</p>
      <p>Location point tool will insert in this point special family - GDP in accordance with element rotation
            <img style="height:32px" src="/FamilyBrowser/images/GDP.png" alt="">. This element is not connected to
            family type and if family was moved or rotated - please re-use this tool to move GDP points and remove
            unnecessary.
      </p>
</div>

<div class="article-header">Otto Fischer</div>
<div class="article-content">
      <img src="/FamilyBrowser/images/OttoFischerButton.png" alt="OttoFischer" />

      <p>This tool collects all electrical devices and equipment from project, wall, architectural room and level from
            attached architectural project and create data file for future processing in <a
                  href="https://www.ottofischer.ch/">OttoFisher</a> web-service.</p>

      <div class="row">
      <div style="font-weight:bold"class="col-md-1">
                 Step 1.
            </div>
            <div class="col-md-5">
                  <img src="/FamilyBrowser/images/OF_ProjectSelection.png" />
            </div>
            <div class="col-md-6">
                  <p>To use this tool you need <a href="https://www.ottofischer.ch/">OttoFisher</a>account.</p>
                  <p>The tool has to be started in an electrical project with devices and attached architectural project
                        with walls and rooms. </p>
                  <p>If there are multiple attached projects, please select one the that has necessary architectural data.</p>
            </div>
      </div>

      <div class="row">
      <div style="font-weight:bold"class="col-md-1">
                 Step 2.
            </div>
            <div class="col-md-5">
                  <img src="/FamilyBrowser/images/OF_ParametersSelection.png" />
            </div>
            <div class="col-md-6">
                  <p>OttoFischer web-service need to have 5 parameters, and you have to match up which parameter from architectural project describes Room.</p>
                  <p>This procedure has to bo done once for the project and all selected pairs will be saved.</p>
                  <p>If Area and Volume are default Revit parameters - they will be exported in the metric system, otherwise please control these values as the can be given in the imperial system</p>
            </div>
      </div>

      <div style="font-weight:bold"class="col-md-1">
                 Step 3.
            </div>
            <div class="row">
            <div class="col-md-5">
                  <img src="/FamilyBrowser/images/OF_MaterialSelection.png" />
            </div>
            <div class="col-md-6">
                  <p>OttoFischer web-service need to have 5 parameters, and you have to match up which parameter from architectural project describes Room.</p>
                  <p>This procedure has to bo done once for the project and all selected pairs will be saved.</p>
                  <p>If Area and Volume are default Revit parameters - they will be exported in the metric system, otherwise please control these values as the can be given in the imperial system</p>
            </div>
            
      </div>


</div>