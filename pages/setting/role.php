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

<div class="container bg-gray-200 mx-auto w-11/12 mt-10 p-5">


    <div class="container max-w-full"> 
            <div class="w-full border-0 border-b border-solid border-gray-400">
                    <div class="flex md-4">
                    <span class="span_title"><h2>User Role List</h2></span>           
                    </div>
            </div>
    </div>

    <div class="flex mb-4 mt-3">
        <div class="w-4/12 bg-red">
            
        </div>

        <div class="w-4/12 items-center justify-center flex">
            <div>
                Search : 
                <input type="text" class="textareasm border border-black">
                <button><i class="fas fa-search"></i>   </button>     
            </div>
        </div>
        
        <div class="w-4/12 bg-blue items-center justify-end flex">
            <div class="mr-1">
                <button class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
            </div>
            <div class="mr-1">
                <button class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-sync-alt"></i> Reset</button>
            </div>
        </div>

    </div>


    <div class="container  max-w-full">
        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class="mx-auto w-full  " >
                        <div class="table text-left" id="results">
                                <div class='theader'>
                                    <div class='table_header'>No.</div>
                                    <div class='table_header'>Name</div>
                                    <div class='table_header'></div>
                                    
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell '>1</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Name</div>
                                        <div class='table_cell text-left'>
                                            <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">API User</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-right'>
                                            <button type="button"><i class="fas fa-pencil-alt"></i></button>
                                            <button type="button"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                   
                                </div>

                                
                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell '>2</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Name</div>
                                        <div class='table_cell text-left'>
                                            <span onclick="window.location.href = '<?=root_path?>/pages/setting/imarksetting_detail.php';" class="span_blue_link">Auditor</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-right'>
                                            <button type="button"><i class="fas fa-pencil-alt"></i></button>
                                            <button type="button"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                   
                                </div>

                                
                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell '>3</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Name</div>
                                        <div class='table_cell text-left'>
                                            <span onclick="window.location.href = '<?=root_path?>/pages/setting/imarksetting_detail.php';" class="span_blue_link">Branch</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-right'>
                                            <button type="button"><i class="fas fa-pencil-alt"></i></button>
                                            <button type="button"><i class="fas fa-times"></i></button>
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