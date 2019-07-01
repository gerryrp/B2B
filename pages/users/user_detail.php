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
                    <span class="span_title"><h2>User Detail</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container">

            <div class="flex justify-end ">

            
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/users/user_edit.php';" class="btn btn-sm btn-rounded btn-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                </div>

                
                <div class="mr-1">
                        <button onclick="window.location.href = '';" class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-pencil-alt"></i> Delete</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '<?=root_path?>/pages/users/user_add.php';"  class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                </div>


                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/users/user.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                User ID
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                jambireservation@astonhotelsasia.com
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Full Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Email
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                jambiinfo@astonhotelsasia.com
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Address
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                Jl. Sultan Agung No. 99 Kel. Murni Telanai Pura - Jambi
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                City
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                Jambi
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Phone
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                +62 741 33 777
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Fax
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                +62 741 33 999
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Instant Messenger
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                TBA
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
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                       
        </div>

       
        <div class="container w-full mt-8 ">
                <div class="w-full mb-2">
                        <div class="flex md-4">
                                <span class="span_title text-sm"><h2>Role Access List</h2></span>           
                        </div>
                </div>
                
                
                <div class="container w-full">
                    <div class="flex">
                        
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
                                                    <span onclick="window.location.href = 'hotelGroup_detail.php';" class="span_blue_link">astonjambi</span>
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Company Name</div>
                                                <div class='table_cell'>ASTON JAMBI</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Role Access</div>
                                                <div class='table_cell'>
                                                    <span onclick="window.location.href = 'hotelGroup_detail.php';" class="span_blue_link">Hotel Reservation</span>
                                                </div>
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