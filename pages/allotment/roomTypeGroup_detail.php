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
                        <button onclick="window.location.href = '<?=root_path?>/pages/allotment/roomTypeGroup_edit.php';" class="btn btn-sm btn-rounded btn-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                </div>

                <div class="mr-1">
                        <button class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-times"></i> Delete</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '<?=root_path?>/pages/allotment/roomTypeGroup_add.php';"  class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                </div>

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

                    <div class="w-1/2 items-center text-xs flex">
                            2 BED MANGGAR VILLAS
                    </div>

            </div>

        </div>

       
</div>

<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>