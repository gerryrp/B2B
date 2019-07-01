<html>
<head>
<title>B2B Haryono</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">              
        
        <?php 
        include(__DIR__.'/../head.php');
        ?>

</head>


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
                    <span class="span_title"><h2>Hotel Group Detail</h2></span>           
                </div>
            </div>
           
        </div>
             
        <div class="container">

            <div class="flex justify-end ">
                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/hotel/hotelGroup_edit.php';" class="btn btn-sm btn-rounded btn-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                </div>

                <div class="mr-1">
                        <button class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-times"></i> Delete</button>
                </div>

                <div class="mr-1">
                        <button  onclick="window.location.href = 'hotelGroup_add.php';"  class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                </div>

                <div class="mr-1">
                        <button onclick="window.location.href = '<?=root_path?>/pages/hotel/hotelGroup.php';" class="btn btn-sm btn-rounded btn-light"><i class="fas fa-list"></i> List</button>
                </div>
            </div>

        </div>

        <div class="container w-full mt-5 ">

                <h4 class="border-b border-black text-sm text-white text-left bg-blue-800 p-2">Hotel Group Information</h4>
                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Name
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                TAUZIA HOTELS
                        </div>

                </div>

                <div class="flex flex-wrap overflow-hidden bg-gray-100 border-0 border-b border-solid border-gray-400 p-2 ">

                        <div class="w-1/5 text-left text-xs font-bold pt-2 ">
                                Description
                        </div>

                        <div class="w-1/2 items-center text-xs flex">
                                
                        </div>

                </div>

        </div>

       

        <div class="container w-full mt-8 ">
                <div class="w-full mb-2">
                        <div class="flex md-4">
                                <span class="span_title text-sm"><h2>Hotel List (7)</h2></span>           
                        </div>
                </div>
                
                
                <div class="container w-full">
                    <div class="flex">
                        
                            <div class="w-full bg-gray-400 " >
                                <div class="table" id="results">
                                        <div class='theader'>
                                            <div class='table_header'>#</div>
                                            <div class='table_header'>Name</div>
                                            <div class='table_header'>City</div>
                                            <div class='table_header'>Address</div>

                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header #</div>
                                                <div class='table_cell'>1</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Name</div>
                                                <div class='table_cell'>
                                                    <span onclick="window.location.href = 'hotelGroup_detail.php';" class="span_blue_link">HARRIS BATAM CENTER</span>
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header City</div>
                                                <div class='table_cell'>BATAM</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Address</div>
                                                <div class='table_cell'>JL. ENGKU PUTRI, BATAM 29641</div>
                                            </div>
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>2</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Name</div>
                                                <div class='table_cell'>
                                                <span class="span_blue_link">PESONA ALAM RESORT & SPA ( PREV. HARRIS PUNCAK)</span>                                                           
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Description</div>
                                                <div class='table_cell'>PUNCAK</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header #Hotel in Group</div>
                                                <div class='table_cell'>Jl. Taman Safari no.101, Kp. Baru Tegal RT 003</div>
                                            </div>
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>3</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Name</div>
                                                <div class='table_cell'>
                                                <span class="span_blue_link">THE WUJIL RESORT & CONVENTIONS UNGARAN</span>                                                           
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Description</div>
                                                <div class='table_cell'>SEMARANG</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header #Hotel in Group</div>
                                                <div class='table_cell'>JL.SOEKARNO-HATTA KM 25,5</div>
                                            </div>
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>4</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Name</div>
                                                <div class='table_cell'>
                                                <span class="span_blue_link">HARRIS MALANG</span>                                                           
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Description</div>
                                                <div class='table_cell'>MALANG</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header #Hotel in Group</div>
                                                <div class='table_cell'>Jl. A YANI UTARA RIVERSIDE BlOCK C-1</div>
                                            </div>
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>5</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Name</div>
                                                <div class='table_cell'>
                                                <span class="span_blue_link">POP! HOTEL TIMOHO</span>                                                           
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Description</div>
                                                <div class='table_cell'>YOGYAKARTA</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header #Hotel in Group</div>
                                                <div class='table_cell'>JL.IPDA TUT HARSONO NO.11</div>
                                            </div>
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>6</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Name</div>
                                                <div class='table_cell'>
                                                <span class="span_blue_link">	POP! HOTEL BANJARMASIN</span>                                                           
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Description</div>
                                                <div class='table_cell'>BANJARMASIN</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header #Hotel in Group</div>
                                                <div class='table_cell'>JL.H.DJOK MENTAYA NO.50 KERTAK BARU ILIR</div>
                                            </div>
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header No</div>
                                                <div class='table_cell'>7</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Name</div>
                                                <div class='table_cell'>
                                                <span class="span_blue_link">HARRIS SEMINYAK</span>                                                           
                                                </div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header Description</div>
                                                <div class='table_cell'>BALI</div>
                                            </div>
                                            <div class='table_small'>
                                                <div class='table_cell'>Header #Hotel in Group</div>
                                                <div class='table_cell'>JL. DRUPADI 99, SEMINYAK</div>
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