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
                <span class="span_title"><h2>Hotel Rate Log</h2></span>           
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
        
            <div class="w-7/12 items-center flex">
                <span class="w-2/12 ">Rate Code : </span>
                <div class="w-full flex ml-5">
                    <form>
                        <select class="border border-black border-solid">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                    </form>	
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

                    <div class="w-full mx-auto bg-gray-400   " >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header ">No.</div>
                                    <div class="table_header ">Date</div>
                                    <div class="table_header ">Hotel</div>
                                    <div class="table_header ">Rate Code</div>
                                    <div class="table_header ">Rate Name</div>
                                    <div class="table_header ">Description</div>
                                    <div class="table_header ">User</div>
                                    <div class="table_header ">IP Address</div>
                                    
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Date</div>
                                        <div class="table_cell">2019-05-29 14:26:57</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Hotel</div>
                                        <div class="table_cell">ZEST HOTEL JEMURSARI X</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Rate Code</div>
                                        <div class="table_cell">FR 10</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Rate Name</div>
                                        <div class="table_cell">CONTRACT RATE 2019 - 2020</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">Delete exclusive customer</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">PR2</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header IP Address</div>
                                        <div class="table_cell">127.0.0.1</div>
                                    </div>

                                    
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">2</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Date</div>
                                        <div class="table_cell">2019-05-29 14:19:35</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Hotel</div>
                                        <div class="table_cell">ZEST HOTEL JEMURSARI X</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Rate Code</div>
                                        <div class="table_cell">FR 10</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Rate Name</div>
                                        <div class="table_cell">CONTRACT RATE 2019 - 2020</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">Add exclusive customer: DAIKIN APPLIED SOLUTIONS INDONESIA</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">PR 2</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header IP Address</div>
                                        <div class="table_cell">127.0.0.1</div>
                                    </div>

                                    
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">3</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Date</div>
                                        <div class="table_cell">2019-05-29 14:19:28</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Hotel</div>
                                        <div class="table_cell">ZEST HOTEL JEMURSARI X</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Rate Code</div>
                                        <div class="table_cell">FR 10</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Rate Name</div>
                                        <div class="table_cell">CONTRACT RATE 2019 - 2020</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">Delete exclusive customer</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">PR2</div>
                                    </div>
                                    <div class="table_small p-1">
                                        <div class="table_cell">Header IP Address</div>
                                        <div class="table_cell">127.0.0.1</div>
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