<html>

<?php 
    include(__DIR__.'/../head.php');
?>


<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');

?>
<br>
<br>
<br>
<!-- isi content adasd -->

<div class="container w-11/12 mx-auto">

    <div class="container max-w-full">

        <div class="w-full border-0 border-b border-solid border-gray-400">
            <div class="flex md-4">
                <span class="span_title"><h2>Room Facility List</h2></span>           
            </div>
        </div>

    </div>
            
    <div class="container mt-5">
        <div class="flex md-4">

            <div class="container w-2/5">
                   &nbsp
            </div>

            <div class="container w-2/5 flex items-center">
                
                <div class="text-small ">
                    Hotel : &nbsp
                </div>

                <div class="flex md-4">
                    <input type="text" class="textareasm border border-black" placeholder="Hotel" >
                    <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                </div>
            
            </div>

            <div class="flex w-1/5 items-center justify-end">
                <button onclick="window.location.href = '<?=root_path?>/pages/hotel/roomFacility_add.php';" type="button" class="btn btn-sm btn-rounded btn-success mr-3  " value="Sign Up"><i class="fas fa-plus"></i> Add</button>
                <button type="button" class="btn btn-sm btn-primary btn-rounded mr-3  " value="Sign Up"><i class="fas fa-sync-alt"></i> Reset</button> 
            </div>

        </div>
    </div>

    <div class="container  max-w-full bg-white mt-5">
        <div class="md-4">
                
            <div class="container">
                    <div class="flex">

                            <div class="w-full bg-gray-400 " >
                                <div class="table" id="results">
                                        <div class='theader'>
                                            <div class='table_header'>No.</div>
                                            <div class='table_header'>Facility</div>
                                            <div class='table_header'>Order</div>                                                                                         
                                            <div class='table_header'></div>                                                
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>1</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Facility</div>
                                                <div class='table_cell'></div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Order</div>
                                                <div class='table_cell'>0</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header </div>
                                                <div class='table_cell'>
                                                    <i class="fas fa-pencil-alt"></i>
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>2</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Facility</div>
                                                <div class='table_cell'>
                                                   <span onclick="window.location.href = '<?=root_path?>/pages/hotel/roomFacility_detail.php';" class="span_blue_link">1 pax</span> 
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Order</div>
                                                <div class='table_cell'>0</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header </div>
                                                <div class='table_cell'>
                                                    <i class="fas fa-pencil-alt"></i>
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>3</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Facility</div>
                                                <div class='table_cell'>
                                                   <span class="span_blue_link">100 sqm</span> 
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Order</div>
                                                <div class='table_cell'>0</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header </div>
                                                <div class='table_cell'>
                                                    <i class="fas fa-pencil-alt"></i>   
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>4</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Facility</div>
                                                <div class='table_cell'>
                                                    <span class="span_blue_link">100 SQM</span>
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Order</div>
                                                <div class='table_cell'>0</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header </div>
                                                <div class='table_cell'>
                                                    <i class="fas fa-pencil-alt"></i>
                                                    <i class="fas fa-times"></i>
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