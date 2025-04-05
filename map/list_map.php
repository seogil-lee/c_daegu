<?php
$lat = 35.8708222685352; // 초기 중심좌표 (대구)
$lng = 128.604621264356;

if ($wr_4 == "경북") {
    $lat = 36.5761205474728;
    $lng = 128.505722686385;
}
?>

<style>
.specialoverlay {
    background-color:#0077b6;
    padding:10px;
    position:relative;
    bottom:45px;
    border-radius:6px;
    border:1px solid #CCC;
    border-bottom:2px solid #ddd;
    box-shadow:0px 1px 2px #888;
}
.specialoverlay span {
    display:block;
    color:#FFF;
    padding:3px;
}
.specialoverlay span.s_title {
    font-weight:500;
    color:#FFF;
}
.customoverlay {
    background-color:#fff;
    padding:10px;
    position:relative;
    bottom:45px;
    border-radius:6px;
    border:1px solid #CCC;
    border-bottom:2px solid #ddd;
    box-shadow:0px 1px 2px #888;
}
.customoverlay span {
    display:block;
}
.customoverlay span.n_title {
    font-weight:200;
}
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
</script>

<?php
// wr_1 파라미터가 없으면 전체 마커 표시
$types = (isset($_GET['wr_1']) && is_array($_GET['wr_1']) && count($_GET['wr_1']) > 0) ? $_GET['wr_1'] : null;

$sql = "SELECT * FROM g5_write_{$bo_table} WHERE wr_8 != '' AND wr_9 != ''";

if ($types !== null) {
    $conditions = array_map(function($type) {
        return "wr_1 LIKE '%" . addslashes($type) . "%'";
    }, $types);
    $sql .= " AND (" . implode(" OR ", $conditions) . ")";
}

$sql .= " ORDER BY wr_id ASC";
$result = sql_query($sql);

while ($row = sql_fetch_array($result)) {
    if (!$row['wr_8'] || !$row['wr_9']) continue;

    $imageSrc = $board_skin_url . "/img/markerStar3.png";
    if ($row['ca_name'] == "등록안함") $imageSrc = $board_skin_url . "/img/markerStar1.png";
    else if ($row['ca_name'] == "메인등록") $imageSrc = $board_skin_url . "/img/markerStar2.png";

    $modal_link = G5_BBS_URL . "/board.php?bo_table={$bo_table}&wr_id={$row['wr_id']}";
    $modal_link_js = htmlspecialchars($modal_link, ENT_QUOTES);
    $title = htmlspecialchars($row['wr_subject'], ENT_QUOTES);

    // 마커 + 오버레이 출력
    echo "<script>
    var markerPosition = new kakao.maps.LatLng({$row['wr_8']}, {$row['wr_9']});
    var markerImage = new kakao.maps.MarkerImage('$imageSrc', new kakao.maps.Size(24, 35), {offset: new kakao.maps.Point(12, 35)});
    var marker = new kakao.maps.Marker({ position: markerPosition, image: markerImage });
    marker.setMap(map);

    var content = \"<div class='" . ($row['wr_3'] > 0 ? 'specialoverlay' : 'customoverlay') . "'>\" +
        \"<a href='#' onclick=\\\"openModal('$modal_link_js')\\\">\"
        + \"<span>NO. " . ($row['wr_num'] * -1) . "</span></a>\" +
        \"<a href='#' onclick=\\\"openModal('$modal_link_js')\\\">\"
        + \"<span class='" . ($row['wr_3'] > 0 ? 's_title' : 'n_title') . "'>$title</span></a>\" +
        \"</div>\";

    var customOverlay = new kakao.maps.CustomOverlay({
        map: map,
        position: markerPosition,
        content: content,
        yAnchor: 1
    });
    </script>";
}
?>
