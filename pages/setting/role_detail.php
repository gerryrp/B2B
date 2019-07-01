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
                    <span class="span_title"><h2>User Role Detail</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-2 w-full flex">
            <div class="w-4/12">
            
            </div>
            
            <div class="w-4/12 items-center justify-center flex">
                <div>
                    Search : 
                    <input type="text" class="textareasm border border-black">
                    <button><i class="fas fa-search"></i>   </button>     
                </div>
            </div>

            <div class="w-4/12 flex justify-end items-center ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/setting/role_edit.php';" class="btn btn-sm btn-rounded btn-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '';"  class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-times"></i> Delete</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '<?=root_path?>/pages/setting/role_add.php';"  class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                </div>

                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/setting/role.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            API User
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

        <div class="container  max-w-full mt-5">
            <div class="md-4">
            
                <div class="container">
                    <div class="flex">

                        <div class="mx-auto w-full  " >
                            <div class="table text-left" id="results">

                                    <div class="theader">
                                        <div class="table_header">Page</div>
                                        <div class="table_header text-right">Read</div>
                                        <div class="table_header text-right">Create</div>
                                        <div class="table_header text-right">Update</div>
                                        <div class="table_header text-right">Delete</div>
                                        
                                    </div>

                                    <div class="table_row ">
                                        <div class="table_small">
                                            <div class='table_cell'>Header Page</div>
                                            <div class='table_cell'>
                                                <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">bhotel</span>
                                            </div>
                                        </div>
                                        <div class="table_small">
                                            <div class='table_cell'>Header Read</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                   &nbsp
                                                </label>							
                                        
                                            </div>
                                        </div>
                                        <div class="table_small" >
                                            <div class='table_cell'>Header Create </div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class="table_small" >
                                            <div class='table_cell'>Header Update</div>
                                            <div class='table_cell text-right '>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class="table_small" >
                                            <div class='table_cell'>Header Delete</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="table_row">
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Page</div>
                                            <div class='table_cell '>
                                                <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">home</span>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Read</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>							
                                        
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Create </div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Update</div>
                                            <div class='table_cell text-right '>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Delete</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="table_row">
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Page</div>
                                            <div class='table_cell '>
                                                <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">invoice</span>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Read</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>							
                                        
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Create </div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Update</div>
                                            <div class='table_cell text-right '>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Delete</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="table_row">
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Page</div>
                                            <div class='table_cell '>
                                                <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">reportc/reservation</span>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Read</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>							
                                        
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Create </div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Update</div>
                                            <div class='table_cell text-right '>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Delete</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="table_row">
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Page</div>
                                            <div class='table_cell '>
                                                <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">reservation</span>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Read</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>							
                                        
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Create </div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Update</div>
                                            <div class='table_cell text-right '>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Delete</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="table_row">
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Page</div>
                                            <div class='table_cell '>
                                                <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">reservation/lst</span>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Read</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>							
                                        
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Create </div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Update</div>
                                            <div class='table_cell text-right '>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Delete</div>
                                            <div class='table_cell text-right'>
                                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                                                <label class="span_blue_link" for="dropdownCheck2">
                                                    &nbsp
                                                </label>
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
                                    <div class="theader">
                                        <div class='table_header'>USER ID</div>
                                        <div class='table_header'>Name</div>
                                        <div class='table_header'>Company ID</div>                                        
                                    </div>

                                    <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header USER ID</div>
                                            <div class='table_cell'>
                                                <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">backoffice</span>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Name</div>
                                            <div class='table_cell'>Haryono Backoffice</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Company ID </div>
                                            <div class='table_cell'>NUMBERONE</div>
                                        </div>                                                        
                                    </div>

                                    <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header USER ID</div>
                                            <div class='table_cell'>
                                                <span onclick="window.location.href = '<?=root_path?>/pages/setting/role_detail.php';" class="span_blue_link">numberoneapi</span>
                                            </div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Name</div>
                                            <div class='table_cell'>Number One</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Company ID </div>
                                            <div class='table_cell'>NUMBERONE</div>
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