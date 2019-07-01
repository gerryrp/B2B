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


<div class="container max-w-full mx-auto w-11/12 bg-gray-300 p-3">

        <div class="container max-w-full"> 
                <div class="w-full border-0 border-b border-solid border-gray-400   ">
                        <span style="font-size:20px; font-weight:bold;">
                                <H2>Airline System Setting</H2>
                        </span>
                </div> 
        </div>


        <div class="container max-w-full mt-5 flex">
               <div class="w-11/12 mx-auto">
               
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Reservation Status
                        </div>

                        <div class="w-8/12 items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NOT ACTIVE">ACTIVE</option>
                                    <option value="ACTIVE">ACTIVE</option>
                                </select>
                            </form>	
                            <span class="ml-2 items-center flex text-xs">* Set this value to NOT ACTIVE to stop all reservation</span> 
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Default Admin Fee
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxs border border-black" value="5000">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Default Markup	
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxs border border-black" value="20000.00">
                        </div>

                    </div>


               </div>
        </div>

        <div class="container max-w-full mt-5 flex">
               <div class="w-11/12 mx-auto">
               
                    <h4 class="border-b border-black text-base text-black text-left p-2">Sriwijaya Air Credential</h4>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            User
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="SUBAG000939">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Password
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="*********">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Ticket Notice	
                        </div>

                        <div class="w-8/12 items-center flex">
                            <button class="btn btn-sm btn-rounded btn-light">View</button>
                        </div>

                    </div>

                </div>
        </div>

        <div class="container max-w-full mt-5 flex">
               <div class="w-11/12 mx-auto">
               
                    <h4 class="border-b border-black text-base text-black text-left p-2">Citilink Credential</h4>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            User
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="api_haryonocorp">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Password
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="*********">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Domain	
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="EXT">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Organization Code
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="0038000818">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Ticket Notice	
                        </div>

                        <div class="w-8/12 items-center flex">
                            <button class="btn btn-sm btn-rounded btn-light">View</button>
                        </div>

                    </div>

               </div>
        </div>

        <div class="container max-w-full mt-5 flex">
               <div class="w-11/12 mx-auto">
               
                    <h4 class="border-b border-black text-base text-black text-left p-2">Garuda Indonesia Credential</h4>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Request ID
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="SA3ALQS">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            OSP Name
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="Haryono Dian Pertiwi Pangsud">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Payment Key - DOKU	
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="69!!W4Lte4633">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Organization Code
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="0038000818">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Ticket Notice	
                        </div>

                        <div class="w-8/12 items-center flex">
                            <button class="btn btn-sm btn-rounded btn-light">View</button>
                        </div>

                    </div>


                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 justify-center">
    
                        <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
                              
                    </div>

               </div>
        </div>

        <div class="container max-w-full mt-5 flex">
            
            <div class="w-11/12 mx-auto">

                    <h4 class="border-b border-black text-base text-black text-left p-2">Airline Markup</h4>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2">
                        <div class="w-2/12 text-left text-sm font-bold pt-2 ">
                            Sriwijaya Air
                        </div>

                        <div class="w-10/12 items-center flex">     
                            <input type="text" class="textareaxs border border-black" value="0,00">
                        </div>   
                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2">
                        <div class="w-2/12 text-left text-sm font-bold pt-2 ">
                            Citilink
                        </div>

                        <div class="w-10/12 items-center flex">
                            <input type="text" class="textareaxs border border-black" value="0,00">
                        </div>   
                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2">
                        <div class="w-2/12 text-left text-sm font-bold pt-2 ">
                            Garuda
                        </div>

                        <div class="w-10/12 items-center flex">
                            <input type="text" class="textareaxs border border-black" value="0,00">
                        </div>   
                    </div>
                
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400    p-2 justify-center">
                        
                        <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
                            
                    </div>
            
            </div>
        
        </div>


</div>

 
<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>