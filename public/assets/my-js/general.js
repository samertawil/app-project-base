// begin  hide navebar ---------------------------

function hidde() {
    $(".hidden").css("display", "none");
}

$(window).on("load", function () {
    hidde();
});

// end hide navebar ---------------------------

// begin  hide marital_status in Aid  create and edit regestration form ------------------------------------

$("#marital_status").on("change", function () {
    let value = $("#marital_status").val();
    if (value == 109) {
        $(".family").fadeOut("slow", function () {
            $(this).addClass("d-none");
        });
    } else if (value == 110 || value == 122) {
        $(".family").fadeIn("slow", function () {
            $(this).removeClass("d-none");
        });
    } else {
        $(".family").removeClass("d-none");

        $(".separate").addClass("d-none");
    }
});

// end hide marital_status  ------------------------------------

//begin of check idc for emp -------------

function chkIdc() {
    let idc = $("#idc").val();

    let route = $("#url").data("url");

    if (idc === "") {
        alert("الرجاء كتابة رقم هوية للبحث");
    } else {
        window.location.href = route + "/" + idc;
    }
}
//end of check idc for emp -------------

//begin of re load page 
function reloadPage() {
    $('.reload').on('click', function() {
        location.reload();
    }) 
}


 