<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MSS Corporate Services</title>
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
    position: relative;
    background: url('images/10.avif') no-repeat center center/cover;
    height: 100vh;            
    width: 100%;              
    display: flex;
    align-items: center;
    justify-content: center;
}

    .hero-box {
      background: #fff;
      padding: 40px;
      max-width: 600px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.2);
    }
    .hero-box h1 {
      margin: 0 0 15px;
      font-size: 45px;
      color: #002060;
    }
    .hero-box p {
      margin-bottom: 20px;
    }
    .btn {
      display: inline-block;
      background: red;
      color: #fff;
      padding: 10px 18px;
      text-decoration: none;
    }

    /* Services */
    .services {
      padding: 50px 10%;
      background: #f8f8f8;
    }
    .services h2 {
      text-align: center;
      font-size: 26px;
      margin-bottom: 20px;
    }
    .services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); 
    gap: 20px;
}

    .service-card {
      height: 300px;
      background: #fff;
      padding: 20px;
      border: 1px solid #ddd;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .service-card h3 {
      margin-top: 0;
      color: #002060;
    }
    .service-card a {
      color: red;
      font-weight: bold;
      text-decoration: none;
    }

   /* Testimonials */
    .testimonials {
      padding: 60px;
      text-align: center;
      position: relative;
      background: #f8f8f8;
    }

    .testimonial-slider {
      position: relative;
      max-width: 1000px;
      margin: auto;
      overflow: hidden;
    }

    .testimonial {
      display: none;
      transition: opacity 0.5s ease;
    }

    .testimonial.active {
      display: block;
    }

    .testimonial blockquote {
      font-size: 30px;
      font-style: italic;
      margin: 0 auto 20px;
      max-width: 600px;
    }

    .testimonial p {
      color: #c00;
      font-weight: bold;
    }

    /* Arrows */
    .arrow {
      cursor: pointer;
      position: absolute;
      top: 50%;
      padding: 10px;
      font-size: 50px;
      font-weight: bold;
      color: #002060;
      transform: translateY(-50%);
      user-select: none;
    }

    .arrow.left {
      left: 0;
    }

    .arrow.right {
      right: 0;
    }
/* Visa Apply */
.visa-apply {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #f4f4f4;
  padding: 40px 60px;
  border-radius: 5px;
}

.visa-content {
  max-width: 70%;
}

.visa-apply h2 {
  font-size: 32px;
  color: #1a2a6c;
  margin-bottom: 15px;
}

.visa-apply p {
  font-size: 16px;
  line-height: 1.6;
  color: #333;
}

.visa-btn {
  display: flex;
  align-items: center;
}

.visa-btn .plus {
  background: #1a2a6c;
  color: #fff;
  padding: 15px 20px;
  font-size: 20px;
  font-weight: bold;
  text-decoration: none;
}

.visa-btn .apply {
  background: #c00;
  color: #fff;
  padding: 15px 25px;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
}


    /* Contact Form */
    .contact {
      padding: 50px 10%;
      background: #fff;
    }
    .contact h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .contact form {
      max-width: 600px;
      margin: auto;
      display: grid;
      gap: 15px;
    }
    .contact input, .contact textarea {
      padding: 10px;
      border: 1px solid #ccc;
      width: 100%;
    }
    .contact button {
      background: red;
      color: #fff;
      padding: 12px;
      border: none;
      cursor: pointer;
    }
    /* ===== Responsive: Mobile ek image per row ===== */
    /* Mobile (max-width: 768px) */
@media (max-width: 768px) {
  /* Right box icons horizontal bottom bar */
  .right-box {
    position: fixed;
    top: auto;
    bottom: 10px;
    right: 10px;
    width: auto;
    height: auto;
    flex-direction: row;
    padding: 5px 10px;
    background: rgba(255, 255, 255, 0.9);
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

  /* Services grid: 1 column */
  .services-grid {
    grid-template-columns: 1fr !important;
  }

  /* Hero box padding and text size smaller */
  .hero-box {
    padding: 20px;
    max-width: 90%;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
  }

  .hero-box h1 {
    font-size: 28px;
  }

  .hero-box p {
    font-size: 16px;
  }

  .btn {
    padding: 10px 15px;
    font-size: 14px;
  }

  /* Visa apply section: stack vertically */
  .visa-apply {
    flex-direction: column;
    padding: 30px 20px;
  }

  .visa-content {
    max-width: 100%;
    margin-bottom: 20px;
  }

  .visa-apply h2 {
    font-size: 24px;
  }

  .visa-apply p {
    font-size: 14px;
  }

  .visa-btn {
    width: 100%;
    justify-content: center;
    gap: 15px;
  }

  .visa-btn .plus,
  .visa-btn .apply {
    padding: 12px 20px;
    font-size: 16px;
    width: auto;
  }

  /* Testimonials */
  .testimonial blockquote {
    font-size: 20px;
    max-width: 90%;
  }

  .testimonial p {
    font-size: 14px;
  }

  /* Arrows smaller for mobile */
  .arrow {
    font-size: 36px;
    padding: 5px;
  }
}

/* Tablets (769px to 1024px) */
@media (min-width: 769px) and (max-width: 1024px) {
  .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .hero-box {
    padding: 30px;
    max-width: 80%;
  }

  .hero-box h1 {
    font-size: 36px;
  }

  .hero-box p {
    font-size: 18px;
  }

  .btn {
    padding: 12px 20px;
    font-size: 16px;
  }

  .visa-apply {
    padding: 40px 40px;
  }

  .visa-apply h2 {
    font-size: 28px;
  }

  .testimonial blockquote {
    font-size: 24px;
  }

  .testimonial p {
    font-size: 16px;
  }

  .arrow {
    font-size: 42px;
  }
}

  </style>
</head>
<?php include 'header.php'; ?>
<body>
  <!-- Right Box with Icons -->
  <div class="right-box">
    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="https://wa.me/1234567890" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
  </div>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-box">
      <h1>MSS CORPORATE SERVICES</h1>
      <p>
        MSS Corporate Services is your one-stop-shop for all your Dubai visa needs.
         We are a team of experienced professionals who are dedicated to providing you with the best
        visa services possible. Whether you need a tourist visa, work visa, or residency visa,
         we have got you covered. Click here to learn more about our services..
      </p>
      <a href="#" class="btn">Contact Us</a>
    </div>
  </section>

  <!-- Services -->
  <section class="services">
    <h2>SERVICES</h2>
    <div class="services-grid">
      <div class="service-card">
        <h3>Freelance Dubai Visa</h3>
        <p>With our expertise and in-depth knowledge of Dubai's visa regulations, 
            we provide hassle-free solutions to help you obtain your freelance visa quickly and efficiently.
             Enjoy the freedom to work on your terms, explore new opportunities, 
            and thrive in one of the world's most dynamic business environments</p>
        <a href="#">Apply Now</a>
      </div>
      <div class="service-card">
        <h3>Work Visas</h3>
        <p>Looking for work in Dubai? We can assist you with obtaining a work visa. 
            Our team will guide you through the 
            entire process and help you meet all the requirements for a successful application.</p>
        <a href="#">Apply Now</a>
      </div>
      <div class="service-card">
        <h3>Business & Trade Licenses</h3>
        <p>Whether you want to set up a new company, branch, or representative office,
             we have the expertise to guide you through the entire process. From choosing the right legal 
             structure to obtaining the necessary approvals and permits, we handle it all, 
            so you can focus on your core business activities.</p>
        <a href="#">Apply Now</a>
      </div>
      <div class="service-card">
        <h3>Family Visas</h3>
        <p>If you have family members living in Dubai, we can help you obtain a family visa. 
            Our team will guide you through 
            the entire process and ensure that you meet all the requirements for a successful application.</p>
        <a href="#">Apply Now</a>
      </div>
      <div class="service-card">
        <h3>Investor Visas</h3>
        <p>If you're investing in Dubai, you’ll need an investor visa. 
            We assist with the entire process. from obtaining a residency permit to  renewing your visa</p>
        <a href="#">Apply Now</a>
      </div>
      <div class="service-card">
        <h3>Visa Renewals</h3>
        <p>If you need to renew your visa, 
            let our team help you with the renewal process.
            We'll make sure that you meet all the requirements for a successful renewal
        </p>
        <a href="#">Apply Now</a>
      </div>
    </div>
  </section>

<!-- Testimonials -->
  <section class="testimonials">
    <h2>Testimonials</h2>
    <div class="testimonial-slider">
      <div class="testimonial active">
        <blockquote>
          “I was really impressed with the service I received from MSS Corporate Services. 
          They made the visa application process so easy and stress-free.”
          I would highly recommend them to anyone in need of visa services.”
        </blockquote>
        <p>- John Smith, CEO of Abetech Incdom</p>
      </div>

      <div class="testimonial">
        <blockquote>
          “I needed a work visa for Dubai and MSS Corporate Services made the entire process so easy. Their team of experts guided me 
          through the entire process and answered all my questions. I would definitely use their services again.”
        </blockquote>
        <p>- Muhammad Mahad - CEO of Degree60</p>
      </div>

      <div class="testimonial">
        <blockquote>
          “I needed to renew my residency visa and MSS Corporate Services made the process so easy. 
          Their team of experts was knowledgeable and professional.
          I would highly recommend them to anyone in need of visa services.”
        </blockquote>
        <p>- David Lee, IT Manager of LMN Company</p>
      </div>

      <!-- Arrows -->
      <span class="arrow left" onclick="prevTestimonial()">&#10094;</span>
      <span class="arrow right" onclick="nextTestimonial()">&#10095;</span>
    </div>
  </section>


<!-- Visa Apply -->
<div class="Visa-Apply" style="padding: 50px 10%;">
    <section class="visa-apply">
  <div class="visa-content">
    <h2>Need a Dubai Visa?</h2>
    <p>
      Don’t let the visa application process stress you out. Let MSS Corporate Services help you with all your visa needs. Contact us today to learn more about our services and how we can help you.
    </p>
  </div>
  <div class="visa-btn">
    <a href="#" class="plus">+</a>
    <a href="#" class="apply">Apply Now</a>
  </div>
</section>
</div>
<?php include 'footer.php'; ?>

</body>
<script>
     let currentIndex = 0;
    const testimonials = document.querySelectorAll(".testimonial");

    function showTestimonial(index) {
      testimonials.forEach((t, i) => {
        t.classList.remove("active");
        if (i === index) t.classList.add("active");
      });
    }

    function nextTestimonial() {
      currentIndex = (currentIndex + 1) % testimonials.length;
      showTestimonial(currentIndex);
    }

    function prevTestimonial() {
      currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
      showTestimonial(currentIndex);
    }

    // Show first testimonial on load
    showTestimonial(currentIndex);

    // Auto-slide every 2 seconds
    setInterval(nextTestimonial, 2000);
</script>

 
</html>
