<div class="container bg-blue-100  max-w-full">

    <div class="container mx-auto">
                    
                            <div class="text-small text-center">
                                Registered Customer
                            </div>

                            <div class="flex md-4 justify-center items-center">
                                <input type="text" class="textareasm border border-black" placeholder="registered customer" >
                                <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                            </div>

    </div>

    <div class="container max-w-full">

            <div class="flex flex-wrap p-2 overflow-hidden md-4 bg-blue-100 ">

                <div class="w-full overflow-hidden sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/3 pl-15 mx-auto">
                        <div class="list-none flex  border-0 border-b-2 border-solid border-black ">
                                <div class="mr-1">
                                <a onclick="window.location.href = '<?=root_path?>/pages/bhotel/menu_hotel_dom.php';" class="bg-white inline-block   py-2 px-4 text-black font-semibold" href="#">Hotel Domestik</a>
                                </div>
                                <div class="mr-1">
                                <a onclick="window.location.href = '<?=root_path?>/pages/bihotel/menu_hotel_inter.php';" class="bg-white inline-block py-2 px-4 text-black hover:text-blue-darker font-semibold" href="#">Hotel Internasional</a>
                                </div>
                                <div class="mr-1">
                                <a onclick="window.location.href = '<?=root_path?>/pages/bairline/roundtrip.php';" class="bg-white inline-block border-2 border-l border-t border-r border-solid border-black rounded-t py-2 px-4 text-blue-500 hover:text-blue-darker font-semibold" href="#">Airlines Domestik</a>
                                </div>
                        </div>
                </div>

            </div>
            
    </div>

    <div class="container mx-auto ">                
        <div class="text-center">
            Flight Type :
        </div>

        <div class="flex md-4 justify-center items-center ">
            <div class="mr-2">
                <input type="checkbox" class="check" id="dropdownCheck1" data-label="to">
                    <label class="span_blue1" for="dropdownCheck1">
                        One Way Trip
                    </label>          
            </div>
            <div class="ml-2">
                <input type="checkbox" class="check" id="dropdownCheck2" data-label="to">
                    <label class="span_blue1" for="dropdownCheck2">
                        Round Trip
                    </label>          
            </div>
        </div>
                            
    </div>

    <div class="container max-w-full">

                <div class="flex flex-wrap overflow-hidden md-4 ">

                        <div class="w-full overflow-hidden sm:w-full md:w-full lg:w-1/6 xl:w-1/6">
                        </div>

                        <div class="w-full overflow-hidden sm:w-full md:w-full lg:w-1/3 xl:w-1/6">
                            <div class="text-center">
                            Flight Type :
                            </div>

                            <div class="container">
                                <div class="flex">
                                    <div class="mx-auto">
                                        <input type="checkbox" class="check" id="dropdownCheck3"  data-label="to">
                                            <label class="span_blue1" for="dropdownCheck3">
                                                    One Way Trip
                                            </label>          
                                    </div>
                                    <div class="mx-auto">
                                        <input type="checkbox" class="check" id="dropdownCheck4"  data-label="to">
                                            <label class="span_blue1" for="dropdownCheck4">
                                                    Round Trip
                                            </label>          
                                    </div>
                                </div>
                            </div>        
                        </div>

                        <div class="w-full pure-form overflow-hidden sm:w-full md:w-full lg:w-1/3 xl:w-1/6">

                            <div class="text-small text-center">
                                Departure date:
                            </div>

                            <div>
                                <label for="dateofbirth"></label>
                            </div>

                            <div class="flex md-4 justify-center items-center">
                                <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                            </div>
    
                        </div> 

                        <div class="w-full overflow-hidden sm:w-full md:w-full lg:w-1/6 xl:W-0">
                        </div>

                        <div class="w-full overflow-hidden sm:w-full md:w-full lg:w-1/6 xl:W-0">
                        </div>

                        <div class="w-1/2 overflow-hidden sm:w-full md:w-full lg:w-1/3 xl:w-1/6 ">

                            <div class="text-small text-center">
                                From
                            </div>

                            <div class="flex md-4 justify-center items-center">
                                <input type="text" class="corners2 border border-black" placeholder="From" >
                                <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                            </div>

                        </div>

                        <div class="w-1/2 overflow-hidden sm:w-full md:w-full lg:w-1/3 xl:w-1/6">   

                            <div class="text-small text-center">
                                To
                            </div>

                            <div class="flex md-4 justify-center items-center">
                                <input type="text" class="corners2 border border-black" placeholder="Destination" >
                                <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                            </div>

                        </div>
                    
                </div>
                
    </div>

    <div class="container max-w-full ">

                <div class="flex md-4 justify-center items-center" >

                            <div class="p-4">
                                <div>
                                Adult:    
                                </div>
                                
                                <label class="dropdown">
                                    <div class="dd-button-small">
                                        All
                                    </div>
                                    <input type="checkbox" class="dd-input" id="test">
                                    
                                    <ul class="dd-menu-small">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                    </ul>
                                    
                                </label>
                            </div>

                            <div class="p-4">                    
                                <div>
                                Children:  
                                </div>
                                
                                <label class="dropdown">
                                    <div class="dd-button-small">
                                        All
                                    </div>
                                    <input type="checkbox" class="dd-input" id="test">
                                    
                                    <ul class="dd-menu-small">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                    </ul>                                
                                </label>
                            </div>

                            
                            <div class="p-4">                    
                                <div>
                                Infant:    
                                </div>
                                
                                <label class="dropdown">
                                    <div class="dd-button-small">
                                        All
                                    </div>
                                    <input type="checkbox" class="dd-input" id="test">
                                    
                                    <ul class="dd-menu-small">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></li>
                                    </ul>                                
                                </label>
                            </div>


                            <div class="w-1/5 flex md-4 justify-center  items-center  ">
                                    <button type="button" class="btn btn-sm btn-rounded btn-primary mr-5 " value="Sign Up"><i class="fas fa-search"></i> Search</button>
                                
                            </div>  

                </div>

    </div>


</div>        



