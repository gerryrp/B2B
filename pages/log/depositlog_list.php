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
                <span class="span_title"><h2>Deposit Log</h2></span>           
            </div>
        </div>
    </div>

    <div class="container max-w-full mt-3">
        <div>

            <div class="w-7/12 items-center flex md-4">
                <span class="w-2/12"> Hotel :</span>
                <div class="w-full ml-5">
                        
                        <input type="text" class="textareaxl border border-black">
                        <button class="btn btn-sm btn-rounded btn-light">clear</button>
                </div>
            </div>

        </div>
    </div>

    <div class="container max-w-full mt-5"> 
        <div class="flex md-4">

            <div class="flex md-4 w-10/12">
                <?php 
                    include("../../component/padding.php");
                ?>
            </div>


            <div class="flex md-4 items-center w-full justify-end">

                <div class="ml-3">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-primary" value="Rejected" ><i class="fas fa-sync-alt"></i> Reset</button>
                </div>
                
                <div class="ml-1">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="Rejected" ><i class="fas fa-list"></i> Top Up list</button>
                </div>

            </div>

        </div>  
    </div>  

    <div class="container  max-w-full relative mt-5">

        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class=" w-full mx-auto  bg-gray-400" >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header p-2">No.</div>
                                    <div class="table_header p-2">Time</div>
                                    <div class="table_header p-2">Customer</div>
                                    <div class="table_header p-2">Description</div>
                                    <div class="table_header p-2">Ammount</div>
                                    <div class="table_header p-2">Balance</div>
                                    <div class="table_header p-2">User</div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">13 Jun 2019 13:36</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Customer</div>
                                        <div class="table_cell">FAST TOUR & TRAVEL ( DP )</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell text-left">Reservation #19014962 booked in cancelation policy</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Ammount</div>
                                        <div class="table_cell">
                                           <span class="span_danger">-155,000</span> 
                                        </div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Balance</div>
                                        <div class="table_cell">855,960	</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">PR2</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">2</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">13 Jun 2019 13:36</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Customer</div>
                                        <div class="table_cell">FAST TOUR & TRAVEL ( DP )</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell text-left">
                                            <div>
                                                <span> Reset deposit by Administrator</span>
                                            </div>
                                            <div>
                                                <span class="font-bold">Note: </span>testing
                                            </div>
                                            
                                        </div> 
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Ammount</div>
                                        <div class="table_cell">1,000,000</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Balance</div>
                                        <div class="table_cell">1,010,960	</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">PR2</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">3</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">31 Mar 2019 19:36</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Customer</div>
                                        <div class="table_cell">SAKURA MITRA WISATA (DP)</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell text-left">Reservation #19014960 booked in cancelation policy</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Ammount</div>
                                        <div class="table_cell">
                                            <span class="span_danger">-315,000</span> 
                                        </div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Balance</div>
                                        <div class="table_cell">2,754,744</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">sakuratoursby@gmail.com</div>
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