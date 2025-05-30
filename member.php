<!DOCTYPE html>
<html lang="ne">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/flag np.jpg" type="Np Nepali Congress Logo">
  <!-- Nepali Meta Tags -->
<meta name="description" content="गैंडाकोट वडा नम्बर ५ नेपाली कांग्रेसको आधिकारिक वेबसाइट">
<meta name="keywords" content="नेपाली कांग्रेस, गैंडाकोट, वडा नम्बर ५, राजनीतिक दल, नेपाल">

<!-- English Meta Tags -->
<meta name="description" content="Official website of Nepali Congress, Gaindakot Ward No. 5, Nepal">
<meta name="keywords" content="Nepali Congress, Gaindakot, Ward No. 5, Political Party, Nepal">

  <title>गैंडाकोट वडा नम्बर ५ - नेपाली कांग्रेस</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    :root {
      --primary-green: #006400;
      --primary-red: #c32126;
      --hover-green: #00a000;
      --hover-red: #e42a2a;
      --white: #ffffff;
      --dark-text: #333;
      --light-bg: #f8f9fa;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    a{
      text-decoration: none;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-bg);
    }
    
    /* Top bar styles */
    .top-bar {
      background: linear-gradient(90deg, var(--primary-green), var(--primary-red));
      color: var(--white);
      text-align: center;
      padding: 8px;
      font-size: 1rem;
      font-weight: 500;
    }
    
    .top-bar span {
      display: block;
      margin: 3px 0;
    }
    
    /* Header styles */
    header {
      background-color: var(--white);
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }
    
    /* Navbar styles */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 0;
    }

    /* Logo styles */
    .logo-container {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    
    .logo-img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      border: 2px solid var(--primary-red);
      padding: 2px;
      object-fit: cover;
    }
    
    .logo-text {
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--primary-green);
    }
    
    /* Menu styles */
    .nav-menu {
      display: flex;
      align-items: center;
    }
    
    .nav-links {
      display: flex;
      list-style: none;
    }
    
    .nav-links li {
      position: relative;
    }
    
    .nav-links a {
      text-decoration: none;
      color: var(--dark-text);
      font-weight: 700;
      padding: 10px 15px;
      display: block;
      transition: color 0.3s;
      font-size: 13px;
    }
    
    .nav-links a:hover {
      color: var(--primary-green);
    }
    
    .nav-links a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 50%;
      background-color: var(--primary-green);
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }
    
    .nav-links a:hover::after {
      width: 70%;
    }
    
    /* Button styles */
    .membership-btn {
      background-color: var(--primary-red);
      color: var(--white);
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.3s;
      text-decoration: none;
      margin-left: 15px;
    }
    
    .membership-btn:hover {
      background-color: var(--hover-red);
    }
    
    /* Mobile menu button */
    .menu-toggle {
      display: none;
      cursor: pointer;
      background: none;
      border: none;
      padding: 5px;
    }
    
    .menu-toggle span {
      display: block;
      width: 25px;
      height: 3px;
      margin: 5px 0;
      background-color: var(--primary-green);
      transition: all 0.3s ease;
    }
    
    /* Responsive styles */
    @media (max-width: 992px) {
      .nav-links a {
        padding: 10px 12px;
      }
    }
    
    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }
      
      .nav-menu {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: var(--white);
        flex-direction: column;
        align-items: flex-start;
        padding: 10px 0;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
      }
      
      .nav-menu.active {
        max-height: 500px;
      }
      
      .nav-links {
        flex-direction: column;
        width: 100%;
      }
      
      .nav-links li {
        width: 100%;
      }
      
      .nav-links a {
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
      }
      
      .nav-links a::after {
        display: none;
      }
      
      .membership-btn {
        margin: 15px;
        display: inline-block;
        text-align: center;
      }
    }
    
    @media (max-width: 576px) {
      .logo-text {
        font-size: 0.9rem;
      }
      
      .top-bar {
        font-size: 0.9rem;
      }
    }





    .container {
    width: 100%;
    max-width: 1200px;
    margin:0 auto;
    padding: 10px;
}

.search-section {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 65px;
}

.search-header {
    text-align: center;
    margin-bottom: 20px;
}

.search-header h1 {
    font-size: 24px;
    color: #c1272d;
}

.search-form {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.search-group {
    flex: 1;
    min-width: 250px;
}

.search-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

.search-input, .search-select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

.search-button {
    background-color: #c1272d;
    color: white;
    border: 50px;
    padding: 1px 30px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.search-button:hover {
    background-color: #a01e22;
}

@media (max-width: 768px) {
    .search-form {
        flex-direction: column;
        align-items: stretch;
    }

    .search-group {
        min-width: 100%;
    }
}

@media (max-width: 480px) {
    .search-header h1 {
        font-size: 20px;
    }

    .search-input, .search-select, .search-button {
        font-size: 14px;
        padding: 10px;
    }
}






 /* Footer Styles */
 footer {
    background-color: var(--primary-green);
    color: var(--white);
    padding-top: 40px;
    margin-top: 50px;
  }
  
  .footer-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
  }
  
  .footer-top {
    text-align: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  .footer-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 15px;
  }
  
  .footer-logo-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid var(--primary-red);
    padding: 2px;
    background-color: var(--white);
  }
  
  .footer-logo-text {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--white);
  }
  
  .footer-slogan {
    font-size: 0.9rem;
    opacity: 0.9;
  }
  
  .footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    margin-bottom: 40px;
  }
  
  .footer-section {
    flex: 1;
    min-width: 200px;
  }
  
  .footer-section h4 {
    font-size: 1.1rem;
    margin-bottom: 15px;
    position: relative;
    padding-bottom: 10px;
  }
  
  .footer-section h4::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 40px;
    height: 2px;
    background-color: var(--primary-red);
  }
  
  .footer-links {
    list-style: none;
  }
  
  .footer-links li {
    margin-bottom: 8px;
  }
  
  .footer-links a {
    color: var(--white);
    text-decoration: none;
    transition: opacity 0.3s;
    display: inline-block;
    opacity: 0.8;
  }
  
  .footer-links a:hover {
    opacity: 1;
    padding-left: 5px;
  }
  
  .footer-section p {
    margin-bottom: 8px;
    font-size: 0.9rem;
    opacity: 0.8;
  }
  
  .footer-section p i {
    margin-right: 8px;
    color: var(--primary-red);
  }
  
  .social-icons {
    display: flex;
    gap: 12px;
    margin-top: 15px;
    margin-bottom: 20px;
  }
  
  .social-icons a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: rgba(255, 255, 255, 0.1);
    color: var(--white);
    border-radius: 50%;
    transition: all 0.3s;
  }
  
  .social-icons a:hover {
    background-color: var(--primary-red);
    transform: translateY(-3px);
  }
  
  .footer-membership-btn {
    display: inline-block;
    background-color: var(--primary-red);
    color: var(--white);
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    transition: background-color 0.3s;
    margin-top: 15px;
  }
  
  .footer-membership-btn:hover {
    background-color: var(--hover-red);
  }
  
  .footer-bottom {
    background-color: rgba(0, 0, 0, 0.2);
    padding: 15px 0;
    text-align: center;
    font-size: 0.85rem;
  }
  
  .footer-bottom .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .footer-bottom a {
    color: var(--white);
    text-decoration: none;
    opacity: 0.8;
    transition: opacity 0.3s;
  }
  
  .footer-bottom a:hover {
    opacity: 1;
  }
  
  /* Responsive styles */
  @media (max-width: 992px) {
    .footer-content {
      gap: 20px;
    }
    
    .footer-section {
      min-width: 170px;
    }
  }
  
  @media (max-width: 768px) {
    .footer-content {
      gap: 40px;
    }
    
    .footer-section {
      flex: 0 0 calc(50% - 20px);
    }
    
    .footer-bottom .container {
      flex-direction: column;
      gap: 10px;
    }
  }
  
  @media (max-width: 576px) {
    .footer-section {
      flex: 0 0 100%;
    }
    
    .footer-logo {
      flex-direction: column;
      text-align: center;
    }
    
    .footer-top {
      margin-bottom: 20px;
    }
    
    .footer-content {
      gap: 30px;
    }
  }




  </style>
</head>
<body>
  <!-- Hidden SEO text for search engines -->
  <div style="display:none">
    Nepali Congress Gaindakot Ward No 5 Official Website. Political Party of Nepal focused on democracy, socialism and nationalism.
  </div>
  
  <!-- Top Bar -->
  <div class="top-bar">
    <span>राष्ट्रियता, लोकतन्त्र, समाजवाद</span>
    <span>हाम्रो सिद्धान्त, हाम्रो शक्ति</span>
  </div>
  
  <!-- Header with Navbar -->
  <header>
    <div class="container">
      <nav class="navbar">
        <div class="logo-container">
          <img src="./assets/flag np.jpg" alt="नेपाली कांग्रेस लोगो" class="logo-img">
          <div class="logo-text">गैंडाकोट वडा नं. ५ - नेपाली कांग्रेस</div>
        </div>
        
        <button class="menu-toggle" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </button>
        
        <div class="nav-menu" id="navMenu">
          <ul class="nav-links">
            <li><a href="index.php">गृहपृष्ठ</a></li>
            <li><a href="about.php">हाम्रो बारेमा</a></li>
            <li><a href="team.php">हाम्रो टिम</a></li>
            <li><a href="member.php">सदस्यता</a></li>
            <li><a href="high.php">नेतृत्व</a></li>
            <li><a href="resource.php">स्रोतहरू</a></li>
            <li><a href="pic.php">ग्यालरी</a></li>
            <li><a href="contact.php">सम्पर्क</a></li>
          </ul>
          <a href="online.php" class="membership-btn">अनलाइन सदस्यता</a>
        </div>
      </nav>
    </div>
  </header>

 







  <div class="container">
    <div class="search-section">
        <div class="search-header">
            <h1 style="font-size: 2.4rem;">व्यक्ति खोज्नुहोस्</h1>
        </div>
        <div class="error-message" id="errorMessage"></div>
        <form class="search-form" id="searchForm">
            <div class="search-group">
                <label for="searchName">नाम खोज्नुहोस्</label>
                <input type="text" id="searchName" class="search-input" placeholder="व्यक्तिको नाम लेख्नुहोस्...">
            </div>
            <div class="search-group">
                <label for="searchPhone">मोबाइल नम्बर</label>
                <input type="text" id="searchPhone" class="search-input" placeholder="मोबाइल नम्बर लेख्नुहोस्...">
            </div>
            <div class="search-group">
                <label for="searchTol">टोल छनौट गर्नुहोस्</label>
                <select id="searchTol" class="search-select">
                    <option value="">सबै टोल</option>
                    <option value="tol1">टोल १</option>
                    <option value="tol2">टोल २</option>
                    <option value="tol3">टोल ३</option>
                    <option value="tol4">टोल ४</option>
                    <option value="tol5">टोल ५</option>
                    <option value="tol6">टोल ६</option>
                    <option value="tol7">टोल ७</option>
                    <option value="tol8">टोल ८</option>
                    <option value="tol9">टोल ९</option>
                    <option value="tol10">टोल १०</option>
                    <option value="tol11">टोल ११</option>
                    <option value="tol12">टोल १२</option>
                    <option value="tol13">टोल १३</option>
                    <option value="tol14">टोल १४</option>
                    <option value="tol15">टोल १५</option>
                    <option value="tol16">टोल १६</option>
                    <option value="tol17">टोल १७</option>
                    <option value="tol18">टोल १८</option>
                    <option value="tol19">टोल १९</option>
                </select>
            </div>
            <button type="submit" class="search-button">खोज्नुहोस्</button>
        </form>
    </div>

   
</div>





<!-- Footer Section -->
<footer>
  <div class="footer-container">
    <div class="footer-top">
      <div class="footer-logo">
        <img src="./assets/flag np.jpg" alt="नेपाली कांग्रेस लोगो" class="footer-logo-img">
        <div class="footer-logo-text">गैंडाकोट वडा नं. ५ - नेपाली कांग्रेस</div>
      </div>
      <p class="footer-slogan">राष्ट्रियता, लोकतन्त्र, समाजवाद - हाम्रो सिद्धान्त, हाम्रो शक्ति</p>
    </div>
    
    <div class="footer-content">
      <div class="footer-section">
        <h4>लिङ्कहरू</h4>
        <ul class="footer-links">
          <li><a href="index.html">गृहपृष्ठ</a></li>
          <li><a href="about.html">हाम्रो बारेमा</a></li>
          <li><a href="team.html">हाम्रो टिम</a></li>
          <li><a href="member.html">सदस्यता</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h4>अन्य लिङ्कहरू</h4>
        <ul class="footer-links">
          <li><a href="high.html">नेतृत्व</a></li>
          <li><a href="resource.html">स्रोतहरू</a></li>
          <li><a href="pic.html">ग्यालरी</a></li>
          <li><a href="contact.php">सम्पर्क</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h4>सम्पर्क</h4>
        <p><i class="fas fa-map-marker-alt"></i> गैंडाकोट वडा नं. ५, नवलपरासी, नेपाल</p>
        <p><i class="fas fa-phone"></i> +977 XXXXXXXXXX</p>
        <p><i class="fas fa-envelope"></i> info@nepaligaindakot5.org.np</p>
      </div>
      
      <div class="footer-section">
        <h4>हामीलाई फलो गर्नुहोस्</h4>
        <div class="social-icons">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
        <a href="online.html" class="footer-membership-btn">अनलाइन सदस्यता लिनुहोस्</a>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
    <div class="container">
      <p>&copy; २०८१ - नेपाली कांग्रेस गैंडाकोट वडा नं. ५ | सर्वाधिकार सुरक्षित</p>
      <p>
        <a href="https://himalshahithakuri.com.np/" target="_blank" style="color: black; background-color: yellow; padding: 5px 10px; border-radius: 5px; text-decoration: none; font-weight: bold;">
          Designed and Developed by Himal Shahi Thakuri
        </a>
        | 
        <a href="#">Supported by Laxman Karki</a>
      </p>
    </div>
  </div>
</footer>




  <script>
    // Mobile menu toggle
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    
    menuToggle.addEventListener('click', function() {
      navMenu.classList.toggle('active');
      
      // Animate menu icon
      const spans = this.querySelectorAll('span');
      if (navMenu.classList.contains('active')) {
        spans[0].style.transform = 'rotate(45deg) translate(5px, 6px)';
        spans[1].style.opacity = '0';
        spans[2].style.transform = 'rotate(-45deg) translate(5px, -6px)';
      } else {
        spans.forEach(span => {
          span.style.transform = 'none';
          span.style.opacity = '1';
        });
      }
    });
    
    // Close menu when clicking on links
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        const spans = menuToggle.querySelectorAll('span');
        spans.forEach(span => {
          span.style.transform = 'none';
          span.style.opacity = '1';
        });
      });
    });











// Sample data - this would typically come from a database
const peopleData = [
    { id: 1, name: "राम शर्मा", nameEn: "Ram Sharma", phone: "9801234567", tol: "tol1", tolName: "टोल १", address: "काठमाडौं", citizenship: "123456", voterID: "V12345", email: "ram.sharma@example.com", dob: "२०३० साल ४ महिना १० गते", occupation: "शिक्षक", education: "स्नातकोत्तर", joinDate: "२०७५-०८-१५" },
    { id: 2, name: "सीता गुरुङ", nameEn: "Sita Gurung", phone: "9807654321", tol: "tol3", tolName: "टोल ३", address: "ललितपुर", citizenship: "234567", voterID: "V23456", email: "sita.gurung@example.com", dob: "२०३५ साल ७ महिना २२ गते", occupation: "व्यापारी", education: "स्नातक", joinDate: "२०७६-०४-२०" },
    { id: 3, name: "हरि थापा", nameEn: "Hari Thapa", phone: "9812345678", tol: "tol7", tolName: "टोल ७", address: "भक्तपुर", citizenship: "345678", voterID: "V34567", email: "hari.thapa@example.com", dob: "२०२८ साल १ महिना ५ गते", occupation: "डाक्टर", education: "एमबीबीएस", joinDate: "२०७३-११-०५" },
    { id: 4, name: "गिता पौडेल", nameEn: "Gita Poudel", phone: "9845678901", tol: "tol10", tolName: "टोल १०", address: "काठमाडौं", citizenship: "456789", voterID: "V45678", email: "gita.poudel@example.com", dob: "२०४० साल ९ महिना १८ गते", occupation: "इन्जिनियर", education: "बिई", joinDate: "२०७७-०२-१०" },
    { id: 5, name: "कृष्ण खड्का", nameEn: "Krishna Khadka", phone: "9876543210", tol: "tol5", tolName: "टोल ५", address: "पोखरा", citizenship: "567890", voterID: "V56789", email: "krishna.khadka@example.com", dob: "२०३३ साल ३ महिना २७ गते", occupation: "कृषक", education: "माध्यमिक", joinDate: "२०७४-०६-१७" },
    { id: 6, name: "सन्तोष महर्जन", nameEn: "Santosh Maharjan", phone: "9817654321", tol: "tol2", tolName: "टोल २", address: "ललितपुर", citizenship: "678901", voterID: "V67890", email: "santosh.maharjan@example.com", dob: "२०३७ साल ५ महिना १२ गते", occupation: "कलाकार", education: "स्नातक", joinDate: "२०७८-०१-२१" },
    { id: 7, name: "माया लामा", nameEn: "Maya Lama", phone: "9823456789", tol: "tol6", tolName: "टोल ६", address: "बुटवल", citizenship: "789012", voterID: "V78901", email: "maya.lama@example.com", dob: "२०४२ साल १० महिना ८ गते", occupation: "नर्स", education: "बिएस्सी नर्सिङ", joinDate: "२०७९-०५-१५" },
    { id: 8, name: "रमेश अधिकारी", nameEn: "Ramesh Adhikari", phone: "9809988776", tol: "tol4", tolName: "टोल ४", address: "चितवन", citizenship: "890123", voterID: "V89012", email: "ramesh.adhikari@example.com", dob: "२०३१ साल ११ महिना २१ गते", occupation: "इन्जिनियर", education: "एमटेक", joinDate: "२०७२-०७-२८" },
    { id: 9, name: "रेणुका बास्कोटा", nameEn: "Renuka Baskota", phone: "9856341278", tol: "tol9", tolName: "टोल ९", address: "दाङ", citizenship: "901234", voterID: "V90123", email: "renuka.baskota@example.com", dob: "२०४१ साल ६ महिना १५ गते", occupation: "अध्यापक", education: "पिएचडी", joinDate: "२०७१-१२-११" },
    { id: 10, name: "सुरज गुरुङ", nameEn: "Suraj Gurung", phone: "9805673412", tol: "tol8", tolName: "टोल ८", address: "कास्की", citizenship: "012345", voterID: "V01234", email: "suraj.gurung@example.com", dob: "२०३८ साल ३ महिना १९ गते", occupation: "बैंक कर्मचारी", education: "एमबीए", joinDate: "२०७३-१०-०१" },
    { id: 1, name: "राम शर्मा", nameEn: "Ram Sharma", phone: "9801234567", tol: "tol1", tolName: "टोल १", address: "काठमाडौं", citizenship: "123456", voterID: "V12345", email: "ram.sharma@example.com", dob: "२०३० साल ४ महिना १० गते", occupation: "शिक्षक", education: "स्नातकोत्तर", joinDate: "२०७५-०८-१५" },
    { id: 2, name: "सीता गुरुङ", nameEn: "Sita Gurung", phone: "9807654321", tol: "tol3", tolName: "टोल ३", address: "ललितपुर", citizenship: "234567", voterID: "V23456", email: "sita.gurung@example.com", dob: "२०३५ साल ७ महिना २२ गते", occupation: "व्यापारी", education: "स्नातक", joinDate: "२०७६-०४-२०" },
    { id: 3, name: "हरि थापा", nameEn: "Hari Thapa", phone: "9812345678", tol: "tol7", tolName: "टोल ७", address: "भक्तपुर", citizenship: "345678", voterID: "V34567", email: "hari.thapa@example.com", dob: "२०२८ साल १ महिना ५ गते", occupation: "डाक्टर", education: "एमबीबीएस", joinDate: "२०७३-११-०५" },
    { id: 4, name: "गिता पौडेल", nameEn: "Gita Poudel", phone: "9845678901", tol: "tol10", tolName: "टोल १०", address: "काठमाडौं", citizenship: "456789", voterID: "V45678", email: "gita.poudel@example.com", dob: "२०४० साल ९ महिना १८ गते", occupation: "इन्जिनियर", education: "बिई", joinDate: "२०७७-०२-१०" },
    { id: 5, name: "कृष्ण खड्का", nameEn: "Krishna Khadka", phone: "9876543210", tol: "tol5", tolName: "टोल ५", address: "पोखरा", citizenship: "567890", voterID: "V56789", email: "krishna.khadka@example.com", dob: "२०३३ साल ३ महिना २७ गते", occupation: "कृषक", education: "माध्यमिक", joinDate: "२०७४-०६-१७" },
    { id: 6, name: "सन्तोष महर्जन", nameEn: "Santosh Maharjan", phone: "9817654321", tol: "tol2", tolName: "टोल २", address: "ललितपुर", citizenship: "678901", voterID: "V67890", email: "santosh.maharjan@example.com", dob: "२०३७ साल ५ महिना १२ गते", occupation: "कलाकार", education: "स्नातक", joinDate: "२०७८-०१-२१" },
    { id: 7, name: "माया लामा", nameEn: "Maya Lama", phone: "9823456789", tol: "tol6", tolName: "टोल ६", address: "बुटवल", citizenship: "789012", voterID: "V78901", email: "maya.lama@example.com", dob: "२०४२ साल १० महिना ८ गते", occupation: "नर्स", education: "बिएस्सी नर्सिङ", joinDate: "२०७९-०५-१५" },
    { id: 8, name: "रमेश अधिकारी", nameEn: "Ramesh Adhikari", phone: "9809988776", tol: "tol4", tolName: "टोल ४", address: "चितवन", citizenship: "890123", voterID: "V89012", email: "ramesh.adhikari@example.com", dob: "२०३१ साल ११ महिना २१ गते", occupation: "इन्जिनियर", education: "एमटेक", joinDate: "२०७२-०७-२८" },
    { id: 9, name: "रेणुका बास्कोटा", nameEn: "Renuka Baskota", phone: "9856341278", tol: "tol9", tolName: "टोल ९", address: "दाङ", citizenship: "901234", voterID: "V90123", email: "renuka.baskota@example.com", dob: "२०४१ साल ६ महिना १५ गते", occupation: "अध्यापक", education: "पिएचडी", joinDate: "२०७१-१२-११" },
    { id: 10, name: "सुरज गुरुङ", nameEn: "Suraj Gurung", phone: "9805673412", tol: "tol8", tolName: "टोल ८", address: "कास्की", citizenship: "012345", voterID: "V01234", email: "suraj.gurung@example.com", dob: "२०३८ साल ३ महिना १९ गते", occupation: "बैंक कर्मचारी", education: "एमबीए", joinDate: "२०७३-१०-०१" },
    { id: 1, name: "राम शर्मा", nameEn: "Ram Sharma", phone: "9801234567", tol: "tol1", tolName: "टोल १", address: "काठमाडौं", citizenship: "123456", voterID: "V12345", email: "ram.sharma@example.com", dob: "२०३० साल ४ महिना १० गते", occupation: "शिक्षक", education: "स्नातकोत्तर", joinDate: "२०७५-०८-१५" },
    { id: 2, name: "सीता गुरुङ", nameEn: "Sita Gurung", phone: "9807654321", tol: "tol3", tolName: "टोल ३", address: "ललितपुर", citizenship: "234567", voterID: "V23456", email: "sita.gurung@example.com", dob: "२०३५ साल ७ महिना २२ गते", occupation: "व्यापारी", education: "स्नातक", joinDate: "२०७६-०४-२०" },
    { id: 3, name: "हरि थापा", nameEn: "Hari Thapa", phone: "9812345678", tol: "tol7", tolName: "टोल ७", address: "भक्तपुर", citizenship: "345678", voterID: "V34567", email: "hari.thapa@example.com", dob: "२०२८ साल १ महिना ५ गते", occupation: "डाक्टर", education: "एमबीबीएस", joinDate: "२०७३-११-०५" },
    { id: 4, name: "गिता पौडेल", nameEn: "Gita Poudel", phone: "9845678901", tol: "tol10", tolName: "टोल १०", address: "काठमाडौं", citizenship: "456789", voterID: "V45678", email: "gita.poudel@example.com", dob: "२०४० साल ९ महिना १८ गते", occupation: "इन्जिनियर", education: "बिई", joinDate: "२०७७-०२-१०" },
    { id: 5, name: "कृष्ण खड्का", nameEn: "Krishna Khadka", phone: "9876543210", tol: "tol5", tolName: "टोल ५", address: "पोखरा", citizenship: "567890", voterID: "V56789", email: "krishna.khadka@example.com", dob: "२०३३ साल ३ महिना २७ गते", occupation: "कृषक", education: "माध्यमिक", joinDate: "२०७४-०६-१७" },
    { id: 6, name: "सन्तोष महर्जन", nameEn: "Santosh Maharjan", phone: "9817654321", tol: "tol2", tolName: "टोल २", address: "ललितपुर", citizenship: "678901", voterID: "V67890", email: "santosh.maharjan@example.com", dob: "२०३७ साल ५ महिना १२ गते", occupation: "कलाकार", education: "स्नातक", joinDate: "२०७८-०१-२१" },
    { id: 7, name: "माया लामा", nameEn: "Maya Lama", phone: "9823456789", tol: "tol6", tolName: "टोल ६", address: "बुटवल", citizenship: "789012", voterID: "V78901", email: "maya.lama@example.com", dob: "२०४२ साल १० महिना ८ गते", occupation: "नर्स", education: "बिएस्सी नर्सिङ", joinDate: "२०७९-०५-१५" },
    { id: 8, name: "रमेश अधिकारी", nameEn: "Ramesh Adhikari", phone: "9809988776", tol: "tol4", tolName: "टोल ४", address: "चितवन", citizenship: "890123", voterID: "V89012", email: "ramesh.adhikari@example.com", dob: "२०३१ साल ११ महिना २१ गते", occupation: "इन्जिनियर", education: "एमटेक", joinDate: "२०७२-०७-२८" },
    { id: 9, name: "रेणुका बास्कोटा", nameEn: "Renuka Baskota", phone: "9856341278", tol: "tol9", tolName: "टोल ९", address: "दाङ", citizenship: "901234", voterID: "V90123", email: "renuka.baskota@example.com", dob: "२०४१ साल ६ महिना १५ गते", occupation: "अध्यापक", education: "पिएचडी", joinDate: "२०७१-१२-११" },
    { id: 10, name: "सुरज गुरुङ", nameEn: "Suraj Gurung", phone: "9805673412", tol: "tol8", tolName: "टोल ८", address: "कास्की", citizenship: "012345", voterID: "V01234", email: "suraj.gurung@example.com", dob: "२०३८ साल ३ महिना १९ गते", occupation: "बैंक कर्मचारी", education: "एमबीए", joinDate: "२०७३-१०-०१" },
    { id: 1, name: "राम शर्मा", nameEn: "Ram Sharma", phone: "9801234567", tol: "tol1", tolName: "टोल १", address: "काठमाडौं", citizenship: "123456", voterID: "V12345", email: "ram.sharma@example.com", dob: "२०३० साल ४ महिना १० गते", occupation: "शिक्षक", education: "स्नातकोत्तर", joinDate: "२०७५-०८-१५" },
    { id: 2, name: "सीता गुरुङ", nameEn: "Sita Gurung", phone: "9807654321", tol: "tol3", tolName: "टोल ३", address: "ललितपुर", citizenship: "234567", voterID: "V23456", email: "sita.gurung@example.com", dob: "२०३५ साल ७ महिना २२ गते", occupation: "व्यापारी", education: "स्नातक", joinDate: "२०७६-०४-२०" },
    { id: 3, name: "हरि थापा", nameEn: "Hari Thapa", phone: "9812345678", tol: "tol7", tolName: "टोल ७", address: "भक्तपुर", citizenship: "345678", voterID: "V34567", email: "hari.thapa@example.com", dob: "२०२८ साल १ महिना ५ गते", occupation: "डाक्टर", education: "एमबीबीएस", joinDate: "२०७३-११-०५" },
    { id: 4, name: "गिता पौडेल", nameEn: "Gita Poudel", phone: "9845678901", tol: "tol10", tolName: "टोल १०", address: "काठमाडौं", citizenship: "456789", voterID: "V45678", email: "gita.poudel@example.com", dob: "२०४० साल ९ महिना १८ गते", occupation: "इन्जिनियर", education: "बिई", joinDate: "२०७७-०२-१०" },
    { id: 5, name: "कृष्ण खड्का", nameEn: "Krishna Khadka", phone: "9876543210", tol: "tol5", tolName: "टोल ५", address: "पोखरा", citizenship: "567890", voterID: "V56789", email: "krishna.khadka@example.com", dob: "२०३३ साल ३ महिना २७ गते", occupation: "कृषक", education: "माध्यमिक", joinDate: "२०७४-०६-१७" },
    { id: 6, name: "सन्तोष महर्जन", nameEn: "Santosh Maharjan", phone: "9817654321", tol: "tol2", tolName: "टोल २", address: "ललितपुर", citizenship: "678901", voterID: "V67890", email: "santosh.maharjan@example.com", dob: "२०३७ साल ५ महिना १२ गते", occupation: "कलाकार", education: "स्नातक", joinDate: "२०७८-०१-२१" },
    { id: 7, name: "माया लामा", nameEn: "Maya Lama", phone: "9823456789", tol: "tol6", tolName: "टोल ६", address: "बुटवल", citizenship: "789012", voterID: "V78901", email: "maya.lama@example.com", dob: "२०४२ साल १० महिना ८ गते", occupation: "नर्स", education: "बिएस्सी नर्सिङ", joinDate: "२०७९-०५-१५" },
    { id: 8, name: "रमेश अधिकारी", nameEn: "Ramesh Adhikari", phone: "9809988776", tol: "tol4", tolName: "टोल ४", address: "चितवन", citizenship: "890123", voterID: "V89012", email: "ramesh.adhikari@example.com", dob: "२०३१ साल ११ महिना २१ गते", occupation: "इन्जिनियर", education: "एमटेक", joinDate: "२०७२-०७-२८" },
    { id: 9, name: "रेणुका बास्कोटा", nameEn: "Renuka Baskota", phone: "9856341278", tol: "tol9", tolName: "टोल ९", address: "दाङ", citizenship: "901234", voterID: "V90123", email: "renuka.baskota@example.com", dob: "२०४१ साल ६ महिना १५ गते", occupation: "अध्यापक", education: "पिएचडी", joinDate: "२०७१-१२-११" },
    { id: 10, name: "सुरज गुरुङ", nameEn: "Suraj Gurung", phone: "9805673412", tol: "tol8", tolName: "टोल ८", address: "कास्की", citizenship: "012345", voterID: "V01234", email: "suraj.gurung@example.com", dob: "२०३८ साल ३ महिना १९ गते", occupation: "बैंक कर्मचारी", education: "एमबीए", joinDate: "२०७३-१०-०१" },
    { id: 1, name: "राम शर्मा", nameEn: "Ram Sharma", phone: "9801234567", tol: "tol1", tolName: "टोल १", address: "काठमाडौं", citizenship: "123456", voterID: "V12345", email: "ram.sharma@example.com", dob: "२०३० साल ४ महिना १० गते", occupation: "शिक्षक", education: "स्नातकोत्तर", joinDate: "२०७५-०८-१५" },
    { id: 2, name: "सीता गुरुङ", nameEn: "Sita Gurung", phone: "9807654321", tol: "tol3", tolName: "टोल ३", address: "ललितपुर", citizenship: "234567", voterID: "V23456", email: "sita.gurung@example.com", dob: "२०३५ साल ७ महिना २२ गते", occupation: "व्यापारी", education: "स्नातक", joinDate: "२०७६-०४-२०" },
    { id: 3, name: "हरि थापा", nameEn: "Hari Thapa", phone: "9812345678", tol: "tol7", tolName: "टोल ७", address: "भक्तपुर", citizenship: "345678", voterID: "V34567", email: "hari.thapa@example.com", dob: "२०२८ साल १ महिना ५ गते", occupation: "डाक्टर", education: "एमबीबीएस", joinDate: "२०७३-११-०५" },
    { id: 4, name: "गिता पौडेल", nameEn: "Gita Poudel", phone: "9845678901", tol: "tol10", tolName: "टोल १०", address: "काठमाडौं", citizenship: "456789", voterID: "V45678", email: "gita.poudel@example.com", dob: "२०४० साल ९ महिना १८ गते", occupation: "इन्जिनियर", education: "बिई", joinDate: "२०७७-०२-१०" },
    { id: 5, name: "कृष्ण खड्का", nameEn: "Krishna Khadka", phone: "9876543210", tol: "tol5", tolName: "टोल ५", address: "पोखरा", citizenship: "567890", voterID: "V56789", email: "krishna.khadka@example.com", dob: "२०३३ साल ३ महिना २७ गते", occupation: "कृषक", education: "माध्यमिक", joinDate: "२०७४-०६-१७" },
    { id: 6, name: "सन्तोष महर्जन", nameEn: "Santosh Maharjan", phone: "9817654321", tol: "tol2", tolName: "टोल २", address: "ललितपुर", citizenship: "678901", voterID: "V67890", email: "santosh.maharjan@example.com", dob: "२०३७ साल ५ महिना १२ गते", occupation: "कलाकार", education: "स्नातक", joinDate: "२०७८-०१-२१" },
    { id: 7, name: "माया लामा", nameEn: "Maya Lama", phone: "9823456789", tol: "tol6", tolName: "टोल ६", address: "बुटवल", citizenship: "789012", voterID: "V78901", email: "maya.lama@example.com", dob: "२०४२ साल १० महिना ८ गते", occupation: "नर्स", education: "बिएस्सी नर्सिङ", joinDate: "२०७९-०५-१५" },
    { id: 8, name: "रमेश अधिकारी", nameEn: "Ramesh Adhikari", phone: "9809988776", tol: "tol4", tolName: "टोल ४", address: "चितवन", citizenship: "890123", voterID: "V89012", email: "ramesh.adhikari@example.com", dob: "२०३१ साल ११ महिना २१ गते", occupation: "इन्जिनियर", education: "एमटेक", joinDate: "२०७२-०७-२८" },
    { id: 9, name: "रेणुका बास्कोटा", nameEn: "Renuka Baskota", phone: "9856341278", tol: "tol9", tolName: "टोल ९", address: "दाङ", citizenship: "901234", voterID: "V90123", email: "renuka.baskota@example.com", dob: "२०४१ साल ६ महिना १५ गते", occupation: "अध्यापक", education: "पिएचडी", joinDate: "२०७१-१२-११" },
    { id: 10, name: "सुरज गुरुङ", nameEn: "Suraj Gurung", phone: "9805673412", tol: "tol8", tolName: "टोल ८", address: "कास्की", citizenship: "012345", voterID: "V01234", email: "suraj.gurung@example.com", dob: "२०३८ साल ३ महिना १९ गते", occupation: "बैंक कर्मचारी", education: "एमबीए", joinDate: "२०७३-१०-०१" },
    { id: 1, name: "राम शर्मा", nameEn: "Ram Sharma", phone: "9801234567", tol: "tol1", tolName: "टोल १", address: "काठमाडौं", citizenship: "123456", voterID: "V12345", email: "ram.sharma@example.com", dob: "२०३० साल ४ महिना १० गते", occupation: "शिक्षक", education: "स्नातकोत्तर", joinDate: "२०७५-०८-१५" },
    { id: 2, name: "सीता गुरुङ", nameEn: "Sita Gurung", phone: "9807654321", tol: "tol3", tolName: "टोल ३", address: "ललितपुर", citizenship: "234567", voterID: "V23456", email: "sita.gurung@example.com", dob: "२०३५ साल ७ महिना २२ गते", occupation: "व्यापारी", education: "स्नातक", joinDate: "२०७६-०४-२०" },
    { id: 3, name: "हरि थापा", nameEn: "Hari Thapa", phone: "9812345678", tol: "tol7", tolName: "टोल ७", address: "भक्तपुर", citizenship: "345678", voterID: "V34567", email: "hari.thapa@example.com", dob: "२०२८ साल १ महिना ५ गते", occupation: "डाक्टर", education: "एमबीबीएस", joinDate: "२०७३-११-०५" },
    { id: 4, name: "गिता पौडेल", nameEn: "Gita Poudel", phone: "9845678901", tol: "tol10", tolName: "टोल १०", address: "काठमाडौं", citizenship: "456789", voterID: "V45678", email: "gita.poudel@example.com", dob: "२०४० साल ९ महिना १८ गते", occupation: "इन्जिनियर", education: "बिई", joinDate: "२०७७-०२-१०" },
    { id: 5, name: "कृष्ण खड्का", nameEn: "Krishna Khadka", phone: "9876543210", tol: "tol5", tolName: "टोल ५", address: "पोखरा", citizenship: "567890", voterID: "V56789", email: "krishna.khadka@example.com", dob: "२०३३ साल ३ महिना २७ गते", occupation: "कृषक", education: "माध्यमिक", joinDate: "२०७४-०६-१७" },
    { id: 6, name: "सन्तोष महर्जन", nameEn: "Santosh Maharjan", phone: "9817654321", tol: "tol2", tolName: "टोल २", address: "ललितपुर", citizenship: "678901", voterID: "V67890", email: "santosh.maharjan@example.com", dob: "२०३७ साल ५ महिना १२ गते", occupation: "कलाकार", education: "स्नातक", joinDate: "२०७८-०१-२१" },
    { id: 7, name: "माया लामा", nameEn: "Maya Lama", phone: "9823456789", tol: "tol6", tolName: "टोल ६", address: "बुटवल", citizenship: "789012", voterID: "V78901", email: "maya.lama@example.com", dob: "२०४२ साल १० महिना ८ गते", occupation: "नर्स", education: "बिएस्सी नर्सिङ", joinDate: "२०७९-०५-१५" },
    { id: 8, name: "रमेश अधिकारी", nameEn: "Ramesh Adhikari", phone: "9809988776", tol: "tol4", tolName: "टोल ४", address: "चितवन", citizenship: "890123", voterID: "V89012", email: "ramesh.adhikari@example.com", dob: "२०३१ साल ११ महिना २१ गते", occupation: "इन्जिनियर", education: "एमटेक", joinDate: "२०७२-०७-२८" },
    { id: 9, name: "रेणुका बास्कोटा", nameEn: "Renuka Baskota", phone: "9856341278", tol: "tol9", tolName: "टोल ९", address: "दाङ", citizenship: "901234", voterID: "V90123", email: "renuka.baskota@example.com", dob: "२०४१ साल ६ महिना १५ गते", occupation: "अध्यापक", education: "पिएचडी", joinDate: "२०७१-१२-११" },
    { id: 10, name: "सुरज गुरुङ", nameEn: "Suraj Gurung", phone: "9805673412", tol: "tol8", tolName: "टोल ८", address: "कास्की", citizenship: "012345", voterID: "V01234", email: "suraj.gurung@example.com", dob: "२०३८ साल ३ महिना १९ गते", occupation: "बैंक कर्मचारी", education: "एमबीए", joinDate: "२०७३-१०-०१" },
    { id: 1, name: "राम शर्मा", nameEn: "Ram Sharma", phone: "9801234567", tol: "tol1", tolName: "टोल १", address: "काठमाडौं", citizenship: "123456", voterID: "V12345", email: "ram.sharma@example.com", dob: "२०३० साल ४ महिना १० गते", occupation: "शिक्षक", education: "स्नातकोत्तर", joinDate: "२०७५-०८-१५" },
    { id: 2, name: "सीता गुरुङ", nameEn: "Sita Gurung", phone: "9807654321", tol: "tol3", tolName: "टोल ३", address: "ललितपुर", citizenship: "234567", voterID: "V23456", email: "sita.gurung@example.com", dob: "२०३५ साल ७ महिना २२ गते", occupation: "व्यापारी", education: "स्नातक", joinDate: "२०७६-०४-२०" },
    { id: 3, name: "हरि थापा", nameEn: "Hari Thapa", phone: "9812345678", tol: "tol7", tolName: "टोल ७", address: "भक्तपुर", citizenship: "345678", voterID: "V34567", email: "hari.thapa@example.com", dob: "२०२८ साल १ महिना ५ गते", occupation: "डाक्टर", education: "एमबीबीएस", joinDate: "२०७३-११-०५" },
    { id: 4, name: "गिता पौडेल", nameEn: "Gita Poudel", phone: "9845678901", tol: "tol10", tolName: "टोल १०", address: "काठमाडौं", citizenship: "456789", voterID: "V45678", email: "gita.poudel@example.com", dob: "२०४० साल ९ महिना १८ गते", occupation: "इन्जिनियर", education: "बिई", joinDate: "२०७७-०२-१०" },
    { id: 5, name: "कृष्ण खड्का", nameEn: "Krishna Khadka", phone: "9876543210", tol: "tol5", tolName: "टोल ५", address: "पोखरा", citizenship: "567890", voterID: "V56789", email: "krishna.khadka@example.com", dob: "२०३३ साल ३ महिना २७ गते", occupation: "कृषक", education: "माध्यमिक", joinDate: "२०७४-०६-१७" },
    { id: 6, name: "सन्तोष महर्जन", nameEn: "Santosh Maharjan", phone: "9817654321", tol: "tol2", tolName: "टोल २", address: "ललितपुर", citizenship: "678901", voterID: "V67890", email: "santosh.maharjan@example.com", dob: "२०३७ साल ५ महिना १२ गते", occupation: "कलाकार", education: "स्नातक", joinDate: "२०७८-०१-२१" },
    { id: 7, name: "माया लामा", nameEn: "Maya Lama", phone: "9823456789", tol: "tol6", tolName: "टोल ६", address: "बुटवल", citizenship: "789012", voterID: "V78901", email: "maya.lama@example.com", dob: "२०४२ साल १० महिना ८ गते", occupation: "नर्स", education: "बिएस्सी नर्सिङ", joinDate: "२०७९-०५-१५" },
    { id: 8, name: "रमेश अधिकारी", nameEn: "Ramesh Adhikari", phone: "9809988776", tol: "tol4", tolName: "टोल ४", address: "चितवन", citizenship: "890123", voterID: "V89012", email: "ramesh.adhikari@example.com", dob: "२०३१ साल ११ महिना २१ गते", occupation: "इन्जिनियर", education: "एमटेक", joinDate: "२०७२-०७-२८" },
    { id: 9, name: "रेणुका बास्कोटा", nameEn: "Renuka Baskota", phone: "9856341278", tol: "tol9", tolName: "टोल ९", address: "दाङ", citizenship: "901234", voterID: "V90123", email: "renuka.baskota@example.com", dob: "२०४१ साल ६ महिना १५ गते", occupation: "अध्यापक", education: "पिएचडी", joinDate: "२०७१-१२-११" },
    { id: 10, name: "सुरज गुरुङ", nameEn: "Suraj Gurung", phone: "9805673412", tol: "tol8", tolName: "टोल ८", address: "कास्की", citizenship: "012345", voterID: "V01234", email: "suraj.gurung@example.com", dob: "२०३८ साल ३ महिना १९ गते", occupation: "बैंक कर्मचारी", education: "एमबीए", joinDate: "२०७३-१०-०१" },
    { id: 1, name: "राम शर्मा", nameEn: "Ram Sharma", phone: "9801234567", tol: "tol1", tolName: "टोल १", address: "काठमाडौं", citizenship: "123456", voterID: "V12345", email: "ram.sharma@example.com", dob: "२०३० साल ४ महिना १० गते", occupation: "शिक्षक", education: "स्नातकोत्तर", joinDate: "२०७५-०८-१५" },
    { id: 2, name: "सीता गुरुङ", nameEn: "Sita Gurung", phone: "9807654321", tol: "tol3", tolName: "टोल ३", address: "ललितपुर", citizenship: "234567", voterID: "V23456", email: "sita.gurung@example.com", dob: "२०३५ साल ७ महिना २२ गते", occupation: "व्यापारी", education: "स्नातक", joinDate: "२०७६-०४-२०" },
    { id: 3, name: "हरि थापा", nameEn: "Hari Thapa", phone: "9812345678", tol: "tol7", tolName: "टोल ७", address: "भक्तपुर", citizenship: "345678", voterID: "V34567", email: "hari.thapa@example.com", dob: "२०२८ साल १ महिना ५ गते", occupation: "डाक्टर", education: "एमबीबीएस", joinDate: "२०७३-११-०५" },
    { id: 4, name: "गिता पौडेल", nameEn: "Gita Poudel", phone: "9845678901", tol: "tol10", tolName: "टोल १०", address: "काठमाडौं", citizenship: "456789", voterID: "V45678", email: "gita.poudel@example.com", dob: "२०४० साल ९ महिना १८ गते", occupation: "इन्जिनियर", education: "बिई", joinDate: "२०७७-०२-१०" },
    { id: 5, name: "कृष्ण खड्का", nameEn: "Krishna Khadka", phone: "9876543210", tol: "tol5", tolName: "टोल ५", address: "पोखरा", citizenship: "567890", voterID: "V56789", email: "krishna.khadka@example.com", dob: "२०३३ साल ३ महिना २७ गते", occupation: "कृषक", education: "माध्यमिक", joinDate: "२०७४-०६-१७" },
    { id: 6, name: "सन्तोष महर्जन", nameEn: "Santosh Maharjan", phone: "9817654321", tol: "tol2", tolName: "टोल २", address: "ललितपुर", citizenship: "678901", voterID: "V67890", email: "santosh.maharjan@example.com", dob: "२०३७ साल ५ महिना १२ गते", occupation: "कलाकार", education: "स्नातक", joinDate: "२०७८-०१-२१" },
    { id: 7, name: "माया लामा", nameEn: "Maya Lama", phone: "9823456789", tol: "tol6", tolName: "टोल ६", address: "बुटवल", citizenship: "789012", voterID: "V78901", email: "maya.lama@example.com", dob: "२०४२ साल १० महिना ८ गते", occupation: "नर्स", education: "बिएस्सी नर्सिङ", joinDate: "२०७९-०५-१५" },
    { id: 8, name: "रमेश अधिकारी", nameEn: "Ramesh Adhikari", phone: "9809988776", tol: "tol4", tolName: "टोल ४", address: "चितवन", citizenship: "890123", voterID: "V89012", email: "ramesh.adhikari@example.com", dob: "२०३१ साल ११ महिना २१ गते", occupation: "इन्जिनियर", education: "एमटेक", joinDate: "२०७२-०७-२८" },
    { id: 9, name: "रेणुका बास्कोटा", nameEn: "Renuka Baskota", phone: "9856341278", tol: "tol9", tolName: "टोल ९", address: "दाङ", citizenship: "901234", voterID: "V90123", email: "renuka.baskota@example.com", dob: "२०४१ साल ६ महिना १५ गते", occupation: "अध्यापक", education: "पिएचडी", joinDate: "२०७१-१२-११" },
    { id: 10, name: "सुरज गुरुङ", nameEn: "Suraj Gurung", phone: "9805673412", tol: "tol8", tolName: "टोल ८", address: "कास्की", citizenship: "012345", voterID: "V01234", email: "suraj.gurung@example.com", dob: "२०३८ साल ३ महिना १९ गते", occupation: "बैंक कर्मचारी", education: "एमबीए", joinDate: "२०७३-१०-०१" },
    { id: 1, name: "राम शर्मा", nameEn: "Ram Sharma", phone: "9801234567", tol: "tol1", tolName: "टोल १", address: "काठमाडौं", citizenship: "123456", voterID: "V12345", email: "ram.sharma@example.com", dob: "२०३० साल ४ महिना १० गते", occupation: "शिक्षक", education: "स्नातकोत्तर", joinDate: "२०७५-०८-१५" },
    { id: 2, name: "सीता गुरुङ", nameEn: "Sita Gurung", phone: "9807654321", tol: "tol3", tolName: "टोल ३", address: "ललितपुर", citizenship: "234567", voterID: "V23456", email: "sita.gurung@example.com", dob: "२०३५ साल ७ महिना २२ गते", occupation: "व्यापारी", education: "स्नातक", joinDate: "२०७६-०४-२०" },
    { id: 3, name: "हरि थापा", nameEn: "Hari Thapa", phone: "9812345678", tol: "tol7", tolName: "टोल ७", address: "भक्तपुर", citizenship: "345678", voterID: "V34567", email: "hari.thapa@example.com", dob: "२०२८ साल १ महिना ५ गते", occupation: "डाक्टर", education: "एमबीबीएस", joinDate: "२०७३-११-०५" },
    { id: 4, name: "गिता पौडेल", nameEn: "Gita Poudel", phone: "9845678901", tol: "tol10", tolName: "टोल १०", address: "काठमाडौं", citizenship: "456789", voterID: "V45678", email: "gita.poudel@example.com", dob: "२०४० साल ९ महिना १८ गते", occupation: "इन्जिनियर", education: "बिई", joinDate: "२०७७-०२-१०" },
    { id: 5, name: "कृष्ण खड्का", nameEn: "Krishna Khadka", phone: "9876543210", tol: "tol5", tolName: "टोल ५", address: "पोखरा", citizenship: "567890", voterID: "V56789", email: "krishna.khadka@example.com", dob: "२०३३ साल ३ महिना २७ गते", occupation: "कृषक", education: "माध्यमिक", joinDate: "२०७४-०६-१७" },
    { id: 6, name: "सन्तोष महर्जन", nameEn: "Santosh Maharjan", phone: "9817654321", tol: "tol2", tolName: "टोल २", address: "ललितपुर", citizenship: "678901", voterID: "V67890", email: "santosh.maharjan@example.com", dob: "२०३७ साल ५ महिना १२ गते", occupation: "कलाकार", education: "स्नातक", joinDate: "२०७८-०१-२१" },
    { id: 7, name: "माया लामा", nameEn: "Maya Lama", phone: "9823456789", tol: "tol6", tolName: "टोल ६", address: "बुटवल", citizenship: "789012", voterID: "V78901", email: "maya.lama@example.com", dob: "२०४२ साल १० महिना ८ गते", occupation: "नर्स", education: "बिएस्सी नर्सिङ", joinDate: "२०७९-०५-१५" },
    { id: 8, name: "रमेश अधिकारी", nameEn: "Ramesh Adhikari", phone: "9809988776", tol: "tol4", tolName: "टोल ४", address: "चितवन", citizenship: "890123", voterID: "V89012", email: "ramesh.adhikari@example.com", dob: "२०३१ साल ११ महिना २१ गते", occupation: "इन्जिनियर", education: "एमटेक", joinDate: "२०७२-०७-२८" },
    { id: 9, name: "रेणुका बास्कोटा", nameEn: "Renuka Baskota", phone: "9856341278", tol: "tol9", tolName: "टोल ९", address: "दाङ", citizenship: "901234", voterID: "V90123", email: "renuka.baskota@example.com", dob: "२०४१ साल ६ महिना १५ गते", occupation: "अध्यापक", education: "पिएचडी", joinDate: "२०७१-१२-११" },
    { id: 10, name: "सुरज गुरुङ", nameEn: "Suraj Gurung", phone: "9805673412", tol: "tol8", tolName: "टोल ८", address: "कास्की", citizenship: "012345", voterID: "V01234", email: "suraj.gurung@example.com", dob: "२०३८ साल ३ महिना १९ गते", occupation: "बैंक कर्मचारी", education: "एमबीए", joinDate: "२०७३-१०-०१" }
    // 10 more entries needed to complete 20
];

// Add stylesheet for results
const style = document.createElement("style");
style.textContent = `
    .search-results {
        margin-top: 30px;
    }
    
    .result-count {
        margin-bottom: 15px;
        font-weight: bold;
        color: #333;
    }
    
    .person-card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.2s;
    }
    
    .person-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }
    
    .person-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
        margin-bottom: 15px;
    }
    
    .person-name {
        font-size: 1.5rem;
        font-weight: bold;
        color: #c1272d;
    }
    
    .person-tol {
        background-color: #f0f0f0;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 0.9rem;
    }
    
    .person-details {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }
    
    .detail-item {
        margin-bottom: 10px;
    }
    
    .detail-label {
        font-weight: bold;
        color: #555;
        margin-bottom: 3px;
    }
    
    .detail-value {
        color: #333;
    }
    
    .no-results {
        text-align: center;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 8px;
        color: #666;
    }
    
    .error-message {
        color: red;
        margin-bottom: 15px;
        text-align: center;
    }
    
    @media (max-width: 600px) {
        .person-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .person-tol {
            margin-top: 10px;
        }
        
        .person-details {
            grid-template-columns: 1fr;
        }
    }
`;
document.head.appendChild(style);

// Function to normalize text for search (remove diacritics, lowercase)
function normalizeText(text) {
    return text.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
}

// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Create a results container and add it to the page
    const resultsContainer = document.createElement("div");
    resultsContainer.id = "searchResults";
    resultsContainer.className = "search-results";
    
    // Get the search section and add the results container after it
    const searchSection = document.querySelector(".search-section");
    if (searchSection) {
        searchSection.parentNode.insertBefore(resultsContainer, searchSection.nextSibling);
    }
    
    // Get form elements
    const searchForm = document.getElementById("searchForm");
    const searchName = document.getElementById("searchName");
    const searchPhone = document.getElementById("searchPhone");
    const searchTol = document.getElementById("searchTol");
    
    // Create error message element if it doesn't exist
    let errorMessage = document.getElementById("errorMessage");
    if (!errorMessage) {
        errorMessage = document.createElement("div");
        errorMessage.id = "errorMessage";
        errorMessage.className = "error-message";
        const searchHeader = document.querySelector(".search-header");
        if (searchHeader) {
            searchHeader.after(errorMessage);
        }
    }
    
    // Handle the search form submission
    if (searchForm) {
        searchForm.addEventListener("submit", function(event) {
            event.preventDefault();
            
            // Get search values
            const nameQuery = searchName ? searchName.value.trim() : "";
            const phoneQuery = searchPhone ? searchPhone.value.trim() : "";
            const tolQuery = searchTol ? searchTol.value : "";
            
            // Check if at least one search field has a value
            if (!nameQuery && !phoneQuery && !tolQuery) {
                errorMessage.textContent = "कृपया खोज्नको लागि कम्तिमा एउटा फिल्ड भर्नुहोस्।";
                return;
            }
            
            // Clear any previous error message
            errorMessage.textContent = "";
            
            // Perform the search
            const results = performSearch(nameQuery, phoneQuery, tolQuery);
            
            // Display the results
            displayResults(results, resultsContainer);
        });
    }
    
    // Show all results on page load (optional)
    displayResults(peopleData, resultsContainer);
});

// Function to perform search
function performSearch(nameQuery, phoneQuery, tolQuery) {
    // If all queries are empty, show all results
    if (!nameQuery && !phoneQuery && !tolQuery) {
        return peopleData;
    }
    
    // Normalize the name query
    const normalizedName = nameQuery ? normalizeText(nameQuery) : "";
    
    return peopleData.filter(person => {
        // Check if name matches (in either Nepali or English)
        const nameMatches = !nameQuery || 
            normalizeText(person.name).includes(normalizedName) || 
            normalizeText(person.nameEn).includes(normalizedName);
        
        // Check if phone matches
        const phoneMatches = !phoneQuery || person.phone.includes(phoneQuery);
        
        // Check if tol matches
        const tolMatches = !tolQuery || person.tol === tolQuery;
        
        // Return true if all provided criteria match
        return nameMatches && phoneMatches && tolMatches;
    });
}

// Function to display search results
function displayResults(results, container) {
    // Clear previous results
    container.innerHTML = "";
    
    if (results.length === 0) {
        // No results message
        container.innerHTML = `
            <div class="no-results">
                <h3>कुनै परिणाम फेला परेन</h3>
                <p>कृपया फरक खोज मापदण्ड प्रयोग गर्नुहोस्।</p>
            </div>
        `;
        return;
    }
    
    // Show result count
    const resultCount = document.createElement("div");
    resultCount.className = "result-count";
    resultCount.textContent = `${results.length} जना व्यक्ति फेला परेको छ।`;
    container.appendChild(resultCount);
    
    // Display each person's information
    results.forEach(person => {
        const personCard = document.createElement("div");
        personCard.className = "person-card";
        
        personCard.innerHTML = `
            <div class="person-header">
                <div class="person-name">${person.name}</div>
                <div class="person-tol">${person.tolName}</div>
            </div>
            <div class="person-details">
                <div class="detail-item">
                    <div class="detail-label">फोन नम्बर:</div>
                    <div class="detail-value">${person.phone}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">ठेगाना:</div>
                    <div class="detail-value">${person.address}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">नागरिकता नं:</div>
                    <div class="detail-value">${person.citizenship}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">मतदाता नं:</div>
                    <div class="detail-value">${person.voterID}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">इमेल:</div>
                    <div class="detail-value">${person.email}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">जन्म मिति:</div>
                    <div class="detail-value">${person.dob}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">पेशा:</div>
                    <div class="detail-value">${person.occupation}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">शैक्षिक योग्यता:</div>
                    <div class="detail-value">${person.education}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">सदस्यता मिति:</div>
                    <div class="detail-value">${person.joinDate}</div>
                </div>
            </div>
        `;
        
        container.appendChild(personCard);
    });
}













  </script>
</body>
</html>