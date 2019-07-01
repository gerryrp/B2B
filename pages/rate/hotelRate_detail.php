<html>

<?php 
    include(__DIR__.'/../head.php');
?>


<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');

?>
<br>
<br>
<br>
<!-- isi content adasd -->


<div class="container max-w-full mx-auto w-11/12">

        <div class="container max-w-full"> 
                <div class="w-full border-0 border-b border-solid border-gray-400">
                        <span style="font-size:20px; font-weight:bold;">
                                <H2>Master Rate Detail</H2>
                        </span>
                </div> 
        </div>

        <div class="container max-w-full bg-gray-300 mt-8  mx-auto"> 
                <div class="flex justify-center p-5 ">

                        <div class="text-left text-base pt-2 ">
                                Hotel : &nbsp
                        </div>

                        <div class=" items-center flex">
                        <input type="text" name="username" class="textarealg border border-black" value="FAVE HOTEL LOSARI MAKASSAR (FORMERLY FAVE DAENG TOMPO)">
                        
                        </div>

                </div>
        </div>

        <div class="container max-w-full mt-5">
                <div class="flex">
                        <div class="text-lg font-bold w-11/12">
                                <p>FAVE HOTEL LOSARI MAKASSAR (FORMERLY FAVE DAENG TOMPO), MAKASSAR</p>
                        </div>

                        <div class="w-1/12">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>
                </div>

                <div class="flex">
                        <div class="text-base font-bold w-11/12">
                                <p>JL. DAENG TOMPO 28-36 MAKASSAR</p>
                        </div>
                </div>

                <div class="flex mt-2">
                        <div class="text-sm font-bold w-11/12">
                                <p>P: 0411-363 9777</p>
                                <p>F: 0411-363 8008</p>
                                <p>E: engineer@haryoRateco.id</p>
                                <p>W: www.favehotels.com , daengtompo.favehotels.com</p>
                        </div>
                </div>

                <div class="flex mt-2 w-1/3 bg-gray-300 mt-3">
                        <div class="text-sm font-bold w-11/12">
                                <p>Cancelation :</p>
                                <p>Low = 7 Days</p>
                                <p>High/Peak = 17 days prior to arrival</p> <br>
                                <p>EXTRA BED = N/A</p>
                        </div>
                </div>
        </div>

        <div class="container max-w-full mt-5 flex">
                <div class="flex w-9/12 items-center">
                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/rate/hotelRate.php';" class="btn btn-sm btn-rounded btn-light">Master Rate</button>
                        </div>

                        <div class="mr-1">
                                <button class="btn btn-sm btn-rounded btn-light">Rate List</button>
                        </div>

                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/rate/hotelRate_add.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-plus"></i> Add Rate</button>
                        </div>

                        <div class="mr-1 justify-center items-center flex">
                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                <label class="span_blue_link" for="dropdownCheck2">
                                        Show Active Rate Only
                                </label>								
                        </div>
                </div>

                <div class="flex w-3/12 justify-end items-center"> 
                        <div class="mr-1">
                                <button onclick="window.location.href = 'master_hotel.php';" class="btn btn-sm btn-rounded btn-light">Master Hotel</button>
                        </div>

                        <div class="mr-1">
                                <button onclick="window.location.href = 'hotel_detail.php';" class="btn btn-sm btn-rounded btn-light">Hotel Detail</button>
                        </div>

                        <div class="mr-1">
                                <button class="btn btn-sm btn-rounded btn-light">Allotment</button>
                        </div>

                </div>
        </div>

        <div class="containter w-full bg-gray-200 p-2">
                <div class="flex md-4">

                        <div class="w-full">
                                <div class="w-full mt-1 bg-gray-200">
                                        <div class="table" id="results">

                                                <div class="theader">
                                                        <div class="table_header text-left">Rate</div>
                                                        <div class="table_header">Internal</div>
                                                        <div class="table_header">Rate Type</div>
                                                        <div class="table_header text-left">Check-in Check-out Period</div>
                                                        <div class="table_header text-left">Public Notes</div>
                                                        <div class="table_header"></div>
                                                </div>

                                                <div class="table_row">
                                                        <div class="table_small w-2/12">
                                                                <div class="table_cell">Header Rate</div>
                                                                <div class="table_cell text-left">
                                                                        <span class="span_blue_link">RE12-NOTE</span>
                                                                </div>
                                                        </div>

                                                        <div class="table_small w-1/12">
                                                                <div class="table_cell">Header Internal</div>
                                                                <div class="table_cell">
                                                                        <i class="fas fa-check"></i>
                                                                </div>
                                                        </div>

                                                        <div class="table_small w-2/12">
                                                                <div class="table_cell">Header Rate Type</div>
                                                                <div class="table_cell">Normal</div>
                                                        </div>

                                                        <div class="table_small w-2/12">
                                                                <div class="table_cell">Header Check-in Check-out Period</div>
                                                                <div class="table_cell text-left">
                                                                        <span class="span_danger">28 Dec 2019 - 29 Dec 2019</span>
                                                                </div>
                                                        </div>

                                                        <div class="table_small w-4/12">
                                                                <div class="table_cell">Header Public Notes</div>
                                                                <div class="table_cell text-left"><p>INGAT KALAU PROMO PASTI FAVE DAENG TOMPO
                                                                         PERNAH MENGIKUTKAN YG ROOM ONLY SELALU BF SAJA YG DI PROMO KAN</p></div>
                                                        </div>

                                                        <div class="table_small w-1/12">
                                                                <div class="table_cell">Header Public Notes</div>
                                                                <div class="table_cell">
                                                                        <button class="btn btn-sm btn-rounded btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                                                        <button class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-times"></i></button>
                                                                </div>
                                                        </div>

                                                </div>  

                                        </div>
                                </div>
                        </div>

                </div>
        </div>

        <div class="container w-full mt-10">
                <div>
                        <span class="text-base font-bold"><h2>Log</h2><span>
                </div>

                <div class="w-full">
                                <div class="w-full mt-1 bg-gray-200">
                                        <div class="table" id="results">

                                                <div class='table_row'>
                                                        <div class="table_small">
                                                                <div class='table_cell'>Header Date</div>
                                                                <div class='table_cell'>10 Feb 2019 15:40</div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class='table_cell'>Header Internal</div>
                                                                <div class='table_cell'>52170</div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class='table_cell'>Header Rate Type</div>
                                                                <div class='table_cell'>FR7 - NEW YEAR PACKAGE</div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class='table_cell'>Header Check-in Check-out Period</div>
                                                                <div class='table_cell'>PRT: 115.178.197.134</div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class='table_cell'>Header Public Notes</div>
                                                                <div class='table_cell'>Update rate</div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class='table_cell'>Header Public Notes</div>
                                                                <div class='table_cell'>
                                                                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-info-circle"></i></button>
                                                                </div>
                                                        </div>
                                                </div>  

                                        </div>
                                </div>
                        </div>

        </div>


</div>


<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>