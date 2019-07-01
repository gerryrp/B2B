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
                    <span class="span_title"><h2>API Setting</h2></span>           
                </div>
            </div>
           
        </div>
       

        <div class="container w-full mt-5 ">

            <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                    Active
                </div>

                <div class="w-1/2 items-center text-xs flex">
                    <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me">
                        <label class="span_blue_link mr-3" for="dropdownCheck1">
                            YES
                        </label>				
                    
                </div>

            </div>

            <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                   Check IP
                </div>

                <div class="w-1/2 items-center text-xs flex">
                    <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                        <label class="span_blue_link mr-3" for="dropdownCheck2">
                            YES
                        </label>				
                    
                </div>

            </div>


            <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                    <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                        Type
                    </div>

                    <div class="w-1/2 items-center text-xs flex">
                        <input type="checkbox" class="check" id="dropdownCheck3"  data-label="remember me">
                            <label class="span_blue_link mr-3" for="dropdownCheck3">
                                ALL
                            </label>

                        <input type="checkbox" class="check" id="dropdownCheck4"  data-label="remember me">
                            <label class="span_blue_link mr-3" for="dropdownCheck4">
                                Promo Only
                            </label>

                        <input type="checkbox" class="check" id="dropdownCheck5"  data-label="remember me">
                            <label class="span_blue_link mr-3" for="dropdownCheck5">
                                B2C rate Only
                            </label>							
                        

                    </div>

            </div>

            <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                    <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                        Amount
                    </div>

                    <div class="w-1/2 items-center text-xs flex">
                    <input type="text" name="username" class="textareaxxs border border-black" value="6">
                    </div>

            </div>

        </div>

        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
                     
        </div>


</div>

<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>