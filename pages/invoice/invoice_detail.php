<html>

<?php 
    include(__DIR__.'/../head.php');
?>



<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');

?>

<!-- isi content adasd -->

<div class="container bg-gray-200 mx-auto w-11/12 mt-10 p-5">

        <div class="container mt-4 ">

                <div class="flex md-4">

                <div class="flex md-4 ">
                        <button onclick="window.location.href = '<?=root_path?>/pages/invoice/invoice.php';" type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up"><i class="fas fa-angle-double-left"></i> Invoice List</button> 
                </div>

                <div class="flex md-4 ">
                        <button onclick="window.location.href = '<?=root_path?>/pages/reservation/reservation_detail.php';" type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up"><i class="fas fa-angle-double-left"></i> Reservation Detail</button> 
                </div>

                </div>

        </div>

        <div class="container max-w-full mt-3 flex">
            <div class="w-full">
                
                <h4 class="border-b border-gray-400 text-sm text-white text-left bg-blue-800 p-2">Invoice</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                    <div class="w-2/12 text-left text-xs pt-2 font-bold ">
                        Invoice No.
                    </div>

                    <div class="w-2/12 text-xs items-center flex">
                        <span class="">HW0119004746</span>
                    </div>

                    <div class="w-6/12 items-center flex">

                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-print"></i> Incoive</button>

                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-print"></i> Voucher</button>

                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-file-pdf"></i> Incoive</button>

                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-file-pdf"></i> Voucher</button>

                    </div>

                    <div class="w-2/12 justify-end flex">
                        <button class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-times"></i> VOID</button>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                    <div class="w-2/12 text-left text-xs pt-2 font-bold ">
                        Invoice Date
                    </div>

                    <div class="w-2/12 text-xs items-center flex">
                        <span class="">31 Mar 2019 19:37</span>
                    </div>

                    <div class="w-8/12 text-xs items-center justify-end flex">
                        <button class="btn btn-sm btn-rounded btn-warning"><i class="fas fa-history"></i> REFUND</button>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                    <div class="w-2/12 text-left text-xs pt-2 font-bold ">
                        Hotel
                    </div>

                    <div class="w-2/12 text-xs items-center flex">
                        <span class="">POP! HOTEL AIRPORT JAKARTA</span>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                    <div class="w-2/12 text-left text-xs pt-2 font-bold ">
                        Guest Name
                    </div>

                    <div class="w-2/12 text-xs items-center flex">
                        <span class="">LUKAS DJUNANTO</span>
                    </div>

                </div>


               
            </div>

        </div>
        
        <div class="w-full mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold"><h2>Check-in: 2 April 2019 - Check-out: 3 April 2019 ~ 1 night(s)</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>Voucher No.</div>
                    <div class='table_header'>Qty.</div>
                    <div class='table_header'>Room Type</div>
                    <div class='table_header'>Room Facility.</div>
                    <div class='table_header'>Special Request</div>
                    <div class='table_header'>Price Per Unit</div>
                    <div class='table_header'>Sub Total</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Voucher No.</div>
                        <div class='table_cell'>VW0119005367</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Qty.</div>
                        <div class='table_cell'>1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Type </div>
                        <div class='table_cell'>POP! ROOM</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Facility</div>
                        <div class='table_cell'>Room Only</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Special Request</div>
                        <div class='table_cell'>

                                <div class="text-xs">
                                        Kingsize Bed
                                </div>

                                <div class="text-xs">
                                        Non-Smoking Room
                                </div>
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Price Per Unit</div>
                        <div class='table_cell'>320,000</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Sub Total</div>
                        <div class='table_cell text-right'>
                                <div class="text-xs">
                                        IDR 320,000
                                </div>

                                <div class="text-xs">
                                       <span class="span_primary">Disc. (+): (5,000)</span>
                                </div>
                        </div>
                    </div>
                
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Voucher No.</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Qty.</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Type </div>
                        <div class='table_cell'>
                                <span class="span_danger"></span>
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Facility</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Special Request</div>
                        <div class='table_cell text-left'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Price Per Unit</div>
                        <div class='table_cell'>
                                <span class="font-bold">Grand Total</span>
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Sub Total</div>
                        <div class='table_cell text-right'>
                               <span class="font-bold">IDR 315,000</span>

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