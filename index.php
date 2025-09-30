<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MSS Corporate Services</title>
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <?php include 'header.php'; ?>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    .logo img {
      display: block;
      height: 100%;
      width: 100%;
    }

    /* Right Box */
    .right-box {
      position: fixed;
      top: 15%;
      right: 0;
      width: 100px;
      height: 80vh;
      z-index: 1000;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 20px;
    }

    .right-box a {
      font-size: 30px;
      color: #0a2c73;
      text-decoration: none;
      transition: transform 0.3s, color 0.3s;
    }

    .right-box a:hover {
      color: #0077b5;
      transform: scale(1.2);
    }

    /* Hero Section */
    .hero {
      background: url("images/12.avif") no-repeat center center/cover;
      background-attachment: fixed;
      color: #fff;
      width: 83%;
      height: 500px;
      position: relative;
      text-align: center;
      margin: 0 auto;
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
      width: 100%;
      z-index: 1;
    }

    /* ===== CONTENT ===== */
    .content {
      padding: 50px;
      max-width: 1000px;
      margin: 80px auto 0;
    }

    .point {
      margin-bottom: 30px;
    }

    .point h3 {
      color: #002060;
      margin-bottom: 10px;
      font-size: 24px;
    }

    .point p {
      color: #333;
      font-size: 18px;
    }

    /* TABLET RESPONSIVE */
    @media (min-width: 769px) and (max-width: 1024px) {
      .hero {
        width: 95%;
        height: 400px;
        background-attachment: scroll;
        padding: 30px;
      }

      .hero-title {
        font-size: 36px;
        padding: 20px 30px;
        bottom: -80px;
      }

      .content {
        padding: 30px 40px;
        max-width: 800px;
        margin-top: 70px;
      }

      .point h3 {
        font-size: 20px;
      }

      .point p {
        font-size: 16px;
      }

      .right-box {
        width: 60px; /* thoda chhota */
        height: auto;
        top: 20%;
        right: 10px;
        gap: 15px;
        flex-direction: column;
        padding: 10px 5px;
      }

      .right-box a {
        font-size: 26px;
      }
    }

    /* MOBILE RESPONSIVE */
    @media (max-width: 768px) {
      .hero {
        width: 100%;
        height: 300px;
        background-attachment: scroll;
        padding: 20px;
      }

      .hero-title {
        font-size: 28px;
        padding: 15px 20px;
        bottom: -60px;
      }

      .content {
        padding: 20px;
        margin-top: 60px;
      }

      .point h3 {
        font-size: 18px;
      }

      .point p {
        font-size: 16px;
      }

      /* Show social icons as a horizontal bar on mobile */
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

    @media (max-width: 480px) {
      .hero {
        height: 250px;
      }

      .hero-title {
        font-size: 22px;
        padding: 10px 15px;
        bottom: -50px;
      }

      .point h3 {
        font-size: 16px;
      }

      .point p {
        font-size: 14px;
      }

      .right-box {
        position: fixed;
        top: auto;
        bottom: 10px;
        right: 10px;
        width: auto;
        height: auto;
        flex-direction: row;
        padding: 5px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 8px;
        gap: 15px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        display: flex;
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

  <!-- Right Box with Icons -->
  <div class="right-box">
    <a href="https://www.facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://wa.me/1234567890" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
  </div>

  <!-- HERO -->
  <section class="hero">
    <h1 class="hero-title">Why Choose MSS Corporate Services for Dubai Visa Services?</h1>
  </section>

  <!-- CONTENT -->
  <section class="content">
    <div class="point">
      <h3>01.</h3>
      <p>At MSS Corporate Services, we understand how stressful and time-consuming visa processing can be. That's why we offer hassle-free visa processing services to make the process as smooth and stress-free as possible. Our team of experts will guide you through every step of the process and ensure that all your paperwork is in order.</p>
    </div>
    <div class="point">
      <h3>02.</h3>
      <p>End-to-End Support: From the initial consultation to the successful completion of your visa application or business setup, we offer comprehensive support at every stage. Our team will handle the paperwork, documentation, and communication with relevant authorities, so you can focus on your other priorities.</p>
    </div>
    <div class="point">
      <h3>03.</h3>
      <p>At MSS Corporate Services, we offer cost-effective solutions to meet your visa processing needs. We understand that every client has different requirements and budget constraints, which is why we offer customized solutions to meet your specific needs. Our services are competitively priced and transparent, with no hidden fees or charges.</p>
    </div>
    <div class="point">
      <h3>04.</h3>
      <p>PRO Services: Our Public Relations Officer (PRO) services help you with document attestations, translations, and other government-related formalities, saving you time and effort.</p>
    </div>
    <div class="point">
      <h3>05.</h3>
      <p>At Last MSS provides not only documentations for your visa or business setup, but we also strive to help you in setting and managing the business by connecting with the industry experts in Dubai or in UAE.</p>
    </div>
  </section>

  <?php include 'footer.php'; ?>

</body>
</html>
