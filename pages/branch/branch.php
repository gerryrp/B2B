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
            <span class="span_title"><h2>Master Branch</h2></span>           
        </div>
    </div>

    <div class="flex md-4 mt-5">
        <div class="w-4/12 bg-red">
           
        </div>

        <div class="w-4/12 items-center justify-center flex">
            <div>
                    Search : 
                    <input type="text" class="textareasm border border-black">
                    <button class="btn btn-sm btn-rounded btn-light">Search</button>
            </div>
        </div>
        
        <div class="w-4/12 bg-blue items-center justify-end flex">
            <div class="mr-1">
                <button onclick="window.location.href = '<?=root_path?>/pages/branch/branch_add.php';" class="btn btn-sm btn-rounded btn-success"><i class="fas fa-plus"></i> Add</button>
                <button class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-sync-alt"></i> Reset</button>
            </div>
        </div>

    </div>

    <div class="containter w-full bg-gray-200 p-2">
        <div class="flex md-4">

            <div class="w-full">
                <div class="w-full mt-1 bg-gray-200">
                    <div class="table" id="results">

                        <div class='theader'>
                            <div class='table_header'>No.</div>
                            <div class='table_header'>Branch</div>
                            <div class='table_header'>Address</div>
                            <div class='table_header'>Email</div>
                            <div class='table_header'>VC Code</div>
                            <div class='table_header'></div>
                        </div>

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>1</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Branch</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = '<?=root_path?>/pages/branch/branch_detail.php';" class="span_blue_link">Haryono SBY - HO</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Address</div>
                                <div class='table_cell'>Sulawesi 27-29, Surabaya 60281</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>info@haryonotours.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header VC Code</div>
                                <div class='table_cell'>01</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>  
                        
                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>2</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Branch</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = 'APIuser_detail.php';" class="span_blue_link">Haryono JKT- KBR    </span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Address</div>
                                <div class='table_cell'>Kebon Sirih Raya 9K, Jakarta Pusat</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>jakarta@haryonotours.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header VC Code</div>
                                <div class='table_cell'>02</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>  

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>3</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Branch</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = 'APIuser_detail.php';" class="span_blue_link">Haryono MLG - KHR</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Address</div>
                                <div class='table_cell'>Kahuripan 22, Malang</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>malang@haryonotours.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header VC Code</div>
                                <div class='table_cell'>03</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>  

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>4</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Branch</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = 'APIuser_detail.php';" class="span_blue_link">Haryono SRG - PDN</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Address</div>
                                <div class='table_cell'>Thamrin 89, Semarang</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>semarang@haryonotours.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header VC Code</div>
                                <div class='table_cell'>04</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>  

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>5</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Branch</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = 'APIuser_detail.php';" class="span_blue_link">Haryono SBY - PSD</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Address</div>
                                <div class='table_cell'>Panglima Sudirman 93-II, Surabaya 60271</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>pangsud@haryonotours.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header VC Code</div>
                                <div class='table_cell'>05</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>  

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>6</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Branch</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = 'APIuser_detail.php';" class="span_blue_link">Haryono JKT - KLP</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Address</div>
                                <div class='table_cell'>Boulevard Raya blok PA 19/8 Pegangsaan 2, Kelapa Gading, Jakarta Utara</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>kelapagading@haryonotours.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header VC Code</div>
                                <div class='table_cell'>06</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </div>  

                        <div class='table_row'>
                            <div class='table_small'>
                                <div class='table_cell'>Header No.</div>
                                <div class='table_cell'>7</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Branch</div>
                                <div class='table_cell'>
                                   <span  onclick="window.location.href = 'APIuser_detail.php';" class="span_blue_link">Haryono SBY - RPL</span>
                                </div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Address</div>
                                <div class='table_cell'>Ruko Rich Palace C/8, Mayjend. Sungkono, Surabaya 60225</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header Email</div>
                                <div class='table_cell'>richpalace@haryonotours.com</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header VC Code</div>
                                <div class='table_cell'>07</div>
                            </div>
                            <div class='table_small'>
                                <div class='table_cell'>Header </div>
                                <div class='table_cell'>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-pencil-alt"></i></button>
                                    <button onclick="window.location.href = '';" type="button" ><i class="fas fa-times"></i></button>
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