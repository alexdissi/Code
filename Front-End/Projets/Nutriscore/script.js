$('#button').on("click", function () {
    var codeBar = $("#search-bar").val();
    $("#result").text(codeBar);
    $("#resultat").css("display", "flex");
    $("#resultat").css("border", "white 2px solid");


  $.get('https://word.openfoodfacts.org/api/v0/product/' + codeBar + 'json' , function(datas) {
$('#result').text(datas.product.brands),
$('#imageProduits').attr('src' , datas.product.image_front_small_url);
$('#nutriScore').attr('src' , 'https://static.openfoodfacts.org/images/attributes/nutriscore-' + datas.product.nutrition_grades_tags +'.svg');
  })
    });