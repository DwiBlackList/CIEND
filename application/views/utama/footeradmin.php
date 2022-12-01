</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}


// showhidden ala rofiq
// function viewsgetintouch(){
// 		document.getElementById("viewgetintouch").style.display = "block";
// 		document.getElementById("inputgetintoouch").style.display = "none";
// 	}
// function inputgetintoouch(){
// 		document.getElementById("pesanan").style.display = "block";
// 		document.getElementById("isikontak").style.display = "none";
// 	}


$(document).ready(function(){
    $('#viewsgetintouch').click(function() {
      $('#viewgetintouch').toggle("slide");
    });
});
$(document).ready(function(){
    $('#inputgetintouch').click(function() {
      $('#inputgit').toggle("slide");
    });
});
$(document).ready(function(){
    $('#viewsblog').click(function() {
      $('#viewblog').toggle("slide");
    });
});
$(document).ready(function(){
    $('#inputanblog').click(function() {
      $('#inputblog').toggle("slide");
    });
});
$(document).ready(function(){
    $('#viewstestimoni').click(function() {
      $('#viewtestimoni').toggle("slide");
    });
});
$(document).ready(function(){
    $('#inputantestimoni').click(function() {
      $('#inputtestimoni').toggle("slide");
    });
});
$(document).ready(function(){
    $('#viewsuser').click(function() {
      $('#viewuser').toggle("slide");
    });
});
$(document).ready(function(){
    $('#inputanuser').click(function() {
      $('#inputuser').toggle("slide");
    });
});
</script>

</body>
</html>