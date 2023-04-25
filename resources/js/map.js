const searchForm = document.getElementById('search-form');
const searchInput = document.getElementById('search-input');

searchForm.addEventListener('submit', (event) => {
  event.preventDefault();

  const geocoder = new google.maps.Geocoder();

  geocoder.geocode({ address: searchInput.value }, (results, status) => {
    if (status === 'OK') {
      const map = new google.maps.Map(document.getElementById('map'), {
        center: results[0].geometry.location,
        zoom: 8,
      });
      const marker = new google.maps.Marker({
        position: results[0].geometry.location,
        map,
        title: results[0].formatted_address,
      });
    } else {
      console.error(`Geocode failed with status: ${status}`);
    }
  });
});
