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
            <span class="span_title"><h2>Master City</h2></span>           
        </div>
    </div>

    <div class="flex md-4 mt-5">
        <div class="w-4/12 bg-red">
           <?php
            include(base_path.'/component/padding.php');
           ?>
        </div>

        <div class="w-4/12 items-center justify-center flex">
            <div>
                    Search : 
                    <input type="text" class="textareasm border border-black">
                    <button class="btn btn-sm btn-rounded btn-light">Search</button>
            </div>
        </div>
        
        <div class="w-4/12  bg-blue items-center justify-end flex">
            <div class="mr-1">
                <button onclick="window.location.href = '';" class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                <button class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-sync-alt"></i> Reset</button>
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
                            <div class='table_header'>Provience</div>
                            <div class='table_header'>Country</div>
                            <div class='table_header'>UpdDate</div>
                            <div class='table_header'>UpdDate</div>
                            
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Provience</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = 'branch_detail.php';" class="span_blue_link">AARGAU</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Country</div>
                                <div class='table_cell'>SWITZERLAND</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header UpdDate</div>
                                <div class='table_cell'>1990-01-01</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header UpdDate</div>
                                <div class='table_cell'></div>
                            </div>
                           
                        </div>  
                        
                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>2</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Provience</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = 'APIuser_detail.php';" class="span_blue_link">ABU DHABI</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Country</div>
                                <div class='table_cell'>UNITED ARAB EMIRATES</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header UpdDate</div>
                                <div class='table_cell'>2014-06-04</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header UpdDate</div>
                                <div class='table_cell'>SOF</div>
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