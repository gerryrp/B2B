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
   
    <div class="container max-w-full ml-5"> 
        <div class="w-full border-0 border-b border-solid border-black">
            <div class="flex md-4">
                <span class="span_title"><h2>Reservation Report</h2></span>           
            </div>
        </div>
    </div>

    <div class="container max-w-full ml-5 mt-5"> 
        <div class="flex md-4">

            <div class="flex md-4 items-center w-full">

                <div class="ml-5">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-primary" value="View Report" >View Report</button>
                </div>

                <div class="ml-5">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="In Progress" > In Progress</button>
                </div>
        
                <div class="ml-5">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="Accepted" > Accepted</button>
                </div>

                <div class="ml-5">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="Rejected" > Rejected</button>
                </div>
                
            </div>

        </div>  
    </div>  

    <div class="container  max-w-full relative mt-5">
        <div class="mb-3">
                <span class="text-sm font-bold"><h2>Periode : June 2019 </h2><span>
        </div>


        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class=" bg-gray-400   " >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header">#.</div>
                                    <div class="table_header">Agent Code</div>
                                    <div class="table_header">Agent Name</div>
                                    <div class="table_header">Total Unclaimed (IDR)</div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small">
                                        <div class="table_cell">Header #.</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Agent Code</div>
                                        <div class="table_cell">
                                            <span class="span_blue_link">4333</span>
                                        </div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Agent Name</div>
                                        <div class="table_cell">CAHAYA MENTARI CEMERLANG(DP)</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Total Unclaimed (IDR)</div>
                                        <div class="table_cell">5,000</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small">
                                        <div class="table_cell">Header #.</div>
                                        <div class="table_cell">2</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Agent Code</div>
                                        <div class="table_cell">
                                            <span class="span_blue_link">4037</span>
                                        </div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Agent Name</div>
                                        <div class="table_cell">3M TOUR & TRAVEL</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Total Unclaimed (IDR)</div>
                                        <div class="table_cell">5,000</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small">
                                        <div class="table_cell">Header #.</div>
                                        <div class="table_cell">3</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Agent Code</div>
                                        <div class="table_cell">
                                            <span class="span_blue_link">3448</span>
                                        </div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Agent Name</div>
                                        <div class="table_cell">ABIZAR WISATA TOURS & TRAVEL</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Total Unclaimed (IDR)</div>
                                        <div class="table_cell">35,000</div>
                                    </div>
                                </div>

                               
                        </div>
                    </div>

                </div>    
            </div>

        </div>

        <!-- <div class="overlay overlay-relative justify-center flex">
            <div class=" loading loading-lg mt-10">

            </div>
        </div> -->

    </div>

</div>


<?php 
include(base_path."/component/footer.php");
?>

</body>
</html>