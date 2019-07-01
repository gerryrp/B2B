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

                <div class="flex md-4 w-10/12">
                        <button onclick="window.location.href = '<?=root_path?>/pages/reservation/reservation.php';" type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up"><i class="fas fa-angle-double-left"></i> Reservation List</button> 
                </div>

                <div class="flex md-4 w-1/4 items-center justify-end ">
                        <button type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up">Email Status</button> 
                </div>

                </div>

        </div>

        <div class="container max-w-full mt-5 flex">
                <div class="w-1/2">
                
                <h4 class="border-b border-gray-400 text-sm text-white text-left bg-blue-800 p-2">Booking Information</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs pt-2 font-bold ">
                        Reservation No.
                        </div>

                        <div class="w-1/2 text-xs items-center flex">
                                <span class="text-base font-bold">19014960</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                                Invoice No. 
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span class="span_blue_link"> HW0119004746</span>
                        </div>

                        <div class="w-4/12 items-center justify-end flex ">
                                <button class="btn btn-rounded btn-light"><i class="fas fa-envelope"></i> Mail Voucher to Hotel</button>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-sm pt-2 font-bold ">
                        Status
                        </div>

                        <div class="w-8/12">
                                <div class="border-0 border-b border-solid border-gray-400">
                                        <span class="span_blue">Issued</span>

                                        <div class="mt-2">
                                                <button class="btn btn-rounded btn-light"><i class="fas fa-print"></i> Incoive</button>

                                                <button class="btn btn-rounded btn-light"><i class="fas fa-print"></i> Voucher</button>

                                                <button class="btn btn-rounded btn-light"><i class="fas fa-file-pdf"></i> Incoive</button>

                                                <button class="btn btn-rounded btn-light"><i class="fas fa-file-pdf"></i> Voucher</button>
                                        </div>
                                </div>

                                <div>
                                        <div class="flex flex-wrap overflow-hidden border-0 border-b border-solid border-gray-500 p-2">

                                                <div class="w-1/3 text-left flex items-start ">
                                                        <span class="text-sm">Hotel Staff :</span> 
                                                </div>

                                                <div class="w-1/2 text-xs items-center flex">
                                                        <span class="text-sm ">SYSTEM</span>
                                                </div>

                                        </div>

                                        <div class="flex flex-wrap overflow-hidden border-0 border-b border-solid border-gray-500 p-2">

                                                <div class="w-1/3 text-left flex items-start ">
                                                        <span class="text-sm">Confirmation No. :</span> 
                                                </div>

                                                <div class="w-1/2 text-xs items-center flex">
                                                        <span class="text-sm "></span>
                                                </div>

                                        </div>

                                        <div class="flex flex-wrap overflow-hidden border-0 border-b border-solid border-gray-500 p-2">

                                                <div class="w-1/3 text-left flex items-start ">
                                                        <span class="text-sm">Confirmed Via :</span> 
                                                </div>

                                                <div class="w-1/2 text-xs items-center flex">
                                                        <span class="text-sm ">B2B Allotment</span>
                                                </div>

                                        </div>

                                        <div class="flex flex-wrap overflow-hidden border-0 border-b border-solid border-gray-500 p-2">

                                                <div class="w-1/3 text-left flex items-start ">
                                                        <span class="text-sm">Confirmed Date :</span> 
                                                </div>

                                                <div class="w-1/2 text-xs items-center flex">
                                                        <span class="text-sm ">31 Mar 2019 19:36</span>
                                                </div>

                                        </div>

                                        <div class="flex flex-wrap overflow-hidden border-0 border-b border-solid border-gray-500 p-2">

                                                <div class="w-1/3 text-left flex items-start ">
                                                        <span class="text-sm">Cut-off Date :</span> 
                                                </div>

                                                <div class="w-1/2 text-xs items-center flex">
                                                        <span class="text-sm ">Hotel cancellation policy is applied</span>
                                                </div>

                                        </div>

                                        <div class="flex flex-wrap overflow-hidden border-0 border-b border-solid border-gray-500 p-2">

                                                <div class="w-1/3 text-left flex items-start ">
                                                        <span class="text-sm">Printed By :</span> 
                                                </div>

                                                <div class="w-1/2 text-xs items-center flex">
                                                        <span class="text-sm span_blue_link ">sakuratoursby@gmail.com</span>
                                                </div>

                                        </div>

                                        <div class="flex flex-wrap overflow-hidden border-0 border-b border-solid border-gray-500 p-2">

                                                <div class="w-1/3 text-left flex items-start ">
                                                        <span class="text-sm">Printed Date :</span> 
                                                </div>

                                                <div class="w-1/2 text-xs items-center flex">
                                                        <span class="text-sm ">31 Mar 2019 19:37</span>
                                                </div>

                                        </div>
                                </div>
                        </div>

                </div>
                
                </div>

                <div class="w-1/2 ml-10">
                
                <h4 class="border-b border-gray-400 text-sm text-white text-left bg-blue-800 p-2">Other Information</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                                Availability
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span class="span_blue">ALLOTMENT : 1</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs font-bold pt-2 items-center flex">
                                Booked By
                        </div>

                        <div class="w-6/12">
                                <div>
                                        <span class="span_blue_link text-xs">sakuratoursby@gmail.com - SAKURA MITRA WISATA (DP)</span>
                                </div>
                                
                                <div>
                                        <span class="font-bold">Cust No.</span> <span class="span_blue_link"> 3978 - SAKURA MITRA WISATA (DP)</span>
                                </div>

                                <div>
                                        <span class="font-bold">IM: SAKURATOUR_04</span>
                                </div>
                        </div>

                        <div class="w-2/12 flex justify-end">
                                <div>
                                        <span class="span_blue">A</span>
                                </div>
                                
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                                Booked Date
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>31 Mar 2019 19:36</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                                Processed By
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span class="span_blue_link">NISA</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                                Processed Date
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>31 Mar 2019 19:36</span>
                        </div>

                </div>

                </div>
        </div>

        <div class="container max-w-full mt-5 flex">

                <div class="w-1/2">
                
                <h4 class="border-b border-gray-400 text-sm text-white text-left bg-blue-800 p-2">Customer</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                                Contact Person
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>NISA (SAKURATOUR_04)</span>
                        </div>

                        <div class="w-4/12 items-center justify-end flex ">
                                <button class="btn btn-rounded btn-light"><i class="fas fa-envelope"></i> Mail Voucher to Hotel</button>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                                Company Name	
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>SAKURA MITRA WISATA (DP)</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                                Address	
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>JLN PANDEGILING 204</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                                Phone
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>0315458759</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                                Guest Name
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>LUKAS DJUNANTO</span>
                        </div>

                </div>
                
                </div>

                <div class="w-1/2 ml-10">
                
                <h4 class="border-b border-gray-400 text-sm text-white text-left bg-blue-800 p-2">Hotel</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                        Hotel
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span class="span_blue_link">POP! HOTEL AIRPORT JAKARTA</span>
                                <span class="span_blue ml-2">Email</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs font-bold pt-2 items-center flex">
                                Address
                        </div>

                        <div class="w-8/12">
                                
                                <span class="">JL. RAYA BANDARA NO. 106, RAWA BOKOR, BENDA, TANGERANG</span>
                
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                                Phone
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>021 294 05678</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                                Fax
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span class="">021 294 05679</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                                Email
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>engineer@haryono.co.id</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 items-center flex ">
                                Remark
                        </div>

                        <div class="w-1/2 items-center flex bg-yellow-300 py-2">
                                <span>cancellation=4days prior the guest arrival.</span>
                        </div>

                </div>

                </div>
        </div>

        <div class="w-full mt-5 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold"><h2> Check-in: 2 April 2019 - Check-out: 3 April 2019 ~ 1 night(s)</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>Qty.</div>
                    <div class='table_header'></div>
                    <div class='table_header'>Qty.</div>
                    <div class='table_header'>Allotment Used</div>
                    <div class='table_header'>Price Per Unit</div>
                    <div class='table_header'>Sub Total</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Qty</div>
                        <div class='table_cell'>1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Type </div>
                        <div class='table_cell text-left'>
                                <div class="border-0 border-b border-black border-solid">
                                        POP! ROOM
                                </div>

                                <div class="text-xs">
                                        Booking Code:
                                </div>

                                <div class="ml-2 text-xs">
                                        FR 10 - CONTRACT RATE 2019 - 2020
                                </div>

                                <div class="text-xs">
                                        Rate Remarks: 
                                </div>

                                <div class="ml-2 text-xs">
                                        EFF : 1 APR 19 - 31 MAR 20 [ALL MARKET] "CONTRACT RATE 2019 - 2020" "EXCEPT HIGH/PEAK"
                                </div>
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Facility</div>
                        <div class='table_cell'>Room Only</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Allotment Used</div>
                        <div class='table_cell text-left'>
                                <div class="border-0 border-b border-black border-solid">
                                        <span class="font-bold">LUKAS DJUNANTO</span>
                                </div>

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
                        <div class='table_cell'>IDR 320,000</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Sub Total</div>
                        <div class='table_cell'>
                                <div class="text-xs">
                                        IDR 320,000
                                </div>

                                <div class="text-xs">
                                       <span class="span_danger">Disc.: (5,000)</span>
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
                        <div class='table_cell'>Header Room Type </div>
                        <div class='table_cell text-left'>
                                <span class="span_danger">*Special requests are subject to availability upon check-in.</span>
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Facility</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Allotment Used</div>
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
                        <div class='table_cell'>
                               <span class="font-bold">IDR 315,000</span>

                        </div>
                    </div>
                
                </div>

               

              
            </div>
        </div>

        <div class="w-8/12 mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold"><h2>Allotment Usage Info</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>Date</div>
                    <div class='table_header'>Room Group</div>
                    <div class='table_header'>Qty.</div>
                    <div class='table_header'>Allotment Used</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Date</div>
                        <div class='table_cell'>2 Apr 2019</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Group</div>
                        <div class='table_cell'>POP GROUP!</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Qty.</div>
                        <div class='table_cell'>1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Allotment Used</div>
                        <div class='table_cell'>
                               <span class="span_primary font-bold">1</span>
                        </div>
                    </div>
                    
                
                </div>

              
            </div>
        </div>

        <div class="container mt-10 border-0 border-b border-dotted border-black">
                <div>
                        <span class="font-bold">Contact Us </span>
                </div>

                <div>
                        <span>HTT = Haryono Surabaya - Head Office (031-5034000) </span>
                </div>

                <div>
                        <span>PSD = Haryono Surabaya - Panglima Sudirman (031-5325800)</span>
                </div>

                <div>
                        <span>KBR = Haryono Jakarta - Kebon Sirih (021-3920808)</span>
                </div>

                <div>
                        <span>KLP = Haryono Jakarta - Kelapa Gading (021-45845600)</span>
                </div>

                <div>
                        <span>KHR = Haryono Malang - Kahuripan (0341-367500)</span>
                </div>

                <div class="mb-3">
                        <span>PDN = Haryono Semarang - Thamrin (024-8444000)</span>
                </div>
        </div>

        <div class="container mt-3 border-0 border-b border-dotted border-black">
                <div class="mb-3">
                        <button class="btn btn-rounded btn-success"><i class="fas fa-plus"></i> Add Notes</button>
                </div>
        </div>

        <div class=" w-9/12 container mt-10 ">
                <div class="mb-3">
                        <span class="font-bold"><h2>Log</h2></span>
                </div>

                <div class="table" id="results">

                       

                        <div class='table_row'>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell '>31 Mar 2019 19:37</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell '>sakuratoursby@gmail.com :: sakuramw</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>Send Voucher to Customer - sakuratoursby@gmail.com</div>
                                </div>
                        </div>

                        <div class='table_row'>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell '>31 Mar 2019 19:37</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell '>sakuratoursby@gmail.com :: sakuramw</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>Send Voucher to Hotel - info-pop-airportjakarta@tauzia.com</div>
                                </div>
                        </div>

                        <div class='table_row'>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell '>31 Mar 2019 19:37</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell '>sakuratoursby@gmail.com :: sakuramw</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>PRINT/ISSUED by User : sakuratoursby@gmail.com</div>
                                </div>
                        </div>

                        <div class='table_row'>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell '>31 Mar 2019 19:36</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell '>sakuratoursby@gmail.com :: sakuramw</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left'>SUBMIT INSTANT CONFIRM - email sent to info-pop-airportjakarta@tauzia.com</div>
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