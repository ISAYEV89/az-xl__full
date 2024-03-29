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

/////// menu


const openedMenu = document.querySelector('.opened-menu');
const closedMenu = document.querySelector('.closed-menu');
const navbarMenu = document.querySelector('.navbar');
const menuOverlay = document.querySelector('.overlay');

// Opened navbarMenu
// Closed navbarMenu
// Closed navbarMenu by Click Outside
openedMenu.addEventListener('click', toggleMenu);
closedMenu.addEventListener('click', toggleMenu);
menuOverlay.addEventListener('click', toggleMenu);

// Toggle Menu Function
function toggleMenu() {
    navbarMenu.classList.toggle('active');
    menuOverlay.classList.toggle('active');
    document.body.classList.toggle('scrolling');
}

navbarMenu.addEventListener('click', (event) => {
    if (event.target.hasAttribute('data-toggle') && window.innerWidth <= 992) {
        // Prevent Default Anchor Click Behavior
        event.preventDefault();
        const menuItemHasChildren = event.target.parentElement;

        // If menuItemHasChildren is Expanded, Collapse It
        if (menuItemHasChildren.classList.contains('active')) {
            collapseSubMenu();
        } else {
            // Collapse Existing Expanded menuItemHasChildren
            if (navbarMenu.querySelector('.menu-item-has-children.active')) {
                collapseSubMenu();
            }
            // Expand New menuItemHasChildren
            menuItemHasChildren.classList.add('active');
            const subMenu = menuItemHasChildren.querySelector('.sub-menu');
            subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
        }
    }
});

///// filter accordion
$('.filter-text').click(function () {
    $('.filter-main').slideToggle();
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


//// star rating


let starInfoAdd = JSON.parse(localStorage.getItem('starRating'));

let blog_id = $('#blogId').val();

if (starInfoAdd != null) {

    for (let i = 0; i < starInfoAdd.length; i++) {
        if (+starInfoAdd[i].blogId === +blog_id) {

            let a =starInfoAdd[i].star;
            $(`#star-${a}`).attr('checked', true);
            break;
        }

    }

}

// $(`#star-${a}`).attr('checked', true);


$('.star-item').click(function () {

    let updt = 0;
    let star = $(this).val();
    let blogId = $('#blogId').val();
    var id = '';

    let starInfo = JSON.parse(localStorage.getItem('starRating'));

    if (starInfo == null) {

        starInfo = [];

        $.ajax({
            url: siteUrl + '/ajax/star.php',
            method: 'POST',
            data: {
                "star": star,
                "blogId": blogId,
                "updt": updt,
            },
            dataType: "text",
            async: false,
            global: false,
            success: function (data) {
                let starInfo2 = {"blogId": blogId, "star": star, "id": data};
                starInfo.push(starInfo2);
                localStorage.setItem('starRating', JSON.stringify(starInfo));
            }
        })

    } else if (starInfo !== null) {

        starInfo = JSON.parse(localStorage.getItem('starRating'));

        let find = 0;

        for (let i = 0; i < starInfo.length; i++) {

            if (+starInfo[i].blogId === +blogId) {
                starInfo[i].star = star;
                find = 1;
                updt = 1;
                id = starInfo[i].id;


                $.ajax({
                    url: siteUrl + '/ajax/star.php',
                    method: 'POST',
                    data: {
                        "star": star,
                        "blogId": blogId,
                        "id": id,
                        "updt": updt,
                    },
                    dataType: "text",
                    async: false,
                    global: false,
                    success: function (data) {
                        localStorage.setItem('starRating', JSON.stringify(starInfo));
                    }
                });
                break;
            }

        }


        if (+find === 0) {
            $.ajax({
                url: siteUrl + '/ajax/star.php',
                method: 'POST',
                data: {
                    "star": star,
                    "blogId": blogId,
                    "updt": updt,
                },
                dataType: "text",
                async: false,
                global: false,
                success: function (data) {
                    let starInfo2 = {"blogId": blogId, "star": star, "id": data};
                    starInfo.push(starInfo2);
                    localStorage.setItem('starRating', JSON.stringify(starInfo));
                }
            })
        }


    }


});