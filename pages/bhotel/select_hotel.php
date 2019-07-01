<html>
<?php 
    include(__DIR__.'/../head.php');
?>


<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');
?>


<!-- isi content -->

<div class="container w-11/12 bg-gray-200 mx-auto mt-10 p-5">

    <div class="flex md-4">

        <div class="w-full ">
            <span class="span_title"><h2>ZEST HOTEL JEMURSARI X</h2><span>
        </div>

    </div>

    <div class="flex md-4 mt-4">

        <div class="w-full ">
            <h2 class="font-bold">JL.RAYA PRAPEN 266, SURABAYA</h2><br>
            <p>P: 031 - 9900 3888 <br>
            F: 031 - 9901 3777 <br>
            E: engineer@haryono.co.id<br></p>
            <a href="https://www.zesthotel.com/">W: <span class="span_blue_link underline">www.zesthotel.com</span></a> 
        </div>

        <div class="w-full font-bold">
            <h2>Hotel facilities:</h2>
        </div>

        <div class="w-full font-bold ">
            <h2>Nearby places:</h2>
        </div>

    </div>

    <div class="flex md-4 my-8">

        <div class="w-full bg-teal-200 p-1  ">
            <span class="span_status">CANCELLATION 4 DAYS PRIOR ARRIVAL</span>
        </div>

    </div>

    <div class="containter w-full bg-gray-200 p-2">
        <div class="flex md-4">

            <div class="w-2/6 ">

                <div class=" flex md-4 justify-center">
                    <div class="mr-1">
                        <span class="span_green">Instant Confirmation</span>
                    </div>
                    <div>
                        <span class="span_blue">Email</span>    
                    </div>
                </div>

                <div class=" flex md-4 justify-center items-center mt-5">
                    <div class="mx-1">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-angle-double-left"></i> Back</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-sm btn-rounded btn-primary"> <i class="fas fa-sync-alt"></i> Reset</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-sm btn-rounded btn-light">Calculate</button>    
                    </div>
                </div>

                <div class="w-11/12 border-dotted border-0 border-b border-solid border-black mt-5">

                    <div class="w-full">
                        <span class="font-bold text-xs ">Room(s) selected :</span>
                    </div>

                    <div class="w-full mt-3">
                        <span class="font-bold text-sm">Wed, 19 Jun 2019 - Thu, 20 Jun 2019</span>
                    </div>

                    <div>
                        <span class="font-bold text-xs">1 Night(s)</span>
                    </div>

                    <div class="flex mt-3">
                        <div class="w-1/12"> 1  </div>
                        <div class="w-8/12"> EXTRA BED</div>
                        <div class="w-2/12">205.000</div>
                        <button><i class="fas fa-window-close"></i></button>
                    </div>

                    <div class="flex mt-1 mb-5">
                        <div class="w-1/12"></div>
                        <div class="w-4/12 mr-2 text-xs text-gray-600">Breakfast for 1</div>
                        <div class="mr-1"><span class="span_red text-xs">On Request</span></div>
                        <button><i class="fas fa-info-circle"></i></button>
                    </div>

                </div>

                <div class="flex justify-end mt-3">
                    <span class="text-base font-bold mr-18">Total : IDR 205.000</span>
                </div>

                <div class=" flex md-4 justify-center items-center mt-5">
                    <div class="">
                        <button  onclick="window.location.href = '<?=root_path?>/pages/bhotel/booking.php';"  class="btn btn-sm btn-rounded btn-light font-bold text-sm">Make a Booking</button>
                    </div>
                </div>
            

            </div>

            <div class="w-4/6">

                <div class="w-full flex md-4 bg-white p-1">

                        <div class=" flex mx-1 w-1/2">
                            <p class="my-auto mr-2"> Check in </p>
                            
                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 justify-center items-center">
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
                        </div>

                        <div class="flex mx-1 w-1/2">
                             <p class="my-auto mr-2"> Check Out</p>
                            
                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 justify-center items-center">
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>

                        </div>

                        <div class="mx-1 w-1/4 my-auto">
                            <span>1 night(s)</span>  
                        </div>

                        <div class="flex mx-1 w-1/4 justify-end">
                            <button class="btn btn-light"> <i class="fas fa-plus"></i>  New Date</button>
                        </div>
                </div>

                <div class="w-full mt-4 bg-gray-200">
                    <div class="table" id="results">
                                            <div class='theader'>
                                              <div class='table_header'>Qty.</div>
                                              <div class='table_header'>Room Type</div>
                                              <div class='table_header'>Facility</div>
                                              <div class='table_header'>Price</div>
                                              <div class='table_header'>Availability</div>
                                              <div class='table_header'>Remark</div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Qty</div>
                                                    <div class='table_cell'>
                                                        <input type="text" name="qty" class="textareaxxs" placeholder="1">
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Room Type</div>
                                                    <div class='table_cell'>EXTRA BED</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Facility</div>
                                                    <div class='table_cell'>BREAKFAST FOR 1</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Price</div>
                                                    <div class='table_cell'>IDR 205,000</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Availability</div>
                                                    <div class='table_cell'>
                                                        <span class="span_danger">On request</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Remark</div>
                                                    <div class='table_cell'>Normal</div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Qty</div>
                                                    <div class='table_cell'>
                                                        <input type="text" name="qty" class="textareaxxs" placeholder="0">
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Room Type</div>
                                                    <div class='table_cell'>ZEST DOUBLE ROOM</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Facility</div>
                                                    <div class='table_cell'>BREAKFAST FOR 2</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Price</div>
                                                    <div class='table_cell'>IDR 350,000</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Availability</div>
                                                    <div class='table_cell'>
                                                        <span class="span_primary">Available</span>
                                                        <span>50/night</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Remark</div>
                                                    <div class='table_cell'>Canceled by OP</div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Qty</div>
                                                    <div class='table_cell'>
                                                    <input type="text" name="qty" class="textareaxxs" placeholder="0">
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Room Type</div>
                                                    <div class='table_cell'>ZEST TWIN ROOM</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Facility</div>
                                                    <div class='table_cell'>BREAKFAST FOR 2</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Price</div>
                                                    <div class='table_cell'>IDR 350,000</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Availability</div>
                                                    <div class='table_cell'>
                                                        <span class="span_primary">Available</span>
                                                        <span>50/night</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Remark</div>
                                                    <div class='table_cell'>1</div>
                                                </div>
                                            </div>

                                            
                    </div>
                </div>

                <div class="w-full mt-1 bg-red-200">
                    <div class="flex md-4">
                        <div class="w-3/4">
                            <button class="btn btn-sm btn-rounded btn-light">Calculate</button>
                            <button class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-sync-alt"></i> Reset</button>
                        </div>

                        <div class="w-2/6 text-xs">
                            <p><span class="font-bold">A: </span>Adult</p>
                            <p><span class="font-bold">C: </span>Children below 12 years old</p>
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