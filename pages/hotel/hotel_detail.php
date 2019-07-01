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


<div class="container mx-auto w-11/12">

        <div class="container max-w-full"> 
                <div class="w-full border-0 border-b border-solid border-gray-400">
                        <span style="font-size:20px; font-weight:bold;">
                                <H2>Hotel Detail</H2>
                        </span>
                </div> 
        </div>

        <div class="container max-w-full mt-8"> 
                <div class="flex">

                    <div class="w-8/12 items-center flex"> 
                        <span class="bg-orange-400 font-bold p-2">Please input valid Reservation Email address and Allow Email for Instant Confirmation</span>
                    </div>

                    <div class="flex w-4/12 justify-end ">
                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/hotel/hotel_edit.php';" class="btn btn-sm btn-rounded btn-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                        </div>

                        <div class="mr-1">
                                <button class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-times"></i> Delete</button>
                        </div>

                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/hotel/hotel_add.php';" class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                        </div>

                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/hotel/hotel.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                        </div>

                        <div class="mr-1">
                                <button  onclick="window.location.href = '<?=root_path?>/pages/users/user_add.php';"  class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add User</button>
                        </div>

                    </div>

                </div>
        </div>

        <div class="container max-w-full mt-5 flex">
               <div class="w-1/2">
               
                    <h4 class="border-b border-black text-sm text-white text-left bg-blue-800 p-2">Hotel Information</h4>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Name
                        </div>

                        <div class="w-1/2 text-xs items-center flex">
                                <span>FAVE HOTEL LOSARI MAKASSAR (FORMERLY FAVE DAENG TOMPO)</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Address
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>JL. DAENG TOMPO 28-36 MAKASSAR NULL</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                City
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>MAKASSAR, SULAWESI-SOUTH</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Phone
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>0411-363 9777</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Fax
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>0411-363 8008</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Hotel Group
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span></span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Website
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>www.favehotels.com, daengtompo.favehotels.com</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Star
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                </span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Reservation Email
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>engineer@haryono.co.id</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Sales Email
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>daengtomposmm@favehotels.com</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Remarks
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Cancellation:
                                Low = 7 days,
                                High/Peak = 17 days prior to arrival,

                                EXTRA BED = N/A
                                </span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Admin Notes
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>daengtompoinfo@favehotels.com, daengtomposmm@favehotels.com</span>
                        </div>

                    </div>
               </div>

               <div class="w-1/3 ml-10">
                    <h4 class="border-b border-black text-sm text-white text-left bg-blue-800">&nbsp</h4>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Has Contract
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span class="span_success font-bold">YES</span>
                        </div>

                        <div>
                                <button onclick="window.location.href = '<?=root_path?>/pages/rate/hotelRate_detail.php';"  class="btn btn-sm btn-rounded btn-light">Rate</button>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Allotment Type
                        </div>

                        <div class="w-1/3 items-center flex">
                                <span>Instant Confirm</span>
                        </div>

                        <div class="w-1/3 flex justify-end">
                                <button onclick="window.location.href = '<?=root_path?>/pages/allotment/hotelAllotment_detail.php';"   class="btn btn-sm btn-rounded btn-light">Allotment</button>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Company ID
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>favedaengtompo</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Allow Email
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span><i class="fas fa-check"></i> Allow Email</span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Reservation
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>
                                        <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                        <label class="" for="dropdownCheck2">
                                                Disabled
                                        </label>
                                </span>
                        </div>

                    </div>
                    <div class="text-sm mt-3">
                        <p>Public Announcement</p>
                    </div>

               </div>
        </div>

        <div class="container max-w-full mt-5 flex">
            <div class="w-1/2">
                <h4 class="text-base font-bold">Hotel Rooms</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            SUPERIOR ( 21.7m2 )
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Room Only</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            SUPERIOR ( 21.7m2 )
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Breakfast for 2</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            TRIPLE
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Room Only</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            TRIPLE
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Breakfast for 3</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            FAMILY
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Room Only</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            FAMILY
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Breakfast for 3</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            SUITE
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Room Only</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            SUITE  ( 40.8 m2 )
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Breakfast for 2</span>
                        </div>

                </div>

                 <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            EXECUTIVE SUITE
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Room Only</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 p-2 mt-1">

                        <div class="w-1/3 text-left text-sm pt-2 ">
                            EXECUTIVE SUITE
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Breakfast for 2</span>
                        </div>

                </div>  
            </div>

                <div class="">
                        <div class="w-full ml-10">
                                <h4 class="text-base font-bold">Hotel Facilities</h4>

                                <div class="bg-gray-300 p1">
                                        &nbsp
                                </div>
                        </div>

                        <div class="w-full ml-10 mt-5">
                                <h4 class="text-base font-bold">Hotel Facilities</h4>

                                <div class="bg-gray-300 p1">
                                        &nbsp
                                </div>
                        </div>
                </div>
            

        </div>

        <div class="container max-w-full mt-5 flex border-dotted border-0 border-b-1 border-solid border-gray-400">
            <div class="">
                <h4 class="text-base font-bold">Inactive Rooms</h4>

                    <div class="mt-2">
                        <p>STANDARD (21.7 m2) </p>
                        <p>Room Only</p>
                    </div>
                    <div class="mt-2">
                        <p>STANDARD (21.7 m2) </p>
                        <p>Breakfast for 2</p>
                    </div>
                    <div class="mt-2">
                        <p>FAMILY (25.5 m2)</p>
                        <p>Breakfast for 3</p>
                    </div>
                    <div class="mt-2">
                        <p>EXECUTIVE</p>
                        <p>Room Only</p>
                    </div>
                    <div class="mt-2">
                        <p>EXECUTIVE (25.5 m2)</p>
                        <p>Breakfast for 2</p>
                    </div>
                    <div class="mt-2">
                        <p>SUITE</p>
                        <p>Breakfast for 2</p>
                    </div>
                    <div class="mt-2">
                        <p>STANDARD</p>
                        <p>Breakfast for 2</p>
                    </div>
                    <div class="mt-2">
                        <p>EXECUTIVE</p>
                        <p>Breakfast for 2</p>
                    </div>
                    <div class="mt-2">
                        <p>TRIPLE (25.5 m2)</p>
                        <p>Breakfast for 3</p>
                    </div>
                    <div class="mt-2">
                        <p>SUPERIOR</p>
                        <p>Breakfast for 2</p>
                    </div>
                    <div class="mt-2">
                        <p>TRIPLE</p>
                        <p>Breakfast for 3</p>
                    </div>
                    <div class="mt-2">
                        <p>Suite</p>
                        <p></p>
                    </div>
                    <div class="mt-2">
                        <p>Triple/Family (25.5 m2)</p>
                        <p>Breakfast for 2</p>
                    </div>
                    <div class="mt-2">
                        <p>Extra Bed</p>
                        <p>Breakfast for 1</p>
                    </div>
            </div>
        </div>


        <div class="containter w-full p-2 mt-10">
                <div>
                        <span class="text-base font-bold"><h2>User List</h2><span>
                </div>
                
                <div class="flex md-4">
                        <div class="w-full">
                                <div class="w-full mt-1 bg-gray-200">
                                        <div class="table" id="results">

                                                <div class='theader'>
                                                        <div class='table_header'>User ID</div>
                                                        <div class='table_header'>Name</div>
                                                        <div class='table_header'>Email</div>
                                                        <div class='table_header'>Role</div>

                                                </div>

                                                <div class='table_row'>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header User ID</div>
                                                                <div class='table_cell'>
                                                                        <span class="span_blue_link">daengtomposmm@favehotels.com</span>
                                                                </div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Name</div>
                                                                <div class='table_cell'>Fave Daeng Tompo Makassar</div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Email</div>
                                                                <div class='table_cell'>daengtomposmm@favehotels.com</div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Role</div>
                                                                <div class='table_cell'>Hotel Sales</div>
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
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Date</div>
                                                        <div class='table_cell'>10 Feb 2019 15:39</div>
                                                </div>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Internal</div>
                                                        <div class='table_cell'>10600</div>
                                                </div>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Rate Type</div>
                                                        <div class='table_cell'>PRT : 115.178.197.134</div>
                                                </div>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Check-in Check-out Period</div>
                                                        <div class='table_cell'>Update Hotel Detail</div>
                                                </div>
                                                <div class='table_small'>
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