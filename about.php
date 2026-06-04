<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>About Us | Arolait Global College of Health Technology</title>
  <!-- Google Fonts & Font Awesome -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #ffffff;
      color: #1e2a3a;
      scroll-behavior: smooth;
      line-height: 1.5;
    }

    :root {
      --primary: #915F07;
      --primary-dark: #6e4505;
      --secondary: #FFC333;
      --secondary-light: #ffe2a4;
      --dark: #0E0F10;
      --gray-bg: #f9fafb;
      --shadow-sm: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
      --shadow-md: 0 20px 25px -12px rgba(0, 0, 0, 0.08);
      --transition: all 0.3s ease;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }

    .section {
      padding: 80px 0;
    }

    .section-sm {
      padding: 60px 0;
    }

    .text-center {
      text-align: center;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 12px 28px;
      border-radius: 40px;
      font-weight: 600;
      text-decoration: none;
      transition: var(--transition);
      border: none;
      cursor: pointer;
      font-size: 0.95rem;
    }

    .btn-primary {
      background: var(--primary);
      color: white;
      box-shadow: 0 4px 8px rgba(145, 95, 7, 0.2);
    }

    .btn-primary:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(145, 95, 7, 0.25);
    }

    .btn-outline {
      background: transparent;
      border: 2px solid var(--primary);
      color: var(--primary);
    }

    .btn-outline:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-2px);
    }

    .section-title {
      font-size: 2.2rem;
      font-weight: 800;
      margin-bottom: 1rem;
      letter-spacing: -0.02em;
      color: #1f2937;
    }

    .section-sub {
      color: #4b5563;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    /* top bar */
    .top-bar {
      background: #fef7e6;
      padding: 8px 0;
      font-size: 0.85rem;
      border-bottom: 1px solid #f0e5d2;
    }

    .top-bar .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
    }

    .contact-info {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .contact-info a {
      text-decoration: none;
      color: #2c3e2f;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-weight: 500;
    }

    .social-icons a {
      color: #5b3c1a;
      margin-left: 18px;
      font-size: 1rem;
      transition: color 0.2s;
    }

    .social-icons a:hover {
      color: var(--primary);
    }

    .login-links {
      display: flex;
      gap: 20px;
    }

    .login-links a {
      font-weight: 600;
      text-decoration: none;
      color: var(--primary);
      font-size: 0.85rem;
    }

    /* navbar */
    .navbar {
      background: white;
      box-shadow: 0 1px 2px rgba(0,0,0,0.03), 0 1px 6px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 100;
      padding: 12px 0;
    }

    .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .logo img {
      height: 70px;
      object-fit: contain;
    }

    .nav-links {
      display: flex;
      gap: 28px;
      list-style: none;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: 600;
      color: #1f2d3a;
      transition: 0.2s;
      font-size: 0.95rem;
    }

    .nav-links a:hover, .nav-links a.active {
      color: var(--primary);
    }

    .menu-toggle {
      display: none;
      font-size: 1.8rem;
      background: none;
      border: none;
      cursor: pointer;
      color: var(--primary);
    }

    /* page banner */
    .page-banner {
      background: linear-gradient(105deg, #fef9ef 0%, #fff6e8 100%);
      padding: 60px 0;
      margin-bottom: 20px;
    }

    .page-banner h1 {
      font-size: 2.8rem;
      font-weight: 800;
      color: #143052;
      margin-bottom: 12px;
    }

    .breadcrumb {
      display: flex;
      gap: 12px;
      list-style: none;
      color: #5b6e8c;
    }

    .breadcrumb a {
      text-decoration: none;
      color: var(--primary);
    }

    /* overview section */
    .overview-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 50px;
      align-items: flex-start;
      margin: 40px 0;
    }

    .overview-img {
      flex: 1;
    }

    .overview-img img {
      width: 100%;
      border-radius: 32px;
      box-shadow: var(--shadow-md);
    }

    .overview-content {
      flex: 1;
    }

    .overview-content h2 {
      font-size: 1.8rem;
      margin-bottom: 20px;
      color: #1f2937;
    }

    .founder-message {
      background: #fefbf5;
      padding: 24px;
      border-radius: 28px;
      margin: 24px 0;
      border-left: 5px solid var(--primary);
    }

    /* mission vision cards */
    .mv-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      margin: 40px 0;
    }

    .mv-card {
      flex: 1;
      background: white;
      border-radius: 28px;
      padding: 32px;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
      border: 1px solid #f0ede8;
    }

    .mv-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-md);
    }

    .mv-card i {
      font-size: 2.5rem;
      color: var(--primary);
      margin-bottom: 20px;
      display: inline-block;
    }

    .mv-card h3 {
      font-size: 1.6rem;
      margin-bottom: 16px;
    }

    /* fun facts */
    .funfact {
      background: #1f2d2b;
      color: white;
      border-radius: 48px;
      margin: 40px 0;
    }

    .funfact-inner {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      text-align: center;
      padding: 50px 20px;
    }

    .funfact-item h3 {
      font-size: 2.6rem;
      font-weight: 800;
      color: var(--secondary);
    }

    /* founder section */
    .founder-section {
      text-align: center;
      margin: 60px 0;
    }

    .founder-img {
      width: 240px;
      height: 240px;
      border-radius: 50%;
      object-fit: cover;
      border: 6px solid var(--secondary-light);
      box-shadow: var(--shadow-md);
      margin-bottom: 24px;
    }

    .founder-name {
      font-size: 1.6rem;
      font-weight: 800;
      color: #1f2937;
    }

    /* footer */
    .footer {
      background: #11181c;
      color: #cdd9e6;
      padding: 60px 0 30px;
      margin-top: 60px;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px;
    }

    .footer a {
      color: #e2e8f0;
      text-decoration: none;
    }

    .footer h4 {
      color: white;
      margin-bottom: 20px;
      font-size: 1.2rem;
    }

    .copyright {
      text-align: center;
      padding-top: 40px;
      font-size: 0.85rem;
      border-top: 1px solid #2d3a40;
      margin-top: 40px;
    }

    /* floating button + offcanvas */
    .floating-btn {
      position: fixed;
      bottom: 24px;
      left: 24px;
      background: var(--primary);
      border: none;
      width: 55px;
      height: 55px;
      border-radius: 60px;
      color: white;
      font-size: 1.6rem;
      cursor: pointer;
      box-shadow: 0 6px 14px rgba(0,0,0,0.2);
      z-index: 99;
      transition: 0.2s;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .offcanvas {
      position: fixed;
      bottom: 0;
      left: -100%;
      width: 90%;
      max-width: 400px;
      background: white;
      border-radius: 28px 28px 0 0;
      transition: 0.3s ease-in-out;
      z-index: 1000;
      padding: 28px;
      box-shadow: 0 -10px 30px rgba(0,0,0,0.15);
    }

    .offcanvas.open {
      left: 0;
    }

    .offcanvas-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .close-canvas {
      background: none;
      border: none;
      font-size: 1.6rem;
      cursor: pointer;
    }

    .account-detail {
      background: #f8f9fa;
      padding: 16px;
      border-radius: 20px;
      margin-top: 12px;
    }

    /* responsiveness */
    @media (max-width: 992px) {
      .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        background: white;
        padding: 20px 0;
        gap: 18px;
      }
      .nav-links.show {
        display: flex;
      }
      .menu-toggle {
        display: block;
      }
      .section-title {
        font-size: 1.9rem;
      }
      .page-banner h1 {
        font-size: 2.2rem;
      }
    }

    @media (max-width: 768px) {
      .top-bar .container {
        flex-direction: column;
        align-items: flex-start;
      }
      .overview-grid {
        flex-direction: column;
      }
      .mv-grid {
        flex-direction: column;
      }
      .funfact-item h3 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

<!-- Top Bar -->
<div class="top-bar">
  <div class="container">
    <div class="contact-info">
      <a href="tel:08060906911"><i class="fas fa-phone-alt"></i> 08060906911</a>
      <a href="mailto:arolaitglobalcollege@gmail.com"><i class="fas fa-envelope"></i> arolaitglobalcollege@gmail.com</a>
    </div>
    <div style="display: flex; gap: 20px; align-items: center;">
      <div class="login-links">
        <a href="#">Student Login</a>
        <a href="#">Lecturer Login</a>
      </div>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar">
  <div class="container nav-container">
    <a href="#" class="logo"><img src="https://arolait.com.ng/storage/images/1731350187.jpg" alt="Arolait Logo" onerror="this.src='https://placehold.co/400x120?text=AROLAIT+COLLEGE'"></a>
    <button class="menu-toggle" id="mobileMenuBtn"><i class="fas fa-bars"></i></button>
    <ul class="nav-links" id="navLinks">
      <li><a href="index.php">Home</a></li>
      <li><a href="#" class="active">About</a></li>
      <li><a href="academics.php">Academics</a></li>
      <li><a href="gallery.php">Our Gallery</a></li>
      <li><a href="school_officials.php">School Officials</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="admissions.php">Admission</a></li>
      <li><a href="login.php">Student Portal</a></li>
    </ul>
  </div>
</nav>

<!-- Page Banner -->
<section class="page-banner">
  <div class="container">
    <h1>About Us</h1>
    <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li>/</li>
      <li>About Us</li>
    </ul>
  </div>
</section>

<!-- Overview Section (Welcome + Founder Message) -->
<section class="section-sm">
  <div class="container">
    <div class="overview-grid">
      <div class="overview-img">
        <img src="https://arolait.com.ng/storage/images/1731348117.jpg" alt="Campus overview">
      </div>
      <div class="overview-content">
        <h2>Arolait Global College of Health Technology</h2>
        <p><i>Welcome to Arolait Global College of Health Technology</i></p>
        <p><strong>Dear Students, Parents, and Esteemed Guests,</strong></p>
        <p>It is with great joy and a deep sense of pride that I welcome you to <strong>Arolait Global College of Health Technology</strong>, where we are shaping the next generation of health technology leaders.</p>
        <p>At Arolait Global, we believe that education is the key to unlocking boundless opportunities and making a meaningful difference in the world. Our college is founded on the principle that health technology has the power to revolutionize healthcare, and we are committed to providing our students with the knowledge, skills, and practical experience they need to excel in this dynamic field.</p>
        <p>We have built a learning environment that fosters innovation, critical thinking, and collaboration. Our faculty members are passionate professionals who bring both academic excellence and real-world experience to the classroom, ensuring that our students receive an education that is not only relevant but also transformative.</p>
        <p>At Arolait Global, we do not just train students; we empower them to become the future leaders, innovators, and change-makers in healthcare. Whether you are pursuing a career in medical diagnostics, healthcare informatics, or biomedical engineering, our programs are designed to equip you with the expertise needed to succeed and contribute meaningfully to the healthcare sector.</p>
        <p>As you embark on your journey with us, I encourage you to embrace every opportunity for growth, learning, and personal development. We are here to support you every step of the way as you realize your potential and achieve your goals.</p>
        <p>Thank you for choosing Arolait Global College of Health Technology. Together, let us shape a brighter, healthier future for all.</p>
        <div class="founder-message">
          <p><strong>Warm regards,</strong><br>Mrs. Adebayo Ruth<br>Founder, Arolait Global College of Health Technology</p>
        </div>
        <a href="#" class="btn btn-primary">Admissions <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Mission & Vision Section -->
<section class="section-sm">
  <div class="container">
    <div class="mv-grid">
      <div class="mv-card">
        <i class="fas fa-globe-americas"></i>
        <h3>Our Mission</h3>
        <p>Arolait Global College of Health Technology, our mission is to provide world-class education in health technology, empowering students with the knowledge, skills, and hands-on experience necessary to excel in the rapidly evolving healthcare industry. We are committed to fostering innovation, excellence, and integrity in all our programs, and to equipping our graduates with the expertise to make a meaningful impact on global health.</p>
      </div>
      <div class="mv-card">
        <i class="fas fa-chalkboard-user"></i>
        <h3>Our Vision</h3>
        <p>To be a leading institution in health technology education, recognized for producing highly skilled professionals who drive innovation, improve healthcare delivery, and contribute to the advancement of global health standards. We aim to create a dynamic learning environment that prepares students to meet the challenges of the future and make a lasting impact in the healthcare sector.</p>
      </div>
    </div>
  </div>
</section>

<!-- Fun Facts -->
<div class="container">
  <div class="funfact">
    <div class="funfact-inner">
      <div class="funfact-item"><h3>90+</h3><p>Graduation rate above 98%</p></div>
      <div class="funfact-item"><h3>10,000+</h3><p>Community health service hours</p></div>
    </div>
  </div>
</div>

<!-- Founder Spotlight -->
<section class="section-sm">
  <div class="container founder-section">
    <h2 class="section-title">The Founder</h2>
    <div>
      <img class="founder-img" src="https://arolait.com.ng/storage/images/1731348151.jpg" alt="Mrs. Adebayo Ruth">
      <h3 class="founder-name">Mrs. Adebayo Ruth</h3>
      <p style="max-width: 600px; margin: 16px auto 0;">Visionary leader and dedicated educator, committed to transforming health technology education in Africa.</p>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container footer-grid">
    <div>
      <img src="https://arolait.com.ng/storage/images/1731350187.jpg" alt="logo" style="height: 70px; margin-bottom: 20px;">
      <p>Arolait Global College of Health Technology, approved by NBTE, Ministry of Education, offers comprehensive health technology programs.</p>
      <div class="social-icons" style="margin-top: 16px;">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div><h4>Academics</h4><ul style="list-style: none;"><li><a href="#">Faculties</a></li><li><a href="#">School Officials</a></li></ul></div>
    <div><h4>Quick Links</h4><ul style="list-style: none;"><li><a href="#">Student Portal</a></li><li><a href="#">Check Admission</a></li><li><a href="#">Lecturer Portal</a></li><li><a href="#">How to Apply</a></li></ul></div>
    <div><h4>Contact</h4><p><i class="fas fa-phone-alt"></i> 08060906911</p><p><i class="fas fa-envelope"></i> arolaitglobalcollege@gmail.com</p><p><i class="fas fa-map-marker-alt"></i> Owode-Ilaro Road, Owode Yewa, Ogun State.</p></div>
  </div>
  <div class="copyright">© 2026 Arolait Global College of Health Technology | All Rights Reserved</div>
</footer>

<!-- Floating Bank Details Button + Offcanvas -->
<button class="floating-btn" id="bankDetailsBtn"><i class="fas fa-university"></i></button>
<div class="offcanvas" id="bankOffcanvas">
  <div class="offcanvas-header">
    <h4>School Account Information</h4>
    <button class="close-canvas" id="closeCanvasBtn">&times;</button>
  </div>
  <div>
    <p><strong>Do not pay to any other accounts apart from the ones here.</strong></p>
    <div class="account-detail">
      <strong>Account One:</strong><br>
      Account Number: 1024790910<br>
      Bank: United Bank for Africa (UBA)<br>
      Account Name: AROLAT GLOBAL COLLEGE OF HEALTH TECHNOLOGY
    </div>
    <div class="account-detail">
      <strong>Account Two:</strong><br>
      Account Number: 0272478282<br>
      Bank: Wema<br>
      Account Name: AROLAIT GLOBAL COLLEGE OF HEALTH TECHNOLOGY
    </div>
  </div>
</div>

<script>
  // Mobile menu toggle
  const menuBtn = document.getElementById('mobileMenuBtn');
  const navLinksEl = document.getElementById('navLinks');
  if(menuBtn) {
    menuBtn.addEventListener('click', () => {
      navLinksEl.classList.toggle('show');
    });
  }

  // Floating Offcanvas logic
  const bankBtn = document.getElementById('bankDetailsBtn');
  const offcanvasEl = document.getElementById('bankOffcanvas');
  const closeCanvasBtn = document.getElementById('closeCanvasBtn');
  function openOffcanvas() { offcanvasEl.classList.add('open'); }
  function closeOffcanvas() { offcanvasEl.classList.remove('open'); }
  if(bankBtn) bankBtn.addEventListener('click', openOffcanvas);
  if(closeCanvasBtn) closeCanvasBtn.addEventListener('click', closeOffcanvas);
  document.addEventListener('click', function(e) {
    if(offcanvasEl.classList.contains('open') && !offcanvasEl.contains(e.target) && e.target !== bankBtn) {
      closeOffcanvas();
    }
  });
</script>
</body>
</html>