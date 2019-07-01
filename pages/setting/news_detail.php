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
                    <span class="span_title"><h2>News Detail</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container mt-2">

            <div class="flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/setting/news_edit.php';" class="btn btn-rounded btn-light"><i class="fas fa-pencil-alt"></i> Edit</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '';"  class="btn btn-rounded btn-light"><i class="fas fa-times"></i> Delete</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = '<?=root_path?>/pages/setting/news_add.php';"  class="btn btn-rounded btn-light"><i class="fas fa-plus"></i> Add</button>
                </div>

                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/setting/news.php';" class="btn btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Title
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            PROMO MULIA BALI
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Date Start
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            19 March 2019
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Date End
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            3 April 2019
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Content
                        </div>

                        <div class="w-8/12  text-xs md-4">
                            <div class="w-full ">
                                <span class="span_success font-bold text-lg">MULIA RESORT NUSA DUA…</span>
                            </div>

                            <div class="w-full mt-3">
                                <span class="font-bold text-lg">
                                    GET SPECIAL RATE & SPC DISC 50K & INCENTIVE 100K , BOOKING PERIODE 28 MAR-3 APR`19 FOR STAY PERIOD 1 JUN-14 JUL`19
                                </span>
                            </div>
                            
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-black p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                            Amount
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                            <span class="span_blue">Active</span>
                        </div>

                </div>

        </div>

        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-light"><i class="fas fa-save"></i> Save</button>
            <button onclick="window.location.href = 'master_hotelRoomType.php';" class="btn btn-rounded btn-light"><i class="fas fa-undo"></i> Cancel</button>
                       
        </div>


</div>

<?php 
include(base_path.'/component/footer.php');
?>

</body>
</html>