var owl = $('.owl-carousel');
owl.owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 7500,
    autoplayHoverPause: true,
});

$(".card-submit").click(function(){
    var self = $(this),
    id = self.data('id'),
    form = self.closest(".card-form"),
    isCard = $('.item-product[data-id='+id+'] input[name=card]').is(':checked'),
    isTerm = $('.terms[data-id='+id+']').is(':checked');
    if(isCard && isTerm) {
        form.submit();
    }else if(!isCard) {
        swal(
            'Please',
            'Choose a card to continue.',
            'warning'
        )
    }else if(!isTerm) {
        swal(
            'Please',
            'Accept terms and condition to continue.',
            'warning'
        )
    }
    return false;
});
$("input[name=card]").click(function(){
    $(".item-product").removeClass("selected");
    $(this).prop("checked", true).parent().addClass("selected");
});

//# sourceMappingURL=home.js.map
