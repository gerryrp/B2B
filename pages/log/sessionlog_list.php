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
            <div class="flex">
                <span class="span_title"><h2>Session Log</h2></span>           
            </div>
        </div>
    </div>

    <div class="container max-w-full  mt-5"> 
        <div class="flex">

            <div class="w-4/12 flex">
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

            <div class="w-4/12 flex items-center justify-end">

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

                    <div class=" w-11/12 mx-auto bg-gray-400" >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header p-2">No.</div>
                                    <div class="table_header p-2">Username</div>
                                    <div class="table_header p-2">Description</div>
                                    <div class="table_header p-2">Time</div>
                                    <div class="table_header p-2">IP Address</div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Username</div>
                                        <div class="table_cell">PR 1</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">login</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-06-17 08:27:05</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header IP Address</div>
                                        <div class="table_cell">192.168.1.109</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">2</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Username</div>
                                        <div class="table_cell">PR 1</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">login</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-06-14 15:27:08</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header IP Address</div>
                                        <div class="table_cell">192.168.1.109 </div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">3</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Username</div>
                                        <div class="table_cell">PR 1</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">logout</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-06-14 15:26:59</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header IP Address</div>
                                        <div class="table_cell">192.168.1.109 </div>
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