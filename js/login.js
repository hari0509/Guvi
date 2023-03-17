function submitForm() {
    var n = $("input[name=name]").val();
    var p= $("input[name=password]").val();
    var f = {  name: n, password: p  };
    
    $.ajax({
      url: "./php/login.php",
      type: "POST",
      data: f,
      success: function (response) {
        if(response == 'Login') {
          window.location.href = 'profile.html';
      } else {
          alert('login Fails!!!');
      }
      }
    });
  }