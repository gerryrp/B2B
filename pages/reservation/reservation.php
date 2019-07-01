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
    
    <div class="container bg-gray-300">
        <div class=" flex md-4 ">

            <div class="w-11/12  flex md-4">
                <div class="mr-1">
                    <button class="btn btn-light">New</button>
                </div>
                <div class="mr-1">
                    <button class="btn btn-light"> On Progress</button>
                </div>
                <div class="mr-1">
                    <button class="btn btn-light">Confirmed</button>    
                </div>
                <div class="mr-1">
                    <button class="btn btn-light"> Not Confirmed</button>
                </div>
                <div class="mr-1">
                    <button class="btn btn-light">Time Limit</button>
                </div>
                <div class="mr-1">
                    <button class="btn btn-light">Canceled by OP</button>    
                </div>
                <div class="mr-1">
                    <button class="btn btn-light">Canceled by User</button>
                </div>
                <div class="mr-1">
                    <button class="btn btn-light">Printed</button>
                </div>
                <div class="mr-1">
                    <button class="btn btn-light">Issued</button>    
                </div>
                <div class="mr-1">
                    <button class="btn btn-light">Void</button>    
                </div>
            </div>

            <div class="w-1/12  items-center flex ">
                <div class="my-2 px-1  ">
                        <input type="checkbox" class="check" id="Check1"  data-label="to">
                        <label class="span_blue1" for="Check1">
                            All Record
                        </label>          
                </div>
            </div>
            
        </div>
    </div>

    <div class="w-full">
        <div class="flex md-4">
            

                <div class="my-2 px-1">
                        <input type="checkbox" class="check" id="Check11"  data-label="to">
                        <label class="span_blue1" for="Check11">
                            Only Me
                        </label>          
                </div>

                <div class="my-2 px-1">
                        <input type="checkbox" class="check" id="Check12"  data-label="to">
                        <label class="span_blue1" for="Check12">
                            Hotel Conf.
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
        
        <div class="w-1/12 bg-blue  flex justify-end items-center">
           
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
                            <div class='table_header'>Hotel & City</div>
                            <div class='table_header'>Cut-off Date </div>
                            <div class='table_header'>Guest Name</div>
                            <div class='table_header'>Check-in</div>
                            <div class='table_header'>Status</div>
                            <div class='table_header'>Booked by</div>
                            <div class='table_header'></div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Date.</div>
                                <div class='table_cell'>31 Mar 2019 19:36</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv.#</div>
                                <div class='table_cell'>
                                   <span onclick="window.location.href = '<?=root_path?>/pages/reservation/reservation_detail.php';" class="span_blue_link">19014960</span> 
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Hotel & City</div>
                                <div class='table_cell'>POP! HOTEL AIRPORT JAKARTA, TANGERANG</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Cut-off Date</div>
                                <div class='table_cell'>-</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'>
                                    LUKAS DJUNANTO
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Check-in</div>
                                <div class='table_cell'>2 Apr 2019</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-primary">Issued</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booked by</div>
                                <div class='table_cell'>SAKURA MITRA WISATA (DP)</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <div class="badge badge-primary tooltip tooltip-bottom">A
                                        <span class="tooltiptext">Sub Agent</span>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>  

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Date.</div>
                                <div class='table_cell'>31 Mar 2019 12:47</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv.#</div>
                                <div class='table_cell'>19014959</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Hotel & City</div>
                                <div class='table_cell'>GOLDEN TULIP HOLLAND RESORT BATU, BATU</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Cut-off Date</div>
                                <div class='table_cell'>18 Apr 2019</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'>
                                    ROBBY LINDARTANTO
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Check-in</div>
                                <div class='table_cell'>21 Apr 2019</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-primary">Issued</span> 
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booked by</div>
                                <div class='table_cell'>ULI
                                    <span class="badge badge-primary">HTT</span> 
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <div class="badge badge-danger tooltip tooltip-bottom">B
                                        <span class="tooltiptext">Branch</span>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Date.</div>
                                <div class='table_cell'>31 Mar 2019 11:41</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv.#</div>
                                <div class='table_cell'>19014958</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Hotel & City</div>
                                <div class='table_cell'>NOVOTEL BOGOR, BOGOR</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Cut-off Date</div>
                                <div class='table_cell'>14 Apr 2019 12:00</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'>CHRIS VAN ARR</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Check-in</div>
                                <div class='table_cell'>21 Apr 2019</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-success">On Progress</span> 
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booked by</div>
                                <div class='table_cell'>MAY
                                    <span class="badge badge-primary">KBR</span> 
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