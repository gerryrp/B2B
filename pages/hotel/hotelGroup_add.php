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
<!-- isi content adasd -->

<div class="container w-11/12 mx-auto ">

        <div class="container max-w-full">

            <div class="w-full border-0 border-b border-solid border-gray-400">
                <div class="flex md-4">
                    <span class="span_title"><h2>Add Hotel Group</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container max-w-full mt-4">

                <div class="flex justify-end">
                    <button onclick="window.location.href = '<?=root_path?>/pages/hotel/hotelGroup.php';" type="button" class="btn btn-sm btn-rounded btn-danger mr-3" value="Sign Up"><i class="fas fa-list"></i> List</button> 
                </div>

        </div>

        <div class="container max-w-full mt-5 flex">
               <div class="w-full">
               
                    <h4 class="border-b border-black text-sm text-white text-left bg-blue-800 p-2">Hotel Group Information</h4>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-sm pt-2 font-bold ">
                                Name
                        </div>

                        <div class="w-8/12 text-xs items-center flex">
                            <input type="text" name="username" class="textarealg border border-black" placeholder="">
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-4/12 text-left text-sm pt-2 font-bold ">
                                Address
                        </div>

                        <div class="w-8/12 flex">
                            <textarea rows="6" cols="29" class="border border-black rounded-lg"></textarea>
                        </div>

                    </div>
                    
               </div>

        </div>

        <div class="container max-w-full mt-4 border-dotted border-0 border-b border-solid border-gray-400">

                <div class="flex justify-center">
                    <button type="button" class="btn btn-sm btn-rounded btn-light mr-3" value="Sign Up"><i class="fas fa-save"></i> Save</button> 
                    <button type="button" class="btn btn-sm btn-rounded btn-light mr-3" value="Sign Up"><i class="fas fa-undo"></i> Undo</button>
                </div>

        </div>

        <div class="container max-w-full mt-5 ">
            <span class="bg-red-600 text-white p-1">
                No hotel registered for this group
            </span>
        </div>

</div>



<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>