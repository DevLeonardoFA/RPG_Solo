$(function() {

    $("[id='caracter_profile']").click(function() {

        var classList = $(this).attr('class').split(" ");

        console.log(classList);

        if ($.inArray("caracter__perfil--archer", classList) != -1) {
            console.log('arqueiro');
        } else {
            if ($.inArray("caracter__perfil--warrior", classList) != -1) {
                console.log('lutador');
            } else {
                if ($.inArray("caracter__perfil--thief", classList) != -1) {
                    console.log('ladrao');
                } else {
                    if ($.inArray("caracter__perfil--mage", classList) != -1) {
                        console.log('mago');
                    }
                }
            }
        }

        $("section#main").addClass("off");
        setTimeout(function() {
            $("section#main").remove();
        }, 1500);

        $("#history").removeClass("disabled")
        setTimeout(function() {
            $("#history").removeClass("off");
        }, 1500);

    });

    $("#btn_h0-h1").click(function() {

        $("#h0").addClass("off");
        setTimeout(function() {
            $("#h0").remove();
        }, 1500);

        $("#h1").removeClass("disabled")
        setTimeout(function() {
            $("#h1").removeClass("off");
        }, 1500);


    })


    $("#btn_h1-h2").click(function() {
        $("#h1").addClass("off");
        setTimeout(function() {
            $("#h1").remove();
        }, 1500);

        $("#h2").removeClass("disabled")
        setTimeout(function() {
            $("#h2").removeClass("off");
        }, 1500);
    })


    $("#btn_h1-h2.0").click(function() {
        $("#h2").addClass("off");
        setTimeout(function() {
            $("#h2").remove();
        }, 1500);

        $("#h2.0").removeClass("disabled")
        setTimeout(function() {
            $("#h2.0").removeClass("off");
        }, 1500);
    })

    $("").click(function() {

    })
    $("").click(function() {

    })


    // $("").addClass("off");
    // setTimeout(function(){
    //     $("").remove();
    // }, 1500);

});