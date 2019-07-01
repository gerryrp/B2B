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
                        <span class="span_title"><h2>API User Detail</h2></span>           
                        </div>
                </div>
                
                </div>
                
                <div class="container">

                <div class="flex justify-end ">

                
                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/apiusers/apiuser_edit.php';" class="btn btn-sm btn-rounded btn-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                        </div>

                        
                        <div class="mr-1">
                                <button onclick="window.location.href = '';" class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-pencil-alt"></i>Delete</button>
                        </div>

                        <div class="mr-1">
                                <button  onclick="window.location.href = '<?=root_path?>/pages/apiusers/apiuser_add.php';"  class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                        </div>


                        <div class="mr-1">
                                <button onclick="window.location.href = '<?=root_path?>/pages/apiusers/apiuser.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                        </div>
                </div>

                </div>

                <div class="container w-full mt-5 ">

                        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                        User ID
                                </div>

                                <div class="w-1/2 items-center text-xs flex">
                                        backoffice
                                </div>

                        </div>

                        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                        Full Name
                                </div>

                                <div class="w-1/2 items-center text-xs flex">
                                        Haryono Backoffice
                                </div>

                        </div>

                        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                        Email
                                </div>

                                <div class="w-1/2 items-center text-xs flex">
                                        milhanol068@gmail.com
                                </div>

                        </div>

                        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                        Address
                                </div>

                                <div class="w-1/2 items-center text-xs flex">
                                        
                                </div>

                        </div>

                        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                        City
                                </div>

                                <div class="w-1/2 items-center text-xs flex">
                                        
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
                                
                                </div>

                        </div>

                        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                        Instant Messenger
                                </div>

                                <div class="w-1/2 items-center text-xs flex">
                                        
                                </div>

                        </div>

                        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                        API Key
                                </div>

                                <div class="items-center text-xs flex">
                                        85fbfd5a7efa468111c11949409d3	
                                </div>

                                <div>
                                        <button onclick="window.location.href = '';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-sync"></i> Regenerate</button>
                                </div>

                        </div>

                        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                        Secret Key
                                </div>

                                <div class="w-1/2 items-center text-xs flex">
                                        c8be2edc7ea54dc5ac4 
                                </div>

                        </div>

                        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                        Status
                                </div>

                                <div class="w-1/2 items-center text-xs flex">
                                        <span class="span_blue">Active</span>
                                </div>

                        </div>

                </div>


                <div class="container w-full mt-3 flex justify-center">
                
                <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
                <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                        
                </div>

        
                <div class="container w-full mt-8 ">
                        <div class="w-full mb-2">
                                <div class="flex md-4">
                                        <span class="span_title text-sm"><h2>API IP Address</h2></span>           
                                </div>
                        </div>
                        
                        
                        <div class="container w-full">
                        <div class="flex">
                                
                                <div class="w-8/12 bg-gray-400 " >
                                        <div class="table" id="results">
                                                <div class='theader'>
                                                <div class='table_header'>IP Address</div>
                                                <div class='table_header'>Environment</div>
                                                <div class='table_header'></div>
                                                </div>

                                                <div class='table_row'>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header IP Address</div>
                                                        <div class='table_cell'>
                                                                <input type="text" class="textareasm border border-black" >
                                                        </div>
                                                </div>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header Environment</div>
                                                        <div class='table_cell'>
                                                                <form>
                                                                        <select class="border border-black border-solid rounded">
                                                                        <option value="Development">Development</option>
                                                                        <option value="Production">Production</option>
                                                                        </select>
                                                                </form>
                                                        </div>
                                                </div>
                                                <div class='table_small'>
                                                        <div class='table_cell'>Header </div>
                                                        <div class='table_cell'>
                                                                <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                                                        </div>
                                                </div>
                                                </div>

                                        </div>
                                </div>

                                
                        </div>    
                        </div>

                </div>

                <div class="container w-full mt-8">
                        
                                <div class="mb-2">
                                        <div class="flex md-4">
                                                <span class="span_title text-sm"><h2>API IP Address</h2></span>           
                                        </div>
                                </div>
                                
                                <div class="w-8/12 bg-gray-400 " >
                                <div class="table" id="results">
                                        <div class='theader'>
                                                <div class='table_header'>Company ID</div>
                                                <div class='table_header'>Company Name</div>
                                                <div class='table_header'>Role Access</div>
                                        </div>

                                        <div class='table_row'>
                                                <div class='table_small'>
                                                <div class='table_cell'>Header Company ID</div>
                                                <div class='table_cell'>
                                                        <span onclick="window.location.href = 'hotelGroup_detail.php';" class="span_blue_link">numberone</span>
                                                </div>
                                                </div>
                                                <div class='table_small'>
                                                <div class='table_cell'>Header Company Name</div>
                                                <div class='table_cell'>NUMBER ONE</div>
                                                </div>
                                                <div class='table_small'>
                                                <div class='table_cell'>Header Role Access</div>
                                                <div class='table_cell'>
                                                        <span onclick="window.location.href = 'hotelGroup_detail.php';" class="span_blue_link">API User </span>
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