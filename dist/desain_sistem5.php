<html>
        <?php 
        include('head.php');
        ?>

<body>
    
    <div class="container border-b-4 border-solid border-gray-400">
        <div class="flex justify-center">
            <span class="font-bold text-xl"><h2>VERTICAL TABS</h2></span>
        </div>            
            
        <div>
            <?php 
                include(base_path.'/component/vertical_tabs.php');
            ?>
        </div>
    </div>

    <div class="container border-b-4 border-solid border-gray-400 mt-64">
        <div class="flex justify-center">
            <span class="font-bold text-xl"><h2>VERTICAL TABS</h2></span>
        </div>            
            
        <div>
            
        </div>
    </div>
    
    <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'desain_sistem4.php';" class="btn  btn-rounded btn-light"><i class="fas fa-undo"></i> back</button>
            <button onclick="window.location.href = '#';" class="btn  btn-rounded btn-light"><i class="fas fa-redo"></i> next</button>
                       
    </div>

        

</body>
</html>    