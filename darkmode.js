$("#toggle").click(function(){
        
        
    var kl =$("#toggle").attr('class');
    if(kl == "bi bi-brightness-high-fill"){
        console.log("usa");
        $("#toggle").removeClass();
        $("#toggle").addClass("bi bi-brightness-high");
        $("body").css("background-color","black");
        $("body").css("color","white");
        $("#navigacija").removeClass();
        $("#navigacija").addClass("navbar navbar-expand-lg navbar-light bg-dark shadow fixed-top");
        $("#mojLi").css("color","white");
        $("#offcanvasExample").css("background-color","black");
    }

    else{
        $("#toggle").removeClass();
        $("#navigacija").removeClass();
        $("#navigacija").addClass("navbar navbar-expand-lg navbar-light bg-light shadow fixed-top");
        $("#mojLi").css("color","black");
        $("#toggle").addClass("bi bi-brightness-high-fill");
        $("body").css("background-color","white");
        $("body").css("color","black");
    }


});
