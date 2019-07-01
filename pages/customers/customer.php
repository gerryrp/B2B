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
            <span class="span_title"><h2>Master Customer</h2></span>           
        </div>
    </div>

    <div class="flex md-4">
        <div class="w-4/12 bg-red">
            <?php 
            include(base_path.'/component/padding.php');
            ?>
        </div>

        <div class="w-4/12 items-center justify-center flex">
            <div>
                    Search : 
                    <input type="text" class="textareasm border border-black">
                        
            </div>
        </div>
        
        <div class="w-4/12 bg-blue items-center justify-end flex">
            <div class="mr-1">
                <button class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-sync-alt"></i> Reset</button>
            </div>
        </div>

    </div>

    <div class="w-full bg-gray-300 p-3 flex">

        <div class="w-1/2 flex">
            <div class=" items-center flex mx-3">
                <input id="option1" type="radio" name="field" value="option1">
                    <label for="option1"><span><span></span></span>Radio 1</label>
            </div>

            <div class=" items-center flex mx-3">
                <input id="option2" type="radio" name="field" value="option" >
                    <label for="option2">
                    <span><span></span></span> Agent
                    </label>	
            </div>

            <div class=" items-center flex mx-3">
                <input id="option3" type="radio" name="field" value="option" >
                    <label class="" for="option3">
                    <span><span></span></span> Corporate
                </label>	
            </div>

            <div class=" items-center flex mx-3">
                <input id="option4" type="radio" name="field" value="option" >
                    <label class="" for="option4">
                    <span><span></span></span>  Spesial Customer
                </label>	
            </div>

            <div class=" items-center flex mx-3">
                <input id="option5" type="radio" name="field" value="option" >
                    <label class="" for="option5">
                    <span><span></span></span>  FIT
                </label>	
            </div>
        </div>

        <div class="w-1/2 flex justify-end">
            <div class=" items-center flex mx-3">
                <input  id="option6" type="radio" name="field" value="option" >
                    <label class="" for="option6">
                    <span><span></span></span>  All
                </label>	
            </div>

            <div class=" items-center flex mx-3">
                <input id="option7" type="radio" name="field" value="option">
                    <label class="" for="option7">
                    <span><span></span></span>   Deposit
                </label>	
            </div>

            <div class=" items-center flex mx-3">
                <input id="option8" type="radio" name="field" value="option">
                    <label class="" for="option8">
                    <span><span></span></span>  Credit
                </label>	
            </div>
        </div>

    </div>

    <div class="containter w-full bg-gray-200 p-2">
        <div class="flex md-4">

            <div class="w-full">
                <div class="w-full mt-1 bg-gray-200">
                    <div class="table" id="results">

                        <div class='theader'>
                            <div class="table_header">No.</div>
                            <div class="table_header">Type</div>
                            <div class="table_header">Name</div>
                            <div class="table_header">Dpst</div>
                            <div class="table_header">Branch No</div>
                            <div class="table_header">Discount</div>
                            <div class="table_header">Address</div>
                            <div class="table_header">City</div>
                            <div class="table_header">Email</div>
                            <div class="table_header">Web Login</div>
                            <div class="table_header">User(s)</div>
                            <div class="table_header"></div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Type</div>
                                <div class='table_cell'>
                                   <span class="span_blue">A</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Name</div>
                                <div class='table_cell'>
                                   <span onclick="window.location.href = '<?=root_path?>/pages/customers/customer_detail.php';" class="span_blue_link">CAHAYA MENTARI CEMERLANG(DP)</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Dpst</div>
                                <div class='table_cell'>
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Branch No</div>
                                <div class='table_cell'>01</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Discount</div>
                                <div class='table_cell'>0</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Address</div>
                                <div class='table_cell'>RICH PALACE H10 JLN. MAYJEN SUNGKONO149-151 </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header City</div>
                                <div class='table_cell'>SURABAYA </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>travelersind@yahoo.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Web Login</div>
                                <div class='table_cell'>travelersind </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header User(s)</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
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