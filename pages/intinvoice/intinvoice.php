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
                            <div class='table_header'>Hotel</div>
                            <div class='table_header'>Lead Guest</div>
                            <div class='table_header'>Voucher #</div>
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
                                   <span onclick="window.location.href = '<?=root_path?>/pages/intinvoice/intinvoice_detail.php';" class="span_blue_link"> HW0419000004</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Invoice Date</div>
                                <div class='table_cell'>14 Mar 2019 10:35</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Hotel</div>
                                <div class='table_cell'>Courtyard by Marriott Taipei</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Lead Guest</div>
                                <div class='table_cell'>LIAU AH YANG</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Voucher #</div>
                                <div class='table_cell'>SH7278225</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv. #</div>
                                <div class='table_cell'>
                                    <span onclick="window.location.href = '<?=root_path?>/pages/ireservation/intreservation_detail.php';" class="span_blue_link"> 19000004</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Curr</div>
                                <div class='table_cell'>IDR</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Total Price</div>
                                <div class='table_cell'>3,385,000</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Issued By</div>
                                <div class='table_cell'>Niken - THM</div>
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
                                <div class='table_cell'>Header Hotel</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Voucher #</div>
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