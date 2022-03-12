$("#button1").on("click", function () {
  var getVal = $("#enterText").val();
  $(".resultat").text(getVal);
});

$("#button2").on("click", function () {
  $(".resultat").text($(".test").text());
});

$("#ville").on("change", function () {
  $(".setVille").text($(this).val()); //get et set
});
