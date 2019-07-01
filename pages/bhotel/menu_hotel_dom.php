<html>
<?php 
    include(__DIR__.'/../head.php');
?>


<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');
?>

<div class="container max-w-full mt-10 ">

        <?php include(base_path.'/component/vertical_tabs.php'); ?>

</div>

<div class=" mt-5 flex items-center" >
        <div class="w-6/12">
                <?php
                include(base_path.'/component/padding.php');
                ?>
        </div>

        <div class="w-6/12 flex items-center justify-end mr-8">
                <span class="mx-1"><i class="fas fa-chevron-circle-down"></i> Instant Confirmed</span>
                <span class="mx-1"><i class="fas fa-chevron-circle-down"></i> Availability</span>
                <span class="mx-1"><i class="fas fa-chevron-circle-down"></i> Sell Price</span>
                <button class="btn btn-sm btn-rounded btn-light">Sory By</button>
        </div>
       
</div>



<!-- isi content -->

        <div class="container w-11/12 bg-gray-200 mx-auto">      
           
                <div class="widefatbox mx-auto">
                        
                        <div class="container items-center flex">
                                <div class="w-4/12">
                                        <span class="font-bold text-lg" >
                                        <a href=""><h2>ZEST HOTEL JEMURSARI X <h2></a>       
                                        </span>
                                </div>

                                <div class="w-4/12 flex justify-start">
                                        <span class="text-yellow-500"> <i class="fas fa-star"></i></span>
                                        <span class="text-yellow-500"> <i class="fas fa-star"></i></span>
                                </div>
                                
                                <div class="flex justify-end w-4/12">
                                        <span class="span_blue">Email</span>
                                </div>
                        </div>
                        
                        
                                

                        <div class="flex md-4 mt-4">
                                <div class="w-1/2 ">
                                        <div>
                                                <span class="text-sm"> <i class="fas fa-map-marker-alt"></i> JL.RAYA PRAPEN 266, SURABAYA</span> 
                                        </div> 
                                        <div>
                                                <span class="text-xs"> <i class="fas fa-phone"></i> P: 031 - 9900 3888</span>
                                        </div> 
                                        <div>
                                                <span class="text-xs"> <i class="fas fa-envelope"></i>  E: engineer@haryono.co.id</span>
                                        </div>
                                        
                                        <div class="mt-4">
                                                <span class="span_blue_link">www.zesthotel.com</span>
                                        </div>
                                        
                                </div>

                                <div class="w-1/2 ">
                                        <div class="flex justify-end">
                                                <span class="span_orange text-base" >IDR 350.000</span><br>
                                        </div>

                                        <div class="flex justify-end items-center">
                                                <div class="tooltip tooltiptop">
                                                        <button class="mr-2 ">
                                                                <i class="fas fa-info-circle"></i>
                                                                <span  class="texttop">click to view allotment</span>
                                                        </button>
                                                </div>
                                                <span class="span_primary">  Available : 50 room(s)</span>
                                        </div>
                                        
                                        <button onclick="window.location.href = 'select_hotel.php';" type="button" class="btn btn-sm btn-rounded btn-light text-xs mt-2" style="float:right">select hotel</button>
                        
                                </div>
                        </div>

                        
                </div>
                
        </div>





<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>