<html>
<?php 
include('head.php');
?>

<body>

    <div class="w-1/5 mx-auto">

        <div class="bg-blue-200 mb-1 rounded-t-lg">

            <div class="flex justify-center py-1">
                <span class="text-base font-bold"><h2>Change Order<h2></span>
            </div>

        </div>

        <div class=" bg-gray-200 px-4 py-3 border-0 border-b border-solid border-gray-400  ">
            
            <div class=" flex items-center justify-center ">
                <div>
                    <span>1.</span>
                </div>

                <div class="mx-3">
                    <form>
                        <select class="border border-black border-solid rounded mt-3">
                            <option value=""></option>
                            <option value="">Instant Confirmed</option>
                            <option value="">Sell Price</option>
                            <option value="">Availability</option>
                        </select>
                    </form>	
                </div>

                <div>
                    <input type="checkbox" class="check" id="dropdownCheck1"  data-label="remember me">
                        <label class="" for="dropdownCheck1">
                           Desc
                        </label>
                </div>
            </div>

            <div class=" flex items-center justify-center ">
                <div>
                    <span>2.</span>
                </div>

                <div class="mx-3">
                    <form>
                        <select class="border border-black border-solid rounded mt-3">
                            <option value=""></option>
                            <option value="">Instant Confirmed</option>
                            <option value="">Sell Price</option>
                            <option value="">Availability</option>
                        </select>
                    </form>	
                </div>

                <div>
                    <input type="checkbox" class="check" id="dropdownCheck2"  data-label="remember me">
                        <label class="" for="dropdownCheck2">
                           Desc
                        </label>
                </div>
            </div>

            <div class=" flex items-center justify-center ">
                <div>
                    <span>3.</span>
                </div>

                <div class="mx-3">
                    <form>
                        <select class="border border-black border-solid rounded mt-3">
                            <option value=""></option>
                            <option value="">Instant Confirmed</option>
                            <option value="">Sell Price</option>
                            <option value="">Availability</option>
                        </select>
                    </form>	
                </div>

                <div>
                    <input type="checkbox" class="check" id="dropdownCheck3"  data-label="remember me">
                        <label class="" for="dropdownCheck3">
                           Desc
                        </label>
                </div>
            </div>


        </div>

        <div class="bg-blue-200 mt-1 rounded-b-lg flex">

            <div class="w-6/12 flex justify-center">
                <button class="btn btn-sm btn-rounded btn-success">
                    <span><i class="fas fa-check"></i> submit</span>
                </button>
            </div>

            <div class="w-6/12 flex justify-center">
                <button class="btn btn-sm btn-rounded btn-warning">
                    <span><i class="fas fa-undo"></i> close</span>
                </button>
            </div>
            
        </div>

    </div>
    
</body>

</html>