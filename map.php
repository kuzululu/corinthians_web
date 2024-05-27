<div id="map"></div>
			<script type="text/javascript">
					function initMap(){
		// var location = {lat: 14.468549, lng: 120.980587 }; //object data type
		var location = {lat: 14.4624 , lng: 120.9915};
		var map = new google.maps.Map(document.getElementById("map"), {
			zoom: 15,
			center: location,
			mapTypeId: google.maps.MapTypeId.HYBRID,
			// draggable: false
		});

		var popContent = 'Corinthians Placement Services <br> MRJR Bldg., 34 DBP Main Road Pulanglupa II, Las Piñas City, Philippines <br> 843 4405';

		var info = new google.maps.InfoWindow({
			content: popContent
		});

		var marker = new google.maps.Marker({
			position: location,
			map: map,
			title: 'Corinthians Placement Services'
		});

		marker.addListener('mouseover', function(){
			info.open(map, marker);
		});

		}
		    </script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrzBRd-5Zwq-ABwR28gRis9rqqNUwdN9E&callback=initMap" type="text/javascript"></script>