<html>
<?php 
    include(__DIR__.'/../head.php');
?>


<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');
?>


<!-- isi content -->

<div class="container w-11/12 bg-gray-200 mx-auto mt-10 p-5">
    
    <div class="w-full border-0 border-b border-solid border-gray-400">
        <div class="flex md-4">
            <span class="span_title"><h2>Credit Limit Authorization List</h2></span>           
        </div>
    </div>

    <div class="flex md-4">
        <div class="w-4/12 bg-red">
            <?php 
            include(base_path.'/component/padding.php');
            ?>
        </div>

        <div class="w-4/12 justify-center items-center flex">
            <div>
                    Search  
                    <input type="text" class="textareasm border border-black">
                    <button class="btn btn-sm btn-rounded btn-light">Search</button>
            </div>
        </div>
        
        <div class="w-4/12 bg-blue justify-end items-center flex">
            <div class="mr-1">
                <button onclick="window.location.href = '<?=root_path?>/pages/credit/creditlimit_add.php';"  class="btn btn-sm btn-rounded btn-success"><i class="fas fas fa-plus"></i> Add</button>
            </div>

            <div class="mr-1">
                <button class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-sync-alt"></i> Reset</button>
            </div>
        </div>

    </div>

    <div class="containter w-full bg-gray-200 p-2">
        <div class="flex md-4">

            <div class="w-full">
                <div class="w-full mt-1 bg-gray-200">
                    <div class="table" id="results">

                        <div class='theader'>
                            <div class='table_header'>No.</div>
                            <div class='table_header'>Customer</div>
                            <div class='table_header'>Cust No.</div>
                            <div class='table_header'>Amount</div>
                            <div class='table_header'>Username</div>
                            <div class='table_header'>Time</div>
                            <div class='table_header'></div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Customer</div>
                                <div class='table_cell'>
                                   <span onclick="window.location.href = '<?=root_path?>/pages/credit/creditlimit_detail.php';" class="span_blue_link">AMMAN MINERAL NUSA TENGGARA</span> 
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Cust No.</div>
                                <div class='table_cell'>4395</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Amount</div>
                                <div class='table_cell'>433.000.000</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Username</div>
                                <div class='table_cell'>FAN</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Time</div>
                                <div class='table_cell'>2019-03-31 20:15:16.086601</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button class="btn btn-sm btn-light"><i class="fas fa-window-close"></i></button>
                                    <button class="btn btn-sm btn-light"><i class="fas fa-pencil-alt"></i></button>
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