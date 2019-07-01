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
                    <span class="span_title"><h2>Deposit</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-2 flex">

            <div class="w-1/2 items-center flex">
                <div class="">
                    <span class="span_success font-bold text-base"><h2>Top Up Success</h2></span>           
                </div>
            </div>

            <div class="w-1/2 flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/topup/transfer.php';" class="btn btn-rounded btn-light"><i class="fas fa-list"></i> Transfer List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-3 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Top Up No. 
                        </div>

                        <div class="w-2/12 items-center text-xs flex">
                            1903300004	 
                        </div>
                        
                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Customer No.
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            3901
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Customer Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            RODEX HOLIDAY (DP)
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Amount
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            Rp 1,200,000    
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Top Up Method
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            BCA KlikPay
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Payment Status
                        </div>

                        <div class="w-1/2  text-xs ">
                            <span>Success</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Status
                        </div>

                        <div class="w-1/2  text-xs ">
                            <span class="span_purple">Received</span>
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Top Up date
                        </div>

                        <div class="w-1/2  text-xs ">
                            30 March 2019
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Reference No.	
                        </div>

                        <div class="w-1/2  text-xs ">
                            3108240500009209
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/6 text-left text-xs font-bold  ">
                            Bank	
                        </div>

                        <div class="w-1/2  text-xs ">
                            <span class="span_blue">BCA KlikPay</span>
                        </div>

                </div>

        </div>     

        <div class="container w-full mt-5 border-dotted border-b border-solid border-gray-400">
            <div>
                <span class="font-bold text-xs">
                    788 094 8878 
                </span>
            </div>
            <div>
                <span class="font-bold text-xs">
                    HARJONO GONDO SOEWITO 
                </span>
            </div>
            <div class="mb-5">
                <span class="font-bold text-xs">
                    BCA KCU GALAXY,SURABAYA  
                </span>
            </div>
        </div> 

        
        <div class=" w-9/12 container mt-3">
                <div class="mb-3">
                        <span class="font-bold"><h2>Log</h2></span>
                </div>

                <div class="table" id="results">

                    <div class='table_row '>
                            <div class='table_small'>
                                    <div class='table_cell'>Header </div>
                                    <div class='table_cell text-left'>30 Mar 2019 21:19</div>
                            </div>
                            <div class='table_small'>
                                    <div class='table_cell'>Header </div>
                                    <div class='table_cell text-left'>BCA Klikpay :: htt</div>
                            </div>
                            <div class='table_small'>
                                    <div class='table_cell'>Header </div>
                                    <div class='table_cell text-left '>Payment is received: 1,200,000. Balance: 3,263,199 - via BCA KlikPay</div>
                            </div>
                    </div>

                    <div class='table_row'>
                            <div class='table_small'>
                                    <div class='table_cell'>Header </div>
                                    <div class='table_cell text-left'>30 Mar 2019 21:12</div>
                            </div>
                            <div class='table_small'>
                                    <div class='table_cell'>Header </div>
                                    <div class='table_cell text-left'>holiday@rodextravel.com :: rodexholiday</div>
                            </div>
                            <div class='table_small'>
                                    <div class='table_cell'>Header </div>
                                    <div class='table_cell text-left '>New request : 1,200,000</div>
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