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
<title>회원정보 찾기 | CARE-GRAYBLUE</title>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
<link rel="stylesheet" href="../css/member_style.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="../css/1200.css" media="all and (min-width:961px) and (max-width:1300px)">
<link rel="stylesheet" href="../css/250.css" media="all and  (max-width:960px)">
<link rel="stylesheet" href="../js/font-awesome/css/font-awesome.min.css">
<!--[if lte IE 8]>
<script src="http://sample01.openfield.co.kr/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "";
var g5_bbs_url   = "../bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/common.js"></script>
<script src="../js/wrest.js"></script>
<script src="../js/placeholders.min.js"></script>
<script src="../js/front_ui.js"></script>



</head>
<body>




  <article class="winpop_area">
   <form name="fpasswordlost" action="" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off">
    	<div class="pop_area">
        <dl>
        <dt>회원정보 찾기</dt>
        <dd><button type="button" class="Btn_close" onclick="window.close();">창닫기</button></dd>
        </dl>
        	<div class="pop_in">

    <fieldset id="info_fs">
                <ul class="login_part">
                    <li>
                    <input name="mb_email" id="mb_email" required type="email" class="email_input email required" placeholder="이메일">
                    </li>
                    <li>
<script>var g5_captcha_url  = "";</script>
<script src="../js/kcaptcha.js"></script>
<fieldset id="captcha" class="captcha">
<legend><label for="captcha_key">자동등록방지</label></legend>
<img src="../img/kcaptcha_image.jpg" alt="" id="captcha_img"><input type="text" name="captcha_key" id="captcha_key" required class="captcha_box required" size="6" maxlength="6">
<button type="button" id="captcha_mp3"><span><img src="../img/kcaptcha_image.jpg"></span>숫자음성듣기</button>
<button type="button" id="captcha_reload"><span></span>새로고침</button>
<span id="captcha_info">자동등록방지 숫자를 순서대로 입력하세요.</span>
</fieldset></li>
                </ul>
                   </fieldset>
                <div class="login_btn_area">
                	<div class="pop_btn_area"><input type="submit" class="pop_btn" value="아이디/비밀번호 찾기"></div>
                </div>
            </div>
            <div class="window_text">
				<p>가입시 입력하신 <span>이메일</span>로 <span>아이디 비밀번호를</span>를 발송해 드립니다.<br>
                받으신 정보를 통해 들어오신 뒤 <span>새로운 비밀번호를 설정</span>하실 수 있습니다.
                </p>
            </div>
        </div>
        </form>
    </article>



<script>
function fpasswordlost_submit(f)
{
    if (!chk_captcha()) return false;

    return true;
}

$(function() {
    var sw = screen.width;
    var sh = screen.height;
    var cw = document.body.clientWidth;
    var ch = document.body.clientHeight;
    var top  = sh / 2 - ch / 2 - 100;
    var left = sw / 2 - cw / 2;
    moveTo(left, top);
});
</script>
<!-- } 회원정보 찾기 끝 -->


</body>
</html>
