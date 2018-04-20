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
                    <hr class="section-padding">
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
                    <br> <br> <br>
                    <div     class="table-responsive">
                        <table class="table table-bordered table-striped-green text-center">
                            <tbody>
                            <tr>
                                <td colspan="3" class="text-center align-middle">
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
                                <td colspan="3" class="text-center align-middle">
                                    <p><strong>LABELS</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center align-middle">
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
                                <td colspan="3" class="text-center align-middle">
                                    <p><strong>B</strong><strong>UTTONS</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center align-middle">
                                    <p>Assumption: 144 gross in 1 bag, 1 carton box contains 18bags</p>
                                </td>
                                <td>
                                    <p></p>
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
                                <td colspan="3" class="text-center align-middle" >
                                    <p><strong>THREADS</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center align-middle">
                                    <p>Assumption: 1 carton box contains 40 tubes</p>
                                </td>
                                <td>
                                    <p> </p>
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
                                    <p>Other trims (Assuming)</p>
                                </td>

                                <td>
                                    <p>60</p>
                                </td>
                                <td>
                                    <p>15</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center align-middle">
                                    <p><strong>TOTAL SELVES = 38</strong></p>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center align-middle">
                                    <p><strong>TOTAL RACKS REQUIRED = 3</strong></p>

                                </td>
                            </tr>
                            </tbody>
                        </table></div>

                    <br> <br>
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
                    <br> <br> <br>


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
                    <br> <br> <br>

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
                <br> <br>

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