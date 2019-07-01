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


<div class="container max-w-full mx-auto w-11/12">

        <div class="container max-w-full"> 
                <div class="w-full border-0 border-b border-solid border-gray-400">
                        <span style="font-size:20px; font-weight:bold;">
                                <H2>Add Hotel</H2>
                        </span>
                </div> 
        </div>

        <div class="container max-w-full mt-8"> 
                <div class="flex">

                    <div class="w-8/12 items-center flex"> 
                        <span class="bg-orange-400 font-bold p-2">Please input valid Reservation Email address and Allow Email for Instant Confirmation</span>
                    </div>

                    <div class="flex w-4/12 justify-end flex  ">

                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/hotel/hotel.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                        </div>

                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/users/user_add.php';" class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add User</button>
                        </div>

                    </div>

                </div>
        </div>

        <div class="container max-w-full mt-5 flex">
               <div class="w-8/12">
               
                    <h4 class="border-b border-black text-sm text-white text-left bg-blue-800 p-2">Hotel Information</h4>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Name
                        </div>

                        <div class="w-1/2 text-xs items-center flex">
                                <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Address
                        </div>

                        <div class="w-8/12 items-center flex">
                                <input type="text" class="textareaxl border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                City
                        </div>

                        <div class="w-1/2 items-center flex">
                                <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Phone
                        </div>

                        <div class="w-1/2 items-center flex">
                                <input type="text" class="textareasm border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Fax
                        </div>

                        <div class="w-1/2 items-center flex">
                                <input type="text" class="textareasm border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Hotel Group
                        </div>

                        <div class="w-1/2 items-center flex">
                                <form>
                                        <select class="border border-black border-solid rounded">
                                            <option value=""></option>
                                            <option value="">TAUZIA HOTEL</option>
                                            <option value="">ACCOR</option>
                                        </select>
                                </form>	
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Website
                        </div>

                        <div class="w-1/2 items-center flex">
                                <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Star
                        </div>

                        <div class="w-1/2 items-center flex">
                                <form>
                                        <select class="border border-black border-solid rounded">
                                                <option value=""></option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                        </select>
                                </form>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Reservation Email
                        </div>

                        <div class="w-8/12 items-center flex">
                                <input type="text" class="textareaxl border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Sales Email
                        </div>

                        <div class="w-8/12 items-center flex">
                                <input type="text" class="textareaxl border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Remarks
                        </div>

                        <div class="w-1/2 items-center flex">
                                <textarea rows="4" cols="29" class="border border-black rounded-lg"></textarea>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Admin Notes
                        </div>

                        <div class="w-1/2 items-center flex">
                                <textarea rows="4" cols="29" class="border border-black rounded-lg"></textarea>
                        </div>

                    </div>
               </div>

               <div class="w-1/3 ml-10">
                    <h4 class="border-b border-black text-sm text-white text-left bg-blue-800 p-2">&nbsp</h4>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Has Contract
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span class="span_danger font-bold">No</span>
                        </div>

                        <div>
                                <button class="btn btn-sm btn-rounded btn-light">Rate</button>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Allotment Type
                        </div>

                        <div class="w-1/3 items-center flex">
                                
                                <form>
                                        <select class="border border-black border-solid rounded">
                                            <option value="">Instant Confirm</option>
                                            <option value="">XML</option>
                                            <option value="">ERA</option>
                                            <option value="">On Request</option>
                                        </select>
                                </form>	
                
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Company ID
                        </div>

                        <div class="w-1/2 items-center flex">
                                <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Allow Email
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>
                                        <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me">
                                        <label class="" for="dropdownCheck1">
                                                Allow Email
                                        </label>
                                </span>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Reservation
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span>
                                        <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                        <label class="" for="dropdownCheck2">
                                                Disabled
                                        </label>
                                </span>
                        </div>

                    </div>

                    <div class="text-sm mt-3">
                        <p>Public Announcement</p>
                        
                        <textarea rows="4" cols="32" class="border border-black rounded-lg"></textarea>
                    </div>

               </div>
        </div>

        <div class="container w-full mt-5">

                <div class="w-full  justify-center items-center flex mt-1 ">
                        <button class="btn btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
                        <button class="btn btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                </div>

        </div>

        <div class="container max-w-full mt-5 flex">

                <div class="w-1/3">
                        <h4 class="text-base font-bold">Hotel Rooms</h4>

                        <div class="bg-gray-300 p-1 ">
                                Room Type <input type="text" class="textarealg border border-black" value="" > 
                                <button class="btn btn-sm btn-rounded btn-light"> Add</button>
                               
                        </div>     
                        <div class="bg-gray-300 border-0 border-b border-solid border-gray-400 p-1">
                                <span class="text-xs">Note: Room must be from selected drop down</span>
                        </div>
                </div>    
            

                <div class="w-1/2  ml-20">
                        <div>
                                <h4 class="text-base font-bold">Hotel Facilities</h4>
                                <div class="bg-gray-300  p-1 mb-1">
                                </div>

                                <div class="bg-gray-300 border-0 border-b border-solid border-gray-400 p-1">
                                        Facility &nbsp<input type="text" class="textarealg border border-black" value="" > 
                                        <button class="btn btn-sm btn-rounded btn-light"> Add Hotel Facility</button>
                                </div>
                        </div>
                        

                        <div class="mt-12">
                                <h4 class="text-base font-bold">Nearby Places</h4>

                                <div class="bg-gray-300  p-1 mb-1">
                                </div>

                                <div class="bg-gray-300 border-0 border-b border-solid border-gray-400 flex items-center flex p-1 ">
                                        <div class="mr-3">
                                                Place &nbsp <input type="text" class="textareaxxs border border-black" value="" > 
                                        </div>

                                        <div class="mr-3"> 
                                                <form>
                                                        <select class="border border-black border-solid rounded mt-3">
                                                                <option value="">Minute(s)</option>
                                                                <option value="">Kilometer(s)</option>
                                                        </select>
                                                </form>	
                                        </div>

                                        <div class="mr-3">
                                                to &nbsp <input type="text" class="textarealg border border-black" value="" > 
                                        </div>

                                        <button class="btn btn-sm btn-rounded btn-light"> Add</button>
                                </div>
                        </div>
                       


                </div>

                

        </div>

        <div class="container max-w-full mt-5 flex border  border-dotted border-t border-b-0 border-l-0 border-r-0 border-black">
            <div class="">
                <h4 class="text-base font-bold mt-3">&nbsp</h4>
                <span class="text-xs bg-red-600 p-1 text-white"> No user registered for this hotel </span> 
            </div>
        </div>

        <div class="container w-full mt-10">
                <div>
                        <span class="text-base font-bold"><h2>Log</h2><span>
                </div>

               <div class="bg-gray-300 text-xs mt-1">
                       No Data Found
               </div>

        </div>


</div>

        
        




<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>