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
                <span class="span_title"><h2>Menu Detail</h2></span>           
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
                    <button onclick="window.location.href = '<?=root_path?>/pages/menu/menu_edit.php';" type="button" class="btn  btn-warning btn-sm btn-rounded mr-3  " value="Reset"><i class="fas fa-pencil-alt"></i> Edit</button> 
                </div>
                <div>
                    <button type="button" class="btn  btn-danger btn-sm btn-rounded mr-3  " value="Reset"><i class="fas fa-times"></i> Delete</button> 
                </div>
                <div>
                    <button onclick="window.location.href = '<?=root_path?>/pages/menu/menu_add.php';" type="button" type="button" class="btn  btn-success btn-sm btn-rounded mr-3  " value="Reset"><i class="fas fa-plus"></i> Add</button> 
                </div>
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
                Home
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 ">
                URL Controller
            </div>

            <div class="w-1/2 items-center text-xs flex">
                home
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 ">
                Parent
            </div>

            <div class="w-1/2 items-center text-xs flex">
                
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 ">
                Bind to Page
            </div>

            <div class="w-1/2 items-center text-xs flex">
                home
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 ">
                Order
            </div>

            <div class="w-1/2 items-center text-xs flex">
                1
            </div>

        </div>

        <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

            <div class="w-1/5 text-left text-sm font-bold pt-2 ">
                Status
            </div>

            <div class="w-1/2 items-center text-xs flex">
                <span class="span_blue">Active</span>
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