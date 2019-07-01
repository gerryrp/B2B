<html>
<?php 
    include(__DIR__.'/../head.php');
?>


<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');
?>

  
<!-- isi content -->

<div class="container w-11/12 bg-gray-200 mx-auto mt-10 p-5">
    
    <div class="w-full border-0 border-b border-solid border-gray-400">
        <div class="flex md-4">
            <span class="span_title"><h2>Add Credit Limit Authorization List</h2></span>           
        </div>
    </div>

    <div class="flex md-4 mt-2">
        <div class="w-1/3 bg-red">
            
        </div>

        <div class="w-1/2 items-center flex">
            
        </div>
        
        <div class="w-2/12 bg-blue items-center justify-end flex">
            <div class="mr-1">
                <button onclick="window.location.href = '<?=root_path?>/pages/credit/creditlimit.php';" class="btn btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
            </div>
        </div>

    </div>

    <div class="containter w-full bg-gray-200 p-2">
        <div class="flex md-4">

            <div class="w-full">
                <div class="w-full mt-1 bg-gray-200">
                   
                <div class="flex flex-wrap overflow-hidden bg-white border-0 border-b border-solid border-gray-400 p-2">

                    <div class="w-2/12 text-left text-small pt-2 ">
                        Company Name
                    </div>

                    <div class="w-1/2 flex items-center">
                        <input type="text" name="username" class="textareaxl border border-black" placeholder="">
                        <button class="btn btn-rounded btn-light"><i class="fas fa-search"></i></button>
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-white border-0 border-b border-solid border-gray-400 p-2">

                    <div class="w-2/12 text-left text-small pt-2 ">
                        Credit Limit
                    </div>

                    <div class="w-1/2">
                        IDR 0
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-white border-0 border-b border-solid border-gray-400 p-2">

                    <div class="w-2/12 text-left text-small pt-2 ">
                        Transaction
                    </div>

                    <div class="w-1/2">
                        IDR 0
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-white border-0 border-b border-solid border-gray-400 p-2">

                    <div class="w-2/12 text-left text-small pt-2 ">
                        Available
                    </div>

                    <div class="w-1/2">
                        IDR 0
                    </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-white border-0 border-b border-solid border-gray-400 p-2">

                    <div class="w-2/12 text-left text-small pt-2 ">
                        Additional Credit Amount
                    </div>

                    <div class="w-1/2 flex items-center">
                        IDR &nbsp <input type="text" name="username" class="textareasm border border-black" placeholder="">
                    </div>

                </div>


                </div>
            </div>

        </div>
    </div>

    <div class="w-full  justify-center items-center flex mt-1 ">
        <button class="btn btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
        <button class="btn btn-rounded btn-warning"><i class="fas fa-undo"></i> Cancel</button>
    </div>

</div>


<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>