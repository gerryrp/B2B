<html>
<?php 
    include(__DIR__."/../head.php");
?>


<body>

<?php 
include(base_path."/component/header.php");
include(base_path."/component/ads_slider.php");
?>

<div class="container max-w-full mt-10 ">

    <?php include(base_path.'/component/vertical_tabs.php'); ?>

</div>

<!-- isi content adasd -->
        <div class="container w-11/12 bg-gray-200 mx-auto mt-5 p-5">

                <div class="w-full border-0 border-b border-solid border-black">
                    <div class="flex md-4">
                        <span class="span_title"><h2>Airline Reservation</h2></span>           
                    </div>
                </div>

                <div class="container mt-5">
                        <div class="flex">
    
                                <div class="w-11/12 mx-auto bg-gray-400 " >
                                    <div class="table" id="results">
                                            <div class="theader">
                                              <div class="table_header">Airlines</div>
                                              <div class="table_header">Flight#</div>
                                              <div class="table_header">Depart</div>
                                              <div class="table_header">Arrive</div>
                                              <div class="table_header">Fare and Class</div>
                                              <div class="table_header"></div>
                                            </div>


                                            <div class="table_row">
                                                <div class="table_small">
                                                    <div class="table_cell">Header Airlines</div>
                                                    <div class="table_cell">Garuda</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Flight</div>
                                                    <div class="table_cell">GA-315</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Depart</div>
                                                    <div class="table_cell">12:30 Surabaya(SUB)</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Arrive</div>
                                                    <div class="table_cell">14:05 Jakarta(CGK)</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Fare and Class</div>
                                                    <div class="table_cell">
                                                        <div>
                                                            <form>
                                                                <select class="border border-black border-solid ">
                                                                    <option value="Y[9]">Y[9]</option>
                                                                    <option value="I[2]">I[2]</option>
                                                                    <option value="D[9]">D[9]</option>
                                                                    <option value="C[9]">C[9]</option>
                                                                    <option value="J[9]">J[9]</option>
                                                                </select>
                                                            </form>						
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Arrive</div>
                                                    <div class="table_cell">
                                                        <div class=" items-center flex mx-3">
                                                            <input type="checkbox" class="check" id="dropdownCheck11"  data-label="All">
                                                                <label class="" for="dropdownCheck11">
                                                                &nbsp
                                                            </label>	
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="table_row">
                                                <div class="table_small">
                                                    <div class="table_cell">Header Airlines</div>
                                                    <div class="table_cell">Garuda</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Flight</div>
                                                    <div class="table_cell">GA-317</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Depart</div>
                                                    <div class="table_cell">13:30 Surabaya(SUB)</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Arrive</div>
                                                    <div class="table_cell">15:50 Jakarta(CGK)</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Fare and Class</div>
                                                    <div class="table_cell">
                                                        <div>
                                                            <form>
                                                                <select class="border border-black border-solid ">
                                                                    <option value="Y[9]">Y[9]</option>
                                                                    <option value="I[2]">I[2]</option>
                                                                    <option value="D[9]">D[9]</option>
                                                                    <option value="C[9]">C[9]</option>
                                                                    <option value="J[9]">J[9]</option>
                                                                </select>
                                                            </form>						
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Arrive</div>
                                                    <div class="table_cell">
                                                        <div class=" items-center flex mx-3">
                                                            <input type="checkbox" class="check" id="dropdownCheck12"  data-label="All">
                                                                <label class="" for="dropdownCheck12">
                                                                &nbsp
                                                            </label>	
                                                        </div> 
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="table_row">
                                                <div class="table_small">
                                                    <div class="table_cell">Header Airlines</div>
                                                    <div class="table_cell">Garuda</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Flight</div>
                                                    <div class="table_cell">GA-319</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Depart</div>
                                                    <div class="table_cell">15:30 Surabaya(SUB)</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Arrive</div>
                                                    <div class="table_cell">15:05 Jakarta(CGK)</div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Fare and Class</div>
                                                    <div class="table_cell">
                                                        <div>
                                                            <form>
                                                                <select class="border border-black border-solid ">
                                                                    <option value="Y[9]">Y[9]</option>
                                                                    <option value="I[2]">I[2]</option>
                                                                    <option value="D[9]">D[9]</option>
                                                                    <option value="C[9]">C[9]</option>
                                                                    <option value="J[9]">J[9]</option>
                                                                </select>
                                                            </form>						
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table_small">
                                                    <div class="table_cell">Header Arrive</div>
                                                    <div class="table_cell">
                                                        <div class=" items-center flex mx-3">
                                                            <input type="checkbox" class="check" id="dropdownCheck13"  data-label="All">
                                                                <label class="" for="dropdownCheck13">
                                                                &nbsp
                                                            </label>	
                                                        </div> 
                                                    </div>
                                                </div>

                                            </div>

                                          
                                    </div>
                                </div>

                        </div>    
                </div>

                <div class="container w-full mt-3 flex justify-center">
            
                    <button onclick="window.location.href = '<?=root_path?>/pages/bairline/bookrequest.php';" class="btn btn-rounded btn-success"><i class="fas fa-check"></i> BOOK NOW</button>
                              
                </div>

        </div>




<div class="bg-white"> 
</div>


<?php 
include(base_path."/component/footer.php");
?>

</body>
</html>