<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/y_info.css">', 0);
add_javascript(G5_POSTCODE_JS, 0); //다음 주소 js

//새글 작성일때 기본좌표
if($write['wr_8'] == null){$write['wr_8'] =  35.8708222685352;}
if($write['wr_9'] == null){$write['wr_9'] = 128.604621264356;}

//include_once(G5_THEME_PATH.'/head.php');
?>

<?php
$ex5_filed = explode("|",$write['wr_5']); 
$ext5_00  = $ex5_filed[0];
$ext5_01  = $ex5_filed[1];
$ext5_02  = $ex5_filed[2];
$ext5_03  = $ex5_filed[3];
$ext5_04  = $ex5_filed[4];
$ext5_05  = $ex5_filed[5];
$ext5_06  = $ex5_filed[6];
$ext5_07  = $ex5_filed[7];
$ext5_08  = $ex5_filed[8];
$ext5_09  = $ex5_filed[9];
$ext5_10  = $ex5_filed[10];
$ext5_11  = $ex5_filed[11];
$ext5_12  = $ex5_filed[12];
$ext5_13  = $ex5_filed[13];
$ext5_14  = $ex5_filed[14];
$ext5_15  = $ex5_filed[15];
$ext5_16  = $ex5_filed[16];
$ext5_17  = $ex5_filed[17];
$ext5_18  = $ex5_filed[18];
$ext5_19  = $ex5_filed[19];
$ext5_20  = $ex5_filed[20];
$ext5_21  = $ex5_filed[21];
$ext5_22  = $ex5_filed[22];
$ext5_23  = $ex5_filed[23];
$ext5_24  = $ex5_filed[24];
$ext5_25  = $ex5_filed[25];
$ext5_26  = $ex5_filed[26];
$ext5_27  = $ex5_filed[27];
$ext5_28  = $ex5_filed[28];
$ext5_29  = $ex5_filed[29];
$ext5_30  = $ex5_filed[30];
$ext5_31  = $ex5_filed[31];
$ext5_32  = $ex5_filed[32];//empty
$ext5_33  = $ex5_filed[33];//empty
$ext5_34  = $ex5_filed[34];//empty
$ext5_35  = $ex5_filed[35];//empty
$ext5_36  = $ex5_filed[36];//empty
$ext5_37  = $ex5_filed[37];//empty
$ext5_38  = $ex5_filed[38];//empty
$ext5_39  = $ex5_filed[39];//empty
$ext5_40  = $ex5_filed[40];//empty
$ext5_41  = $ex5_filed[41];//empty
$ext5_42  = $ex5_filed[42];//empty
$ext5_43  = $ex5_filed[43];//empty
$ext5_44  = $ex5_filed[44];//empty
$ext5_45  = $ex5_filed[45];//empty

$ex2_filed = explode("|",$write['wr_2']); 
$ext2_00  = $ex2_filed[0];
$ext2_01  = $ex2_filed[1];
$ext2_02  = $ex2_filed[2];
$ext2_03  = $ex2_filed[3];
$ext2_04  = $ex2_filed[4];
$ext2_05  = $ex2_filed[5];
$ext2_06  = $ex2_filed[6];
$ext2_07  = $ex2_filed[7];
$ext2_08  = $ex2_filed[8];
$ext2_09  = $ex2_filed[9];
$ext2_10  = $ex2_filed[10];
$ext2_11  = $ex2_filed[11];
$ext2_12  = $ex2_filed[12];//empty
$ext2_13  = $ex2_filed[13];
$ext2_14  = $ex2_filed[14];
$ext2_15  = $ex2_filed[15];
$ext2_16  = $ex2_filed[16];
$ext2_17  = $ex2_filed[17];
$ext2_18  = $ex2_filed[18];
$ext2_19  = $ex2_filed[19];
$ext2_20  = $ex2_filed[20];
$ext2_21  = $ex2_filed[21];
$ext2_22  = $ex2_filed[22];
$ext2_23  = $ex2_filed[23];
$ext2_24  = $ex2_filed[24];
$ext2_25  = $ex2_filed[25];
$ext2_26  = $ex2_filed[26];
$ext2_27  = $ex2_filed[27];
$ext2_28  = $ex2_filed[28];
$ext2_29  = $ex2_filed[29];//empty
$ext2_30  = $ex2_filed[30];
$ext2_31  = $ex2_filed[31];
$ext2_32  = $ex2_filed[32];
$ext2_33  = $ex2_filed[33];
$ext2_34  = $ex2_filed[34];
$ext2_35  = $ex2_filed[35];
$ext2_36  = $ex2_filed[36];
$ext2_37  = $ex2_filed[37];
$ext2_38  = $ex2_filed[38];
$ext2_39  = $ex2_filed[39];
$ext2_40  = $ex2_filed[40];
$ext2_41  = $ex2_filed[41];
$ext2_42  = $ex2_filed[42];
$ext2_43  = $ex2_filed[43];
$ext2_44  = $ex2_filed[44];
$ext2_45  = $ex2_filed[45];
?>
<script type="text/javascript">
    if (document.getElementById){
    document.write('<style type="text/css">\n')
    document.write('.content_box{display:none;}\n')
    document.write('</style>\n')
    }
    
    function contractall(){
    if (document.getElementById){
    var inc=0
    while (document.getElementById("message_box_"+inc)){
    document.getElementById("message_box_"+inc).style.display="none"
    inc++
    }
    }
    }

    function expandone() {
    if (document.getElementById) {
        var selectedItem = document.fwrite.ca_name.selectedIndex;
        contractall();
        document.getElementById("message_box_" + selectedItem).style.display = "block";

        // "detail" div 활성화 기능 추가
        var selectBox = document.fwrite.ca_name;
        var selectedValue = selectBox.value;
        var detailDiv = document.getElementById("detail");

        if (selectedValue === "메인등록") { 
            detailDiv.classList.add("active");
        } else {
            detailDiv.classList.remove("active");
            }
        }
    }

    
    if (window.addEventListener)
    window.addEventListener("load", expandone, false)
    else if (window.attachEvent)
    window.attachEvent("onload", expandone)
</script>
<!--금액에 콤마찍기-->
<script language="javascript">
function number_format(f) {
 var val = f.value;
 var len = val.length;
    var number_format1 = "", number_format2 = "";
 var c = 0;
 
 if(val.charCodeAt(len-1)<48 || val.charCodeAt(len-1)>57) {
  alert("숫자만 입력해주세요");
  f.value = val.substr(0, (len-1));
 }else{
     if(len > 3) {   
         for(i = 0 ; i < len; i++){
    one = val.charAt(i)
    if(one != ",") number_format1 += one;
         }
   var number_format1_len = number_format1.length;
   var in_c = number_format1_len%3;
   if(!in_c) in_c = 3;
   
   for(i = 0 ; i < number_format1_len; i++){
    number_format2_one = number_format1.charAt(i)
    if(i == in_c){
     number_format2 += ",";
     in_c = 3+in_c;
    }
    number_format2 += number_format2_one;
         }
         f.value = number_format2;
     }
 }
}
</script>
<script>
function onlyNumber(objtext1){
var inText = objtext1.value;
var ret;

for (var i = 0; i < inText.length; i++) {
ret = inText.charCodeAt(i);
if (!((ret > 47) && (ret < 58))) {
alert("숫자만을 입력하세요");
objtext1.value = "";
objtext1.focus();
return false;
}
}
if (objtext1.value.length==6) {
document.form1.RNI_idnum2.focus() ;
}
return true;
}
</script>

<div class="list_one">
<section id="bo_w">
    <h2><?php echo $g5['title'] ?></h2>
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) { 
        $option = '';
        if ($is_notice) {
            $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice"><span></span>공지</label></li>';
        }
        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html"><span></span>html</label></li>';
            }
        }
        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret"><span></span>비밀글</label></li>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }
        if ($is_mail) {
            $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail"><span></span>답변메일받기</label></li>';
        }
    }
    echo $option_hidden;
    ?>

    <div class="bo_w_info write_div">
	    <?php if ($is_name) { ?>
	        <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
	        <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input half_input required" placeholder="이름">
	    <?php } ?>
	
	    <?php if ($is_password) { ?>
	        <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
	        <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input half_input <?php echo $password_required ?>" placeholder="비밀번호">
	    <?php } ?>
	
	    <?php if ($is_email) { ?>
			<label for="wr_email" class="sound_only">이메일</label>
			<input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input half_input email " placeholder="이메일">
	    <?php } ?>
	    
	
	    <?php if ($is_homepage) { ?>
	        <label for="wr_homepage" class="sound_only">홈페이지</label>
	        <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input half_input" size="50" placeholder="홈페이지">
	    <?php } ?>
	</div>
	
    <div id="map"><?php include_once "$board_skin_path/map/write_map.php";?></div>


    <?php if ($option) { ?>
    <div class="write_div">
        <span class="sound_only">옵션</span>
        <ul class="bo_v_option">
        <?php echo $option ?>
        </ul>
    </div>
    <?php } ?>

    <!--주소입력 -->
    <div class="bo_w_tit write_div">
        <ul>
            <li>시설명</li>
            <li>
                <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required" size="50" maxlength="255" placeholder="시설명">
            </li>

            <li>주소</li>
            <li>
              <input type="text" name="wr_4" value="<?php echo $write['wr_4'] ?>" id="wr_4" class="frm_input" placeholder="주소검색" style="width:60%;" readonly>
              <a href="javascript:void(0);" class="ser_bbt" id="ser_bbt"><span class="address_btn">주소검색</span></a>
            </li>

            <li>지번 주소</li>
            <li>
              <input type="text" name="wr_10" value="<?php echo $write['wr_10'] ?>" id="wr_10" class="frm_input" style="width:60%;" placeholder="지번 주소" readonly>
            </li>

            <li>상세주소</li>
            <li>
              <input type="text" name="ext5_05" value="<?php echo $ext5_05; ?>" id="ext5_05" class="frm_input" style="width:40%;" placeholder="나머지주소">
            </li>
            <!-- <li>
              <input type="text" name="wr_6" value="<?php echo $write['wr_6']; ?>" id="wr_6" class="frm_input" style="width:40%;" placeholder="읍/면/동 입력">
            </li> -->
            <li>위도/경도</li>
            <li>
              <input type="text" name="wr_8" value="<?php echo $write['wr_8'] ; ?>" id="wr_8" class="frm_input winp" readonly>
              <input type="text" name="wr_9" value="<?php echo $write['wr_9'] ; ?>" id="wr_9" class="frm_input winp" readonly>
            </li>

            <li>전화번호</li>
            <li>
                <SELECT name='ext5_00' class='frm_input required' itemname='전화번호'>
		    		<option value=''>선택</option>
		    		<option value='02' <?php if($ext5_00 == "02") echo "selected"; ?>>02</option>
		    		<option value='031' <?php if($ext5_00 == "031") echo "selected"; ?>>031</option>
		    		<option value='032' <?php if($ext5_00 == "032") echo "selected"; ?>>032</option>
		    		<option value='033' <?php if($ext5_00 == "033") echo "selected"; ?>>033</option>
		    		<option value='041' <?php if($ext5_00 == "041") echo "selected"; ?>>041</option>
		    		<option value='042' <?php if($ext5_00 == "042") echo "selected"; ?>>042</option>
		    		<option value='043' <?php if($ext5_00 == "043") echo "selected"; ?>>043</option>
		    		<option value='044' <?php if($ext5_00 == "044") echo "selected"; ?>>044</option>
		    		<option value='051' <?php if($ext5_00 == "051") echo "selected"; ?>>051</option>
		    		<option value='052' <?php if($ext5_00 == "052") echo "selected"; ?>>052</option>
		    		<option value='053' <?php if($ext5_00 == "053") echo "selected"; ?>>053</option>
		    		<option value='054' <?php if($ext5_00 == "054") echo "selected"; ?>>054</option>
		    		<option value='055' <?php if($ext5_00 == "055") echo "selected"; ?>>055</option>
		    		<option value='061' <?php if($ext5_00 == "061") echo "selected"; ?>>061</option>
		    		<option value='062' <?php if($ext5_00 == "062") echo "selected"; ?>>062</option>
		    		<option value='063' <?php if($ext5_00 == "063") echo "selected"; ?>>063</option>
		    		<option value='064' <?php if($ext5_00 == "064") echo "selected"; ?>>064</option>
		    		<option value='070' <?php if($ext5_00 == "070") echo "selected"; ?>>070</option>
		    	</select> - 
		    	<input name='ext5_01' class="frm_input required" value='<?php echo $ext5_01?>' type='text' size='8' maxlength='4' onkeydown='onlyNumber(this);' itemname='일반전화 두번째자리' class=input>  - 
		    	<input name='ext5_02' class="frm_input required" value='<?php echo $ext5_02?>' type='text' size='8' maxlength='4' onkeydown='onlyNumber(this);' itemname='일반전화 세번째자리' class=input>
            </li>

            <li>홈페이지</li>
            <li><input type="text" name="wr_link1" value="<?php if($w=="u"){echo $write['wr_link1'];} ?>" id="wr_link1" class="frm_input" size="80"></li>

            <li>장기요양기관평가</li>
            <li>
                <label class="degree" for="ext2-1"><INPUT type=radio name='ext2_37' id='ext2-1' VALUE="A" <?php if ($ext2_37 == "A") echo'checked';?> checked>&nbsp;&nbsp;A</label>
		    	<label class="degree" for="ext2-2"><INPUT type=radio name='ext2_37' id='ext2-2' VALUE="B" <?php if ($ext2_37 == "B") echo'checked';?>>&nbsp;&nbsp;B</label>
		    	<label class="degree" for="ext2-3"><INPUT type=radio name='ext2_37' id='ext2-3' VALUE="C" <?php if ($ext2_37 == "C") echo'checked';?>>&nbsp;&nbsp;C</label>
		    	<label class="degree" for="ext2-4"><INPUT type=radio name='ext2_37' id='ext2-4' VALUE="D" <?php if ($ext2_37 == "D") echo'checked';?>>&nbsp;&nbsp;D</label>
		    	<label class="degree" for="ext2-5"><INPUT type=radio name='ext2_37' id='ext2-5' VALUE="E" <?php if ($ext2_37 == "E") echo'checked';?>>&nbsp;&nbsp;E</label>
		    	<label class="degree" for="ext2-6"><INPUT type=radio name='ext2_37' id='ext2-6' VALUE="등급없음" <?php if ($ext2_37 == "등급없음") echo'checked';?>>&nbsp;&nbsp;등급없음</label>
		    	<label class="degree" for="ext2-7"><INPUT type=radio name='ext2_37' id='ext2-7' VALUE="기타" <?php if ($ext2_37 == "기타") echo'checked';?>>&nbsp;&nbsp;기타 </label>
            </li>

            <li>단기요양</li>
            <li>
                <label for="ext5-1"><INPUT type=radio name='ext5_44' id='ext5-1' VALUE="문의" <?php if ($ext5_44 == "문의") echo'checked';?> checked >&nbsp;문의&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<label for="ext5-2"><INPUT type=radio name='ext5_44' id='ext5-2' VALUE="단기요양가능" <?php if ($ext5_44 == "단기요양가능") echo'checked';?>>&nbsp;단기요양가능&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<label for="ext5-3"><INPUT type=radio name='ext5_44' id='ext5-3' VALUE="단기요양불가" <?php if ($ext5_44 == "단기요양불가") echo'checked';?> >&nbsp;단기요양불가</label>
            </li>

            <li>입소정원</li>
            <li>
                <input name='ext5_03' class="info_input" value='<?php echo $ext5_03?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='입소정원'> 명
            </li>
        </ul>
    </div>
 
<div class="ad_all">
    <div class="cate">
        <?php if ($is_category) { ?>
            <select class="frm_input" name=ca_name required itemname="분류" onchange="expandone()">
                <option value="">메인등록선택
                    <?php echo $category_option?>
                </option>
            </select>

        <?php } ?>
    </div>    

    <!------------선택하세요------------------------------------------------>
    <div id="message_box_0" class="content_box">
        광고 등록을 선택하시면 입력창이 열립니다.
    </div>

    <!-------- 광고등록 안함---->
    <div id="message_box_1" class="content_box">
        게시판 일반등록은 무료입니다.
    </div>

    <!-------- 스페셜등록 ------>
    <div id="message_box_2" class="content_box">
        <div>광고노출일수 : 
    		<select name="wr_3" itemname='광고' class="frm_input" >
    				<option value="">선택하세요</option>
    				<?php
    					 for ($i=-1; $i<366; $i++) {
    						echo("<option value={$i}>" .$i."일"); 
    						echo "</option>";
    						$wr_3 = $i;
    					}
    				?>
    		</select>
        </div>
    </div>

    <!-- 프리미엄등록---------------------------------------------------------------------------------------->
    <div id="message_box_3" class="content_box">
        이 글은 공지입니다.
    </div>

<!--공지----------------------------------------------------------------------------------------->
    <div id="message_box_4" class="content_box">
        이 글은 공지입니다.
    </div>
</div>

<div id="detail" class="detail">
    <div class="write_div">
        <ul>
            <li>인력정보</li>
            <li class="plant_info">
                <div>요양보호사</div>
                <div>사회복지사</div>
                <div>간호(조무)사</div>
                <div>물리치료사</div>
                <div>조리원</div>
                
                <div>
                    <input name='ext5_29' class="info_input" value='<?php echo $ext5_29?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='요양사'> 명
                </div>
                <div>
                    <input name='ext5_27' class="info_input" value='<?php echo $ext5_27?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='복지사'> 명
                </div>
                <div>
                    <input name='ext5_28' class="info_input" value='<?php echo $ext5_28?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='조무사'> 명
                </div>
                <div>
                    <input name='ext5_26' class="info_input" value='<?php echo $ext5_26?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='치료사'> 명
                </div>
                <div>
                    <input name='ext5_30' class="info_input" value='<?php echo $ext5_30?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='조리원'> 명
                </div>
            </li>
        </ul>

        <ul class="info_ul">
            <li>침실정보</li>
            <li class="bed_info">
                    <div>1 인실</div>
                    <div>2 인실</div>
                    <div>3 인실</div>
                    <div>4 인실</div>
                    <div>5 인실</div>
                    <div>6 인실</div>
                    <div>특수침실</div>

                    <div>
                        <input name='ext2_05' class="info_input" value='<?php echo $ext2_05?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='1인실'> 개
                    </div>

                    <div>
                        <input name='ext2_06' class="info_input" value='<?php echo $ext2_06?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='2인실'> 개
                    </div>

                    <div>
                        <input name='ext2_07' class="info_input" value='<?php echo $ext2_07?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='3인실'> 개
                    </div>

                    <div>
                        <input name='ext2_08' class="info_input" value='<?php echo $ext2_08?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='4인실'> 개
                    </div>

                    <div>
                        <input name='ext2_09' class="info_input" value='<?php echo $ext2_09?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='5인실'> 개
                    </div>

                    <div>
                        <input name='ext2_10' class="info_input" value='<?php echo $ext2_10?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='6인실'> 개
                    </div>

                    <div>
                        <input name='ext2_11' class="info_input" value='<?php echo $ext2_11?>' type='text' size='4' maxlength='4' onkeydown='onlyNumber(this);' itemname='특수침실'> 개
                    </div>
            </li>
        </ul>

        <ul class="info_ul">
            <li>비급여</li>
            <li class="cost">
                <div>항목</div>
                <div>금액</div>
                <div>산출근거</div>
                <div>1개월(30일) 합</div>

                <div><input name='ext2_13' class="info_input" value='<?php echo $ext2_13?>' type='text' size='25' itemname='비급여1'></div>
		        <div><input name='ext2_14' class="info_input" onKeyUp="number_format(this)"  value='<?php echo $ext2_14?>' type='text' size='12' itemname='금액1'> 원</div>
		        <div><input name='ext2_15' class="info_input" value='<?php echo $ext2_15?>' type='text' size='25' itemname='근거1'></div>
		        <div><input name='ext5_32' class="info_input" onKeyUp="number_format(this)"  value='<?php echo $ext5_32?>' type='text' size='12' itemname='금액2'> 원</div>

		        <div><input name='ext2_16' class="info_input" value='<?php echo $ext2_16?>' type='text' size='25' itemname='비급여2'></div>
		        <div><input name='ext2_17' class="info_input" onKeyUp="number_format(this)" value='<?php echo $ext2_17?>' type='text' size='12' itemname='금액3'> 원</div>
		        <div><input name='ext2_18' class="info_input"  value='<?php echo $ext2_18?>' type='text' size='25' itemname='근거2'></div>
		        <div><input name='ext5_33' class="info_input" onKeyUp="number_format(this)"  value='<?php echo $ext5_33?>' type='text' size='12' itemname='금액4'> 원</div>

		        <div><input name='ext2_19' class="info_input" value='<?php echo $ext2_19?>' type='text' size='25' itemname='비급여3'></div>
		        <div><input name='ext2_20' class="info_input" onKeyUp="number_format(this)" value='<?php echo $ext2_20?>' type='text' size='12'  itemname='금액5'> 원</div>
		        <div><input name='ext2_21' class="info_input"  value='<?php echo $ext2_21?>' type='text' size='25' itemname='근거3'></div>
		        <div><input name='ext5_34' class="info_input" onKeyUp="number_format(this)"  value='<?php echo $ext5_34?>' type='text' size='12' itemname='금액6'> 원</div>

		        <div><input name='ext2_22' class="info_input" value='<?php echo $ext2_22?>' type='text' size='25' itemname='비급여4'></div>
		        <div><input name='ext2_23' class="info_input" onKeyUp="number_format(this)" value='<?php echo $ext2_23?>' type='text' size='12' itemname='금액7'> 원</div>
		        <div><input name='ext2_24' class="info_input" value='<?php echo $ext2_24?>' type='text' size='25' itemname='근거4'></div>
		        <div><input name='ext5_35' class="info_input" onKeyUp="number_format(this)"  value='<?php echo $ext5_35?>' type='text' size='12' itemname='금액8'> 원</div>

		        <div><input name='ext2_25' class="info_input" value='<?php echo $ext2_25?>' type='text' size='25' itemname='비급여5'></div>
		        <div><input name='ext2_26' class="info_input" onKeyUp="number_format(this)" value='<?php echo $ext2_26?>' type='text' size='12' itemname='금액9'> 원</div>
		        <div><input name='ext2_27' class="info_input"  value='<?php echo $ext2_27?>' type='text' size='25' itemname='근거5'></div>
		        <div><input name='ext5_36' class="info_input" onKeyUp="number_format(this)"  value='<?php echo $ext5_36?>' type='text' size='12' itemname='금액10'> 원</div>
            </li>
        </ul>

        <ul class="info_ul">
            <li>시설정보</li>
            <li class="facility_info">
                <div>물리치료실</div>
                <div>프로그램실</div>
                <div>식당 및 조리실</div>
                <div>화장실</div>
                <div>세면장 및 목욕실</div>
                <div>세탁장 및 건조장</div>
                <div>의료 및 간호사실</div>
                <div>작업 및 훈련실</div>

                <div><input name='ext2_30' class="info_input" value='<?php echo $ext2_30?>' type='text' size='4' onkeydown='onlyNumber(this);' itemname='시설3'> 개</div>
                <div><input name='ext2_31' class="info_input" value='<?php echo $ext2_31?>' type='text' size='4' onkeydown='onlyNumber(this);' itemname='시설4'> 개</div>
                <div><input name='ext2_32' class="info_input" value='<?php echo $ext2_32?>' type='text' size='4' onkeydown='onlyNumber(this);' itemname='시설5'> 개</div>
                <div><input name='ext2_33' class="info_input" value='<?php echo $ext2_33?>' type='text' size='4' onkeydown='onlyNumber(this);' itemname='시설6'> 개</div>
                <div><input name='ext2_34' class="info_input" value='<?php echo $ext2_34?>' type='text' size='4' onkeydown='onlyNumber(this);' itemname='시설7'> 개</div>
                <div><input name='ext2_35' class="info_input" value='<?php echo $ext2_35?>' type='text' size='4' onkeydown='onlyNumber(this);' itemname='시설8'> 개</div>
                <div><input name='ext2_36' class="info_input" value='<?php echo $ext2_36?>' type='text' size='4' onkeydown='onlyNumber(this);' itemname='시설9'> 개</div>
                <div><input name='ext2_28' class="info_input" value='<?php echo $ext2_28?>' type='text' size='4' onkeydown='onlyNumber(this);' itemname='시설1'>  개</div>
            </li>
        </ul>

        <ul class="info_ul">
            <li>프로그램</li>
            <li class="program">
                <div><input name='ext5_21' class="info_input" value='<?php echo $ext5_21?>' type='text' size='28' itemname='pro1'></div>
		        <div><input name='ext5_22' class="info_input" value='<?php echo $ext5_22?>' type='text' size='28' itemname='pro2'></div>
		        <div><input name='ext5_06' class="info_input" value='<?php echo $ext5_06?>' type='text' size='28' itemname='pro3'></div>
                <div><input name='ext5_07' class="info_input" value='<?php echo $ext5_07?>' type='text' size='28' itemname='pro4'></div>
		        <div><input name='ext5_08' class="info_input" value='<?php echo $ext5_08?>' type='text' size='28' itemname='pro5'></div>
		        <div><input name='ext5_09' class="info_input" value='<?php echo $ext5_09?>' type='text' size='28' itemname='pro6'></div>
		        <div><input name='ext5_10' class="info_input" value='<?php echo $ext5_10?>' type='text' size='28' itemname='pro7'></div>
		        <div><input name='ext5_11' class="info_input" value='<?php echo $ext5_11?>' type='text' size='28' itemname='pro8'></div>
		        <div><input name='ext5_12' class="info_input" value='<?php echo $ext5_12?>' type='text' size='28' itemname='pro9'></div>
                <div><input name='ext5_13' class="info_input" value='<?php echo $ext5_13?>' type='text' size='28' itemname='pro10'></div>
		        <div><input name='ext5_14' class="info_input" value='<?php echo $ext5_14?>' type='text' size='28' itemname='pro11'></div>
		        <div><input name='ext5_19' class="info_input" value='<?php echo $ext5_19?>' type='text' size='28' itemname='pro12'></div>
		        <div><input name='ext5_20' class="info_input" value='<?php echo $ext5_20?>' type='text' size='28' itemname='pro13'></div>
		        <div><input name='ext5_17' class="info_input" value='<?php echo $ext5_17?>' type='text' size='28' itemname='pro14'></div>
		        <div><input name='ext5_18' class="info_input" value='<?php echo $ext5_18?>' type='text' size='28' itemname='pro15'></div>
            </li>
        </ul>
    </div>

</div>

    <div class="write_div write_content">
        <ul>
            <li>시설상세</li>
            <li>
            <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?>
        </div>
            </li>
        </ul>
        
        
    </div>

    <!--
    <?//php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
    <div class="bo_w_link write_div">
        <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
        <input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){ echo $write['wr_link'.$i]; } ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
    </div>
    <?//php } ?>
    -->

    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
    <div class="bo_w_flie write_div">
        <div class="file_wr write_div">
            <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-folder-open" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
            <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
        </div>
        <?php if ($is_file_content) { ?>
        <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
        <?php } ?>

        <?php if($w == 'u' && $file[$i]['file']) { ?>
        <span class="file_del">
            <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
        </span>
        <?php } ?>
    </div>
    <?php } ?>


    <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>

    <div class="btn_confirm write_div">
        <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_cancel btn">취소</a>
        <button type="submit" id="btn_submit" accesskey="s" class="btn_submit btn">작성완료</button>
    </div>
    </form>

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
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
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

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

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
</div>
<?php include_once(G5_THEME_PATH.'/tail.php');?>
<!-- } 게시물 작성/수정 끝 -->