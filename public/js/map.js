const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button');

searchButton.addEventListener('click', () => {
  const address = searchInput.value;

  fetch(`/search?address=${address}`)
    .then(response => response.json())
    .then(data => {
      const map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: data.latitude, lng: data.longitude },
        zoom: 8,
      });

      new google.maps.Marker({
        position: { lat: data.latitude, lng: data.longitude },
        map,
      });
    });
});
