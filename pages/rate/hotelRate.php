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

<div class="container bg-gray-200 mx-auto w-11/12 p-5 mt-10">

        <div class="container max-w-full"> 
                <div class="w-full border-0 border-b border-solid border-gray-400">
                        <div class="flex md-4">
                        <span class="span_title"><h2>Master Rate</h2></span>           
                        </div>
                </div>
        </div>

        <div class="container max-w-full"> 
            <div class="flex justify-center p-3">
                <div class="text-left text-base items-center flex ">
                    Hotel : &nbsp
                </div>

                <div class=" items-center flex ">   
                    <input type="text" name="username" class="textarealg border border-black">
                </div>

                <div>
                    <button type="button" class="btn btn-sm btn-rounded btn-light mr-3 text-xs " value="Sign Up">Search</button>
                </div>
            </div>
        </div>

        <div class="container max-w-full mt-5 flex">
                <div class="flex w-9/12">
                        <div class="mr-1">
                                <button class="btn btn-rounded btn-light">Generate HTML</button>
                        </div>

                        <div class=" items-center flex mx-3">
                            <input type="checkbox" class="check" id="dropdownCheck1"  data-label="Show no contract">
                                <label class="" for="dropdownCheck1">
                                    Show no contract
                            </label>	
                        </div>

                        <div class="items-center flex mx-3">
                            <input type="checkbox" class="check" id="dropdownCheck2"  data-label="Show inactive contract">
                                <label class="" for="dropdownCheck2">
                                    Show inactive contract
                            </label>	
                        </div>

                        <div class="items-center flex mt-3">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value=""></option>
                                    <option value="Instant Confirm">Instant Confirm</option>
                                    <option value="XML">XML</option>
                                    <option value="ERA">ERA</option>
                                    <option value="On Request">On Request</option>
                                </select>
                            </form>										
                        </div>
                </div>

                <div class="flex w-3/12 justify-end flex"> 
                        <div class="mr-1">
                                <button class="btn btn-sm btn-rounded btn-primary"> <i class="fas fa-sync-alt"></i> Reset</button>
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
                                                        <div class='table_header'>Hotel Name</div>
                                                        <div class='table_header'>City</div>
                                                        <div class='table_header'>Contract</div>
                                                        <div class='table_header'>Allotment Type</div>
                                                        <div class='table_header'>Min. Price</div>
                                                </div>

                                                <div class='table_row'>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header No.</div>
                                                                <div class='table_cell'>1</div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Hotel Name</div>
                                                                <div class='table_cell'>
                                                                        <span onclick="window.location.href = '<?=root_path?>/pages/rate/hotelRate_detail.php';" class="span_blue_link">FAVE HOTEL LOSARI MAKASSAR (FORMERLY FAVE DAENG TOMPO)</span>
                                                                </div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header City</div>
                                                                <div class='table_cell'>MAKASSAR</div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Contract</div>
                                                                <div class='table_cell'>30</div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Allotment Type</div>
                                                                <div class='table_cell'>IC</div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Min. Price</div>
                                                                <div class='table_cell'>295,000</div>
                                                        </div>
                                                </div>  

                                        </div>
                                </div>
                        </div>

                </div>
        </div>

        <div class="container w-full mt-5">
                <?php 
                include(base_path.'/component/padding.php');
                ?>
        </div>

</div>



<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>