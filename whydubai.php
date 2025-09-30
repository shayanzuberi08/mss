<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MSS Corporate Services</title>
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }
    /* Right Box */
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
  background: url("images/13.avif") no-repeat center center/cover;
  background-attachment: fixed;
  color: #fff;
  width: 83%;
  height: 500px; /* thoda kam height rakh lo takay overlap naturally lage */
  position: relative;
  text-align: center;
}

.hero-title {
  font-size: 50px;
  color: #0a2c73;
  background: #f2f2f2;
  padding: 25px 40px;
  width: fit-content;
  margin: 0 auto;
  position: absolute;
  bottom: -100px; 
  left: 50%;
  transform: translateX(-50%);
  z-index: 10;
}


  .hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  z-index: 1;
}

    /* Content */
    .content {
      padding: 40px 20px;
      max-width: 1000px;
      margin: auto;
      margin-top: 80px; 
    }
    .content h2 {
      font-size: 1.8rem;
      margin-bottom: 20px;
      color: #0a2c73;
    }
    .content p {
      margin-bottom: 15px;
    }
    .content ul {
      margin-left: 20px;
      margin-bottom: 20px;
    }
    .content ul li {
      margin-bottom: 10px;
    }

    /* Section Titles */
    .sub-section {
      margin-top: 40px;
    }
    .sub-section h3 {
      color: #999;
      margin-bottom: 10px;
    }
    .sub-section p {
      color: #444;
    }

    /* Footer */
    .footer-info {
      margin-top: 20px;
      font-size: 0.9rem;
      color: #ccc;
    }
    /* ===== Responsive: Mobile ek image per row ===== */
    @media (max-width: 768px) {
      
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
      } }
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

  <!-- Hero Section -->
  <section class="hero">

      <h1 class="hero-title">Dubai Visa Services<br>for Your Needs</h1>
  </section>

  <!-- Content Section -->
  <div class="content">
    <h2>Business Opportunities In Dubai</h2>
    <p>
      Dubai offers a plethora of business opportunities across various sectors due to its strategic
      location, dynamic economy, business-friendly policies, and world-class infrastructure. Here are
      some of the key business opportunities in Dubai:
    </p>

    <ul>
      <li><strong>Trade and Import/Export:</strong> Dubai’s strategic location makes it a hub for trade between Asia, Europe, and Africa.</li>
      <li><strong>Tourism and Hospitality:</strong> With iconic landmarks and sunshine year-round, Dubai attracts millions of tourists.</li>
      <li><strong>Real Estate and Property Development:</strong> Dubai’s booming real estate market offers lucrative prospects.</li>
      <li><strong>Retail:</strong> Fashion, electronics, food, and beverages all have potential.</li>
      <li><strong>Technology and IT Services:</strong> Dubai is a rapidly growing tech hub.</li>
      <li><strong>Healthcare and Medical Services:</strong> Growing demand creates opportunities for clinics and medical tourism.</li>
      <li><strong>Education and Training:</strong> Strong demand for private schools, training centers, and institutes.</li>
      <li><strong>Financial Services:</strong> Banking, insurance, and fintech thrive in Dubai.</li>
      <li><strong>Renewable Energy and Sustainability:</strong> UAE invests in green energy projects.</li>
      <li><strong>Events and Entertainment:</strong> Dubai hosts global events, concerts, exhibitions, and festivals.</li>
      <li><strong>Health and Fitness:</strong> Gyms, studios, wellness centers, and healthy food options are in demand.</li>
      <li><strong>Art and Culture:</strong> Thriving art scene with galleries, creative workshops, and cultural events.</li>
    </ul>

    <p>
      Before starting any business in Dubai, conduct market research, understand legal requirements, and seek expert guidance.The specific opportunities that align with your interests, expertise, and market demand will determine the best business venture for you. Dubai offers an exciting and dynamic environment for entrepreneurs, making it an ideal destination to turn business ideas into successful ventures.
    </p>

    <!-- Employment -->
    <div class="sub-section">
      <h3>Employment</h3>
      <p>
       Are you looking to work in Dubai? MSS Corporate Services can help you obtain your work visa quickly and easily. Our team of experts will guide you through the entire process and ensure that you have all the necessary documentation. Contact us today to get started
      </p>
    </div>

    <!-- Education -->
    <div class="sub-section">
      <h3>Education</h3>
      <p>
        Dubai is home to some of the world's best educational institutions. If you're planning to study in Dubai, MSS Corporate Services can assist you in obtaining your student visa. Our team of experts will guide you through the entire process and ensure that you have all the necessary documentation. Contact us today to get started.
      </p>
    </div>

    <!-- Investment -->
    <div class="sub-section">
      <h3>Investment</h3>
      <p>
        Dubai is a hub for business and investment. If you're planning to invest in Dubai, MSS Corporate Services can assist you in obtaining your investor visa. Our team of experts will guide you through the entire process and ensure that you have all the necessary documentation. Contact us today to get started
      </p>
    </div>

    <!-- Retirement -->
    <div class="sub-section">
      <h3>Retirement</h3>
      <p>
        Dubai is a popular destination for retirees. If you're planning to retire in Dubai, MSS Corporate Services can assist you in obtaining your retirement visa. Our team of experts will guide you through the entire process and ensure that you have all the necessary documentation. Contact us today to get started.
      </p>
    </div>
  </div>

  <?php include 'footer.php'; ?>

</body>
</html>
