<html>


<body>
<h2>Modal Example</h2>


<div class="container w-full mt-5">
    <div>

         <!-- Trigger/Open The Modal -->
         <button id="myBtn" class="btn btn-primary">Open Modal</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                
                <!-- <div class="bg-red-200 border-0 border-solid border-l-4 border-black text-orange-800 p-4 w-11/12 " role="alert">
                    <p class="font-bold text-xl">Be Warned!</p>
                    <p class="text-sm">Please Search Another Hotel or City name</p>
                    <p class="text-xs">Can't find what you're looking for? Contact our online support via Yahoo</p>
                </div> -->

                    <?php 
                    include('modal2.php');
                    ?>

            </div>

        </div>

    </div>
</div>



<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
</script>

</body>
</html>