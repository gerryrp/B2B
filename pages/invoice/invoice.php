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

        <div class="w-4/12  items-center justify-center flex">
            <div class="">
                    Invoice No: 
                    <input type="text" class="textareasm border border-black">
                        
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
                            <div class='table_header'>Guest Name</div>
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
                                   <span onclick="window.location.href = '<?=root_path?>/pages/invoice/invoice_detail.php';" class="span_blue_link">HW0119004746</span> 
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Invoice Date</div>
                                <div class='table_cell'>31 Mar 2019 19:37</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Hotel</div>
                                <div class='table_cell'>POP! HOTEL AIRPORT JAKARTA</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'>LUKAS DJUNANTO Mr</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Voucher #</div>
                                <div class='table_cell'>VW0119005367</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv. #</div>
                                <div class='table_cell'>
                                   <span onclick="window.location.href = '<?=root_path?>/pages/reservation/reservation_detail.php';" class="span_blue_link">19014960</span> 
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Curr</div>
                                <div class='table_cell'>IDR</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Total Price</div>
                                <div class='table_cell'>315,000</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Issued By</div>
                                <div class='table_cell'>NISA</div>
                            </div>
                        </div>  


                        
                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>2</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Invoice #</div>
                                <div class='table_cell'>
                                    <span class="span_blue_link">HW0119004745</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Invoice Date</div>
                                <div class='table_cell'>31 Mar 2019 12:47</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Hotel</div>
                                <div class='table_cell'>GOLDEN TULIP HOLLAND RESORT BATU</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'>ROBBY LINDARTANTO, Mr</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Voucher #</div>
                                <div class='table_cell'>VW0119005366</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv. #</div>
                                <div class='table_cell'> 
                                    <span class="span_blue_link">19014959</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Curr</div>
                                <div class='table_cell'>IDR</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Total Price</div>
                                <div class='table_cell'>925,000</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Issued By</div>
                                <div class='table_cell'>ULIK</div>
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