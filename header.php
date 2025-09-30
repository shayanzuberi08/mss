<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Navbar Active Example</title>
  <style>
    /* ===== RESET ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    /* ===== HEADER ===== */
    header {
      background: #fff;
      padding: 15px 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-bottom: 1px solid #ddd;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header .logo img {
      height: 60px;
    }

    nav {
      display: flex;
      align-items: center;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
      
    }

    nav ul li a {
      text-decoration: none;
      color: #002060;
      font-weight: bold;
      transition: 0.3s;
    }

    nav ul li a:hover,
    nav ul li a.active {
      color: #d32f2f;
    }

    /* ===== HAMBURGER MENU ===== */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 5px;
    }

    .hamburger span {
      height: 3px;
      width: 25px;
      background: #002060;
      border-radius: 2px;
    }

    @media (max-width: 768px) {
      nav {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 250px;
        background: #fff;
        box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
        transform: translateX(-100%);
        transition: transform 0.3s ease-in-out;
        z-index: 999;
        padding-top: 80px;
      }

      nav.active {
        transform: translateX(0);
      }

      nav ul {
        flex-direction: column;
        gap: 20px;
        padding: 0 20px;
      }
      header {
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
      .logo {
    order: 1; /* logo on left */
    }

      .hamburger {
    display: flex;
    order: 2; /* make sure hamburger stays on right */
  }
    }
  </style>
</head>
<body>
  <!-- HEADER -->
  <header>
    <div class="logo">
      <img src="./images/logo.png" alt="Logo" />
    </div>

    <div class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav>
      <ul id="nav-list">
        <li><a href="./index.php">About Us</a></li>
        <li><a href="./gallery.php">Gallery</a></li>
        <li><a href="./ourservices.php">Our Services</a></li>
        <li><a href="./whydubai.php">Why Dubai</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <script>
    const hamburger = document.getElementById("hamburger");
    const nav = document.querySelector("nav");
    const navLinks = document.querySelectorAll("nav ul li a");

    hamburger.addEventListener("click", () => {
      nav.classList.toggle("active");
    });

    navLinks.forEach(link => {
      link.addEventListener("click", () => {
        nav.classList.remove("active");
      });
    });
  </script>
</body>
</html>
