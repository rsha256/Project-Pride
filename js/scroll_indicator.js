// When the user scrolls the page, execute scrollIndicator
window.onscroll = function() {scrollIndicator()};

function scrollIndicator() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
}

// for changing page

// $(window).scroll(function() {
//     var scrollTop = $(this).scrollTop();
//     var headerToDisplay = false;
//     $('.header[data-visible-range]').each(function() {
//         var range = $(this).data('visible-range').split('-');
//         range[0] = range[0] ? parseInt(range[0], 10) : 0;
//         range[1] = range[1] ? parseInt(range[1], 10) : $(document).height();
//         if(scrollTop >= range[0] && scrollTop <= range[1]) {
//             headerToDisplay = $(this);
//             return false;
//         }
//     });
//     if(headerToDisplay && !headerToDisplay.is(':visible')) {
//         $('.header[data-visible-range]').hide();
//         headerToDisplay.show();
//     }
// });
