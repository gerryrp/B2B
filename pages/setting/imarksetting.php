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
            <div class="flex">
                <span class="span_title"><h2>Mark Up Period List</h2></span>           
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
                        <div class="table" id="results">
                                <div class='theader'>
                                    <div class='table_header'>No.</div>
                                    <div class='table_header'>Description</div>
                                    <div class='table_header'>Start Date</div>
                                    <div class='table_header'>End Date</div>
                                    <div class='table_header'>Type</div>
                                    <div class='table_header'>Amount</div>
                                    <div class='table_header'>Created</div>
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell'>1</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Description</div>
                                        <div class='table_cell'>
                                            <span onclick="window.location.href = '<?=root_path?>/pages/setting/imarksetting_detail.php';" class="span_blue_link">Dom + Inter</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Start Date</div>
                                        <div class='table_cell'>11 Jul 2018</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header End Date</div>
                                        <div class='table_cell'>31 Jan 2019</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Type</div>
                                        <div class='table_cell'>nominal</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Amount</div>
                                        <div class='table_cell'>75000</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Created </div>
                                        <div class='table_cell'>11 Jul 2018 14:20</div>
                                    </div>
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell'>2</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Description</div>
                                        <div class='table_cell'>
                                            <span onclick="window.location.href = 'hotel_detail.php';" class="span_blue_link">all season</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Start Date</div>
                                        <div class='table_cell'>20 Mar 2018</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header End Date</div>
                                        <div class='table_cell'>30 Apr 2018</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Type</div>
                                        <div class='table_cell'>nominal</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Amount</div>
                                        <div class='table_cell'>50000</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Created </div>
                                        <div class='table_cell'>20 Mar 2018 12:08</div>
                                    </div>
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell'>3</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Description</div>
                                        <div class='table_cell'>
                                            <span onclick="window.location.href = 'hotel_detail.php';" class="span_blue_link">Low season rate</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Start Date</div>
                                        <div class='table_cell'>21 Jun 2017</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header End Date</div>
                                        <div class='table_cell'>23 Dec 2017</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Type</div>
                                        <div class='table_cell'>nominal</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Amount</div>
                                        <div class='table_cell'>100000</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Created </div>
                                        <div class='table_cell'>28 Feb 2017 10:56</div>
                                    </div>
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell'>4</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Description</div>
                                        <div class='table_cell'>
                                            <span onclick="window.location.href = 'hotel_detail.php';" class="span_blue_link">Low season rate</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Start Date</div>
                                        <div class='table_cell'>1 Apr 2017</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header End Date</div>
                                        <div class='table_cell'>20 Jun 2017</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Type</div>
                                        <div class='table_cell'>nominal</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Amount</div>
                                        <div class='table_cell'>100000</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Created </div>
                                        <div class='table_cell'>28 Feb 2017 10:42</div>
                                    </div>
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell'>5</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Description</div>
                                        <div class='table_cell'>
                                            <span onclick="window.location.href = '<?=root_path?>/pages/setting/imarkdetail_detail.php';" class="span_blue_link">EXTEND LOW SEASON</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Start Date</div>
                                        <div class='table_cell'>30 Mar 2017 </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header End Date</div>
                                        <div class='table_cell'>31 Mar 2017</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Type</div>
                                        <div class='table_cell'>nominal</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Amount</div>
                                        <div class='table_cell'>100000</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Created </div>
                                        <div class='table_cell'>24 Feb 2017 11:30</div>
                                    </div>
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell'>6</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Description</div>
                                        <div class='table_cell'>
                                            <span onclick="window.location.href = 'hotel_detail.php';" class="span_blue_link">Low season rate</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Start Date</div>
                                        <div class='table_cell'>18 Feb 2017</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header End Date</div>
                                        <div class='table_cell'>29 Mar 2017</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Type</div>
                                        <div class='table_cell'>nominal</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Amount</div>
                                        <div class='table_cell'>100000</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Created </div>
                                        <div class='table_cell'>17 Feb 2017 09:39</div>
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