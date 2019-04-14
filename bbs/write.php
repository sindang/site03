<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="무료디자인소스, 무료PSD 다운, 무료템플릿, 반응형웹 솔루션 판매, html5, 제이쿼리, 무료 스크립트, 워드프레스,아임웹,그누보드"/>
<meta name="Keywords" content="무료디자인소스, 무료PSD 다운, 무료템플릿, 반응형웹 솔루션 판매, html5, 제이쿼리, 무료 스크립트, 워드프레스,아임웹,그누보드"/>
<meta property="og:site_name" content="웹쟁이 | 무료 웹소스 제공" />
<meta property="og:title" content="웹쟁이 | 무료 웹소스 제공" />
<meta property="og:description" content="무료디자인소스, 무료PSD 다운, 무료템플릿, 반응형웹 솔루션 판매, html5, 제이쿼리, 무료 스크립트, 워드프레스,아임웹,그누보드" />
<meta name="naver-site-verification" content="1e24e6ce687adc9cef907046c025298b5c7d1892"/>
<title>자유게시판 글쓰기 | CARE-GRAYBLUE</title>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
<link rel="stylesheet" href="../skin/social/style.css">
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
// "http://sample01.openfield.co.kr";
var g5_bbs_url   = "../bbs";
// "http://sample01.openfield.co.kr/bbs";
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
<a href="#container" accesskey="1" class="skip_area">메뉴건너뛰고 본문 바로가기</a>

<header id="header" class="fix">
	<div class="head_in">
        <h1><a href="../index.html"><img src="../img/main/logo.png" alt="CARE-GRAYBLUE"></a></h1>
        <div class="nav">
            <ul id="nav">
                     <li class=""><a href="../bbs/sub01.html" target="_self"><span>조리원소개</span></a>
             <ul style="">
                        <li><a href="../bbs/sub01.html" target="_self"><span></span>인사말</a></li>
                                            <li><a href="../bbs/sub02.html" target="_self"><span></span>조리원소개</a></li>
                                            <li><a href="../bbs/sub03.html" target="_self"><span></span>오시는 길</a></li>
                    </ul>
            </li>
                         <li class=""><a href="../bbs/sub04.html" target="_self" class=""><span>시설보기</span></a>
                         </li>
                         <li class=""><a href="../bbs/sub05.html" target="_self" class=""><span>프로그램</span></a>
                         </li>
                         <li class=""><a href="../bbs/sub06.html" target="_self" class=""><span>이용안내</span></a>
                         </li>
                         <li class=""><a href="../bbs/sub07.html" target="_self" class=""><span>커뮤니티</span></a>
             <ul style="display: none;">
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
<!--모바일인경우--> <div class="login login_mobile"><a href="/bbs/login.php">로그인</a></div>
<!-- popup -->
<div class="black_bg">
<section class="popup" id="pop01">
    <!-- pop_area -->
      <article class="pop_part">
    <div class="pop_cl"><span><img src="../img/main/pop_cl.png" alt="닫기"></span></div>
    <div class="pop_area">
    <form name="foutlogin" action="" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
    	<input type="hidden" name="url" value="%2Fbbs%2Fwrite.php%3Fbo_table%3Dfree">
        <div class="pop_cont" style="max-height: 798px;">
        	<div class="pop_in">
				<p class="pop_tt">로그인</p>
                <ul class="login_part">
                    <li><input type="text" id="ol_id" name="mb_id" required="" class="id_input" placeholder="아이디"> </li>
                    <li><input name="mb_password" type="password" required="" class="pw_input" placeholder="패스워드"></li>
                </ul>
                <div class="auto">
                	<label> <input type="checkbox" name="auto_login" value="1" id="auto_login">자동로그인</label><a href="../bbs/password_lost.php" id="ol_password_lost">아이디 비밀번호 찾기</a>
                </div>
                <div class="login_btn_area">
                	<div class="pop_btn_area"><input type="submit" class="pop_btn" value="로그인"></div>

                    <p>

                <a href="../bbs/naver_login.php" class="sns-icon social_link sns-naver" title="네이버">
            <img src="../img/main/login_site01.png" alt="네이버">
        </a>
                        <a href="" class="sns-icon social_link sns-kakao" title="카카오">
          <img src="../img/main/login_site04.png" alt="카카오톡">
        </a>
                        <a href="" class="sns-icon social_link sns-facebook" title="페이스북">
          <img src="../img/main/login_site02.png" alt="페이스북">
        </a>
                        <a href="" class="sns-icon social_link sns-google" title="구글">
           <img src="../img/main/login_site03.png" alt="구글">
        </a>
                        <a href="" class="sns-icon social_link sns-twitter" title="트위터">
           <img src="../img/main/login_site05.png" alt="트위터">
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
                    <dt><a href="../bbs/register.php" class="last_btn">회원가입</a></dt>
                </dl>
            </div>
        </div>
        </form></div>

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
            <a class="btn_menu open">열기버튼</a>
            <a class="btn_menu close">닫기버튼</a>
        </div>
    </div><!--//gnb-->
    <div class="all_menu">
        <div class="all_nav">
            <ul>
            <li class="mobile act"><a target="_self">조리원소개</a>
<ul class="deth_2">
                        <li><a href="../bbs/sub01.html" target="_self"><span></span>인사말</a></li>
                        <li><a href="../bbs/sub02.html" target="_self"><span></span>조리원소개</a></li>
                        <li><a href="/bbs/content.php?co_id=contact" target="_self"><span></span>오시는 길</a></li>
</ul>
            </li>
            <li class="mobile "><a href="../bbs/sub04.html" target="_self">시설보기</a>
            </li>
            <li class="mobile "><a href="../bbs/sub05.html" target="_self">프로그램</a>
            </li>
            <li class="mobile "><a href="../bbs/sub06.html" target="_self">이용안내</a>
            </li>
            <li class="mobile act"><a target="_self">커뮤니티</a>
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
				 <article class="sub_visual sub_visual05">
      <p><span>호텔같은 최고급 인테리어,</span> <br>
<em>한분 한분을 위한 맞춤서비스</em></p>
  </article><!--//sub_visual-->

  <!--네비게이션_GNB영역-->
    <div class="navigation">
        <div class="location">
            <div class="locationWrap">
            <ul>
                <li class="gnbMenu">


                <a class="first_path">커뮤니티</a>
                	<div id="first_path" class="path_menu depthDiv">
                        <ul>
				            <li><a href="../bbs/sub01.html" target="_self">조리원소개</a></li>
				            <li><a href="../bbs/sub04.html" target="_self">시설보기</a></li>
				            <li><a href="../bbs/sub05.html" target="_self">프로그램</a></li>
				            <li><a href="../bbs/sub06.html" target="_self">이용안내</a></li>
				            <li><a href="../bbs/sub07.html" target="_self">커뮤니티</a></li>
      </ul>
    	</div>
          </li>


   <li class="gnbMenu">
      <a class="second_path"> 공지사항 </a>
         <div id="second_path" class="path_menu depthDiv" style="">
        <ul>
		<li><a href="../bbs/sub07.html" target="_self">공지사항</a></li>
		<li><a href="../bbs/sub08.html" target="_self">1:1문의</a></li>
		<li><a href="../bbs/sub09.html" target="_self">자주하는 질문</a></li>
		<li><a href="../bbs/sub10.html" target="_self">자유게시판</a></li>
                         </ul>
                    </div>
                </li>


                </ul>
            </div><!-- locationWrap -->
        </div><!-- location-->
    </div><!--//navigation-->

      <!--//네비게이션_GNB끝-->

		<article class="content_area02">
		<div class="in_area">

		<!-- skin : theme/basic --><div class="text_area">
				<p class="sub_tt"> 자유게시판 글쓰기</p>
            </div>


  <div class="question">
    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:100%">
    <input type="hidden" name="uid" value="19041217493697">
    <input type="hidden" name="w" value="">
    <input type="hidden" name="bo_table" value="free">
    <input type="hidden" name="wr_id" value="0">
    <input type="hidden" name="sca" value="">
    <input type="hidden" name="sfl" value="">
    <input type="hidden" name="stx" value="">
    <input type="hidden" name="spt" value="">
    <input type="hidden" name="sst" value="">
    <input type="hidden" name="sod" value="">
    <input type="hidden" name="page" value="/bbs/write.php">
    <input type="hidden" value="html1" name="html">
      <div class="input_box">
        <table>
        <tbody>
                <tr>
            <th><label for="wr_name">이름<strong class="sound_only">필수</strong></label></th>
            <td><input type="text" name="wr_name" value="" id="wr_name" required="" class="frm_input required" size="10" maxlength="20"></td>
        </tr>

                <tr>
            <th scope="row"><label for="wr_password">비밀번호<strong class="sound_only">필수</strong></label></th>
            <td><input type="password" name="wr_password" id="wr_password" required="" class="frm_input required" maxlength="20"></td>
        </tr>

                <tr>
            <th scope="row"><label for="wr_email">이메일</label></th>
            <td><input type="text" name="wr_email" value="" id="wr_email" class="frm_input email" size="50" maxlength="100"></td>
        </tr>




        <tr>
            <th scope="row"><label for="wr_subject">제목<strong class="sound_only">필수</strong></label></th>
            <td>
                <div id="autosave_wrapper">
                    <input type="text" name="wr_subject" value="" id="wr_subject" required="" class="frm_input required" size="50" maxlength="255">
                                    </div>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
            <td class="wr_content">
                                <span class="sound_only">웹에디터 시작</span>

																<!-- <script>document.write("<div class='cke_sc'><button type='button' class='btn_cke_sc'>단축키 일람</button></div>");</script> -->

																<!-- <div class="cke_sc"><button type="button" class="btn_cke_sc">단축키 일람</button></div> -->

<script src="../js/HuskyEZCreator.js"></script>
<script>var g5_editor_url = "", oEditors = [], ed_nonce = "VZukkBBBKp|1555062576|c8beb397348524c26b8f8abcf97a319e6d9dd2e2";</script>
<script src="../js/config.js"></script>
<script>
        $(function(){
            $(".btn_cke_sc").click(function(){
                if ($(this).next("div.cke_sc_def").length) {
                    $(this).next("div.cke_sc_def").remove();
                    $(this).text("단축키 일람");
                } else {
                    $(this).after("<div class='cke_sc_def' />").next("div.cke_sc_def").load("");
                    $(this).text("단축키 일람 닫기");
                }
            });
            $(document).on("click", ".btn_cke_sc_close", function(){
                $(this).parent("div.cke_sc_def").remove();
            });
        });
</script>
<textarea id="wr_content" name="wr_content" class="smarteditor2" maxlength="65536" style="width: 100%; height: 300px; display: none;"></textarea><iframe frameborder="0" scrolling="no" style="width: 100%; height: 349px;" src="http://sample01.openfield.co.kr/plugin/editor/smarteditor2/SmartEditor2Skin.html"></iframe>
<span class="sound_only">웹 에디터 끝</span>                            </td>
        </tr>


                <tr>
            <th scope="row">파일 #1</th>
            <td>
                <input type="file" name="bf_file[]" title="파일첨부 1 : 용량 1,048,576 바이트 이하만 업로드 가능" class="frm_file frm_input">
                                            </td>
        </tr>
                <tr>
            <th scope="row">파일 #2</th>
            <td>
                <input type="file" name="bf_file[]" title="파일첨부 2 : 용량 1,048,576 바이트 이하만 업로드 가능" class="frm_file frm_input">
                                            </td>
        </tr>

                <tr>
            <th scope="row">자동등록방지</th>
            <td>

<script>var g5_captcha_url  = "http://sample01.openfield.co.kr/plugin/kcaptcha";</script>
<script src="http://sample01.openfield.co.kr/plugin/kcaptcha/kcaptcha.js"></script>
<fieldset id="captcha" class="captcha">
<legend><label for="captcha_key">자동등록방지</label></legend>
<img src="http://sample01.openfield.co.kr/plugin/kcaptcha/kcaptcha_image.php?t=1555058977384" alt="" id="captcha_img"><input type="text" name="captcha_key" id="captcha_key" required="" class="captcha_box required" size="6" maxlength="6">
<button type="button" id="captcha_mp3"><span></span>숫자음성듣기</button>
<button type="button" id="captcha_reload"><span></span>새로고침</button>
<span id="captcha_info">자동등록방지 숫자를 순서대로 입력하세요.</span>
</fieldset>            </td>
        </tr>

        </tbody>
        </table>
    </div>

         <div class="btn_confirm center">
        <span><input type="submit" value="등록" id="btn_submit" accesskey="s" class="btn_submitBig"></span>
       <span> <a href="./board.php?bo_table=free" class="btn_nosubmit">취소</a></span>
    </div>
    </form>

</div>
    <script>
        function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        var wr_content_editor_data = oEditors.getById['wr_content'].getIR();
oEditors.getById['wr_content'].exec('UPDATE_CONTENTS_FIELD', []);
if(jQuery.inArray(document.getElementById('wr_content').value.toLowerCase().replace(/^\s*|\s*$/g, ''), ['&nbsp;','<p>&nbsp;</p>','<p><br></p>','<div><br></div>','<p></p>','<br>','']) != -1){document.getElementById('wr_content').value='';}
if (!wr_content_editor_data || jQuery.inArray(wr_content_editor_data.toLowerCase(), ['&nbsp;','<p>&nbsp;</p>','<p><br></p>','<p></p>','<br>']) != -1) { alert("내용을 입력해 주십시오."); oEditors.getById['wr_content'].exec('FOCUS'); return false; }

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        if (!chk_captcha()) return false;

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</div></article></section>
<!-- } 게시물 작성/수정 끝 -->




<div id="cmTopScroll" class="TopScroll" style="bottom: -200px;"> <a href="#header" class="top">TOP</a> </div>

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







<span class="dimd"></span></body></html>
