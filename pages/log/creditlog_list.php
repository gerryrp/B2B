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
        <div class="w-full border-0 border-b border-solid border-black">
            <div class="flex md-4">
                <span class="span_title"><h2>Credit Limit Authorization Log</h2></span>           
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

            <div class="flex w-10/12">
                <?php 
                    include("../../component/padding.php");
                ?>
            </div>


            <div class="flex w-2/12 items-center w-full justify-end">

                <div class="ml-5">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-primary" value="Rejected" ><i class="fas fa-sync-alt"></i> Reset</button>
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
                                    <div class="table_header p-2">Ammount</div>
                                    <div class="table_header p-2">Description</div>
                                    <div class="table_header p-2">Reservation No.</div>
                                    <div class="table_header p-2">User</div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-03-31 20:51:16	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Customer</div>
                                        <div class="table_cell">AMMAN MINERAL NUSA TENGGARA	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Ammount</div>
                                        <div class="table_cell">433,000,000</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">add credit extra</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Reservation No.</div>
                                        <div class="table_cell">
                                            <span class="span_blue_link"></span>
                                        </div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">FAN</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">2</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-03-30 20:38:09</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Customer</div>
                                        <div class="table_cell">ERNA HASTHINING</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Ammount</div>
                                        <div class="table_cell">7,020,000</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">remove credit extra IDR 7020000</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Reservation No.</div>
                                        <div class="table_cell">
                                            <span class="span_blue_link"></span>
                                        </div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">ERN</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">3</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-03-30 11:49:58</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Customer</div>
                                        <div class="table_cell">YURANDA TOURS</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Ammount</div>
                                        <div class="table_cell">18,370,000</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">credit extra used IDR 480000, remaining credit extra IDR 17890000</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Reservation No.</div>
                                        <div class="table_cell">
                                           <span  class="span_blue_link">19014927</span> 
                                        </div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">NVA</div>
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