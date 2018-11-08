let x=$(".register");

x.click(function(){
    $(".registerContainer").toggleClass("show");
});

$(document).ready(function(){
  $("#logbut").on('click',function(){
    var email=$("#email").val();
    var password=$("#pwd").val();

    if(email==""||password=="")
    alert('Please check your inputs');
    else{
    $.ajax({
      url:'login.php',
      method:'POST',
      data:{
        login:1,
        emailPHP:email,
        passwordPHP:password
      },
      success: function(response){
        console.log(response);
      },
      dataType:'text'
    }
  );}
  });

  $("#regbut").on('click',function(){
    var email2=$("#email2").val();
    var password2=$("#pwd2").val();
    var pwdc=$("#pwdc").val();

    console.log(email2);
    console.log(password2);
    console.log(pwdc);

    if(email2==""||password2==""||pwdc=="") alert('Please check your inputs');
    else if(password2 != pwdc) alert('Passwords dont fit');
    else {
      $.ajax({
        url: 'login.php',
        method:'POST',
        data:{
          registration:1,
          email2PHP:email2,
          password2PHP:password2
        },
        success: function(response){
          console.log(response);
        },
        dataType:'text'
      });
    }


  });



});
