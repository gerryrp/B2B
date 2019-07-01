<html>

<?php 
    include(__DIR__.'/../head.php');
?>



<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');

?>

<!-- isi content adasd -->

<div class="container bg-gray-200 mx-auto w-11/12 mt-10 p-5">
   

    <div class="container max-w-full"> 
                <div class="w-full border-0 border-b border-solid border-gray-400">
                        <div class="flex md-4">
                        <span class="span_title"><h2>Master Hotel</h2></span>           
                        </div>
                </div>
        </div>

    <div class="container max-w-full ml-5 mt-5"> 
        <div class="flex md-4">

            <div class="flex md-4 items-center w-full">

                <div class="mr-3">
                    <span>Period: </span>
                </div>
                
                <div class="mr-3 mt-3">
                    
                        <form>
                            <select class="border border-black rounded border-solid">
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </form>						
                    
                </div> 

                <div class="mt-3">
                    <div>
                        <form>
                            <select class="border border-black rounded border-solid">
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                            </select>
                        </form>						
                    </div>
                </div> 

                <div class="ml-5">
							
                    <input type="checkbox" class="check" id="dropdownCheck1"  data-label="Until">
                    <label class="span_blue_link" for="dropdownCheck1">
                            Until
                    </label>							
                
                </div>

                <div class="ml-5">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-primary" value="View Report" >View Report</button>
                </div>

                <div class="ml-5">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="Save Excel" ><i class="far fa-save"></i> Save Excel</button>
                </div>
                        
            </div>

        </div>  
    </div>  

    <div class="container  max-w-full relative mt-5">
        <div class="mb-3">
                <span class="text-sm font-bold"><h2>Periode : June 2019 </h2><span>
        </div>


        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class=" bg-gray-400   " >
                        <div class="table" id="results">
                                <div class='theader'>
                                    <div class='table_header'>No.</div>
                                    <div class='table_header'>Issued Date</div>
                                    <div class='table_header'>Issued By</div>
                                    <div class='table_header'>Confirm. No.</div>
                                    <div class='table_header'>Reserv. No.</div>
                                    <div class='table_header'>Voucher. No</div>
                                    <div class='table_header'>Guest Name</div>
                                    <div class='table_header'>Check-in</div>
                                    <div class='table_header'>Check-out</div>
                                    <div class='table_header'>R/N</div>
                                    <div class='table_header'>Net Price</div>
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell'>Total</div>
                                    </div>
                                    
                                </div>

                               
                        </div>
                    </div>

                </div>    
            </div>

        </div>

        <!-- <div class="overlay overlay-relative justify-center flex">
            <div class=" loading loading-lg mt-10">

            </div>
        </div> -->

    </div>

</div>


<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>