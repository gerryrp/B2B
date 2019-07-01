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
                                <H2>Master Rate Add</H2>
                        </span>
                </div> 
        </div>

        <div class="container max-w-full bg-gray-300 mt-8  mx-auto"> 
                <div class="flex justify-center p-5 ">

                        <div class="text-left text-base pt-2 ">
                                Hotel : &nbsp
                        </div>

                        <div class=" items-center flex">
                        <input type="text" name="username" class="textarealg border border-black" value="FAVE HOTEL LOSARI MAKASSAR (FORMERLY FAVE DAENG TOMPO)">
                        
                        </div>

                </div>
        </div>

        <div class="container max-w-full mt-5">
                <div class="flex">
                        <div class="text-lg font-bold w-11/12">
                                <p>FAVE HOTEL LOSARI MAKASSAR (FORMERLY FAVE DAENG TOMPO), MAKASSAR</p>
                        </div>

                        <div class="w-1/12">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                        </div>
                </div>

                <div class="flex">
                        <div class="text-base font-bold w-11/12">
                                <p>JL. DAENG TOMPO 28-36 MAKASSAR</p>
                        </div>
                </div>

                <div class="flex mt-2">
                        <div class="text-sm font-bold w-11/12">
                                <p>P: 0411-363 9777</p>
                                <p>F: 0411-363 8008</p>
                                <p>E: engineer@haryoRateco.id</p>
                                <p>W: www.favehotels.com , daengtompo.favehotels.com</p>
                        </div>
                </div>

                <div class="flex mt-2 w-1/3 bg-gray-300 mt-3">
                        <div class="text-sm font-bold w-11/12">
                                <p>Cancelation :</p>
                                <p>Low = 7 Days</p>
                                <p>High/Peak = 17 days prior to arrival</p> <br>
                                <p>EXTRA BED = N/A</p>
                        </div>
                </div>
        </div>

        <div class="container max-w-full mt-5 flex">
                <div class="flex w-9/12 items-center">
                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/rate/hotelRate.php';" class="btn btn-sm btn-rounded btn-light">Master Rate</button>
                        </div>

                        <div class="mr-1">
                                <button class="btn btn-sm btn-rounded btn-light">Rate List</button>
                        </div>

                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/rate/hotelRate_add.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-plus"></i> Add Rate</button>
                        </div>

                        <div class="mr-1 justify-center items-center flex">
                                <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me">
                                <label class="span_blue_link" for="dropdownCheck1">
                                        Show Active Rate Only
                                </label>								
                        </div>
                </div>

                <div class="flex w-3/12 justify-end"> 
                        <div class="mr-1">
                                <button onclick="window.location.href = 'master_hotel.php';" class="btn btn-sm btn-rounded btn-light">Master Hotel</button>
                        </div>

                        <div class="mr-1">
                                <button onclick="window.location.href = 'hotel_detail.php';" class="btn btn-sm btn-rounded btn-light">Hotel Detail</button>
                        </div>

                        <div class="mr-1">
                                <button class="btn btn-sm btn-rounded btn-light">Allotment</button>
                        </div>

                </div>
        </div>

        <div class="containter w-full bg-gray-200 p-2">
            <div class="flex md-4">

                <div class="w-full">
                    <div class="w-full mt-1 bg-gray-200">
                        <div class="table" id="results">

                            <div class="theader">
                                <div class="table_header text-left">Rate</div>
                                <div class="table_header">Internal</div>
                                <div class="table_header">Rate Type</div>
                                <div class="table_header text-left">Check-in Check-out Period</div>
                                <div class="table_header text-left">Public Notes</div>
                                <div class="table_header"></div>
                            </div>

                            <div class="table_row">

                                <div class="table_small w-2/12">
                                        <div class="table_cell">Header Rate</div>
                                        <div class="table_cell text-left">
                                                <span class="span_blue_link">RE12-NOTE</span>
                                        </div>
                                </div>

                                <div class="table_small w-1/12">
                                        <div class="table_cell">Header Internal</div>
                                        <div class="table_cell">
                                                <i class="fas fa-check"></i>
                                        </div>
                                </div>

                                <div class="table_small w-2/12">
                                        <div class="table_cell">Header Rate Type</div>
                                        <div class="table_cell">Normal</div>
                                </div>

                                <div class="table_small w-2/12">
                                        <div class="table_cell">Header Check-in Check-out Period</div>
                                        <div class="table_cell text-left">
                                                <span class="span_danger">28 Dec 2019 - 29 Dec 2019</span>
                                        </div>
                                </div>

                                <div class="table_small w-4/12">
                                        <div class="table_cell">Header Public Notes</div>
                                        <div class="table_cell text-left"><p>INGAT KALAU PROMO PASTI FAVE DAENG TOMPO
                                                    PERNAH MENGIKUTKAN YG ROOM ONLY SELALU BF SAJA YG DI PROMO KAN</p></div>
                                </div>

                                <div class="table_small w-1/12">
                                        <div class="table_cell">Header Public Notes</div>
                                        <div class="table_cell">
                                                <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-pencil-alt"></i></button>
                                                <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-times"></i></button>
                                        </div>
                                </div>

                            </div>  

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container w-full p-2 mt-5">
            <div class="flex md-4">

                <div class="w-1/2 ">
                                   
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Rate
                        </div>

                        <div class="text-xs items-center flex">
                            <div class="">
                                <form>
                                    <select class="border border-black border-solid rounded">
                                        <option value="">FR 7</option>
                                        <option value="">FR 9</option>
                                        <option value="">FR 10</option>
                                        <option value="">FR</option>
                                        <option value="">FR</option>
                                    </select>
                                </form>						
                            </div>

                            <div class="ml-5">
                                    Booking Code : 
                                    <input type="text" class="textareasm border border-black">
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Rate Type
                        </div>

                        <div class="text-xs items-center flex">
                            <div class="">
                                <form>
                                    <select class="border border-black border-solid rounded">
                                        <option value="">Normal</option>
                                        <option value="">Package</option>
                                        <option value="">Minimum Stay</option>
                                    </select>
                                </form>						
                            </div>

                            <div class="ml-5">
                                    <input type="checkbox" class="check" id="dropdownCheck2"  data-label="night(s)">
									<label class="" for="dropdownCheck2">
                                            night(s)
									</label>	
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Rate Priority
                        </div>

                        <div class="text-xs items-center flex">
                            <div class="">
                                <form>
                                    <select class="border border-black border-solid rounded">
                                        <option value="">Optional</option>
                                        <option value="">Compulsory</option>
                                    </select>
                                </form>						
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Market
                        </div>

                        <div class="text-xs items-center flex">
                            <div class="">
                                <form>
                                    <select class="border border-black border-solid rounded">
                                        <option value="">Domestik</option>
                                        <option value="">Foreign</option>
                                        <option value="">All Market</option>
                                    </select>
                                </form>						
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Currency
                        </div>

                        <div class="text-xs items-center flex">
                            <div class="">
                                <form>
                                    <select class="border border-black border-solid rounded">
                                        <option value="">IDR</option>
                                        <option value="">US</option>
                                        <option value="">SG</option>
                                        <option value="">SGD</option>
                                        <option value="">USD</option>
                                    </select>
                                </form>						
                            </div>

                            <div class="ml-5">
                                    Fixed Exchange Rate : 
                                    <input type="text" class="textareaxxs border border-black text-right" value="1">
                            </div>
                        </div>


                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Cut-Off-Date (CoD)
                        </div>

                        <div class=" items-center flex">
                            <div class="">
                                <input type="text" class="textareaxxs border border-black text-right" value="7">
                                day(s) before check-in date
                            </div>

                            <div class="ml-5">
                                <input type="checkbox" class="check" id="dropdownCheck3"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck3">
                                    Cannot be cancelled
                                </label>	
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                            Min Booking Day
                        </div>

                        <div class="items-center flex">
                            Booking has to be made &nbsp
                                <input type="text" class="textareaxxs border border-black text-right" value="0"> &nbsp
	                        day(s) prior to checkin
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Active Day
                        </div>

                        <div class="w-1/2 items-center flex">
                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck4"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck4">
                                    Monday
                                </label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck5"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck5">
                                    Tuesday
                                </label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck6"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck6">
                                    Wednesday
                                </label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck7"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck7">
                                    Thursday
                                </label>
                            </div> 
                        </div> 

                        <div class="w-1/3">
                                &nbsp
                        </div>

                        <div class="w-1/2 items-center flex">
                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck8"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck8">
                                    Friday
                                </label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck9"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck9">
                                    Saturday
                                </label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck10"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck10">
                                    Sunday
                                </label>
                            </div>
                                
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Public Notes
                        </div>

                        <div class="items-center flex">
                            <textarea rows="4" cols="29" class="border border-black rounded-lg"></textarea>
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Label
                        </div>

                        <div class="w-1/2 items-center flex">
                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck11"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck11">
                                    Internal
                                </label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck12"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck12">
                                    Highlight
                                </label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck13"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck13">
                                    MSP
                                </label>
                            </div>

                            <div class="mr-2">
                                <input type="checkbox" class="check" id="dropdownCheck14"  data-label="Cannot be cancelled">
                                <label class="" for="dropdownCheck14">
                                    FOC
                                </label>
                            </div>

                            <div class=" items-center flex">
                                <input type="text" name="username" class="textareaxs border border-black" value="">
                            </div>
                                
                        </div>

                    </div>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                            Admin Notes
                        </div>

                        <div class="items-center flex">
                            <textarea rows="4" cols="29" class="border border-black rounded-lg"></textarea>
                        </div> 

                    </div>    

                </div>

                <div class="w-1/2">
                    
                    <div class="mt-10 ml-10 ">
                          <span class="font-bold text-sm">Check-in - Check-out Period :</span>
                        
                          <div class=" w-6/12 flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">
                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 items-center">
                                Check-in : 
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
                          </div>

                          <div class=" w-6/12 flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">
                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 items-center">
                                Check-out : 
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
                          </div>
                    </div>

                    <div class="mt-10 ml-10 ">
                          <span class="font-bold text-sm">Booking Period :</span>
                        
                          <div class=" w-6/12 flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">
                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 items-center">
                                Start : 
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
                          </div>

                          <div class=" w-6/12 flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">
                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 items-center">
                                End : 
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
                          </div>
                    </div>

                    <div class="mt-10 ml-10 ">
                          <span class="font-bold text-sm">Exclusive To :</span>

                        <div class="mt-3">
                            <input type="text" name="username" class="textareasm border border-black" value="">
                        </div>
                          
                    </div>


                </div>

            </div>
        </div>

        <div class="containter w-full bg-gray-200 p-2 mt-5">
                <div class="flex md-4">

                        <div class="w-full">
                                <div class="w-full mt-1 bg-gray-200">
                                        <div class="table" id="results">

                                                <div class="theader">
                                                        <div class="table_header">Room Type</div>
                                                        <div class="table_header">Room Facility</div>
                                                        <div class="table_header">Currency</div>
                                                        <div class="table_header">Net Price</div>
                                                        <div class="table_header">Profit</div>
                                                        <div class="table_header">Selling Price</div>
                                                        <div class="table_header">Disc.</div>
                                                        <div class="table_header">Booker Incentive</div>
                                                </div>

                                                <div class="table_row">
                                                        <div class="table_small">
                                                                <div class="table_cell">Header Room Type</div>
                                                                <div class="table_cell">
                                                                        <span class="span_blue_link">SUPERIOR ( 21.7m2 )</span>
                                                                </div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class="table_cell">Header Room Facility</div>
                                                                <div class="table_cell">Room Only</div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class="table_cell">Header Currency</div>
                                                                <div class="table_cell"></div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class="table_cell">Header Net Price</div>
                                                                <div class="table_cell">
                                                                    <input type="text" name="username" class="textareaxs border border-black" value="0.00">
                                                                </div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class="table_cell">Header Profit</div>
                                                                <div class="table_cell">0.00</div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class="table_cell">Header Selling Price</div>
                                                                <div class="table_cell">
                                                                    <input type="text" name="username" class="textareaxs border border-black" value="0.00">
                                                                </div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class="table_cell">Header Disc.</div>
                                                                <div class="table_cell">
                                                                    <input type="text" name="username" class="textareaxs border border-black" value="0.00">
                                                                </div>
                                                        </div>
                                                        <div class="table_small">
                                                                <div class="table_cell">Header Booker Incentive</div>
                                                                <div class="table_cell">
                                                                    <input type="text" name="username" class="textareaxs border border-black" value="0.00">
                                                                </div>
                                                        </div>
                                                </div>  

                                        </div>
                                </div>
                        </div>

                </div>
        </div>

        <div class="container w-full justify-center flex mt-5">
            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Continue</button>
            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                                                                
        </div>

        <div class="container w-full mt-10">
                <div>
                        <span class="text-base font-bold"><h2>Log</h2><span>
                </div>

                <div class="w-full">
                                <div class="w-full mt-1 bg-gray-200">
                                        No data Found
                                </div>
                        </div>

        </div>


</div>


<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>