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

            <div class="w-full border-0 border-b border-solid border-black">
                <div class="flex md-4">
                    <span class="span_title"><h2>Email Template Detail</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-2">

            <div class="flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/setting/imarksetting_edit.php';" class="btn btn-rounded btn-light"><i class="fas fa-pencil-alt"></i> Edit</button>
                </div>

                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/setting/imarksetting.php';" class="btn btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Template Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            Allotment Reminder
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Subject
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            Haryono: Allotment Reminder - {{name}}
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            End Date (Inclusive)
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            2019-01-31
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Type
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            nominal
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Amount
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            75000
                        </div>

                </div>

        </div>

        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                       
        </div>


</div>

<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>