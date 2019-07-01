<html>

<?php 
    include('head.php');
?>

<body>
<div class="container max-w-full">
  <div class="flex mb-4 ">

    
      <div class="w-1/4 ">
          <h1></h1>
      </div>

      <div class="w-1/2">

          <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'Dom')">Hotel Domestik</button>
              <button class="tablinks" onclick="openCity(event, 'Inter')">Hotel Internasional</button>
              <button class="tablinks" onclick="openCity(event, 'Airlines')">Airlines</button>
          </div>
    
            <!-- dom content -->
            <div id="Dom" class="tabcontent ">

                <div class="flex flex-wrap overflow-hidden md-4">

                      <div class="w-1/3">
                                
                        <div class="text-small text-center">
                            Hotel or city name
                        </div>

                        <div class="flex md-4 justify-center items-center">
                            <input type="text" class="corners2 border border-black" placeholder="hotel or city name" >
                            <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                        </div>

                      </div>

                      <div class="w-1/3  ">

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

                      <div class="w-1/3 ">   

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
                              <button type="button" class="btn btn-sm btn-rounded btn-primary mr-5 " value="Sign Up"><i class="fas fa-search"></i> Search</button>
                          
                              <button type="button" class="btn btn-sm btn-rounded btn-danger " value="Sign Up"><i class="fas fa-sync-alt"></i> Reset</button>
                      </div>  

                </div>

            </div>


            <!-- inter content -->
            <div id="Inter" class="tabcontent">

                <div class="flex flex-wrap overflow-hidden md-4">

                      <div class="w-1/12">
                        <div class="flex">
                                <select class="block appearance-none w-full bg-grey-100 border border-black text-black py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-state">
                                <option>Travel Agent</option>
                                <option>Corporate</option>
                                <option>Hotel</option>
                                </select>
                            <div class="pointer-events-auto  absolute">
                            </div>
                        </div>
                      </div>

                      <div class="w-1/3">

                        <div class="text-small text-center">
                            Destination, Resort or Hotel 
                        </div>
        
                        <div class="flex md-4 justify-center items-center">
                            <input type="text" class="corners2 border border-black" placeholder="Destination, Resort .." >
                            <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                        </div>
        
                      </div>
        
                      <div class="w-1/4  ">
        
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
        
                      <div class="w-1/4 ">   
        
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

                <div class="flex md-4 justify-center items-center z-0" >

                    <div class="w-1/5  p-4">

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

                    <div class="w-1/5 flex md-4 justify-center  items-center  ">
                            <button type="button" class="btn btn-sm btn-rounded btn-primary mr-5" value="Sign Up"><i class="fas fa-search"></i> Search</button>
                        
                            <button type="button" class="btn btn-sm btn-rounded btn-danger" value="Sign Up"><i class="fas fa-sync-alt"></i> Reset</button>
                    </div>  

                </div>
                
                

            </div>


            <!-- airlines content -->
            <div id="Airlines" class="tabcontent"> 

                <div class="flex flex-wrap overflow-hidden md-4">

                  <div class="w-1/4">
                    <div class="text-center">
                    Flight Type :
                    </div>

                    <div class="container">
                        <div class="flex">
                            <div class="mx-auto">
                                <input type="checkbox" class="check" id="dropdownCheck1"  data-label="to">
                                    <label class="span_blue1" for="dropdownCheck1">
                                            One Way Trip
                                    </label>          
                            </div>
                            <div class="mx-auto">
                                <input type="checkbox" class="check" id="dropdownCheck2"  data-label="to">
                                    <label class="span_blue1" for="dropdownCheck2">
                                            Round Trip
                                    </label>          
                            </div>
                        </div>
                    </div>        
                  </div>

                  <div class="w-1/4">

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
      
                  <div class="w-1/4">

                    <div class="text-small text-center">
                        From
                    </div>

                    <div class="flex md-4 justify-center items-center">
                        <input type="text" class="corners2 border border-black" placeholder="Origin" >
                        <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                    </div>

                  </div>
      
                  <div class="w-1/4">   

                    <div class="text-small text-center">
                        To
                    </div>

                    <div class="flex md-4 justify-center items-center">
                        <input type="text" class="corners2 border border-black" placeholder="Destination" >
                        <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
                    </div>

                  </div>

                </div>

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

    
  </div>
</div>


              

    <script>
        function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        }
    </script>   

</body>
</html>