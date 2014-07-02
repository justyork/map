<style>
	.menu-ui {
		background:#fff;
		position:absolute;
		top:10px;right:10px;
		z-index:1;
		border-radius:3px;
		width:120px;
		border:1px solid rgba(0,0,0,0.4);
	}
	.menu-ui a {
		font-size:13px;
		color:#404040;
		display:block;
		margin:0;padding:0;
		padding:10px;
		text-decoration:none;
		border-bottom:1px solid rgba(0,0,0,0.25);
		text-align:center;
	}
	.menu-ui a:first-child {
		border-radius:3px 3px 0 0;
	}
	.menu-ui a:last-child {
		border:none;
		border-radius:0 0 3px 3px;
	}
	.menu-ui a:hover {
		background:#f8f8f8;
		color:#404040;
	}
	.menu-ui a.active,
	.menu-ui a.active:hover {
		background:#3887BE;
		color:#FFF;
	}
</style>
<div id='map'></div>

<script>
	var map = L.mapbox.map('map', 'justyork.ilf8844k')
		.setView([52.284, 104.302], 14) ;
	L.mapbox.featureLayer({
		// this feature is in the GeoJSON format: see geojson.org
		// for the full specification
		type: 'Feature',
		geometry: {
			type: 'Point',
			// coordinates here are in longitude, latitude order because
			// x, y is the standard for GeoJSON and many formats
			coordinates: [
				104.302,
				52.284
			]
		},
		properties: {
			title: 'Peregrine Espresso',
			description: '1718 14th St NW, Washington, DC',
			// one can customize markers by adding simplestyle properties
			// https://www.mapbox.com/foundations/an-open-platform/#simplestyle
			'marker-size': 'small',
			'marker-color': '#BE9A6B',
			'marker-symbol': 'cafe'
		}
	}).addTo(map);
</script>