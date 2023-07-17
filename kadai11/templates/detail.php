<!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="js/jquery-2.1.3.min.js"></script>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/sample.css">
            <title>Planet Earth & Divers</title>
            <style>
              #map {
                height: 400px;
                width: 100%;
              }
            </style>
        </head>

        <body>
            <h2 id="divelog"> Dive Log - details</h2>
            <div class="map__wrapper">
                <div id="map" class="map"></div>
            </div>

            <form id="logForm" method="POST" action="update.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $this->result['id'] ?>">
                <input type="number" id="divingNumber" name="divingNumber" class="feedback-input" placeholder="Dive No." value="<?= $this->result['divingNumber'] ?>"/>
                <input type="date" id="date" name="date" class="feedback-input" placeholder="Date" value="<?= $this->result['date'] ?>"/>
                <input type="text" id="location" name="location" class="feedback-input" placeholder="Location" value="<?= $this->result['location'] ?>"/>
                <input type="text" id="diveSite" name="diveSite" class="feedback-input" placeholder="Dive Site" value="<?= $this->result['diveSite'] ?>"/>
                <select id="rating" name="rating" class="feedback-input">
                    <option value="⭐️" <?= ($this->result['rating'] == '⭐️') ? 'selected' : '' ?>>⭐️</option>
                    <option value="⭐️⭐️" <?= ($this->result['rating'] == '⭐️⭐️') ? 'selected' : '' ?>>⭐️⭐️</option>
                    <option value="⭐️⭐️⭐️" <?= ($this->result['rating'] == '⭐️⭐️⭐️') ? 'selected' : '' ?>>⭐️⭐️⭐️</option>
                    <option value="⭐️⭐️⭐️⭐️" <?= ($this->result['rating'] == '⭐️⭐️⭐️⭐️') ? 'selected' : '' ?>>⭐️⭐️⭐️⭐️</option>
                    <option value="⭐️⭐️⭐️⭐️⭐️" <?= ($this->result['rating'] == '⭐️⭐️⭐️⭐️⭐️') ? 'selected' : '' ?>>⭐️⭐️⭐️⭐️⭐️</option>
                </select><br>
                <textarea id="comment" name="comment" class="feedback-input" placeholder="Comment"><?= $this->result['comment'] ?></textarea><br>
                <img src="uploads/<?= $this->result['photo'] ?>" width="200px" height="auto"><br>
                <input type="file" name="photo" id="photo" accept="image/*" class="feedback-input" placeholder="Photo" required><br>
                <input type="hidden" name="latitude" id="latitude" />
                <input type="hidden" name="longitude" id="longitude" />
                 <input type="submit" value="Update a Log">
            </form>

            <div class="navbar-header">
                <a class="navbar-brand" href="select.php">Dive Log Lists</a>
            </div>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEa1T_F6ngy7gP9_nrXXTSZmVfqsYon3M&callback=initMap&language=en" async defer></script>
            <script src="js/script.js"></script>

        </body>
        </html>
