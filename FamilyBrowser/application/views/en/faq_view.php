<div class="article-header">Connection and Firewall issues</div>
<div class="article-content">
      <p>If, after Revit starts, one of thr following alert windos apper:</p>
      <img src="/FamilyBrowser/images/RFB_db_error_EN.PNG" alt="">
      <img src="/FamilyBrowser/images/RFB_inet_error_EN.PNG" alt="">
     <p></p>
      <p>check your Internet connection and Firewall settings.</p>
      <p>If you are working in a corporate network, please ask administrator to allow connection through the firewall to the following endpoint:</p>
      <p>ec2-3-120-172-21.eu-central-1.compute.amazonaws.com:443</p>
</div>

<div class="article-header">System requirements</div>
<div class="article-content">
      <ul>
            <li>Autodesk Revit 2017 or higher</li>
            <li>Windows 10</li>
            <li>Windows 7 + .NET Framework 4.6.0</li>
      </ul>
</div>

<div class="article-header expanding-header" data-theme="template">BUILDing360 Set up and use Revit template file</div>
<div class="article-content">
      <div class="expanding-content">
            <p>Setup:</p>
            <p>When you start a new project, you can select the desired template from a list by its name. You do not need to know the exact location of the template.</p>
            <p>To add the BUILDing360 project template to the project template list:</p>
            <p>
                  <ol class="faq-bold-list">
                        <li>By installing the Revit Family Browser, the BUILDing360 project templates have already been saved to your computer.</li>
                        <li>Click the File tab at 🠚 Options.</li>
                        <li>Click the Directories tab.
                              <img class="illustration img-faq" src="/FamilyBrowser/images/template_setup_de.png" alt="Project template">
                        </li>
                        <li>Add one or more templates to the list of project template files as follows:
                              <ol type="a">
                                    <li>
                                    Click on the  
                                          <img class="img-icon" style="width:15px" src="/FamilyBrowser/images/revit-plus-icon.png">
                                          (Add Value).
                                    </li>
                                    <li>
                                    <p>Navigate to and select the desired project template file and click Open.</p>
                                    <p>The template is added to the list.</p>
                                    <p>The storage location for the project template files is<br>C:\ProgramData\Autodesk\RVT 2019\Templates\Generic\</p>
                                    </li>
                              </ol>
                        </li>
                        <li>
                              Reorder the list to display the templates in the desired order. 
                              Select a row with a template and move it using 
                              <img class="img-icon" style="width:15px"  src="/FamilyBrowser/images/revit-order-up-icon.png">
                                    (Move rows up) and 
                              <img class="img-icon" style="width:15px"  src="/FamilyBrowser/images/revit-order-down-icon.png">
                                    (Move rows down) to the desired position.
                              <p>
                                    <br><b>Tip:</b> Place the templates that are likely to be used most frequently at the top of the list so that 
                                    they can be accessed from the Recently Used Files window.
                              </p>
                              <p>
                                    <b>Note:</b> The BUILDing360 catalog only works correctly if the corresponding project template is used.
                              </p>
                        </li>
                  </ol>
            </p>
      </div>
      <div class="expanding-button" data-theme="template">See More</div>
</div>


<div class="article-header expanding-header" data-theme="ifc">IFC export with BUILDing360 standard</div>
<div class="article-content">
      <div class="expanding-content">
            <ol class="faq-bold-list">
                  <li>Click the File tab at 🠚 Export 🠚 <img class="img-icon" src="/FamilyBrowser/images/ifc_icon.png" alt="IFC icon"/> (IFC).</li>
                  <li>In the Export IFC dialog box, under File name, click Browse and navigate to the destination folder for the IFC file.</li>
                  <li>Enter a name for the IFC file and click Save.</li>
                  <li>For the currently selected institution, select the IFC institution you want to use to create the file.<br>
                  Choose BUILDing360_IFC2x3 or BUILDing360_IFC4.
                        <div>
                              <img style="width: 100%" class="illustration img-faq" src="/FamilyBrowser/images/export_ifc_en.png" alt="Exporting IFC">
                        </div>
                  </li>
                  <li> Note: If the IFC devices are not available, you can download them.
                        <ol type="a">
                              <li>To do this, install the current Autodesk IFC Exporter.</li>
                              <li>
                                    <p>Then click on "Modify Setup..." and import the BUILDing360 standard from the following directory:</p>
                                    <p>C:\ProgramData\Autodesk\RVT 2019\Templates\IFC export</p>
                                    <div>
                                          <img style="width: 100%" class="illustration img-faq" src="/FamilyBrowser/images/modify_setup_ifc_en.png" alt="Modifying setup of IFC">
                                    </div>
                              </li>
                              <li>
                              Under Property Sets, check whether the link to the user defined property sets of BUILDing360 is correct. 
                                    This is also located in the same directory as the setup file.
                                    <div>
                                          <img style="width: 100%" class="illustration img-faq" src="/FamilyBrowser/images/modify_propertysets_ifc_en.png" alt="Property sets modifying of IFC">
                                    </div>
                              </li>
                        </ol>
                  </li>
            </ol>
      </div>
      <div class="expanding-button" data-theme="ifc">See More</div>
</div>

<div class="article-header">The FamilyBrowser window disappeared after working with two monitors.</div>
<div class="article-content" style="margin-bottom: 1em">
      <p>Solution from Autodesk Help:</p>
      <p><a href="https://knowledge.autodesk.com/de/support/revit-products/troubleshooting/caas/CloudHelp/cloudhelp/2019/DEU/Revit-Troubleshooting/files/GUID-686EE716-3DEA-4D84-8DAA-BA09F538B349-htm.html">
                  <img src="/FamilyBrowser/images/autodesk_logo.png" alt="">
                  Troubleshooting: Display Project Browser
            </a>
      </p>
</div>

<script src="/FamilyBrowser/js/faq_view.js"></script>