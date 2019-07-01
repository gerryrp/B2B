<html>
        <?php 
        include('head.php');
        ?>

<body>

    <div class="container border-b-4 border-solid border-gray-400">
        <div class="flex justify-center">
            <span class="font-bold text-xl"><h2>MODAL</h2></span>
        </div>

        <div>
            <?php
            include('modal.php');
            ?>
        </div>
    </div> 

    <div class="container border-b-4 border-solid border-gray-400">
        <div class="flex justify-center">
            <span class="font-bold text-xl"><h2>SPINNER</h2></span>
        </div>


        <div class="flex">
            <div class="w-3/12">
                <span>Spinner Extra Small</span>
                        <div class="bg-gray-400">
                            <div class=" justify-center flex">
                                <div class=" spinner spinner-xs">

                                </div>
                            </div>
                        </div>
            </div>

            <div class="w-3/12">
                <span>Spinner  Small</span>
                        <div class="bg-gray-400">
                            <div class=" justify-center flex">
                                <div class=" spinner spinner-sm">

                                </div>
                            </div>
                        </div>
            </div>

            <div class="w-3/12">
                <span>Spinner  Large</span>
                        <div class="bg-gray-400">
                            <div class=" justify-center flex">
                                <div class=" spinner spinner-lg">

                                </div>
                            </div>
                        </div>
            </div>
            <div class="w-3/12">
                <span>Spinner  Extra Large</span>
                        <div class="bg-gray-400">
                            <div class=" justify-center flex">
                                <div class=" spinner spinner-xl">

                                </div>
                            </div>
                        </div>
            </div> 
        </div>
    </div> 

    <div class="container border-b-4 border-solid border-gray-400">
        <div class="flex justify-center">
            <span class="font-bold text-xl"><h2>FOOTER</h2></span>
        </div>

        <div>
            <?php 
            include(base_path.'/component/footer.php');
            ?>
        </div>
    </div>

    <div class="container w-full mt-3 flex justify-center">
            
            <button onclick="window.location.href = 'desain_sistem2.php';" class="btn  btn-rounded btn-light"><i class="fas fa-undo"></i> back</button>
            <button onclick="window.location.href = 'desain_sistem4.php';" class="btn  btn-rounded btn-light"><i class="fas fa-redo"></i> next</button>
                       
    </div>

</body>
</html>