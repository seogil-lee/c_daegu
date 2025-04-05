<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');
include_once($board_skin_path."/skin.lib.php");

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/y_info.css">', 0);
//add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/map.style_sale.css">', 1);
?>

<div id="modalDiv" onclick="style.display='none';innerHTML=''"></div>

<script>
parentModal = 1;

function modalMode(modal) {
    parentModal = 0;
    modalDiv.style.display = "block";
    modalDiv.innerHTML = "<div><iframe src='" + modal +
        "'></iframe><span><img src='<?php echo $board_skin_url;?>/img/close.png'></span></div>";
}

if (!parent.parentModal) {
    document.addEventListener("DOMContentLoaded", () => {
        for (modal_span of document.querySelectorAll(".modal-span")) modal_span.style.display = "none";
    });
}

function openModal(url) {
    modalMode(url);
}
</script>
<!-- Modal Window End -->

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<div class="list_content">
    <!-- 지도영역  -->
    <div class="map_container">
        <?php include_once "$board_skin_path/map/list_map.php";?>
        <div class="map_top">
            <button class="toggle_button" onclick="toggleSidebar()"></button>
        </div>
    </div>
    <!-- 지도영역 끝 -->

    <!-- 사이드바 시작 -->
    <div class="side_bar">
        <!-- 게시판 목록 시작 { -->
        <div id="bo_list" style="width:<?php echo $width; ?>">
            <div class="sidebar_top">
                <div><a href="<?php echo G5_URL?>"><i class="fa-solid fa-house"></i> HOME</a></div>
                <?php
                $current_table = isset($_GET['bo_table']) ? $_GET['bo_table'] : '';
            ?>
            <div>
                <select class="info_input" onchange="window.open(this.value,'_self');">
                    <option>지역별 요양원 검색</option>
                    <option value="<?= G5_BBS_URL; ?>/board.php?bo_table=y_seoul" <?= ($current_table == 'y_seoul') ? 'selected' : ''; ?>>서울</option>
                    <option value="<?= G5_BBS_URL; ?>/board.php?bo_table=y_incheon" <?= ($current_table == 'y_incheon') ? 'selected' : ''; ?>>인천 · 경기</option>
                    <option value="<?= G5_BBS_URL; ?>/board.php?bo_table=y_daejeon" <?= ($current_table == 'y_daejeon') ? 'selected' : ''; ?>>대전 · 세종 · 충남 · 충북</option>
                    <option value="<?= G5_BBS_URL; ?>/board.php?bo_table=y_kwangju" <?= ($current_table == 'y_kwangju') ? 'selected' : ''; ?>>광주 · 전북 · 전남</option>
                    <option value="<?= G5_BBS_URL; ?>/board.php?bo_table=y_daegu" <?= ($current_table == 'y_daegu') ? 'selected' : ''; ?>>대구 · 경북</option>
                    <option value="<?= G5_BBS_URL; ?>/board.php?bo_table=y_woolsan" <?= ($current_table == 'y_woolsan') ? 'selected' : ''; ?>>울산 · 경남</option>
                    <option value="<?= G5_BBS_URL; ?>/board.php?bo_table=y_busan" <?= ($current_table == 'y_busan') ? 'selected' : ''; ?>>부산 · 제주</option>
                    <option value="<?= G5_BBS_URL; ?>/board.php?bo_table=y_gangwon" <?= ($current_table == 'y_gangwon') ? 'selected' : ''; ?>>강원</option>
                </select>
            </div>
            </div>
            <!-- 검색시작 -->
            <form name="fsearch" method="get">
            	<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">        
            	<input type="hidden" name="sop" value="and">
            	<label for="sfl" class="sound_only">검색대상</label>

            	<div class="search_box">
                    <div class="search_title">대구 &bull; 경북지역 요양원검색</div>

                    <div class="tab_content">
                        <input type="radio" name="wr_4" id="all" value="" <?php if($_GET['wr_4'] == ""){ echo 'checked'; } ?>><label for="all"> 전체</label>
				        <input type="radio" id="city01" name="wr_4" value="대구" <?php if($_GET['wr_4'] == "대구"){ echo 'checked'; } ?>>&nbsp;<label for="city01"> 대구광역시</label>
				        <input type="radio" id="city02" name="wr_4" value="경북" <?php if($_GET['wr_4'] == "경북"){ echo 'checked'; } ?>>&nbsp;<label for="city02"> 경북</label>
                        <!-- 대구광역시 -->
                        <div class="conbox con1">
                            <?php include_once($board_skin_path."/region/daegu.html");?>
                        </div>
                        <!-- 경북 -->
                        <div class="conbox con2">
                            <?php include_once($board_skin_path."/region/kyeongbuk.html");?>
                        </div>
                    </div>
                <script>
			    	var str_wr_1 = "<?php echo @implode('|',$_GET['wr_1'])?>";
			    	$("input:checkbox[name='wr_1[]']").each(function(index){
			    		if(str_wr_1.indexOf($(this).val()) > -1){
			    			$(this).attr("checked", true);
			    		}
			    	});
			    </script>

                <div class="field_scr">
                    <div>검색어</div>
                    <div>
                            <select name="sfl" id="sfl" style='display:none;'>
                            <!-- <option value="wr_subject" <?php echo get_selected($sfl, 'wr_subject'); ?>>시설명</option> -->
                            <option value="wr_subject||wr_content||wr_4" <?php echo get_selected($sfl, 'wr_subject'); ?>>통합검색</option>
                            </select>
                            <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" id="stx" class="info_input" 
                                size="25" maxlength="20" placeholder=" 검색어를 입력해주세요">
                    </div>
                </div>
                    <div class="scr_down">
                        <ul>
                            <li><input type="submit" onclick="removeCommaAndSubmit()" value="검색" class='in_btn btn--blue'></li>
                            <li><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=<?php echo $bo_table;?>">초기화</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        <!-- 검색 끝  -->

            <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="spt" value="<?php echo $spt ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sst" value="<?php echo $sst ?>">
                <input type="hidden" name="sod" value="<?php echo $sod ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">
                <input type="hidden" name="sw" value="">

                <!-- 게시판 페이지 정보 및 버튼 시작 { -->
                <div id="bo_btn_top">
                    <div id="bo_list_total">
                        <span>Total <?php echo number_format($total_count) ?>건</span>
                        <?php echo $page ?> 페이 지
                    </div>

                    <ul class="btn_bo_user">
                    	<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
                        <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
                        <li>
                        	<button type="button" class="btn_bo_sch btn_b01 btn" title="게시판 검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">게시판 검색</span></button>
                        </li>
                        <?php if ($write_href) { ?>
                        <li>
                            <a href=<?php echo $write_href ?> class="btn_b01 btn" title="글쓰기">
                             <i class="fa fa-pencil" aria-hidden="true"></i>
                                <span class="sound_only">글쓰기</span>
                            </a>
                        </li>                        
                        <?php } ?>
                    	<?php if ($is_admin == 'super' || $is_auth) {  ?>
                    	<li>
                    		<button type="button" class="btn_more_opt is_list_btn btn_b01 btn" title="게시판 리스트 옵션"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
                    		<?php if ($is_checkbox) { ?>	
	            	        <ul class="more_opt is_list_btn">  
	            	            <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
	            	            <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
	            	            <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
	            	        </ul>
	            	        <?php } ?>
                    	</li>
                    	<?php }  ?>
                    </ul>
                </div>
                <!-- } 게시판 페이지 정보 및 버튼 끝 -->
                            
                <div class="all_chk chk_box list_chk">
                    <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                    <label for="chkall">
                    	<span></span>
                    	<b class="sound_only">현재 페이지 게시물  전체선택</b>
	        		</label>
                </div>
                <div class="list_container">
                    <?php for ($i=0; $i<count($list); $i++) { ?>
                         <ul>
                            <li>
                                <?php if ($is_checkbox) { ?>
                                    <div class="td_chk chk_box">
	        		                	<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
                                    	<label for="chk_wr_id_<?php echo $i ?>">
                                    		<span></span>
                                    		<b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
                                    	</label>
                                    </div>
                                <?php } ?>
                                <div>
                                    <?php
                                        if ($list[$i]['is_notice']) // 공지사항
                                            echo '<img src="'.$board_skin_url.'/img/star.png">';
                                        else if ($wr_id == $list[$i]['wr_id'])
                                            echo "<span class=\"bo_current\">열람중</span>";
                                        else
                                            echo $list[$i]['num'];
                                        ?>
                                    </div>
                            </li>
                                
                            <?php if($list[$i]['wr_3'] > 0) {?>
                                <li class="spe_list">
                                    <?php
                                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], 180, 100, false, true);
                                        if($thumb['src']) {
                                            $img_content = '<img class="thumbs" src="'.$thumb['src'].'" alt="'.$thumb['alt'].'">';
                                        } else {
                                           //$img_content = '<img class="thumbs no_img" src = "'.$board_skin_url.'/img/no_img.png">';
                                           $img_content = '<p>NO IMAGE</p>';
                                        }
                                        echo '<a href="'.$list[$i]['href'].'">';
                                        echo $img_content;
                                        echo '</a>';
                                    ?>
                                </li>
                            <?php }?>
                                    
                            <?php if($list[$i]['wr_3'] <= 0) {?>
                                <li class="empty_li">
                                    <p>careinfo.kr</p>
                                </li>
                            <?php }?>
                            
                            <li>
                                <div class="subj">
                                    <span>
                                        <a href="<?php echo $list[$i]['href']?>">
                                            <?php echo $list[$i]['subject'] ?>
                                        </a>
                                    </span>
                                    <?php
                                        if ($list[$i]['wr_3']>0){
                                            $current_time = date("Y-m-d",time()); //오늘날짜출력 
                                            $notice_time  = $list[$i]['wr_7'];
                                        
                                            $last_time =  intval((strtotime($notice_time)- strtotime($current_time)) / 86400); // 나머지 날짜값
                                            }
                                        
                                           if($last_time >= 0 && $list[$i]['wr_3'] >0){ 
                                           echo "<span class='spe'>";
                                           echo $last_time;
                                           echo "</span>";
                                       }
                                       else if($last_time < 0 && $list[$i]['wr_3'] >0){
                                           echo "<span class='spe'>";
                                           echo "마감";
                                           echo "</span>";
                                       }
                                    ?>
                                </div>
                                <div class="addr">
                                    <span>
                                        <a href="<?php echo $list[$i]['href']?>"><?php echo $list[$i]['wr_4'] ?></a>
                                    </span>
                                </div>
                                <?php
                                    $ex5_filed = explode("|",$list[$i]['wr_5']); 
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
                                ?>
                                <div class="explain">
                                    <span>
                                        <a href="<?php echo $list[$i]['href']?>">
                                            <i class="fa-solid fa-phone"></i> <?php echo $ext5_00 ?> - <?php echo $ext5_01 ?> - <?php echo $ext5_02 ?>
                                        </a>
                                    </span>&nbsp;&nbsp;
                                    정원 : <?php echo $ext5_03;?> 명
                                </div>
                            </li>
                        </ul>
                                   
                    <?php }?>
                                   
                    <?php if (count($list) == 0) { echo "<div style='width:100%;height:200px;text-align:center;line-height:200px;'>게시물이 없습니다.</div>"; } ?>
                </div>
            </form>
            <!-- 페이지 -->
            <?php echo $write_pages; ?>
            <!-- 페이지 -->

    
            <?php if ($list_href || $is_checkbox || $write_href) { ?>
            <div class="bo_fx">
                <?php if ($list_href || $write_href) { ?>
                <ul class="btn_bo_user">
                	<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
                    <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
                    <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
                </ul>	
                <?php } ?>
            </div>
            <?php } ?>   


    <!-- 게시판 검색 시작 { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <h3>검색</h3>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">검색대상</label>
            <select name="sfl" id="sfl">
                <?php echo get_board_sfl_select_options($sfl); ?>
            </select>
            <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해주세요">
                <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </div>
            <button type="button" class="bo_sch_cls" title="닫기"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">닫기</span></button>
            </form>
        </fieldset>
        <div class="bo_sch_bg"></div>
    </div>
    <script>
        jQuery(function($){
            // 게시판 검색
            $(".btn_bo_sch").on("click", function() {
                $(".bo_sch_wrap").toggle();
            })
            $('.bo_sch_bg, .bo_sch_cls').click(function(){
                $('.bo_sch_wrap').hide();
            });
        });
    </script>
    <!-- } 게시판 검색 끝 --> 
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->


    </div>
    <!-- 사이드 바 끝 -->
</div>

<script>
function toggleSidebar() {
    const listContainer = document.querySelector('.list_content');

    listContainer.classList.toggle('hide_sidebar');
    const isSidebarHidden = listContainer.classList.contains('hide_sidebar');

    // 이미지 경로 변경
    const toggleButton = document.querySelector('.toggle_button');
    toggleButton.style.backgroundImage = isSidebarHidden ? "url('<?php echo $board_skin_url;?>/img/open.png')" : "url('<?php echo $board_skin_url;?>/img/close.png')";
}
</script>

