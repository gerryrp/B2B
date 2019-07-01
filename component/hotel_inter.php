
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
    
    <div class="flex flex-wrap p-2 overflow-hidden md-4 bg-blue-100">

            <div class="w-full overflow-hidden sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/3 pl-15 mx-auto">
                    <div class="list-none flex  border-0 border-b-2 border-solid border-black ">
                            <div class="mr-1">
                              <a onclick="window.location.href = '<?=root_path?>/pages/bhotel/menu_hotel_dom.php';" class="bg-white inline-block   py-2 px-4 text-black font-semibold" href="#">Hotel Domestik</a>
                            </div>
                            <div class="mr-1">
                              <a onclick="window.location.href = '<?=root_path?>/pages/bihotel/menu_hotel_inter.php';" class="bg-white inline-block border-2 border-l border-t border-r border-solid border-black rounded-t py-2 px-4 text-blue-500 hover:text-blue-darker font-semibold" href="#">Hotel Internasional</a>
                            </div>
                            <div class="mr-1">
                              <a onclick="window.location.href = '<?=root_path?>/pages/bairline/menu_airlines.php';" class="bg-white inline-block py-2 px-4 text-blue-light hover:text-blue-darker font-semibold" href="#">Airlines Domestik</a>
                            </div>
                    </div>
            </div>

    </div>

</div>

    
<div class=" container max-w-full">
    
        <div class="flex flex-wrap overflow-hidden md-4 justify-center items-center  ">

                <div class="w-1/3 overflow-hidden sm:w-1/4 md:w-1/4 lg:w-1/5 xl:w-1/6">                    
                    <div class="flex md-4 justify-center items-center">
                        Guest Nationality :
                    </div>
                
                    <div class="flex md-4 justify-center items-center">
                        <form>
                            <select class="border border-black border-solid">
                                <option value="books">Checkbox 1</option>
                                <option value="html">Checkbox 2</option>
                                <option value="css">Checkbox 3</option>
                                <option value="php">Checkbox 4</option>
                                <option value="js">Checkbox 5</option>
                            </select>
                        </form>						
                    </div>           
                
                </div>

                <div class="w-full pure-form overflow-hidden sm:w-full md:w-full lg:w-1/4 xl:w-1/6">

                    <div class="flex md-4 justify-center items-center">
                        Destination, Resort or Hotel:
                    </div>

                    <div class="flex md-4 justify-center items-center">
                        <input type="text" class="corners2 border border-black" placeholder="" >
                        <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                    </div>

                </div> 

                <div class="w-1/2 overflow-hidden sm:w-full md:w-full lg:w-1/6 xl:w-1/6 ">

                    <div class="flex md-4 justify-center items-center">
                        Check-in date:
                    </div>

                    <div>
                        <label for="dateofbirth"></label>
                    </div>

                    <div class="flex md-4 justify-center items-center">
                        <input class="flex" type="date" name="dateofbirth" id="dateofbirth" >
                    </div>

                </div>

                <div class="w-1/2 overflow-hidden sm:w-full md:w-full lg:w-1/6 xl:w-1/6">   

                        <div class="flex md-4 justify-center items-center">
                            Check-out date:
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
    
<div class="container max-w-full  ">
    
        <div class="flex md-4 justify-center items-center z-0" >

            <div class="w-1/3 overflow-hidden sm:w-1/4 md:w-1/4 lg:w-1/5 xl:w-1/6">   
                <div>
                    <div class="flex md-4 justify-center items-center">
                        Number of Rooms :
                    </div>
                
                    <div class="flex md-4 justify-center items-center">
                        <form>
                            <select class="border border-black border-solid">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </form>				
                    </div>           
                </div>

                <div class="flex md-4 justify-center items-center">

                    <div>   
                        <div class="flex md-4 justify-center items-center">
                            Adult:
                        </div>
                        <div class="flex md-4 justify-center items-center">
                            <form>
                                <select class="border border-black border-solid">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </form>				
                        </div>
                    </div>  

                    <div class="mx-3">   
                        <div class="flex md-4 justify-center items-center">
                            Children:
                        </div>
                        <div class="flex md-4 justify-center items-center">
                            <form>
                                <select class="border border-black border-solid">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </form>				
                        </div>
                    </div>

                    <div>   
                        <div class="flex md-4 justify-center items-center">
                            Infant:
                        </div>
                        <div class="flex md-4 justify-center items-center mt-1">
                            <input type="checkbox" class="check" id="Check99"  data-label="to">
                            <label class="span_blue1" for="Check99">
                            Yes</label>  		
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-1/6  p-4">

                <div class="flex md-4 justify-center ">
                <a href="" class="span_blue1" >
                    Advance Search</a><i class="fas fa-angle-down ml-1 my-auto"></i>
                </div>

                <div>
                <input type="checkbox" class="check" id="Check1"  data-label="to">
                        <label class="span_blue1" for="Check1">
                                    No Meals
                        </label>          
                </div>

                <div>
                <input type="checkbox" class="check" id="Check2"  data-label="to">
                        <label class="span_blue1" for="Check2">
                            Breakfast
                        </label>                              
                </div>

                <div>
                <input type="checkbox" class="check" id="Check3"  data-label="to">
                        <label class="span_blue1" for="Check3">
                            Half Board
                        </label>                              
                </div>

                <div>
                <input type="checkbox" class="check" id="Check4"  data-label="to">
                        <label class="span_blue1" for="Check4">
                            Full Board
                        </label>                              
                </div>

                <div>
                <input type="checkbox" class="check" id="Check5"  data-label="to">
                        <label class="span_blue1" for="Check5">
                            All inclusive
                        </label>                              
                </div>

            </div>

            <div class="w-1/6 flex md-4 justify-center  items-center  ">
                    <button type="button" class="btn btn-rounded btn-secondary mr-5" value="Sign Up"><i class="fas fa-search"></i> Search</button>
             </div>  

        </div>
    
</div>



</div>        



