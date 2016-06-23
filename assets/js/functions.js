
$(function() {
    mentoringFaces();
    designChange();
});

function mentoringFaces() {
    $('.face').on('click', function() {
        var $this = $(this),
            faceTop = $this.position().top;
            vertMath = -(faceTop - 210);

        $this.parent().css('top', + vertMath +'px');

        $this.addClass('has-open').siblings().removeClass('has-open');

    });


}

function designChange() {
    $('.design-img').hover(function() {
        $(this).parent().parent().parent().css('background-color', $(this).data('color'));
    }, function() {
        $(this).parent().parent().parent().css('background-color', $(this).parent().parent().parent().data('orig-color'));
    });
}

$(window).scroll(function() {
   faceBubbleAppear();
});

function faceBubbleAppear() {
    var wScroll = $(window).scrollTop();
    if(wScroll > 700) {
        $('.face').css('display', 'block');
        setTimeout(function() {
            $('.face:nth-child(3)').addClass('has-open');
        }, 400)
    }

}