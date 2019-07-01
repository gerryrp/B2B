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
                <div class="w-full border-0 border-b border-solid border-gray-400">
                        <span style="font-size:20px; font-weight:bold;">
                                <H2>System Setting</H2>
                        </span>
                </div> 
        </div>


        <div class="container max-w-full mt-5 flex">
               <div class="w-11/12 mx-auto">
               
                    <h4 class="border-b border-gray-400 text-base text-black text-left p-2">General Setting</h4>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Allotment Time Limit
                        </div>

                        <div class="w-8/12 text-xs items-center flex">
                            <input type="text" class="textareaxxs border border-black" value="7">
                            <span class="ml-2 items-center flex">minutes</span> 
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold flex items-center ">
                            Default Reservation CoD
                        </div>

                        <div class="items-center flex mt-3">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </form>	
                            
                        </div>

                        <div class="flex items-center">
                            <span class="ml-2 items-center flex">days before check-in</span> 
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Default Discount IDR
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxs border border-black" value="5000">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Default Discount USD	
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxxs border border-black" value="1">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Default Discount SGD
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxxs border border-black" value="1">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Sticky Info GLOBAL
                        </div>

                        <div class="w-8/12 items-center flex">
                            <textarea rows="6" cols="29" class="border border-black rounded-lg resize" ><!--<style type="text/css">@keyframes blinker {  50% { opacity: 0.5; }} </style><h2 style="color:red;animation: blinker 1s linear infinite;">SERVER MAINTENANCE!</h2><p style="font-size:16px;margin:0">Diberitahukan kepada semua user bahwa untuk keperluan maintenance maka server tidak akan bisa pada <span style="color:red;font-wight:bold"> Senin 17 Juli 2017 pukul 23:00</span> selama 1 (satu) jam.</p>-->
                            </textarea>
                            <div class="w-1/2 items-center text-xs flex ml-4">
                                <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me" disable>
                                <label class="" for="dropdownCheck1">
                                       Enabled
                                </label>
                            </div>
                        </div>



                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Sticky Info Branch <br>
                            <span class="span_red">B</span>
                        </div>

                        <div class="w-8/12 items-center flex">
                            <textarea rows="6" cols="29" class="border border-black rounded-lg resize" ><h3>haryono.co.id</h3>
                            </textarea>
                            <div class="w-1/2 items-center text-xs flex ml-4">
                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me" disable>
                                <label class="" for="dropdownCheck2">
                                       Enabled
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Sticky Info Agent <br>
                            <span class="span_blue">A</span>
                        </div>

                        <div class="w-8/12 items-center flex">
                            <textarea rows="6" cols="29" class="border border-black rounded-lg resize" ><p><h1 style="color:black"> " Sekarang anda bisa melakukan reservasi Garuda " No admin fee</p>
                            <p><h3 style="color:red">User Guide v2015 can be downloaded from <a href="https://goo.gl/UF1Z31" target="_blank">https://goo.gl/UF1Z31</a></p>
                            <p><h3 style="color:blue">airline manual guide can be downloaded from <a href="https://db.tt/Q6zdu5uJ" target="_blank">https://db.tt/Q6zdu5uJ</a></p>
                            </textarea>
                            <div class="w-1/2 items-center text-xs flex ml-4">
                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me" disable>
                                <label class="" for="dropdownCheck2">
                                       Enabled
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Sticky Info Customer <br>
                            <span class="span_blue">A</span>
                            <span class="span_yellow">C</span>
                            <span class="span_purple">F</span>
                        
                        </div>

                        <div class="w-8/12 items-center flex">
                            <textarea rows="6" cols="29" class="border border-black rounded-lg resize" ><h3 style="color:purple"><span style="color:blue">Haryono Tours and Travel sekarang menerima Top Up Deposit melalui Mandiri Clickpay dan CIMB Clicks.</span></h3>
                                <p><h3>top up via manual transfer sedang ada kendala , untuk sementara ini hanya bisa dilakukan via office hour , pukul 08.15-16.30</h3></p>
                            </textarea>
                            <div class="w-1/2 items-center text-xs flex ml-4">
                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me" disable>
                                <label class="" for="dropdownCheck2">
                                       Enabled
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Sticky Info Customer<br>
                            <span class="span_green">H</span>
                        </div>

                        <div class="w-8/12 items-center flex">
                            <textarea rows="6" cols="29" class="border border-black rounded-lg resize" ><h3 style="color:purple">User Guide v20140205 can be downloaded from <a href="https://goo.gl/7Mhk2m" target="_blank">https://goo.gl/7Mhk2m</a><br/>
                                <span style="color:blue;text-decoration:blink">Daily manage your ALLOTMENT QUOTA from Master > Allotment menu. Contact <a href="mailto:sysadmin@haryono.co.id">sysadmin@haryono.co.id</a> for more info.</span><br/>
                                <span style="color:red">Mohon JANGAN KONFIRM apabila ada salah satu HARGA/SPECIAL REQUEST/ROOM yang TIDAK KONFIRM.</span></h3>
                            </textarea>
                            <div class="w-1/2 items-center text-xs flex ml-4">
                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me" disable>
                                <label class="" for="dropdownCheck2">
                                       Enabled
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            1 USD
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxs border border-black" value="14300">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            1 SGD
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxs border border-black" value="10300">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                            Default Profit IDR
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxs border border-black" value="25000">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                           Default Profit USD
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxxs border border-black" value="4">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold ">
                           Default Profit SGD
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxxs border border-black" value="5">
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-2/12 text-left text-sm pt-2 font-bold flex items-center ">
                            Reservation Status
                        </div>

                        <div class="w-8/12 items-center flex mt-3">
                            <form>
                                <select class="border border-black border-solid rounded ">
                                    <option value="ACTIVE">ACTIVE</option>
                                    <option value="NOT ACTIVE">NOT ACTIVE</option>
                                </select>
                            </form>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 justify-center">
    
                        <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
                              
                    </div>

               </div>
        </div>

       

        <div class="container max-w-full mt-5 flex">
            
            <div class="w-11/12 mx-auto">

                    <h4 class="text-base font-bold">Syncing Setting</h4>

                    <div class="w-full bg-gray-300 p1 flex items-center">
                        <div class="w-2/12 text-left text-sm font-bold flex items-center">
                            Facility
                        </div>

                        <div class="w-11/12 items-center flex">
                            <div class=" flex mx-1 w-2/12">
                                <div>
                                    <label for="dateofbirth"></label>
                                </div>

                                <div class="flex md-4 justify-center items-center">
                                    <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                                </div>
                            </div>    

                            <button class="btn btn-sm btn-rounded btn-light ml-2">Sync</button>
                        </div>   
                    </div>

                    <div class="w-full bg-gray-300 p1 flex items-center">
                        <div class="w-2/12 text-left text-sm font-bold flex items-center">
                            Facility
                        </div>

                        <div class="w-11/12 items-center flex">
                            <div class=" flex mx-1 w-2/12">
                                <div>
                                    <label for="dateofbirth"></label>
                                </div>

                                <div class="flex md-4 justify-center items-center">
                                    <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                                </div>
                            </div>    

                            <button class="btn btn-sm btn-rounded btn-light ml-2">Sync</button>
                        </div>   
                    </div>
                

            
            </div>
        
        </div>


</div>

 
<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>