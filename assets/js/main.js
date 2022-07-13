const siteUrl = 'http://az-xl.local';


////group input ( input animation )

function checkGroupInputValue(className) {
    let name = $('.' + className);
    let nameLength = name.length;
    if (nameLength > 0) {
        for (let i = 0; i < name.length; i++) {
            let valueLength = $(name[i]).val().length;
            if (valueLength > 0) {
                $(name[i]).siblings('label').addClass('active');
                $(name[i]).addClass('active');
            }
        }
    }
}

checkGroupInputValue('group__input');
checkGroupInputValue('group__select');

$(document).on('focusin', '.group__input', function () {
    $(this).siblings('label').addClass('active');
    $(this).addClass('active');
});
$(document).on('focusout', '.group__input', function () {
    let $this = $(this);
    let value = $(this).val();
    if (value.length === 0) {
        $this.siblings('label').removeClass('active');
        $(this).removeClass('active');
    }
});
$(document).on('change', '.group__select', function () {

    let value = $(this).val();

    if (value !== "") {
        $(this).addClass('active')
    } else {
        $(this).removeClass('active')
    }
});


//// popup


function showPopup(whichpopup) {
    var docHeight = $(document).height();
    var scrollTop = $(window).scrollTop();
    $('.overlay-bg').show().css({'height': docHeight});
    $('.popup' + whichpopup).show().css({'top': scrollTop + 20 + 'px'});
}

// function to close our popups
function closePopup() {
    $('.overlay-bg, .overlay-content').hide();
}

$('.show-popup').click(function (event) {
    event.preventDefault();
    var selectedPopup = $(this).data('showpopup');
    showPopup(selectedPopup);
});
$('.close-btn, .overlay-bg').click(function () {
    closePopup();
});
$(document).keyup(function (e) {
    if (e.keyCode == 27) {
        closePopup();
    }
});

