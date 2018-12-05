function validateForm() {
  var userName = document.getElementById("userReqId").value;
  var password = document.getElementById("userReqPassword").value;
  console.log(userName);
  if (!userName || !password) {
    alert("userName or password must be filled out");
    return false;
  }
}

/* const urlView = "http://localhost:80/cv-maker/php/view.php";

$(document).ready(function() {
  $("#btnShow").on("click", function() {
    var userName = $("#userReqId").val();
    var password = $("#userReqPassword").val();

    if (!userName || !password) {
      alert("please fill up this field");
    } else
      $.ajax({
        url: urlView,
        method: "post",
        data: {
          showCv: 1,
          userName: userName,
          password: password
        },
        success: function(response) {
          if (response.indexOf("success") >= 0) {
            window.location = "http://localhost:80/cv-maker/php/view.php";
          } else {
            alert("Error happend");
          }
        },
        error: function() {
          $("#records_content")
            .fadeIn(1000)
            .html('<div class="text-center">error here</div>');
        },
        dataType: "text"
      });
  });
});
 */
