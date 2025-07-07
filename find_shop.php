<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Wash Finder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
/* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    background: url('img(5).jpg') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    color: #f4f4f4;
}

.container {
    width: 95%;
    max-width: 850px;
    background: rgba(0, 0, 0, 0.8);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.3);
    text-align: center;
}

h2 {
    color: #ffc107;
    font-size: 26px;
    margin-bottom: 20px;
    text-transform: uppercase;
    border-bottom: 4px solid #ffc107;
    display: inline-block;
    padding-bottom: 5px;
}

p {
    color: #ddd;
    font-size: 18px;
    line-height: 1.8;
}

.info-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    text-align: left;
    color: #f4f4f4;
}

.info-table th, .info-table td {
    padding: 14px;
    border-bottom: 2px solid #555;
}

.info-table th {
    background-color: #0056b3;
    color: white;
    font-weight: bold;
}

.shop {
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 15px;
    border: 2px solid #ffc107;
    text-align: left;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
    color: #f4f4f4;
}

.shop a {
    color: #ffc107;
    text-decoration: none;
    font-weight: bold;
}

.shop a:hover {
    text-decoration: underline;
}

.error {
    color: #ff6666;
    font-weight: bold;
    font-size: 18px;
}

.success {
    color: #28a745;
    font-weight: bold;
    font-size: 18px;
}

.book-btn {
    background-color: #ffc107;
    color: #0056b3;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background 0.3s ease, color 0.3s ease, transform 0.2s;
}

.book-btn:hover {
    background-color: #e0a800;
    color: white;
    transform: scale(1.05);
}

.rating {
    margin: 10px 0;
    font-size: 20px;
    color: #ffc107;
}

/* Responsive Design */
@media screen and (max-width: 600px) {
    .container {
        padding: 25px;
    }
    
    h2 {
        font-size: 22px;
    }

    p {
        font-size: 16px;
    }

    .info-table th, .info-table td {
        padding: 10px;
        font-size: 14px;
    }

    .book-btn {
        font-size: 14px;
        padding: 10px 20px;
    }
}
</style>
</head>
<body>

<div class="container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pickup_address = trim($_POST['pickup_address'] ?? '');
    $drop_address = trim($_POST['drop_address'] ?? '');
    $bike_model = trim($_POST['bike_model'] ?? '');
    $bike_number = trim($_POST['bike_number'] ?? '');
    $bike_color = trim($_POST['bike_color'] ?? '');

    // Determine selected option
    $selected_option = "";
    if (!empty($pickup_address) && empty($drop_address)) {
        $selected_option = "Pickup";
        $address = $pickup_address;
    } elseif (!empty($drop_address) && empty($pickup_address)) {
        $selected_option = "Drop";
        $address = $drop_address;
    } elseif (!empty($pickup_address) && !empty($drop_address)) {
        $selected_option = "Pick & Drop";
        $address = $pickup_address; // Main location to find shops
    } else {
        echo "<p class='error'>Address is missing.</p>";
        exit;
    }

    if (empty($username) || empty($phone) || empty($email) || empty($address)) {
        echo "<p class='error'>All fields are required.</p>";
        exit;
    }

    function fetch_data($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return ($http_code == 200) ? $response : false;
    }

    $geoUrl = "https://nominatim.openstreetmap.org/search?q=" . urlencode($address) . "&format=json&limit=1";
    $geoResponse = fetch_data($geoUrl);
    $geoData = json_decode($geoResponse, true);

    if (!empty($geoData[0]['lat']) && !empty($geoData[0]['lon'])) {
        $latitude = $geoData[0]['lat'];
        $longitude = $geoData[0]['lon'];
        $full_address = $geoData[0]['display_name'];

        echo "<h2 class='success'>Booking Confirmation</h2>";
        echo "<table class='info-table'>";
        echo "<tr><th>Customer Name</th><td>$username</td></tr>";
        echo "<tr><th>Phone Number</th><td>$phone</td></tr>";
        echo "<tr><th>Email Address</th><td>$email</td></tr>";
        echo "<tr><th>Selected Option</th><td>$selected_option</td></tr>";
        echo "<tr><th>" . ($selected_option == 'Drop' ? "Drop Address" : "Pickup Address") . "</th><td>$full_address</td></tr>";

        if ($selected_option == 'Pick & Drop') {
            echo "<tr><th>Drop Address</th><td>$drop_address</td></tr>";
        }

        echo "<tr><th>Bike Model</th><td>$bike_model</td></tr>";
        echo "<tr><th>Bike Number</th><td>$bike_number</td></tr>";
        echo "<tr><th>Bike Color</th><td>$bike_color</td></tr>";
        echo "<tr><th>Latitude</th><td>$latitude</td></tr>";
        echo "<tr><th>Longitude</th><td>$longitude</td></tr>";
        echo "</table>";

        // Search for bike wash shops using Overpass API
        $overpassQuery = urlencode("[out:json];node[\"amenity\"=\"car_wash\"](around:5000, $latitude, $longitude);out;");
        $overpassUrl = "https://overpass-api.de/api/interpreter?data={$overpassQuery}";
        $placesResponse = fetch_data($overpassUrl);
        $placesData = json_decode($placesResponse, true);

        echo "<h2>Nearby Bike Wash Shops</h2>";
        if (!empty($placesData['elements'])) {
            foreach ($placesData['elements'] as $place) {
                $shop_name = isset($place['tags']['name']) ? htmlspecialchars($place['tags']['name']) : "Unnamed Bike Wash";
                $shop_lat = $place['lat'];
                $shop_lon = $place['lon'];

                // Dummy star rating
                $rating = rand(30, 50) / 10;
                $fullStars = floor($rating);
                $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
                $emptyStars = 5 - $fullStars - $halfStar;

                echo "<div class='shop'>";
                echo "<p><strong>$shop_name</strong></p>";
                echo "<p>📍 Location: <a href='https://www.google.com/maps?q=$shop_lat,$shop_lon' target='_blank'>View on Google Maps</a></p>";

                echo "<div class='rating'>";
                for ($i = 0; $i < $fullStars; $i++) echo "<i class='fas fa-star'></i>";
                if ($halfStar) echo "<i class='fas fa-star-half-alt'></i>";
                for ($i = 0; $i < $emptyStars; $i++) echo "<i class='far fa-star'></i>";
                echo " <span style='color:#ccc; font-size:16px;'>($rating)</span>";
                echo "</div>";

                echo "<form action='book.php' method='POST'>
                        <input type='hidden' name='shop_name' value='$shop_name'>
                        <input type='hidden' name='shop_lat' value='$shop_lat'>
                        <input type='hidden' name='shop_lon' value='$shop_lon'>
                        <input type='hidden' name='customer_name' value='$username'>
                        <input type='hidden' name='customer_phone' value='$phone'>
                        <input type='hidden' name='customer_email' value='$email'>
                        <input type='hidden' name='selected_option' value='$selected_option'>
                        <input type='hidden' name='pickup_address' value='$pickup_address'>
                        <input type='hidden' name='drop_address' value='$drop_address'>
                        <input type='hidden' name='bike_model' value='$bike_model'>
                        <input type='hidden' name='bike_number' value='$bike_number'>
                        <input type='hidden' name='bike_color' value='$bike_color'>
                        <button type='submit' class='book-btn'>Book Now</button>
                    </form>";
                echo "</div>";
            }
        } else {
            echo "<p class='error'>No bike wash shops found within 5 km.</p>";
        }
    } else {
        echo "<p class='error'>Invalid address. Please enter a valid location.</p>";
    }
} else {
    echo "<p class='error'>Invalid request.</p>";
}
?>

</div>
</body>
</html>


