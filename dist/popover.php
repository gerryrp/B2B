<!DOCTYPE html>
<html>

<?php 
include('head.php');
?>


<body>


<div class="container max-w-full">
  <div class="">

      <div class="container w-full mt-32">
          <div class="flex justify-center">
              <h2>Popover</h2>
          </div>
      </div>
    

      <div class="container w-full mt-32">
        <div class="flex justify-center">
          <div class="popover" onclick="myFunction()">Click
            <span class="popovertext" id="myPopover">popover</span>
          </div>
        </div>  
      </div>
    

  </div>
</div>



<script>
// When the user clicks on div, open the popover
function myFunction() {
  var popover = document.getElementById("myPopover");
  popover.classList.toggle("show");
}
</script>

</body>
</html>
