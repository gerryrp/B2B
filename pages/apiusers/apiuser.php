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
            <span class="span_title"><h2>Master API User</h2></span>           
        </div>
    </div>

    <div class="flex md-4 mt-5">
        <div class="w-4/12 bg-red">
           
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
                <button onclick="window.location.href = '<?=root_path?>/pages/apiusers/apiuser_add.php';" class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                <button class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-sync-alt"></i> Reset</button>
            </div>
        </div>

    </div>

    <div class="w-full bg-gray-300 p-1 flex border-0 border-b border-solid border-gray-400 mt-1    ">
        <span>Active Status : </span>
        <div class="w-1/2 flex text-xs">
            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck1"  data-label="All">
                    <label class="" for="dropdownCheck1">
                        All
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="Deposit">
                    <label class="" for="dropdownCheck2">
                        Deposit
                </label>	
            </div>

            <div class=" items-center flex mx-2">
                <input type="checkbox" class="check" id="dropdownCheck3"  data-label="Credit">
                    <label class="" for="dropdownCheck3">
                        Credit
                </label>	
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
                                   <span  onclick="window.location.href = '<?=root_path?>/pages/apiusers/apiuser_detail.php';" class="span_blue_link">backoffice</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Name</div>
                                <div class='table_cell'>Haryono Backoffice</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>milhanol068@gmail.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Company Name</div>
                                <div class='table_cell'>NUMBER ONE</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Company ID</div>
                                <div class='table_cell'>numberone</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Role</div>
                                <div class='table_cell'>API User</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>  

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>2</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header User ID</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = 'user_detail.php';" class="span_blue_link">numberoneapi<span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Name</div>
                                <div class='table_cell'>Number One</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>milhanol068z@gmail.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Company Name</div>
                                <div class='table_cell'>NUMBER ONE</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Company ID</div>
                                <div class='table_cell'>numberone</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Role</div>
                                <div class='table_cell'>API User</div>
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