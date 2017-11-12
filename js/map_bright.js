function initMap() {
  // Styles a map in night mode.
  var urlpin = {lat: 52.1215702, lng: 20.3337472};
  var map = new google.maps.Map(document.getElementById('map'),
   {
    center: {lat: 52.1215702, lng: 20.3347472},
    zoom: 13,
  });
  
  var marker = new google.maps.Marker({
    position: urlpin,
    map: map
});
}
