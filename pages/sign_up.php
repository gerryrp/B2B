<html>

<?php 
    include('head.php');
?>

<body>

<?php 
include(base_path.'/component/headerb2b.php');
?>

<div class="container bg-white max-w-full">
    <div class="md-4 flex">
        
        <div class="w-1/4">
            
        </div>

        <div class="w-1/2 bg-blue-100 p-8">
            <h4 class="border-0 border-b border-solid border-gray-400 text-lg font-bold text-left mb-5">B2B Sign Up for Travel Agent, Corporate, and Hotel Only </h4>
            
            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3">
                    <p class="text-left text-base">User Type</p>
                </div>

                <div class="w-full ml-12">
                    <div>
                            <form>
                                <select class="border border-black border-solid">
                                    <option value="Travel Agent"> Travel Agent</option>
                                    <option value="Corporate"> Corporate</option>
                                    <option value="Hotel"> Hotel</option>
                                </select>
                            </form>						
                    </div>
                </div>
            </div>

            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3 ">
                    <p class="text-left text-base"> Company Name</p>
                </div>

                <div class="w-full">
                    <input type="text" name="username" class="textareaxl border border-black ml-8">
                </div>
            </div>

            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center ">
                <div class="w-1/3 ">
                <p class="text-left text-base">Address</p>
                </div>

                <div class="w-full ">

                <textarea rows="6" cols="29" class="border border-black rounded-lg ml-8"></textarea>    

                </div>
            </div>

            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3 ">
                <p class="text-left text-base">City</p>
                </div>

                <div class="w-full">
                    <input type="text" name="username" class="textareaxl border border-black ml-8">
                </div>
            </div>

            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3">
                <p class="text-left text-base">Contact Person</p>
                </div>

                <div class="w-full">
                    <input type="text" name="username" class="textareaxl border border-black ml-8">
                </div>
            </div>

            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3 ">
                <p class="text-left text-base">Phone</p>
                </div>

                <div class="w-full">
                    <input type="text" name="username" class="textareaxl border border-black ml-8">
                </div>
            </div>

            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3 ">
                <p class="text-left text-base">Fax</p>
                </div>

                <div class="w-full">
                    <input type="text" name="username" class="textareaxl border border-black ml-8">
                </div>
            </div>

            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3 ">
                <p class="text-left text-base">Email</p>
                </div>

                <div class="w-full">
                    <input type="text" name="username" class="textareaxl border border-black ml-8">
                </div>
            </div>

            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3">
                <p class="text-left text-base">Instant Messenger</p>
                </div>

                <div class="w-full">
                    <input type="text" name="username" class="textareaxl border border-black ml-8">
                </div>
            </div>

            <div class="flex bg-white border-0 border-b border-solid border-gray-400">
                <div class="w-1/3">
                    <p class="text-left text-base">Notes</p>
                </div>

                <div class="w-full m-1">

                    <textarea rows="6" cols="29" class="border border-black rounded-lg ml-8"></textarea>

                </div>
            </div>

            
            <div class="flex bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3 ">
                <p class="text-left text-base">Validation</p>
                </div>

                <div class="w-full">
                    <input type="text" name="username" class="textareaxl border border-black ml-8">
                </div>
            </div>

            <div class="flex md-4 bg-white border-0 border-b border-solid border-gray-400 p-1 items-center">
                <div class="w-1/3">
                    <button onclick="window.location.href = 'login.php';" type="button" class="btn btn-sm btn-rounded btn-danger text-sm" value="Sign Up"><i class="fas fa-angle-double-left"></i> Back to login</button>
                </div>

                <div class="">
                    <button type="button" class="btn btn-sm btn-rounded btn-success"  value="Sign Up"><i class="fas fa-check"></i> Submit</button>
                </div>
            </div>
    
        </div>

        



    </div>
</div>




</body>
</html>