@extends('layouts.template')

    @section('styles')
    <style>
        html, body, {
            width: 100%;
            height: 100%;
            margin: 0;
        }
        #map{
            width: 100%;
            height: calc(100vh - 56px);
            margin: 0;
        }
    </style>
    @endsection

@section('content')
    <div id="map"></div>

@endsection

    @section('script')
    <script src="https://unpkg.com/leaflet-geosearch@latest/dist/bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
/>
    <script>
        //Map
        var map = L.map('map').setView([-7.9190, 110.3785], 12);

        // Basemap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

/* GeoJSON Point */
var point = L.geoJson(null, {
				onEachFeature: function (feature, layer) {
					var popupContent = "<b>Nama: </b>" + feature.properties.name + "<br>" + "<br>" +
						"<b>Deskripsi: </b>" + feature.properties.description + "<br>" + "<br>" +
                        "<b>Foto:</b><img src='{{ asset('storage/images') }}/" + feature.properties.image + "' class='img-thumbnail' alt='...'>" + "<br>" +
                        "<div class='d-flex justify-content-end mt-3'>" ;
					layer.on({
						click: function (e) {
							point.bindPopup(popupContent);
						},
						mouseover: function (e) {
							point.bindTooltip(feature.properties.name);
						},
					});
				},
			});
			$.getJSON("{{ route('api.points') }}", function (data) {
				point.addData(data);
				map.addLayer(point);
			});

    //Layer Controls
    var overlayMaps = {
    "Point": point
};
var layerControl = L.control.layers(null, overlayMaps, {collapsed: false}).addTo(map);

    </script>
    @endsection
</body>
</html>
