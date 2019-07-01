<html>
<head>

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
<!-- isi content adasd -->

<div class="container w-11/12 mx-auto">

    <div class="container max-w-full">

        <div class="w-full border-0 border-b border-solid border-black">
            <div class="flex md-4">
                <span class="span_title"><h2>Menu List</h2></span>           
            </div>
        </div>

    </div>
                  
    <div class="container mt-5">
            <div class="flex md-4">

                <div class="container w-2/5">
                    &nbsp
                </div>

                <div class="container w-2/5 flex items-center">
            
                        <div class="text-small ">
                            Search : &nbsp
                        </div>
            
                        <div class="flex md-4">
                            <input type="text" class="textareasm border border-black" >
                            <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                        </div>
                    
                </div>

                <div class="flex w-1/5 items-center justify-end">
                    <button onclick="window.location.href = '<?=root_path?>/pages/menu/menu_add.php';" type="button" type="button" class="btn btn-sm btn-success btn-rounded mr-3  " value="Reset"><i class="fas fa-plus"></i> Add</button> 
                    <button type="button" class="btn btn-sm btn-primary btn-rounded mr-3  " value="Reset"><i class="fas fa-sync-alt"></i> Reset</button> 
                </div>

            </div>
    </div>

    <div class="container  max-w-full bg-white mt-5">
        <div class="md-4">
                
            <div class="container w-full">
                    <div class="flex">
                        
                            <div class="w-full bg-gray-400 " >
                                <div class="table" id="results">
                                        <div class="theader">
                                            <div class="table_header text-left">No.</div>
                                            <div class="table_header text-left">Label</div>
                                            <div class="table_header text-left">URL Controller</div>
                                            <div class="table_header"></div>

                                        </div>

                                        <div class="table_row">
                                            <div class="table_small">
                                                <div class="table_cell">Header No</div>
                                                <div class="table_cell text-left">1</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header Label</div>
                                                <div class="table_cell text-left">
                                                    <span onclick="window.location.href = '<?=root_path?>/pages/menu/menu_detail.php';" class="span_blue_link">Home</span>
                                                </div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header URL Controller</div>
                                                <div class="table_cell text-left">home</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header </div>
                                                <div class="table_cell">
                                                    <button> <i class="fas fa-angle-down"> </i> </button>
                                                    <button> <i class="fas fa-angle-up"> </i> </button>
                                                    <button> <i class="fas fa-pencil-alt"> </i> </button>
                                                    <button> <i class="fas fa-times"> </i> </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table_row">
                                            <div class="table_small">
                                                <div class="table_cell">Header No</div>
                                                <div class="table_cell text-left">2</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header Label</div>
                                                <div class="table_cell text-left">
                                                    <span onclick="window.location.href = '<?=root_path?>/pages/';" class="span_blue_link">Archives</span>
                                                </div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header URL Controller</div>
                                                <div class="table_cell text-left">reservationh/lst</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header </div>
                                                <div class="table_cell">
                                                    <button> <i class="fas fa-angle-down"> </i> </button>
                                                    <button> <i class="fas fa-angle-up"> </i> </button>
                                                    <button> <i class="fas fa-pencil-alt"> </i> </button>
                                                    <button> <i class="fas fa-times"> </i> </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table_row">
                                            <div class="table_small">
                                                <div class="table_cell">Header No</div>
                                                <div class="table_cell text-left">3</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header Label</div>
                                                <div class="table_cell text-left">
                                                    <span onclick="window.location.href = '<?=root_path?>/pages/';" class="span_blue_link">Archives</span>
                                                </div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header URL Controller</div>
                                                <div class="table_cell text-left">reservationc/lst</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header </div>
                                                <div class="table_cell">
                                                    <button> <i class="fas fa-angle-down"> </i> </button>
                                                    <button> <i class="fas fa-angle-up"> </i> </button>
                                                    <button> <i class="fas fa-pencil-alt"> </i> </button>
                                                    <button> <i class="fas fa-times"> </i> </button>
                                                </div>
                                            </div>                                           
                                        </div>

                                        <div class="table_row">
                                            <div class="table_small">
                                                <div class="table_cell">Header No</div>
                                                <div class="table_cell text-left">3</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header Label</div>
                                                <div class="table_cell text-left">
                                                    <span onclick="window.location.href = '<?=root_path?>/pages/';" class="span_blue_link">Archives</span>
                                                </div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header URL Controller</div>
                                                <div class="table_cell text-left"></div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header </div>
                                                <div class="table_cell">
                                                    <button> <i class="fas fa-angle-down"> </i> </button>
                                                    <button> <i class="fas fa-angle-up"> </i> </button>
                                                    <button> <i class="fas fa-pencil-alt"> </i> </button>
                                                    <button> <i class="fas fa-times"> </i> </button>
                                                </div>
                                            </div>                                           
                                        </div>

                                        <div class="table_row">
                                            <div class="table_small">
                                                <div class="table_cell">Header No</div>
                                                <div class="table_cell text-left">3</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header Label</div>
                                                <div class="table_cell text-left ml-5">
                                                    <span onclick="window.location.href = '<?=root_path?>/pages/';" class="span_blue_link">Reservation List</span>
                                                </div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header URL Controller</div>
                                                <div class="table_cell text-left">reservation/lst </div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header </div>
                                                <div class="table_cell">
                                                    <button> <i class="fas fa-angle-down"> </i> </button>
                                                    <button> <i class="fas fa-angle-up"> </i> </button>
                                                    <button> <i class="fas fa-pencil-alt"> </i> </button>
                                                    <button> <i class="fas fa-times"> </i> </button>
                                                </div>
                                            </div>                                           
                                        </div>

                                        <div class="table_row">
                                            <div class="table_small">
                                                <div class="table_cell">Header No</div>
                                                <div class="table_cell text-left">3</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header Label</div>
                                                <div class="table_cell text-left ml-5">
                                                    <span onclick="window.location.href = '<?=root_path?>/pages/';" class="span_blue_link">Int Reservation List</span>
                                                </div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header URL Controller</div>
                                                <div class="table_cell text-left">ireservation</div>
                                            </div>
                                            <div class="table_small">
                                                <div class="table_cell">Header </div>
                                                <div class="table_cell">
                                                    <button> <i class="fas fa-angle-down"> </i> </button>
                                                    <button> <i class="fas fa-angle-up"> </i> </button>
                                                    <button> <i class="fas fa-pencil-alt"> </i> </button>
                                                    <button> <i class="fas fa-times"> </i> </button>
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