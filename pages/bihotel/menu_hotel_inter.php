<html>
<head>
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


<div class="flex md-4 mt-5 ">
        <div class="w-full border-0 border-b border-solid border-gray-400">
            <span class="span_title text-xl "><h2>Search Hotel</h2><span>
        </div>
</div>

<div class="border-0 border-b border-solid border-black mt-4 ">
        <?php 
        include(base_path.'/component/filter.php');
        ?>
</div>


<?php
include(base_path.'/component/padding.php');
?>

<!-- isi content -->

<div class="container max-w-full bg-white">

<div class="flex flex-wrap overflow-hidden md-4  ">

        <div class="w-1/6 overflow-hidden sm: md:w-1/6 lg:w-1/6 xl:w-1/6 h-32">
            <span style="font-size:20px; font-weight:bold;">
                 
            </span>
        </div>


        <div class="w-1/2 overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 bg-blue-200 border-r-2 border-black p-4" >
                <span class="font-bold">
                        FAVE HOTEL TANAH ABANG (EX. NEO TANAH ABANG)
                </span><br>
                <span style="font-size: 11px; font-weight:normal"> 
                    JL. CIDENG TIMUR NO. 58, JAKARTA <br>
                    P: 021 3483 4933<br>
                    E: tanahabangcidengreservationist@favehotels.com<br>
                </span><br>
                <a href="https://www.favehotels.com/en/hotel/view/117/favehotel-tanah-abang---cideng" class="span_blue1" style="text-decoration:none;vertical-align:middle"> www.favehotels.com</a>
        </div>

        <div class="w-1/4 overflow-hidden sm:w-1/5 md:w-1/5 lg:w-1/6 xl:w-1/6 bg-blue-100 p-4">

                <button type="button" class="btn-primary" style="float:right" >Email</button><br><br><br>                                
                <span class="span_orange" style="float:right">IDR 340.000</span><br>
                <a href="" class="span_primary" style="float:right">Available : 97 room(s)</a><br>
                <button type="button" class="btn-secondary" style="float:right">select hotel</button>
        </div>

</div>


<br>

<div class="flex flex-wrap overflow-hidden md-4">

        <div class="w-1/6 overflow-hidden sm: md:w-1/6 lg:w-1/6 xl:w-1/6 h-32">
            <span style="font-size:20px; font-weight:bold;">
                 
            </span>
        </div>

        <div class="w-1/2 overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 bg-blue-200 border-r-2 border-black p-4" >
                <span class="font-bold">
                        FAVE HOTEL TANAH ABANG (EX. NEO TANAH ABANG)
                </span><br>
                <span style="font-size: 11px; font-weight:normal"> 
                    JL. CIDENG TIMUR NO. 58, JAKARTA <br>
                    P: 021 3483 4933<br>
                    E: tanahabangcidengreservationist@favehotels.com<br>
                </span><br>
                <a href="https://www.favehotels.com/en/hotel/view/117/favehotel-tanah-abang---cideng" class="span_blue1" style="text-decoration:none;vertical-align:middle"> www.favehotels.com</a>
        </div>

        <div class="w-1/4 overflow-hidden sm:w-1/5 md:w-1/5 lg:w-1/6 xl:w-1/6 bg-blue-100 p-4">
                <button type="button" class="btn-primary" style="float:right" >Email</button><br><br><br>                                
                <span class="span_orange" style="float:right">IDR 340.000</span><br>
                <a href="" class="span_primary" style="float:right">Available : 97 room(s)</a><br>
                <button type="button" class="btn-secondary" style="float:right">select hotel</button>
        </div>

</div>

</div>

                



<?php 
include(base_path.'/component/footer.php');
?>



</body>
</html>