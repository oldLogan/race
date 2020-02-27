"use strict";


jQuery(document).ready(function ($) {


    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $('#navbar-collapse').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1000);
                if ($('.navbar-toggle').css('display') != 'none') {
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });


    /*---------------------------------------------*
     * For Price Table
     ---------------------------------------------*/

    checkScrolling($('.cd-pricing-body'));
    $(window).on('resize', function () {
        window.requestAnimationFrame(function () {
            checkScrolling($('.cd-pricing-body'))
        });
    });
    $('.cd-pricing-body').on('scroll', function () {
        var selected = $(this);
        window.requestAnimationFrame(function () {
            checkScrolling(selected)
        });
    });

    function checkScrolling(tables) {
        tables.each(function () {
            var table = $(this),
                    totalTableWidth = parseInt(table.children('.cd-pricing-features').width()),
                    tableViewport = parseInt(table.width());
            if (table.scrollLeft() >= totalTableWidth - tableViewport - 1) {
                table.parent('li').addClass('is-ended');
            } else {
                table.parent('li').removeClass('is-ended');
            }
        });
    }

    //switch from monthly to annual pricing tables
    bouncy_filter($('.cd-pricing-container'));

    function bouncy_filter(container) {
        container.each(function () {
            var pricing_table = $(this);
            var filter_list_container = pricing_table.children('.cd-pricing-switcher'),
                    filter_radios = filter_list_container.find('input[type="radio"]'),
                    pricing_table_wrapper = pricing_table.find('.cd-pricing-wrapper');

            //store pricing table items
            var table_elements = {};
            filter_radios.each(function () {
                var filter_type = $(this).val();
                table_elements[filter_type] = pricing_table_wrapper.find('li[data-type="' + filter_type + '"]');
            });

            //detect input change event
            filter_radios.on('change', function (event) {
                event.preventDefault();
                //detect which radio input item was checked
                var selected_filter = $(event.target).val();

                //give higher z-index to the pricing table items selected by the radio input
                show_selected_items(table_elements[selected_filter]);

                //rotate each cd-pricing-wrapper 
                //at the end of the animation hide the not-selected pricing tables and rotate back the .cd-pricing-wrapper

                if (!Modernizr.cssanimations) {
                    hide_not_selected_items(table_elements, selected_filter);
                    pricing_table_wrapper.removeClass('is-switched');
                } else {
                    pricing_table_wrapper.addClass('is-switched').eq(0).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
                        hide_not_selected_items(table_elements, selected_filter);
                        pricing_table_wrapper.removeClass('is-switched');
                        //change rotation direction if .cd-pricing-list has the .cd-bounce-invert class
                        if (pricing_table.find('.cd-pricing-list').hasClass('cd-bounce-invert'))
                            pricing_table_wrapper.toggleClass('reverse-animation');
                    });
                }
            });
        });
    }
    function show_selected_items(selected_elements) {
        selected_elements.addClass('is-selected');
    }

    function hide_not_selected_items(table_containers, filter) {
        $.each(table_containers, function (key, value) {
            if (key != filter) {
                $(this).removeClass('is-visible is-selected').addClass('is-hidden');

            } else {
                $(this).addClass('is-visible').removeClass('is-hidden is-selected');
            }
        });
    }


    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

    // $.localScroll();



// scroll Up

    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('.scrollup').fadeIn('slow');
        } else {
            $('.scrollup').fadeOut('slow');
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });


    //End
});

function validaDelete(){
    return confirm("Deseja realmente excluir esse registro?");
}

$(document).ready(function(){
    $('.masc.date').mask('00/00/0000');
    $('.masc.time').mask('00:00:00');
    $('.masc.date_time').mask('00/00/0000 00:00:00');
    $('.masc.cep').mask('00000-000');
    // $('.telefone').mask('0000-0000');
    $('.masc.telefone').mask('(00) 0000-0000');
    $('.masc.celular').mask('(00) 00000-0000');
    $('.masc.mixed').mask('AAA 000-S0S');
    $('.masc.cpf').mask('000.000.000-00', {reverse: true});
    $('.masc.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.masc.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.masc.money2').mask("#.##0,00", {reverse: true});
    $('.masc.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.masc.ip_address').mask('099.099.099.099');
    $('.masc.percent').mask('##0,00%', {reverse: true});
    $('.masc.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.masc.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.masc.fallback').mask("00r00r0000", {
        translation: {
          'r': {
            pattern: /[\/]/,
            fallback: '/'
          },
          placeholder: "__/__/____"
        }
      });
    $('.masc.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});

var get = function(url, _success){
    $.ajax({
        type: "GET", 
        url: url,
        timeout: 3000,
        cache: false,
        beforeSend: function(e){
            $("#modalLoading").modal("show");
        },
        error: function(e){
            $("#modalLoading").modal("hide");
            console.log(e);
        },
        success: function(e){
            $("#modalLoading").modal("hide");
            _success(e);
        }
    });
};
var post = function(_url, _dados, _success){
    $.ajax({
        type: "POST", 
        url: _url,
        dados: _dados,
        timeout: 3000,
        cache: false,
        beforeSend: function(e){
            $("#modalLoading").modal("show");
        },
        error: function(e){
            $("#modalLoading").modal("hide");
            console.log(e);
        },
        success: function(e){
            $("#modalLoading").modal("hide");
            _success(e);
        }
    });
};

function loading(){
    return '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="圖層_1" x="0px" y="0px" viewBox="0 -30 100 100" style="transform-origin: 50px 50px 0px; width: 200px;" xml:space="preserve"><g style="transform-origin: 50px 50px 0px;"><g style="transform-origin: 50px 50px 0px; transform: scale(0.6);"><g style="transform-origin: 50px 50px 0px;"><g><style type="text/css" class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -1s; animation-direction: normal;">.st0{fill:#333333;} .st1{fill:#FFFFFF;stroke:#E15B64;stroke-width:9;stroke-miterlimit:10;} .st2{fill:#E0E0E0;} .st3{fill:#666666;} .st4{fill:#77A4BD;} .st5{fill:#FFFFFF;} .st6{fill:none;stroke:#E0E0E0;stroke-width:4.1492;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st7{fill:#E15B64;} .st8{fill:#FFFFFF;stroke:#E15B64;stroke-width:9.375;stroke-miterlimit:10;} .st9{fill:#FFFFFF;stroke:#333333;stroke-width:2.2676;stroke-miterlimit:10;} .st10{fill:#E0E0E0;stroke:#666666;stroke-width:4;stroke-miterlimit:10;} .st11{fill:#CCCCCC;} .st12{fill:none;stroke:#666666;stroke-width:3.8883;stroke-linecap:round;stroke-miterlimit:10;} .st13{fill:#E0E0E0;stroke:#E0E0E0;stroke-width:4.0031;stroke-linecap:round;stroke-miterlimit:10;} .st14{fill:none;stroke:#E0E0E0;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;} .st15{fill:#66503A;} .st16{fill:#849B87;} .st17{fill:none;stroke:#666666;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;} .st18{fill:#F47E60;} .st19{fill:#ABBD81;} .st20{fill:#F8B26A;} .st21{fill:none;stroke:#808080;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;} .st22{fill:#D50D01;} .st23{fill:#F5E6C8;} .st24{fill:#4D85AB;} .st25{fill:#F5E169;} .st26{fill:#FFFFFF;stroke:#000000;stroke-miterlimit:10;} .st27{fill:#E6E6E6;} .st28{stroke:#000000;stroke-miterlimit:10;} .st29{fill:#C33737;} .st30{fill:#FFFFFF;stroke:#E15B64;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;} .st31{fill:#808080;} .st32{fill:none;stroke:#E0E0E0;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;} .st33{fill:#666666;stroke:#FFFFFF;stroke-width:0.5834;stroke-linecap:round;stroke-miterlimit:10;} .st34{fill:none;stroke:#333333;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;} .st35{fill:#32517A;} .st36{fill:none;stroke:#E3CDB3;stroke-width:1.2;stroke-miterlimit:10;} .st37{fill:#E3CDB3;} .st38{fill:#849B87;stroke:#FFFFFF;stroke-width:1.5;stroke-miterlimit:10;} .st39{fill:none;stroke:#FFFFFF;stroke-width:4;stroke-miterlimit:10;} .st40{fill:#E15B64;stroke:#E0E0E0;stroke-width:3.3992;stroke-miterlimit:10;} .st41{fill:none;stroke:#E15B64;stroke-width:11.25;stroke-miterlimit:10;} .st42{fill:#FFFFFF;stroke:#E15B64;stroke-width:10;stroke-miterlimit:10;} .st43{fill:none;stroke:#E15B64;stroke-width:12;stroke-miterlimit:10;} .st44{fill:none;stroke:#333333;stroke-width:5;stroke-miterlimit:10;} .st45{fill:none;stroke:#333333;stroke-width:4.1855;stroke-miterlimit:10;} .st46{fill:#0071BC;stroke:#E15B64;stroke-width:9.375;stroke-miterlimit:10;} .st47{fill:#E15B64;stroke:#E15B64;stroke-width:9.375;stroke-miterlimit:10;} .st48{fill:none;stroke:#FFFFFF;stroke-width:10.6891;stroke-miterlimit:10;} .st49{fill:none;stroke:#E15B64;stroke-width:8;stroke-miterlimit:10;} .st50{fill:#FFFFFF;stroke:#333333;stroke-width:3.8549;stroke-miterlimit:10;} .st51{fill:none;stroke:#C33737;stroke-width:3.0839;stroke-linecap:round;stroke-linejoin:bevel;stroke-miterlimit:10;} .st52{fill:#A0C8D7;stroke:#77A4BD;stroke-width:2.5;stroke-miterlimit:10;} .st53{fill:#A0C8D7;} .st54{fill:none;stroke:#FFFFFF;stroke-width:3.6819;stroke-linecap:round;stroke-miterlimit:10;} .st55{opacity:0.5;fill:#666666;} .st56{fill:none;stroke:#333333;stroke-width:4.6651;stroke-miterlimit:10;} .st57{fill:#849B87;stroke:#FFFFFF;stroke-width:1.4326;stroke-miterlimit:10;} .st58{fill:none;stroke:#FFFFFF;stroke-width:2.5098;stroke-linecap:round;stroke-miterlimit:10;} .st59{fill:none;stroke:#FFFFFF;stroke-width:2.2296;stroke-linecap:round;stroke-miterlimit:10;} .st60{fill:none;stroke:#333333;stroke-width:1.7767;stroke-miterlimit:10;} .st61{fill:none;stroke:#FFFFFF;stroke-width:3.504;stroke-linecap:round;stroke-miterlimit:10;} .st62{fill:none;stroke:#FFFFFF;stroke-width:1.754;stroke-linecap:round;stroke-miterlimit:10;} .st63{fill:none;stroke:#333333;stroke-width:1.6297;stroke-miterlimit:10;} .st64{fill:none;stroke:#FFFFFF;stroke-width:1.6156;stroke-linecap:round;stroke-miterlimit:10;} .st65{fill:none;stroke:#333333;stroke-width:1.5011;stroke-miterlimit:10;} .st66{fill:#C2C2C2;} .st67{fill:none;stroke:#E0E0E0;stroke-width:4.0031;stroke-linecap:round;stroke-miterlimit:10;} .st68{fill:none;stroke:#666666;stroke-width:2.72;stroke-linecap:round;stroke-miterlimit:10;} .st69{fill:#F8B26A;stroke:#333333;stroke-width:3.0598;stroke-miterlimit:10;} .st70{fill:none;stroke:#FFFFFF;stroke-width:1.4118;stroke-linecap:round;stroke-miterlimit:10;} .st71{fill:none;stroke:#333333;stroke-width:4.3583;stroke-miterlimit:10;} .st72{fill:#77A4BD;stroke:#E0E0E0;stroke-width:3.2;stroke-miterlimit:10;} .st73{opacity:0.1;} .st74{fill:#E15B64;stroke:#E0E0E0;stroke-width:1.9832;stroke-miterlimit:10;} .st75{fill:none;stroke:#FFFFFF;stroke-width:2.3679;stroke-linecap:round;stroke-miterlimit:10;} .st76{fill:none;stroke:#A0C8D7;stroke-width:2.8855;stroke-linecap:round;stroke-miterlimit:10;} .st77{fill:none;stroke:#F8B26A;stroke-width:2.6943;stroke-linecap:round;stroke-miterlimit:10;} .st78{opacity:0.5;fill:#FFFFFF;} .st79{opacity:0.5;}</style><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.964286s; animation-direction: normal;"><path class="st3" d="M51,31.3h-9.8v14.7h25.2l-6.9-10.2C57.8,33.1,54.5,31.3,51,31.3z" fill="rgb(102, 102, 102)" style="fill: rgb(102, 102, 102);"/></g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.928571s; animation-direction: normal;"><path class="st3" d="M32.4,31.3c-3.6,0-6.7,2.2-7.6,5.4L21,46.1h17.1V31.3H32.4z" fill="rgb(102, 102, 102)" style="fill: rgb(102, 102, 102);"/></g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.892857s; animation-direction: normal;"><path class="st19" d="M88.1,55.1l-0.8-3.2c-0.1-0.4-0.2-0.7-0.3-1c-1.1-3.1-4.1-5.2-7.4-5.2H15.5c-3.1,0-5.7,2.2-6.2,5.2 c0,0.1-0.1,0.2-0.1,0.3l-0.6,3.9l-0.8,5.4c0,2.2,1.8,4.1,4.1,4.1h78.6L88.1,55.1z" fill="rgb(171, 189, 129)" style="fill: rgb(171, 189, 129);"/></g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.857143s; animation-direction: normal;"><path class="st7" d="M13.5,50.8h-4C9.2,50.8,9,51,9,51.2l-0.5,3.4c0,0.3,0.2,0.5,0.4,0.5h4.6c1.1,0,1.9-0.8,1.9-1.9v-0.5 C15.4,51.7,14.5,50.8,13.5,50.8z" fill="rgb(225, 91, 100)" style="fill: rgb(225, 91, 100);"/></g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.821429s; animation-direction: normal;"><path class="st2" d="M87.6,51.3c-0.1-0.3-0.3-0.5-0.6-0.5h-3c-0.8,0-1.4,0.6-1.4,1.3v1.6c0,0.7,0.6,1.3,1.4,1.3h3.8 c0.4,0,0.8-0.4,0.6-0.8L87.6,51.3z" fill="rgb(224, 224, 224)" style="fill: rgb(224, 224, 224);"/></g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.785714s; animation-direction: normal;"><path class="st16" d="M90.3,60.1H7.9c0,0-0.4,0-0.4,0.4c0,2.4,1.7,4.1,4.2,4.1h78.5c1.2,0,2.2-1,2.2-2.2v0 C92.5,61.1,91.5,60.1,90.3,60.1z" fill="rgb(132, 155, 135)" style="fill: rgb(132, 155, 135);"/></g><g style="transform-origin: 50px 50px 0px;"><g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.75s; animation-direction: normal;"><circle class="st5" cx="23.9" cy="62.4" r="7.5" fill="rgb(255, 255, 255)" style="fill: rgb(255, 255, 255);"/></g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.714286s; animation-direction: normal;"><path class="st0" d="M23.9,56.4c3.3,0,6,2.7,6,6s-2.7,6-6,6s-6-2.7-6-6S20.6,56.4,23.9,56.4 M23.9,53.4c-5,0-9,4-9,9c0,5,4,9,9,9 s9-4,9-9C32.9,57.5,28.8,53.4,23.9,53.4L23.9,53.4z" fill="rgb(51, 51, 51)" style="fill: rgb(51, 51, 51);"/></g></g></g><g style="transform-origin: 50px 50px 0px;"><g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.678571s; animation-direction: normal;"><circle class="st27" cx="23.9" cy="62.4" r="4" fill="rgb(230, 230, 230)" style="fill: rgb(230, 230, 230);"/></g></g></g><g style="transform-origin: 50px 50px 0px;"><g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.642857s; animation-direction: normal;"><circle class="st5" cx="71.5" cy="62.4" r="7.5" fill="rgb(255, 255, 255)" style="fill: rgb(255, 255, 255);"/></g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.607143s; animation-direction: normal;"><path class="st0" d="M71.5,56.4c3.3,0,6,2.7,6,6s-2.7,6-6,6c-3.3,0-6-2.7-6-6S68.2,56.4,71.5,56.4 M71.5,53.4c-5,0-9,4-9,9 c0,5,4,9,9,9s9-4,9-9C80.5,57.5,76.5,53.4,71.5,53.4L71.5,53.4z" fill="rgb(51, 51, 51)" style="fill: rgb(51, 51, 51);"/></g></g></g><g style="transform-origin: 50px 50px 0px;"><g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.571429s; animation-direction: normal;"><circle class="st27" cx="71.5" cy="62.4" r="4" fill="rgb(230, 230, 230)" style="fill: rgb(230, 230, 230);"/></g></g></g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.535714s; animation-direction: normal;"><path class="st19" d="M63.3,33.9c-2.1-3.3-5.9-5.4-10-5.4H29.1c-4.2,0-7.9,2.6-9,6.4l-4.5,11.1h6l3.5-8.7c0.8-3,3.7-5.1,7.1-5.1h5.4 v13.7h4.5V32.3h9.2c3.3,0,6.3,1.6,7.9,4.2l6.4,9.5h6L63.3,33.9z" fill="rgb(171, 189, 129)" style="fill: rgb(171, 189, 129);"/></g><g class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.5s; animation-direction: normal;"><path class="st16" d="M58.1,57.1H38.2c-1,0-1.8-0.8-1.8-1.8v0c0-1,0.8-1.8,1.8-1.8h19.9c1,0,1.8,0.8,1.8,1.8v0 C59.9,56.2,59.1,57.1,58.1,57.1z" fill="rgb(132, 155, 135)" style="fill: rgb(132, 155, 135);"/></g><metadata xmlns:d="https://loading.io/stock/" class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.464286s; animation-direction: normal;"><d:name class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.428571s; animation-direction: normal;">car</d:name><d:tags class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.392857s; animation-direction: normal;">wagon,RV,hybrid,drive,auto,wheel,vehicle,car,transportation</d:tags><d:license class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.357143s; animation-direction: normal;">cc-by</d:license><d:slug class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.321429s; animation-direction: normal;">8b47in</d:slug></metadata></g></g></g></g><style type="text/css" class="ld ld-fade" style="transform-origin: 50px 50px 0px; animation-duration: 1s; animation-delay: -0.285714s; animation-direction: normal;">path,ellipse,circle,rect,polygon,polyline,line { stroke-width: 0; }@keyframes ld-fade {  0% {    opacity: 1;  }  100% {    opacity: 0;  }}@-webkit-keyframes ld-fade {  0% {    opacity: 1;  }  100% {    opacity: 0;  }}.ld.ld-fade {  -webkit-animation: ld-fade 1s infinite linear;  animation: ld-fade 1s infinite linear;}</style></svg>';
}