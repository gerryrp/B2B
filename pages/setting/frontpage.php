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

            <div class="w-full border-0 border-b border-solid border-black">
                <div class="flex md-4">
                    <span class="span_title"><h2>Front Page</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-5">

            <div class="flex ">
                <div class="text-base font-bold">
                    <h2>Active Page<h2>
                </div>
            </div>

        </div>

        <div class="container w-full mt-2 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                    <div class="w-1/5 text-left text-xs font-bold pt-2 items-center flex">
                        HTML
                    </div>

                    <div class="w-8/12  text-xs md-4">

                        <textarea rows="20" cols="60" class="border border-black rounded-lg">
                            <h1></h1>
                            <h2></h2>
                        </textarea>
                            
                    </div>
                        
                </div>


                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Date Start
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            
                            <input type="text" name="username" class="textareasm border border-black" value="16 Oct 2011">

                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 justify-center items-center ml-2">
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
                            
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Date End
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                        
                            <input type="text" name="username" class="textareasm border border-black" value="31 Oct 2011">

                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 justify-center items-center ml-2">
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
                        </div>

                </div>

        </div>

        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                       
        </div>

        <div class="container mt-5">

            <div class="flex ">
                
                <span class="font-bold text-base"><h2>Default Page</h2></span> &nbsp<span class="text-sm font-bold"><h2> (If the active page is expired this html will be displayed)</h2></span>
                
            </div>

        </div>

        <div class="container w-full mt-2 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                    <div class="w-1/5 text-left text-xs font-bold pt-2 items-center flex ">
                        HTML
                    </div>

                    <div class="w-8/12  text-xs md-4">

                        <textarea rows="20" cols="60" class="border border-black rounded-lg">
                            <h1>Business to Business<br/>Domestic Hotel Reservation</h1><br/><br/>

                            <span class="span_yellow" style="font-size:14px;padding:5px">Made for Travel Agent, Corporate, and Hotel users</span><br/><br/>
                            <span class="span_blue" style="font-size:14px;padding:5px">We are now accepting <br/><br/><a href="http://www.klikbca.com/KlikPay/klikpay.html" target="_blank" style="color:white;text-decoration:none"> <b>BCA KlikPay</b></a>, <b>CIMB Clicks</b> and  <b>Mandiri Clickpay</b></span><br/><br/><br/>

                            Built and run on Open Source Software<br/>
                            <b>Compatible with <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank" style="text-decoration:none">Google Chrome</a>, <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank" style="text-decoration:none">Mozilla Firefox</a>, & <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie/" target="_blank" style="text-decoration:none">Internet Explorer 9</a></b> and above<br/>
                            <span style="color:brown">Not compatible with Internet Explorer 8 and below</span><br/>
                            Need help? Contact us at inf<a href="http://www.google.com/recaptcha/mailhide/d?k=01hpI-Mg5ShFZmnWyVfzZDAA==&c=DQI6oviz-P99V4IwFiP6KwaAqHg2Suz3-fDEjbUfdLU=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501hpI-Mg5ShFZmnWyVfzZDAA\75\75\46c\75DQI6oviz-P99V4IwFiP6KwaAqHg2Suz3-fDEjbUfdLU\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">...</a>@haryono.co.id<br/><br/>

                            Copyright ©2014 <a href="http://www.haryonotours.com" target="_blank" style="text-decoration:none">www.haryonotours.com</a> [BETA]
                        </textarea>
                            
                    </div>
                        
                </div>
        </div>


</div>

<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>