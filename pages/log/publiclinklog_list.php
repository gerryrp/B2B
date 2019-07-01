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
                <span class="span_title"><h2>Publik Link Logs</h2></span>           
            </div>
        </div>
    </div>

    <div class="container max-w-full mt-5"> 
        <div class="flex ">

            <div class="flex  w-4/12">
                <?php 
                    include("../../component/padding.php");
                ?>
            </div>

            <div class="w-4/12 items-center justify-center flex">
                <div>
                        Search : 
                        <input type="text" class="textareasm border border-black">
                        <button class="btn btn-sm btn-rounded btn-light">Search</button>
                </div>
            </div>

            <div class="flex w-4/12  items-center justify-end">

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

                    <div class=" w-full mx-auto bg-gray-400" >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header p-2">No.</div>
                                    <div class="table_header p-2">Time</div>
                                    <div class="table_header p-2">IP Address</div>
                                    <div class="table_header p-2">Hotel</div>
                                    <div class="table_header p-2">Reserv No.</div>
                                    <div class="table_header p-2">Description</div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-03-31 13:19:54</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header IP Address</div>
                                        <div class="table_cell">66.96.244.92 </div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Hotel</div>
                                        <div class="table_cell">THE SHALIMAR BOUTIQUE HOTEL</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Reserv No.</div>
                                        <div class="table_cell">19014433</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell"></div>
                                    </div>
                                </div>

                                
                                <div class="table_row">
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">2</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-03-31 12:57:56	</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header IP Address</div>
                                        <div class="table_cell">222.165.222.202 	</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Hotel</div>
                                        <div class="table_cell">CIPUTRA JAKARTA HOTEL</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Reserv No.</div>
                                        <div class="table_cell">19014946</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell"></div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">3</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-03-31 12:57:56</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header IP Address</div>
                                        <div class="table_cell">222.165.222.202 </div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Hotel</div>
                                        <div class="table_cell">CIPUTRA JAKARTA HOTEL</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Reserv No.</div>
                                        <div class="table_cell">19014946</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">Update success</div>
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