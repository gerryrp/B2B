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

            <div class="w-full border-0 border-b border-solid border-gray-400">
                <div class="flex md-4">
                    <span class="span_title"><h2>Customer Edit</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container">

            <div class="flex justify-end ">
                <div class="mr-1">
                        <button  onclick="window.location.href = 'user_add.php';"  class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add User</button>
                </div>

                <div class="mr-1">
                        <button onclick="window.location.href = '';" class="btn btn-sm btn-rounded btn-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                </div>

                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/customers/customer.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                CAHAYA MENTARI CEMERLANG(DP)
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Address
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                RICH PALACE H10 JLN. MAYJEN SUNGKONO149-151
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                City
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                SURABAYA
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Phone
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Fax
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                0315689221
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Email 
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                travelersind@yahoo.com
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Contact Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                JOHAN SENTOSA
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Customer Type
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <span class="span_blue">A</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Company ID
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textarealg border border-black" value="travelersind">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Branch No.
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textareaxs border border-black" value="01">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Discount
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textareaxs border border-black" value="0.00">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Airline Admin Fee
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textareaxs border border-black" value="0.00">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Airline Ticket Markup
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textareaxs border border-black" value="">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Show Ticket Price
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me" disable>
                                <label class="span_blue_link" for="dropdownCheck1">
                                       &nbsp 
                                </label>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Additional Room Price
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textareaxs border border-black" value="0.00">
                           &nbsp %
                        </div>
                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                               
                        </div>

                        <div class="w-1/2 items-center text-xs">
                                <div>
                                    <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me" disable>
                                    <label class="" for="dropdownCheck1">
                                        Use Deposit
                                    </label>
                                </div>
                                <div class="font-bold mt-2">
                                    Current deposit = Rp 9,333
                                </div>
                                <div class="span_blue_link mt-2">
                                    Deposit log
                                </div>

                                <div class="w-1/2 items-center text-xs flex mt-2">
                                    Add deposit Value &nbsp <input type="text" name="username" class="textareasm border border-black" value="">
                                </div>

                                <div class="w-1/2 items-center text-xs flex mt-3">
                                    Deposit Log Note &nbsp <textarea rows="4" cols="25" class="border border-black rounded-lg"></textarea>
                                </div>

                                <div class="text-base mt-4 justify-end flex w-1/2 ">
                                    <button class="btn btn-light"><i class="fas fa-pencil-alt"></i> Update Deposit</button>
                                </div>
                        </div>

                </div>

                <div class="container w-full mt-3 flex justify-center">
            
                    <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
                    <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                            
                </div>

        </div>

       

        <div class="container w-full mt-8 ">
                <div class="w-full mb-2">
                        <div class="flex md-4">
                                <span class="span_title text-base"><h2>User List</h2></span>           
                        </div>
                </div>
                
                
                <div class="container w-full">
                    <div class="flex">
                        
                            <div class="w-8/12 bg-gray-400 " >
                                <div class="table" id="results">
                                        <div class='theader'>
                                            <div class='table_header'>Username</div>
                                            <div class='table_header'>Name</div>
                                            <div class='table_header'>Email</div>
                                            <div class='table_header'>Role</div>

                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Username</div>
                                                <div class='table_cell'>
                                                    <span onclick="window.location.href = 'hotelGroup_detail.php';" class="span_blue_link">travelersind@yahoo.co.id</span>
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Name</div>
                                                <div class='table_cell'>Johan Sentosa</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Email</div>
                                                <div class='table_cell'>travelersind@yahoo.co.id</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Role</div>
                                                <div class='table_cell'>JL. ENGKU PUTRI, BATAM 29641</div>
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