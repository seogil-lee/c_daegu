<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/y_info.css">', 0);

//include_once(G5_THEME_PATH.'/head.php');
?>
<?php
$ex5_filed = explode("|",$view['wr_5']); 
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
$ext5_32  = $ex5_filed[32];
$ext5_33  = $ex5_filed[33];
$ext5_34  = $ex5_filed[34];
$ext5_35  = $ex5_filed[35];
$ext5_36  = $ex5_filed[36];
$ext5_37  = $ex5_filed[37];
$ext5_38  = $ex5_filed[38];
$ext5_39  = $ex5_filed[39];
$ext5_40  = $ex5_filed[40];
$ext5_41  = $ex5_filed[41];
$ext5_42  = $ex5_filed[42];
$ext5_43  = $ex5_filed[43];
$ext5_44  = $ex5_filed[44];
$ext5_45  = $ex5_filed[45];

$ex2_filed = explode("|",$view['wr_2']); 
$ext2_00  = $ex2_filed[0];//요양원 입소정원
$ext2_01  = $ex2_filed[1];//요양원 현원남
$ext2_02  = $ex2_filed[2];//요양원 현원여
$ext2_03  = $ex2_filed[3];//요양원 대기남
$ext2_04  = $ex2_filed[4];//요양원 대기여
$ext2_05  = $ex2_filed[5];//요양원 침실1인실
$ext2_06  = $ex2_filed[6];//요양원 침실2
$ext2_07  = $ex2_filed[7];//요양원 침실3
$ext2_08  = $ex2_filed[8];//요양원 침실4
$ext2_09  = $ex2_filed[9];//요양원 침실5
$ext2_10  = $ex2_filed[10];//요양원 침실6
$ext2_11  = $ex2_filed[11];//요양원 특수침실
$ext2_12  = $ex2_filed[12];//요양원 침실기타
$ext2_13  = $ex2_filed[13];//요양원 비급여
$ext2_14  = $ex2_filed[14];//요양원 비급여
$ext2_15  = $ex2_filed[15];//요양원 비급여
$ext2_16  = $ex2_filed[16];//요양원 비급여
$ext2_17  = $ex2_filed[17];//요양원 비급여
$ext2_18  = $ex2_filed[18];//요양원 비급여
$ext2_19  = $ex2_filed[19];//요양원 비급여
$ext2_20  = $ex2_filed[20];//요양원 비급여
$ext2_21  = $ex2_filed[21];//요양원 비급여
$ext2_22  = $ex2_filed[22];//요양원 비급여
$ext2_23  = $ex2_filed[23];//요양원 비급여
$ext2_24  = $ex2_filed[24];//요양원 비급여
$ext2_25  = $ex2_filed[25];//요양원 비급여
$ext2_26  = $ex2_filed[26];//요양원 비급여
$ext2_27  = $ex2_filed[27];//요양원 비급여
$ext2_28  = $ex2_filed[28];//요양원 시설
$ext2_29  = $ex2_filed[29];//요양원 시설
$ext2_30  = $ex2_filed[30];//요양원 시설
$ext2_31  = $ex2_filed[31];//요양원 시설
$ext2_32  = $ex2_filed[32];//요양원 시설
$ext2_33  = $ex2_filed[33];//요양원 시설
$ext2_34  = $ex2_filed[34];//요양원 시설
$ext2_35  = $ex2_filed[35];//요양원 시설
$ext2_36  = $ex2_filed[36];//요양원 시설
$ext2_37  = $ex2_filed[37];//요양원 평가등급
$ext2_38  = $ex2_filed[38];
$ext2_39  = $ex2_filed[39];
$ext2_40  = $ex2_filed[40];
$ext2_41  = $ex2_filed[41];
$ext2_42  = $ex2_filed[42];
$ext2_43  = $ex2_filed[43];
$ext2_44  = $ex2_filed[44];
$ext2_45  = $ex2_filed[45];

if ($view['wr_3']>=0){
	$current_time = date("Y-m-d",time()); //오늘날짜출력 
	$notice_time  = $view['wr_7'];
										
	$last_time =  intval((strtotime($notice_time)- strtotime($current_time)) / 86400); // 나머지 날짜값
	}
?>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->
<div class="list_one">
<article id="bo_v" style="width:<?php echo $width; ?>">
    <section id="bo_v_info">

       	<!-- 게시물 상단 버튼 시작 { -->
	    <div id="bo_v_top">
            <div class="scrap_div">
                <span><?php echo $view['wr_subject']; // 글제목 출력?></span><br>
            </div>

	        <?php ob_start(); ?>

	        <ul class="btn_bo_user bo_v_com">
				<li><a href="<?php echo $list_href ?>" class="btn_b01 btn" title="목록"><i class="fa fa-list" aria-hidden="true"></i><span class="sound_only">목록</span></a></li>
	            <!-- <?//php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01 btn" title="답변"><i class="fa fa-reply" aria-hidden="true"></i><span class="sound_only">답변</span></a></li><?//php } ?> -->
	            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
	        	<?php if($update_href || $delete_href || $copy_href || $move_href || $search_href) { ?>
	        	<li>
	        		<button type="button" class="btn_more_opt is_view_btn btn_b01 btn"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
		        	<ul class="more_opt is_view_btn"> 
			            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>">수정<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li><?php } ?>
			            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;">삭제<i class="fa fa-trash-o" aria-hidden="true"></i></a></li><?php } ?>
			            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" onclick="board_move(this.href); return false;">복사<i class="fa fa-files-o" aria-hidden="true"></i></a></li><?php } ?>
			            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" onclick="board_move(this.href); return false;">이동<i class="fa fa-arrows" aria-hidden="true"></i></a></li><?php } ?>
			            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>">검색<i class="fa fa-search" aria-hidden="true"></i></a></li><?php } ?>
			        </ul> 
	        	</li>
	        	<?php } ?>
	        </ul>

	        <script>
            jQuery(function($){
                // 게시판 보기 버튼 옵션
				$(".btn_more_opt.is_view_btn").on("click", function(e) {
                    e.stopPropagation();
				    $(".more_opt.is_view_btn").toggle();
				});

                $(document).on("click", function (e) {
                    if(!$(e.target).closest('.is_view_btn').length) {
                        $(".more_opt.is_view_btn").hide();
                    }
                });
            });
            </script>

	        <?php
	        $link_buttons = ob_get_contents();
	        ob_end_flush();
			?>

	    </div>
	    <!-- } 게시물 상단 버튼 끝 -->
    </section>

    <div class="map_contain">
        <?php include_once "$board_skin_path/map/roadview_mapToggle.php";?>
    </div>

    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>
        <div id="bo_v_share">
        	<?php include_once(G5_SNS_PATH."/view.sns.skin.php"); ?>
	    </div>

        <div class="basic_info">
            <div><span>시설명</span></div>
            <div>
                <?php echo $view['wr_subject'];?>
                <?php if ($scrap_href) { ?>
                    <span>
                        <a href="<?php echo $scrap_href;  ?>" target="_blank" class="scr_btn" onclick="win_scrap(this.href); return false;">
                        <i class="fa fa-bookmark" aria-hidden="true"></i> 스크랩</a>
                    </span>
                <?php } ?>
            </div>

            <div><span>주소</span></div>
            <div>
                <?php echo $view['wr_4'];?> <?php echo $ext5_05;?>
                <a href="https://map.kakao.com/link/map/<?php echo $view['wr_subject'];?>,<?php echo $view['wr_8']?>,<?php echo $view['wr_9']?>", target="_blank">
                    <span class="add_span"><i class="fa-solid fa-location-dot"></i> 지도</span>
                </a>
            </div>

            <div><span>전화번호</span></div>
            <div class="tel_no">
                <?php echo $ext5_00;?> - <?php echo $ext5_01;?> - <?php echo $ext5_02;?>
                <a href="tel:<?php echo $ext5_00;?><?php echo $ext5_01;?><?php echo $ext5_02;?>"><span>전화상담</span></a>
            </div>

            <div><span>정원</span></div>
            <div><?php echo $ext5_03;?> 명</div>

            <div><span>요양시설평가</span></div>
            <div><?php echo $ext2_37;?></div>
            
            <div><span>단기요양</span></div>
            <div><?php echo $ext5_31;?></div>

            <div><span>홈페이지</span></div>
            <div>
                <?php
			    	// 링크
			    	$cnt = 0;
			    	for ($i=1; $i<=count($view['link']); $i++) {
			    		if ($view['link'][$i]) {
			    			$cnt++;
			    			$link = cut_str($view['link'][$i], 30);
			    ?>
    
			    			<a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
			    				<img src="<?php echo $board_skin_url ?>/img/icon_link.gif" alt="관련링크">
			    				<strong><?php echo $link ?></strong>
			    			</a>
			    			<!--<span class="bo_v_link_cnt"><?//php echo $view['link_hit'][$i] ?>회 연결</span>-->
                        
			    	<?php
			    		}
			    	}
				 ?>
            </div>
        </div>

    <?php if($view['wr_3'] > 0) {?>
        <div class="particular_info">
            <p>인력정보</p>
            <div class="personnel">
                <div>요양보호사</div>
                <div>사회복지사</div>
                <div>간호(조무)사</div>
                <div>물리치료사</div>
                <div>조리원</div>

                <div><?php echo $ext5_29;?> 명</div>
                <div><?php echo $ext5_27;?> 명</div>
                <div><?php echo $ext5_28;?> 명</div>
                <div><?php echo $ext5_26;?> 명</div>
                <div><?php echo $ext5_30;?> 명</div>
            </div>

            <p>침실정보</p>
            <div class="bedroom">
                <div>1 인실</div>
                <div>2 인실</div>
                <div>3 인실</div>
                <div>4 인실</div>
                <div>5 인실</div>
                <div>6 인실</div>
                <div>특수침실</div>

                <div><?php echo $ext2_05;?> 개</div>
                <div><?php echo $ext2_06;?> 개</div>
                <div><?php echo $ext2_07;?> 개</div>
                <div><?php echo $ext2_08;?> 개</div>
                <div><?php echo $ext2_09;?> 개</div>
                <div><?php echo $ext2_10;?> 개</div>
                <div><?php echo $ext2_11;?> 개</div>
            </div>

            <p>시설정보</p>
            <div class="health">
                <div class="a">물리치료실</div>
                <div class="b">프로그램실</div>
                <div class="c">식당 및 조리실</div>
                <div class="d">화장실</div>
                <div class="e">세면장 및 목욕실</div>
                <div class="f">세탁장 및 건조장</div>
                <div class="g">의료 및 간호사실</div>
                <div class="h">작업 및 훈련실</div>

                <div class="i"><?php echo $ext2_30?> 개</div>
                <div class="j"><?php echo $ext2_31?> 개</div>
                <div class="k"><?php echo $ext2_32?> 개</div>
                <div class="l"><?php echo $ext2_33?> 개</div>
                <div class="m"><?php echo $ext2_34?> 개</div>
                <div class="n"><?php echo $ext2_35?> 개</div>
                <div class="o"><?php echo $ext2_36?> 개</div>
                <div class="p"><?php echo $ext2_28?> 개</div>
            </div>

            <p>프로그램</p>
            <div class="program_info">
                <div class="a1"><?php echo $ext5_21?></div>
                <div class="b1"><?php echo $ext5_22?></div>
                <div class="c1"><?php echo $ext5_06?></div>
                <div class="d1"><?php echo $ext5_07?></div>
                <div class="e1"><?php echo $ext5_08?></div>

                <div class="f1"><?php echo $ext5_09?></div>
                <div class="g1"><?php echo $ext5_10?></div>
                <div class="h1"><?php echo $ext5_11?></div>
                <div class="i1"><?php echo $ext5_12?></div>
                <div class="j1"><?php echo $ext5_13?></div>

                <div class="k1"><?php echo $ext5_14?></div>
                <div class="l1"><?php echo $ext5_19?></div>
                <div class="m1"><?php echo $ext5_20?></div>
                <div class="n1"><?php echo $ext5_17?></div>
                <div class="o1"><?php echo $ext5_18?></div>
            </div>

            <p>비급여</p>
            <div class="no_backup">
                <div>항목</div>
                <div>금액</div>
                <div>산출근거</div>
                <div>1개월(30일) 합</div>

                <div><?php echo $ext2_13?></div>
                <div><?php echo $ext2_14?> 원</div>
                <div><?php echo $ext2_15?></div>
                <div><?php echo $ext5_32?> 원</div>

                <div><?php echo $ext2_16?></div>
                <div><?php echo $ext2_17?> 원</div>
                <div><?php echo $ext2_18?></div>
                <div><?php echo $ext5_33?> 원</div>

                <div><?php echo $ext2_19?></div>
                <div><?php echo $ext2_20?> 원</div>
                <div><?php echo $ext2_21?></div>
                <div><?php echo $ext5_34?> 원</div>

                <div><?php echo $ext2_22?></div>
                <div><?php echo $ext2_23?> 원</div>
                <div><?php echo $ext2_24?></div>
                <div><?php echo $ext5_35?> 원</div>

                <div><?php echo $ext2_25?></div>
                <div><?php echo $ext2_26?> 원</div>
                <div><?php echo $ext2_27?></div>
                <div><?php echo $ext5_36?> 원</div>
            </div>

        </div>
    <?php }?>

        <div class="img_box">
            <?php if($view['file'][0]['view']){
                include_once "$board_skin_path/img_view.php";
                }
            ?>
        </div>

        <div class="img_box_sm">
            <?php
            // 파일 출력
            $v_img_count = count($view['file']);
            if($v_img_count) {

                echo "<div class=\"img_container\">\n";
                    for ($i=0; $i<=count($view['file']); $i++) {
                        echo "<div class=\"bo_s_img\">\n";
                        echo get_file_thumbnail($view['file'][$i]);
                            if ($view['file'][$i]['content']) {  // 파일 설명을 입력했을 경우
                                echo "<div class='img_con'>".$view['file'][$i]['content']."</div>";
                                }
                        echo "</div>\n";
                    }
                echo "</div>\n";
                
                }
            ?>
            <script>
                function adjustCaptionWidth() {
                    document.querySelectorAll(".bo_s_img").forEach(function(container) {
                        let img = container.querySelector("img");
                        let caption = container.querySelector(".img_con");
                    
                        if (img && caption) {
                            caption.style.width = img.clientWidth + "px"; // 이미지 가로 크기
                        }
                    });
                }
            
                document.addEventListener("DOMContentLoaded", adjustCaptionWidth);
                //반응형
                window.addEventListener("resize", adjustCaptionWidth);
            </script>
        </div>

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>


        <!--  추천 비추천 시작 { -->
        <?php if ( $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <!-- }  추천 비추천 끝 -->
    </section>
    
    <?php
    $cnt = 0;
    if ($view['file']['count']) {
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
	?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
               	<i class="fa fa-folder-open" aria-hidden="true"></i>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong> <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <br>
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

    <?php if(isset($view['link']) && array_filter($view['link'])) { ?>
    <!-- 관련링크 시작 { -->
    <section id="bo_v_link">
        <h2>관련링크</h2>
        <ul>
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
            ?>
            <li>
                <i class="fa fa-link" aria-hidden="true"></i>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    <strong><?php echo $link ?></strong>
                </a>
                <br>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
            <?php
            }
        }
        ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>
   
    <ul class="btn_bo_user bo_v_com">
		<li><a href="<?php echo $list_href ?>" class="btn_b01 btn" title="목록"><i class="fa fa-list" aria-hidden="true"></i><span class="sound_only">목록</span></a></li>
    </ul>
    
    <?php if ($prev_href || $next_href) { ?>
    <ul class="bo_v_nb">
        <?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tit"><i class="fa fa-chevron-up" aria-hidden="true"></i> 이전글</span><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a> <span class="nb_date"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span></li><?php } ?>
        <?php if ($next_href) { ?><li class="btn_next"><span class="nb_tit"><i class="fa fa-chevron-down" aria-hidden="true"></i> 다음글</span><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a>  <span class="nb_date"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span></li><?php } ?>
    </ul>
    <?php } ?>

    <?php
    // 코멘트 입출력
    include_once(G5_BBS_PATH.'/view_comment.php');
	?>
</article>
<!-- } 게시판 읽기 끝 -->
</div>

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->