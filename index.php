<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">
    <title>Sports Community Page - FIA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('https://zaman.co.at/wp-content/uploads/2024/06/compressed_img-zReaALXJwCEqCIJmkL8SLokd.png');
            background-size: cover;
            background-position: center;
            color: white;
            position: relative;
            min-height: 100vh;
            overflow: auto;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 60px);
            text-align: center;
            z-index: 1;
            position: relative;
            padding: 20px;
        }

        .logo {
            margin-bottom: 20px;
            width: 100%;
            padding: 0; /* Remove default padding */
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #FFD700;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 40px;
            color: #ffffff;
            max-width: 90%;
            line-height: 1.5;
        }

        .cta-button {
            background-color: #FF4500;
            color: white;
            font-size: 1.5em;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
            width: 100%;
            max-width: 300px;
        }

        .cta-button:hover {
            background-color: #FF6347;
        }

        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: #bbbbbb;
            font-size: 0.8em;
            padding: 10px 0;
        }

        .social-links {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }

        .social-button {
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 1.5em;
            transition: background-color 0.3s ease;
        }

        .social-button:hover {
            background-color: #555;
        }

        .social-button i {
            margin-right: 8px;
        }

        /* Responsive styles */
        @media (min-width: 769px) {
            .logo iframe {
                width: 802px;
                height: 451px;
            }
        }

        @media (max-width: 768px) {
            .logo {
                margin-bottom: 20px;
                width: 100vw; /* Make logo full viewport width */
                padding: 0; /* Remove default padding */
            }

            .logo iframe {
                width: 100vw; /* Ensure iframe takes full viewport width */
                height: 50vh; /* Set height to half of viewport height */
                border: none;
                position: relative;
                top: 0;
                padding: 0; /* Remove iframe internal padding */
                margin: 0; /* Remove default margin */
            }

            h1 {
                font-size: 2em;
                margin-top: 20px;
            }

            p {
                font-size: 1em;
                padding-left: 10px;
                padding-right: 10px;
                margin-top: 20px;
            }

            .cta-button {
                padding: 15px;
                font-size: 1.2em;
            }

            .social-button {
                font-size: 1.2em;
            }
        }
    </style>
</head>
<body> 
    <div class="overlay"></div>

    <div class="container">
        <div class="logo">
            <iframe src="https://www.youtube.com/embed/7WZKniP5Puw?autoplay=1&mute=1" title="Final Day Highlights | WRC Rally Chile Bio Bío 2024" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h1>Welcome to the Sports Community</h1>

        <p>Join other sports enthusiasts and enjoy exciting content!</p>

        <a href="https://www.youtube.com/@wrc">
            <button class="cta-button">Join Now</button>
        </a>

        <div class="social-links">
            <a href="https://rally.tv" class="social-button">
                <i class="fas fa-video"></i>
            </a>
            <a href="https://facebook.com/wrc" class="social-button">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/OfficialWRC" class="social-button">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com/officialwrc" class="social-button">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://tiktok.com/@wrc" class="social-button">
                <i class="fab fa-tiktok"></i>
            </a>
        </div>
    </div>

    <div class="footer">
        © 2024 SPOT Sports Community. All rights reserved.
    </div>

</body>
</html>
