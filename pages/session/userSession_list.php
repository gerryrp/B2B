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
            <span class="span_title"><h2>User Session List</h2></span>           
        </div>
    </div>

    <div class="flex md-4 mt-5">
        <div class="w-1/3 bg-red">
            <button class="btn btn-rounded btn-light">Clear Old Session</button>
        </div>

        <div class="w-1/2 items-center flex">
            
        </div>
        
        <div class="w-2/12 bg-blue items-center flex mt-1">
                
        </div>

    </div>

    <div class="containter w-full bg-gray-200 p-2">
        <div class="flex md-4">

            <div class="w-full">
                <div class="w-full mt-1 bg-gray-200">
                    <div class="table" id="results">

                        <div class='theader'>
                            <div class='table_header'>No.</div>
                            <div class='table_header'>Session Name</div>
                            <div class='table_header'>IP Address</div>
                            <div class='table_header'>User ID</div>
                            <div class='table_header'>Login Time</div>
                            <div class='table_header'>Last Activity</div>
                            <div class='table_header'></div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Session Name</div>
                                <div class='table_cell'>opsuv7uiqishkg97muulgdeof1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header IP Address</div>
                                <div class='table_cell'>116.84.110.21</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header User ID</div>
                                <div class='table_cell'>01cbts@gmail.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Login Time</div>
                                <div class='table_cell'>14 Dec 2018 11:56</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Last Activity</div>
                                <div class='table_cell'>14-12-2018 12:08</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button class="btn btn-sm btn-rounded btn-light">Sign Out</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>2</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Session Name</div>
                                <div class='table_cell'>ktt2mdvfs5a3icjvo91dfphf45</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header IP Address</div>
                                <div class='table_cell'>172.68.144.157</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header User ID</div>
                                <div class='table_cell'>02cbts@gmail.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Login Time</div>
                                <div class='table_cell'>21 Feb 2019 14:59</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Last Activity</div>
                                <div class='table_cell'>21-02-2019 15:22</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button class="btn btn-sm btn-rounded btn-light">Sign Out</button>
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