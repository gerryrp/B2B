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
                    <span class="span_title"><h2>Add API User</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container">

            <div class="flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/apiusers/apiuser.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                User ID
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Full Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Email
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Address
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <textarea rows="6" cols="33" class="border border-black rounded-lg"> </textarea>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                City
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Phone 
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Fax
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Instant Messenger
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Password
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textareasm border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Retype Password
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textareasm border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Status
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me" disable>
                                <label class="" for="dropdownCheck1">
                                       Active 
                                </label>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Company
                        </div>

                        <div class="w-1/2 items-center text-xs ">

                                <div class="w-full mt-2">
                                        <div class="w-full items-center text-xs flex">
                                                <input type="text" class="textarealg border border-black" >
                                        </div>  
                                </div>

                                <div class="w-full mt-2">
                                        <span class="text-xs">Note: please make sure Company ID for this customer/hotel is already exist. If Company ID does not exist it will be automatically filled.</span>

                                </div>
                               
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Company ID
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <div class="w-full items-center text-xs flex">
                                        <input type="text" class="textarealg border border-black" >
                                </div> 
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