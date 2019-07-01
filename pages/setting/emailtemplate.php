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

<div class="container bg-gray-200 mx-auto w-11/12 mt-10 p-5">


        <div class="container max-w-full"> 
                <div class="w-full border-0 border-b border-solid border-black">
                        <div class="flex md-4">
                        <span class="span_title"><h2>Email Template List</h2></span>           
                        </div>
                </div>
        </div>

    
    <div class="container  max-w-full mt-5">
        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class="mx-auto w-full  " >
                        <div class="table text-left" id="results">
                                <div class='theader'>
                                    <div class='table_header'>Template Name</div>
                                    <div class='table_header'>Subject</div>
                                    <div class='table_header'></div>
                                    
                                </div>

                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Template Name</div>
                                        <div class='table_cell '>
                                            <span onclick="window.location.href = '<?=root_path?>/pages/setting/emailtemplate_detail.php';" class="span_blue_link">Allotment Reminder</span>
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Subject</div>
                                        <div class='table_cell text-left'>Haryono: Allotment Reminder - {{name}}</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-right'>
                                            <button type="button"><i class="fas fa-pencil-alt"></i></button>
                                        </div>
                                    </div>
                                   
                                </div>

                                
                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell '><span onclick="window.location.href = '<?=root_path?>/pages/setting/imarksetting_detail.php';" class="span_blue_link">Allotment to Hotel</span> </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Name</div>
                                        <div class='table_cell text-left'>Haryono: Allotment Usage - Reservation #{{bookingcode}}</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-right'>
                                            <button type="button"><i class="fas fa-pencil-alt"></i></button>
                                        </div>
                                    </div>
                                   
                                </div>

                                
                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header No</div>
                                        <div class='table_cell '>
                                            <span onclick="window.location.href = '<?=root_path?>/pages/setting/imarksetting_detail.php';" class="span_blue_link">Cancel After Confirm</span> 
                                        </div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header Name</div>
                                        <div class='table_cell text-left'>Haryono: Cancel Request - Reservation #{{bookingcode}}</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>Header </div>
                                        <div class='table_cell text-right'>
                                            <button type="button"><i class="fas fa-pencil-alt"></i></button>
                                        </div>
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