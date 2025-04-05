<?php
    $lat = 35.8708222685352; // 초기 중심좌표
    $lng = 128.604621264356; // 초기 중심좌표

    // if($wr_4 == "대구") {
    //     $lat = 35.8708222685352;
    //     $lng = 128.604621264356;
    // }

    // if($wr_4 == "경북") {
    //     $lat = 36.5761205474728;
    //     $lng = 128.505722686385;
    // }
?>
<style>
.specialoverlay { background-color:#0077b6; padding:10px; position:relative; bottom:45px; border-radius:6px; border:1px solid #CCC; border-bottom:2px solid #ddd; }
.specialoverlay:nth-of-type(n) { border:0; box-shadow:0px 1px 2px #888; }
.specialoverlay span { display:block; color:#FFF; padding:3px; }
.specialoverlay span.s_title { font-weight:500; color:#FFF; }

.customoverlay { background-color:#fff; padding:10px; position:relative; bottom:45px; border-radius:6px; border:1px solid #CCC; border-bottom:2px solid #ddd; }
.customoverlay:nth-of-type(n) { border:0; box-shadow:0px 1px 2px #888; }
.customoverlay span { display:block; }
.customoverlay span.n_title { font-weight:200; }
</style>

<div id="map" style="width: 100%; height: 100vh; margin:0;"></div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=64e74f542c1e9edef0ec072083777a14&libraries=services"></script>

<script>
var mapContainer = document.getElementById('map'),
    mapOption = {
        center: new kakao.maps.LatLng(<?php echo $lat ?>, <?php echo $lng ?>),
        level: 5
    };

var map = new kakao.maps.Map(mapContainer, mapOption);

// 컨트롤 추가
map.addControl(new kakao.maps.MapTypeControl(), kakao.maps.ControlPosition.TOPLEFT);
map.addControl(new kakao.maps.ZoomControl(), kakao.maps.ControlPosition.LEFT);

// PHP 마커 처리
<?php
// 기본값 처리: wr_1이 없으면 전체 마커 표시 가능하도록
$types = isset($_GET['wr_1']) ? $_GET['wr_1'] : [];

// SQL 시작
$sql = "SELECT * FROM g5_write_{$bo_table} WHERE wr_8 != '' AND wr_9 != ''";

// wr_1 필터가 있다면 추가
if (!empty($types)) {
    $conditions = array_map(function($type) {
        return "wr_1 LIKE '%" . addslashes($type) . "%'";
    }, $types);
    $sql .= " AND (" . implode(" OR ", $conditions) . ")";
}

// 정렬
$sql .= " ORDER BY wr_id ASC";

// 실행
$result = sql_query($sql);
$cnt = 0;

while ($row = sql_fetch_array($result)) {
    if ($row['wr_8'] && $row['wr_9']) {
?>
    <?php if($row['ca_name'] == "등록안함") { ?>
        var imageSrc = '<?php echo $board_skin_url ?>/img/markerStar1.png',
    <?php } else if($row['ca_name'] == "메인등록") { ?>
        var imageSrc = '<?php echo $board_skin_url ?>/img/markerStar2.png',
    <?php } else { ?>
        var imageSrc = '<?php echo $board_skin_url ?>/img/markerStar3.png',
    <?php } ?>

    imageSize = new kakao.maps.Size(24, 35),
    imageOption = {offset: new kakao.maps.Point(12, 35)},
    markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
    markerPosition = new kakao.maps.LatLng(<?php echo $row['wr_8'] ?>, <?php echo $row['wr_9'] ?>);

    var marker = new kakao.maps.Marker({
        position: markerPosition,
        image: markerImage
    });

    marker.setMap(map);

    <?php if ($row['wr_3'] > 0) { ?>
        var content = "<div class='specialoverlay'>" +
            "<a href='#' onclick=\"openModal('<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>&wr_id=<?php echo $row['wr_id']; ?>')\">" +
            "<span>NO. <?php echo $row['wr_num'] * (-1); ?></span>" +
            "</a>" +
            "<a href='#' onclick=\"openModal('<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>&wr_id=<?php echo $row['wr_id']; ?>')\">" +
            "<span class='s_title'><?php echo $row['wr_subject']; ?></span></a>";
    <?php } else { ?>
        var content = "<div class='customoverlay'>" +
            "<a href='#' onclick=\"openModal('<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>&wr_id=<?php echo $row['wr_id']; ?>')\">" +
            "<span>NO. <?php echo $row['wr_num'] * (-1); ?></span>" +
            "</a>" +
            "<a href='#' onclick=\"openModal('<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>&wr_id=<?php echo $row['wr_id']; ?>')\">" +
            "<span class='n_title'><?php echo $row['wr_subject']; ?></span></a>";
    <?php } ?>

    content += "</div>";

    var position = new kakao.maps.LatLng(<?php echo $row['wr_8'] ?>, <?php echo $row['wr_9'] ?>);

    var customOverlay = new kakao.maps.CustomOverlay({
        map: map,
        position: position,
        content: content,
        yAnchor: 1
    });

<?php
        $cnt++;
    }
}
?>
</script>


64e74f542c1e9edef0ec072083777a14

광주
---------------------
동구 서구 남구 북구 광산구

전북
------------------------
전주시 군산시 익산시 정읍시 남원시 
김제시 완주군 진안군 무주군 장수군
임실군 순창군 고창군 부안군


전남
---------------------------
목포시 여수시 순천시 나주시 광양시 
담양군 곡성군 구례군 고흥군 보성군
화순군 장흥군 강진군 해남군 영암군
무안군 함평군 영광군 장성군 완도군
진도군 신안군



UPDATE g5_write_c_daegu
SET wr_1 = REPLACE(wr_1, ' ', '') 
WHERE wr_1 LIKE '%동  구%';


UPDATE g5_write_c_daegu
SET wr_1 = TRIM(TRAILING '.' FROM wr_1)
WHERE wr_1 LIKE '%.';

<?php
// 1차 카테고리 값 가져오기
$category1 = isset($_GET['wr_4']) ? trim($_GET['wr_4']) : "";

// 2차 카테고리 값 가져오기 (배열 형태)
$types = isset($_GET['wr_1']) ? $_GET['wr_1'] : [];

// SQL 기본 쿼리
$sql = "SELECT * FROM g5_write_".$bo_table;

$conditions = [];

// 1차 카테고리가 선택된 경우만 조건 추가
if ($category1 !== "") { 
    $conditions[] = "wr_4 = '" . addslashes($category1) . "'";
}

// 2차 카테고리가 선택된 경우만 조건 추가
if (!empty($types)) {
    $typeConditions = array_map(function($type) {
        return "wr_1 LIKE '%" . addslashes($type) . "%'";
    }, $types);
    $conditions[] = "(" . implode(" OR ", $typeConditions) . ")";
}

// WHERE 조건이 존재하면 추가
if (!empty($conditions)) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}

// 정렬 조건 추가
//$sql .= " ORDER BY wr_id ASC";

// SQL 디버깅 출력
//echo "<pre>SQL: " . $sql . "</pre>";

// 쿼리 실행
$result = sql_query($sql);
$cnt = 0;

while ($row = sql_fetch_array($result)) { 
    if ($row['wr_8'] && $row['wr_9']) {
        // 지도 마커 생성 등의 작업 수행
?>
<input type="radio" name="wr_4" id="all" value="" <?php if($_GET['wr_4'] == ""){ echo 'checked'; } ?>><label for="all"> 전체</label>
<input type="radio" id="city01" name="wr_4" value="광주" <?php if($_GET['wr_4'] == "광주"){ echo 'checked'; } ?>>&nbsp;<label for="city01"> 광주광역시</label>
<input type="radio" id="city02" name="wr_4" value="전북" <?php if($_GET['wr_4'] == "전북"){ echo 'checked'; } ?>>&nbsp;<label for="city02"> 전북</label>
<input type="radio" id="city03" name="wr_4" value="전남" <?php if($_GET['wr_4'] == "전남"){ echo 'checked'; } ?>>&nbsp;<label for="city03"> 전남</label>

<!-- 광주광역시 -->
<div class="conbox con1">
<ul class="gugun">
    <li><label><input type="checkbox" id="kwangju_all"> 전체선택</label></li>
    <li><label><input type="checkbox" name="wr_1[]" value="동구"> 동구</label></li>
    <li><label><input type="checkbox" name="wr_1[]" value="서구"> 서구</label></li>
    <li><label><input type="checkbox" name="wr_1[]" value="남구"> 남구</label></li>
    <li><label><input type="checkbox" name="wr_1[]" value="북구"> 북구</label></li>
    <li><label><input type="checkbox" name="wr_1[]" value="광산구"> 광산구</label></li>
</ul>
</div>



















