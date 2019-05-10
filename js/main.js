$("document").ready(function () {
$("#signup-btn").click(function(){
         $("#login").modal("toggle");
        $("#signup").modal("toggle");

    });
     $("#to-login").click(function(){
        $("#signup").modal("toggle");
          $("#login").modal("toggle");
     });
    
    });