@extends('layouts.sign')

@section('content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-1">
        <!-- Layout inner -->
        <div class="layout-inner">

            <!--content-->
            <!-- 로그인 -->
            <div class="layout-container login">
                <div class="logo">
                    <h1>
                        <a href="/"><img src="../assets/img/sign_up/logo_dmp_02.png" alt="DMP9 logo" /></a>
                    </h1>
                </div>
                <div class="inner">
                    <div class="form_box">
                        <div class="input_box">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <p class="desc">
                                    Deep Targeting<br/>
                                    Platform DMP9
                                </p>
                                <div class="input-group">
                                    <label>아이디</label>
                                    <input id="user_id" type="user_id" type="text" class="form-control" name="user_id" value="" placeholder="아이디를 입력해주세요" />
                                </div>
                                <div class="input-group">
                                    <label>비밀번호</label>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="비밀번호를 입력해주세요" />
                                </div>
                                <!--
                                <div>
                                    <span class="checkbox">
                                      <input type="checkbox" name="check" id="login_memory" />
                                      <label for="login_memory"> 로그인 상태유지</label>
                                    </span>
                                </div>
                                -->
                                <div class="but_box mt-4">
                                    <button type="submit" >로그인</button>
                                    <div class="sign_box">
                                        <div><a href="/sign_up_type">회원가입</a></div>
                                        <div><a href="/sign_up_find_id">아이디</a> / <a href="/sign_up_find_pw">비밀번호 찾기</a></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="txt_bottom">Copyright © DMP9. All rights reserved.</p>
                </div>
            </div>
            <!--content-->


        </div>
        <!-- Layout inner -->

        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
@endsection
