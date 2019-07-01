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

            <div class="w-full border-0 border-b border-solid border-black">
                <div class="flex md-4">
                    <span class="span_title"><h2>Rate Type List</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container">
            <div class="flex md-4">

                <div class="container w-4/12">
                    <?php 
                    include(base_path.'/component/padding.php');
                    ?>
                </div>

                <div class="container w-4/12 flex items-center justify-center">
            
                        <div class="text-small ">
                            Search : &nbsp
                        </div>
            
                        <div class="flex md-4">
                            <input type="text" class="textareasm border border-black" placeholder="Hotel" >
                            <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                        </div>
                    
                </div>

                <div class="flex w-4/12 items-center justify-end">
                    <button type="button" class="btn btn-sm btn-primary btn-rounded mr-3  " value="Reset"><i class="fas fa-sync-alt"></i> Reset</button> 
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
                                              <div class='table_header'>Rate Code</div>
                                              <div class='table_header'>Rate Name</div>                                                
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>1</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Rate Code</div>
                                                    <div class='table_cell'>
                                                        <span onclick="window.location.href = '<?=root_path?>/pages/rate/rateType_detail.php';" class="span_blue_link"> KTR5</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Rate Name</div>
                                                    <div class='table_cell'>Contract Rate</div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>2</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Rate Code</div>
                                                    <div class='table_cell'>
                                                        <span class="span_blue_link"> KTR1</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Rate Name</div>
                                                    <div class='table_cell'>Contract Rate</div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header No.</div>
                                                    <div class='table_cell'>3</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Rate Code</div>
                                                    <div class='table_cell'>
                                                        <span class="span_blue_link"> KTR2</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Rate Name</div>
                                                    <div class='table_cell'>Contract Rate</div>
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