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
                    <span class="span_title"><h2>Add Mark Up Period</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-2">

            <div class="flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/setting/imarksetting.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Description
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textarealg border border-black" value="">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Start Date (Inclusive)
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textareasm border border-black" value="">

                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 justify-center items-center ml-2">
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            End Date (Inclusive)
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                        <input type="text" name="username" class="textareasm border border-black" value="">
                        
                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 justify-center items-center ml-2">
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Type
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me">
                                <label class="span_blue_link mr-3" for="dropdownCheck1">
                                    nominal
                                </label>

                            <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                <label class="span_blue_link" for="dropdownCheck2">
                                    Precentage
                                </label>							
							

                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Amount
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                        <input type="text" name="username" class="textarealg border border-black" value="">
                        </div>

                </div>

        </div>

        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                       
        </div>


</div>

<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>