
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
<!-- isi content -->

<div class="container w-11/12 mx-auto">

        <div class="container max-w-full">

            <div class="w-full border-0 border-b border-solid border-gray">
                <div class="flex md-4">
                    <span class="span_title"><h2>Room Type Group List</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container">
            <div class="flex md-4">

                <div class="container w-2/5">
                    <?php 
                    include(base_path.'/component/padding.php');
                    ?>
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
                    <button onclick="window.location.href = '<?=root_path?>/pages/allotment/roomTypeGroup_add.php';" type="button" class="btn btn-sm btn-rounded btn-primary mr-3  " value="Sign Up"><i class="fas fa-plus"></i> Add</button>
                    <button type="button" class="btn btn-sm btn-danger btn-rounded mr-3  " value="Sign Up"><i class="fas fa-sync-alt"></i> Reset</button> 
                </div>

            </div>
        </div>

        <div class="container max-w-full bg-white">
            <div class="flex md-4">
                    
                <div class="container w-full">
                        <div class="flex ">
    
                                <div class="bg-gray-400 w-full " >
                                    <div class="table" id="results">
                                            <div class='theader'>
                                              <div class='table_header'>No.</div>
                                              <div class='table_header'>Group Type</div>
                                              <div class='table_header'></div>                                                
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>1</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Group Type</div>
                                                    <div class='table_cell'>
                                                        <span class="span_blue_link"></span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header </div>
                                                    <div class='table_cell'>
                                                        <button><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>2</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Group Type</div>
                                                    <div class='table_cell'>
                                                        <span class="span_blue_link">--</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header </div>
                                                    <div class='table_cell'>
                                                        <button><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>3</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Group Type</div>
                                                    <div class='table_cell'>
                                                        <span class="span_blue_link">--</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header </div>
                                                    <div class='table_cell'>
                                                        <button><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>4</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Group Type</div>
                                                    <div class='table_cell'>
                                                        <span class="span_blue_link">--</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header </div>
                                                    <div class='table_cell'>
                                                        <button><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>5</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Group Type</div>
                                                    <div class='table_cell'>
                                                        <span onclick="window.location.href = '<?=root_path?>/pages/allotment/roomTypeGroup_detail.php';"  class="span_blue_link">2 BED MANGGAR VILLAS</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header </div>
                                                    <div class='table_cell'>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>6</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Group Type</div>
                                                    <div class='table_cell'>
                                                    <span class="span_blue_link">1 BED ROOM VILLA</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header </div>
                                                    <div class='table_cell'>
                                                        <button><i class="fas fa-pencil-alt"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>7</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Group Type</div>
                                                    <div class='table_cell'>
                                                        <span class="span_blue_link">1 BED</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header </div>
                                                    <div class='table_cell'>
                                                        <button><i class="fas fa-pencil-alt"></i></button>
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