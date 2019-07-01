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
    
    <div class="w-full border-0 border-b border-solid border-black">
        <div class="flex md-4">
            <span class="span_title"><h2>Sign Up List</h2></span>           
        </div>
    </div>

    <div class="w-full  justify-center items-center flex mt-1 ">
        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save Excel</button>
        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-sync-alt"></i> Reset</button>
    </div>

    <div class="flex md-4">
        <div class="w-1/3 bg-red">
            <?php 
            include(base_path.'/component/padding.php');
            ?>
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
                            <div class='table_header'>Company</div>
                            <div class='table_header'>Address</div>
                            <div class='table_header'>City</div>
                            <div class='table_header'>Contact</div>
                            <div class='table_header'>User Type</div>
                            <div class='table_header'>Status</div>
                            <div class='table_header'>Date</div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Company</div>
                                <div class='table_cell'>
                                    <span onclick="window.location.href = '<?=root_path?>/pages/signup/signup_detail.php';" class="span_blue_link">Klub Bunga Butik Resort</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Address</div>
                                <div class='table_cell'>Jl. Kartika No.1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header City</div>
                                <div class='table_cell'>Kota Batu</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Contact</div>
                                <div class='table_cell'>Mrs. Adhrieyana</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header User Type</div>
                                <div class='table_cell'>
                                    <span class="badge badge-success">Hotel</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Status</div>
                                <div class='table_cell'>
                                    <span class="badge badge-success">New</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Date</div>
                                <div class='table_cell'>29 Mar 2019 10:12</div>
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