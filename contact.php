<?php include './db.php';
?>
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
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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

    /* Mobile menu button - IMPROVED */
    .menu-toggle {
      display: none;
      cursor: pointer;
      background: none;
      border: none;
      padding: 8px;
      width: 40px;
      height: 40px;
      position: relative;
    }

    .menu-toggle span {
      display: block;
      width: 24px;
      height: 3px;
      margin: 4px 0;
      background-color: var(--primary-green);
      border-radius: 3px;
      transition: all 0.3s ease;
      position: absolute;
      left: 8px;
    }

    /* Position the three lines properly */
    .menu-toggle span:nth-child(1) {
      top: 10px;
    }

    .menu-toggle span:nth-child(2) {
      top: 18px;
    }

    .menu-toggle span:nth-child(3) {
      top: 26px;
    }

    /* Responsive styles - IMPROVED */
    @media (max-width: 992px) {
      .nav-links a {
        padding: 10px 12px;
      }
    }

    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
        z-index: 110;
      }

      .nav-menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 80%;
        max-width: 300px;
        height: 100vh;
        background-color: var(--white);
        flex-direction: column;
        align-items: flex-start;
        padding: 80px 0 20px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        transition: right 0.3s ease;
        overflow-y: auto;
      }

      .nav-menu.active {
        right: 0;
      }

      .nav-links {
        flex-direction: column;
        width: 100%;
      }

      .nav-links li {
        width: 100%;
      }

      .nav-links a {
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
        font-size: 16px;
      }

      .nav-links a::after {
        display: none;
      }

      .membership-btn {
        margin: 20px;
        display: inline-block;
        text-align: center;
        width: calc(100% - 40px);
        padding: 12px 20px;
      }

      /* Hamburger menu animation - IMPROVED */
      .menu-toggle.active span:nth-child(1) {
        transform: rotate(45deg);
        top: 18px;
      }

      .menu-toggle.active span:nth-child(2) {
        opacity: 0;
      }

      .menu-toggle.active span:nth-child(3) {
        transform: rotate(-45deg);
        top: 18px;
      }

      /* Prevent body scrolling when menu is open */
      body.menu-open {
        overflow: hidden;
      }

      /* Add overlay when menu is open */
      .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 90;
      }

      .overlay.active {
        display: block;
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












    .c {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      min-height: 100vh;
    }

    .left-column {
      background-color: var(--white);
      padding: 2.5rem;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 650px;
      position: relative;
      overflow: hidden;
    }

    .left-column::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 8px;
      background: linear-gradient(90deg, var(--primary-green), var(--primary-red));
    }

    .left-column h2 {
      margin-bottom: 1.5rem;
      color: var(--primary-green);
      font-size: 1.8rem;
      text-align: center;
      font-weight: 700;
      padding-bottom: 10px;
      border-bottom: 2px solid #eee;
    }

    form label {
      display: block;
      margin-top: 1.2rem;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: var(--dark-text);
    }

    form input,
    form textarea,
    form select {
      width: 100%;
      padding: 0.85rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      box-sizing: border-box;
      transition: all 0.3s ease;
      background-color: #f9f9f9;
    }

    form input:focus,
    form textarea:focus,
    form select:focus {
      border-color: var(--primary-green);
      outline: none;
      box-shadow: 0 0 0 3px rgba(0, 100, 0, 0.1);
      background-color: var(--white);
    }

    form textarea {
      min-height: 120px;
      resize: vertical;
    }

    .file-upload {
      position: relative;
      margin-top: 1.2rem;
    }

    .file-upload-label {
      display: flex;
      align-items: center;
      padding: 0.75rem 1rem;
      background-color: #f1f1f1;
      border: 1px dashed #aaa;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .file-upload-label:hover {
      background-color: #e9e9e9;
      border-color: var(--primary-green);
    }

    .file-upload-icon {
      margin-right: 10px;
      color: var(--primary-green);
    }

    .file-upload input[type="file"] {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      cursor: pointer;
    }

    .file-name {
      margin-top: 0.5rem;
      font-size: 0.9rem;
      color: var(--accent-blue);
      display: none;
    }

    .form-row {
      display: flex;
      gap: 15px;
    }

    .form-col {
      flex: 1;
    }

    button[type="submit"] {
      margin-top: 2rem;
      width: 100%;
      padding: 1rem;
      background-color: var(--primary-green);
      color: var(--white);
      border: none;
      border-radius: 8px;
      font-size: 1.1rem;
      font-weight: bold;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    button[type="submit"]:hover {
      background-color: var(--hover-green);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 100, 0, 0.2);
    }

    button[type="submit"]:active {
      transform: translateY(0);
    }

    .loading {
      width: 18px;
      height: 18px;
      margin-left: 10px;
      border: 3px solid var(--white);
      border-top: 3px solid transparent;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      display: none;
    }

    .form-submitting button[type="submit"] {
      background-color: #888;
      pointer-events: none;
    }

    .form-submitting .loading {
      display: block;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .success-message {
      display: none;
      margin-top: 2rem;
      padding: 2rem;
      border-radius: 8px;
      background-color: rgba(0, 160, 0, 0.9);
      color: var(--white);
      text-align: center;
      animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }







    .close-button {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 22px;
      font-weight: bold;
      color: var(--white);
      cursor: pointer;
      width: 30px;
      height: 30px;
      line-height: 30px;
      text-align: center;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
    }

    .close-button:hover {
      background-color: rgba(255, 255, 255, 0.3);
      transform: scale(1.1);
    }





    .success-message h3 {
      margin-bottom: 0.8rem;
      font-size: 1.5rem;
    }

    .success-message p {
      margin: 0;
      font-size: 1.1rem;
    }

    .error-message {
      display: none;
      margin-top: 1rem;
      padding: 0.75rem;
      border-radius: 6px;
      background-color: rgba(255, 0, 0, 0.1);
      color: var(--primary-red);
      font-size: 0.9rem;
      text-align: center;
    }

    .form-check {
      margin-top: 1.2rem;
      display: flex;
      align-items: center;
    }

    .form-check input[type="checkbox"] {
      width: auto;
      margin-right: 10px;
    }

    /* .captcha {
            margin-top: 1.5rem;
            background-color: #f5f5f5;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
        }
        
        .captcha-refresh {
            cursor: pointer;
            color: var(--accent-blue);
            font-size: 0.9rem;
            margin-top: 0.5rem;
            display: inline-block;
        } */

    @media (max-width: 768px) {
      .c {
        padding: 1rem;
      }

      .left-column {
        padding: 1.5rem;
      }

      .form-row {
        flex-direction: column;
        gap: 0;
      }

      button[type="submit"] {
        padding: 0.85rem;
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





    a {
      text-decoration: none;
    }




    /* ...rest of your existing styles... */
  </style>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'] ?? '';
    $type = $_POST['inquiry_type'];
    $topic = $_POST['subject'];
    $message = $_POST['message'];

    // File upload
    $file_path = '';
    if (!empty($_FILES["attachment"]["name"])) {
      $uploadDir = "uploads/";
      if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
      }

      $filename = basename($_FILES["attachment"]["name"]);
      $file_path = $uploadDir . time() . "_" . $filename;

      if (!move_uploaded_file($_FILES["attachment"]["tmp_name"], $file_path)) {
        $file_path = '';
      }
    }

    // INSERT with 7 columns (excluding `id`)
    $stmt = $conn->prepare("INSERT INTO contactus (fullname, email, phone, type, topic, message, file) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $fullname, $email, $phone, $type, $topic, $message, $file_path);

    if ($stmt->execute()) {
      echo "Form submitted successfully!";
    } else {
      echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
  }
  ?>

</head>

<body>
  <!-- Hidden SEO text for search engines -->
  <div style="display:none">
    Nepali Congress Gaindakot Ward No 5 Official Website. Political Party of Nepal focused on democracy, socialism and
    nationalism.
  </div>

  <!-- Top Bar -->
  <div class="top-bar">
    <span>राष्ट्रियता, लोकतन्त्र, समाजवाद</span>
    <span>हाम्रो सिद्धान्त, हाम्रो शक्ति</span>
  </div>

  <!-- Overlay for mobile menu -->
  <div class="overlay" id="overlay"></div>

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
            <li><a href="index.html">गृहपृष्ठ</a></li>
            <li><a href="about.html">हाम्रो बारेमा</a></li>
            <li><a href="team.html">हाम्रो टिम</a></li>
            <li><a href="member.html">सदस्यता</a></li>
            <li><a href="high.html">नेतृत्व</a></li>
            <li><a href="resource.html">स्रोतहरू</a></li>
            <li><a href="pic.html">ग्यालरी</a></li>
            <li><a href="conatct.html">सम्पर्क</a></li>
          </ul>
          <a href="online.html" class="membership-btn">अनलाइन सदस्यता</a>
        </div>
      </nav>
    </div>
  </header>



  <div class="c">
    <div class="left-column">
      <h2>हामीलाई सम्पर्क गर्नुहोस्</h2>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="contact-form"
        enctype="multipart/form-data">
        <!-- <input type="hidden" name="access_key" value="3fa66e1f-9cc3-4dfb-9de5-a3cef6fe7584"> -->
        <input type="hidden" name="subject" value="नयाँ सम्पर्क फारम प्रस्तुति">
        <input type="hidden" name="redirect" value="false">

        <div class="form-row">
          <div class="form-col">
            <label for="name">पूरा नाम <span style="color: var(--primary-red);">*</span></label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-col">
            <label for="email">इमेल ठेगाना <span style="color: var(--primary-red);">*</span></label>
            <input type="email" id="email" name="email" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-col">
            <label for="phone">फोन नम्बर</label>
            <input type="tel" id="phone" name="phone">
          </div>
          <div class="form-col">
            <label for="inquiry_type">प्रश्नको प्रकार <span style="color: var(--primary-red);">*</span></label>
            <select id="inquiry_type" name="inquiry_type" required>
              <option value="">-- छान्नुहोस् --</option>
              <option value="general">सामान्य प्रश्न</option>
              <option value="support">प्राविधिक सहयोग</option>
              <option value="feedback">प्रतिक्रिया</option>
              <option value="partnership">साझेदारी प्रस्ताव</option>
              <option value="other">अन्य</option>
            </select>
          </div>
        </div>

        <label for="subject">विषय <span style="color: var(--primary-red);">*</span></label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">सन्देश <span style="color: var(--primary-red);">*</span></label>
        <textarea id="message" name="message" required></textarea>

        <div class="file-upload">
          <label for="file" class="file-upload-label">
            <span class="file-upload-icon">📎</span>
            <span class="file-upload-text">फाइल अपलोड गर्नुहोस्</span>
          </label>
          <input type="file" id="file" name="attachment">
          <div class="file-name"></div>
        </div>

        <div class="form-check">
          <input type="checkbox" id="consent" name="consent" required>
          <label for="consent">म सहमत छु कि मेरो जानकारी प्रक्रिया गरिनेछ <span
              style="color: var(--primary-red);">*</span></label>
        </div>

        <!-- <div class="captcha">
                    <div id="captcha-container">
                        <img src="/api/placeholder/160/60" alt="CAPTCHA" id="captcha-image">
                    </div>
                    <input type="text" id="captcha" name="captcha" placeholder="माथिको CAPTCHA प्रविष्ट गर्नुहोस्" required style="margin-top: 10px;">
                    <span class="captcha-refresh" id="refresh-captcha">CAPTCHA रिफ्रेस गर्नुहोस्</span>
                </div> -->

        <div class="error-message"></div>

        <button type="submit">
          पेश गर्नुहोस्
          <div class="loading"></div>
        </button>
      </form>

      <div class="success-message" style="padding: 45px; border-radius: 10px;  position: relative; text-align: center;">
        <div class="close-button" id="close-success"
          style="position: absolute; top: 10px; right: 10px; cursor: pointer; font-size: 20px;">❌</div>
        <h3>धन्यवाद!</h3>
        <p>तपाईंको सन्देश सफलतापूर्वक पठाइएको छ। हामी छिट्टै तपाईंलाई सम्पर्क गर्नेछौं।</p>
        <p style="margin-top: 15px;">हामीलाई निम्न माध्यमबाट पनि सम्पर्क गर्न सक्नुहुन्छ:</p>
        <div style="margin-top: 15px; display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
          <div style="text-align: center; flex: 1 1 100px; min-width: 100px;">
            <div style="font-size: 24px; margin-bottom: 5px;">📞</div>
            <div>+977-1-4123456</div>
          </div>
          <div style="text-align: center; flex: 1 1 100px; min-width: 100px;">
            <div style="font-size: 24px; margin-bottom: 5px;">✉️</div>
            <div>info@example.com</div>
          </div>
          <div style="text-align: center; flex: 1 1 100px; min-width: 100px;">
            <div style="font-size: 24px; margin-bottom: 5px;">🏢</div>
            <div>काठमाडौं, नेपाल</div>
          </div>
        </div>
      </div>

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
            <li><a href="conatct.html">सम्पर्क</a></li>
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
          <a href="https://himalshahithakuri.com.np/" target="_blank"
            style="color: black; background-color: yellow; padding: 5px 10px; border-radius: 5px; text-decoration: none; font-weight: bold;">
            Designed and Developed by Himal Shahi Thakuri
          </a>
          |
          <a href="#">Supported by Laxman Karki</a>
        </p>
      </div>
    </div>
    </div>
  </footer>





  <script>
    // Mobile menu toggle - IMPROVED
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    const overlay = document.getElementById('overlay');
    const body = document.body;

    menuToggle.addEventListener('click', function () {
      this.classList.toggle('active');
      navMenu.classList.toggle('active');
      overlay.classList.toggle('active');
      body.classList.toggle('menu-open');
    });

    // Close menu when clicking overlay
    overlay.addEventListener('click', function () {
      menuToggle.classList.remove('active');
      navMenu.classList.remove('active');
      overlay.classList.remove('active');
      body.classList.remove('menu-open');
    });

    // Close menu when clicking on links
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        menuToggle.classList.remove('active');
        navMenu.classList.remove('active');
        overlay.classList.remove('active');
        body.classList.remove('menu-open');
      });
    });

    document.addEventListener('DOMContentLoaded', function () {
      const form = document.getElementById('contact-form');
      const fileInput = document.getElementById('file');
      const fileName = document.querySelector('.file-name');
      const successMessage = document.querySelector('.success-message');
      const errorMessage = document.querySelector('.error-message');
      // const refreshCaptcha = document.getElementById('refresh-captcha');
      const closeSuccess = document.getElementById('close-success');

      // File upload handling
      fileInput.addEventListener('change', function () {
        if (this.files && this.files[0]) {
          const file = this.files[0];

          // Display file name
          fileName.textContent = 'छानिएको फाइल: ' + file.name;
          fileName.style.display = 'block';
          errorMessage.style.display = 'none';
        } else {
          fileName.style.display = 'none';
        }
      });


      // Show loading animation
      form.classList.add('form-submitting');

      // Simulate form submission (for demo only)
      setTimeout(function () {
        // Hide form and show success message
        form.style.display = 'none';
        successMessage.style.display = 'block';

        // Remove loading state
        form.classList.remove('form-submitting');

        // Reset form if needed later
        form.reset();
      }, 1000); // 1 second delay to show the loading animation

      // Note: The actual form will be submitted normally when you implement the backend
      // The form action is already set to your web3forms endpoint
    });
    // Close success message
    closeSuccess.addEventListener('click', function () {
      successMessage.style.display = 'none';
      form.style.display = 'block';
      form.reset();
      fileName.style.display = 'none';
    });




    });

  </script>
</body>

</html>