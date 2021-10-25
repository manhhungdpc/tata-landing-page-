<?php
$trackKey = isset($_GET['tk']) ? $_GET['tk'] : null;
$tab = 'online';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="Trung tâm tiếng anh số 1 dạy phát âm và ngữ điệu tiếng Anh">
    <meta name="keywords" content="Sau 8 năm chuyên dạy &quotNền Tảng Tiếng Anh	&quot cho người Thiếu
    Kiên Trì &quot, hiện Tata là trung tâm số 1 Hà Nội cho các bạn Mất Gốc và Nhanh Nản khi học tiếng Anh.">
    <meta property="og:title" content="Tata English - Nền Tảng Tiếng Anh cho người Thiếu Kiên Trì" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://tata.edu.vn" />
    <meta property="og:image" content="http://tata.edu.vn/imgs/atung.jpg" />
    <meta property="og:description" content="Trung tâm tiếng anh số 1 dạy phát âm và ngữ điệu tiếng Anh">
    <title> Tata English - Nền Tảng Tiếng Anh cho người Thiếu Kiên Trì </title>
    <link rel="canonical" href="http://tata.edu.vn/" />
    <link rel="alternate" href="http://tata.edu.vn/" hreflang="vi" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="/imgs/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" type="image/png" href="imgs/favicon.ico">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115024687-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-115024687-1');
        gtag('config', 'UA-122960177-1');
        gtag('config', 'UA-123150922-1');
        gtag('config', 'AW-859725243');

        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-92892127-1', 'auto');
        ga('require', 'GTM-WRZ66TW');
        ga('send', 'pageview')
    </script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '814506892363397',
                cookie: true,
                xfbml: true,
                version: 'v6.0'
            });

            FB.AppEvents.logPageView();

        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/vi_VN/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <style>
        @media (min-width: 320px) {
            .block-fee {
                background-color: #f5f5f5;
            }

            .thump-img .profile-box {
                position: absolute;
                top: 60px;
                left: 20px;
                z-index: 11;
            }

            .profile-box>span {
                display: block;
                margin-top: 10px;
            }

            .profile-box .title {
                color: #293377;
                font-size: 17px;
            }

            .profile-box .sub {
                font-size: 14px;
            }

            .thanks-regis {
                color: #52ec52;
                font-size: 18px;
                font-weight: 700;
            }

            #modal-success-registration .modal-dialog {
                width: 350px;
                background-color: white;
                left: calc(50% - 175px);
                top: 20vh;
                min-width: 375px;
                min-height: auto;
            }
        }

        @media (min-width: 780px) {

            /* .btn-combo-1{
                margin-top: 9.8em !important;
            }
            .btn-combo-3{
                margin-top: 10.5em !important;
            } */
            .modal-content {
                width: 70%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 10%;
            }

            #modal-success-registration .modal-dialog {
                left: auto;
            }
        }
    </style>
</head>

<body>
    <div class="body-container" id="site-nentang" itemscope itemtype="http://schema.org/Organization">
        <header>
            <div class="container-fluid clearfix">
                <div class="header-container tata-main-padding relative-layer row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 div-logo clearfix">
                        <a class="logo-link" href="/">
                            <img src="/imgs/logo.webp" id="main-logo">
                            <h1><span class="tata_hidden header-slogan">
                                    Nền Tảng cho người thiếu Kiên Trì </span></h1>
                        </a>
                    </div>
                    <div class="col-lg-10 col-md-10 desktop menu-bar text-right tata_hidden" id="desktop-menu-bar">
                        <a href="/" class="menu-bar-item active">
                            <h1><span class="text-capitalize">Trang Chủ</span></h1>
                        </a>
                        <a href="/hatgiongniemtin/" class="menu-bar-item tata_hidden">
                            <span class="text-capitalize">Con Đường Của Tata</span>
                        </a>
                        <a href="/cover/" class="menu-bar-item tata_hidden">
                            <span class="text-capitalize">Get Cover</span>
                        </a>
                        <a href="/uommamtienganh/" class="menu-bar-item tata_hidden">
                            <span>Ươm Mầm Tiếng Anh</span>
                        </a>
                        <a class="menu-bar-item tata_hidden" href="https://ihomework.vn" target="_blank">
                            <span class="text-capitalize">Đăng Nhập Khóa toeic</span>
                        </a>
                        <a class="menu-bar-item" href="https://tataenglish.vn" target="_blank">
                            <span class="text-capitalize">Đăng Nhập</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mobile-navigation mobile">
                <button class="btn-menu-navigation" data-toggle="collapse" data-target="#menu-navigation">
                    <i class="fa fa-bars fa-2x"></i>
                </button>
                <div class="collapse" id="menu-navigation">
                    <ul class="navbar-nav" style="padding:0">
                        <li class="nav-item">
                            <a href="/" class="menu-bar-item active">
                                <span class="text-capitalize">Trang Chủ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/hatgiongniemtin/" class="menu-bar-item tata_hidden">
                                <span class="text-capitalize">Con Đường Của Tata</span>
                            </a>
                        </li>
                        <li class="nav-item tata_hidden">
                            <a href="/cover/" class="menu-bar-item">
                                <span class="text-capitalize">Get cover</span>
                            </a>
                        </li>
                        <li class="nav-item tata_hidden">
                            <a href="/uommamtienganh/" class="menu-bar-item">
                                <span class="text-capitalize">Ươm Mầm Tiếng Anh</span>
                            </a>
                        </li>
                        <li class="nav-item tata_hidden">
                            <a class="menu-bar-item last-item tata_hidden" href="https://tataenglish.vn/" target="_blank">
                                <span class="text-capitalize">Đăng Nhập Khóa Toeic</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="menu-bar-item last-item" href="https://tataenglish.vn/" target="_blank">
                                <span class="text-capitalize">Đăng Nhập</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="m-relative-layout">
            <div class="banner row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block-container">
                    <div class="relative-layer text-center">
                         <div class="banner-content desktop">
                            <div class="banner-text text-xlarge">
                                <div class="banner-btn">
                                    <div style="min-width: 100%; height: 60px"></div>
                                    <a  target="_blank" class="btn btn-danger btn-redirect-register text-uppercase">YES! TÔI MUỐN NHẬN TƯ VẤN
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img style="width: 100%" class="banner-img" src="/imgs/Q1_2.png" srcset="/imgs/Q1_2.png" alt="khóa học nền tảng Tiếng anh">
                         <a target="_blank" class="btn btn-danger text-uppercase mobile btn-submit btn-redirect-register">TÔI MUỐN ĐĂNG KÝ</a>
                    </div>
                </div>
            </div>
            <main>
                <div class="container-fluid main-index clearfix row">
                    <div class="main-block width-80 main-margin row" id="block-1">
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 img-founder">
                            <div class="thump-img">
<!--                                <button class="btn success play-video" data-video-id="qDe1GN1-ORw"></button>-->
                                <img src="/imgs/Q2.png" alt="Người sáng lập TATA English">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 thump-text-story main-thump-content main-thump">
                            <p class="mt-main-title title-color desktop">
                                <span>Có phải bạn đã và đang</span>
                            </p>
                            <p class="mt-main-title title-color mobile text-center" style="margin-top: 10px">
                                <span>Có phải bạn đã và đang</span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">
                                    1. Mất gốc, không nghe nói, không giao tiếp được bằng tiếng Anh. <br>
                                    2. Quá bận với việc học ngôn ngữ, không có thời gian đến trung tâm. <br>
                                    3. Đã từng học tiếng Anh nhưng không tiến bộ -> Sợ tiếng Anh. <br>
                                    4. Muốn học lại nhưng không biết phải bắt đầu từ đâu. <br>
                                    5. Ngại đi lại vì tắc đường, covid, nắng nóng, mưa dông. <br>
                                </span>
                            </p>
                            <div class="get-attention">
                                <a class="btn btn-danger text-uppercase btn-redirect-register">
                                    Tôi muốn đăng ký
                                </a>
                                <img src="/imgs/arrow.webp" alt="" class="img-arrow mobile">
                            </div>
                        </div>
                    </div>
                    <div class="main-block width-100 row" id="block-2">
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 img-founder mobile">
                            <div class="thump-img">
<!--                                <button class="btn success play-video" data-video-id="fuWsEXCVfF4"></button>-->
                                <img src="/imgs/NAM_9789.jpeg" alt="Người sáng lập TATA English">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 thump-text-story main-thump-content main-thump">
                            <p class="mt-main-title title-color desktop">
                                <span>BÍ KÍP TỪ "TAI ĐIẾC" VÀ "MẤT GỐC" ĐẾN 8.0 IELTS</span>
                            </p>
                            <p class="mt-main-title title-color mobile text-center" style="margin-top: 10px">
                                <span>BÍ KÍP TỪ "TAI ĐIẾC" VÀ "MẤT GỐC" ĐẾN 8.0 IELTS</span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">Cách đây 15 năm tôi bước chân vào cổng trường Đại học với biết bao ước mơ và hoài bão.</span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">Nhưng bất hạnh chợt đến khi tôi phát hiện mình không thể luyện nghe được tiếng Anh, và khi đi khám ở bệnh viện Bạch Mai
                                    thì bác sĩ bảo là tai bên phải của tôi đã bị điếc hẳn, còn tai bên trái của tôi cũng kém hơn người bình thường rất
                                    nhiều.
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">Suốt mấy ngày sau đó tôi sống tha thẩn, chẳng thiết ăn uống, cứ tự than thân trách phận, oán trách cuộc đời sao mà bất
                                    công.
                            </p>
                                <p class="thump-text text-justify" style="margin-top: 10px">
                                    <span class="normal-text">Nhưng cuộc sống vẫn cứ tiếp diễn, chuyện gì phải làm thì vẫn phải làm. Tôi vẫn phải cố gắng học tiếng Anh để có thể tự
                                        làm chủ tương lai của mình.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">
                                        Lúc đó chỉ có một tia sáng cuối cùng, một niềm tin duy nhất giúp tôi tiếp tục bám trụ không bỏ cuộc. Tôi đã nghĩ rằng:
                                        "Mình vẫn nghe được tiếng Việt cơ mà, chứng tỏ tai mình vẫn chưa hoàn toàn bị điếc. Nếu mình có cách nào đó để luyện
                                        phát âm tiếng Anh như phát âm tiếng Việt, thì mình vẫn còn hy vọng có thể nghe được tiếng Anh giống như mình đang nghe
                                        tiếng Việt bây giờ."
                                    </span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">
                                        Và tôi điên cuồng đi học khắp các trung tâm dạy phát âm hàng đầu ở Hà Nội. Nhưng có lẽ vì tai tôi bị điếc và cũng bị mất
                                        gốc nữa nên tất cả các trung tâm tôi theo học đều bó tay chấm com với tôi.</span> <a href="" class="btn-see-more">...(xem thêm)</a>
                                    </span>
                                </p>
                            <div class="tata_hidden text-expand">
                                <p class="thump-text text-justify">
                                    <span class="normal-text">
                                        Không bỏ cuộc, tôi tiếp tục mày mò để tìm ra những phương pháp luyện phát âm có thể giúp tôi vượt qua căn bệnh tai điếc
                                        và mất gốc của mình.
                                    </span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">
                                        Và trời không phụ lòng người, sau nhiều tháng gõ từng từ vào từ điển Oxford rồi bật file audio lên nghe, tôi đã khám phá
                                        ra một quy luật giúp mình có thể phát âm chuẩn giống hệt từ điển Oxford một cách cực kỳ đơn giản. Tôi đặt tên cho quy
                                        tắc này là S-H-N.
                                    </span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Chỉ 3 tháng sau khi phát hiện ra quy tắc S-H-N, tôi đã có thể luyện nghe được audio của các đề thi tiếng Anh một cách rõ
                                        mồn một như nghe tiếng Việt. Cảm giác một bầu trời rực sáng đang hiện ra trước mắt, tôi cảm thấy hạnh phúc như mình được
                                        sinh ra lần thứ hai vậy.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Sau khi có khả năng nghe tiếng Anh rõ như nghe tiếng Việt, tôi mất thêm 1 năm tiếp theo để đạt được hơn 100 điểm TOEFL
                                        (tương đương 8.0 IELTS) mặc dù xuất phát điểm của tôi là con số 0, thậm chí là con số âm. Và tôi đủ điều kiện đạt học
                                        bổng toàn phần trị giá 450.000 đô (hơn 10 tỉ vnđ) để đi làm tiến sĩ trong 5 năm tại trường Stanford - một trong 10
                                        trường đại học hàng đầu của Mỹ. Đây là bài mà báo dân trí đã viết về tôi: <a href="https://dantri.com.vn/nhip-song-tre/sinh-vien-nhung-phien-ban-moi-1235124259.html">Tại Đây</a>
                                    </span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Tiếng lành đồn xa, chỉ 1 tháng sau, có hơn 70 em là bạn bè của những em hàng xóm kéo đến nhờ tôi chia sẻ phương pháp của
                                        mình. Và 2 tháng sau thì có hơn 200 em kéo đến nhờ tôi dạy quy tắc S-H-N khiến cho tôi không còn thời gian mà thở nữa.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Mặc dù tôi rất hạnh phúc khi được giúp đỡ các em nhưng thời gian ở Việt Nam của tôi sắp hết. Tôi sắp phải lên đường đi
                                        du học mà các em vẫn cứ ùn ùn kéo đến xin được tôi dạy.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Lúc đó tôi đã rất trăn trở, trằn trọc, mất ngủ nhiều đêm suy nghĩ về việc mình nên làm gì bây giờ. Tôi tự hỏi không biết
                                        đi du học thì liệu tôi có được cái cảm giác hạnh phúc khi được giúp đỡ bao nhiêu người như bây giờ không?</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Việc nhận học bổng 450.000 đô (hơn 10 tỉ vnđ) có thể giúp tôi có một sự nghiệp, không phải lo lắng về cơm áo, gạo
                                        tiền,... Nhưng liệu nó có thể giúp tôi cảm nhận được ý nghĩa tuyệt vời của cuộc sống như khi nhìn thấy ánh mắt lấp lánh,
                                        háo hức của hàng trăm học viên của mình bây giờ không?</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Trong dòng suy nghĩ miên man, tôi bất chợt nhận ra sứ mệnh của cuộc đời mình. Tôi đã hiểu tại sao ông trời cố tình cho
                                        tai tôi bị điếc. Chắc hẳn là số phận đã sắp đặt điều đó để tôi có thể nghiên cứu ra quy tắc S-H-N, và lý do tôi được gửi
                                        đến với cuộc đời này là để giúp hàng triệu người Việt Nam thoát khỏi nỗi ám ảnh với tiếng Anh thông qua phương pháp mà
                                        tôi đã tự mình khám phá ra đó.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Ngay lập tức, tôi đã quyết định hủy bỏ học bổng và bắt đầu hành trình chia sẻ phương pháp học tiếng Anh của mình cho cả
                                        nước Việt Nam.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Mặc dù vấp phải sự phản đối của bố mẹ, họ hàng và tất cả mọi người xung quanh, nhưng tôi vẫn quyết tâm không bỏ cuộc.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Ai cũng bảo rằng tôi chỉ là một người hiền như cục đất, không phù hợp với kinh doanh, không biết gì về marketing thì làm
                                        sao mà thành công được.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Nhưng tôi tin rằng chỉ cần làm theo trái tim mình mách bảo và luôn mỉm cười giúp đỡ thật nhiều người thì những điều tốt
                                        đẹp sẽ đến.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Với niềm tin đó, công ty của tôi (Tata English) đã từng bước phát triển từ một phòng trọ 11m2 lên đến 9 cơ sở hoành
                                        tráng với hơn 2000 học viên đang theo học cùng một lúc.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Và trong thời gian tới, tôi sẽ không ngừng theo đuổi ước mơ của mình của mình, giúp cho Tata ngày càng lan xa hơn để
                                        giúp được cho 1 triệu người Việt Nam thoát khỏi nỗi ám ảnh với tiếng Anh.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">Một phút nhìn lại, để thấy ước mơ vẫn còn cháy mãi trong tim. <br>
                                        Lê Thanh Tùng - Founder & CEO của Tata English.</span>
                                </p>
                                <p class="thump-text text-justify">
                                    <span class="normal-text">HÃY THỬ ĐẾN VỚI PHƯƠNG PHÁP DO ANH TÙNG TỰ NGHĨ RA NÀY NHÉ!</span>
                                </p>
                            </div>
                            <div class="get-attention">
                                <a class="btn btn-danger text-uppercase btn-redirect-register">
                                    Tôi muốn đăng ký
                                </a>
                                <img src="/imgs/arrow.webp" alt="" class="img-arrow mobile">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 img-founder desktop">
                            <div class="thump-img">
<!--                                <button class="btn success play-video" data-video-id="fuWsEXCVfF4"></button>-->
                                <img src="/imgs/NAM_9789.jpeg" alt="Người sáng lập TATA English">
                            </div>
                        </div>
                    </div>
                    <div class="main-block width-80 main-margin row" id="block-3">
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 img-founder">
                            <div class="thump-img">
<!--                                <button class="btn success play-video" data-video-id="_A8yc2pfY1w"></button>-->
                                <img src="/imgs/Q3.png" alt="Người sáng lập TATA English">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 thump-text-story main-thump-content main-thump">
                            <p class="mt-main-title title-color desktop">
                                <span>TẠI SAO NÊN HỌC ONLINE 1-1 TẠI TATA ENGLISH</span>
                            </p>
                            <p class="mt-main-title title-color mobile text-center" style="margin-top: 10px">
                                <span> TẠI SAO NÊN HỌC ONLINE 1-1 TẠI TATA ENGLISH</span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="title-color"> >>> Mô hình 1 giáo viên kèm 1 học viên</span> <br>
                                <span class="normal-text">
                                    Với mô hình học 1 giáo viên kèm 1 học viên, và tận tâm sửa từng lỗi sai cho bạn tới khi hoàn hảo. Bạn sẽ phát âm và nói chuẩn như người bản ngữ ngay trong mỗi buổi học.
                                </span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="title-color"> >>> Phương pháp học mới mẻ, thú vị</span> <br>
                                <span class="normal-text">
                                    Tata có phương pháp học mới mẻ, thú vị và truyền động lực liên tục. Đảm bảo bạn sẽ chữa được tận gốc bệnh nhanh nản và học tiếng Anh một cách kiên trì và vui vẻ mỗi ngày mà không biết chán.
                                </span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="title-color"> >>>Áp dụng trí tuệ nhân tạo</span> <br>
                                <span class="normal-text">
                                    Với hệ thống trang web tự học thông minh bạn có thể tăng vốn từ vựng một cách thần tốc và áp dụng ngữ pháp một cách tự nhiên trong nghe, nói, đọc, viết.
                                </span>
                            </p>
                            <div class="get-attention">
                                <a class="btn btn-danger text-uppercase btn-redirect-register">
                                    Tôi muốn đăng ký
                                </a>
                                <img src="/imgs/arrow.webp" alt="" class="img-arrow mobile">
                            </div>
                        </div>
                    </div>
                    <div class="mobile hr"></div>
                    <div class="main-block width-100 row block-fee">
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 img-founder mobile">
                            <div class="thump-img">
                                <!--                                <button class="btn success play-video" data-video-id="fuWsEXCVfF4"></button>-->
                                <img src="/imgs/tien_bo.webp" alt="Người sáng lập TATA English">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 thump-text-story main-thump-content main-thump">
                            <p class="mt-main-title title-color desktop">
                                <span> Lộ trình học giao tiếp</span>
                            </p>
                            <p class="mt-main-title title-color mobile text-center" style="margin-top: 10px">
                                <span> Lộ trình học giao tiếp</span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">Thời lượng: 44 buổi, 45 phút/buổi, 3-5 buổi/ tuần, thời gian linh hoạt</span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">Giai đoạn 1: “Chuẩn Hóa Phát  m” giúp học viên có thể tự mình nói chuẩn bất kỳ một từ tiếng Anh nào giống hệt từ điển Oxford.</span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">
                                    Giai đoạn 2 “Nghe Sâu Cảm Nhận” giúp học viên có khả năng nghe rõ từng âm của bất kỳ một file nghe tiếng Anh nào, đồng thời có thể nói lại được câu đó giống hệt như trong Audio
                                </span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">Giai đoạn 3 “Ngữ Pháp Phản Xạ” giúp học viên nói thành phản xạ mà không cần suy nghĩ với các cấu trúc ngữ pháp trong giao tiếp.</span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">Giai đoạn 4 “Toàn Diện 4 Kỹ Năng” học viên được thực hành kỹ năng nghe 1 lần hiểu, tự tin thuyết trình về văn hóa, ẩm thực, địa điểm du lịch ở Việt Nam.</span>
                            </p>
                            <div class="get-attention">
                                <a class="btn btn-danger text-uppercase btn-redirect-register">
                                    Tôi muốn đăng ký
                                </a>
                                <img src="/imgs/arrow.webp" alt="" class="img-arrow mobile">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 img-founder desktop">
                            <div class="thump-img">
                                <!--                                <button class="btn success play-video" data-video-id="fuWsEXCVfF4"></button>-->
                                <img src="/imgs/tien_bo.webp" alt="Người sáng lập TATA English">
                            </div>
                        </div>
                    </div>
                    <div class="main-block width-80 main-margin row" id="block-3" style="padding: 0">
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 thump-text-story main-thump-content main-thump" style="margin-bottom: 0; padding: 40px">
                            <p class="mt-main-title title-color desktop">
                                <span>Đăng ký nhận ngay bộ quà tặng trị giá 7.375.000đ</span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">
                                    1 buổi test trình độ + tư vấn lộ trình miễn phí trị giá 495.000đ
                                </span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">
                                    01 Phần mềm luyện 1000 từ vựng theo 41 chủ đề thông dụng trong cuộc sống kết hợp phương pháp học kết hợp âm thanh - hình ảnh - ngữ cảnh liên tưởng. Với tần suất lặp lại trên 20 lần giúp bạn học 1 lần và nhớ vĩnh viễn - Giá: 1.000.000đ
                                </span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">
                                    01 Phần mềm luyện nghe thính giúp bạn tăng khả năng nghe của mình một cách thần tốc - Giá: 1.990.000đ
                                </span>
                            </p>
                            <p class="thump-text text-justify">
                                <span class="normal-text">
                                    Khóa học online chuẩn hóa cách đọc của tất cả 44 âm trong tiếng Anh do anh Lê Thanh Tùng - Founder của Tata English dạy. Bằng phương pháp cực kỳ đơn giản do anh Tùng tự nghĩ ra thì các bạn sẽ có thể chinh phục tất cả các âm trong tiếng Anh một cách dễ dàng như ăn kẹo - Giá: 3.890.000đ
                                </span>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 thump-text-story main-thump-content main-thump"
                             style="background-color: #293377; margin-bottom: 0; text-align: center; padding-top: 40px; min-height: 300px;">
                            <form id="form-registation" style="width: 50%; margin-right: auto; margin-left: auto; min-width: 320px">
                                <div class="form-group">
                                    <label for="form_fullName" style="color: #ffffff;width: 100%; text-align: left">Họ và tên của bạn</label>
                                    <input type="text" name="fullName" placeholder="Họ và tên của bạn" class="form-control" id="rg-name">
                                </div>
                                <div class="form-group">
                                    <label for="form_phone" style="color: #ffffff; width: 100%; text-align: left">Số điện thoại của bạn</label>
                                    <input type="text" name="phone" placeholder="Số điện thoại của bạn" class="form-control" id="rg-phone">
                                </div>
                            </form>
                            <a class="btn btn-danger text-uppercase" id="btn-registration-final">
                                Đăng ký
                            </a>
                        </div>
                    </div>
                    <div class="main-block block-address width-100 text-center">
                        <div class="fb-iframe-container">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftata.edu.vn%2F&tabs=timeline&width=500&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1894978783866710" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                        <div class="main-thump-title text-center">
                            <h1>
                                <span class="mt-main-title text-uppercase title-color">
                                    Hệ thống các cơ sở của <i class="mobile"><br></i> tata english
                                </span>
                            </h1>
                        </div>
                        <div class="address-line row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-left">
                                <address>
                                    <span class="center-name text-uppercase">TATA ENGLISH BẮC TỪ LIÊM</span>
                                    <span class="center-map">số 9, ngách 1/9 Văn Hội, Đức Thắng, Bắc Từ Liêm, Hà Nội
                                        <br> (Cách HV Tài Chính 500m -
                                        <a target="_blank" href="https://goo.gl/maps/XqoY1NpCMH32">xem bản đồ </a>)
                                    </span>
                                    <span class="center-hotline">Hotline:
                                        <a href="tel:0968801791">0968 801 791</a>
                                    </span>
                                </address>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-right">
                                <address>
                                    <span class="center-name text-uppercase">TATA ENGLISH CHÙA LÁNG</span>
                                    <span class="center-map"> Số 135, Đường Chùa Láng, Phường Láng Thượng, Đống Đa, Hà Nội
                                        <br> (Cách cổng ĐH Ngoại Thương 100m - <a target="_blank" href="https://goo.gl/maps/2o1dNF7BDRYVJodN6">Xem bản đồ</a>)
                                    </span>
                                    <span class="center-hotline">Hotline:
                                        <a href="tel:0966991689"> 0966 991 689 </a>
                                    </span>
                                </address>
                            </div>
                        </div>
                        <div class="address-line row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-left">
                                <address>
                                    <span class="center-name text-uppercase">TATA ENGLISH CẦU GIẤY</span>
                                    <span class="center-map"> Tầng 3, 109 Phan Văn Trường, Cầu Giấy, Hà Nội
                                        <br><a target="_blank" href="https://g.page/TataEnglish?share">xem
                                            bản đồ</a>
                                    </span>
                                    <span class="center-hotline">Hotline:
                                        <a href="tel:0985896486"> 098 589 64 86 </a>
                                    </span>
                                </address>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-right">
                                <address>
                                    <span class="center-name text-uppercase">TATA ENGLISH Bách Khoa</span>
                                    <span class="center-map">Số 76, Đường Lê Thanh Nghị, Hai Bà
                                        Trưng, Hà Nội
                                        <br>(Gần ngã tư Tạ Quang Bửu Lê Thanh Nghị -
                                        <a target="_blank" href="https://goo.gl/maps/S4n2cAZiq5L4UNLq9">xem bản đồ</a>)
                                    </span>
                                    <span class="center-hotline">Hotline:
                                        <a href="tel:+84915784096"> 0915 784 096 </a>
                                    </span>
                                </address>
                            </div>
                        </div>
                        <div class="address-line row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-left">
                                <address>
                                    <span class="center-name text-uppercase">TATA ENGLISH Thương mại</span>
                                    <span class="center-map">Tầng 5, 15 Dương Khuê, Mai Dịch, Cầu Giấy <br> (Cách đại học Thương Mại 100m - <a href="https://goo.gl/maps/AcrAKAfyk4BMbXrs5" target="_blank">xem bản đồ</a>)
                                    </span>
                                    <span class="center-hotline">Hotline:
                                        <a href="tel:0972867528">0972 867 528</a>
                                    </span>
                                </address>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-right">
                                <address>
                                    <span class="center-name text-uppercase">TATA ENGLISH TIMES city</span>
                                    <span class="center-map">81 Dương Văn Bé, Q. Hai Bà Trưng, Hà Nội <br>
                                        (Cách ĐH Kinh doanh công nghệ 500m - <a href="https://goo.gl/maps/iJGU3EPWquAkexE87">xem bản đồ</a>)
                                    </span>
                                    <span class="center-hotline">Hotline:
                                        <a href="tel:0977392294"> 0977 392 294 </a>
                                    </span>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <button class="button mobile tata_hidden" id="btn-go-top">
                    <span class="fa fa-arrow-up"></span>
                </button>
                <div class="container-fluid clearfix">
                    <div class="copy-writer-area text-center">
                        <div>© Copyright 2011 - <span class="copyright-now"></span>
                            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Tata English&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;All
                            Rights Reserved&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Powered
                            by Công ty cổ phần công nghệ giáo dục Tata
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="div-dialog">
            <div id="modal-show-video" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="pointer-events: initial">
                    <div class="modal-body">
                        <iframe class="iframe-video" frameborder="0" allowfullscreen="" src=""></iframe>
                    </div>
                </div>
            </div>
            <div id="modal-success-registration" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="pointer-events: initial">
                    <div class="modal-header">
                        <h5 class="modal-title">Đăng Ký Thành Công</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="thanks-regis"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        var isMobile = !1;
        (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) && (isMobile = !0), $("document").ready(function() {
            function i(i) {
                var t = $(".img-container").find(".active"),
                    e = parseInt(t.attr("data-img-id")) + i;
                $(".button-view-img").find(".disable").removeClass("disable"), $("#img-feedback-" + e).length > 0 ? (t.removeClass("active").addClass("tata_hidden"), $("#img-feedback-" + e).removeClass("tata_hidden").addClass("active")) : 1 === i ? $(".button-view-img").find(".btn-next").addClass("disable") : $(".button-view-img").find(".btn-previous").addClass("disable")
            }

            function t(i, t) {
                var e, o = $(i).closest(".modal").find(".active");
                (e = 1 === t ? o.next(".page-group-item") : o.prev(".page-group-item")).length > 0 ? ($(o).removeClass("active"), $(e).addClass("active")) : $(i).addClass("disable")
            }

            function e(i) {
                var t = $(i).attr("data-video-id"),
                    e = t;
                null === t.match(/https/g) && (o.id = $(i).attr("data-video-id"), e = o.getlink());
                var a = $("#modal-show-video");
                e && (a.find(".iframe-video").attr("src", e), a.modal({
                    keyboard: !0
                }))
            }

            var o = {
                id: "",
                baseLink: "https://www.youtube.com/embed/",
                option: "?autoplay=1&showinfo=0&modestbranding=0&loop=1&rel=0",
                getlink: function() {
                    return void 0 !== this.id && this.baseLink + this.id + this.option
                }
            };
            $("#btn-registration-final").click(function() {
                let adId = "<?= $trackKey ?>";
                let fullName = $("#rg-name").val();
                let phone = $('#rg-phone').val();
                if (fullName == '') {
                    $("#rg-name").after('<span style="color:red">bạn vui lòng nhập Họ và Tên</span>');
                    return;
                }
                if (!/^0[0-9]{9}/g.test(phone)) {
                    $("#rg-phone").after('<span style="color:red">bạn vui lòng nhập đúng số điện thoại</span>');
                    return;
                }
                let job = $('#rg-job').val();
                let place = $('#rg-place').val();
                let tab = "<?= $tab ?>";
                let data = {
                    'ad_id': adId,
                    'full_name': fullName,
                    'phone': phone,
                    'job': job,
                    'target': place,
                    'tab': tab
                };
                $("#form-registation")[0].reset();
                $('.thanks-regis').text('Cảm ơn ' + fullName + '. Bạn đã đăng ký thành công. Tata sẽ liên hệ sớm nhất cho bạn.');
                $('#modal-success-registration').modal('show');
                $.ajax({
                    type: "POST",
                    url: '/registration/index.php',
                    data: data,
                    success: function() {},
                    dataType: 'json'
                });
            });
            // $("#modal-registation").modal('show');
            $(".btn-redirect-register").click(function() {
                $('html, body').animate({
                    scrollTop: $('#btn-registration-final').offset().top - 300
                }, 300);
                $('#rg-name').focus();
            });
            $(".main-index").on("click", ".play-video", function(i) {
                e(this), i.stopPropagation()
            }), $(".btn-watch-video").click(function(i) {
                e(this), i.stopPropagation()
            }), $(".link-play-video").click(function(i) {
                e(this), i.stopPropagation()
            }), $(".modal-header").on("click", ".close", function() {
                var i = $(this).closest(".modal").attr("id");
                $("#" + i).modal("hide")
            }), $(".main-site").on("click", ".play-video", function() {
                o.id = $(this).attr("data-video-id");
                var i = o.getlink();
                if (i) {
                    $(this).closest(".thump-img").addClass("tata_hidden"), $(".video-hidden").removeClass("tata_hidden");
                    var t = 9 * $(".video-hidden").width() / 16;
                    $(".video-hidden").find(".iframe-video").attr("src", i).height(t)
                }
            }), $("#modal-show-video").on("hidden.bs.modal", function(i) {
                $("#modal-show-video .iframe-video").attr("src", "")
            }), $(".thump-video").each(function() {
                $(this).find(".thump-iframe").css("height", $(this).width() * (9 / 16))
            }), $(window).scroll(function() {
                if (isMobile) {
                    var i = $(this).scrollTop();
                    i > 100 && $("#btn-go-top").removeClass("tata_hidden"), i > 400 ? $("#btn-register-bottom").removeClass("tata_hidden") : ($("#btn-register-bottom").addClass("tata_hidden"), $("#btn-go-top").addClass("tata_hidden")), $(window).scrollTop() > $(".block-address").offset().top - 300 && !$("#menu-navigation").hasClass("show") ? $("#menu-navigation").collapse("show") : $(window).scrollTop() < $(".block-address").offset().top - 300 && $("#menu-navigation").hasClass("show") && $("#menu-navigation").collapse("hide")
                }
            }), $("#btn-show-menu").click(function() {
                window.location.href = "https://ihomework.vn/"
            }), $(".read-more-modal").click(function() {
                var i = $(this).attr("data-feedback-id");
                $("#feedback-content-" + i).removeClass("tata_hidden"), $("#modal-show-feedback").modal()
            }), $("#modal-show-feedback").on("hidden.bs.modal", function(i) {
                $("#modal-show-feedback .feedback-content-container").addClass("tata_hidden")
            }), $(".btn-see-more").click(function(i) {
                return $(this).closest(".main-thump-content").find(".tata_hidden").removeClass("tata_hidden"), $(this).closest(".main-thump-content").find(".dot").remove(), $(this).closest(".text-justify").find(".margin-0").removeClass("margin-0"), $(this).remove(), !1
            }), $("#btn-go-top").click(function(i) {
                $("html,body").animate({
                    scrollTop: $(".banner").offset().top - 40
                }, 500), i.stopPropagation()
            }), $(".button-view-img").on("click", ".btn-next", function() {
                i(1)
            }), $(".button-view-img").on("click", ".btn-previous", function() {
                i(-1)
            }), $(".page-group-next").click(function() {
                t(this, 1)
            }), $(".page-group-previous").click(function() {
                t(this, 0)
            }), $(".btn-expand-text").click(function(i) {
                $(this).closest(".main-block").find(".expand-text").removeClass("tata_hidden"), $(this).remove(), i.stopPropagation()
            }), $(".show-main-content").click(function() {
                return $(this).closest(".main-block").find(".main-thump-hidden").removeClass("main-thump-hidden"), $(this).closest(".main-block").find(".show-main-thump-container").remove(), !1
            }), $("#site-nentang").click(function(i) {
                var t = i.target;
                0 == $(t).find(" > .block-title-small").length && 0 == $(t).closest(".show-more-description").length && $(".show-more-description").addClass("tata_hidden").removeClass("show-more-description")
            }), $("header").find(".active").addClass("menu-active")
        });
    </script>
</body>

</html>