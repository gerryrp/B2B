<html>

<?php 
    include(__DIR__."/../head.php");
?>



<body>

<?php 
include(base_path."/component/header.php");
include(base_path."/component/ads_slider.php");

?>

<!-- isi content adasd -->

<div class="container bg-gray-200 mx-auto w-11/12 mt-10 p-5">

    <div class="container max-w-full">

        <div class="container max-w-full"> 
                <div class="w-full border-0 border-b border-solid border-gray-400">
                        <div class="flex md-4">
                        <span class="span_title"><h2>Master Hotel</h2></span>           
                        </div>
                </div>
        </div>

        <div class="container max-w-full mt-2 ml-5"> 
            <div class="flex md-4">

                    <div class="mx-auto flex md-4 items-center">
                        
                        <div class="mr-10 flex mt-3">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="All Country">All Country</option>
                                    <option value="Domestic">Domestic</option>
                                    <option value="Foreign">Foreign</option>
                                </select>
                            </form>		
                        </div> 

                        <div class="container">
                            <div class="text-small text-center">
                                Hotel
                            </div>

                            <div class="flex md-4 justify-center items-center">
                                <input type="text" class="textareasm border border-black" placeholder="Hotel" >
                                <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                            </div>
                        </div>

                        <div class="ml-10 mt-3">
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

            </div>  
        </div>  

    </div>


    <div class="container ">

        <div class="flex md-4">

            <div class="flex md-4 w-10/12">
                <?php 
                    include('../../component/padding.php');
                ?>
            </div>

            <div class="flex md-4 w-1/4 items-center justify-end ">
                <button type="button" class="btn btn-sm btn-rounded-full btn-secondary mr-3 text-xs " value="Sign Up">Incentive Report</button>
                <button onclick="window.location.href = '<?=root_path?>/pages/hotel/hotel_add.php';" type="button" class="btn btn-sm btn-rounded btn-success mr-3 " value=""><i class="fas fa-plus"></i> Add</button>
                <button type="button" class="btn btn-sm btn-rounded btn-primary mr-3 " value="Sign Up"><i class="fas fa-sync-alt"></i> Reset</button> 
            </div>

        </div>

    </div>


    <div class="container  max-w-full relative ">

        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class=" bg-gray-400   " >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header">No.</div>
                                    <div class="table_header">Name</div>
                                    <div class="table_header">Allotment Type</div>
                                    <div class="table_header">Address</div>
                                    <div class="table_header">City</div>
                                    <div class="table_header">Email</div>
                                    <div class="table_header">Star</div>
                                    <div class="table_header"></div>
                                </div>

                                <div class="table_row">

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header No</div>
                                        <div class="table_cell">1</div>
                                    </div>

                                    <div class="table_small w-2/12">
                                        <div class="table_cell">Header Name</div>
                                        <div class="table_cell">
                                            <span onclick="window.location.href = '<?=root_path?>/pages/hotel/hotel_detail.php';" class="span_blue_link">FAVE HOTEL LOSARI MAKASSAR (FORMERLY FAVE DAENG TOMPO)</span> 
                                        </div>
                                    </div>

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Allotment Type</div>
                                        <div class="table_cell">IC</div>
                                    </div>

                                    <div class="table_small w-3/12">
                                        <div class="table_cell">Header Address</div>
                                        <div class="table_cell">JL. DAENG TOMPO 28-36 MAKASSAR</div>
                                    </div>

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header City</div>
                                        <div class="table_cell">Makassar</div>
                                    </div>

                                    <div class="table_small 2/12">
                                        <div class="table_cell">Header Email</div>
                                        <div class="table_cell"> 	engineer@haryono.co.id
                                            <span class="badge badge-primary">email</span>    
                                        </div>
                                    </div>

                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Star</div>
                                        <div class="table_cell">
                                        <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="table_small w-1/2">
                                        <div class="table_cell">Header </div>
                                        <div class="table_cell">
                                            <button onclick="window.location.href = 'hotelrate_detail.php';"  class="btn btn-sm btn-light">Rate</button>
                                            <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                        </div>
                                    </div>

                                </div>

                                <div class="table_row">
                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header No</div>
                                        <div class="table_cell">2</div>
                                    </div>
                                    <div class="table_small w-3/12">
                                        <div class="table_cell">Header Name</div>
                                        <div class="table_cell">
                                            <span class="span_blue_link">Grand Clarion Hotel & Convention Kendari</span> 
                                        </div>
                                    </div>
                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Allotment Type</div>
                                        <div class="table_cell">OR</div>
                                    </div>
                                    <div class="table_small w-4/12">
                                        <div class="table_cell">Header Address</div>
                                        <div class="table_cell">Jalan Edy Sabara No.89, Kendari Barat, Lahundape, Kendari Bar., Kota Kendari, Sulawesi Tenggara 93121</div>
                                    </div>
                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header City</div>
                                        <div class="table_cell">Kendari</div>
                                    </div>
                                    <div class="table_small 2/12">
                                        <div class="table_cell">Header Email</div>
                                        <div class="table_cell">engineer@haryono.co.id
                                            <span class="badge badge-primary">email</span>    
                                        </div>
                                    </div>
                                    <div class="table_small w-1/12">
                                        <div class="table_cell">Header Star</div>
                                        <div class="table_cell flex justify-center">
                                                                           
                                        </div>
                                    </div>
                                    <div class="table_small w-1/2">
                                        <div class="table_cell">Header </div>
                                        <div class="table_cell">
                                            <button class="btn btn-sm btn-light">Rate</button>
                                            <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                        </div>
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