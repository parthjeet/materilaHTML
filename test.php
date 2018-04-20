<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>404 Page | Material</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meterial Icon CSS -->
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material.min.css">
    <!-- Ripples CSS -->
    <link rel="stylesheet" href="assets/css/ripples.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    
    <!-- Color CSS Styles  -->
      <link rel="stylesheet" type="text/css" href="assets/css/colors/green.css" media="screen" />

  </head>
  <body>

      <!-- Header Start -->
      <?php include "navBar.php"; ?>
      <!-- Page Titile Area End -->
<div class="section-padding"></div>
      <!-- error section -->
      <section class="Material-error-section section-padding">
          <div class="container">
<!--              <div class="form-group">-->
<!--                  <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" autocomplete="off" />-->
<!--                  <div class="btn-group">-->
<!--                      <label for="fancy-checkbox-success" class="btn btn-success">-->
<!--                          <span class="glyphicon glyphicon-ok"></span>-->
<!--                          <span> </span>-->
<!--                      </label>-->
<!--                      <label for="fancy-checkbox-success" class="btn btn-default active">-->
<!--                          Primary Checkbox-->
<!--                      </label>-->
<!--                  </div>-->
<!--              </div>-->
<!--              <form onsubmit="return doSomething();" class="my-form">-->
<!--                  <input class="messageCheckbox" type="checkbox" form="form1">-->
<!--                  <input class="messageCheckbox" type="checkbox">-->
<!--                  <input type="submit" value="Submit">-->
<!--              </form>-->
<!--              <p id="form-value">THIS IS VALUE</p>-->
              <!-- Button trigger modal -->
              <form onsubmit="return doSomething();" id="form1"></form>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Launch demo modal
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" role="dialog">
                  <div class="modal-dialog modal-lg">

                      <!-- Modal content-->
                      <div class="modal-content">
                          <div class="modal-header ">

                              <h4 class="modal-title" id="form-value">Check the boxes to know your score.</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body" style="height:70vh;overflow:scroll;">
                                <p class="h5 text-center font-weight-bold"><u>ENVIRONMENTAL SUSTAINABILITY</u></p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td rowspan="17" class="text-center align-middle">
                                            <p>Site Selection &amp; planning</p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <p><em>Construction &amp; design</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the planning permissions &amp; development strategies encourage or require specific issues to be addressed?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="text-center align-middle">
                                            <p><em>Construction</em></p>
                                        </td>
                                        <td>
                                            <p><em>Is pollution, including that of noise, minimized during the construction process?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Are noise reduction measures adopted if the development is close to main rods, airports or railways?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>If measures are taken to minimize light pollution?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Are maintenance and servicing activities carried out in a manner that does not cause pollution?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Are Sustainable resources such as timber and recycled materials used?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Are materials for development procurement procured from local sources, to minimize pollution from transportation?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3" class="text-center align-middle">
                                            <p><em>Construction on-site recycling and Composting</em></p>
                                        </td>
                                        <td>
                                            <p><em>Are recycled construction materials reused?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Area correctly designed and sited recycling facilities installed?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Does</em><em> building development provide composting facilities that would provide a valuable resource for growing healthy foods?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Life cycle durability</em></p>
                                        </td>
                                        <td>
                                            <p><em>Is the building designed with the life cycle principles in mind?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Pollution &amp; contamination</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the management tend to restrict activities that pollute the environment?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="text-center align-middle">
                                            <p><em>Sewerage</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does all the development adhere to relevant legislation and best practices for sewerage treatment?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Are composting toilets used?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Recycling and waste minimization</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the proposed building development respond to the established waste hierarchy-reduce, reuse, recycle?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="text-center align-middle">
                                            <p><em>Land</em></p>
                                        </td>
                                        <td>
                                            <p><em>Are remedial measures taken if the building is made on contaminated land?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Is the contaminated land removed for safe disposal before construction?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" class="text-center align-middle">
                                            <p>Energy Conservation</p>
                                        </td>
                                        <td>
                                            <p><em>Energy Efficiency</em></p>
                                        </td>
                                        <td>
                                            <p><em>Do buildings and development promote and maximize energy saving and carbon reduction measures?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Thermal Mass and</em></p>
                                            <p><em>Insulation</em></p>
                                        </td>
                                        <td>
                                            <p><em>Are heating and cooling management operationalized?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Efficient glazing</em></p>
                                        </td>
                                        <td>
                                            <p><em>Are heating, cooling, and noise management operationalized?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Renewable energy</em></p>
                                        </td>
                                        <td>
                                            <p><em>Are on-site or district renewable energy equipment incorporated?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="text-center align-middle">
                                            <p><em>Lighting</em></p>
                                        </td>
                                        <td>
                                            <p><em>Is natural lighting used?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Are daylight and proximity sensitive lighting systems used?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="text-center align-middle">
                                            <p><em>Ventilation</em></p>
                                        </td>
                                        <td>
                                            <p><em>Are</em><em> natural ventilation, energy-efficient ventilation, and air-cooling systems used?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Is draught remediation in buildings in winter incorporated?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3" class="text-center align-middle">
                                            <p>Water Conservation</p>
                                        </td>
                                        <td rowspan="2" class="text-center align-middle">
                                            <p><em>Water</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the management seek in minimizing water consumption by installing any the following? -Duel flush WCs, spray taps, aerating showers?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Does the management seek to minimize water runoff and localized food risk, incorporate rainwater harvesting, and protect water quality?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Water heating</em></p>
                                        </td>
                                        <td>
                                            <p><em>Are energy-efficient systems installed if fossil fuels are used to heat water?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="text-center align-middle">
                                            <p>Other</p>
                                        </td>
                                        <td>
                                            <p><em>Traditional Techniques</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the design and construction of the building make use traditional techniques that are environmentally beneficially?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="text-center align-middle">
                                            <p><em>End-user</em></p>
                                        </td>
                                        <td>
                                            <p><em>Are energy efficient appliances and equipment used?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Are efficient internal energy management systems such as balanced controls, visible electricity meters, and software systems?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Biodiversity</em></p>
                                        </td>
                                        <td>
                                            <p><em>Are wildlife habitats protected and nature conservation promoted?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><em>Contracting services and supplies</em></p>
                                        </td>
                                        <td>
                                            <p><em>Is it ensured that the sub-contractors or suppliers adhere to the relevant policies mentioned above?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table></div>
                                <p class="h5 text-center font-weight-bold"><u>SOCIAL SUSTAINABILITY</u></p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td rowspan="4" class="text-center align-middle">
                                            <p>Site Selection &amp; planning</p>
                                        </td>
                                        <td>
                                            <p><em>Travel and transport</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the development maximize the potential for minimizing car use by incorporating designs that promote and help facilitate public transport such as encouraging cycling, walking, car sharing/carpools etc.?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Environmental justice</em></p>
                                        </td>
                                        <td>
                                            <p><em>Is it ensured that local communities are consulted about the environmental impact of building development and that their views are factored into the decision-planning process?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Access</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the building incorporate facilities that address the access by disabled, elderly employees, mother &amp; children?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Community facilities</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the development provide community facilities in the building?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="text-center align-middle">
                                            <p>Energy Conservation</p>
                                        </td>
                                        <td>
                                            <p><em>Security of energy supply</em></p>
                                        </td>
                                        <td >
                                            <p><em>Does the development address security of energy supply? Failure to do so will lead to social instability.</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Countering fuel poverty</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the development incorporate measures that address fuel scarcity?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p>Water Conservation</p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <p><em>Water</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the development effectively address the issues of water management, security of water supply and quality that will ensure social stability?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" class="text-center align-middle">
                                            <p>Occupational Health</p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <p><em>Health and well being</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the design of the building include measures that promote community and individual health and well-being?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Food</em></p>
                                        </td>
                                        <td>
                                            <p><em>Is there a land set aside to cultivate food for the community which will promote self-sufficiency and contribute to a cheaper and healthier food supply?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Exercise &amp; recreation</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the development make provisions for accessible open spaces and community facilities for physical exercises and recreation?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Health and safety</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the building development conform to the relevant health and safety standards?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Community values</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the building respond to the needs of the local community, alleviate stress, and promote community engagements? </em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Enviro-crime</em></p>
                                        </td>
                                        <td>
                                            <p><em>Is the building spatially and technically designed to counter enviro-crime, such as fly-tipping, graffiti and littering etc.?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Community safety</em></p>
                                        </td>
                                        <td>
                                            <p><em>Do the design and management address the issue of community safety and anti-social behavior? </em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Environmental education</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the development maximize the opportunity to promote environmental awareness and sustainable development issues which can be done, for example, through publicity and community </em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table></div>
                                <p class="h5 text-center font-weight-bold"><u>ECONOMIC SUSTAINABILITY</u></p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td rowspan="3" class="text-center align-middle">
                                            <p>Site Selection &amp; planning, Energy Conservation</p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <p><em>Sustainable development economy</em></p>
                                        </td>
                                        <td>
                                            <p><em>To maximize the economic potential, does the development promote sustainable development infrastructure, design, and associated human resource skills? These include the manufacture of infrastructures such as renewable energy equipment, technological research and development, installation and maintenance of equipment, and architecture and design skills.</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Security of energy supply</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the development make use of localized energy generation and distribution systems to protect energy supplies from disruption due to geopolitical instability, climate conditions, the breakdown of infrastructure, and accidents?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Energy cost savings and income generation</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the development encourage or require the incorporation of such systems as carbon trading (ROCs [Renewable Obligations Credits] and existing and future CO2 trading schemes?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4" class="text-center align-middle">
                                            <p>Local Economy</p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <p><em>Businesses</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the building incorporates lowering monthly fossil fuel bills that will make local business more commercially competitive and help establish sustainable economic communities?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Local procurement</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the development encourage procurement of materials locally in order to boost local economies?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Water</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the building provide security of water supply and quality that will help establish sustainable local economies?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">
                                            <p><em>Flexibility</em></p>
                                        </td>
                                        <td>
                                            <p><em>Does the building provide an opportunity for extensions (subject to planning permissions), use a structural system that permits non-load-bearing internal partitions, and provide service installations that are easily accessible for replacement and improvement?</em></p>
                                        </td>
                                        <td class="text-center align-middle">
                                            <input class="messageCheckbox" type="checkbox" form="form1" title="Select to know your score">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table></div>

                          </div>
                          <div class="modal-footer">
                              <input type="submit" class="btn btn-success" value="Submit" form="form1">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>

                  </div>
          </div>
      </section>
      <!-- error section end -->

      <!--Footer-->
      <footer class="page-footer center-on-small-only  pt-0 footer-widget-container">
        <!--Footer Links-->
        <div class="container pt-5 mb-5">
          <div class="row">
            <!--First column-->
            <div class="col-md-6 col-lg-3 col-xl-3 footer-contact-widget">
                <h3 class="footer-title">About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates eos minus expedita illo recusandae esse labore obcaecati nisi amet quia odio sapiente! Fugiat, voluptatibus nemo necessitatibus porro.</p>
                <ul>
                  <li>
                    <a href="#"><i class="mdi mdi-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="mdi mdi-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="mdi mdi-dribbble"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="mdi mdi-github-circle"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="mdi mdi-linkedin"></i></a>
                   </li>
                </ul>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6 col-lg-3 col-xl-3 recent-widget">
              <h3 class="footer-title">Popular Posts</h3>
              <ul class="image-list">
                <li>
                  <figure class="overlay">
                    <img class="img-fluid" src="assets/images/art/a1.jpg" alt="">
                    <figcaption><a href="blog-single.php"><i class="mdi mdi-link-variant from-top icon-xs"></i></a></figcaption>
                  </figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-single.php">Fusce gravida tortor felis</a> </h6>
                    <div class="meta"><span class="date">12 Jan 2018</span></div>
                  </div>
                </li>
                <li>
                  <figure class="overlay">
                    <img class="img-fluid" src="assets/images/art/a2.jpg" alt="">
                    <figcaption><a href="blog-single.php"><i class="mdi mdi-link-variant from-top icon-xs"></i></a></figcaption>
                  </figure>
                  <div class="post-content">
                    <h6 class="post-title"><a href="blog-single.php">Ornare Nullam Risus Cursus</a></h6>
                    <div class="meta"><span class="date">12 Jan 2018</span></div>
                  </div>
                </li>
                <li>
                  <figure class="overlay">
                    <img class="img-fluid" src="assets/images/art/a3.jpg" alt="">
                    <figcaption><a href="blog-single.php"><i class="mdi mdi-link-variant from-top icon-xs"></i></a></figcaption>
                  </figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-single.php">Euismod Nullam Fusce Dapibus</a> </h6>
                    <div class="meta"><span class="date">12 Jan 2018</span></div>
                  </div>
                </li>
              </ul>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-6 col-lg-3 col-xl-3 link-widget">
              <h3 class="footer-title">Get in Touch</h3>
              <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus.</p>
              <div class="mt-3"></div>
              <ul class="icon-list">
                <li><i class="mdi mdi-map-marker"></i> Moonshine St. 14/05 Light City </li>
                <li><i class="mdi mdi-email"></i> <a href="mailto:first.last@email.com" class="nocolor">first.last@email.com</a> </li>
                <li><i class="mdi mdi-phone-classic"></i> +00 (123) 456 78 90 </li>
                <li><i class="mdi mdi-cellphone-iphone"></i> +80 (547) 455 47 54 </li>
              </ul>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-6 col-lg-3 col-xl-3 footer-contact">
                <h3 class="footer-title">Subscribe</h3>
                <div class="widget">
                  <div class="newsletter-wrapper">
                    <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                      <div class="form-group">
                        <input type="email" value="" name="EMAIL" class="email form-control" id="EMAIL" placeholder="Email Address" required="">
                        <button type="submit" name="subscribe" id="subscribe" class="btn btn-common pull-right">Join</button>
                        <div class="clearfix"></div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.widget -->
                <div class="widget">
                  <h5 class="widget-title">Categories</h5>
                  <ul class="unordered-list">
                    <li><a href="#" class="nocolor">Lifestyle (21)</a></li>
                    <li><a href="#" class="nocolor">Photography (19)</a></li>
                    <li><a href="#" class="nocolor">Journal (16)</a></li>
                    <li><a href="#" class="nocolor">Works (7)</a></li>
                  </ul>
                </div>
            </div>
            <!--/.Fourth column-->

          </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <p>&copy; 2018 Material Studio, All right reserved. Designed with <i class="mdi mdi-heart"></i> by <a href="#">UIdeck</a></p>
                  </div>
              </div>
            </div>
        </div>
        <!--/.Copyright -->

      </footer>
      <!--/.Footer-->
                      

      <!-- Back To Top -->
      <a href="#" class="back-to-top">
        <div class="ripple-container"></div>
        <i class="mdi mdi-arrow-up">
        </i>
      </a>

      <!-- Preloader -->
      <div id="preloader">
        <div class="loader" id="loader-1"></div>
      </div>
      <!-- End Preloader -->


      <!-- Optional JavaScript -->
      <script src="assets/js/jquery-min.js"></script>
      <script src="assets/js/my.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
      <script src="assets/js/jquery.inview.js"></script>
      <script src="assets/js/jquery.counterup.min.js"></script>
      <script src="assets/js/scroll-top.js"></script>
      <script src="assets/js/smoothscroll.js"></script>
      <script src="assets/js/material.min.js"></script>
      <script src="assets/js/ripples.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/form-validator.min.js"></script>
      <script src="assets/js/contact-form-script.min.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/jquery.vide.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/jquery.slicknav.js"></script>
      <script src="assets/js/main.js"></script>

    </body>
  </html>