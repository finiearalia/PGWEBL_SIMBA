@extends('layouts.template')

    @section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css">
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

    <!-- Modal create point-->
<div class="modal fade" id="PointModal" tabindex="-1" aria-labelledby="PointModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Point</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('store-point') }}" method="POST" enctype="multipart/form-data">
          <!--digunakan sebagai security laravel -->
        @csrf
        <div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Fill point name">
</div>
<div class="mb-3">
  <label for="description" class="form-label">Description</label>
  <textarea class="form-control" id="description" name="description" rows="3" ></textarea>
</div>
<div class="mb-3">
  <label for="geom" class="form-label">Geometry</label>
  <textarea class="form-control" id="geom_point" name="geom" rows="3" readonly></textarea>
</div>
<div class="mb-3">
  <label for="image" class="form-label">Image</label>
  <input type="file" class="form-control" id="image_point" name="image"
  onchange="document.getElementById('preview-image-point').src = window.URL.createObjectURL(this.files[0])">
    </div>
<div class="mb-3">
    <img src="" alt="Preview" id="preview-image-point"
    class="img-thumbnail" width="400">
</div>
    </div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
      </div>
    </div>
  </div>
</div>
@endsection

    @section('script')
    <script src="https://unpkg.com/terraformer@1.0.7/terraformer.js"></script>
    <script src="https://unpkg.com/terraformer-wkt-parser@1.1.2/terraformer-wkt-parser.js"></script>
    <script src="https://unpkg.com/leaflet-geosearch@latest/dist/bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-draw@1.0.4/dist/leaflet.draw.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />

    <script>
        //Map
        var map = L.map('map').setView([-7.9190, 110.3785], 12);

        // Basemap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

        const search = new GeoSearch.GeoSearchControl({
            provider: new GeoSearch.OpenStreetMapProvider, // required
        });
        map.addControl(search);

        /* Digitize Function */
var drawnItems = new L.FeatureGroup();
map.addLayer(drawnItems);

var drawControl = new L.Control.Draw({
	draw: {
		position: 'topleft',
		polyline: false,
		polygon: false,
		rectangle: false,
		circle: false,
		marker: true,
		circlemarker: false
	},
	edit: false
});
map.addControl(drawControl);


map.on('draw:created', function(e) {
	var type = e.layerType,
		layer = e.layer;

	console.log(type);

	var drawnJSONObject = layer.toGeoJSON();
	var objectGeometry = Terraformer.WKT.convert(drawnJSONObject.geometry);

	console.log(drawnJSONObject);
	console.log(objectGeometry);

	if (type === 'marker') {
    //set value geometry to input geom
        $("#geom_point").val(objectGeometry);
    //show modal
        $("#PointModal").modal('show');
	} else {
		console.log('__undefined__');
	}
  drawnItems.addLayer(layer);
});






/* GeoJSON Point */
var point = L.geoJson(null, {
				onEachFeature: function (feature, layer) {
					var popupContent = "<b>Nama: </b>" + feature.properties.name + "<br>" + "<br>" +
						"<b>Deskripsi: </b>" + feature.properties.description + "<br>" + "<br>" +
                        "<b>Foto: </b> <img src='{{ asset('storage/images') }}/" + feature.properties.image + "' class='img-thumbnail' alt='...'>" + "<br>" +
                        "<div class='d-flex justify-content-end mt-3'>" +

                        "<a href='{{url('edit-point')}}/" + feature.properties.id + "' class='btn btn-sm btn-warning me-2'><i class='fa-solid fa-edit'></i></a>" +
                        "<form action='{{url('delete-point')}}/" + feature.properties.id + "' method='POST'>" +
                        '{{ csrf_field() }}' +
                        '{{ method_field('DELETE') }}' +
                        "<button type='submit' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this data?\")'><i class='fa-solid fa-trash-can'></i></button>" +
                        "</form>" +
                        "</div>" ;
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
    "Point": point,
};
var layerControl = L.control.layers(null, overlayMaps, {collapsed: false}).addTo(map);


    </script>
    @endsection
</body>
</html>
