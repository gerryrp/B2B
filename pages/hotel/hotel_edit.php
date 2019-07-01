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
                                <H2>Edit Hotel</H2>
                        </span>
                </div> 
        </div>

        <div class="container max-w-full mt-8"> 
                <div class="flex">

                    <div class="w-8/12 items-center flex"> 
                        <span class="bg-orange-400 font-bold p-2">Please input valid Reservation Email address and Allow Email for Instant Confirmation</span>
                    </div>

                    <div class="flex w-4/12 justify-end ">
                    
                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/hotel/hotel.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                        </div>

                        <div class="mr-1">
                                <button  onclick="window.location.href = '<?=root_path?>/pages/users/user_add.php';"  class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add User</button>
                        </div>

                    </div>

                </div>
        </div>

        <div class="container max-w-full mt-5 flex">
               <div class="w-7/12">
               
                    <h4 class="border-b border-black text-sm text-white text-left bg-blue-800 p-2">Hotel Information</h4>

                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Name
                        </div>

                        <div class="w-8/12 text-xs items-center flex">
                            <input type="text" class="textareaxl border border-black" value="FAVE HOTEL LOSARI MAKASSAR (FORMERLY FAVE DAENG TOMPO)">
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Address
                        </div>

                        <div class="w-8/12 items-center flex">
                                <input type="text" class="textareaxl border border-black" value="JL. DAENG TOMPO 28-36 MAKASSAR">
                        </div>

                        <div class="w-8/12 items-center flex ml-64">
                                <input type="text" class="textareaxl border border-black" value="NULL">
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                City
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxl border border-black" value="MAKASSAR, SULAWESI-SOUTH">
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Phone
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="0411-363 9777">
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Fax
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareasm border border-black" value="0411-363 8008">
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Hotel Group
                        </div>

                        <div class="w-8/12 items-center flex">
                            
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value=""></option>
                                    <option value="">TAUZIA ACCOR</option>
                                    <option value="">ACCOR</option>
                                </select>
                            </form>						
                    
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Website
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxl border border-black" value="www.favehotels.com, daengtompo.favehotels.com">
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Star
                        </div>

                        <div class="w-8/12 items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </form>	
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Reservation Email
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxl border border-black" value="engineer@haryono.co.id">
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Sales Email
                        </div>

                        <div class="w-8/12 items-center flex">
                            <input type="text" class="textareaxl border border-black" value="daengtomposmm@favehotels.com">
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Remarks
                        </div>

                        <div class="w-8/12 items-center flex">
                            <textarea rows="6" cols="29" class="border border-black rounded-lg " >Cancellation: Low = 7 days, High/Peak = 17 days prior to arrival, EXTRA BED = N/A     
                            </textarea>   
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm pt-2 font-bold ">
                                Admin Notes
                        </div>

                        <div class="w-8/12 items-center flex">
                            <textarea rows="6" cols="29" class="border border-black rounded-lg " >daengtompoinfo@favehotels.com, daengtomposmm@favehotels.com    
                            </textarea>  
                        </div>

                    </div>
               </div>

               <div class="w-1/3 ml-10">
                    <h4 class="border-b border-black text-sm text-white text-left bg-blue-800">&nbsp</h4>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Has Contract
                        </div>

                        <div class="w-1/2 items-center flex">
                                <span class="span_success font-bold">YES</span>
                        </div>

                        <div>
                                <button onclick="window.location.href = '<?=root_path?>/pages/rate/hotelRate_detail.php';"  class="btn btn-sm btn-rounded btn-light">Rate</button>
                        </div>

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Allotment Type
                        </div>

                        <div class="w-1/3 items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="Instant Confirm">Instant Confirm</option>
                                    <option value="XML">XML</option>
                                    <option value="ERA">ERA</option>
                                    <option value="On Request">On Request</option>
                                </select>
                            </form>	
                        </div>

                        

                    </div>
                    <div class="flex flex-wrap overflow-hidden bg-gray-300 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/3 text-left text-sm font-bold pt-2 ">
                                Company ID
                        </div>

                        <div class="w-1/2 items-center flex">
                            <input type="text" class="textareaxl border border-black" value="favedaengtompo">
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

                        <textarea rows="6" cols="29" class="border border-black rounded-lg " >
                        </textarea>
                    </div>

               </div>
        </div>

        <div class="container w-full mt-3 flex justify-center">
    
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                    
        </div>

        <div class="container max-w-full mt-5 flex">
            <div class="w-5/12">
                <h4 class="text-base font-bold">Hotel Rooms</h4>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="SUPERIOR ( 21.7m2 )">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="SUPERIOR ( 21.7m2 )">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="SUPERIOR ( 21.7m2 )">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="Breakfast for 2">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="FAMILY">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="Breakfast for 3">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="TRIPLE">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="Room Only">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded ">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="TRIPLE">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="Breakfast for 3">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="FAMILY">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="Room Only">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="SUITE">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="Room Only">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="SUITE ( 40.8 m2 )">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="Breakfast for 2">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="EXECUTIVE SUITE">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="Room Only">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">

                    <div class="w-2/12 text-left text-sm items-center flex ">
                        Room Type :
                    </div>

                    <div class="w-8/12 text-left text-sm items-center flex">
                        <input type="text" class="textareasm border border-black" value="EXECUTIVE SUITE">
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        <button class="btn btn-sm btn-rounded btn-light">disable</button>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <input type="text" class="textareasm border border-black" value="Breakfast for 2">
                            <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-window-close"></i></button>
                        </div>
                    </div>

                    <div class="w-full items-center flex ml-32">
                        <div class="w-2/12 text-left text-sm  items-center flex mr-3 ">
                            Facility :
                        </div>

                        <div class="w-8/12 text-left text-sm  items-center flex">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="NO WINDOW"> NO WINDOW</option>
                                    <option value="100 sqm"> 100 sqm</option>
                                    <option value="2A + 2C UNDER 12 YO"> 2A + 2C UNDER 12 YO</option>
                                    <option value="65 SQM"> 65 SQM</option>
                                    <option value="130 SQM"> 130 SQM</option>
                                </select>
                            </form>
                            
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>
                    </div>

                </div>

                <div class="border-0 border-b border-solid border-gray-400  flex flex-wrap overflow-hidden bg-gray-300 mb-1 p-1">
                    <div class="p-1 ">
                        Room Type <input type="text" class="textarealg border border-black" value="" > 
                        <button class="btn btn-sm btn-rounded btn-light"> Add</button>
                            
                    </div>     
                    <div class="p-1">
                        <span class="text-xs">Note: Room must be from selected drop down</span>
                    </div>
                </div>

            </div>

            <div class="w-7/12">

                <div class="w-full ml-10">
                    <h4 class="text-base font-bold">Hotel Facilities</h4>

                    <div class="w-full bg-gray-300 p1 flex items-center">
                        <div class="w-2/12 text-left text-sm font-bold pt-2 ">
                            Facility
                        </div>

                        <div class="w-11/12 items-center flex">
                            <input type="text" class="textarealg border border-black" value="">
                            <button class="btn btn-sm btn-rounded btn-light">Add Hotel Facility</button>
                        </div>   
                    </div>
                </div>

                <div class="w-full ml-10 mt-5">
                    <h4 class="text-base font-bold">Nearby Places</h4>

                    <div class="w-full bg-gray-300 p1 flex items-center">
                        <div class="w-1/12 text-left text-sm font-bold pt-2 ">
                            Place
                        </div>

                        <div class="w-11/12 items-center flex">
                            <input type="text" class="textareaxxs border border-black mx-1" value=""> 
                            <form>
                                <select class="border border-black border-solid mx-1 mt-2">
                                    <option value="Minute(s)">Minute(s)</option>
                                    <option value="Kilometer(s)">Kilometer(s)</option>
                                </select>
                            </form>
                            <span class="mx-1">to</span>
                            <input type="text" class="textarealg border border-black mx-1" value=""> 
                            <button class="btn btn-sm btn-rounded btn-light">Add</button>
                        </div>   
                    </div>
                </div>

            </div>
            

        </div>

        <div class="container max-w-full mt-5 flex border-dotted border-0 border-b-1 border-solid border-gray-400">
            <div class="w-6/12">
                <h4 class="text-base font-bold">Inactive Rooms</h4>

                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>STANDARD (21.7 m2) </p>
                            <p>Room Only</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>

                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>STANDARD (21.7 m2) </p>
                            <p>Breakfast for 2</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>

                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>FAMILY (25.5 m2)</p>
                            <p>Breakfast for 3</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>

                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>EXECUTIVE</p>
                            <p>Room Only</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>

                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>EXECUTIVE (25.5 m2)</p>
                            <p>Breakfast for 2</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                   

                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>SUITE</p>
                            <p>Breakfast for 2</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                    

                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>STANDARD</p>
                            <p>Breakfast for 2</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                   
                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>EXECUTIVE</p>
                            <p>Breakfast for 2</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                    
                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>TRIPLE (25.5 m2)</p>
                            <p>Breakfast for 3</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                   
                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>SUPERIOR</p>
                            <p>Breakfast for 2</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                   
                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>TRIPLE</p>
                            <p>Breakfast for 3</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                    
                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>Suite</p>
                            <p></p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                   

                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>Triple/Family (25.5 m2)</p>
                            <p>Breakfast for 2</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                    

                    <div class="mt-2 flex items-center">
                        <div class="w-6/12">
                            <p>Extra Bed</p>
                            <p>Breakfast for 1</p>
                        </div>
                        <div class="w-6/12">
                            <button class="btn btn-sm btn-rounded btn-light">Enable</button>
                        </div>
                    </div>
                    
            </div>
        </div>


        <div class="containter w-full p-2 mt-10">
                <div>
                        <span class="text-base font-bold"><h2>User List</h2><span>
                </div>
                
                <div class="flex md-4">
                        <div class="w-full">
                                <div class="w-full mt-1 bg-gray-200">
                                        <div class="table" id="results">

                                                <div class='theader'>
                                                        <div class='table_header'>User ID</div>
                                                        <div class='table_header'>Name</div>
                                                        <div class='table_header'>Email</div>
                                                        <div class='table_header'>Role</div>

                                                </div>

                                                <div class='table_row'>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header User ID</div>
                                                                <div class='table_cell'>
                                                                        <span class="span_blue_link">daengtomposmm@favehotels.com</span>
                                                                </div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Name</div>
                                                                <div class='table_cell'>Fave Daeng Tompo Makassar</div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Email</div>
                                                                <div class='table_cell'>daengtomposmm@favehotels.com</div>
                                                        </div>
                                                        <div class='table_small'>
                                                                <div class='table_cell'>Header Role</div>
                                                                <div class='table_cell'>Hotel Sales</div>
                                                        </div>
                                                        
                                                </div>  

                                        </div>
                                </div>
                        </div>
                </div>
        </div>

        <div class="container w-full mt-10">
                <div>
                        <span class="text-base font-bold"><h2>Log</h2><span>
                </div>

                <div class="w-full">
                        <div class="w-full mt-1 bg-gray-200">
                                <div class="table" id="results">

                                        <div class='table_row'>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Date</div>
                                                        <div class='table_cell'>10 Feb 2019 15:39</div>
                                                </div>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Internal</div>
                                                        <div class='table_cell'>10600</div>
                                                </div>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Rate Type</div>
                                                        <div class='table_cell'>PRT : 115.178.197.134</div>
                                                </div>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Check-in Check-out Period</div>
                                                        <div class='table_cell'>Update Hotel Detail</div>
                                                </div>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Public Notes</div>
                                                        <div class='table_cell'>
                                                                <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-info-circle"></i></button>
                                                        </div>
                                                </div>
                                        </div>  

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