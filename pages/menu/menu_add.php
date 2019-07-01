<html>
<head>

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

<div class="container w-11/12 mx-auto">

    <div class="container max-w-full">

        <div class="w-full border-0 border-b border-solid border-gray-400">
            <div class="flex md-4">
                <span class="span_title"><h2>Add Menu</h2></span>           
            </div>
        </div>

    </div>
                  
    <div class="container mt-5">
        <div class="flex md-4">

            <div class="container w-4/12">
                &nbsp
            </div>

            <div class="container w-4/12 flex justify-center items-center">
        
                    <div class="text-small ">
                        Search : &nbsp
                    </div>
        
                    <div class="flex md-4">
                        <input type="text" class="textareasm border border-black" >
                        <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                    </div>
                
            </div>

            <div class="flex w-4/12 items-center justify-end">
            
                <div>
                    <button  onclick="window.location.href = '<?=root_path?>/pages/menu/menu_list.php';" type="button" class="btn  btn-light btn-sm btn-rounded mr-3  " value="Reset"><i class="fas fa-list"></i> List</button> 
                </div>
                 
            </div>

            

        </div>
    </div>

    
    <div class="container w-full mt-3 ">
                    
        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 ">
                Label
            </div>

            <div class="w-1/2 items-center text-xs flex">
                <input type="text" name="username" class="textarealg border border-black" value="">
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 ">
                URL Controller
            </div>

            <div class="w-1/2 items-center text-xs flex">
            <input type="text" name="username" class="textarealg border border-black" value="">
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 flex items-center">
                Parent
            </div>

            <div class="w-1/2 items-center text-xs flex">
                <div class="mt-3">
                    <form>
                        <select class="border border-black border-solid rounded">
                            <option value="Archives"> Archives</option>
                            <option value="Archives"> Archives</option>
                            <option value="Archives"> Archives</option>
                            <option value="...Reservation List"> ...Reservation List</option>
                            <option value="...Int Reservation List"> ...Int Reservation List</option>
                            <option value="...Airline Reservation List"> ...Airline Reservation List</option>
                            <option value="...Invoice List"> ...Invoice List</option>
                        </select>
                    </form>						
                </div>
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 items-center flex ">
                Bind to Page
            </div>

            <div class="w-1/2 items-center text-xs flex">
                <div class="mt-3">
                    <form>
                        <select class="border border-black border-solid rounded">
                            <option value="">admin-group</option>
                            <option value="">admin-reservation</option>
                            <option value="">adminsession</option>
                            <option value="">agent</option>
                            <option value="">allinvoice</option>
                        </select>
                    </form>						
                </div>
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 flex items-center">
                Order
            </div>

            <div class="w-1/2 items-center text-xs flex">
                <div class="mt-3">
                    <form>
                        <select class="border border-black border-solid rounded">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                        </select>
                    </form>						
                </div>
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 ">
                Status
            </div>

            <div class="w-1/2 items-center text-xs flex">
                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                    <label class="span_blue_link" for="dropdownCheck2">
                        Aktif
                    </label>
            </div>

        </div>

    </div>
        
    <div class="container w-full mt-3 flex justify-center">
            
        <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
        <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-undo"></i> Undo</button>
                    
    </div>
    

</div>


<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>