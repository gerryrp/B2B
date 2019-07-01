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
        
        <div class="w-1/12 bg-blue items-center flex justify-end items-center">
            
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
                            <div class='table_header'>Hotel</div>
                            <div class='table_header'>Country</div>
                            <div class='table_header'>Check-in</div>
                            <div class='table_header'>Check-out</div>
                            <div class='table_header'>Time Limit</div>
                            <div class='table_header'>Guest Name</div>
                            <div class='table_header'>Status</div>
                            <div class='table_header'>Booked by</div>
                            <div class='table_header'></div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booking Date.</div>
                                <div class='table_cell'>14 Mar 2019 10:35</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv.#</div>
                                <div class='table_cell'>
                                 <span  onclick="window.location.href = '<?=root_path?>/pages/ireservation/intreservation_detail.php';" class="span_blue_link">19000004</span>   
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Hotel</div>
                                <div class='table_cell'>Courtyard by Marriot Taipei</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Country</div>
                                <div class='table_cell'>TW</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Check-in</div>
                                <div class='table_cell'>17 Mar 2019</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Check-out</div>
                                <div class='table_cell'>18 Mar 2019</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Time Limit</div>
                                <div class='table_cell'>14 Mar 2019 04:35</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'>LIAU AH YANG</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-primary">Issued</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booked by</div>
                                <div class='table_cell'>NIK
                                    <span class="badge badge-primary">PDN</span>
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
                                <div class='table_cell'>19 Feb 2019 10:35</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv.#</div>
                                <div class='table_cell'>19000003</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Hotel</div>
                                <div class='table_cell'>wanda Vista Dongguan</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Country</div>
                                <div class='table_cell'>CN</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Check-in</div>
                                <div class='table_cell'>25 Feb 2019</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Check-out</div>
                                <div class='table_cell'>27 Feb 2019</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Time Limit</div>
                                <div class='table_cell'>19 Feb 2019 08:46</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'>ANG MENG FATT STANLEY</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-primary">Issued</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booked by</div>
                                <div class='table_cell'>NIK
                                    <span class="badge badge-primary">PDN</span>
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
                                <div class='table_cell'>18 Feb 2019 12:02</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Resv.#</div>
                                <div class='table_cell'>19000002    </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Hotel</div>
                                <div class='table_cell'></div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Country</div>
                                <div class='table_cell'>Novotel Suzhou SIP</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Check-in</div>
                                <div class='table_cell'>CN</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Check-out</div>
                                <div class='table_cell'>20 Feb 2019</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Time Limit</div>
                                <div class='table_cell'>18 Feb 2019 06:02</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Guest Name</div>
                                <div class='table_cell'>ANG MENG FATT STANLEY</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-primary">Issued</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Booked by</div>
                                <div class='table_cell'>NIK
                                    <span class="badge badge-primary">PDN</span>
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