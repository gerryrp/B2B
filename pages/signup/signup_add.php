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
                    <span class="span_title"><h2>Sign Up Details</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-2 flex">

            <div class="w-full flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/users/user.php';" class="btn btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-3 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Company Name
                        </div>

                        <div class="w-2/12 items-center text-xs flex">
                            Klub Bunga Butik Resort`  
                        </div>
                        
                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            User ID	
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" class="textarealg border border-black" value="ian_klubbunga@yahoo.com">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Full Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" class="textarealg border border-black" value="Mrs. Adhrieyana">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Email
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" class="textarealg border border-black" value="ian_klubbunga@yahoo.com">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Address	
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <textarea rows="6" cols="29" class="border border-black rounded-lg"> Jl. Kartika No. 1</textarea>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            City	
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" class="textarealg border border-black" value="Kota Batu">  
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Phone	
                        </div>

                        <div class="w-1/2  text-xs ">
                             <input type="text" class="textarealg border border-black" value="0341-594777">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Fax	
                        </div>

                        <div class="w-1/2  text-xs ">
                            <input type="text" class="textarealg border border-black" value="0341-594770">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Instant Messenger		
                        </div>

                        <div class="w-1/2  text-xs ">
                            <input type="text" class="textarealg border border-black" value="ian_klubbunga@yahoo.com">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Password
                        </div>

                        <div class="w-1/2  text-xs ">
                            <input type="text" class="textareasm border border-black" value="">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Retype Password		
                        </div>

                        <div class="w-1/2  text-xs ">
                            <input type="text" class="textareasm border border-black" value="">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Status	
                        </div>

                        <div class="w-1/2  text-xs ">
                            <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
									<label class="span_blue_link" for="dropdownCheck2">
                                        Active
									</label>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Role	
                        </div>

                        <div class="w-1/2  text-xs ">
                            <div>
                                <form>
                                    <select class="border border-black border-solid">
                                        <option value="">Checkbox 1</option>
                                        <option value="">Checkbox 2</option>
                                        <option value="">Checkbox 3</option>
                                        <option value="">Checkbox 4</option>
                                        <option value="">Checkbox 5</option>
                                    </select>
                                </form>						
                            </div>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold flex items-center  ">
                            Company		
                        </div>

                        <div class="w-1/2  text-xs ">
                            <div class="flex">
                                <div class="mr-2">
                                    <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me">
									<label class="span_blue_link" for="dropdownCheck1">
                                        Customer
									</label>
                                </div>

                                <div class="mr-2">
                                    <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
									<label class="span_blue_link" for="dropdownCheck2">
                                        Hotel
									</label>
                                </div>

                                <div class="mr-2">
                                    <input type="checkbox" class="check" id="dropdownCheck3"  data-label="remember me">
									<label class="span_blue_link" for="dropdownCheck3">
                                        Branch
									</label>
                                </div>
                                
                            </div>
                            <div class="mt-2">
                                <input type="text" class="textarealg border border-black" value="">
                            </div>
                            <div class="mt-2">
                                <span class="text-xs">
                                    Note: please make sure Company ID for this customer/hotel is already exist. If Company ID does not exist it will be automatically filled.
                                </span>
                            </div>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                    <div class="w-1/6 text-left text-xs font-bold  ">
                        Company ID	
                    </div>

                    <div class="w-1/2  text-xs ">
                        <input type="text" class="textarealg border border-black" value="">
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