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
                    <span class="span_title"><h2>Credit Limit Authorization Details</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-2">

            <div class="flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/credit/creditlimit_edit.php';" class="btn btn-rounded btn-light"><i class="fas fa-pencil-alt"></i> Edit</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '#';"  class="btn btn-rounded btn-danger"><i class="fas fa-times"></i> Delete</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '<?=root_path?>/pages/credit/creditlimit_add.php';"  class="btn btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                </div>

                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/credit/creditlimit.php';" class="btn btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-3 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold pt-2 ">
                            Company Name
                        </div>

                        <div class="w-2/12 items-center text-xs flex">
                            AMMAN MINERAL NUSA TENGGARA	 
                        </div>
                        
                        <button class="btn btn-sm btn-rounded btn-light"><i class="fas fa-search"></i></button>
                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold pt-2 ">
                            Credit Limit
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            IDR 4,599,000,000
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold pt-2 ">
                            Transaction
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            IDR 5,022,633,731
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold pt-2 ">
                            Available
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            IDR -423,633,731    
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold pt-2 ">
                            Additional Credit Amount
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            IDR 433,000,000
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold pt-2 ">
                            By
                        </div>

                        <div class="w-1/2  text-xs ">
                            <div class="items-center flex">
                                FAN                 
                            </div> 
                            <div class="items-center flex">
                                31 March 2019 20:51
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