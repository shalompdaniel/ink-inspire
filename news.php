<!DOCTYPE html>
<html>
<head>
    <title>Popular News in Tattoo Industry</title>
    <style>
        body {
            background-color: black;
            color: azure;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        header {
            background-color: azure;
            padding: 10px;
        }
        header h1 {
            color: black;
        }
        header a {
            color: black;
            margin: 0 15px;
            text-decoration: none;
        }
        header a:hover {
            text-decoration: underline;
        }
        h1 {
            margin-top: 20px;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
        }
        img {
            width: 100%;
            max-width: 600px; /* Adjust for responsiveness */
            height: auto;
            margin: 10px 0;
        }
        .highlight {
            font-size: 20px;
            color: black;
            background-color: azure;
            padding: 10px;
            border-radius: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background-color: azure;
            color: black;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: white;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to Inkinspire</h1>
        <nav>
            <a href="website1.html">Home</a>
            <a href="website2.html">Guide Info</a>
            <a href="website3.html">Aftercare Instructions</a>
            <a href="registration.html">Registration</a> 
            <a href="faqs.html">FAQs</a>
            <a href="news.html">News</a>
            <a href="tattoocataloge.html">Catalog</a>
        </nav>
        <hr>
    </header>

    <h1>Popular News in Tattoo Industry</h1>

    <img src="https://tse4.mm.bing.net/th?id=OIP.3JTwjERlqVCe_YprrQR3XQHaDs&pid=Api&P=0&h=180" alt="Tattoo Example">

    <p id="demo" class="highlight">“Everyone is welcoming back the nostalgia of late ‘80s and ‘90s design trends,” Haight adds. A Memphis pattern tattoo might include a pastel triangle, a neon green squiggle, and a bright lightning bolt. Colourful designs are making a comeback.</p>
    <img src="https://i.pinimg.com/564x/77/44/63/7744631dd8ea3eb17f6c6a92ee648ba2.jpg" alt="Tattoo Example">
    <p id="demo2" class="highlight">Abstract tattoos are growing in popularity, according to Haight. These designs don’t typically use much black ink, breaking an “unspoken rule” that any tattoo must be outlined in black. “The thought is that black ink lasts the longest and a tattoo with no outline will be unrecognizable in 20 years,” Haight explains. This might be true, “but the fact of the matter is, people just don’t care as much about that anymore.”</p>

    <img src="https://tse2.mm.bing.net/th?id=OIP.-vb9EnSWjfY92fmO10hKswHaFg&pid=Api&P=0&h=180" alt="Tattoo Example">

    <p id="demo3" class="highlight">Rules continue to fly out the window with our next trend. Ana Guzman, a tattoo artist in New York City, has noticed clients asking to mix two styles, most commonly two-dimensional tattoos and realism.</p>
    <img src="https://i.pinimg.com/564x/99/57/b2/9957b2ad347780fc6827435f6e33c72a.jpg" alt="Tattoo Example">
    <p id="demo4" class="highlight">While realistic tattoos aim to capture the subject as they are in life, two-dimensional art is designed without any depth, for a flat-looking, purposefully unrealistic look. This work steps outside the confines of genre, creating a playful mix of the realistic and the obviously fake. Artists like Bad Bunny are lending more visibility to the trend with the realistic-looking vase and cartoon-esque two-dimensional flowers on his left arm.</p>

    <!-- New Demo Sections -->
     <img src="https://i.pinimg.com/564x/ef/a3/cb/efa3cb60bf6a54bd954bae96812b8fd0.jpg" alt="Tattoo Example">
    <p id="demo5" class="highlight">One emerging trend is the integration of digital art in tattoos, allowing for complex designs that blend technology with traditional ink.</p>
    <img src="https://i.pinimg.com/564x/12/1b/8e/121b8e217a405902b8fac19cc925213e.jpg" alt="Tattoo Example">
    <p id="demo6" class="highlight">Another exciting development is the use of glow-in-the-dark inks, creating tattoos that reveal hidden images or details in low light.</p>
    <img src="https://i.pinimg.com/564x/2e/48/9b/2e489bf8ea547b58f98851b6b49e434c.jpg" alt="Tattoo Example">
    <p id="demo7" class="highlight">Custom tattoo designs based on personal stories are becoming increasingly popular, allowing for deeply meaningful art that is unique to the wearer.</p>
    <img src="https://i.pinimg.com/564x/b3/85/5c/b3855cf6797e22e7fcf76d51a63db6f0.jpg" alt="Tattoo Example">
    <p id="demo8" class="highlight">The rise of eco-friendly inks and practices is also gaining traction in the industry, appealing to environmentally conscious clients.</p>

    <script>
        function myFunction() {
            // Applying styles using class instead of inline styles
            document.getElementById("demo").classList.toggle("highlight");
            document.getElementById("demo2").classList.toggle("highlight");
            document.getElementById("demo3").classList.toggle("highlight");
            document.getElementById("demo4").classList.toggle("highlight");
            document.getElementById("demo5").classList.toggle("highlight");
            document.getElementById("demo6").classList.toggle("highlight");
            document.getElementById("demo7").classList.toggle("highlight");
            document.getElementById("demo8").classList.toggle("highlight");
        }
    </script>

    <button type="button" onclick="myFunction()">Click Me</button>
</body>
</html>
