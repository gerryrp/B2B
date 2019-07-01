<html>
<?php 
    include(__DIR__."/../head.php");
?>


<body>

<?php 
include(base_path."/component/header.php");
include(base_path."/component/ads_slider.php");

?>

<div class="container max-w-full mt-10 ">

    <?php include(base_path.'/component/vertical_tabs.php'); ?>

</div>

<!-- isi content adasd -->
        <div class="container w-11/12 bg-gray-200 mx-auto mt-64 p-5">

                <div class="w-full border-0 border-b border-solid border-gray-400">
                    <div class="flex md-4">
                        <span class="span_title"><h2>Book Request</h2></span>           
                    </div>
                </div>

                <div class="w-11/12 mx-auto mt-10">
                    
                    <h4 class="border-b border-black text-sm text-white text-left bg-blue-800 p-2">Adult Pax</h4>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                #1
                        </div>

                        <div class="w-1/2 text-xs items-center flex">
                               
                        </div>

                    </div>
                    
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                            Title :
                        </div>

                        <div class="w-1/2 items-center flex">
                            <form>
                                    <select class="border border-black border-solid">
                                        <option value="">Mr.</option>
                                        <option value="">Mrs.</option>
                                        <option value="">Ms.</option>
                                    </select>
                            </form>	
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                            First Name :
                        </div>

                        <div class="w-1/2 items-center flex">
                            <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                            Last Name :
                        </div>

                        <div class="w-1/2 items-center flex">
                            <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Date Birth :
                        </div>

                        <div class="w-8/12 items-center flex">

                            <div class=" flex w-1/2">
                                <p class="my-auto mr-2"></p>
                                
                                <div>
                                    <label for="dateofbirth"></label>
                                </div>

                                <div class="flex md-4 justify-center items-center">
                                    <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Id Number :
                        </div>

                        <div class="w-8/12 items-center flex">
                                <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    
                </div>

                <div class="w-11/12 mx-auto mt-10">
                    
                    <h4 class="border-b border-black text-sm text-white text-left bg-blue-800 p-2">Contact</h4>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                            Title :
                        </div>

                        <div class="w-1/2 items-center flex">
                            <form>
                                    <select class="border border-black border-solid">
                                        <option value="">Mr.</option>
                                        <option value="">Mrs.</option>
                                        <option value="">Ms.</option>
                                    </select>
                            </form>	
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                            First Name :
                        </div>

                        <div class="w-1/2 items-center flex">
                            <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                            Last Name :
                        </div>

                        <div class="w-1/2 items-center flex">
                            <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Phone :
                        </div>

                        <div class="w-8/12 items-center flex">
                                <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Address :
                        </div>

                        <div class="w-8/12 items-center flex">
                                <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Email
                        </div>

                        <div class="w-1/2 text-xs items-center flex">
                                <input type="text" class="textarealg border border-black" value="" >
                        </div>

                    </div>
                    
                    
                </div>


                <div class="container w-full mt-3 flex justify-center">
            
                    <button onclick="window.location.href = '<?=root_path?>/pages/bairline/bookrequest.php';" class="btn btn-rounded btn-success"><i class="fas fa-check"></i> SUBMIT</button>
                              
                </div>

        </div>




<div class="bg-white"> 
</div>


<?php 
include(base_path."/component/footer.php");
?>

</body>
</html>