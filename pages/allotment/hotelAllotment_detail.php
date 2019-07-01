<html>

<?php 
    include(__DIR__.'/../head.php');
?>



<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');

?>

<!-- isi content adasd -->

<div class="container bg-gray-200 mx-auto w-11/12 mt-10 p-5">

    <div class="container max-w-full">

        <div class="container max-w-full"> 
            <div class="w-full border-0 border-b border-solid border-gray-400">
                <div class="flex md-4">
                    <span class="span_title"><h2>Master Allotment - FAVE HOTEL LOSARI MAKASSAR (FORMERLY FAVE DAENG TOMPO)</h2></span>           
                </div>
            </div>
        </div>

    </div>

    <div class="flex justify-end mt-2">
        <button class="btn btn-sm btn-rounded btn-light">Hotel Detail</button>
        <button class="btn btn-sm btn-rounded btn-light">Hotel Rate</button>
    </div>

    <div class="container max-w-full flex">

        <div class="w-6/12 mr-2">

            <span class="font-bold">
                <h2>Bulk Allotment Quota Update</h2>
            </span>

            <div class="bg-gray-400">

                <div class="flex">
                    <div class="mr-5">
                        <div class="text-small text-center">
                            Start
                        </div>

                        <div>
                            <label for="dateofbirth"></label>
                        </div>

                        <div class="flex md-4 justify-center items-center">
                            <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                        </div>
                    </div>

                    <div class="ml-5">
                        <div class="text-small text-center">
                            End
                        </div>

                        <div>
                            <label for="dateofbirth"></label>
                        </div>

                        <div class="flex md-4 justify-center items-center">
                            <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                        </div>
                    </div>
                        
                </div>

                <div class="bg-gray-600 p-2 flex mt-1">
                    <span class="mr-3">Active Day: </span>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck1">
                                Mon 
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck2">
                                Tue
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck3"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck3">
                                Wed
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck4"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck4">
                                Thu
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck5"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck5">
                                Fri
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck6"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck6">
                                Sat
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck7"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck7">
                                Sun
                            </label>
                    </div>
                   
                </div>

                <div class="containter">
                    <div class="flex mt-5">
                        <div class="w-1/3">
                            SUPERIOR ( 21.7M2 )
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="textareaxxs border border-black">
                        </div>
                    </div>

                    <div class="flex mt-1">
                        <div class="w-1/3">
                            FAMILY
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="textareaxxs border border-black">
                        </div>
                    </div>
                    
                    <div class="flex mt-1">
                        <div class="w-1/3">
                            TRIPLE
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="textareaxxs border border-black">
                        </div>
                    </div>

                    <div class="flex mt-1">
                        <div class="w-1/3">
                            SUITE
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="textareaxxs border border-black">
                        </div>
                    </div>

                    <div class="flex mt-1">
                        <div class="w-1/3">
                            SUITE (40.8 M2)
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="textareaxxs border border-black">
                        </div>
                    </div>

                    <div class="flex mt-1">
                        <div class="w-1/3">
                            EXECUTIVE SUITE
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="textareaxxs border border-black">
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button class="btn btn-sm btn-rounded btn-light">Update Allotment Quota</button>
                </div>

            </div>

        </div>

        <div class="w-1/2 ml-2">

            <span class="font-bold">
                <h2>Bulk Allotment Cut off Date Update</h2>
            </span>

            <div class="bg-gray-300">
                
                <div class="flex">
                    <div class="mr-5">
                        <div class="text-small text-center">
                            Start
                        </div>

                        <div>
                            <label for="dateofbirth"></label>
                        </div>

                        <div class="flex md-4 justify-center items-center">
                            <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                        </div>
                    </div>

                    <div class="ml-5">
                        <div class="text-small text-center">
                            End
                        </div>

                        <div>
                            <label for="dateofbirth"></label>
                        </div>

                        <div class="flex md-4 justify-center items-center">
                            <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                        </div>
                    </div>
                        
                </div>

                <div class="bg-gray-600 p-2 flex mt-1">
                    <span class="mr-3">Active Day: </span>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck1">
                                Mon 
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck2">
                                Tue
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck3"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck3">
                                Wed
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck4"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck4">
                                Thu
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck5"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck5">
                                Fri
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck6"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck6">
                                Sat
                            </label>
                    </div>
                    <div class="mr-2">
                        <input type="checkbox" class="check" id="dropdownCheck7"  data-label="remember me" disable>
                            <label class="" for="dropdownCheck7">
                                Sun
                            </label>
                    </div>
                   
                </div>

                <div class="container mt-5">
                    <div class="flex">
                        <div class="">
                            Allotment (COD) :
                        </div>

                        <div class="ml-1">
                            <input type="text" class="textareaxxs border border-black">
                        </div>

                        <div class="ml-1">
                            <span> day(s) before Check-in Date at</span>
                        </div>

                        <div class="ml-1">
                            <form>
                                <select class="border border-black border-solid rounded">
                                    <option value="12:00"> 12:00</option>
                                    <option value="13:00"> 13:00</option>
                                    <option value="14:00"> 14:00</option>
                                    <option value="15:00"> 15:00</option>
                                    <option value="16:00"> 16:00</option>
                                    <option value="17:00"> 17:00</option>
                                    <option value="18:00"> 18:00</option>
                                    <option value="19:00"> 19:00</option>
                                    <option value="20:00"> 20:00</option>
                                </select>
                            </form>
                        </div>

                        <div class="ml-1">
                            <span> WIB</span>
                        </div>

                    </div>
                    
                </div>

                <div class="flex justify-center">
                    <button class="btn btn-sm btn-rounded btn-light">Update Allotment Cut off Date</button>
                </div>

            </div>

            <div class="flex mt-5 items-center">
                <span class="font-bold text-base">Allotment Type:</span>
                <span class="span_green ml-1">Instant Confirmation</span>
                <button class="btn btn-sm btn-rounded btn-light ml-2">Edit</button>
            </div>

            <div class="container bg-yellow-100  mt-5">
                <div>
                    <span class="font-bold span_violet">Validate your Reservation Email address on Master > Hotel Detail</span>
                </div>

                <div>
                    <span class="font-bold span_primary">Instant Confirmation = enable allotment = needs to be managed daily</span>
                </div>

                <div>
                    <span class="font-bold span_danger">On Request = disable allotment</span>
                </div>

                <div>
                    <span class="font-bold span_success">Close out quota = input 0 (zero) value to the room and date</span>
                </div>
            </div>

        </div>

    </div>

    <div class="container max-w-full mt-5">
        <div class="flex justify-center items-center">
            <button class="btn btn-rounded btn-light"><i class="fas fa-angle-double-left"></i></button>
            <button class="btn btn-rounded btn-light"><i class="fas fa-angle-left"></i></button>
            
            <div class="mr-1 pt-3">
                <form>
                    <select class="border border-black border-solid rounded">
                        <option value="Januari"> Januari</option>
                        <option value="Februari"> Februari</option>
                        <option value="Maret"> Maret</option>
                        <option value="April"> April</option>
                        <option value="Mei"> Mei</option>
                        <option value="Juni"> Juni</option>
                        <option value="Juli"> Juli</option>
                        <option value="Agustus"> Agustus</option>
                        <option value="September"> September</option>
                        <option value="Oktober"> Oktober</option>
                        <option value="November"> November</option>
                        <option value="Desember"> Desember</option>
                    </select>
                </form>     
            </div>

            <div class="ml-1 pt-3">
                <form>
                    <select class="border border-black border-solid rounded">
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>
                </form>   
            </div>

            <button class="btn btn-rounded btn-light"><i class="fas fa-angle-right"></i></button>
            <button class="btn btn-rounded btn-light"><i class="fas fa-angle-double-right"></i></button>


        </div>
    </div>

    <div class="container max-w-full"> 
        <div class="w-full border-0 border-b border-solid border-gray-400">
            <div class="flex md-4">
                <span class="text-2xl font-bold"><h2>June 2019</h2></span>           
            </div>
        </div>
    </div>

    <div class="container">

        <div class="w-full">
            <div class="w-full mx-auto flex mt-1 bg-gray-200">

                <div class="table" id="results">

                    <div class='theader'>
                        <div class='table_header'>Sunday</div>
                        <div class='table_header'>Monday</div>
                        <div class='table_header'>Tuesday</div>
                        <div class='table_header'>Wednesday</div>
                        <div class='table_header'>Thrusday</div>
                        <div class='table_header'>Friday</div>
                        <div class='table_header'>Saturday</div>
                    </div>

                    <div class='table_row'>

                        <div class='table_small'>
                            <div class='table_cell'>Header Sunday</div>
                            <div class='table_cell'>
                                
                                <div class="container text-left">

                                  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Monday</div>
                            <div class='table_cell'>

                                <div class="container text-left">
  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Tuesday</div>
                            <div class='table_cell'>

                                <div class="container text-left">

                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Wednesday</div>
                            <div class='table_cell'>

                                <div class="container text-left">
  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Thrusday</div>
                            <div class='table_cell'>

                                <div class="container text-left">
  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Friday</div>
                            <div class='table_cell'>

                                <div class="container text-left">

                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Saturday</div>
                            <div class='table_cell'>

                                <div class="container text-left">

                                    <div class="flex">
                                        <div class="w-3/12">
                                            <span class="text-xs span_success">Allotment CoD</span>
                                        </div>
                                        <div class=" w-9/12 flex justify-end ">
                                            <span class="bg-gray-500 w-10 h-10">1</span>
                                        </div>
                                        
                                    </div>

                                    <div class="w-full flex">
                                        <div class=" w-8/12 flex justify-end">
                                            <span class="font-bold">A</span>
                                        </div>
                                        <div class="w-3/12 flex justify-end">
                                            <span class="font-bold">Q</span>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-6/12">
                                            <div class="table_cell">SUPERIOR (21.7 M2)</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex justify-end">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-8/12">
                                            <div class="table_cell">FAMILY</div>
                                        </div>

                                        <div class="table_small w-4/12">
                                            <div class="table_cell flex justify-end">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full"> 
                                        <div class="table_small w-8/12">
                                            <div class="table_cell">TRIPLE</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-8/12">
                                            <div class="table_cell">SUITE</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-6/12">
                                            <div class="table_cell">SUITE (40.8 M2)</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex flex justify-end">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-6/12">
                                            <div class="table_cell">EXECUTIVE SUITE</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex justify-end">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>
  
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class='table_row'>

                        <div class='table_small'>
                            <div class='table_cell'>Header Sunday</div>
                            <div class='table_cell'>
                                
                                <div class="container text-left">

                                    <div class="flex">
                                        <div class="w-3/12">
                                            <span class="text-xs span_success">Allotment CoD</span>
                                        </div>
                                        <div class=" w-9/12 flex justify-end ">
                                            <span class="bg-gray-500 w-10 h-10">1</span>
                                        </div>
                                        
                                    </div>

                                    <div>
                                        <div class="table_small">
                                            <div class="table_cell">SUPERIOR (21.7 M2)</div>
                                        </div>

                                        <div class="table_small">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>
  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Monday</div>
                            <div class='table_cell'>

                                <div class="container text-left">

                                    <div class="flex">
                                        <div class="w-3/12">
                                            <span class="text-xs span_success">Allotment CoD</span>
                                        </div>
                                        <div class=" w-9/12 flex justify-end ">
                                            <span class="bg-gray-500 w-10 h-10">1</span>
                                        </div>
                                        
                                    </div>

                                    <div>
                                        <div class="table_small">
                                            <div class="table_cell">SUPERIOR (21.7 M2)</div>
                                        </div>

                                        <div class="table_small">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>
  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Tuesday</div>
                            <div class='table_cell'>

                                <div class="container text-left">

                                    <div class="flex">
                                        <div class="w-3/12">
                                            <span class="text-xs span_success">Allotment CoD</span>
                                        </div>
                                        <div class=" w-9/12 flex justify-end ">
                                            <span class="bg-gray-500 w-10 h-10">1</span>
                                        </div>
                                        
                                    </div>

                                    <div>
                                        <div class="table_small">
                                            <div class="table_cell">SUPERIOR (21.7 M2)</div>
                                        </div>

                                        <div class="table_small">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>
  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Wednesday</div>
                            <div class='table_cell'>

                                <div class="container text-left">

                                    <div class="flex">
                                        <div class="w-3/12">
                                            <span class="text-xs span_success">Allotment CoD</span>
                                        </div>
                                        <div class=" w-9/12 flex justify-end ">
                                            <span class="bg-gray-500 w-10 h-10">1</span>
                                        </div>
                                        
                                    </div>

                                    <div>
                                        <div class="table_small">
                                            <div class="table_cell">SUPERIOR (21.7 M2)</div>
                                        </div>

                                        <div class="table_small">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>
  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Thrusday</div>
                            <div class='table_cell'>

                                <div class="container text-left">

                                    <div class="flex">
                                        <div class="w-3/12">
                                            <span class="text-xs span_success">Allotment CoD</span>
                                        </div>
                                        <div class=" w-9/12 flex justify-end ">
                                            <span class="bg-gray-500 w-10 h-10">1</span>
                                        </div>
                                        
                                    </div>

                                    <div>
                                        <div class="table_small">
                                            <div class="table_cell">SUPERIOR (21.7 M2)</div>
                                        </div>

                                        <div class="table_small">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>
  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Friday</div>
                            <div class='table_cell'>

                                <div class="container text-left">

                                    <div class="flex">
                                        <div class="w-3/12">
                                            <span class="text-xs span_success">Allotment CoD</span>
                                        </div>
                                        <div class=" w-9/12 flex justify-end ">
                                            <span class="bg-gray-500 w-10 h-10">1</span>
                                        </div>
                                        
                                    </div>

                                    <div>
                                        <div class="table_small">
                                            <div class="table_cell">SUPERIOR (21.7 M2)</div>
                                        </div>

                                        <div class="table_small">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>
  
                                </div>

                            </div>
                        </div>

                        <div class='table_small'>
                            <div class='table_cell'>Header Saturday</div>
                            <div class='table_cell'>

                                <div class="container text-left">

                                    <div class="flex">
                                        <div class="w-3/12">
                                            <span class="text-xs span_success">Allotment CoD</span>
                                        </div>
                                        <div class=" w-9/12 flex justify-end ">
                                            <span class="bg-gray-500 w-10 h-10">1</span>
                                        </div>
                                        
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-6/12">
                                            <div class="table_cell">SUPERIOR (21.7 M2)</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex justify-end">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-8/12">
                                            <div class="table_cell">FAMILY</div>
                                        </div>

                                        <div class="table_small w-4/12">
                                            <div class="table_cell flex justify-end">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full"> 
                                        <div class="table_small w-8/12">
                                            <div class="table_cell">TRIPLE</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-8/12">
                                            <div class="table_cell">SUITE</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-6/12">
                                            <div class="table_cell">SUITE (40.8 M2)</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex flex justify-end">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full">
                                        <div class="table_small w-6/12">
                                            <div class="table_cell">EXECUTIVE SUITE</div>
                                        </div>

                                        <div class="table_small w-6/12">
                                            <div class="table_cell flex justify-end">
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                                <div> <input type="text" class="textareaxxs" value="15"> </div>
                                            </div>
                                        </div>
                                    </div>
  
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="container mt-10 text-xs">
        <div class="">
            <span class="font-bold text-sm underline">Per Date Update How to</span>
        </div>
        <div class="">
            <span>Klik baris kamar di tanggal yang hendak diupdate dan pilih salah satu aksi berikut:</span>
        </div>
        <div class="ml-2">
            <span class="font-bold">1. Update Quota:</span> <span> Isi kuota allotment dengan nominal angka.</span>
        </div>
        <div class="ml-2">
            <span class="font-bold">2. Allotment Cut off Date:</span> <span> Batas hari dan jam terakhir sebelum tanggal check-in yang masih bisa menggunakan instant confirmation.</span>
        </div>
        <div class="ml-2 my-1">
            <span class="font-bold">3. Close out Quota:</span> <span class="span_blue text-xs"> RECOMMENDED</span>
        </div>
        <div class="ml-4">
            <span>Kosongkan nilai kuota allotment dengan mengisi angka "0".</span>
        </div>
        <div class="ml-4">
            <span>Quota "0" meniadakan Instant Confirm dan mengaktifkan reservasi</span> <span class="font-bold text-sm"> "On Request".</span>
        </div>
    </div>
    
    <div class="container mt-5 text-xs">
        <div class="">
            <span class="font-bold text-sm underline">Legend</span>
        </div>
        <div class="">
            <span> <span class="font-bold">A</span> stands for <span class="font-bold">Availability.</span> How many room is available to use</span>
        </div>
        <div class="">
            <span> <span class="font-bold">Q</span> stands for allotment <span class="font-bold">Quota.</span>How many room is allotted for B2B Haryono</span>
        </div>
        <div class="">
            <span> <span class="font-bold">WIB</span> stands for <span class="font-bold">Western Indonesian Time</span> aka. Waktu Indonesia bagian Barat</span>
        </div>
        <div class="">
            <span> <span class="font-bold">Instant Confirmation</span> reservation <span class="font-bold">will be confirmed automatically</span> by system if there is still room available</span>
        </div>
        <div class="">
            <span> <span class="font-bold">On Request</span> reservation <span class="font-bold"> needs to be approved or denied by Hotel </span> manually via the link provided in our email reservation</span>
        </div>
    </div>



</div>


<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>