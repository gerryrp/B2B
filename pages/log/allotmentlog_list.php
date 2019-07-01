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
        <div class="w-full border-0 border-b border-solid border-gray-400">
            <div class="flex md-4">
                <span class="span_title"><h2>Allotment Log</h2></span>           
            </div>
        </div>
    </div>

    <div class="container max-w-full mt-3">
        <div>

            <div class="w-7/12 items-center flex md-4">
                <span class="w-2/12"> Hotel :</span>
                <div class="w-full ml-5">
                        
                        <input type="text" class="textareaxl border border-black">
                        <button class="btn btn-sm btn-rounded btn-light">clear</button>
                </div>
            </div>
        
            <div class="w-7/12 items-center flex">
                <span class="w-2/12 ">Room : </span>
                <div class="w-full flex ml-5">
                    <form>
                        <select class="border border-black border-solid">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                    </form>	
                </div>				
            </div>

            <div class="w-7/12 items-center flex md-4">
                <span class="w-2/12">Date Allotment :</span>

                <div class="">

                    <div>
                        <label for="dateofbirth"></label>
                    </div>

                    <div class="flex md-4 justify-center items-center">
                        <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                    </div>

                </div>

                <div class="">

                    <div>
                        <label for="dateofbirth"></label>
                    </div>

                    <div class="flex md-4 justify-center items-center">
                        <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="container max-w-full mt-5"> 
        <div class="flex md-4">

            <div class="flex md-4 w-10/12">
                <?php 
                    include("../../component/padding.php");
                ?>
            </div>


            <div class="flex md-4 items-center w-full justify-end">

                <div class="ml-5">
                    <button onclick="window.location.href = '#';" type="button" class="btn btn-sm text-sm btn-rounded btn-primary" value="Rejected" ><i class="fas fa-sync-alt"></i> Reset</button>
                </div>
                
            </div>

        </div>  
    </div>  

    <div class="container  max-w-full relative mt-5">

        <div class="md-4">
            
            <div class="container">
                <div class="flex">

                    <div class=" w-11/12 mx-auto bg-gray-400" >
                        <div class="table" id="results">
                                <div class="theader">
                                    <div class="table_header p-2">No.</div>
                                    <div class="table_header p-2">Time</div>
                                    <div class="table_header p-2">Hotel</div>
                                    <div class="table_header p-2">Room</div>
                                    <div class="table_header p-2">Date Allotment</div>
                                    <div class="table_header p-2">Allotment</div>
                                    <div class="table_header p-2">Description</div>
                                    <div class="table_header p-2">Remaining</div>
                                    <div class="table_header p-2">User</div>
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-06-14 11:20:35</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Hotel</div>
                                        <div class="table_cell">ZEST HOTEL JEMURSARI X</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Room</div>
                                        <div class="table_cell">ZEST TWIN ROOM</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Date Allotment</div>
                                        <div class="table_cell">2019-06-14	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Allotment</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">RESET RESERVATION	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Remaining</div>
                                        <div class="table_cell">50</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">PR 1</div>
                                    </div>
                                    
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">2</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-06-14 11:20:35</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Hotel</div>
                                        <div class="table_cell">ZEST HOTEL JEMURSARI X</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Room</div>
                                        <div class="table_cell">ZEST DOUBLE ROOM</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Date Allotment</div>
                                        <div class="table_cell">2019-06-14</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Allotment</div>
                                        <div class="table_cell">1</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">RESET RESERVATION	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Remaining</div>
                                        <div class="table_cell">48</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">PR 1</div>
                                    </div>
                                    
                                </div>

                                <div class="table_row">
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header No.</div>
                                        <div class="table_cell">3</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Time</div>
                                        <div class="table_cell">2019-06-14 11:07:59	</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Hotel</div>
                                        <div class="table_cell">ZEST HOTEL JEMURSARI X</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Room</div>
                                        <div class="table_cell">ZEST TWIN ROOM</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Date Allotment</div>
                                        <div class="table_cell">2019-06-14</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Allotment</div>
                                        <div class="table_cell">-1</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Description</div>
                                        <div class="table_cell">ADD RESERVATION</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header Remaining</div>
                                        <div class="table_cell">49</div>
                                    </div>
                                    <div class="table_small p-3">
                                        <div class="table_cell">Header User</div>
                                        <div class="table_cell">PR 1</div>
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