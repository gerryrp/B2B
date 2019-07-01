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
                        <button onclick="window.location.href = '<?=root_path?>/pages/alinvoice/alinvoice.php';" type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up"><i class="fas fa-angle-double-left"></i> Invoice List</button> 
                </div>

                <div class="flex md-4 ">
                        <button onclick="window.location.href = '<?=root_path?>/pages/alreservation/alreservation_detail.php';" type="button" class="btn btn-sm btn-rounded btn-light mr-3 " value="Sign Up"><i class="fas fa-angle-double-left"></i> Reservation Detail</button> 
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
                        <span class="">TK0119001588</span>
                    </div>

                    <div class="w-6/12 items-center flex">

                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-print"></i> Incoive</button>

                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-print"></i> Ticket</button>

                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-file-pdf"></i> Incoive</button>

                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-file-pdf"></i> Ticket</button>

                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                    <div class="w-2/12 text-left text-xs pt-2 font-bold ">
                        Invoice Date
                    </div>

                    <div class="w-2/12 text-xs items-center flex">
                        <span class="">31 Mar 2019 14:31</span>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                    <div class="w-2/12 text-left text-xs pt-2 font-bold ">
                        Airline
                    </div>

                    <div class="w-2/12 text-xs items-center flex">
                        <span class="">Citilink</span>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                    <div class="w-2/12 text-left text-xs pt-2 font-bold ">
                        Passenger Name
                    </div>

                    <div class="w-2/12 text-xs items-center flex">
                        <span class="">	MS tika nur widyani</span>
                    </div>

                </div>


               
            </div>

        </div>
        
        <div class="w-6/12 mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold"><h2>Passenger Detail</h2></span>
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
                        <div class='table_cell'>Header Name </div>
                        <div class='table_cell'>tika nur widyani</div>
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

        <div class="w-6/12 mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold"><h2>Passenger Detail</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header'>#.</div>
                    <div class='table_header'>Flight Number</div>
                    <div class='table_header'>Airport Form</div>
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
                        <div class='table_cell'>Header Airport Form </div>
                        <div class='table_cell'>HLP</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Airport To</div>
                        <div class='table_cell'>MLG</div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header Ticket Number</div>
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

        <div class="w-6/12 mt-8 bg-gray-200 border-0 border-b border-gray-500 ">
            <div>
                <span class="font-bold"><h2>Payment</h2></span>
            </div>

            <div class="table" id="results">

                <div class='theader'>
                    <div class='table_header text-left'>Payment Detail</div>
                    <div class='table_header'></div>
                </div>

                <div class='table_row'>
                    <div class='table_small'>
                        <div class='table_cell'>Header Payment Detail</div>
                        <div class='table_cell text-left'>
                            <span class="font-bold text-xs">Grand Total</span>
                        </div>
                    </div>
                    <div class='table_small'>
                        <div class='table_cell'>Header </div>
                        <div class='table_cell text-left'>
                            <span class="font-bold text-sm">IDR 1,362,000</span>
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