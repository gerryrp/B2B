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
                        <button onclick="window.location.href = '<?=root_path?>/pages/signup/signup_add.php';" class="btn btn-rounded btn-light"><i class="fas fa-plus"></i> Create User</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '#';"  class="btn btn-rounded btn-light">Form Sent</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '#';"  class="btn btn-rounded btn-light"><i class="fas fa-times"></i> Delete</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '#';"  class="btn btn-rounded btn-light">Unprocess</button>
                </div>

                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/signup/signup_list.php';" class="btn btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
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
                            <span class="span_green ml-1">new</span> 
                        </div>
                        
                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            User Type	
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            Hotel
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Address	
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            Jl. Kartika No. 1
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            City	
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            Kota Batu    
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Website
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            www.klubbungabutikresort.com
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Reservation Email
                        </div>

                        <div class="w-1/2  text-xs ">
                            adhrie.yana@gmail.com
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Contact Person
                        </div>

                        <div class="w-1/2  text-xs ">
                            Mrs. Adhrieyana
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Phone	
                        </div>

                        <div class="w-1/2  text-xs ">
                            0341-594777
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Fax	
                        </div>

                        <div class="w-1/2  text-xs ">
                            0341-594770
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Email		
                        </div>

                        <div class="w-1/2  text-xs ">
                            ian_klubbunga@yahoo.com
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            IM		
                        </div>

                        <div class="w-1/2  text-xs ">
                            
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Notes		
                        </div>

                        <div class="w-1/2  text-xs ">
                            
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold flex items-center  ">
                            Log		
                        </div>

                        <div class="w-1/2  text-xs ">
                            <div>
                                29 Mar 2019 10:12
                            </div>
                            <div>
                                36.85.48.251
                            </div>
                        </div>

                </div>

        </div>     

        <div class="container w-full mt-5 border-dotted border-b border-solid border-black">
            <div>
                <button class="btn btn-sm btn-rounded btn-light">Note</button> 
            </div>
            <div>
                <textarea rows="3" cols="29" class="border border-black rounded-lg"></textarea>
            </div>
            <div>
                <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Submit</button>
            </div> 
        </div> 

        
        <div class=" w-9/12 container mt-3">
                <div class="mb-3">
                        <span class="font-bold"><h2>Note Log</h2></span>
                </div>
        </div>  

</div>

<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>