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
            <span class="span_title"><h2>Invoice List</h2></span>           
        </div>
    </div>

    <div class="flex md-4">
        <div class="w-4/12 bg-red">
            <?php 
            include(base_path.'/component/padding.php');
            ?>
        </div>

        <div class="w-4/12 items-center justify-center flex">
            <div>
                    Invoice No: 
                    <input type="text" class="textareasm border border-black">
                    <button class="btn btn-sm btn-rounded btn-light">Search</button>
            </div>
        </div>
        
        <div class="w-4/12 bg-blue items-center justify-end flex">
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
                            <div class='table_header'>Invoice #</div>
                            <div class='table_header'>Invoice Date</div>
                            <div class='table_header'>Airline</div>
                            <div class='table_header'>Guest Name</div>
                            <div class='table_header'>Ticket #</div>
                            <div class='table_header'>Resv. #</div>
                            <div class='table_header'>Curr</div>
                            <div class='table_header'>Total Price</div>
                            <div class='table_header'>Issued By</div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Invoice #</div>
                                <div class='table_cell'>
                                   <span onclick="window.location.href = '<?=root_path?>/pages/alinvoice/alinvoice_detail.php';" class="span_blue_link">HK0119001588</span> 
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Invoice Date</div>
                                <div class='table_cell'>31 Mar 2019 16:48</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Airline</div>
                                <div class='table_cell'>Citilink</div>
                            </div>  
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'>MS TIKA NIR WIDYANI</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Ticket #</div>
                                <div class='table_cell'>&nbsp</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv. #</div>
                                <div class='table_cell'>
                                   <span onclick="window.location.href = '<?=root_path?>/pages/alreservation/alreservation_detail.php';" class="span_blue_link">19088398</span> 
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Curr</div>
                                <div class='table_cell'>IDR</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Total Price</div>
                                <div class='table_cell'>1,362,000</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Issued By</div>
                                <div class='table_cell'>LENNA-HO</div>
                            </div>
                        </div>  


                        
                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Invoice #</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Invoice Date</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Airline</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Ticket #</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv. #</div>
                                <div class='table_cell'> </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Curr</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Total Price</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Issued By</div>
                                <div class='table_cell'></div>
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