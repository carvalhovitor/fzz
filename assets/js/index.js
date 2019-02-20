var $grid = $('#grid'),
    $nav = $('header nav, footer'),
    isotopeInit = false;
    
$nav.on('click', 'button[data-filter]', function() {
    var filterValue = $(this).attr('data-filter');
    
    location.hash = encodeURIComponent(filterValue);
})

function getHashFilter() {
    return '.' + decodeURIComponent(location.hash).substring(1);
}

function organizeGrid() {
    var hashFilter = '';

    if (location.hash) hashFilter = location.hash == '#*' ? '*' : getHashFilter();
    if (!hashFilter && isotopeInit) return;
    isotopeInit = true;

    $grid.isotope({
        layoutMode: 'fitRows',
        itemSelector: '.grid-item',
        fitRows: {
            gutter: 24,
            columnWidth: '.grid-item'
        },
        filter: hashFilter,
        transitionDuration: 100,
        hiddenStyle: {
            opacity: 0
        },
        visibleStyles: {
            opacity: 1
        }
    })

    if (hashFilter) {
        $('nav p').find('.active').removeClass();
        $('nav p').find('a[href*="' + hashFilter.substring(1) + '"]').addClass('active');
    }
}

$(window).on('hashchange', organizeGrid);

var isExternal = function(url) {
    var domain = function(url) {
        return url.replace('http://','').split('/')[0];
    };

    return domain(location.href) !== domain(url);
}

function addTargetToLinks() {
    var links = $('.project-description a, .about a');

    for (i = 0; i < links.length; i++) {
        if (isExternal(links[i].href)) links[i].setAttribute('target', '_blank');
    }
}

function changeFooterLogoColor() {
    var body = document.getElementsByTagName("BODY")[0],
        blackBg = body.style.backgroundColor == 'rgb(0, 0, 0)';

    $('footer svg').css('fill', blackBg ? '#fff' : '#000');
}

$(function() {
    organizeGrid();
    addTargetToLinks();
    changeFooterLogoColor();
})