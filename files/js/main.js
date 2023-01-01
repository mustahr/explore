// for the reserve 
$(".button").click(function () {
    $(".reserv_info").css("display", "none");
    $("#form").css("display", "flex");
});

$("#close").click(function () {
    $("#form").css("display", "none");
    $(".reserv_info").css("display", "flex");
});

