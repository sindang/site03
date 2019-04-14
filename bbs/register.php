<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="naver-site-verification" content="1e24e6ce687adc9cef907046c025298b5c7d1892"/>
<title>회원가입약관 | CARE-GRAYBLUE</title>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
<link rel="stylesheet" href="../skin/social/style.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="../css/1200.css" media="all and (min-width:961px) and (max-width:1300px)">
<link rel="stylesheet" href="../css/250.css" media="all and  (max-width:960px)">
<link rel="stylesheet" href="../js/font-awesome/css/font-awesome.min.css">

<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "http://sample01.openfield.co.kr";
var g5_bbs_url   = "http://sample01.openfield.co.kr/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="http://sample01.openfield.co.kr/theme/care_grayblue/js/jquery-1.11.2.min.js"></script>
<script src="http://sample01.openfield.co.kr/theme/care_grayblue/js/jquery.easing.1.3.js"></script>
<script src="http://sample01.openfield.co.kr/js/common.js?ver=171222"></script>
<script src="http://sample01.openfield.co.kr/js/wrest.js?ver=171222"></script>
<script src="http://sample01.openfield.co.kr/js/placeholders.min.js"></script>
<script src="http://sample01.openfield.co.kr/theme/care_grayblue/js/front_ui.js"></script>



</head>
<body>
<a href="#container" accesskey="1" class="skip_area">메뉴건너뛰고 본문 바로가기</a>

<header id="header">
	<div class="head_in">
        <h1><a href="http://sample01.openfield.co.kr"><img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/logo.png" alt="CARE-GRAYBLUE"></a></h1>
        <div class="nav">
            <ul id="nav">
                     <li class=''><a href="../bbs/sub01.html" target="_self"><span>조리원소개</span></a>
             <ul>
                        <li><a href="../bbs/sub01.html" target="_self"><span></span>인사말</a></li>
                                            <li><a href="../bbs/sub02.html" target="_self"><span></span>조리원소개</a></li>
                                            <li><a href="../bbs/sub03.html" target="_self"><span></span>오시는 길</a></li>
                    </ul>
            </li>
                         <li class=''><a href="../bbs/sub04.html" target="_self"><span>시설보기</span></a>
                         </li>
                         <li class=''><a href="../bbs/sub05.html" target="_self"><span>프로그램</span></a>
                         </li>
                         <li class=''><a href="../bbs/sub06.html" target="_self"><span>이용안내</span></a>
                         </li>
                         <li class=''><a href="../bbs/sub07.html" target="_self"><span>커뮤니티</span></a>
             <ul>
                        <li><a href="../bbs/sub07.html" target="_self"><span></span>공지사항</a></li>
                                            <li><a href="../bbs/sub08.html" target="_self"><span></span>1:1문의</a></li>
                                            <li><a href="../bbs/sub09.html" target="_self"><span></span>자주하는 질문</a></li>
                                            <li><a href="../bbs/sub10.html" target="_self"><span></span>자유게시판</a></li>
                    </ul>
            </li>

            </ul>
        </div>
               <script>
$(function(){

  $("input").each(function(){
    $(this).bind("focus", function(){
        $(".popup ").css("position", "absolute");

    });
    $(this).bind("blur",function(){

        $(".popup").css("position", "fixed");

    });
  });
});
</script>
 <div class="login login_pc"><a href="#pop01" class="btn_pop">로그인</a></div>
<!--모바일인경우--> <div class="login login_mobile"><a href="/bbs/login.php" >로그인</a></div>
<!-- popup -->
<div class="black_bg">
<section class="popup" id="pop01">
    <!-- pop_area -->
      <article class="pop_part">
    <div class="pop_cl"><span><img src="../img/main/pop_cl.png" alt="닫기"></span></div>
    <div class="pop_area">
    <form name="foutlogin" action="" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
    	<input type="hidden" name="url" value="%2Fbbs%2Fregister.php">
        <div class="pop_cont">
        	<div class="pop_in">
				<p class="pop_tt">로그인</p>
                <ul class="login_part">
                    <li><input type="text" id="ol_id" name="mb_id" required class="id_input"  placeholder="아이디"> </li>
                    <li><input name="mb_password"   type="password" required class="pw_input" placeholder="패스워드"></li>
                </ul>
                <div class="auto">
                	<label> <input type="checkbox" name="auto_login" value="1" id="auto_login">자동로그인</label><a href="../bbs/password_lost.php" id="ol_password_lost">아이디 비밀번호 찾기</a>
                </div>
                <div class="login_btn_area">
                	<div class="pop_btn_area"><input type="submit" class="pop_btn" value="로그인"></div>

                    <p>

                <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=naver&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-naver" title="네이버">
            <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site01.png" alt="네이버">
        </a>
                        <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=kakao&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-kakao" title="카카오">
          <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site04.png" alt="카카오톡">
        </a>
                        <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=facebook&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-facebook" title="페이스북">
          <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site02.png" alt="페이스북">
        </a>
                        <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=google&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-google" title="구글">
           <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site03.png" alt="구글">
        </a>
                        <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=twitter&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-twitter" title="트위터">
           <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site05.png" alt="트위터">
        </a>


                <script>
            jQuery(function($){
                $(".login_btn_area").on("click", "a.social_link", function(e){
                    e.preventDefault();

                    var pop_url = $(this).attr("href");
                    var newWin = window.open(
                        pop_url,
                        "social_sing_on",
                        "location=0,status=0,scrollbars=0,width=600,height=500"
                    );

                    if(!newWin || newWin.closed || typeof newWin.closed=='undefined')
                         alert('브라우저에서 팝업이 차단되어 있습니다. 팝업 활성화 후 다시 시도해 주세요.');

                    return false;
                });
            });
        </script>
                            </p>

                </div>
            </div>
            <div class="last_login">
            	<dl>
                	<dd>회원이 아니십니까?</dd>
                    <dt><a href="http://sample01.openfield.co.kr/bbs/register.php" class="last_btn">회원가입</a></dt>
                </dl>
            </div>
        </div>
        </div>
        </form>
    </article>
    <!-- //pop_area -->
</section>
<!-- //popup -->
</div>


<script>
$omi = $('#ol_id');
$omp = $('#ol_pw');
$omp.css('display','inline-block').css('width',104);
$omi_label = $('#ol_idlabel');
$omi_label.addClass('ol_idlabel');
$omp_label = $('#ol_pwlabel');
$omp_label.addClass('ol_pwlabel');

$(function() {
    $omi.focus(function() {
        $omi_label.css('visibility','hidden');
    });
    $omp.focus(function() {
        $omp_label.css('visibility','hidden');
    });
    $omi.blur(function() {
        $this = $(this);
        if($this.attr('id') == "ol_id" && $this.attr('value') == "") $omi_label.css('visibility','visible');
    });
    $omp.blur(function() {
        $this = $(this);
        if($this.attr('id') == "ol_pw" && $this.attr('value') == "") $omp_label.css('visibility','visible');
    });

    $("#auto_login").click(function(){
        if ($(this).is(":checked")) {
            if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
                return false;
        }
    });
});

function fhead_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 전 아웃로그인 끝 -->
    </div>
    <!--모바일메뉴-->
     <div class="gnb">
        <div class="gnb_wrap">
            <a class="btn_menu open" >열기버튼</a>
            <a class="btn_menu close" >닫기버튼</a>
        </div>
    </div><!--//gnb-->
    <div class="all_menu">
        <div class="all_nav">
            <ul>
            <li class="mobile act"><a  target="_self">조리원소개</a>
<ul class="deth_2">
                        <li><a href="../bbs/sub01.html" target="_self"><span></span>인사말</a></li>
                        <li><a href="../bbs/sub02.html" target="_self"><span></span>조리원소개</a></li>
                        <li><a href="../bbs/sub03.html" target="_self"><span></span>오시는 길</a></li>
</ul>
            </li>
            <li class="mobile "><a href='../bbs/sub04.html' target="_self">시설보기</a>
            </li>
            <li class="mobile "><a href='../bbs/sub05.html' target="_self">프로그램</a>
            </li>
            <li class="mobile "><a href='../bbs/sub06.html' target="_self">이용안내</a>
            </li>
            <li class="mobile act"><a  target="_self">커뮤니티</a>
<ul class="deth_2">
                        <li><a href="../bbs/sub07.html" target="_self"><span></span>공지사항</a></li>
                        <li><a href="../bbs/sub08.html" target="_self"><span></span>1:1문의</a></li>
                        <li><a href="../bbs/sub09.html" target="_self"><span></span>자주하는 질문</a></li>
                        <li><a href="../bbs/sub10.html" target="_self"><span></span>자유게시판</a></li>
</ul>
            </li>

            </ul>
        </div><!--//all_nav-->
    </div><!--//all_menu-->
    <!--//모바일메뉴end-->
</header>
<!-- //header -->


		<section id="sub_content">
				 <article class="sub_visual sub_visual06">
      <p><span>명품 CARE 산후조리원을</span><br />
 <em>만나보세요.</em></p>
  </article><!--//sub_visual-->



		</article>
		<article class="content_area02">
		<div class="in_area">


  <article class="join_area">
      <form  name="fregister" id="fregister" action="http://sample01.openfield.co.kr/bbs/register_form.php" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">
		<h3>회원가입약관</h3>




     <p class="sec_title">SNS 계정으로 가입</p>

    <div class="grey_box">
        	<div class="join_site">
                        <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=naver&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-naver" title="네이버">
         <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site01.png" alt="네이버">
            </a>
                                    <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=kakao&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-kakao" title="카카오">
                 <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site04.png" alt="카카오톡">
            </a>
                                    <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=facebook&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-facebook" title="페이스북">
                  <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site02.png" alt="페이스북">
            </a>
                                    <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=google&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-google" title="구글">
                 <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site03.png" alt="구글">
            </a>
                           <a href="http://sample01.openfield.co.kr/plugin/social/popup.php?provider=twitter&amp;url=%2Fbbs%2Fregister.php" class="sns-icon social_link sns-twitter" title="트위터">
           <img src="http://sample01.openfield.co.kr/theme/care_grayblue/img/main/login_site05.png" alt="트위터">
        </a>

                        <script>
                jQuery(function($){
                    $(".grey_box").on("click", "a.social_link", function(e){
                        e.preventDefault();

                        var pop_url = $(this).attr("href");
                        var newWin = window.open(
                            pop_url,
                            "social_sing_on",
                            "location=0,status=0,scrollbars=0,width=600,height=500"
                        );

                        if(!newWin || newWin.closed || typeof newWin.closed=='undefined')
                             alert('브라우저에서 팝업이 차단되어 있습니다. 팝업 활성화 후 다시 시도해 주세요.');

                        return false;
                    });
                });
            </script>

          </div>
        </div>
        <div class="register_area" >
        <div  id="fregister_chkall"class="agree_box">
      <span>
     <input type="checkbox" name="chk_all"  value="1"  id="chk_all">
     <label for="chk_all">전체선택</label></span>
    </div>
        <p class="sec_title">회원가입약관</p>
        <div class="grey_box">
			<div class="agree_text">
     해당 홈페이지에 맞는 회원가입약관을 입력합니다.            </div>

            <div class="agree_box">
                <span>
                <input type="checkbox"  name="agree" value="1" id="agree11">
                <label for="agree11">회원가입약관의 내용에 동의합니다.</label>
				</span>
            </div>
        </div>


        <p class="sec_title">개인정보처리방침안내</p>
        <div class="grey_box">

            <table class="etc_table">
            	<colgroup>
                	<col width="33.3%">
                    <col width="33.3%">
                    <col width="*">
                </colgroup>
                <thead>
                	<tr>
                    	<th>목적</th>
                        <th>항목</th>
                        <th>보유기간</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                    	<td>이용자 식별 및 본인여부 확인</td>
                        <td>아이디, 이름, 비밀번호</td>
                        <td>회원 탈퇴 시까지</td>
                    </tr>
                    <tr>
                    	<td>고객서비스 이용에 관한 통지,<br>
                        CS대응을 위한 이용자 식별</td>
                        <td>연락처 (이메일, 휴대전화번호)</td>
                        <td>회원 탈퇴 시까지</td>
                    </tr>
                </tbody>
            </table>
            <div class="agree_box">
                <span>
            	<input type="checkbox"  name="agree2" value="1" id="agree21">
                <label for="agree21">개인정보처리방침안내의 내용에 동의합니다.</label>
                </span></div>
        </div>
        </div><!--//register_area-->
        <div class="botton_area">
            <span> <input type="submit" class="btn_type3" value="다음"></span><span><a href="#" class="btn_type2">취소</a></span>

        </div>

  </article>

    </form>

    <script>
    function fregister_submit(f)
    {
        if (!f.agree.checked) {
            alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
            f.agree.focus();
            return false;
        }

        if (!f.agree2.checked) {
            alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
            f.agree2.focus();
            return false;
        }

        return true;
    }

	 jQuery(function($){
        // 모두선택
        $("input[name=chk_all]").click(function() {
            if ($(this).prop('checked')) {
                $("input[name^=agree]").prop('checked', true);
            } else {
                $("input[name^=agree]").prop("checked", false);
            }
        });
    });
    </script>
</div>
<!-- } 회원가입 약관 동의 끝 -->      </div>
        </article>
</section>


<div id="cmTopScroll" class="TopScroll"> <a href="#header" class="top">TOP</a> </div>

  <footer>
	<p><span>CARE 산후조리원</span>  <em>|</em>  주소 : 서울특별시 마포구 서교동395-171 아이오빌딩 (I.O) 4층 <em>|</em> <span>사업자등록번호 : 375-92-00082</span> <br>
     COPYRIGHT @ 2016 CARE 산후조리원. All Right Reserved. </p>
</footer>
<!-- //footer -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>





</body>
</html>
