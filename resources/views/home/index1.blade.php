<!DOCTYPE html>
<html>

<head>
    <title>Tourism System</title>
    <style>
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: skyblue;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 15px;
            text-decoration: none;
            font-family: "Arial";
            font-size: 20px;
        }

        li a:hover {
            background-color: #4A71AB;
        }


        .mySlides {
            display: none
        }

        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
            max-length: 100%;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.2s ease;
        }

        .active {
            background-color: #717171;
        }

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 2s;
            animation-name: fade;
            animation-duration: 2s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        .text {
            font-size: 70px;
            padding: 8px 70px;
            position: absolute;
            bottom: 8px;
            width: 90%;
            text-align: right;
            font-color: #2D4E7F;
            font-family: Arial;


        }

        h1 {
            color: steelblue;
            text-align: center;
            font-family: "Arial";

        }

        h3 {
            color: darkgrey;
            text-align: center;
            font-family: "Arial";

        }

        .row {
            box-sizing: border-box;
            width: 70%;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        .top-left {
            position: absolute;
            top: 30px;
            left: 16px;
            color: brown;
            font-size: 40px;
            font-family: "Helvetica";
            font-weight: bold;
        }

        .container {
            padding: 0 10px;
            width: 70%;

        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

       

        .button {
            background-color: deepskyblue;
            border: none;
            color: white;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #555;
        }

        #main {
            transition: margin-left .5s;
            padding: 25px;
        }

        .footer-distributed {
            background-color: #292c2f;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: normal 16px sans-serif;
            padding: 50px;
            margin-top: 80px;
        }

        .footer-distributed .footer-left p {
            color: #8f9296;
            font-size: 14px;
            margin: 0;
        }

        /* Footer links */

        .footer-distributed p.footer-links {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            margin: 0 0 10px;
            padding: 0;
        }

        .footer-distributed p.footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .footer-distributed .footer-right {
            float: right;
            margin-top: 6px;
            max-width: 180px;
        }

        .footer-distributed .footer-right a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background-color: #33383b;
            border-radius: 2px;

            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;

            margin-left: 3px;
        }

        @media (max-width: 600px) {

            .footer-distributed .footer-left,
            .footer-distributed .footer-right {
                text-align: center;
            }

            .footer-distributed .footer-right {
                float: none;
                margin: 0 auto 20px;
            }

            .footer-distributed .footer-left p.footer-links {
                line-height: 1.8;
            }
        }

        #gallery-text-left {
            /* Added */
            width: 33%;
            text-align: center;
        }

        #gallery-paragraph-1 {
            border-left: 8px white;
            border-radius: 4px;
            padding-left: 15px;
            /* Added */
            word-wrap: break-word;
        }

        #gallery-paragraph-2 {
            border-left: 8px white;
            border-radius: 4px;
            padding-left: 15px;
        }

        #gallery-text-center {
            /* Added */
            width: 33%;
            height: 300px;
            text-align: center;
        }

        #gallery-paragraph-3 {
            border-left: 8px white;
            border-radius: 4px;
            padding-left: 15px;
            word-wrap: break-word;
        }

        #gallery-text-right {
            /* Added */
            width: 33%;
            height: 300px;
            text-align: center;
        }

        #gallery-text-contact1 {
            /* Added */
            width: 50%;
            height: 210px;
            padding-left: 120px;

        }

        #gallery-text-contact2 {
            /* Added */
            width: 40%;
            height: 210px;


        }


        div.gallery {


            float: left;
            width: 317px;
        }



        div.gallery img {
            width: 100%;

        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px white;
            border-radius: 12px;
        }

        .button2:hover {
            background-color: white;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 255, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
            border: 2px solid deepskyblue;
        }

        .button3:hover {
            background-color: white;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
            border: 2px solid deepskyblue;
        }

        .button4:hover {
            background-color: white;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
            border: 2px solid deepskyblue;
        }

        .button5:hover {
            background-color: white;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
            border: 2px solid deepskyblue;
        }


        textarea {
            width: 60%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: none;

        }

        input[type=text],
        select {
            width: 70%;

            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 200px;

            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;

        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .review {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;


        }

        .review:hover {
            border: 1px solid #777;
        }

        .review img {
            width: 100%;
            height: auto;
        }

        .details {
            padding: 15px;
            text-align: center;
        }


        .rbutton {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 50px 50px;
        }

        .review:hover .image {
            opacity: 0.3;
        }

        .review:hover .middle {
            opacity: 1;
        }

        @keyframes slidy {
            0% {
                left: 0%;
            }
            20% {
                left: 0%;
            }
            25% {
                left: -100%;
            }
            45% {
                left: -100%;
            }
            50% {
                left: -200%;
            }
            70% {
                left: -200%;
            }
            75% {
                left: -300%;
            }
            95% {
                left: -300%;
            }
            100% {
                left: -400%;
            }
        }

        body {
            margin: 0;
        }

        div#slider {
            overflow: hidden;
        }

        div#slider figure img {
            width: 10%;
            float: left;
        }

        div#slider figure {
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            text-align: left;
            font-size: 0;
            animation: 7s slidy infinite;
        }

        div.gallery {
    margin: 5px;
    border: 1px solid white;
    float: left;
    width: 417px;
            
}

div.gallery:hover {
    border: 1px solid white;
}

div.gallery img {
    width: 100%;
    height: 350px;
}

div.desc {
    padding: 5px;
    text-align: center;
}
        
        .ic {
	border:0;
	float:right;
	background:#fff;
	color:#f00;
	width:50%;
	line-height:10px;
	font-size:10px;
	margin:-220% 0 0 0;
	overflow:hidden;
	padding:0
}
        .container_12{ position: relative; width: 960px; margin: 0 auto; padding: 0; }
	.grid_1,
	.grid_2,
	.grid_3,
	.grid_4,
	.grid_5,
	.grid_6,
	.grid_7,
	.grid_8,
	.grid_9,
	.grid_10,
	.grid_11,
	.grid_12
	{ float: left; display: inline; margin-left: 10px; margin-right: 10px; }

    /* Nested Column Classes */
     .container_12 .alpha               { margin-left: 0; }
     .container_12 .omega               { margin-right: 0; }

    /* Base Grid */
    .container_12 .grid_1			{ width: 60px;  }
    .container_12 .grid_2			{ width: 140px; }
    .container_12 .grid_3			{ width: 220px; }
    .container_12 .grid_4			{ width: 300px; }
    .container_12 .grid_5			{ width: 380px; }
    .container_12 .grid_6			{ width: 460px; }
    .container_12 .grid_7			{ width: 540px; }
    .container_12 .grid_8			{ width: 620px; }
    .container_12 .grid_9			{ width: 700px; }
    .container_12 .grid_10			{ width: 780px; }
    .container_12 .grid_11			{ width: 860px; }
    .container_12 .grid_12			{ width: 940px; }
	/* Prefix Extra Space >> 12 Columns */
	.container_12 .prefix_1 		{padding-left:80px;}
	.container_12 .prefix_2 		{padding-left:160px;}
	.container_12 .prefix_3 		{padding-left:240px;}
	.container_12 .prefix_4 		{padding-left:320px;}
	.container_12 .prefix_5 		{padding-left:400px;}
	.container_12 .prefix_6 		{padding-left:480px;}
	.container_12 .prefix_7 		{padding-left:560px;}
	.container_12 .prefix_8 		{padding-left:640px;}
	.container_12 .prefix_9 		{padding-left:720px;}
	.container_12 .prefix_10 		{padding-left:800px;}
	.container_12 .prefix_11 		{padding-left:880px;}
	/* Suffix Extra Space >> 12 Columns */
	.container_12 .suffix_1 		{padding-right:80px;}
	.container_12 .suffix_2 		{padding-right:160px;}
	.container_12 .suffix_3 		{padding-right:240px;}
	.container_12 .suffix_4 		{padding-right:320px;}
	.container_12 .suffix_5 		{padding-right:400px;}
	.container_12 .suffix_6 		{padding-right:480px;}
	.container_12 .suffix_7 		{padding-right:560px;}
	.container_12 .suffix_8 		{padding-right:640px;}
	.container_12 .suffix_9 		{padding-right:720px;}
	.container_12 .suffix_10 		{padding-right:800px;}
	.container_12 .suffix_11 		{padding-right:880px;}

/* #Tablet (Portrait)
================================================== */

    /* Note: Design for a width of 768px */

    @media only screen and (min-width: 768px) and (max-width: 995px) {
        .container_12                                  { width: 768px; }
        .grid_1,
		.grid_2,
		.grid_3,
		.grid_4,
		.grid_5,
		.grid_6,
		.grid_7,
		.grid_8,
		.grid_9,
		.grid_10,
		.grid_11,
		.grid_12
		{ margin-left: 10px; margin-right: 10px;  }
         .container_12 .alpha               { margin-left: 0;}
         .container_12 .omega               { margin-right: 0;}

        .container_12 .grid_1 			{ width: 44px; }
        .container_12 .grid_2  			{ width: 108px; }
        .container_12 .grid_3    		{ width: 172px; }
        .container_12 .grid_4 			{ width: 236px; }
        .container_12 .grid_5    		{ width: 300px; }
        .container_12 .grid_6   		{ width: 364px; }
        .container_12 .grid_7 			{ width: 428px; }
        .container_12 .grid_8  			{ width: 492px; }
        .container_12 .grid_9 			{ width: 556px; }
        .container_12 .grid_10			{ width: 620px; }
        .container_12 .grid_11			{ width: 684px; }
        .container_12 .grid_12			{ width: 748px; }
		/* Prefix Extra Space >> 12 Columns */
		.container_12 .prefix_1 		{padding-left:64px;}
		.container_12 .prefix_2 		{padding-left:128px;}
		.container_12 .prefix_3 		{padding-left:192px;}
		.container_12 .prefix_4 		{padding-left:256px;}
		.container_12 .prefix_5 		{padding-left:320px;}
		.container_12 .prefix_6 		{padding-left:384px;}
		.container_12 .prefix_7 		{padding-left:448px;}
		.container_12 .prefix_8 		{padding-left:512px;}
		.container_12 .prefix_9 		{padding-left:576px;}
		.container_12 .prefix_10 		{padding-left:640px;}
		.container_12 .prefix_11 		{padding-left:768px;}
		/* Suffix Extra Space >> 12 Columns */
		.container_12 .suffix_1 		{padding-right:64px;}
		.container_12 .suffix_2 		{padding-right:128px;}
		.container_12 .suffix_3 		{padding-right:192px;}
		.container_12 .suffix_4 		{padding-right:256px;}
		.container_12 .suffix_5 		{padding-right:320px;}
		.container_12 .suffix_6 		{padding-right:384px;}
		.container_12 .suffix_7 		{padding-right:448px;}
		.container_12 .suffix_8 		{padding-right:512px;}
		.container_12 .suffix_9 		{padding-right:576px;}
		.container_12 .suffix_10 		{padding-right:640px;}
		.container_12 .suffix_11 		{padding-right:768px;}
    }


/*  #Mobile (Portrait)
================================================== */

    /* Note: Design for a width of 320px */

    @media only screen and (max-width: 767px) {
        .container_12{width: 300px;}
        .grid_1,
		.grid_2,
		.grid_3,
		.grid_4,
		.grid_5,
		.grid_6,
		.grid_7,
		.grid_8,
		.grid_9,
		.grid_10,
		.grid_11,
		.grid_12{margin: 0;}

        .container_12 .grid_1,
        .container_12 .grid_2,
        .container_12 .grid_3,
        .container_12 .grid_4,
        .container_12 .grid_5,
        .container_12 .grid_6,
        .container_12 .grid_7,
        .container_12 .grid_8,
        .container_12 .grid_9,
        .container_12 .grid_10,
        .container_12 .grid_11,
        .container_12 .grid_12{width: 300px;}
		/* Prefix Extra Space >> 12 Columns */
		.container_12 .prefix_1,
		.container_12 .prefix_2,
		.container_12 .prefix_3,
		.container_12 .prefix_4,
		.container_12 .prefix_5,
		.container_12 .prefix_6,
		.container_12 .prefix_7,
		.container_12 .prefix_8,
		.container_12 .prefix_9,
		.container_12 .prefix_10,
		.container_12 .prefix_11{padding-left:0;}
		/* Suffix Extra Space >> 12 Columns */
		.container_12 .suffix_1,
		.container_12 .suffix_2,
		.container_12 .suffix_3,
		.container_12 .suffix_4,
		.container_12 .suffix_5,
		.container_12 .suffix_6,
		.container_12 .suffix_7,
		.container_12 .suffix_8,
		.container_12 .suffix_9,
		.container_12 .suffix_10,
		.container_12 .suffix_11{padding-right:0;}
    }


/* #Mobile (Landscape)
================================================== */

    /* Note: Design for a width of 480px */

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .container_12 { width: 420px; }
        .grid_1,
		.grid_2,
		.grid_3,
		.grid_4,
		.grid_5,
		.grid_6,
		.grid_7,
		.grid_8,
		.grid_9,
		.grid_10,
		.grid_11,
		.grid_12{margin: 0;}

        .container_12 .grid_1,
        .container_12 .grid_2,
        .container_12 .grid_3,
        .container_12 .grid_4,
        .container_12 .grid_5,
        .container_12 .grid_6,
        .container_12 .grid_7,
        .container_12 .grid_8,
        .container_12 .grid_9,
        .container_12 .grid_10,
        .container_12 .grid_11,
        .container_12 .grid_12{width: 420px;}
		/* Prefix Extra Space >> 12 Columns */
		.container_12 .prefix_1,
		.container_12 .prefix_2,
		.container_12 .prefix_3,
		.container_12 .prefix_4,
		.container_12 .prefix_5,
		.container_12 .prefix_6,
		.container_12 .prefix_7,
		.container_12 .prefix_8,
		.container_12 .prefix_9,
		.container_12 .prefix_10,
		.container_12 .prefix_11{padding-left:0;}
		/* Suffix Extra Space >> 12 Columns */
		.container_12 .suffix_1,
		.container_12 .suffix_2,
		.container_12 .suffix_3,
		.container_12 .suffix_4,
		.container_12 .suffix_5,
		.container_12 .suffix_6,
		.container_12 .suffix_7,
		.container_12 .suffix_8,
		.container_12 .suffix_9,
		.container_12 .suffix_10,
		.container_12 .suffix_11{padding-right:0;}
    }
.banner {
    top: -45px;
    position: relative;
}

.banner .label {
    color: #fff;
    position: absolute;
    text-align: center;
    left: 0;
    top: 50%;
    margin-top: -38px;
    right: 0;
    text-transform: uppercase;
}


.banner .label .title {
    font-size: 30px;
    margin-bottom: 14px;
    text-transform: uppercase;
}

.banner .label .price span {
    display: block;
    font-size: 24px;
    padding-top: 3px;
}

.banner a {
    font-size: 14px;
    line-height: 20px;
    color: #c73430;
    text-transform: uppercase;
    display: inline-block;
    background-color: #e5e5e5;
    padding: 5px 18px 4px;
    margin-top: 25px;
    border-radius: 13px;
}

.banner a:hover {
    background-color: #c73430;
    color: #fff;
}
        .banners {
    overflow: hidden;
    padding-top: 100px;
}
        
        .slideshow-container{
            margin-top: -20px;
        }

.banners .banner {
    top: 0;
    margin-top: 20px;
}
        .banner img {
    width: 100%;
}


.banner {
    margin-bottom: 25px;
} 
    </style>
</head>

<body>
    <div section id="home_section">
        <ul>
            
            <li><a href="/login">Login</a></li>
            

         
            </li>
            <!-- <li><a href="/hotel">Hotel</a></li> -->

            <li><a href="#about_us">About Us</a>
            </li>
            <li><a href="/gallery1">Gallery</a></li>
            <li><a href="/places1">Top visited places</a></li>

            


        </ul>
    </div>

    <br>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade ">
            <img src="images/2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/3.jpg" style="width:100%">
        </div>



    </div> <br>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <div section id="about_us">
        <h1>About Us</h1>
        <div id="gallery-text">

            <div id="gallery-text-left" style="float:left">
                <p id="gallery-text-quote-left" style="font-family:Century Gothic; color:firebrick" text-allign="center"><b>Our Vision</b></p>

                <p id="gallery-paragraph-1" style="font-family:Georgia">
                    Tourism which is ethical, fair and a positive experience for both travellers and the people and places they visit
                </p>
            </div>
            <div id="gallery-text-right" style="float:left">
                <p id="gallery-text-quote-right" style="font-family:Century Gothic; color:firebrick"><b>Our Mission</b></p>
                <p id="gallery-paragraph-2" style="font-family:Georgia">
                    <a>To ensure tourism always benefits local people by challenging bad practice and promoting better tourism</a>
                </p>
            </div>
            <div id="gallery-text-center" style="float:left">
                <p id="gallery-text-quote-center" style="font-family:Century Gothic; color:firebrick"><b>Safety Information</b></p>
                <p id="gallery-paragraph-3" style="font-family:Georgia">
                    <a>Vacation is a time to relax in safe surroundings.For emergency aid of any kind, call 911 from any phone... in your hotel, dial 9-911.</a>
                </p>
            </div>
        </div>

    </div><br>

    <div section id="advertisement">
        <h1>Advertisements</h1>
        <h3>Our guides are expensive, so first decide what you want to do, whether it's a general tour of a city, a day of hiking, or visiting remote villages in a third-world country. Have a ball-park time allotment in mind, whether it's a half-day, a full-day, or a multi-day experience. Once you have chosen a guide, you'll probably refine your ideas based upon the guide's knowledge</h3>
        <div>
            <div id="slider">
                <figure>
                    <img src="images/1.jpg" alt>
                    <img src="images/2.jpg" alt>
                    <img src="images/3.jpg" alt>
                    <img src="images/bd1.jpg" alt>
                    <img src="images/bd2.jpg" alt>
                    <img src="images/bd3.jpg" alt>
                </figure>
            </div>

        </div>

    </div><br>
 


    <footer class="footer-distributed">

        <div class="footer-right">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

        <div class="footer-left">

            <p class="footer-links">
                <a href="#home_section">Home</a> ·
                <a href="/gallery">Gallery</a> ·
                <a href="#advertisement">Advertisements</a> ·
                <a href="#about_us">About Us</a> ·
            </p>

            <p> &copy; 2017</p>
        </div>

    </footer>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

    </script>

    <br>



</body>

</html>
