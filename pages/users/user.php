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
            <span class="span_title"><h2>Master User</h2></span>           
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
                    Search : 
                    <input type="text" class="textareasm border border-black">
                    <button class="btn btn-sm btn-rounded btn-light">Search</button>
            </div>
        </div>
        
        <div class="w-4/12 bg-blue items-center justify-end flex">
            <div class="mr-1">
                <button onclick="window.location.href = '<?=root_path?>/pages/users/user_add.php';" class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                <button class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-sync-alt"></i> Reset</button>
            </div>
        </div>

    </div>

    <div class="w-full bg-gray-300 p-3 flex border-0 border-b border-solid border-gray-400">

        <div class="w-1/2 flex text-xs">
             <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck1"  data-label="All">
                    <label class="" for="dropdownCheck1">
                        All
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="Agent">
                    <label class="" for="dropdownCheck2">
                        Agent
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck3"  data-label="Corporate">
                    <label class="" for="dropdownCheck3">
                        Corporate
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck4"  data-label="Spesial Customer">
                    <label class="" for="dropdownCheck4">
                        Spesial Customer
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck5"  data-label="FIT">
                    <label class="" for="dropdownCheck5">
                        FIT
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck6"  data-label="Agent">
                    <label class="" for="dropdownCheck6">
                        Hotel
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck7"  data-label="Agent">
                    <label class="" for="dropdownCheck7">
                        Agent
                </label>	
            </div>
        </div>
    
    </div>

    <div class="w-full bg-gray-300 p-3 flex border-0 border-b border-solid border-gray-400">
        <span class="mx-3">Active Status : </span>
        <div class="w-1/2 flex text-xs">
            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck8"  data-label="All">
                    <label class="" for="dropdownCheck8">
                        All
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck9"  data-label="Deposit">
                    <label class="" for="dropdownCheck9">
                        Deposit
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck10"  data-label="Credit">
                    <label class="" for="dropdownCheck10">
                        Credit
                </label>	
            </div>
        </div>

    </div>

    <div class="w-full bg-gray-300 p-3 flex">
        <div class=" items-center flex mx-3">
            <input type="checkbox" class="check" id="dropdownCheck11"  data-label="All">
            <label class="" for="dropdownCheck11">
                    Wihtout Role
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
                            <div class='table_header'>User ID</div>
                            <div class='table_header'>Name</div>
                            <div class='table_header'>Email</div>
                            <div class='table_header'>Company Name</div>
                            <div class='table_header'>Company ID</div>
                            <div class='table_header'>Role</div>
                            <div class='table_header'></div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header User ID</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = '<?=root_path?>/pages/users/user_detail.php';" class="span_blue_link">jambireservation@astonhotelsasia.com</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Name</div>
                                <div class='table_cell'> </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>jambiinfo@astonhotelsasia.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Company Name</div>
                                <div class='table_cell'>ASTON JAMBI</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Company ID</div>
                                <div class='table_cell'>astonjambi</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Role</div>
                                <div class='table_cell'>Hotel Reservation</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-times"></i></button>
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