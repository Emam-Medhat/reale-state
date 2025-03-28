function initMap() {
    var officeLocation = { lat: 40.7128, lng: -74.0060 };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: officeLocation
    });
    var marker = new google.maps.Marker({
        position: officeLocation,
        map: map
    });
}

document.addEventListener('DOMContentLoaded', function () {
    var script = document.createElement('script');
    script.src = `https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap`;
    script.async = true;
    script.defer = true;
    document.head.appendChild(script);
});