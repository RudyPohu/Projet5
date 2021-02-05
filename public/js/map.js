// affichage de la carte:
var map = {
	lat: "52.94864202150816",
	lng: "9.573315144702407",
	macarte: "",
	markerCluster: "",

	initMap: function() {
				// Création de l'objet "macarte" et insertion  dans l'élément HTML qui a l'ID "map"
	    this.macarte = L.map('map').setView([this.lat, this.lng], 13);
	    
	    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. 
	    //Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
	    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
	        
	        // Lien vers la source des données
	        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
	        minZoom: 1,
	        maxZoom: 5
	    }).addTo(this.macarte);
	},

	placeMarkers: function(markers) {
		for(marker of markers) {
			
			var marker = L.icon({
			    iconUrl: 'my-icon.png',
			    iconSize: [38, 95],
			    iconAnchor: [22, 94],
			    popupAnchor: [-3, -76],
			    shadowUrl: 'my-icon-shadow.png',
			    shadowSize: [68, 95],
			    shadowAnchor: [22, 94]
			});

			L.marker([50.505, 30.57], {icon: myIcon}).addTo(map);
	},

	initMarker: function() {
		fetch('index.php?action=Markers')
		.then(datas=>datas.json())
		.then(function(datas) {
			console.log(datas)
			this.placeMarkers(datas);
		})
	}
};
