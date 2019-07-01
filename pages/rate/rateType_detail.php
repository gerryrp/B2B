<html>
<?php 
    include(__DIR__.'/../head.php');
?>

<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');

?>
<br>
<br>
<br>
<!-- isi content -->

<div class="container w-11/12 mx-auto">

        <div class="container max-w-full">

            <div class="w-full border-0 border-b border-solid border-gray-400">
                <div class="flex md-4">
                    <span class="span_title"><h2>Rate Type Detail</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-5">
            <div class="flex md-4">

                <div class="container w-2/5">
                    
                </div>

                <div class="container w-2/5 flex items-center">
            
                        <div class="text-small ">
                            Search : &nbsp
                        </div>
            
                        <div class="flex md-4">
                            <input type="text" class="textareasm border border-black" >
                            <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                        </div>
                    
                </div>

                <div class="flex w-1/5 items-center justify-end">
                    <button onclick="window.location.href = '<?=root_path?>/pages/rate/rateType.php';" type="button"  type="button" class="btn btn-sm btn-light btn-rounded mr-3 p-2 " value="List"><i class="fas fa-list"></i> List</button> 
                </div>

            </div>
        </div>

        <div class="container max-w-full bg-white mt-5">
            
                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                                Rate Code
                        </div>

                        <div class="w-1/2 text-xs items-center flex">
                                <span>KTR5</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                                Rate Name
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>Contract Rate</span>
                        </div>

                </div>
               
        </div>

</div>

<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>