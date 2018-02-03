$(document).ready(function() {

  $("#response").hide();

  $("#travelform").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
      url: "enter.php",
      type: "POST",
      data: $(this).serialize(),
      success: function(response) {
        $("#travel").hide();
        $("#response").show();
      },
      error: function(xhr, status, err) {
        alert("Error! Message from server: " + xhr.status + " " + err);
      }
    
    });

  });

}); // close document ready
