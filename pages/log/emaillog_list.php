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
   
    <div class="container max-w-full "> 
        <div class="w-full border-0 border-b border-solid border-black">
            <div class="flex md-4">
                <span class="span_title"><h2>Email Log</h2></span>           
            </div>
        </div>
    </div>

    <div class="container max-w-full mt-4"> 
        <div class="flex md-4">

            <div class="w-6/12 flex md-4">
                <?php 
                    include("../../component/padding.php");
                ?>
            </div>

            <div class="flex md-4 items-center w-full justify-end">

                <div class="">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-light" value="Accepted" >Rejected and Bounced Mail</button>
                </div>

                <div class="ml-1">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-primary" value="Rejected" ><i class="fas fa-sync-alt"></i> Reset</button>
                </div>
                
            </div>

        </div>  
    </div>  

    <div class="container  max-w-full relative mt-5">

        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class=" bg-gray-400   " >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header">No.</div>
                                    <div class="table_header">Time</div>
                                    <div class="table_header">Recipient</div>
                                    <div class="table_header">Subject</div>
                                    <div class="table_header">Description</div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">26 Mar 2019 14:15</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Recipient</div>
                                        <div class="table_cell">kelapagading@reservation.santika.com</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Subject</div>
                                        <div class="table_cell">Haryono: Voucher #19014220 - DODY JONATAN	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">Mail error: SMTP Error: Could not connect to SMTP host.</div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">2</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">20 Mar 2019 11:21	</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Recipient</div>
                                        <div class="table_cell">reservation@resindahotel.com; rizky.pohan@resindahotel.com</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Subject</div>
                                        <div class="table_cell">Haryono: New Request - Reservation #19013164</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">Mail error: SMTP Error: The following recipients failed: reservation@resindahotel.com; rizky.pohan@resindahotel.com </div>
                                    </div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">3</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">11 Mar 2019 17:18</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Recipient</div>
                                        <div class="table_cell">JAKARTADOMESTIC@HARYONOTOURS..COM</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Subject</div>
                                        <div class="table_cell">Haryono: Voucher #19011320 - M FADRI AL BAIHAQI</div>
                                    </div>
                                    <div class="table_small">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">Mail error: SMTP Error: The following recipients failed: JAKARTADOMESTIC@HARYONOTOURS..COM</div>
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