$("#gov_regions_id").on("change", function () {
    $("#gov_city_id")
        .find("option")
        .remove()
        .end()
        .append('<option value=""></option>')
        .val("");

    $("#gov_neighbourhood_id")
        .find("option")
        .remove()
        .end()
        .append('<option value=""></option>')
        .val("");
    $("#gov_location_id")
        .find("option")
        .remove()
        .end()
        .append('<option value=""></option>')
        .val("");
});

$("#gov_city_id").on("change", function () {
    $("#gov_neighbourhood_id")
        .find("option")
        .remove()
        .end()
        .append('<option value=""></option>')
        .val("");
    $("#gov_location_id")
        .find("option")
        .remove()
        .end()
        .append('<option value=""></option>')
        .val("");
});

$("#gov_neighbourhood_id").on("change", function () {
    $("#gov_location_id")
        .find("option")
        .remove()
        .end()
        .append('<option value=""></option>')
        .val("");
});

$(".a1").on("change", function () {
    let val = $(this).val();

    let field_name = $(this).attr("name");

    let route = $("#address-cont").data("url");

    blockItem($("#address-cont")); // this function from blockui.js file

    $.ajax({
        type: "get",
        url: route + "/" + val + "/" + field_name,
        success: function (res) {
            if (field_name === "gov_regions_id") {
                res.forEach((element) => {
                    var card = `<option  value="${element.id}">${element.city_name}</option>`;
                    $("#gov_city_id").append(card);
                });
            } else if (field_name === "gov_city_id") {
                res.forEach((element) => {
                    var card = `<option  value="${element.id}">${element.neighbourhood_name}</option>`;
                    $("#gov_neighbourhood_id").append(card);
                });
            } else if (field_name === "gov_neighbourhood_id") {
                res.forEach((element) => {
                    var card = `<option  value="${element.id}">${element.location_name}</option>`;
                    $("#gov_location_id").append(card);
                });
            }
        },
    });

    unblockItem($("#address-cont"));
});
