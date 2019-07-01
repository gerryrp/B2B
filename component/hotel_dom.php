<div class="container bg-blue-100  max-w-full">

<div class="container mx-auto">
                
    <div class="text-sm text-center">
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
                              <a onclick="window.location.href = '<?=root_path?>/pages/bhotel/menu_hotel_dom.php';" class="bg-white inline-block border-2 border-l border-t border-r border-solid border-black rounded-t  py-2 px-4 text-blue-500 font-semibold" href="#">Hotel Domestik</a>
                            </div>
                            <div class="mr-1">
                              <a onclick="window.location.href = '<?=root_path?>/pages/bihotel/menu_hotel_inter.php';" class="bg-white inline-block py-2 px-4 text-blue-light hover:text-blue-darker font-semibold" href="#">Hotel Internasional</a>
                            </div>
                            <div class="mr-1">
                              <a onclick="window.location.href = '<?=root_path?>/pages/bairline/menu_airlines.php';" class="bg-white inline-block py-2 px-4 text-blue-light hover:text-blue-darker font-semibold" href="#">Airlines Domestik</a>
                            </div>
                    </div>
            </div>

        </div>
        
</div>

<div class="container max-w-full ">

            <div class="flex flex-wrap overflow-hidden md-4 ">

                    <div class="w-1/3 overflow-hidden sm:w-1/4 md:w-1/4 lg:w-1/5 xl:w-1/4">
                    
                    </div>

                    <div class="w-full pure-form overflow-hidden sm:w-full md:w-full lg:w-1/4 xl:w-1/6">
                        

                        <div class="text-small text-center">
                            Hotel or city name
                        </div>

                        <div class="flex md-4 justify-center items-center">
                            <input type="text" class="textareasm border border-black " placeholder="hotel or city name" >
                            <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                        </div>

                        
                    </div> 

                    <div class="w-1/2 overflow-hidden sm:w-full md:w-full lg:w-1/6 xl:w-1/6 ">

                        <div class="text-small text-center">
                            Check-in
                        </div>

                        <div>
                            <label for="dateofbirth"></label>
                        </div>

                        <div class="flex md-4 justify-center items-center">
                            <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                        </div>

                    </div>

                    <div class="w-1/2 overflow-hidden sm:w-full md:w-full lg:w-1/6 xl:w-1/6">   

                        <div class="text-small text-center">
                        Check-out
                        </div>

                        <div>
                            <label for="dateofbirth"></label>
                        </div>

                        <div class="flex md-4 justify-center items-center">
                            <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                        </div>

                    </div>
                   
            </div>
            
</div>

<div class="container max-w-full ">

            <div class="flex md-4 justify-center items-center" >

                        <div class="w-1/5  p-4">

                            <div class="flex md-4 justify-center ">
                            <a href="" class="span_blue1 underline" >
                                Advance Search</a><i class="fas fa-angle-down ml-1 my-auto"></i>
                            </div>

                            <div>
                                Star 
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

                            <br>

                            <div>
                                    Price
                                    <input type="text" class="textareaxs border border-black">
                                    <input type="checkbox" class="check" id="dropdownCheck2"  data-label="to">
									<label class="span_blue1" for="dropdownCheck2">
                                             to
                                    </label>
                                    <br>		
                                    Price <input type="text" class="textareaxs border border-black">
                            </div>

                        </div>

                        <div class="w-1/5 flex md-4 justify-center  items-center  ">
                                <button type="button" class="btn btn-rounded btn-primary mr-5 " value="Sign Up"><i class="fas fa-search"></i> Search</button>
                            
                                <button type="button" class="btn btn-rounded btn-danger " value="Sign Up"><i class="fas fa-sync-alt"></i> Reset</button>
                        </div>  

            </div>

</div>


</div>        



