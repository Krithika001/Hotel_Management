
<html>
<head>
	<title> Welcome to AK Holtel </title>
</head>
<body>
<style>
.scroll-left {
 height: 80px;	
 overflow: hidden;
 position: relative;
}
.scroll-left p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 70px;
 /* Starting position */
 transform:translateX(100%);
 /* Apply animation to this element */
 animation: scroll-left 15s linear infinite;
}
/* Move it (define the animation) */
@keyframes scroll-left {
 0%   {
 transform: translateX(100%); 		
 }
 100% {
 transform: translateX(-100%); 
 }
}
</style>

<div class="scroll-left">

<p>Welcome TO Our Hotel!!!!  Enjoy our services by booking NOW!!!</p>
</div>

<p>
<style>
.container {
        display: flex;
        align-items: center;
        justify-content: center
      }
      img {
        max-width: 100%
      }
      .image {
        flex-basis: 40%
      }
      .text {
        font-size: 20px;
        padding-left: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="image">
        <img src="http://localhost/Hotel_Booking/my_imge.jpg.jpeg">
      </div>
      <div class="text">
        <h1>One's destination is never a place but new way of seeing things!!!</h1>
      </div>
    </div>
	<body>
    <div class="container">
      <div class="image">
      <img src="http://localhost/Hotel_Booking/my_image2.jpeg"  
       alt="Hotel Image"
	   align="right">
      </div>
      <div class="text">
        <h1>Hotel Booking System</h1>
		<h2>By</h2>
		<h3>19pd05-Alagu Prakalya</h3>
		<h4>19pd19-Krithika</h4>
      </div>
    </div>
</body>

<body style="background-color:blue;"></body>
</html>
