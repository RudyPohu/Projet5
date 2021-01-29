// affichage de la carte:
var map = {
	lat: "45.750000",
	lng: "4.850000",
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
	        maxZoom: 20
	    }).addTo(this.macarte);
	}
};
