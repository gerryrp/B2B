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
                <div class="w-full border-0 border-b border-solid border-black">
                        <div class="flex md-4">
                        <span class="span_title"><h2>Booking Status List</h2></span>           
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


    <div class="container  max-w-full border-0 border-b border-solid border-gray-300">
        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class="mx-auto w-full  " >
                        <div class="table text-left" id="results">
                                <div class='theader'>
                                    <div class='table_header'>No.</div>
                                    <div class='table_header'>Status Code</div>
                                    <div class='table_header'>Status Name</div>
                                    <div class='table_header'>Background Color</div>
                                    <div class='table_header'>Font Color</div>
                                    <div class='table_header'></div>
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>1</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/bookingstatus_detail.php';" class="span_blue_link">WPR</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>New</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>#adff2f</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>Black</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>2</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">WHC</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>On Progress</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>#00a273</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>white</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>3</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">CTL</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>Time Limit</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>darkorange</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>Black</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>4</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">WPT</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>Confirmed</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>purple</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>white</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>5</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">NOC</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>Not Confirmed</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>#555555</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>white</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>6</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">DLC</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>Detail Changed</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>#f19973</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>black</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>7</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">COP</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>Cancel by OP</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>brown</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>white</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>8</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">CUS</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>Cancel by User</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>#d34836</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>white</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>9</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">PRT</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>Printed</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>indigo</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>white</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>10</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">SEN</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>Issued</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>#498bf4</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>white</div>
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
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>11</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Code</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">RLS</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Status Name</div>
                                        <div class='table_cell text-left'>Auto Released</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Background Color</div>
                                        <div class='table_cell '>orange</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Font Color</div>
                                        <div class='table_cell '>black</div>
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

    <div class="container max-w-full mt-3">
        <form>
            <select class="border border-black border-solid">
                <option value="0">0</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </form>						
    </div>
                            

</div>


<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>