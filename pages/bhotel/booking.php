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
    <div class="w-full border-0 border-b border-solid border-black">
        <div class="flex md-4">
            <span class="span_title"><h2>Booking Summarty</h2></span>           
        </div>
    </div>

    <div class="flex md-4 mt-8">

        <div class="w-full ">
            <span class="span_title"><h2>ZEST HOTEL JEMURSARI X</h2><span>
        </div>

    </div>

    <div class="flex md-4 mt-4">

        <div class="w-full text-xs ">
            <h2 class="font-bold">JL.RAYA PRAPEN 266, SURABAYA</h2><br>
            <p>P: 031 - 9900 3888 <br>
            F: 031 - 9901 3777 <br>
            E: engineer@haryono.co.id<br></p>
            <a href="https://www.zesthotel.com/">W: <span class="span_blue_link">www.zesthotel.com</span></a> 
        </div>

    </div>

    <div class="flex md-4 my-8">

        <div class="w-full bg-teal-200 p-1  ">
            <span class="span_status">CANCELLATION 4 DAYS PRIOR ARRIVAL</span>
        </div>

    </div>

    <div class="container">
        <div class="w-full ">
            <span class="text-lg font-bold"><h2>Please enter  invoice & voucher detail </h2><span>
        </div>

        <div class="w-full">
            <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-black p-2 ">

                <div class="w-2/12 text-left text-sm font-bold pt-2 flex items-center ">
                    Invoice Contract Person
                </div>

                <div class="w-2/12 items-center flex mr-5">
                    <input type="text" class="textarealg border border-black" value="" >
                </div>

                <div class="w-1/12 mt-3">
                    <form>
                        <select class="border border-black border-solid">
                            <option value="Mr"> Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Mstr">Mstr</option>
                            <option value="Ms">Ms</option>
                            <option value="Miss">Miss</option>
                            <option value="Inf">Inf</option>
                            <option value="Grp">Grp</option>
                            <option value="Fam">Fam</option>
                            <option value="PT">PT</option>
                            <option value="CV">CV</option>
                        </select>
                    </form>
                </div>

            </div>

            <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-black p-2 ">

                <div class="w-2/12 text-left text-sm font-bold pt-2 ">
                        Company
                </div>

                <div class="w-3/12 items-center flex">
                        
                        <input type="text" class="textarealg border border-black" value="" >
                </div>

            </div>

            <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-black p-2 ">

                <div class="w-2/12 text-left text-sm font-bold pt-2 ">
                        Phone
                </div>

                <div class="w-3/12 items-center flex">
                        <input type="text" class="textarealg border border-black" value="" >
                </div>

            </div>

            <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-black p-2 ">

                <div class="w-2/12 text-left text-sm font-bold pt-2 ">
                    Address
                </div>

                <div class="w-3/12 items-center flex">
                    <input type="text" class="textarealg border border-black" value="" >    
                </div>

            </div>

        </div>

        <div class="w-full mt-4 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <h2> Wed, 19 Jun 2019 - Thu, 20 Jun 2019 ~ 1 Night(s)</h2>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>Qty.</div>
                    <div class='table_header'>Room Type & Facility</div>
                    <div class='table_header'>Price Per Unit</div>
                    <div class='table_header'>Room Price</div>
                    <div class='table_header'>Additional Fee</div>
                    <div class='table_header'>Discount</div>
                    <div class='table_header'>Guest Name & Special Request*</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Qty</div>
                        <div class='table_cell'>1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Type & Facility</div>
                        <div class='table_cell'>EXTRA BED & breakfast for 1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Price Per Unit</div>
                        <div class='table_cell'>@ 205,000</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Price</div>
                        <div class='table_cell'>205,000</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Additional Fee</div>
                        <div class='table_cell'>
                            <input type="text" name="qty" class="textareaxs" placeholder="0">
                            <i class="fas fa-info-circle"></i>
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Discount</div>
                        <div class='table_cell'>
                            <input type="text" name="qty" class="textareaxs" placeholder="0">
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Guest Name & Special Request*</div>
                        <div class='table_cell'>
                            <div class="flex justify-center">
                                <input type="text" name="qty" class="textareaxs mr-3" placeholder="0">

                                <form>
                                    <select class="border border-black border-solid">
                                        <option value="Mr"> Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Mstr">Mstr</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Inf">Inf</option>
                                        <option value="Grp">Grp</option>
                                        <option value="Fam">Fam</option>
                                        <option value="PT">PT</option>
                                        <option value="CV">CV</option>
                                    </select>
                                </form>
                            </div>	
                            <div>
                                <form>
                                    <select class="border border-black border-solid">
                                        <option value="-- Spesial Request --"> -- Spesial Request --</option>
                                        <option value="Room Only">Room Only</option>
                                        <option value="Breakfast for">Breakfast for</option>
                                        <option value="Kingsize Bed">Kingsize Bed</option>
                                        <option value="Twin Bed">Twin Bed</option>
                                        <option value="Smooking Room">Smooking Room</option>
                                        <option value="Non-Smoking Room">Non-Smoking Room</option>
                                        <option value="Connenting Room">Connenting Room</option>
                                        <option value="Other Special Request">Other Special Request</option>
                                    </select>
                                </form>						
                            </div>
                        </div>
                    </div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Qty</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Type & Facility</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Price Per Unit</div>
                        <div class='table_cell'>Sub Total :</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Price</div>
                        <div class='table_cell'>205,000</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Additional Fee</div>
                        <div class='table_cell'>0,00</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Discount</div>
                        <div class='table_cell'>0,00</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Guest Name & Special Request*</div>
                        <div class='table_cell'></div>
                    </div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Qty</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Type & Facility</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Price Per Unit</div>
                        <div class='table_cell'>
                           <span class="text-base font-bold">Grand Total: </span>
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Price</div>
                        <div class='table_cell'>
                            <span class="text-base font-bold">IDR 205,000</span>
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Additional Fee</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Discount</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Guest Name & Special Request*</div>
                        <div class='table_cell'></div>
                    </div>
                </div>

              
            </div>
        </div>

        <div class="w-full flex border-0 border-b border-black border-solid mt-8 p-2 ">
            <div class="text-sm font-bold w-6/12">
                Time to complete this reservation: 7 minutes 
            </div>

            <div class="w-6/12 justify-end flex">
                <span class="span_primary">*Special requests are subject to availability upon check-in.</span>
            </div>
        </div>

        <div class="w-full flex border-0 border-b border-black border-solid mt-8 p-2 ">
            <div class="text-xs font-bold w-6/12">
            <p>This reservation has passed hotel's cancelation policy time</p>
            <p>If hotel confirm this reservation, then reservation <span class="span_danger"> CANNOT BE CANCELED!!</span></p>
            <p>(No Amend/Cancel/Refund)<p>

            </div>

            <div class="w-6/12 justify-end flex">
                <div>
                    <span class="span_blue">Email</span>
                </div>
            </div>
        </div>

        
        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-success"><i class="fas fa-check"></i> ACCEPT LG & PROCEED</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-danger"><i class="fas fa-times"></i> REJECT LG & CANCEL</button>
                       
        </div>

    </div>

</div>



<?php 
include(base_path.'/component/footer.php');
?>
</body>
</html>