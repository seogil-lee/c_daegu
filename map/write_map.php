
<div id="clickLatlng"></div>
	<script type="text/javascript" src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    
    <!-- dapi.kakao.com/v2/maps/sdk.js?appkey=발급받은키값&libraries=services -->
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=64e74f542c1e9edef0ec072083777a14&libraries=services"></script>
    <!-- } -->
    
    <script>
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
        mapOption = {
            center: new daum.maps.LatLng(<?php echo $write['wr_8']?>, <?php echo $write['wr_9']?>), // 지도의 중심좌표
            level: 3 // 지도의 확대 레벨
        };
    // 지도를 생성
    var map = new daum.maps.Map(mapContainer, mapOption);
    // 주소-좌표 변환 객체 생성
    var geocoder = new daum.maps.services.Geocoder();
    // 마커
    var marker = new daum.maps.Marker({
        map: map,
        // 지도 중심좌표에 마커를 생성
        position: map.getCenter()
    });
	
    // 주소검색 API (주소 > 좌표변환처리)
    $(function() {
        $("#wr_4, #ser_bbt").on("click", function() {
            new daum.Postcode({
                oncomplete: function(data) {
                    //console.log(data);
                    $("#wr_4").val(data.address);
                    // 지번 주소 입력 (autoJibunAddress도 확인)
                    if (data.jibunAddress) {
                        document.getElementById("wr_10").value = data.jibunAddress;
                    } else if (data.autoJibunAddress) {
                        document.getElementById("wr_10").value = data.autoJibunAddress;
                    } else {
                        document.getElementById("wr_10").value = "지번 주소 없음";
                    }
                    
                    geocoder.addressSearch(data.address, function(results, status) {
                        // 정상적으로 검색이 완료됐으면
                        if (status === daum.maps.services.Status.OK) {
                            //첫번째 결과의 값을 활용
                            var result = results[0];
                            // 해당 주소에 대한 좌표를 받아서
                            var coords = new daum.maps.LatLng(result.y, result.x);
                            // 지도를 보여준다.
                            map.relayout();
                            // 지도 중심을 변경한다.
                            map.setCenter(coords);
                            // 좌표값을 넣어준다.
                            document.getElementById('wr_8').value = coords.getLat();
                            document.getElementById('wr_9').value = coords.getLng();
                            // 마커를 결과값으로 받은 위치로 옮긴다.
                            marker.setPosition(coords);
                        }
                    });
                }
            }).open();
        });
        
        $("#postcodify_search_button").on("click", function() {
            new daum.Postcode({
                oncomplete: function(data) {
                    //console.log(data);
                    $("#wr_4").val(data.address);
                    // 지번 주소 입력 (autoJibunAddress도 확인)
                    if (data.jibunAddress) {
                        document.getElementById("wr_10").value = data.jibunAddress;
                    } else if (data.autoJibunAddress) {
                        document.getElementById("wr_10").value = data.autoJibunAddress;
                    } else {
                        document.getElementById("wr_10").value = "지번 주소 없음";
                    }
                    
                    geocoder.addressSearch(data.address, function(results, status) {
                        // 정상적으로 검색이 완료됐으면
                        if (status === daum.maps.services.Status.OK) {
                            //첫번째 결과의 값을 활용
                            var result = results[0];
                            // 해당 주소에 대한 좌표를 받아서
                            var coords = new daum.maps.LatLng(result.y, result.x);
                            // 지도를 보여준다.
                            map.relayout();
                            // 지도 중심을 변경한다.
                            map.setCenter(coords);
                            // 좌표값을 넣어준다.
                            document.getElementById('wr_8').value = coords.getLat();
                            document.getElementById('wr_9').value = coords.getLng();
                            // 마커를 결과값으로 받은 위치로 옮긴다.
                            marker.setPosition(coords);
                        }
                    });
                }
            }).open();
        });
    });
		
	//마커를 기준으로 가운데 정렬이 될 수 있도록 추가
	var markerPosition = marker.getPosition(); 
	map.relayout();
	map.setCenter(markerPosition);
	//브라우저가 리사이즈될때 지도 리로드
	$(window).on('resize', function () {
		var markerPosition = marker.getPosition(); 
		map.relayout();
		map.setCenter(markerPosition)
	});
    </script>
<!-- } API -->