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
                    <span class="span_title"><h2>Add Branch</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container">

            <div class="flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/branch/branch.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Address
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Phone
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textareasm border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Fax
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textareasm border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Email
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textarealg border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                City
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textareasm border border-black" >
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                VC Code
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                <input type="text" class="textareaxs border border-black" >
                        </div>

                </div>

        </div>

       
        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                       
        </div>


        <div class="containter w-full bg-gray-200 p-2">

        <h4 class="text-base font-bold">User List</h4>
            <div class="flex md-4">
                

                <div class="w-full">
                    <div class="w-4/12 mt-1 bg-gray-200">
                        <div class="table" id="results">

                            <div class='theader'>
                                <div class='table_header'>User ID</div>
                                <div class='table_header'>Role</div>
                            </div>

                            <div class='table_row'>
                                <div class='table_small'>
                                    <div class='table_cell'>Header No.</div>
                                    <div class='table_cell'></div>
                                </div>
                                <div class='table_small'>
                                    <div class='table_cell'>Header Branch</div>
                                    <div class='table_cell'></div>
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