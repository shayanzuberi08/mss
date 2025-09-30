<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }

.right-box {
      position: fixed;
      top: 15%;
      right: 0;
      width: 100px;
      height: 80vh; 
      z-index: 1000;
      display: flex;              /* flexbox for centering */
      flex-direction: column;     /* icons vertically arrange honge */
      justify-content: center;    /* vertically center */
      align-items: center;        /* horizontally center */
      gap: 20px;                  /* icons ke beech spacing */
    }

    .right-box a {
      font-size: 30px;   /* icon size */
      color: #0a2c73;    /* blue tone */
      text-decoration: none;
      transition: transform 0.3s, color 0.3s;
    }

    .right-box a:hover {
      color: #0077b5;   /* hover effect (LinkedIn blue jaisa) */
      transform: scale(1.2);
    }

    /* Hero Section */
.hero {
  background: url("images/11.avif") no-repeat center center/cover;
  color: #fff;
  width: 100%;
  height: 300px; /* thoda kam height rakh lo takay overlap naturally lage */
  position: relative;
  text-align: center;
}


  .hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  z-index: 1;
}

.hero h1 {
  position: absolute;
  bottom: 70px;
  left: 40px;             /* Moves it away from the left edge */
  margin: 0;
  padding: 15px 30px;
  border-radius: 6px;
  font-size: 50px;
  color: #0a2c73;
}


 .gallery {
      max-width: 1000px;
      margin: 50px auto;
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* always 2 per row */
      gap: 25px;
      padding: 0 20px;
    }

    .gallery-item {
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .gallery-item:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }

    .gallery img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      display: block;
    }

    /* ===== Responsive: Mobile ek image per row ===== */
    @media (max-width: 768px) {
      .gallery {
        grid-template-columns: 1fr;
      }
      .right-box {
        position: fixed;
        top: auto; /* Remove top position */
        bottom: 10px; /* Bottom se thoda gap */
        right: 10px;
        width: auto;
        height: auto;
        flex-direction: row; /* Horizontal icons */
        padding: 5px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 8px;
        gap: 15px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        display: flex; /* show the box */
        justify-content: center;
        align-items: center;
      }

      .right-box a {
        font-size: 24px;
        color: #0a2c73;
      }
    }

  </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
       <!-- Right Box with Icons -->
  <div class="right-box">
    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="https://wa.me/1234567890" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
  </div>
  <!-- HERO -->
  <section class="hero">
    <h1>Gallery</h1>
  </section>

<!-- GALLERY SECTION -->
<section class="gallery">
  <div class="gallery-item">
    <img src="images/TECHNICAL 5.jpg" alt="Technical Services License">
  </div>
  <div class="gallery-item">
    <img src="images/MARKETING 2.jpg" alt="Marketing Management License">
  </div>
  <div class="gallery-item">
    <img src="images/facility 1.jpg" alt="Facility Management License">
  </div>
  <div class="gallery-item">
    <img src="images/IT 3.jpg" alt="IT License">
  </div>
</section>

    <?php include 'footer.php'; ?>
</body>
</html>
