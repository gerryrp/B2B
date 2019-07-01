<html>

<?php 
    include(__DIR__."/../head.php");
?>



<body>

<?php 
include(base_path."/component/header.php");
include(base_path."/component/ads_slider.php");

?>

<!-- isi content adasd -->

<div class="container bg-gray-200 mx-auto w-11/12 mt-10 p-5">
   
    <div class="container max-w-full"> 
        <div class="w-full border-0 border-b border-solid border-black">
            <div class="flex md-4">
                <span class="span_title"><h2>Mandrill Email List</h2></span>           
            </div>
        </div>
    </div>

    <div class="container max-w-full">
        <div class="flex md-4 justify-end">

                <div class="">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="Rejected" >Search</button>
                </div>

                <div class="">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="Rejected" >Blacklist</button>
                </div>

                <div class="">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="Rejected" >Whitelist</button>
                </div>

        </div>
    </div>

    <div class="container max-w-full bg-gray-500"> 
        <div class="flex md-4">

            <div class="w-3/12 items-center flex">              
                <div>
                    Search : 
                    <input type="text" class="textareasm border border-black">
                </div>
            </div>

            <div class="w-2/12 ">

                <div class="text-small text-left">
                    From
                </div>

                <div>
                    <label for="dateofbirth"></label>
                </div>

                <div class="flex md-4 justify-start items-center">
                    <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                </div>

            </div>

            <div class="w-2/12">

                <div class="text-small text-left">
                    To
                </div>

                <div>
                    <label for="dateofbirth"></label>
                </div>

                <div class="flex md-4 justify-start items-center">
                    <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                </div>

            </div>

            <div class="w-2/12 flex md-4 items-center">

                <div class="ml-5">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="Rejected" >Search</button>
                </div>
                
            </div>

        </div>  
    </div>  

    <div class="container  max-w-full relative mt-1">

        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class=" w-full mx-auto bg-gray-400" >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header p-2">Time</div>
                                    <div class="table_header p-2">Email</div>
                                    <div class="table_header p-2">Subject</div>
                                    <div class="table_header p-2">Sender</div>
                                    <div class="table_header p-2">Opens</div>
                                    <div class="table_header p-2">Click</div>
                                    <div class="table_header p-2">State</div>
                                    <div class="table_header p-2">Event</div>
                                </div>
                                
                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-06-17 11:51</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Email</div>
                                        <div class="table_cell">reservation.sub@artotelindonesia.com</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Subject</div>
                                        <div class="table_cell">Haryono: Voucher #19024102 - DERI NUGRAHA</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Sender</div>
                                        <div class="table_cell">noreply@haryono.co.id	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Opens</div>
                                        <div class="table_cell">0</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Click</div>
                                        <div class="table_cell">0</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header State</div>
                                        <div class="table_cell">
                                            <span class="bg-green-700 text-white p-1">sent</span>
                                        </div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Event</div>
                                        <div class="table_cell">Event</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-06-17 13:19</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Email</div>
                                        <div class="table_cell">b2b-deposit@haryono.co.id</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Subject</div>
                                        <div class="table_cell">Haryono: Transferred - Deposit #1906170002</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Sender</div>
                                        <div class="table_cell">noreply@haryono.co.id	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Opens</div>
                                        <div class="table_cell">0</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Click</div>
                                        <div class="table_cell">0</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header State</div>
                                        <div class="table_cell">
                                        <span class="bg-green-700 text-white p-1">sent</span>
                                        </div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Event</div>
                                        <div class="table_cell">Event</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-06-17 13:19</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Email</div>
                                        <div class="table_cell">oranjetravel@yahoo.co.id</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Subject</div>
                                        <div class="table_cell">Haryono: Top Up - Deposit #1906170002</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Sender</div>
                                        <div class="table_cell">noreply@haryono.co.id	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Opens</div>
                                        <div class="table_cell">0</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Click</div>
                                        <div class="table_cell">0</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header State</div>
                                        <div class="table_cell">
                                        <span class="bg-green-700 text-white p-1">sent</span>
                                        </div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Event</div>
                                        <div class="table_cell">Event</div>
                                    </div>
                                </div>
                               
                        </div>
                    </div>

                </div>    
            </div>

        </div>

        <!-- <div class="overlay overlay-relative justify-center flex">
            <div class=" loading loading-lg mt-10">

            </div>
        </div> -->

    </div>

</div>


<?php 
include(base_path."/component/footer.php");
?>

</body>
</html>