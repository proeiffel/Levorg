window.onload = function () {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 5,
        center: { lat: 40.9761, lng: 29.0849 }
    });

    fetch("../api/get_users.php")
        .then(response => response.json())
        .then(users => {
            users.forEach(user => {
                new google.maps.Marker({
                    position: { lat: parseFloat(user.location_lat), lng: parseFloat(user.location_lng) },
                    map: map,
                    title: user.username
                });
            });
        });
};
