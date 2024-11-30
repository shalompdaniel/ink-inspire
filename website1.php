<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inkinspire</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('https://i.pinimg.com/564x/34/ea/78/34ea78145ed139f7df5bc655db7f3d98.jpg'); /* Background image URL */
            background-size: cover; /* Cover the entire background */
            background-attachment: fixed; /* Fixed background */
            background-position: center; /* Center the background */
            background-repeat: no-repeat; /* Prevent repeating the image */
            background-color: #000000; /* Black background color for sides */
            color: #ffffff; /* White text */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px; /* Add padding to create a gap around the content */
            box-sizing: border-box; /* Ensure padding does not affect width */
            filter: brightness(0.9); /* Darken the overall background */
        }

        header {
            background-color: rgba(26, 26, 26, 0.9); /* Dark header with more opacity */
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #ffffff; /* Bright white */
            margin: 0;
            font-size: 2.5em; /* Increase the size */
            font-family: 'Georgia', serif; /* Change font style */
        }

        ul {
            list-style-type: none; /* Remove default list style */
            padding: 0;
            margin: 0;
        }

        ul li {
            display: inline; /* Inline list items */
            margin: 0 10px;
        }

        ul li a {
            display: inline-block; /* Make links behave like buttons */
            padding: 10px 15px;
            color: #ffffff; /* White text */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Rounded corners */
            transition: transform 0.3s, background-color 0.3s; /* Smooth transition */
            font-size: 1.2em; /* Increase link text size */
            font-family: 'Georgia', serif; /* Consistent font style */
            border: 2px solid transparent; /* For consistent sizing */
            background-color: rgba(255, 255, 255, 0.1); /* Light transparent background */
        }

        /* Button colors */
        ul li a:nth-child(1) {
            background: linear-gradient(45deg, #333, #555); /* Dark gray to lighter gray */
        }
        ul li a:nth-child(2) {
            background: linear-gradient(45deg, #444, #666); /* Darker gray to gray */
        }
        ul li a:nth-child(3) {
            background: linear-gradient(45deg, #555, #777); /* Medium gray to lighter gray */
        }
        ul li a:nth-child(4) {
            background: linear-gradient(45deg, #666, #888); /* Darker to lighter gray */
        }
        ul li a:nth-child(5) {
            background: linear-gradient(45deg, #777, #999); /* Medium gray shades */
        }
        ul li a:nth-child(6) {
            background: linear-gradient(45deg, #888, #aaa); /* Gray to light gray */
        }
        ul li a:nth-child(7) {
            background: linear-gradient(45deg, #999, #bbb); /* Light gray shades */
        }
        ul li a:nth-child(8) {
            background: linear-gradient(45deg, #aaa, #ccc); /* Light gray to even lighter gray */
        }

        ul li a:hover {
            transform: translateY(-2px); /* Slight lift effect */
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.5); /* Enhanced shadow effect */
            border: 2px solid #ffffff; /* White border on hover */
        }

        main {
            padding: 20px;
            text-align: center;
        }

        h3 {
            color: aliceblue; /* Light color */
            font-size: 2em; /* Increase size */
            font-family: 'Georgia', serif; /* Change font style */
        }

        p {
            color: aliceblue; /* Light color */
            font-size: 1.2em; /* Increase paragraph size */
            line-height: 1.5; /* Better readability */
        }

        img {
            height: 400px; /* Set image height */
            margin: 10px; /* Spacing between images */
            border-radius: 10px; /* Rounded corners */
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition */
        }

        img:hover {
            transform: scale(1.05); /* Enlarge image on hover */
            box-shadow: 0 0 20px rgba(0, 204, 255, 0.7); /* Glow effect */
        }

        footer {
            background-color: rgba(26, 26, 26, 0.9); /* Dark footer with more opacity */
            color: #aaaaaa; /* Light gray */
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <h1>Welcome to Inkinspire</h1>
        <ul>
            <li><a href="loginpage.html">Login</a></li>
            <li><a href="website1.html">Home</a></li>
            <li><a href="website2.html">About</a></li>
            <li><a href="contactsdetails.html">Contacts</a></li>
            <li><a href="registration.html">Registration</a></li>
            <li><a href="faqs.html">FAQs</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="tattoocataloge.html">Catalog</a></li>
        </ul>
        <hr>
    </header>

    <main>
        <h3>Checkout Inkinspire</h3>
        <p>Tattoo <em>symbolizes a person's cultural or spiritual identity</em> and can be used to express their connection to a particular tradition or belief.</p>

        <div class="image-gallery">
            <img src="https://i.pinimg.com/564x/d8/18/e3/d818e3477b90a7333ea0860eba9634bb.jpg" alt="Tattoo 1">
            <img src="https://i.pinimg.com/564x/b4/eb/8a/b4eb8a4eb75a5d6934afdfc78d17c8f6.jpg" alt="Tattoo 2">
            <img src="https://i.pinimg.com/564x/92/10/3c/92103cbc9ec457605dd53f77ca1a7faa.jpg" alt="Tattoo 3">
            <img src="https://i.pinimg.com/564x/a5/fb/75/a5fb759065cbcc8ae3eb2ecd5c19e8c2.jpg" alt="Tattoo 4">
            <img src="https://i.pinimg.com/564x/f9/38/f8/f938f88980335b030ad9afab36169bd4.jpg" alt="Tattoo 5">
            <img src="https://i.pinimg.com/474x/46/38/34/463834cc0bfefbd9f2f179207ecd48ae.jpg" alt="Tattoo 6">
            <img src="https://i.pinimg.com/236x/f9/cc/ab/f9ccab364e5f8962aac4d19012cd3904.jpg" alt="Tattoo 7">
            <img src="https://i.pinimg.com/474x/9f/e6/e2/9fe6e2b9a7b305098597f40ffaacb66a.jpg" alt="Tattoo 8">
        </div>

        <p>For more such images, check out this link: <a href="https://in.pinterest.com/search/pins/?rs=ac&len=2&q=tattoo%20styles%20men&eq=tattoo%20styles&etslf=10288" style="color: #00ccff;">Tattoo Styles</a></p>
    </main>

    <footer>
        Author: Shalom Daniel<br>
        &copy; Copyright Reserved
    </footer>

</body>

</html>
