<html>
        <?php 
        include('head.php');
        ?>

    <body>
        
        <div class="container border-b-4 border-solid border-gray-400">
            <div class="flex justify-center">
                <span class="font-bold text-xl"><h2>RADIO & CHECKBOX</h2></span>
            </div>

            <div class="flex">
                <div class="w-1/2">
                    <div class="justify-center flex">
                            <input id="option1" type="radio" name="field" value="option1">
                            <label for="option1"><span><span></span></span>Radio 1</label>
                    </div>
            
                    <div class="justify-center flex">
                            <input id="option2" type="radio" name="field" value="option2">
                            <label for="option2"><span><span></span></span>Radio 2</label>
                    </div>
            
                    <div class="justify-center flex">
                            <input id="option3" type="radio" name="field" value="option3">
                            <label for="option3"><span><span></span></span>Radio 3</label>
                    </div>
                </div>
                    
                <div class="w-1/2">
                    <div class="justify-center flex">
                            <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me">
                            <label class="span_blue1" for="dropdownCheck1">Checkbox 1</label>
                    </div>

                    <div class="justify-center flex">
                            <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                            <label class="span_blue1" for="dropdownCheck2">Checkbox 1</label>
                    </div>

                    <div class="justify-center flex">
                            <input type="checkbox" class="check" id="dropdownCheck3"  data-label="remember me">
                            <label class="span_blue1" for="dropdownCheck3">Checkbox 1</label>
                    </div>
                    	
                </div>
                   
            </div>
        </div>

        <div class="container border-b-4 border-solid border-gray-400 mt-5">
                <div class="flex justify-center">
                    <span class="font-bold text-xl"><h2>PAGINATION</h2></span>
                </div>

                <div class="flex justify-center">
                    <div>
                        <?php 
                        include(base_path.'/component/padding.php');
                        ?>
                    </div>
                       
                </div>
        </div>

        <div class="container border-b-4 border-solid border-gray-400 mt-5">
                <div class="flex justify-center">
                    <span class="font-bold text-xl"><h2>NAVIGATION</h2></span>
                </div>

                <div>
                        
                    <?php 
                    include(base_path.'/component/header.php');
                    ?>
    
                </div>

        </div>

        <div class="container border-b-4 border-solid border-gray-400 mt-5">
                <div class="flex justify-center">
                    <span class="font-bold text-xl"><h2>CAROUSELL</h2></span>
                </div>

                <div>
                        
                    <?php 
                    include(base_path.'/component/ads_slider.php');
                    ?>
    
                </div>

        </div>

        
        <div class="container border-b-4 border-solid border-gray-400 mt-5">
                <div class="flex justify-center">
                    <span class="font-bold text-xl"><h2>TOOLTIP & POPOVER</h2></span>
                </div>

                
                <div class="flex">
                        <div class=" w-1/2 mt-10 ">
        
                                <div class="justify-center flex mb-10 tooltip tooltiptop ">top
                                        <span class="texttop">Tooltip text</span>
                                </div>

                                <div class="flex justify-center mb-10">
                                        <div class="mr-10 tooltip tooltipleft">left
                                        <span class="textleft">Tooltip text</span>
                                        </div>

                                        <div class="ml-10 tooltip tooltipright">right
                                        <span class="textright">Tooltip text</span>
                                        </div>
                                </div>        
                                        

                                <div class="justify-center flex mb-10 tooltip tooltipbot">bottom
                                        <span class="textbot">Tooltip text</span>
                                </div>
        
                        </div>

                        <div class="w-1/2 mt-10">

                                <div class="container w-full">
                                        <div class="flex justify-center">
                                                <h2>Popover</h2>
                                        </div>
                                </div>
                                <div class="container w-full mt-32">
                                        <div class="flex justify-center">
                                                <div class="popover" onclick="myFunction()">Click
                                                        <span class="popovertext" id="myPopover">popover</span>
                                                </div>
                                        </div>  
                                </div>

                                <script>
                                        // When the user clicks on div, open the popover
                                        function myFunction() {
                                        var popover = document.getElementById("myPopover");
                                        popover.classList.toggle("show");
                                        }
                                </script>
                        </div>
                </div>       
                

        </div>

        <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'desain_sistem.php';" class="btn  btn-rounded btn-light"><i class="fas fa-undo"></i> back</button>
            <button onclick="window.location.href = 'desain_sistem3.php';" class="btn  btn-rounded btn-light"><i class="fas fa-redo"></i> next</button>
                       
        </div>
    </body>
</html>