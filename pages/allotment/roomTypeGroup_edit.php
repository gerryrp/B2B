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

<div class="container w-11/12 bg-gray-200 mx-auto p-5">

        <div class="container w-full">

            <div class="w-full border-0 border-b border-solid border-gray-400">
                <div class="flex md-4"> 
                    <span class="span_title"><h2>Edit Room Type Group</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container">

            <div class="flex justify-end ">

                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/allotment/roomTypeGroup.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                        </div>

            </div>

        </div>

        <div class="container w-full mt-3 ">
                    
            <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                <div class="w-1/5 text-left text-sm font-bold pt-2 ">
                        Group Type
                </div>

                <div class="items-center text-xs flex">
                    <input type="text" name="username" class="textarealg border border-black" value=" 2 BED MANGGAR VILLAS">
                </div>

            </div>

        </div>

        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-undo"></i> Undo</button>
                       
        </div>

</div>

<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>