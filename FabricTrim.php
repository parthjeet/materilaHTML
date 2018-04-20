<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Fabric and Trim Store Area Calculation</title>

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
    <link rel="stylesheet" type="text/css" href="assets/css/colors/green.css" media="screen"/>

</head>
<body>

<!--    NAVBAR-->
<?php include "navBar.php"; ?>
<!--        navbar-->

<!-- Page Titile Area -->
<section class="page-title-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-center">
                    <div class="title-middle">
                        <h1 class="page-title text-center text-center">Fabric and Trim Store Area Calculation</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Titile Area End -->

<!-- error section -->
<section class="Material-error-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="text-justify     section-padding">
                    <h3>1. RACKS CALCULATION FOR FABRICS:</h3>
                    <p><strong>Target per day: 8000</strong></p>
                    <ul>
                        <li>1 Shelf: 24 rolls</li>
                        <li>1 Rack: 15 shelves <br></li>
                    </ul>


                    <p><strong>Raw materials:</strong></p>
                    <ul>
                        <li><strong>Rack vertical</strong>: 12ft high, having 3 shelves of 5ft each</li>
                        <li><strong>Rack horizontal</strong>: 30ftlong, having5 sections of 6 ft. each</li>
                        <li><strong>Rack width: </strong> 6 feet wide, with one sided loading Assuming roll diameter
                            0.83 ft.= 1 feet and width5 ft.
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped-green w-100 text-center">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p><strong></strong></p>
                                        </td>
                                        <td>
                                            <p><strong>Consumption per Garment</strong></p>
                                        </td>
                                        <td>
                                            <p><strong>Total Consumption (per Day)</strong></p>
                                        </td>
                                        <td>
                                            <p><strong>No. of Rolls required per Day</strong></p>
                                        </td>
                                        <td>
                                            <p><strong>Buffer Time (Days)</strong></p>
                                        </td>
                                        <td>
                                            <p><strong>Rolls in House</strong></p>
                                        </td>
                                        <td>
                                            <p><strong>Total shelves Required</strong></p>
                                        </td>
                                        <td>
                                            <p><strong>Total Rack Required</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>Shell Fabric </strong></p>
                                        </td>
                                        <td>
                                            <p>1.57 meter</p>
                                        </td>
                                        <td>
                                            <p>12560 meter (+5%)</p>
                                        </td>
                                        <td>
                                            <p>132</p>
                                        </td>
                                        <td>
                                            <p>7</p>
                                        </td>
                                        <td>
                                            <p>924</p>
                                        </td>
                                        <td>
                                            <p>38.5</p>
                                        </td>
                                        <td>
                                            <p>2.66</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>Interlining</strong></p>
                                        </td>
                                        <td>
                                            <p>.05m</p>
                                        </td>
                                        <td>
                                            <p>400m</p>
                                        </td>
                                        <td>
                                            <p>6</p>
                                        </td>
                                        <td>
                                            <p>7</p>
                                        </td>
                                        <td>
                                            <p>42</p>
                                        </td>
                                        <td>
                                            <p>1.76</p>
                                        </td>
                                        <td>
                                            <p>0.14</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="text-center align-middle">
                                            <p><strong> Total</strong></p>
                                        </td>

                                        <td>
                                            <p><strong>2.8</strong></p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    </ul>
                    <h3>2. RACKS CALCULATION FOR TRIMS:</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped-green text-center">
                            <tbody>
                            <tr>
                                <td>

                                </td>
                                <td class="align-middle">
                                    <p><strong>Quantity for a Shirt</strong></p>
                                </td>
                                <td class="align-middle">
                                    <p><strong>UOM</strong></p>
                                </td>
                                <td class="align-middle">
                                    <p><strong>Waste</strong></p>
                                </td>
                                <td class="align-middle">
                                    <p><strong>Target Quantity </strong></p>
                                    <p><strong>Quantity</strong></p>
                                </td>
                                <td class="align-middle">
                                    <p><strong>Total Quantity</strong></p>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4 hole button - 18l</p>
                                </td>
                                <td>
                                    <p>11</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>88000</p>
                                </td>
                                <td>
                                    <p>90640</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4 hole button - 16l</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4 hole button - 14l</p>
                                </td>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>48000</p>
                                </td>
                                <td>
                                    <p>49440</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Main label</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Fit label - contemporary</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Size Label</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Wash Care Label</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>EAN LABEL</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>POLYBAG STICKER</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>FACO PRICE STICKER</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Hang Tag With Navy String</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tissue Paper</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Back Support</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>PAPER COLLAR SUPPORT</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>PVC Collar Traveller</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>METAL CROSS CLIP</p>
                                </td>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>24000</p>
                                </td>
                                <td>
                                    <p>24720</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>M-Clip</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>PRINTED POLY BAG</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Single Butter fly</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>no.s</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>8000</p>
                                </td>
                                <td>
                                    <p>8240</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Outer Carton Boxes</p>
                                </td>
                                <td colspan="2" class="text-center align-middle">
                                    <p>20 pcs per carton</p>
                                </td>

                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>40</p>
                                </td>
                                <td>
                                    <p>42</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>GUM TAPE( 65 m , 3 inches)</p>
                                </td>
                                <td colspan="2" class="text-center align-middle">
                                    <p>5 mtr./Carton</p>
                                </td>

                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>3.2</p>
                                </td>
                                <td>
                                    <p>3.4</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>THREADS</p>
                                </td>
                                <td colspan="2" class="text-center align-middle">
                                    <p>130 mtrs</p>
                                </td>
                                <td>
                                    <p>3%</p>
                                </td>
                                <td>
                                    <p>520000m= 1040 tubes</p>
                                </td>
                                <td>
                                    <p>1072 tubes</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div     class="table-responsive">
                        <table class="table table-bordered table-striped-green text-center">
                            <tbody>
                            <tr>
                                <td>
                                    <p><strong>Assumption : D</strong><strong>i</strong><strong>m</strong><strong>ensions of cartonbox:3x2x 4 feet, One shelf contain 4 cartonboxes</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>Calculation</strong></p>
                                </td>
                                <td>
                                    <p><strong>C</strong><strong>ARTONS</strong></p>
                                </td>
                                <td>
                                    <p><strong>T</strong><strong>OTALSHELVES</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>LABELS</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Assumption: 1 carton box contains 20,000 labels</p>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Total labels = 40000</p>
                                </td>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>B</strong><strong>UTTONS</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Assumption: 144 gross in 1 bag, 1 carton box contains 18bags</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Total button = 148320 = 1030 bags</p>
                                </td>
                                <td>
                                    <p>58</p>
                                </td>
                                <td>
                                    <p>15</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>THREADS</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Assumption: 1 carton box contains 40 tubes</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Total threads= 1072 tubes</p>
                                </td>
                                <td>
                                    <p>27</p>
                                </td>
                                <td>
                                    <p>7</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Other trims</p>
                                </td>
                                <td>
                                    <p>(Assuming)</p>
                                </td>
                                <td>
                                    <p>60</p>
                                </td>
                                <td>
                                    <p>15</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>TOTAL SELVES = 38</strong></p>
                                    <p><strong>38</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>TOTAL RACKS REQUIRED = 3</strong></p>
                                    <p><strong>3</strong></p>
                                </td>
                            </tr>
                            </tbody>
                        </table></div>


                    <div class="table-responsive">
                        <br>
                        <table class="table table-bordered table-striped-green w-100 text-center">
                            <tbody>
                            <tr>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p>No. of selves</p>
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <p>No. of selves</p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p>No. of selves</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Stationary</p>
                                </td>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>Rejected trims</p>
                                </td>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>Relaxation</p>
                                </td>
                                <td>
                                    <p>12</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Cut bits</p>
                                </td>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>Leftover trims</p>
                                </td>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p>Total selves</p>
                                </td>
                                <td>
                                    <p>46</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Rejected fabric</p>
                                </td>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>Kanban selves</p>
                                </td>
                                <td>
                                    <p>12</p>
                                </td>
                                <td>
                                    <p>No. of racks</p>
                                </td>
                                <td>
                                    <p>2</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="h6"><strong>Total no of Racks= 8</strong></p>

                    <hr class="section-padding">
                    <h3>3. AREA CALCULATION FOR STORE:</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped-green text-center">
                            <tbody>
                            <tr>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>FURNITURE</strong></p>
                                </td>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>No.</strong></p>
                                </td>
                                <td colspan="2">
                                    <p><strong>Dimensions(ft.*ft.)</strong></p>
                                </td>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>Area</strong></p>
                                </td>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>Allowances</strong></p>
                                </td>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>Total Area</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>Length</strong></p>
                                </td>
                                <td>
                                    <p><strong>Width</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Security table</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>12</p>
                                </td>
                                <td>
                                    <p>250%</p>
                                </td>
                                <td>
                                    <p>30</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pallets</p>
                                </td>
                                <td>
                                    <p>20</p>
                                </td>
                                <td>
                                    <p>4.8</p>
                                </td>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>384</p>
                                </td>
                                <td>
                                    <p>150%</p>
                                </td>
                                <td>
                                    <p>960</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Fabric receiving table</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>5</p>
                                </td>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>15</p>
                                </td>
                                <td>
                                    <p>150%</p>
                                </td>
                                <td>
                                    <p>38</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Fabric inspection table</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>24</p>
                                </td>
                                <td>
                                    <p>150%</p>
                                </td>
                                <td>
                                    <p>60</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Trims inspection table</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>5</p>
                                </td>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>15</p>
                                </td>
                                <td>
                                    <p>150%</p>
                                </td>
                                <td>
                                    <p>38</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Total chairs</p>
                                </td>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>1.8</p>
                                </td>
                                <td>
                                    <p>1.7</p>
                                </td>
                                <td>
                                    <p>13</p>
                                </td>
                                <td>
                                    <p>150%</p>
                                </td>
                                <td>
                                    <p>31</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Racks for fabrics</p>
                                </td>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>32</p>
                                </td>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p>576</p>
                                </td>
                                <td>
                                    <p>160%</p>
                                </td>
                                <td>
                                    <p>1498</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Racks for trims</p>
                                </td>
                                <td>
                                    <p>5</p>
                                </td>
                                <td>
                                    <p>32</p>
                                </td>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p>960</p>
                                </td>
                                <td>
                                    <p>150%</p>
                                </td>
                                <td>
                                    <p>1440</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Racks for other uses</p>
                                </td>
                                <td>
                                    <p>1.5</p>
                                </td>
                                <td>
                                    <p>32</p>
                                </td>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p>288</p>
                                </td>
                                <td>
                                    <p>150%</p>
                                </td>
                                <td>
                                    <p>749</p>
                                </td>
                            </tr>
                            <tr>


                                <td colspan="6" CLASS="text-center align-middle">
                                    <p><strong>TOTAL AREA</strong></p>

                                </td>
                                <td>
                                    <p>4844</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br> <br>


                    <div class="table-responsive">
                        <table class="table table-bordered table-striped-green text-center w-100">
                            <tbody>
                            <tr>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>Machine</strong></p>
                                </td>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>No.</strong></p>
                                </td>
                                <td colspan="2">
                                    <p><strong>Dimensions(ft.*ft.)</strong></p>
                                </td>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>Area</strong></p>
                                </td>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>Allowances</strong></p>
                                </td>
                                <td rowspan="2" class="text-center align-middle">
                                    <p><strong>Total Area</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>L</strong><strong>e</strong><strong>ng</strong><strong>th</strong></p>
                                </td>
                                <td>
                                    <p><strong>Wi</strong><strong>d</strong><strong>th</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Fabric roll trolley</p>
                                </td>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>8.6</p>
                                </td>
                                <td>
                                    <p>3.6</p>
                                </td>
                                <td>
                                    <p>81</p>
                                </td>
                                <td>
                                    <p>300%</p>
                                </td>
                                <td>
                                    <p>324</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Weighing m/c for fabric roll</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <p>2.5</p>
                                </td>
                                <td>
                                    <p>5</p>
                                </td>
                                <td>
                                    <p>400%</p>
                                </td>
                                <td>
                                    <p>25</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Fabric inspection m/c</p>
                                </td>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p>7</p>
                                </td>
                                <td>
                                    <p>4.8</p>
                                </td>
                                <td>
                                    <p>202</p>
                                </td>
                                <td>
                                    <p>300%</p>
                                </td>
                                <td>
                                    <p>808</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Shade matching cabinet</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>5</p>
                                </td>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>15</p>
                                </td>
                                <td>
                                    <p>200%</p>
                                </td>
                                <td>
                                    <p>45</p>
                                </td>
                            </tr>
                            <tr>


                                <td colspan="6" class="text-center align-middle">
                                    <p><strong>TOTAL AREA</strong></p>

                                </td>
                                <td>
                                    <p>1202</strong></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive">
                    <table class="table table-bordered table-striped-green text-center">
                        <tbody>


                        <tr>
                            <td rowspan="2" class="text-center align-middle">
                                <p><strong> PERSONNAL CABIN </strong></p>
                            </td>
                            <td class="text-center align-middle">
                                <p><strong> Chair </strong></p>
                            </td>
                            <td colspan="2" class="text-center align-middle">
                                <p><strong> Dimensions (ft.*ft.) </strong></p>
                            </td>
                            <td>
                                <p><strong> Table </strong></p>
                            </td>
                            <td colspan="2" class="text-center align-middle">
                                <p><strong> Dimensions (ft.*ft.) </strong></p>
                            </td>
                            <td rowspan="2" class="text-center align-middle">
                                <p><strong> Area </strong></p>

                            </td>
                            <td rowspan="2" class="text-center align-middle">
                                <p><strong> Allowance </strong></p>
                            </td>
                            <td rowspan="2" class="text-center align-middle">
                                <p><strong> Total Area </strong></p>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">
                                <p><strong> N </strong><strong> o </strong><strong> . </strong></p>
                            </td>
                            <td class="text-center align-middle">
                                <p><strong> L </strong><strong> e </strong><strong> ng </strong><strong> th </strong>
                                </p>
                            </td>
                            <td class="text-center align-middle">
                                <p><strong> wi </strong><strong> d </strong><strong> th </strong></p>
                            </td>
                            <td class="text-center align-middle">
                                <p><strong> N </strong><strong> o </strong><strong> . </strong></p>
                            </td>
                            <td class="text-center align-middle">
                                <p><strong> L </strong><strong> e </strong><strong> ng </strong><strong> th </strong>
                                </p>
                            </td>
                            <td class="text-center align-middle">
                                <p><strong> wi </strong><strong> d </strong><strong> th </strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Storemanager</p>
                                <p>(1)</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                            <td>
                                <p><strong> 1.5 </strong></p>
                            </td>
                            <td>
                                <p>1.3</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p><strong> 3 5 </strong></p>
                            </td>
                            <td>
                                <p>3</p>
                            </td>
                            <td>
                                <p>22.8</p>
                            </td>
                            <td>
                                <p>260%</p>
                            </td>
                            <td>
                                <p>82</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Visitors</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                            <td>
                                <p><strong> 1.2 </strong></p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p><strong> - </strong></p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p>4.8</p>
                            </td>
                            <td>
                                <p>300%</p>
                            </td>
                            <td>
                                <p>19</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Dataentry (3)</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                            <td>
                                <p><strong> 2.1 </strong></p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                            <td>
                                <p><strong> 3 </strong></p>
                            </td>
                            <td>
                                <p>3</p>
                            </td>
                            <td>
                                <p>53</p>
                            </td>
                            <td>
                                <p>150%</p>
                            </td>
                            <td>
                                <p>133</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Water dispenser</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p><strong> - </strong></p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p><strong> 1.5 </strong></p>
                            </td>
                            <td>
                                <p>1.5</p>
                            </td>
                            <td>
                                <p>3</p>
                            </td>
                            <td>
                                <p>200%</p>
                            </td>
                            <td>
                                <p>9</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Rack</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p><strong> 5 </strong></p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p><strong> - </strong></p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p>10</p>
                            </td>
                            <td>
                                <p>150%</p>
                            </td>
                            <td>
                                <p>25</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p><strong> - </strong></p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p><strong> - </strong></p>
                            </td>
                            <td>
                                <p><strong> - </strong></p>
                            </td>
                            <td colspan="2" class="text-center align-middle">
                                <p><strong> TOTAL AREA </strong></p>
                            </td>
                            <td>
                                <p><strong> 268 </strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table></div>
                </div>

                <div class="table-responsive">
                <table class="table table-bordered table-striped-green text-center">
                    <tbody>
                    <tr>
                        <td rowspan="2" class="text-center align-middle">
                            <p><strong>Other facilities</strong></p>
                        </td>
                        <td rowspan="2" class="text-center align-middle">
                            <p><strong>N</strong><strong>o</strong><strong>.</strong></p>
                        </td>
                        <td colspan="2" class="text-center align-middle">
                            <p><strong>Dimensions(ft.*ft.)</strong></p>
                        </td>
                        <td rowspan="2" class="text-center align-middle">
                            <p><strong>Area</strong></p>
                        </td>
                        <td rowspan="2" class="text-center align-middle">
                            <p><strong>Allowances</strong></p>
                        </td>
                        <td rowspan="2" class="text-center align-middle">
                            <p><strong>To</strong><strong>tal area</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>L</strong><strong>e</strong><strong>ng</strong><strong>th</strong></p>
                        </td>
                        <td>
                            <p><strong>wi</strong><strong>d</strong><strong>th</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Red tag area</p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <p>22</p>
                        </td>
                        <td>
                            <p>4.8</p>
                        </td>
                        <td>
                            <p>106</p>
                        </td>
                        <td>
                            <p>190%</p>
                        </td>
                        <td>
                            <p>307</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>First aid</p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <p>2</p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <p>2</p>
                        </td>
                        <td>
                            <p>250%</p>
                        </td>
                        <td>
                            <p>7</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Fire extinguisher</p>
                        </td>
                        <td>
                            <p>4</p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <p>.8</p>
                        </td>
                        <td>
                            <p>3.2</p>
                        </td>
                        <td>
                            <p>250%</p>
                        </td>
                        <td>
                            <p>12</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Water container</p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <p>6</p>
                        </td>
                        <td>
                            <p>4</p>
                        </td>
                        <td>
                            <p>24</p>
                        </td>
                        <td>
                            <p>200%</p>
                        </td>
                        <td>
                            <p>72</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>-</p>
                        </td>
                        <td>
                            <p>-</p>
                        </td>
                        <td>
                            <p>-</p>
                        </td>



                        <td colspan="3" class="text-center align-middle">
                            <p><strong>TOTAL AREA</strong></p>
                        </td>
                        <td>
                            <p>398</p>
                        </td>
                    </tr>
                    </tbody>
                </table></div>





                <p>The security has to be at the main entrance exactly. This is a very important department because it
                    has records for incoming and outgoing man as well as material. The security room should have 3
                    sections</p>
                <ol>
                    <li>Attendance and visitors</li>
                    <li>In and out of material</li>
                    <li>CCTV monitoring.</li>
                </ol>
                <p>It shall have CCTV Displays. The sections shall have a desk to accommodate a landline and a desktop
                    and a few files and notebooks. The CCTV room shall be able to accommodate 15 &ndash; 20
                    monitors.</p>
                <h3>3. ADMIN AREA</h3>
                <p>Admin area consists of cabins for all the administrators such as GM, HR, merchandisers etc. In our
                    designed factory, admin area is situated nearby main entrance. It has opening gate at three sides
                    which provides connectivity with production floor and road. It has reception area nearby office
                    entrance and sofas are placed on another side of gate to accommodate visitors .</p>
                <h5 class="img-padding-left-right">3.1 RECEPTION</h5>
                <p class="img-padding-left-right">This is the area where any visitor for the officials shall visit first
                    than any other part of the entire setup. This area should be impressive and well designed with
                    modern interior. The reception area shall be situated near the entrance for office inside admin
                    area. Indoor plants will be used to increase the aesthetic value and adding to calmness of the
                    space.This area will be 100% dependent on natural lighting.</p>
                <p class="img-padding-left-right">The reception area should have a desk of dimension and an
                    ergonomically appropriate chair with backrest and armrest of 34&rdquo; x 20&rdquo; for the
                    receptionist. The desk for the receptionist should accommodate a telephone, a desktop and a color
                    printer. There should be sofas on the opposite side of the receptionist desk which should have a
                    seating space for 10 people. As such, the reception area should be big enough to accommodate 11
                    &ndash; 12 people at once.</p>

                <div class="table-responsive img-padding-left-right">
                    <table class="table-bordered table table-striped-green text-center w-75 ">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table</p>
                            </td>
                            <td>
                                <p>4&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Chair</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>3</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Sofa</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 6&rsquo;</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>24</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Water Dispenser</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>5</strong></p>
                            </td>
                            <td>
                                <p>Dustbin</p>
                            </td>
                            <td>
                                <p>1.8*1.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>3.24</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>6</strong></p>
                            </td>
                            <td>
                                <p>First aid box</p>
                            </td>
                            <td>
                                <p>2&rsquo;*1&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>7</strong></p>
                            </td>
                            <td>
                                <p>Fire extinguisher</p>
                            </td>
                            <td>
                                <p>1&rsquo;*0.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>.8</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center align-middle">
                                <p><strong>Area Occupied</strong></p>
                            </td>

                            <td>
                                <p><strong>58 sqft.</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="img-padding-left-right">
                    <div class="well w-75">
                        <p class="img-padding-left-right">Area Required = 2.5 * Area Occupied = 2.5 * 58 = 145 sqft</p>
                    </div>
                </div>
                <br>
                <h5 class="img-padding-left-right">3.2 HUMAN RESOURCE DEPARTMENT</h5>
                <p class="img-padding-left-right">The Human Resource Department is one of the most important sections
                    for the factory as the industry that the factory caters to is a labor intensive industry. The Human
                    Resource Department should be located near the reception area. It shall have one cabin for the Head
                    HR and four cubicles for the junior HR managers namely – Grievances and Complaints officer,
                    Compliance and CSR, Payroll, Training and Recruitment. There needs to be a waiting room for 5 people
                    outside the HR office for people coming in to meet the HR. The HRD shall be one big hall, with glass
                    divisions that are partially frosted. The HR cabin shall have a desk to accommodate a desktop,
                    landline, a printer and a few files. There should be 2 chairs in the HR cabin for visitors and one
                    for the Head HR himself/herself. Whereas, the cubicles for the junior HRs should have a table to
                    accommodate a desktop, landline and a few files and cushioned benches with backrest large enough to
                    accommodate 5 -7 workers. The cabin and all four cubicles should have a file cabinet and a dustbin
                    necessarily.</p>
                <div class="table-responsive img-padding-left-right">
                    <table class="table table-bordered table-striped-green w-75 text-center">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table 1</p>
                            </td>
                            <td>
                                <p>4&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Table 2</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                            <td>
                                <p>36</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Chair</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>9</p>
                            </td>
                            <td>
                                <p>36</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Racks</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>5</strong></p>
                            </td>
                            <td>
                                <p>Almirah</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>6</strong></p>
                            </td>
                            <td>
                                <p>Dustbin</p>
                            </td>
                            <td>
                                <p>1.8*1.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>3.24</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>7</strong></p>
                            </td>
                            <td>
                                <p>First aid box</p>
                            </td>
                            <td>
                                <p>2&rsquo;*1&rsquo;</p>
                            </td>
                            <td>
                                <p>3</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>8</strong></p>
                            </td>
                            <td>
                                <p>Fire extinguisher</p>
                            </td>
                            <td>
                                <p>1&rsquo;*0.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>.8</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center align-middle">
                                <p><strong>Area Occupied</strong></p>
                            </td>

                            <td>
                                <p><strong>119 sq. ft.</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </
                >
                <div class="well w-75">
                    <p class="img-padding-left-right">Area Required = 3.5 * Area Occupied = 3.5 * 119 =414 sq. ft.</p>
                </div>
                <br>
                <h5>3.3 MARKETING & MERCHANDISING</h5>
                <p>Merchandising department consists of q cabin for head of the department and 6 cubicles. HOD cabin
                    will have 1 table, 1 chair for merchandiser, 3 for visitors, 1 rack and dustbin. There will be 6
                    cubicles:</p>
                <ol class="img-padding-left-right">
                    <li>4 for Junior Merchandisers</li>
                    <li>2 for Sourcing people</li>
                </ol>
                <div class="table-responsive">
                    <table class="table tabe table-striped-green text-center w-75">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>People involved </strong></p>
                            </td>
                            <td>
                                <p><strong>Tables Required</strong></p>
                            </td>
                            <td>
                                <p><strong>Chairs Required</strong></p>
                            </td>
                            <td>
                                <p><strong>Racks</strong></p>
                            </td>
                            <td>
                                <p><strong>Almirahs</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1.</strong></p>
                            </td>
                            <td>
                                <p>1 Senior Merchandiser</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>3</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2.</strong></p>
                            </td>
                            <td>
                                <p>4 Asst. merchandisers</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3.</strong></p>
                            </td>
                            <td>
                                <p>2 sourcing in charge</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped-green w-75">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table 1</p>
                            </td>
                            <td>
                                <p>2.5&rsquo; * 5&rsquo;</p>
                            </td>
                            <td>
                                <p>7</p>
                            </td>
                            <td>
                                <p>87.5</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Chair</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>21</p>
                            </td>
                            <td>
                                <p>84</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Racks</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Almirah</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>7</p>
                            </td>
                            <td>
                                <p>42</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>5</strong></p>
                            </td>
                            <td>
                                <p>Dustbin</p>
                            </td>
                            <td>
                                <p>1.8*1.8</p>
                            </td>
                            <td>
                                <p>7</p>
                            </td>
                            <td>
                                <p>23</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>6</strong></p>
                            </td>
                            <td>
                                <p>First aid box</p>
                            </td>
                            <td>
                                <p>2&rsquo;*1&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>7</strong></p>
                            </td>
                            <td>
                                <p>Fire extinguisher</p>
                            </td>
                            <td>
                                <p>1&rsquo;*0.8</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>1.6</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center align-middle">
                                <p><strong>Area Occupied</strong></p>
                            </td>

                            <td>
                                <p><strong>252 </strong><strong>&nbsp;sq.ft</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="well w-75">
                    <p class="img-padding-left-right">Total area occupied = 2.5 * Area Occupied = 2.5 * 252= 630 sq.
                        ft.</p>
                </div>
                <br>
                <h5>3.4 FINANCE AND ACCOUNTS</h5>
                <p>Finance & accounts department is responsible for all the transactions of the company. This department
                    will have 1 head accountant and 2 junior accountants. There will be 1 cabin where all three
                    officials will seat. There will be 3 chair and 1 table for senior accountant, 1 rack, 2 tables and 2
                    chairs for assistants , one water dispenser and one dustbin.3 extra chairs will be there for
                    visitors.</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped-green text-center w-75">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table 1</p>
                            </td>
                            <td>
                                <p>4&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>5</p>
                            </td>
                            <td>
                                <p>40</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Chair</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>7</p>
                            </td>
                            <td>
                                <p>28</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Almirah</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                            <td>
                                <p>24</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Water Dispenser</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>10</strong></p>
                            </td>
                            <td>
                                <p>Dustbin</p>
                            </td>
                            <td>
                                <p>1.8*1.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>3.24</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>`12</strong></p>
                            </td>
                            <td>
                                <p>First aid box</p>
                            </td>
                            <td>
                                <p>2&rsquo;*1&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>13</strong></p>
                            </td>
                            <td>
                                <p>Fire extinguisher</p>
                            </td>
                            <td>
                                <p>1&rsquo;*0.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>.8</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                            <td>
                                <p><strong>&nbsp;-</strong></p>
                            </td>
                            <td>
                                <p><strong>&nbsp;-</strong></p>
                            </td>
                            <td>
                                <p><strong>&nbsp;-</strong></p>
                            </td>
                            <td>
                                <p><strong>102</strong><strong> sq.ft</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="well w-75">
                    <p class="img-padding-left-right">Total area occupied = 2.5 * Area Occupied = 2.5 *102 = 255 sq.
                        ft</p>
                </div>
                <br>
                <h5>3.5 CONFERENCE HALL</h5>
                <p>The conference hall is the place where all the important meetings happen and all financial decisions
                    are made. Therefore, the room should have a soothing environment. Walls should be of a light color
                    and the interiors should be pacifying. The room should accommodate 15 people at a time. There should
                    be a white board/wall for projection. A big table and chairs to accommodate 15 people and a fixed
                    projector with a good sound system should be setup. A television should also be available. There
                    must be space to display running and upcoming styles.</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped-green w-75 text-center">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table 1</p>
                            </td>
                            <td>
                                <p>14&rsquo; * 4&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>56</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Chair</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>15</p>
                            </td>
                            <td>
                                <p>60</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Rack</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Display area</p>
                            </td>
                            <td>
                                <p>5*3</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>30</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>5</strong></p>
                            </td>
                            <td>
                                <p>Water Dispenser</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>4</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>6</strong></p>
                            </td>
                            <td>
                                <p>Dustbin</p>
                            </td>
                            <td>
                                <p>1.8*1.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>3.24</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>7</strong></p>
                            </td>
                            <td>
                                <p>First aid box</p>
                            </td>
                            <td>
                                <p>2&rsquo;*1&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>8</strong></p>
                            </td>
                            <td>
                                <p>Fire extinguisher</p>
                            </td>
                            <td>
                                <p>1&rsquo;*0.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>.8</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center align-middle">
                                <p><strong>Area Occupied</strong></p>
                            </td>

                            <td>
                                <p><strong>162 sq.ft</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="well w-75">
                    <p class="img-padding-left-right">Total area occupied = 2.5 * Area Occupied = 2.5 * 162 = 405 sq.
                        ft.</p>
                </div>
                <br>
                <h5>3.6 IT DEPARTMENT</h5>
                <p>IT department is responsible for maintain all softwares and software related issue. It dept. should
                    have technically sound IT people. It department will have 1 head technician and 3 assistants. 1
                    cabin will be allotted to the HOD which will have facilities like, table, 3 chairs, 1 rack, water
                    dispenser etc. One table and one chair will be allotted to other technicians.</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped-green w-75 text-center">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table 1</p>
                            </td>
                            <td>
                                <p>4&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>5</p>
                            </td>
                            <td>
                                <p>60</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Chair</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>7</p>
                            </td>
                            <td>
                                <p>28</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Racks</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Almirah</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>5</p>
                            </td>
                            <td>
                                <p>30</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>7</strong></p>
                            </td>
                            <td>
                                <p>Dustbin</p>
                            </td>
                            <td>
                                <p>1.8*1.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>3.24</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>8</strong></p>
                            </td>
                            <td>
                                <p>First aid box</p>
                            </td>
                            <td>
                                <p>2&rsquo;*1&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>9</strong></p>
                            </td>
                            <td>
                                <p>Fire extinguisher</p>
                            </td>
                            <td>
                                <p>1&rsquo;*0.8</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>.8</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center align-middle">
                                <p><strong>Area Occupied</strong></p>
                            </td>

                            <td>
                                <p><strong>130</strong><strong> sq.ft</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="img-padding-left-right">
                <div class="well w-75">
                    <p class="img-padding-left-right text-center align-middle">Total area occupied= 2.5 * 130 = 325 sq.
                        ft.</p>
                </div>
                <h5>3.7 MD CABIN</h5>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped-green w-75 text-center">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table 1</p>
                            </td>
                            <td>
                                <p>5&rsquo; * 2.5&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>12.5</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Chair</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>3</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Racks</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Almirah</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p><strong>Area Occupied</strong></p>
                            </td>

                            <td>
                                <p><strong>42.5 sq.ft</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="well w-75">
                    <p class="img-padding-left-right">Total area occupied = 2.5 * Area Occupied
                        = 2.5 * 42.5 = 106.25 sqft
                    </p>
                </div>


                <br>
                <h5>3.8 GENERAL MANAGER CABIN</h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped-green w-75 text-center">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table 1</p>
                            </td>
                            <td>
                                <p>5&rsquo; * 2.5&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>12.5</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Chair</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>3</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Racks</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Almirah</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p><strong>Area Occupied</strong></p>
                            </td>

                            <td>
                                <p><strong>42.5 sq.ft</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="well w-75">
                    <p class="img-padding-left-right">Total area occupied = 2.5 * Area Occupied
                        = 2.5 * 42.5 = 106.25 sqft
                    </p>
                </div>
                <br>
                <h5>3.9 MEETING ROOM</h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped-green w-75">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table 1</p>
                            </td>
                            <td>
                                <p>7.5&rsquo; * 3.5&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>26.25</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Chair</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>8</p>
                            </td>
                            <td>
                                <p>32</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Rack</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Almirah</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p>Area Occupied</p>
                            </td>

                            <td>
                                <p>70sq.ft</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="well w-75">
                    <p class="img-padding-left-right">Total area occupied = 2.5 * Area Occupied = 2.5 * 70 = 175 sqft
                    </p></div>
                <br>
                <h5>3.10 TRAINING CENTRE</h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped-green w-75">
                        <tbody>
                        <tr>
                            <td>
                                <p><strong>S.No</strong></p>
                            </td>
                            <td>
                                <p><strong>Description</strong></p>
                            </td>
                            <td>
                                <p><strong>Dimensions</strong></p>
                            </td>
                            <td>
                                <p><strong>Quantity</strong></p>
                            </td>
                            <td>
                                <p><strong>Area Occupied</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>1</strong></p>
                            </td>
                            <td>
                                <p>Table 1</p>
                            </td>
                            <td>
                                <p>2.5&rsquo; * 5&rsquo;</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>25</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>2</strong></p>
                            </td>
                            <td>
                                <p>Table 2</p>
                            </td>
                            <td>
                                <p>2&rsquo;*3&rsquo;</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>12</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>3</strong></p>
                            </td>
                            <td>
                                <p>Chair 1</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>60</p>
                            </td>
                            <td>
                                <p>240</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>4</strong></p>
                            </td>
                            <td>
                                <p>Chair 2</p>
                            </td>
                            <td>
                                <p>1.12&rsquo; * 1.2&rsquo;</p>
                            </td>
                            <td>
                                <p>24</p>
                            </td>
                            <td>
                                <p>32.25</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>5</strong></p>
                            </td>
                            <td>
                                <p>Almirah</p>
                            </td>
                            <td>
                                <p>2&rsquo; * 3&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>6</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>6</strong></p>
                            </td>
                            <td>
                                <p>Machines</p>
                            </td>
                            <td>
                                <p>4&rsquo; * 2&rsquo;</p>
                            </td>
                            <td>
                                <p>24</p>
                            </td>
                            <td>
                                <p>192</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>7</strong></p>
                            </td>
                            <td>
                                <p>Dustbin</p>
                            </td>
                            <td>
                                <p>1.8*1.8</p>
                            </td>
                            <td>
                                <p>24</p>
                            </td>
                            <td>
                                <p>77.8</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>8</strong></p>
                            </td>
                            <td>
                                <p>First aid box</p>
                            </td>
                            <td>
                                <p>2&rsquo;*1&rsquo;</p>
                            </td>
                            <td>
                                <p>1</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><strong>9</strong></p>
                            </td>
                            <td>
                                <p>Fire extinguisher</p>
                            </td>
                            <td>
                                <p>1&rsquo;*0.8</p>
                            </td>
                            <td>
                                <p>2</p>
                            </td>
                            <td>
                                <p>1.6</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center align-middle">
                                <p><strong>Area Occupied</strong></p>
                            </td>

                            <td>
                                <p><strong>588.65 sq.ft</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="well w-75">
                    <p class="img-padding-left-right">Total area occupied = 2.5 * Area Occupied = 2.5 * 588.65 = 1471.6
                        sqft
                    </p>
                </div>

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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates eos minus expedita illo
                    recusandae esse labore obcaecati nisi amet quia odio sapiente! Fugiat, voluptatibus nemo
                    necessitatibus porro.</p>
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
                            <figcaption><a href="blog-single.php"><i class="mdi mdi-link-variant from-top icon-xs"></i></a>
                            </figcaption>
                        </figure>
                        <div class="post-content">
                            <h6 class="post-title"><a href="blog-single.php">Fusce gravida tortor felis</a></h6>
                            <div class="meta"><span class="date">12 Jan 2018</span></div>
                        </div>
                    </li>
                    <li>
                        <figure class="overlay">
                            <img class="img-fluid" src="assets/images/art/a2.jpg" alt="">
                            <figcaption><a href="blog-single.php"><i class="mdi mdi-link-variant from-top icon-xs"></i></a>
                            </figcaption>
                        </figure>
                        <div class="post-content">
                            <h6 class="post-title"><a href="blog-single.php">Ornare Nullam Risus Cursus</a></h6>
                            <div class="meta"><span class="date">12 Jan 2018</span></div>
                        </div>
                    </li>
                    <li>
                        <figure class="overlay">
                            <img class="img-fluid" src="assets/images/art/a3.jpg" alt="">
                            <figcaption><a href="blog-single.php"><i class="mdi mdi-link-variant from-top icon-xs"></i></a>
                            </figcaption>
                        </figure>
                        <div class="post-content">
                            <h6 class="post-title"><a href="blog-single.php">Euismod Nullam Fusce Dapibus</a></h6>
                            <div class="meta"><span class="date">12 Jan 2018</span></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-6 col-lg-3 col-xl-3 link-widget">
                <h3 class="footer-title">Get in Touch</h3>
                <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem
                    malesuada magna mollis euismod. Praesent commodo cursus.</p>
                <div class="mt-3"></div>
                <ul class="icon-list">
                    <li><i class="mdi mdi-map-marker"></i> Moonshine St. 14/05 Light City</li>
                    <li><i class="mdi mdi-email"></i> <a href="mailto:first.last@email.com" class="nocolor">first.last@email.com</a>
                    </li>
                    <li><i class="mdi mdi-phone-classic"></i> +00 (123) 456 78 90</li>
                    <li><i class="mdi mdi-cellphone-iphone"></i> +80 (547) 455 47 54</li>
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
                                <input type="email" value="" name="EMAIL" class="email form-control" id="EMAIL"
                                       placeholder="Email Address" required="">
                                <button type="submit" name="subscribe" id="subscribe" class="btn btn-common pull-right">
                                    Join
                                </button>
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
                    <p>&copy; 2018 Material Studio, All right reserved. Designed with <i class="mdi mdi-heart"></i> by
                        <a href="#">UIdeck</a></p>
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