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
                        <button onclick="window.location.href = '<?=root_path?>/pages/ireservation/intreservation.php';" type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up"><i class="fas fa-angle-double-left"></i> Reservation List</button> 
                </div>

                </div>

        </div>

        <div class="container max-w-full mt-5 flex">
            <div class="w-1/2">
                
                <h4 class="border-b border-gray-400 text-sm text-white text-left bg-blue-800 p-2">Booking Information</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs pt-2 font-bold ">
                            Booking Code
                        </div>

                        <div class="w-1/2 text-xs items-center flex">
                            <span class="text-base font-bold">19000004</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs pt-2 font-bold ">
                            Refference
                        </div>

                        <div class="w-1/2 text-xs items-center flex">
                            SH7278225
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Booked By 
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>NIK</span>
                                <span class="span_blue ml-2">PDN</span>
                        </div>          

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Booked Date 
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>14 Mar 2019 10:35</span>
                        </div>          

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                                <div>Free Cancel</div>
                                <div>Deadline</div>
                        </div>

                        <div class="w-4/12 text-xs items-center mt-2">
                                <div>14 Mar 2019 10:35(System Time)</div>
                                <div>14 Mar 2019 11:35(Hotel Time)</div>
                        </div>          

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Issued By 
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>NIK</span>
                                <span class="span_blue ml-2">PDN</span>
                        </div>          

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Issued Date 
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>14 Mar 2019 10:35</span>
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

                                                <button class="btn btn-rounded btn-light"><i class="fas fa-file-pdf"></i> Voucher</button>
                                        </div>
                                </div>
                        </div>

                </div>
                
            </div>

            <div class="w-1/2 ml-10">
                
                <h4 class="border-b border-gray-400 text-sm text-white text-left bg-blue-800 p-2">Hotel Info</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                            Name
                        </div>

                        <div class="w-1/2 items-center flex">
                            <span>Courtyard by Marriott Taipei</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs font-bold pt-2 items-center flex">
                            Address	
                        </div>

                        <div class="w-8/12">
                            No 359 Section 7 Zhongxiao East Road, Taipei
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs font-bold pt-2 ">
                            Country
                        </div>

                        <div class="w-1/2 items-center flex">
                            <span>TW</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs font-bold pt-2 ">
                            Headline
                        </div>

                        <div class="w-8/12 items-center flex">
                            <span class="text-xs">	
                                In the heart of Taipei, Courtyard by Marriott Taipei is close to Nankang Software Park and Taipei World Trade Center Nangang Exhibition Hall
                            </span>
                        </div>

                </div>

            </div>
        </div>

        <div class="container max-w-full mt-5 flex">

            <div class="w-full">
                
                <h4 class="border-b border-gray-400 text-sm text-white text-left bg-blue-800 p-2">Hotel Notes</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="text-left pt-1 ">
                                <span class="text-sm">
                                Essential Information : From now on, all disposable amenities will not be available in guest 
                                rooms. The “disposable amenities” which means tooth brush, toothpaste, comb, shower cap, and
                                so on. But not including amenities which can be cleared and reused such as towel, sheet, 
                                pillow case, hair dryer, etc. Please kindly contact with At Your Service if you have request
                                for disposable amenities during your stay at Courtyard Taipei.
                                </span>
                        </div>

                </div>
                
            </div>

        </div>

        <div class="w-full mt-5 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold text-base"><h2>Cancellation Policies</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header text-left'>Description</div>
                    <div class='table_header'>Precentage</div>
                    <div class='table_header'>Deadline</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Description</div>
                        <div class='table_cell text-left'>
                                Please note that this room is non-refundable and non-amendable. If the booking is cancelled, no money will be refunded
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Precentage</div>
                        <div class='table_cell'>100%</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Deadline</div>
                        <div class='table_cell'></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w-full mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold text-base"><h2>Booking Detail</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>Qty</div>
                    <div class='table_header'>Room Type</div>
                    <div class='table_header'>Meal</div>
                    <div class='table_header'>Checkin</div>
                    <div class='table_header'>Checkout</div>
                    <div class='table_header'>Price</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Qty</div>
                        <div class='table_cell'>1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Room Group</div>
                        <div class='table_cell'>Twin/Double room - De Luxe</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Meal</div>
                        <div class='table_cell'>No meals</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Checkin</div>
                        <div class='table_cell'>17 March 2019</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Checkout</div>
                        <div class='table_cell'>18 March 2019</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Price</div>
                        <div class='table_cell'>
                               <span class="font-bold">IDR 3,385,000</span>
                        </div>
                    </div>
                    
                
                </div>

              
            </div>
        </div>

        <div class="w-full mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold text-base"><h2>Guest List</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>#.</div>
                    <div class='table_header text-left'>Name</div>
                    <div class='table_header'>Age</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header #.</div>
                        <div class='table_cell'>1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Name</div>
                        <div class='table_cell text-left'>LIAU AH YANG</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Age</div>
                        <div class='table_cell'></div>
                    </div>                    
                
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header #.</div>
                        <div class='table_cell'>2</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Name</div>
                        <div class='table_cell text-left'>LIAU AH YANG</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Age</div>
                        <div class='table_cell'></div>
                    </div>                    
                
                </div>

              
            </div>
        </div>

        <div class="w-full mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold text-base"><h2>Additional Guest Info</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>Nationality</div>
                    <div class='table_header text-left'>With Infant</div>
                    <div class='table_header'>Special Request</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Nationality</div>
                        <div class='table_cell'>ID</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header With Infant</div>
                        <div class='table_cell text-left'>No</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Special Request</div>
                        <div class='table_cell'>KINGSIZE BED</div>
                    </div>                    
                
                </div>
              
            </div>
        </div>

        
        <div class="w-full mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold text-base"><h2>Contact</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>Name</div>
                    <div class='table_header text-left'>Phone</div>
                    <div class='table_header'>Email</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Name</div>
                        <div class='table_cell'>MELISA KIK</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Phone</div>
                        <div class='table_cell text-left'>08112725454</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Special Request</div>
                        <div class='table_cell'>niken.dewi90@yahoo.co.id</div>
                    </div>                    
                
                </div>
              
            </div>
        </div>

        <div class=" w-4/12 container mt-10 ">
                <div class="mb-3">
                        <span class="font-bold"><h2>Log</h2></span>
                </div>

                <div class="table" id="results">

                        <div class='table_row'>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>14 Mar 2019 10:35</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>	NIK :: pdn	</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>issue</div>
                                </div>
                        </div>

                        <div class='table_row'>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>14 Mar 2019 10:35</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>	NIK :: pdn	</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>bok</div>
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