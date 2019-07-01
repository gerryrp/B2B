<html>
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

<div class="container max-w-full mx-auto w-11/12">


    <div class="container max-w-full"> 
        <div class="w-full border-0 border-b border-solid border-gray-400">
            <div class="flex md-4">
                <span class="span_title"><h2>Master Allotment</h2></span>           
            </div>
        </div>
    </div>

    <div class="container max-w-full ml-5 mt-5"> 
        <div class="flex md-4">

                <div class="mx-auto flex md-4 items-center">
                    
                    
                    <div class="container">
            
                        <div class="flex md-4 justify-center items-center">
                            Hotel : &nbsp<input type="text" class="textareasm border border-black">
                            <button type="submit" class="fa fa-search ml-1" style="background-color: rgba(255, 255, 255, 0);border-color: rgba(255, 255, 255, 0)"></button>
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