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
                        <span class="span_title"><h2>News List</h2></span>           
                        </div>
                </div>
        </div>

    <div class="container">
        <div class="flex md-4">

            <div class="w-1/3 bg-red">
                <?php 
                include(base_path.'/component/padding.php');
                ?>
            </div>

            <div class="mx-auto flex md-4 items-center">
                      
                    <div class="container">
                        <div class="text-small text-center">
                            Hotel
                        </div>

                        <div class="flex md-4 justify-center items-center">
                            <input type="text" class="textareasm border border-black" placeholder="Hotel" >
                            <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                        </div>
                    </div>

             </div>

            <div class="flex md-4 w-1/4 items-center justify-end ">

                <button onclick="window.location.href = '<?=root_path?>/pages/setting/news_add.php';" type="button" class="btn btn-sm btn-rounded btn-success mr-3 " value="Add"><i class="fas fa-plus"></i> Add</button>

                <button type="button" class="btn btn-sm btn-rounded btn-danger mr-3 " value="Sign Up"><i class="fas fa-sync-alt"></i> Reset</button> 
            
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
                                    <div class='table_header'>Title</div>
                                    <div class='table_header'>Date Start</div>
                                    <div class='table_header'>Date End</div>
                                    <div class='table_header'>Content</div>
                                    <div class='table_header'></div>
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>1</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Title</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/news_detail.php';" class="span_blue_link">PROMO MULIA BALI</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Date Start</div>
                                        <div class='table_cell text-left'>19-03-2019</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Date End</div>
                                        <div class='table_cell '>03-04-2019</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Content</div>
                                        <div class='table_cell '>
                                           <span class="span_success font-bold text-lg">MULIA RESORT NUSA DUA…</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-right'>
                                            <button type="button"><i class="fas fa-pencil-alt"></i></button>
                    
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>2</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Title</div>
                                        <div class='table_cell text-left'>
                                            <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">PROMO ARYADUTA MEDAN</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Date Start</div>
                                        <div class='table_cell text-left'>06-03-2019</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Date End</div>
                                        <div class='table_cell '>30-04-2019</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Content</div>
                                        <div class='table_cell '>
                                            <span class="span_danger font-bold text-lg">ARYADUTA MEDAN [*5]…</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-right'>
                                            <button type="button"><i class="fas fa-pencil-alt"></i></button>
                    
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No.</div>
                                        <div class='table_cell '>3</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Title</div>
                                        <div class='table_cell text-left'>
                                        <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">PROMO FOUR POINTS BY SHERATON BALI SEMINYAK</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Date Start</div>
                                        <div class='table_cell text-left'>18-02-2019</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Date End</div>
                                        <div class='table_cell '>30-03-2020</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Content</div>
                                        <div class='table_cell '>
                                            <span class="span_pink font-bold text-lg">FOUR POINTS BY SHERATON…</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-right'>
                                            <button type="button"><i class="fas fa-pencil-alt"></i></button>
                    
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