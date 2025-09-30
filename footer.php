<style>
    footer {
      background: #0d1b4c;
      color: #fff;
      padding: 50px 30px;
    }

    footer h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    form {
      max-width: 800px;
      margin: auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    form input,
    form textarea {
      width: 100%;
      padding: 10px;
      border: none;
      border-bottom: 2px solid #ccc;
      background: transparent;
      color: #fff;
      outline: none;
    }

    form textarea {
      grid-column: span 2;
      resize: none;
      height: 80px;
    }

    form button {
      grid-column: span 2;
      padding: 12px;
      background: #fff;
      color: #0d1b4c;
      border: none;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
    }

    form button:hover {
      background: #d32f2f;
      color: #fff;
    }

    .footer-info {
      text-align: center;
      margin-top: 40px;
      font-size: 14px;
      line-height: 1.8;
    }

</style>

 <!-- FOOTER -->
  <footer id="contact">
    <h2>Contact Us</h2>
    <form>
      <input type="text" placeholder="First Name *" required>
      <input type="text" placeholder="Last Name *" required>
      <input type="email" placeholder="Email *" required>
      <textarea placeholder="Message"></textarea>
      <button type="submit">Submit</button>
    </form>
    <div class="footer-info">
      Suit#116, 1st Floor, Dubai Shopping Center, Deira - Dubai <br>
      Tel. 123-456-7890 | Email: info@mysite.com <br>
      © 2023, Powered by Balt AlQaswa Project Management, Dubai
    </div>
    
  </footer>