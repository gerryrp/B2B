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
                    <span class="span_title"><h2>Add Role User</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="flex mb-4 mt-3">
            <div class="w-4/12 bg-red">
                
            </div>

            <div class="w-4/12 items-center justify-center flex">
                <div>
                    Search : 
                    <input type="text" class="textareasm border border-black">
                    <button><i class="fas fa-search"></i>   </button>     
                </div>
            </div>
            
            <div class="w-4/12 bg-blue items-center justify-end flex">
                <div class="mr-1">
                    <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <input type="text" name="username" class="textarealg border border-black" value="">
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Status
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <div class="w-1/2 items-center text-xs flex">
                                    <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me">
                                        <label class="span_blue_link" for="dropdownCheck1">
                                            Active
                                        </label>
                            </div>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold flex items-center">
                            End Date (Inclusive)
                        </div>

                        <div class="w-1/2 items-center text-xs flex mt-3">
                            <div>
                                    <form>
                                        <select class="border border-black border-solid rounded">
                                            <option value="API User"> API User</option>
                                            <option value="Auditor"> Auditor</option>
                                            <option value="Branch"> Branch</option>
                                            <option value="Branch Accounting"> Branch Accounting</option>
                                            <option value="Branch Accounting Admin"> Branch Accounting Admin</option>
                                        </select>
                                    </form>						
                            </div>
                        </div>

                </div>

        </div>

        <div class="container  max-w-full mt-5">
            <div class="md-4">
            
                <div class="container">
                    <div class="flex">

                        <div class="mx-auto w-full  " >
                            <div class="table text-left" id="results">
                                
                                    <div class='theader'>
                                        <div class='table_header'>Page</div>
                                        <div class='table_header text-right'>Read</div>
                                        <div class='table_header text-right'>Create</div>
                                        <div class='table_header text-right'>Update</div>
                                        <div class='table_header text-right'>Delete</div>
                                        
                                    </div>

                                    <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Page</div>
                                            <div class='table_cell'>No Data Found</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Read</div>
                                            <div class='table_cell text-right'>
                                                							
                                        
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Create </div>
                                            <div class='table_cell text-right'>
                                                
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Update</div>
                                            <div class='table_cell text-right '>
                                                
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Delete</div>
                                            <div class='table_cell text-right'>
                                                
                                            </div>
                                        </div>
                                    
                                    </div>

                                    

                            </div>
                        </div>

                    </div>    
                </div>

            </div> 
        </div>

        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                       
        </div>

        <div class="container  max-w-full mt-5">
            <div class="md-4">
            
                <div class="container">
                    <div class="flex">

                        <div class="mx-auto w-full  " >
                            <div class="table " id="results">
                                    <div class='theader'>
                                        <div class='table_header'>USER ID</div>
                                        <div class='table_header'>Name</div>
                                        <div class='table_header'>Company ID</div>                                        
                                    </div>

                                    <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header USER ID</div>
                                            <div class='table_cell'>No Data Found</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Name</div>
                                            <div class='table_cell'></div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Company ID </div>
                                            <div class='table_cell'></div>
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