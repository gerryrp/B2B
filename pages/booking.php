<html>
<?php 
include('head.php');
?>


<body>

<?php 
include(base_path.'/component/header.php');
include(base_path.'/component/ads_slider.php');
?>


<!-- isi content -->

<div class="container w-11/12 bg-gray-200 mx-auto mt-10 p-5">
    <div class="flex md-4">

        <div class="w-full border-0 border-b border-solid border-black">
            <span class="span_title text-lg "><h2>Booking Summary</h2><span>
        </div>

    </div>

    <div class="flex md-4 mt-4">

        <div class="w-full ">
            <h2 class="font-bold">ZEST HOTEL JEMURSARI</h2><br>
            <p class="text-xs">JL.RAYA PRAPEN 266, SURABAYA<br>
            F: P: 031 - 9900 3888 <br>
            E: engineer@haryono.co.id<br></p>
        </div>


    </div>

    <div class="flex md-4 my-8">

        <div class="w-full bg-teal-200 p-1  ">
            <span class="span_status">CANCELLATION 4 DAYS PRIOR ARRIVAL</span>
        </div>

    </div>

    <div class="containter w-full bg-gray-200 p-2">
        <div class="w-full">
            <span class="span_title text-lg "><h2>Please enter invoice & voucher detail</h2><span>
        </div>

        <div class="flex bg-white border-0 border-b border-solid border-black p-1 items-center">
                    <div class="w-1/3 ">
                        <p class="text-left text-base">Invoice Contact Person</p>
                    </div>

                    <div class="w-full flex">
                        <input type="text" name="username" class="textareasm border border-black ml-8">

                        <div class="mx-1">
                                    <form>
                                        <select class="border border-black border-solid">
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Mstr">Mstr</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Inf">Inf</option>
                                            <option value="Grp">Grp</option>
                                            <option value="Fam">Fam</option>
                                            <option value="CV">CV</option>
                                            <option value="PT">PT</option>
                                        </select>
                                    </form>						
                        </div>
                    </div>

                    
                            
        </div>

        <div class="flex bg-white border-0 border-b border-solid border-black p-1 items-center">
                    <div class="w-1/3 ">
                        <p class="text-left text-base"> Company</p>
                    </div>

                    <div class="w-full">
                        <input type="text" name="username" class="textarealg border border-black ml-8">
                    </div>
        </div>

        <div class="flex bg-white border-0 border-b border-solid border-black p-1 items-center">
                    <div class="w-1/3 ">
                        <p class="text-left text-base"> Phone</p>
                    </div>

                    <div class="w-full">
                        <input type="text" name="username" class="textarealg border border-black ml-8">
                    </div>
        </div>

        <div class="flex bg-white border-0 border-b border-solid border-black">
                    <div class="w-1/3">
                    <p class="text-left text-base"> Address</p>
                    </div>

                    <div class="w-full m-1">
                    <textarea rows="6" cols="29" class="border border-black rounded-lg ml-8"> </textarea>
                    </div>
        </div>
    </div>


    <div class="w-full mt-4">
            <span class="span_title text-sm">Tue, 28 May 2019 - Wed, 29 May 2019 ~ 1 Night(s)<span>
    </div>

    <div class="w-full mt-1 bg-gray-200">
                    <div class="table" id="results">
                                            <div class='theader'>
                                              <div class='table_header'>Qty.</div>
                                              <div class='table_header'>Room Type & Facility</div>
                                              <div class='table_header'>Price Per Unit</div>
                                              <div class='table_header'>Room Price</div>
                                              <div class='table_header'>Additional Fee</div>
                                              <div class='table_header'>Discount</div>
                                              <div class='table_header'>Guest Name & Special Guest</div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Qty</div>
                                                    <div class='table_cell'>
                                                        <input type="text" name="qty" class="textareaxxs" placeholder="0">
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Room Type</div>
                                                    <div class='table_cell'>EXTRA BED</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Facility</div>
                                                    <div class='table_cell'>BREAKFAST FOR 1</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Price</div>
                                                    <div class='table_cell'>IDR 205,000</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Availability</div>
                                                    <div class='table_cell'>
                                                        <span class="span_danger">On request</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Remark</div>
                                                    <div class='table_cell'>Normal</div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Qty</div>
                                                    <div class='table_cell'>
                                                        <input type="text" name="qty" class="textareaxxs" placeholder="0">
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Room Type</div>
                                                    <div class='table_cell'>ZEST DOUBLE ROOM</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Facility</div>
                                                    <div class='table_cell'>BREAKFAST FOR 2</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Price</div>
                                                    <div class='table_cell'>IDR 350,000</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Availability</div>
                                                    <div class='table_cell'>
                                                        <span class="span_primary">Available</span>
                                                        <span>50/night</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Remark</div>
                                                    <div class='table_cell'>Canceled by OP</div>
                                                </div>
                                            </div>

                                            <div class='table_row'>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Qty</div>
                                                    <div class='table_cell'>
                                                    <input type="text" name="qty" class="textareaxxs" placeholder="0">
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Room Type</div>
                                                    <div class='table_cell'>ZEST TWIN ROOM</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Facility</div>
                                                    <div class='table_cell'>BREAKFAST FOR 2</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Price</div>
                                                    <div class='table_cell'>IDR 350,000</div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Availability</div>
                                                    <div class='table_cell'>
                                                        <span class="span_primary">Available</span>
                                                        <span>50/night</span>
                                                    </div>
                                                </div>
                                                <div class='table_small'>
                                                    <div class='table_cell'>Header Remark</div>
                                                    <div class='table_cell'>1</div>
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