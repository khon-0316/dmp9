<!DOCTYPE html>

<html lang="ko" class="default-style">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Main font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/appwork.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-corporate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contents.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sign.css') }}">
    <link rel="stylesheet" href="{{ asset('css/data_up_load.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script>
        //인터넷 버전 체크 ie 에서는 호환안됨
        // Internet Explorer 6-11
        var isIE = /*@cc_on!@*/false || !!document.documentMode;

        if(isIE) {
            if (confirm("인터넷 익스플로러에서는 정상 작동이 안될 수 있으므로 크롬 브라우저 사용을 권장합니다. 크롬 브라우저를 다운로드 하시겠습니까?")) {
                location.href = 'https://www.google.co.kr/chrome/index.html'
            }
        }
    </script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-1">
    <!-- Layout inner -->
    <div class="layout-inner">

        <!-- Layout navbar -->
        <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-navbar-theme container-p-x" id="layout-navbar">

            <!-- Sidenav toggle -->
            <div class="layout-sidenav-toggle navbar-nav align-items-lg-center mr-auto mr-lg-4">
                <a class="nav-item nav-link px-0 ml-2" href="javascript:void(0)">
                    <i class="text-large align-middle">menu</i>
                </a>
            </div>
        </nav>
        <!-- / Layout navbar -->

        <div class="layout-container">

            <!-- Layout sidenav -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-sidenav-theme">
                <div class="sidenav_logo_wrap mb-4">
                    <img src="/img/logo_01.png" alt="로고 이미지" />
                </div>

                <ul class="sidenav-inner py-1 mt-4">
                    <li class="sidenav-item active">
                        <a href="/carts" class="sidenav-link">
                            <div class="icon">
                                <img src="/img/icon_sidenav_01.png" alt="마이 데이터 아이콘" />
                            </div>
                            <div>마이 데이터</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="/faqs" class="sidenav-link">
                            <div class="icon">
                                <img src="/img/icon_sidenav_02.png" alt="자주 묻는 질문 아이콘" />
                            </div>
                            <div>자주 묻는 질문</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="/questions" class="sidenav-link">
                            <div class="icon">
                                <img src="/img/icon_sidenav_03.png" alt="문의 및 답변 아이콘" />
                            </div>
                            <div>문의 및 답변</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="users" class="sidenav-link">
                            <div class="icon">
                                <img src="/img/icon_sidenav_05.png" alt="내정보 수정 아이콘" />
                            </div>
                            <div>내정보 수정</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="/history" class="sidenav-link">
                            <div class="icon">
                                <img src="/img/icon_sidenav_06.png" alt="충전 내역 아이콘" />
                            </div>
                            <div>결제 내역</div>
                        </a>
                    </li>
                </ul>
                <ul class="sidenav_bottom form-inline">
                    <li>이용약관</li>
                    <li>개인정보처리방침</li>
                </ul>
            </div>
            <!-- / Layout sidenav -->

            <div class="layout-content " id="mydata_main">
                <div class="content_top form-inline">
                    <div class="welcome_text">
                        <h1>안녕하세요. <span>NSMG</span>님! 환영합니다.</h1>
                    </div>
                    <div class="login_btn_box dropdown" data-toggle="dropdown">
                        <button type="button" class="dropdown-toggle">
                            <img src="/img/btn_login_info.png" alt="로그인 정보 아이콘"/>
                        </button>
                        <div class="dropdown-menu">
                            <div><p>M</p></div>
                            <div>정민우</div>
                            <div>urr0801@nsmg21.com</div>
                            <div>동기화 사용중</div>
                            <div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    로그아웃
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')

                <!--하단 공지사항-->
                <div class="footer_infobar">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><p>[TIP] 고정 데이터는 원하는 날부터 원하는날까지 고정된데이터 입니다.</p></div>
                            <div class="swiper-slide"><p>[TIP] test 02</p></div>
                            <div class="swiper-slide"><p>[TIP] test 03</p></div>
                            <div class="swiper-slide"><p>[TIP] test 04</p></div>
                            <div class="swiper-slide"><p>[TIP] test 05</p></div>
                            <div class="swiper-slide"><p>[TIP] test 06</p></div>
                            <div class="swiper-slide"><p>[TIP] test 07</p></div>
                            <div class="swiper-slide"><p>[TIP] test 08</p></div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Layout inner -->

    <div class="layout-overlay layout-sidenav-toggle"></div>
</div>
<!-- / Layout wrapper -->
<script src="{{ asset('js/layout-helpers.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/sidenav.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/function.js') }}"></script>
<script src="{{ asset('js/sign_up.js') }}"></script>
<script>
    /*질문하기,문의하기 ul 클릭 토글*/
    $(".toggle_tr").on('click', function(){
        $(this).parent().next('tr').toggle();
    });

    $(".explanation_td").hover(function(){
        $(this).children(".explanation_box").toggle();
    });

    /* 모두체크 */
    $('#all_checkbox').on("change", function(){
        var checked = $(this).prop('checked'); // checked 문자열 참조(true, false)
        $('input[name="check"]').prop('checked', checked);
    });

    $('input[name="check"]').change(function () {
        var boxLength = $('input[name="check"]').length;
        // 체크된 체크박스 갯수를 확인하기 위해 :checked 필터를 사용하여 체크박스만 선택한 후 length 프로퍼티를 확인
        var checkedLength = $('input[name="check"]:checked').length;
        var selectAll = (boxLength == checkedLength);

        $('#all_checkbox').prop('checked', selectAll);
    });

    /*데이터 요청 글쓰기 클릭 모달*/
    function addRequestData() {
        $("#request_data").show();
    }
    function addRequestDataDisNone() {
        $("#request_data").hide();
    }
    /*데이터 등록 글쓰기 클릭 모달*/
    function addData() {
        $("#add_data").show();
    }
    function addDataDisNone() {
        $("#add_data").hide();
    }
</script>
@stack('scripts')
</body>

</html>
