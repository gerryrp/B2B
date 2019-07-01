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

        <div class="w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 bg-blue-100 p-8">
            <h4 class="border-b border-gray-400 text-xl font-bold text-left mb-5"> Forgot Password </h4>
            
            <div class="flex flex-wrap overflow-hidden bg-white border-0 border-b border-solid border-gray-400 p-2">

                <div class="w-1/2 text-left text-base pt-2 ">
                User ID or Email
                </div>

                <div class="w-1/2">
                        <input type="text" name="username" class="textlogin border border-gray-400" placeholder="User ID or Email">
                </div>

            </div>

            <div class="flex flex-wrap overflow-hidden bg-white border-0 border-b border-solid border-gray-400 p-2">
                <div class="w-1/2 text-left text-base pt-2 ">
                Validation
                </div>

                <div class="w-1/2">
                        <input type="text" name="username" class="textlogin border border-gray-400" placeholder="captcha">
                </div>

            </div>

            <div class="flex md-4 justify-center items-center bg-white border-0 border-b border-solid border-gray-400 p-2">

                <div class="">
                            <button type="button" class="btn btn-rounded btn-success border border-gray-400"  value="Sign Up"  ><i class="fas fa-check"></i> Reset Password</button>
                </div>
            </div>

            <div class="flex md-4 p-2">

                <div class="">
                        <button onclick="window.location.href = 'login.php';" type="button" class="btn btn-rounded btn-danger text-xs" value="Sign Up"><i class="fas fa-angle-double-left"></i> Back to login</button>
                </div>
            </div>
            
        </div>

    </div>
</div>




</body>
</html>