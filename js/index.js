$(document).ready(function() {

$(".open").hide();
$(".nav1").hide();
$(".closed").click(function() {
  $(".nav1").slideToggle("slow", function() {
    $(".closed").hide();
    $(".open").show();
  });
});

$(".open").click(function() {
  $(".nav1").slideToggle("slow", function() {
    $(".open").hide();
    $(".closed").show();
  });
});

});
