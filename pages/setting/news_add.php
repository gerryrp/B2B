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
                    <span class="span_title"><h2>Add News</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-2">

            <div class="flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/setting/news.php';" class="btn btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Title
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textarealg border border-black" value="">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Date Start
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

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Date End
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

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Content
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <textarea rows="20" cols="60" class="border border-black rounded-lg"></textarea>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Amount
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
									<label class="span_blue_link" for="dropdownCheck2">
                                           Active
									</label>	
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