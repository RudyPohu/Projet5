// affichage de la carte:
var map = {
	lat: "59.398555346870964",
	lng: "17.984506077661813",
	macarte: "",

	initMap: function() {
				// Création de l'objet "macarte" et insertion  dans l'élément HTML qui a l'ID "map"
	    this.macarte = L.map('map').setView([this.lat, this.lng], 4);
	    
	    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. 
	    //Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
	    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
	        
	        // Lien vers la source des données
	        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
	        minZoom: 1,
	        maxZoom: 20,
	    }).addTo(this.macarte);
	},


	initMarker: function() {
		fetch('index.php?action=Markers')
		.then(datas=>datas.json())
		.then(function(datas) {
			for (var marker of datas) {
				console.log(marker);
				L.marker([marker['_lat'], marker['_lon']]).addTo(map.macarte)
				.bindPopup(marker['_name']+'<br />'+marker['_content']+'<br />'+marker['_link']);
			}
		});
	},
};
