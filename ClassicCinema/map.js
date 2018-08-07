var Map = (function(){
    var pub = {};
    var map;
    var centralMarker,northMarker,southMarker;
    var contacts,f,title;
    var markerLocation, markerBounds;
    function onMapClick(e) {
        alert("You clicked the map at " + e.latlng);
    }
    function centreMap(e) {
        if (this.textContent === "Central") {
            markerLocation = [centralMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === "North") {
            markerLocation = [northMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }
        if (this.textContent === "South") {
            markerLocation = [southMarker.getLatLng()];
            markerBounds = L.latLngBounds(markerLocation);
            map.fitBounds(markerBounds);
        }

    }

    pub.setup = function() {
        map = L.map("map").setView([-45.875, 170.500], 15);
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        { maxZoom:18,attribution:"Map data &copy;"
        +"<a href=http://www.openstreetmap.org/copyright>"
        +"OpenStreetMap contributors</a> CC-BY-SA"}).addTo(map);
        /*L.marker([-45.875, 170.500]).addTo(map);*/
        map.on("click", onMapClick);
        centralMarker = L.marker([-45.873937, 170.50311]).addTo(map);
        centralMarker.bindPopup(
            "<img src=images/Metropolis.jpg alt=Metropolis >" +
            "<div style='alignment:top'><b >Central Store</b>" +
            "<p>Specialising in Classic Cinema</p></div>"
        );
        northMarker = L.marker([-45.886775, 170.497223]).addTo(map);
        northMarker.bindPopup(
            "<img src=images/Plan_9_from_Outer_Space.jpg alt=\"Plan 9 from Outer Space\">" +
            "<div style='alignment: top'><b style='alignment: top'>North Store</b>" +
            "<p>Science Fiction and Horror</p></div>"
        );
        southMarker = L.marker([-45.862532, 170.511841]).addTo(map);
        southMarker.bindPopup(
            "<img src=\"images/The_Birds.jpg\" alt=\"The Birds\">" +
            "<div style='alignment:top'><b>South Store</b>" +
            "<p>Alfred Hitchcock</p></div>"
        );
       /* L.circle( [-45.875, 170.500],
            { radius: 100,
                color: "red",
        fillColor: "red",
        fillOpacity: 0.5 } ).addTo(map);*/
        contacts = document.getElementsByClassName("contact");
        for (f = 0; f < contacts.length; f+=1) {
            title = contacts[f].getElementsByTagName("h3")[0];
            title.onclick = centreMap;
            title.style.cursor = "pointer";
        }
       /* contacts.style.cursor = "pointer";*/
    };
    return pub; }());

if (window.addEventListener) {
    window.addEventListener("load", Map.setup);
} else if (window.attachEvent) {
    window.attachEvent("onload", Map.setup);
} else {
    alert("Could not attach ’Map.setup’ to the ’window.onload’ event");
}