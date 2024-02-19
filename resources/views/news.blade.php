<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>亞皇實業有限公司| 專營切斷砂輪、研磨、拋光產品解決方案</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/style_o.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
</head>

<body>

    <!-- =================Header-Navbar=============== -->

    <div class="navbar navbar-expand-sm navbar-light bg-light  fixed-top">
        <div class="col-lg-7 d-flex justify-content-end">
            <a href="https://shengplus.com.tw/"><img src="{{ asset('img/logo.png') }}" class=" brand-logo" alt=""
                    style="width: 287px;"></a>
        </div>
        <div class="col-lg-5 d-flex justify-content-end">
            <div class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img class="naitem-img" src="{{ asset('img/global.png') }}" style="width: 40px;">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">Spanish</a>
                    <a class="dropdown-item" href="#">Taiwan</a>
                </div>
            </div>
            <a class="navbar-brand" href="#"> <img src="{{ asset('img/bucket.png') }}" alt="bucket"
                    style="width:40px;"></a>
            <a class="navbar-brand" href="#" id="show_menu"><img src="{{ asset('img/dropdown_menu.png') }}"
                    alt="dropdown_menu" style="width:40px;"></a>
        </div>
    </div>
    <!-- =================Header-Navbar=============== -->

    <!-- =============Hambuger Menu start============ -->
    <div class="hambuger-menu col-lg-8" id="menu">
        <div class="hambuger-item1 d-flex align-items-center">
            <div class="col-lg-11 d-flex justify-content-center">
                <img src="{{ asset('img/logo.png')}}" style="width: 287px;">
            </div>
            <div class="col-lg-1 d-flex justify-content-end" id="hambuger"><i style="font-size: 42px;"
                    class="fa fa-times" aria-hidden="true"></i></div>
        </div>
        <table class="table mt-3">
            <tr>
                <th rowspan="4"><a href="#">產品介紹</a></th>
                <th><a href="/product/1">研磨切斷片</a></th> <!-- Grinding cut pieces -->
                <td>
                    <a href="#">金屬研磨系列</a>
                    <a href="#">金屬切斷系列</a>
                    <a href="#"> 除漆除鏽系列</a>
                    <a href="#"> 鏡面拋光系列</a>
                </td>
            </tr>
            <tr>
                <th><a href="/product/2">雷射焊接機</a></th> <!-- Laser welding machine -->
                <td>
                    <a href="#">手持雷射焊接機</a>
                    <a href="#">迷你手持焊接機</a>
                </td>
            </tr>
            <tr>
                <th><a href="/product/3">手持打包機</a></th> <!-- Handheld baler -->
                <td>
                    <a href="#">HS標準型</a>
                    <a href="#">HP進階型</a>
                    <a href="#">HT專業型</a>
                </td>
            </tr>
            <tr>
                <th><a href="/product/4">特殊貴金屬</a></th> <!-- special precious metals -->
                <td><a href="#">銥線 鉑線</a></td>
            </tr>
            <tr>
                <th><a href="/news">最新消息</a></th> <!-- latest news -->
                <th colspan="2">
                    <a href="#">產品新知</a>
                    <a href="">企業資訊</a>
                    <a href="">會議展覽</a>
                </th>
            </tr>
            <tr>
                <th><a href="/contactUs">聯絡我們</a></th> <!--contact us-->
                <th colspan="2"><a href="#">詢價紀錄</a></th>
            </tr>
        </table>
        <div class="col-lg-12 line-image-cover">
            <img src="{{ asset('img/line_message.png') }}" alt="">
        </div>
    </div>
    <!-- =============Hambuger Menu end============ -->


    <!-- =============News-header-filter============ -->
    <div class="container news-header-filter">
        <div class="col-lg-9 news-search-filter">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Your Email" id="mail" name="email">
                <div class="input-group-append">
                    <button>dd</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 news-search-checkbox">
            <div class="news-search-checkbox-item">
                <input type="checkbox" name="" id=""><label for="">企業資訊</label>
                <input type="checkbox" name="" id=""><label for="">產品新知</label>
            </div>
            <div class="news-search-checkbox-item">
                <input type="checkbox" name="" id=""><label for="">技術分享</label>
                <input type="checkbox" name="" id=""><label for="">會議展覽</label>
            </div>
        </div>
    </div>

    <!-- =============News-header-filter============ -->
    <!-- =============News-body============ -->
    <!-- <div class="container row news-body" style="margin:0px auto;">
        @foreach( $newss as $news )
        <div class="col-lg-4 news-item " style="padding: 0px;">
            <a href="#" target="_self">
                <div class="text-holder" style="padding: 10% 10% 0% 10%; width: 100%;">
                    <span class="date">{{$news->published_at}}</span>
                    <span class="tag">Product news</span>
                    <h5 class="title">{{$news->title}}</h5>
                    <p>{{$news->content}}</p>
                </div>
                <div class="img-holder" style="width: 100%;">
                    <img style="max-width: 100%;" src="{{ asset('img/' . $news -> slug ) }}" alt="">
                </div>
            </a>
        </div>
        @endforeach
    </div> -->
    <!-- =============News-body============ -->
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'tab1')" id="defaultOpen">所有</button>
        <button class="tablinks" onclick="openTab(event, 'tab2')">研磨切斷方案</button>
        <button class="tablinks" onclick="openTab(event, 'tab3')">雷射焊接機</button>
        <button class="tablinks" onclick="openTab(event, 'tab4')">手持打包機</button>
        <button class="tablinks" onclick="openTab(event, 'tab5')">特殊貴金屬</button>
    </div>

    <div id="tab1" class="tabcontent">

    </div>

    <div id="tab2" class="tabcontent">

    </div>

    <div id="tab3" class="tabcontent">

    </div>

    <div id="tab4" class="tabcontent">

    </div>

    <div id="tab5" class="tabcontent">

    </div>

    <!-- =============footer start============ -->

    <footer class="footer-area footer-area-v2 white-bg mt-5">
        <div class="container-fluid">
            <div class="footer_widget pt-20 pb-20">
                <div class="row d-flex align align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="widget contact-widget">
                            <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="" style="max-width:320px">
                            <ul class="contact-info mt-3" style=" list-style-type: none;">
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="false"></i>
                                    <p>台灣高雄市苓雅區四維一路164號</p>
                                </li>
                            </ul>

                            <div class="copyright-text mt-3 text-left">
                                <p>© Copyright 2020 亞皇實業有限公司. All rights reserved.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row justify-content-between">

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="">
                                    <div class="maps">
                                        <img src="{{ asset('img/map.png') }}" class="img-fluid">
                                        <ul class="social-link ">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="qrcode"
                                    style=" display: flex;align-items: center;  justify-content: flex-start;height: 100%;">
                                    <img src="{{ asset('img/download.png') }}" class="img-fluid"
                                        style="width: 50% !important;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =============footer end============ -->
    <script>
        $(document).ready(function () {

            $("#show_menu").click(function () {
                console.log("========fadeIn=======>>");
                $("#menu").fadeIn();
            });
            $("#hambuger").click(function () {
                console.log("=======fadeOut========>>");
                $("#menu").fadeOut();
            });
        });

        function openTab(evt, tabID) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabID).style.display = "block";
            evt.currentTarget.className += " active";

            //ajax for receive news data

            // const data = tabID;
            $.ajax({
                url: '/news', // Update this with your actual API endpoint
                method: 'POST',
                data: { tab: tabID },
                success: function(response) {
                    // Update the tab content area with the fetched content
                    // $('#' + tabID).html(response);
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching tab content:', error);
                }
            });
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>

</html>