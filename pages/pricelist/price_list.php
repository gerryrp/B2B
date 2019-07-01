<html>

<?php 
    include(__DIR__."/../head.php");
?>



<body>

<?php 
include(base_path."/component/header.php");
include(base_path."/component/ads_slider.php");

?>

<!-- isi content adasd -->

<div class="container bg-gray-200 mx-auto w-11/12 mt-10 p-5">

    <div class="container max-w-full"> 
            <div class="w-full border-0 border-b border-solid border-gray-400">
                    <div class="flex md-4">
                    <span class="span_title"><h2>Price List</h2></span>           
                    </div>
            </div>
    </div>


    <div class="container max-w-full mt-2 flex items-center ">

        <div class="w-4/12 flex">
            <div class="items-center flex">
                <span>City</span>
            </div>

            <div class="ml-20 mt-3">
                <div>
                    <form>
                        <select class="border border-black border-solid rounded ">
                            <option value="SURABAYA"> SURABAYA</option>
                            <option value="JAKARTA"> JAKARTA</option>
                            <option value="YOGYAKARTA"> YOGYAKARTA</option>
                            <option value="BANDUNG"> BANDUNG</option>
                            <option value="LABUAN BAJO - MUTIARA AIRPORT"> LABUAN BAJO - MUTIARA AIRPORT</option>
                        </select>
                    </form>						
                </div>
            </div>
        </div>

        <button class="btn btn-sm btn-rounded btn-light"> <i class="fas fa-file-pdf"></i> PDF</button>
         
        <button class="btn btn-sm btn-rounded btn-light"> <i class="fas fa-file-excel"></i> Excel</button>

    </div>

    <div class="container max-w-full mt-5"> 
            <div class="w-full border-0 border-b border-solid border-gray-400">
                    <div class="flex justify-center">
                    <span class="font-bold text-xl italic"><h2>SURABAYA</h2></span>           
                    </div>
            </div>
    </div>



    <div class="container  max-w-full relative ">

        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class=" w-full bg-gray-400   " >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header">Hotel Address</div>
                                    <div class="table_header">Rate Remarks</div>
                                    <div class="table_header">Type</div>
                                    <div class="table_header">Facility</div>
                                    <div class="table_header">Price</div>
                                    <div class="table_header">Type</div>
                                    <div class="table_header">Facility</div>
                                    <div class="table_header">Price</div>
                                </div>

                                <div class="table_row">

                                    <div class="table_small w-2/12">
                                        <div class="table_cell">Header Hotel Address</div>
                                        <div class="table_cell ">

                                            <div>
                                                <span class="font-bold">AMARIS EMBONG MALANG SURABAYA [*2]</span>
                                            </div>

                                            <div>
                                                <span>Jl. Kedungdoro No 1-3 Surabaya, SURABAYA</span>
                                            </div>

                                            <div>
                                                <span>P: 031 548 2299 </span>
                                            </div>

                                            <div>
                                                <span>F: 031 549 2299</span>
                                            </div>

                                            <div>
                                                <span>engineer@haryono.co.id</span>
                                            </div>

                                            <div class="mt-2">
                                                <span>CANCELLATION :</span>
                                            </div>

                                            <div>
                                                <span>LOW SEASON 5 DAYS PRIOR TO ARIVAL</span>
                                            </div>

                                            <div>
                                                <span>HIGH SEASON 16 DAYS PRIOR TO ARIVAL</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="table_small w-3/12">
                                        <div class="table_cell">Header Rate Remarks</div>
                                        <div class="table_cell">
                                            
                                            <div class="p-2">
                                                <span>EFF : 1 APR 19 - 31 MAR 20 [BF] [ALL MARKET] "CONTRACT RATE 2019 - 2020" "EXCEPT HIGH/PEAK SEASON"</span>
                                            </div>

                                            <div class=" border-0 border-t border-solid border-black mt-10 p-2 ">
                                                <span>EFF : 31 DEC 19 [BF] [ALL MARKET] "NEW YEAR EVE"</span>
                                                <span class="span_danger">NO CANCEL, NO REFUND AND NO AMEND</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Type</div>
                                        <div class="table_cell text-left">
                                            <div class="border-0 border-b border-solid border-black p-1">
                                                <span class="font-bold text-xs">SMART ROOM</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2">
                                                <span class="font-bold text-xs">SMART SUPERIOR KINGSIZE</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2">
                                                <span class="font-bold text-xs">SMART HOLLYWOOD</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3">
                                                <span class="font-bold text-xs">SMART SUPERIOR KINGSIZE</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3">
                                                <span class="font-bold text-xs">SMART HOLLYWOOD</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3">
                                                <span class="font-bold text-xs">SMART HOLLYWOOD</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Facility</div>
                                        <div class="table_cell text-left">

                                            <div class="border-0 border-b border-solid border-black p-1">
                                                <span class=" text-xs">breakfast for 2</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class=" text-xs">breakfast for 2</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class=" text-xs">breakfast for 2</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">breakfast for 2</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">breakfast for 2</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">breakfast for 2</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Price</div>
                                        <div class="table_cell text-right">

                                            <div class="border-0 border-b border-solid border-black p-1">
                                                <span class=" text-xs">315.000</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class=" text-xs">0</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class=" text-xs">0</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">530.000</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">0</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">0</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Type</div>
                                        <div class="table_cell text-left">

                                            <div class="border-0 border-b border-solid border-black p-1">
                                                <span class="font-bold text-xs">SMART SUPERIOR</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class="font-bold text-xs">EXTRA BED</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class="font-bold text-xs">&nbsp</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class="font-bold text-xs">SMART SUPERIOR</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class="font-bold text-xs">EXTRA BED</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class="font-bold text-xs">&nbsp</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Facility</div>
                                        <div class="table_cell">

                                            <div class="border-0 border-b border-solid border-black p-1">
                                                <span class=" text-xs">breakfast for 2</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class=" text-xs">breakfast for 1</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class=" text-xs">&nbsp</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">breakfast for 2</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">breakfast for 1</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">&nbsp</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Price</div>
                                        <div class="table_cell text-right">

                                            <div class="border-0 border-b border-solid border-black p-1">
                                                <span class=" text-xs">355.000</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class=" text-xs">0</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-2 p-2">
                                                <span class=" text-xs">&nbsp</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">570.000</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">0</span>
                                            </div>

                                            <div class="border-0 border-b border-solid border-black mt-3 p-2">
                                                <span class=" text-xs">&nbsp</span>
                                            </div>

                                        </div>
                                    </div>

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