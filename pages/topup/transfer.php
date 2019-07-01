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
            <span class="span_title"><h2>Top Up List</h2></span>           
        </div>
    </div>

    <div class="flex md-4">
        <div class="w-1/3 bg-red">
            
        </div>

        <div class="w-1/2 items-center flex">
            
        </div>
        
        <div class="w-2/12 bg-blue items-center justify-end flex mt-1">
                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                <label class="span_blue1" for="dropdownCheck2">
                        KlikPay Only
                </label>
        </div>

    </div>

    <div class="containter w-full bg-gray-200 p-2">
        <div class="flex md-4">

            <div class="w-full">
                <div class="w-full mt-1 bg-gray-200">
                    <div class="table" id="results">

                        <div class='theader'>
                            <div class='table_header'>No.</div>
                            <div class='table_header'>Transfer #</div>
                            <div class='table_header'>Customer</div>
                            <div class='table_header'>Status</div>
                            <div class='table_header'>Via</div>
                            <div class='table_header'>Incoming DP</div>
                            <div class='table_header'>Balance</div>
                            <div class='table_header'>Date</div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Transfer #</div>
                                <div class='table_cell'>
                                    <span  onclick="window.location.href = '<?=root_path?>/pages/topup/transfer_detail.php';" class="span_blue_link">1903300004</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Customer</div>
                                <div class='table_cell'>
                                    <span  onclick="window.location.href = '<?=root_path?>/pages/log/depositlog_list.php';" class="span_blue_link">RODEX HOLIDAY (DP)</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-fit">Received</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Via</div>
                                <div class='table_cell'>BCA KlikPat</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Incoming DP</div>
                                <div class='table_cell'>1,200,000</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Balance</div>
                                <div class='table_cell'>3,263,199	</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Date</div>
                                <div class='table_cell'>30 Mar 2019 21:14</div>
                            </div>
                        </div>  


                        
                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Transfer #</div>
                                <div class='table_cell'>
                                    <span class="span_blue_link">1903300004</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Customer</div>
                                <div class='table_cell'>
                                    <span class="span_blue_link">RODEX HOLIDAY (DP)</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-fit">Received</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Via</div>
                                <div class='table_cell'>Manual Transfer</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Incoming DP</div>
                                <div class='table_cell'>1,903,901</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Balance</div>
                                <div class='table_cell'>2,063,199</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Date</div>
                                <div class='table_cell'>30 Mar 2019 15:55</div>
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