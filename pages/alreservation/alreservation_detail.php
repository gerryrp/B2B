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

<div class="container bg-gray-200 mx-auto w-11/12 mt-4 p-5">

        <div class="container mt-4 ">

            <div class="flex md-4">

                <div class="flex md-4 w-10/12">
                        <button  type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up">Check Credit</button> 
                </div>

            </div>

        </div>

        <div class="container mt-1 ">

                <div class="flex md-4">

                    <div class="flex md-4 w-10/12">
                            <button onclick="window.location.href = '<?=root_path?>/pages/ireservation/intreservation.php';" type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up"><i class="fas fa-angle-double-left"></i> Reservation List</button> 
                    </div>

                    <div class="flex justify-end md-4 w-10/12">
                            <button type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up">Sync Data</button> 
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
                            <span class="text-base font-bold">UEJDXD</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-xs pt-2 font-bold ">
                            Refference Number
                        </div>

                        <div class="w-1/2 text-xs items-center flex">
                            060919071207
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Airline 
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>Citilink</span>
                        </div>          

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Booking Date 
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>31 Mar 2019 14:16</span>
                        </div>          

                </div>


                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Booked By 
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>LEN</span>
                                <span class="span_blue ml-2">HTT</span>
                        </div> 
                        
                        <div class="w-4/12 items-center justify-end flex">
                                <span class="span_red">B</span>
                        </div> 

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Issued Date 
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>31 Mar 2019 14:31</span>
                        </div>          

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-sm pt-2 font-bold ">
                            Issued By   
                        </div>

                        <div class="w-8/12">
                                <div class="border-0 border-b border-solid border-gray-400">
                                        <span>LEN</span>
                                        <span class="span_blue">HTT</span>

                                        <div class="mt-2">
                                                <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-print"></i> Incoive</button>

                                                <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-file-pdf"></i> Invoice</button>

                                                <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-print"></i> Voucher</button>

                                                <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-file-pdf"></i> Voucher</button>
                                        </div>
                                </div>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Time Limit
                        </div>

                        <div class="w-4/12 items-center flex">
                                <span>31 Mar 2019 16:16</span>
                        </div>          

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs pt-2 font-bold ">
                            Status
                        </div>

                        <div class="w-4/12 items-center flex">
                            <span class="span_blue">Issued</span>
                        </div> 
                        
                </div>
                
            </div>

            <div class="w-1/2 ml-10">
                
                <h4 class="border-b border-gray-400 text-sm text-white text-left bg-blue-800 p-2">Payment Detail</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs font-bold pt-2 ">
                            Basic Fare
                        </div>

                        <div class="w-2/12 items-center flex">
                            <span>IDR</span>
                        </div>

                        <div class="w-4/12 items-center flex">
                            <span>1,190,000	</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs font-bold pt-2 ">
                            Other Fare
                        </div>

                        <div class="w-2/12 items-center flex">
                            <span>IDR</span>
                        </div>

                        <div class="w-4/12 items-center flex">
                            <span>172,000</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs font-bold pt-2 ">
                            Total Fare
                        </div>

                        <div class="w-2/12 items-center flex">
                            <span class="font-bold">IDR</span>
                        </div>

                        <div class="w-4/12 items-center flex">
                            <span class="font-bold">1,362,000</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs font-bold pt-2 ">
                            NTA HARYONO
                        </div>

                        <div class="w-2/12 items-center flex">
                            <span class="">IDR</span>
                        </div>

                        <div class="w-4/12 items-center flex">
                            <span class="">1,319,068</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-xs font-bold pt-2 ">
                            Nta
                        </div>

                        <div class="w-2/12 items-center flex">
                            <span>IDR</span>
                        </div>

                        <div class="w-4/12 items-center flex">
                            <span>1,319,068	</span>
                        </div>

                </div>
            </div>    
                
        </div>


        <div class="w-full mt-5 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold text-base"><h2>Passenger Details</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>#.</div>
                    <div class='table_header'>Title</div>
                    <div class='table_header'>Name</div>
                    <div class='table_header'>Seat</div>
                    <div class='table_header'>Ticket Number</div>
                    <div class='table_header'>Special Request</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header #.</div>
                        <div class='table_cell'>1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Title</div>
                        <div class='table_cell'>MS</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Name</div>
                        <div class='table_cell'>TIKA NUR WAHYUNI</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Seat</div>
                        <div class='table_cell'>1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Ticket Number</div>
                        <div class='table_cell'></div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Special Request</div>
                        <div class='table_cell'></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w-full mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold text-base"><h2>Flight Detail</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>#.</div>
                    <div class='table_header'>Flight Number</div>
                    <div class='table_header'>Airport From</div>
                    <div class='table_header'>Airport To</div>
                    <div class='table_header'>ST Departure</div>
                    <div class='table_header'>ST Arrival</div>
                    <div class='table_header'>Class</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header #.</div>
                        <div class='table_cell'>1</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Flight Number</div>
                        <div class='table_cell'>QG 164</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Airport From</div>
                        <div class='table_cell'>HLP</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Airport To</div>
                        <div class='table_cell'>MLG</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header ST Departure</div>
                        <div class='table_cell'>1 Apr 2019 12:25</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header ST Arrival</div>
                        <div class='table_cell'>1 Apr 2019 14:00</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Class</div>
                        <div class='table_cell'>A</div>
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
                    <div class='table_header text-left'>Name</div>
                    <div class='table_header text-left'>Phone</div>
                    <div class='table_header'>Email</div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Name</div>
                        <div class='table_cell text-left'>MS TIKA NUR WIDYANI</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Phone</div>
                        <div class='table_cell text-left'>081330450900</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Email</div>
                        <div class='table_cell'>lenna@haryono.co.id</div>
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
                                        <div class='table_cell text-left '>31 Mar 2019 14:31</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>LEN :: htt</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>ISSUED by User : LEN</div>
                                </div>
                        </div>

                        <div class='table_row'>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>31 Mar 2019 14:16</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>LEN :: htt</div>
                                </div>
                                <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-left '>SUBMIT by : LEN</div>
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