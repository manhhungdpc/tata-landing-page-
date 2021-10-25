// device detection
var isMobile = false;
if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
$('document').ready(function () {
    var youtubeOject = {
        id: '',
        baseLink: "https://www.youtube.com/embed/",
        option: '?autoplay=1&showinfo=0&modestbranding=0&loop=1&rel=0',
        getlink: function () {
            return typeof this.id != 'undefined' ? this.baseLink + this.id + this.option : false;
        }
    };

    $('.main-index').on('click', '.play-video', function (event) {
        playVideoYoutube(this);
        event.stopPropagation();
    });

    $(".btn-watch-video").click(function (event) {
        playVideoYoutube(this);
        event.stopPropagation();
    });
    $('.link-play-video').click(function (event) {
        playVideoYoutube(this);
        event.stopPropagation();
    });

    $('.modal-header').on('click', '.close', function () {
        var modalId = $(this).closest('.modal').attr('id');
        $('#' + modalId).modal('hide');
    });

    $(".main-site").on("click", ".play-video", function () {
        youtubeOject.id = $(this).attr("data-video-id");
        var link = youtubeOject.getlink();
        if (link) {
            $(this)
                .closest(".thump-img")
                .addClass("tata_hidden");
            $('.video-hidden').removeClass('tata_hidden');
            var width = $(".video-hidden").width();
            var height = width * 9 / 16;
            $('.video-hidden').find('.iframe-video').attr('src', link).height(height);
        }
    });

    $("#modal-show-video").on("hidden.bs.modal", function (e) {
        $("#modal-show-video .iframe-video").attr("src", '');
    });

    $('.thump-video').each(function () {
        $(this).find('.thump-iframe').css('height', $(this).width() * (9 / 16))
    });

    $(window).scroll(function () {
        if (isMobile) {
            var currentPos = $(this).scrollTop();
            if (currentPos > 100) {
                $('#btn-go-top').removeClass('tata_hidden');
            }
            if (currentPos > 400) {
                $('#btn-register-bottom').removeClass('tata_hidden');
            } else {
                $('#btn-register-bottom').addClass('tata_hidden');
                $('#btn-go-top').addClass('tata_hidden');
            }
            if (($(window).scrollTop() > ($('.block-address').offset().top - 300))
                    && !$('#menu-navigation').hasClass('show')){
                $('#menu-navigation').collapse('show');
            }else if (($(window).scrollTop() < ($('.block-address').offset().top - 300)) && $('#menu-navigation').hasClass('show')){
                $('#menu-navigation').collapse('hide');
            }
        }
    });

    $('#btn-show-menu').click(function () {
        window.location.href = "https://ihomework.vn/";
    });

    $('.read-more-modal').click(function () {
        var id = $(this).attr("data-feedback-id");
        $('#feedback-content-' + id).removeClass('tata_hidden');
        $('#modal-show-feedback').modal();
    });

    $("#modal-show-feedback").on("hidden.bs.modal", function (e) {
        $("#modal-show-feedback .feedback-content-container").addClass('tata_hidden');
    });

    $('.btn-see-more').click(function (e) {
        $(this)
            .closest(".main-thump-content")
            .find(".tata_hidden")
            .removeClass('tata_hidden');
        $(this)
            .closest(".main-thump-content")
            .find(".dot")
            .remove();
        $(this)
          .closest(".text-justify")
          .find(".margin-0")
          .removeClass("margin-0");
        $(this).remove();
        return false;
    });

    $('#btn-go-top').click(function (e) {
        $("html,body").animate({scrollTop: $('.banner').offset().top - 40}, 500);
        e.stopPropagation();
    });

    $('.button-view-img').on('click', '.btn-next', function () {
        showImg(1);
    });

    $('.button-view-img').on('click', '.btn-previous', function () {
        showImg(-1);
    });

    $('.page-group-next').click(function () {
        pageGroupController(this,1);
    });

    $('.page-group-previous').click(function () {
        pageGroupController(this,0);
    });

    $('.btn-expand-text').click(function (e) {
        $(this).closest('.main-block').find('.expand-text').removeClass('tata_hidden');
        $(this).remove();
        e.stopPropagation();
    });

    $('.show-main-content').click(function() {
        $(this)
          .closest(".main-block")
          .find(".main-thump-hidden")
          .removeClass("main-thump-hidden");
        $(this)
          .closest(".main-block")
          .find(".show-main-thump-container").remove();
        return false;
    });

    // $(".description-text").on("click mouseenter", function(event) {
    //   showMoreDescription(this);
    //   event.stopPropagation();
    // });

    $('#site-nentang').click(function (event) {
        var target = event.target;
        if ($(target).find(" > .block-title-small").length != 0 || $(target).closest(".show-more-description").length != 0) return;
        $(".show-more-description")
            .addClass("tata_hidden")
            .removeClass("show-more-description");
    });


    // $('.iframe-google-form').hover(function() {
    //     if ($(window).scrollTop() < $(".google-form").offset().top + 200) {
    //         $("html,body").animate({ scrollTop: $(".google-form").offset().top - 50 }, 500);
    //     }  
    // })

    $('header').find('.active').addClass('menu-active');

    function showImg(add) {
        var container = $('.img-container');
        var currentImgActive = container.find('.active');
        var currentID = parseInt(currentImgActive.attr('data-img-id'));
        var nextImg = currentID + add;
        $('.button-view-img').find('.disable').removeClass('disable');
        if ($('#img-feedback-' + nextImg).length > 0) {
            currentImgActive.removeClass('active').addClass('tata_hidden');
            $('#img-feedback-' + nextImg).removeClass('tata_hidden').addClass('active');
        } else {
            if (add === 1) {
                $('.button-view-img').find('.btn-next').addClass('disable');
            } else {
                $('.button-view-img').find('.btn-previous').addClass('disable');
            }
        }
    }

    function pageGroupController(button, status) {
        var activePage = $(button).closest('.modal').find('.active');
        var targetPage;
        if (status === 1) {
            targetPage = activePage.next('.page-group-item');
        } else {
            targetPage = activePage.prev('.page-group-item');
        }

        if (targetPage.length > 0){
            $(activePage).removeClass('active');
            $(targetPage).addClass('active');
        }else{
            $(button).addClass('disable');
        }
    }

    function playVideoYoutube(target) {
        var dataId = $(target).attr("data-video-id");
        var link = dataId;
        if (dataId.match(/https/g) === null) {
            youtubeOject.id = $(target).attr("data-video-id");
            link = youtubeOject.getlink();
        }
        var modalTarget = $("#modal-show-video");
        if (link) {
            modalTarget.find(".iframe-video").attr("src", link);
            modalTarget.modal({
                keyboard: true
            });
        }
    }

    function showMoreDescription(target){
        $(".show-more-description")
          .addClass("tata_hidden")
          .removeClass("show-more-description");
        $(target)
          .closest(".main-thump")
          .find(".more-description-thump")
          .removeClass('tata_hidden')
          .addClass("show-more-description");
    }
});
