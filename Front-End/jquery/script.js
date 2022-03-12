$('test1').hide();


$('.test').click(function() {
$('test1').show();
});

$( ".change" ).on("click", function() {
    if( $( "body" ).hasClass( "dark" )) {
        $( "body" ).removeClass( "dark" );
        $( ".change" ).text( "OFF" );
    } else {
        $( "body" ).addClass( "dark" );
        $( ".change" ).text( "ON" );
    }
});

    $(".dupliquer").on('click', function () {
        var getText = $('.get').text();//get
        $('get').text(getText); //set
    });