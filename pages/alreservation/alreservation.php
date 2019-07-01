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
    
    <div class="w-full">
        <div class="flex md-4">
            

                <div class="my-2 px-1">
                        <input type="checkbox" class="check" id="Check11"  data-label="to">
                        <label class="span_blue1" for="Check11">
                            Only Me
                        </label>          
                </div>

                <div class="my-2 px-1">
                        <input type="checkbox" class="check" id="Check13"  data-label="to" checked>
                        <label class="span_blue1" for="Check13">
                            Branch
                        </label>                              
                </div>

                <div class="my-2 px-1">
                        <input type="checkbox" class="check" id="Check14"  data-label="to" checked>
                        <label class="span_blue1" for="Check14">
                            Agent
                        </label>                              
                </div>

                <div class="my-2 px-1">
                        <input type="checkbox" class="check" id="Check15"  data-label="to" checked>
                        <label class="span_blue1" for="Check15">
                            Corporate
                        </label>                              
                </div>

                <div class="my-2 px-1">
                        <input type="checkbox" class="check" id="Check16"  data-label="to" checked>
                        <label class="span_blue1" for="Check16">
                            FIT
                        </label>                              
                </div>

                <div class="my-2 px-1">
                        <input type="checkbox" class="check" id="Check17"  data-label="to" checked>
                        <label class="span_blue1" for="Check17">
                            Spesial Customer
                        </label>                              
                </div>

           

        </div>
    </div>

    <div class="flex md-4">
        <div class="w-11/12 bg-red">
            <?php 
            include(base_path.'/component/padding.php');
            ?>
        </div>
        
        <div class="w-1/12 bg-blue items-center flex justify-end">
            
                <button class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-sync-alt"></i> Reset</button>
            
        </div>

    </div>

    <div class="containter w-full bg-gray-200 p-2">
        <div class="flex md-4">

            <div class="w-full">
                <div class="w-full mt-1 bg-gray-200">
                    <div class="table" id="results">

                        <div class='theader'>
                            <div class='table_header'>Booking Date.</div>
                            <div class='table_header'>Resv.#</div>
                            <div class='table_header'>Booking Code</div>
                            <div class='table_header'>Airline</div>
                            <div class='table_header'>Dep</div>
                            <div class='table_header'>Arv</div>
                            <div class='table_header'>Std</div>
                            <div class='table_header'>Time Limit</div>
                            <div class='table_header'>Status</div>
                            <div class='table_header'>Pax Count</div>
                            <div class='table_header'>Pax Name</div>
                            <div class='table_header'>Booked by</div>
                            <div class='table_header'></div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Date.</div>
                                <div class='table_cell'>31 Mar 2019 14:16</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv.#</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = '<?=root_path?>/pages/alreservation/alreservation_detail.php';" class="span_blue_link"> 19088398</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Code</div>
                                <div class='table_cell'>UEJDXD</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Airline</div>
                                <div class='table_cell'>Citilink</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Dep</div>
                                <div class='table_cell'>HLP</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Arv</div>
                                <div class='table_cell'>MLG</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Std</div>
                                <div class='table_cell'>1 Apr 2019 12:25</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Time Limit</div>
                                <div class='table_cell'>31 Mar 2019 16:16</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-primary">Issued</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Pax Count</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Pax Name</div>
                                <div class='table_cell'>TIKA NUR WIDYANI,Ms</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Pax Count</div>
                                <div class='table_cell'>LEN
                                    <span class="badge badge-primary">HTT</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <span class="badge badge-danger">B</span>
                                </div>
                            </div>
                        </div>  

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Date.</div>
                                <div class='table_cell'>31 Mar 2019 14:16</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv.#</div>
                                <div class='table_cell'>19088398</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Code</div>
                                <div class='table_cell'>UEJDXD</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Airline</div>
                                <div class='table_cell'>Citilink</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Dep</div>
                                <div class='table_cell'>HLP</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Arv</div>
                                <div class='table_cell'>MLG</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Std</div>
                                <div class='table_cell'>1 Apr 2019 12:25</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Time Limit</div>
                                <div class='table_cell'>31 Mar 2019 16:16</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-primary">Issued</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Pax Count</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Pax Name</div>
                                <div class='table_cell'>TIKA NUR WIDYANI,Ms</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Pax Count</div>
                                <div class='table_cell'>LEN
                                    <span class="badge badge-primary">HTT</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <span class="badge badge-danger">B</span>
                                </div>
                            </div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Date.</div>
                                <div class='table_cell'>31 Mar 2019 14:16</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv.#</div>
                                <div class='table_cell'>19088398</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Code</div>
                                <div class='table_cell'>UEJDXD</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Airline</div>
                                <div class='table_cell'>Citilink</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Dep</div>
                                <div class='table_cell'>HLP</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Arv</div>
                                <div class='table_cell'>MLG</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Std</div>
                                <div class='table_cell'>1 Apr 2019 12:25</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Time Limit</div>
                                <div class='table_cell'>31 Mar 2019 16:16</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-primary">Issued</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Pax Count</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Pax Name</div>
                                <div class='table_cell'>TIKA NUR WIDYANI,Ms</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Pax Count</div>
                                <div class='table_cell'>LEN
                                    <span class="badge badge-primary">HTT</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <span class="badge badge-danger">B</span>
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