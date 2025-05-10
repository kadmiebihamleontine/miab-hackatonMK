
<?php
        // Demarrer la session php 
    session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LevelUpTogo - Accueil</title>
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="styLe.css">
  <style>
    /* style.css */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #333;
      overflow-x: hidden;
      background: 
        linear-gradient(rgba(30, 30, 30, 0.4), rgba(30, 30, 30, 0.4)),
        url('img.jpg') no-repeat center center fixed;
      background-size: cover;
      position: relative;
      min-height: 100vh;
    }

    /* Barre de navigation */
    header {
      background-color: rgba(0, 64, 128, 0.95);
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    }

    .logo {
      display: flex;
      align-items: center;
      font-size: 1.8rem;
      font-weight: 600;
      text-decoration: none;
      color: white;
    }

    .logo img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
      border-radius: 50px;
    }

    nav {
      display: flex;
      align-items: center;
    }

    nav a {
      color: white;
      margin-left: 1.5rem;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
      font-size: 1rem;
    }

    nav a:hover {
      color: #00f2fe;
    }

    /* Hero Section */
    .hero {
      text-align: center;
      padding: 5rem 2rem 3rem;
      background: rgba(0, 64, 128, 0.85);
      color: white;
      animation: fadeIn 1.5s ease;
      position: relative;
      margin: 2rem;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      border: 1px solid rgba(255, 255, 255, 0.15);
    }

    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      line-height: 1.3;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .hero-buttons {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 2rem;
      flex-wrap: wrap;
    }

    .hero button {
      background-color: white;
      color: #004080;
      border: none;
      padding: 0.8rem 1.8rem;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 30px;
      cursor: pointer;
      transition: transform 0.3s, background-color 0.3s;
    }

    .hero button:hover {
      background-color: #e6e6e6;
      transform: scale(1.05);
    }

    .hero button.secondary {
      background-color: transparent;
      color: white;
      border: 2px solid white;
    }

    .hero button.secondary:hover {
      background-color: rgba(255,255,255,0.1);
    }

    .illustration {
      margin-top: 2rem;
    }

    .illustration img {
      max-width: 300px;
      width: 100%;
      height: auto;
      animation: float 3s ease-in-out infinite;
    }

    /* Benefits Section */
    .benefits {
      padding: 3rem 2rem;
      text-align: center;
      animation: fadeInUp 1.2s ease;
      background-color: rgba(255, 255, 255, 0.95);
      margin: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .benefits h2 {
      margin-bottom: 1.5rem;
      font-size: 2rem;
      color: #004080;
    }

    .benefits p {
      max-width: 700px;
      margin: 0 auto 1rem;
      font-size: 1.1rem;
      line-height: 1.6;
      color: #333;
      font-weight: 500;
    }

    /* Services Section */
    .services {
      padding: 4rem 2rem;
      background-color: rgba(248, 250, 253, 0.95);
      text-align: center;
      margin: 2rem;
      border-radius: 10px;
    }
    
    .services h2 {
      font-size: 2.2rem;
      color: #004080;
      margin-bottom: 3rem;
    }
    
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .service-card {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: transform 0.3s ease;
    }
    
    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    
    .service-icon img {
      width: 70px;
      height: 70px;
      object-fit: contain;
      margin-bottom: 1.5rem;
    }
    
    .service-card h3 {
      color: #004080;
      margin-bottom: 1rem;
      font-size: 1.4rem;
    }
    
    .service-card p {
      color: #555;
      margin-bottom: 1.5rem;
      line-height: 1.6;
    }
    
    .service-link {
      color: #00a0e9;
      text-decoration: none;
      font-weight: 600;
      display: inline-block;
      transition: color 0.3s;
    }
    
    .service-link:hover {
      color: #0077b6;
      text-decoration: underline;
    }

    /* Barre d'orientation */
    .breadcrumb {
      padding: 1rem 2rem;
      background: rgba(255,255,255,0.9);
      margin: 0 2rem;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .breadcrumb a {
      color: #004080;
      text-decoration: none;
      margin-right: 0.5rem;
      font-weight: 500;
    }

    .breadcrumb a:hover {
      text-decoration: underline;
    }

    .breadcrumb span {
      margin: 0 0.5rem;
      color: #777;
    }

    /* Chat System */
    .chatbot-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
    }
    
    .chatbot-toggle {
      width: 60px;
      height: 60px;
      background-color: #004080;
      color: white;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      font-size: 24px;
      transition: transform 0.3s;
    }
    
    .chatbot-toggle:hover {
      transform: scale(1.1);
    }
    
    .chatbot-window {
      width: 350px;
      height: 450px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      overflow: hidden;
      display: none;
      flex-direction: column;
      margin-bottom: 10px;
    }
    
    .chatbot-header {
      background: #004080;
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .chatbot-messages {
      flex: 1;
      padding: 15px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .message {
      max-width: 80%;
      padding: 8px 12px;
      border-radius: 18px;
      line-height: 1.4;
      font-size: 14px;
    }

    .bot-message {
      align-self: flex-start;
      background: #f0f0f0;
      border-bottom-left-radius: 5px;
    }

    .user-message {
      align-self: flex-end;
      background: #004080;
      color: white;
      border-bottom-right-radius: 5px;
    }

    .chatbot-input {
      display: flex;
      border-top: 1px solid #ddd;
      padding: 10px;
    }

    .chatbot-input input {
      flex: 1;
      border: 1px solid #ddd;
      padding: 10px 15px;
      border-radius: 20px;
      outline: none;
      font-size: 14px;
      margin-right: 10px;
    }  
    
    .chatbot-title {
      font-weight: bold;
      font-size: 18px;
    }
    
    .chatbot-close {
      cursor: pointer;
      font-size: 20px;
      transition: transform 0.2s;
    }
    
    .chatbot-close:hover {
      transform: scale(1.2);
    }
  
    .chatbot-send {
      background: #004080;
      color: white;
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: background 0.3s;
    } 
    
    .chatbot-send:hover {
      background: #002b57;
    }

    /* Footer */
    footer {
      background-color: #002b57;
      color: white;
      padding: 3rem 2rem 1.5rem;
      margin-top: 3rem;
    }

    .footer-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-logo {
      display: flex;
      align-items: center;
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: white;
      text-decoration: none;
    }

    .footer-logo img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
      border-radius: 50px;
    }

    .footer-about p {
      margin-bottom: 1rem;
      line-height: 1.6;
    }

    .social-links {
      display: flex;
      gap: 1rem;
    }

    .social-links a {
      color: white;
      font-size: 1.2rem;
      transition: color 0.3s;
    }

    .social-links a:hover {
      color: #00f2fe;
    }

    .footer-links h3 {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
      position: relative;
      padding-bottom: 0.5rem;
    }

    .footer-links h3::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 40px;
      height: 2px;
      background: #00f2fe;
    }

    .footer-links ul {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.8rem;
    }

    .footer-links a {
      color: #ddd;
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-links a:hover {
      color: white;
      text-decoration: underline;
    }

    .footer-contact p {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
    }

    .footer-contact i {
      margin-right: 10px;
      color: #00f2fe;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 2rem;
      margin-top: 2rem;
      border-top: 1px solid rgba(255,255,255,0.1);
    }

    /* Style du menu utilisateur */
    .user-menu {
      position: relative;
      margin-left: 20px;
    }
    
    .user-toggle {
      width: 40px;
      height: 40px;
      background: #004080;
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    .user-toggle:hover {
      background: #002b57;
      transform: scale(1.1);
    }
    
    .dropdown-menu {
      position: absolute;
      right: 0;
      top: 50px;
      width: 220px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      display: none;
      z-index: 1000;
      overflow: hidden;
      animation: fadeIn 0.2s;
    }
    
    .dropdown-menu.show {
      display: block;
    }
    
    .menu-item {
      padding: 12px 15px;
      display: flex;
      align-items: center;
      color: #333;
      text-decoration: none;
      transition: background 0.2s;
    }
    
    .menu-item:hover {
      background: #f5f5f5;
    }
    
    .menu-item i {
      width: 20px;
      margin-right: 10px;
      color: #004080;
    }
    
    .divider {
      height: 1px;
      background: #eee;
      margin: 5px 0;
    }

    /* Style des modals */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 2000;
    }
    
    .modal-overlay.active {
      display: flex;
      animation: fadeIn 0.3s;
    }
    
    .modal-container {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 25px rgba(0, 0, 128, 0.2);
      width: 90%;
      max-width: 400px;
      padding: 30px;
      position: relative;
      transform: translateY(-20px);
      opacity: 0;
      transition: all 0.3s ease;
    }
    
    .modal-overlay.active .modal-container {
      transform: translateY(0);
      opacity: 1;
    }
    
    .close-modal {
      position: absolute;
      top: 15px;
      right: 15px;
      font-size: 24px;
      cursor: pointer;
      color: #777;
      transition: color 0.3s;
    }
    
    .close-modal:hover {
      color: #333;
    }
    
    .modal-title {
      color: #004080;
      margin-bottom: 20px;
      text-align: center;
      font-size: 24px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: 500;
    }
    
    .form-group input {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #4939b3;
      border-radius: 6px;
      font-size: 16px;
      transition: border 0.3s;
    }
    
    .form-group input:focus {
      border-color: #004080;
      outline: none;
    }
    
    .submit-btn {
      width: 100%;
      padding: 12px;
      background: #004080;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }
    
    .submit-btn:hover {
      background: #002b57;
    }
    
    .form-footer {
      text-align: center;
      margin-top: 20px;
      color: #666;
    }
    
    .form-footer a {
      color: #004080;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }
    
    .form-footer a:hover {
      color: #002b57;
      text-decoration: underline;
    }

    /* Animations */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    
    /* Animation d'ouverture */
    @keyframes fadeInSlide {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .chatbot-window.open {
      display: flex;
      animation: fadeInSlide 0.3s ease;
    }
    
    /* Icône qui pulse pour attirer l'attention */
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }
    
    .pulse {
      animation: pulse 2s infinite;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        padding: 1rem;
      }
      
      .logo {
        margin-bottom: 1rem;
      }
      
      nav {
        width: 100%;
        justify-content: space-between;
      }
      
      nav a {
        margin-left: 1rem;
        font-size: 0.9rem;
      }
      
      .hero {
        margin: 1rem;
        padding: 3rem 1rem;
      }
      
      .hero h1 {
        font-size: 2rem;
      }
      
      .hero p {
        font-size: 1rem;
      }
      
      .benefits, .services {
        margin: 1rem;
        padding: 2rem 1rem;
      }
      
      .services-grid {
        grid-template-columns: 1fr;
      }
      
      .footer-container {
        grid-template-columns: 1fr;
      }
      
      .chatbot-window {
        width: 90%;
        height: 400px;
      }
    }

    @media (max-width: 480px) {
      .hero h1 {
        font-size: 1.8rem;
      }
      
      .hero-buttons {
        flex-direction: column;
        gap: 0.5rem;
      }
      
      .hero button {
        width: 100%;
      }
      
      .breadcrumb {
        padding: 0.8rem 1rem;
        font-size: 0.9rem;
      }
    }

    .dynamic-header {
      background: radial-gradient(circle at center, #0056d2, #003366);
      color: white;
      padding: 3rem 1rem;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
  
    .dynamic-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 L0,100 Z" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></svg>');
        opacity: 0.3;
    }

    /* Nouveau style pour le bloc d'incitation */
    .auth-promo {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(255,255,255,0.95);
      z-index: 2000;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 2rem;
      animation: fadeIn 0.5s;
    }

    .auth-promo-content {
      max-width: 600px;
      padding: 2rem;
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 25px rgba(0,0,0,0.1);
    }

    .auth-promo h2 {
      color: #004080;
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
    }

    .auth-promo p {
      margin-bottom: 2rem;
      line-height: 1.6;
    }

    .auth-promo-buttons {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .auth-btn {
      padding: 0.8rem 1.5rem;
      border-radius: 30px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s;
      text-decoration: none;
      display: inline-block;
    }

    .auth-btn.primary {
      background: #004080;
      color: white;
      border: 2px solid #004080;
    }

    .auth-btn.primary:hover {
      background: #002b57;
      border-color: #002b57;
    }

    .auth-btn.secondary {
      background: white;
      color: #004080;
      border: 2px solid #004080;
    }

    .auth-btn.secondary:hover {
      background: #f0f7ff;
    }

    .auth-btn.ghost {
      background: transparent;
      color: #666;
      border: none;
      text-decoration: underline;
    }

    .auth-btn.ghost:hover {
      color: #333;
    }

    /* Animation */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    /* Masquer le bloc après connexion */
    .auth-promo.hidden {
      display: none;
    }

    /* Section Mentors */
    .mentors-section {
      padding: 4rem 2rem;
      background: #f9f9f9;
      text-align: center;
    }
    
    .mentors-section h2 {
        font-size: 2.2rem;
        color: #2c3e50;
        margin-bottom: 3rem;
        position: relative;
    }
    
    .mentors-section h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #3498db;
    }
    
    .mentors-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }
  
    .mentor-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    
    .mentor-card:hover {
        transform: translateY(-10px);
    }
    
    .mentor-photo {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
    
    .mentor-info {
        padding: 1.5rem;
    }
    
    .mentor-name {
        font-size: 1.4rem;
        color: #2c3e50;
        margin-bottom: 0.5rem;
    }
    
    .mentor-title {
        color: #3498db;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    
    .mentor-bio {
        color: #555;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }
    
    .mentor-social {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }
    
    .mentor-social a {
        color: #2c3e50;
        font-size: 1.2rem;
        transition: color 0.3s;
    }
    
    .mentor-social a:hover {
        color: #3498db;
    }
    
    @media (max-width: 768px) {
        .mentors-grid {
            grid-template-columns: 1fr;
        }
    }

    .breadcrumb a {
      color: #004080;
      text-decoration: none;
      margin-right: 0.5rem;
      font-weight: 500;
      transition: color 0.3s;
    }
    
    .breadcrumb a:hover {
      color: #002b57;
      text-decoration: underline;
    }
    
    .breadcrumb span {
      margin: 0 0.5rem;
      color: #777;
    }
    .message_error{
      color: red;
    }
  </style>
</head>
<body>
  <!-- Barre de navigation -->
  <header>
    <a href="index.html" class="logo">
      <img src="logo_leveluptogo.png" alt="Logo LevelUpTogo">
      LevelUpTogo
    </a>

    <nav>
      <a href="index1.html">Professionnels</a> <!-- Lien ajouté ici -->
      <a href="orientation.html">Quiz</a>
      <a href="formations.html">Formations</a>
      <a href="certifications.html">Certifications</a>
      <li><a href="indeX.html">Notre site web</a></li>


      <div class="user-menu">
        <div class="user-toggle" id="userToggle">
          <i class="fas fa-user"></i>
        </div>
        <div class="dropdown-menu" id="userDropdown">
          <a href="career.html" class="menu-item">
            <i class="fas fa-chart-line"></i>
            Career Path
          </a>
          <div class="divider"></div>
          <a href="account.html" class="menu-item">
            <i class="fas fa-user-cog"></i>
            Mon Compte
          </a>
          <div class="divider"></div>
          <a href="#" class="menu-item" id="loginButton">
            <i class="fas fa-sign-in-alt"></i>
            Connexion
          </a>
          <a href="#" class="menu-item" id="registerButton">
            <i class="fas fa-user-plus"></i>
            Inscription
          </a>
        </div>
      </div>
    </nav>
  </header>

  <div class="auth-promo" id="authPromo">
    <div class="auth-promo-content">
      <h2>Débloquez toutes les fonctionnalités !</h2>
      <p>
        Créez un compte gratuit ou connectez-vous pour accéder à l'ensemble des formations, 
        sauvegarder votre progression et bénéficier de recommandations personnalisées.
      </p>
      <div class="auth-promo-buttons">
        <a href="#" class="auth-btn primary" onclick="showRegister()">
          <i class="fas fa-user-plus"></i> Créer un compte
        </a>
        <a href="#" class="auth-btn secondary" onclick="showLogin()">
          <i class="fas fa-sign-in-alt"></i> Se connecter
        </a>
        <button class="auth-btn ghost" onclick="continueAsGuest()">
          Continuer sans compte (fonctionnalités limitées)
        </button>
      </div>
    </div>
  </div>

  <!-- Barre d'orientation -->
  <div class="breadcrumb">
    <a href="index.html">Accueil</a>
    <span>></span>
    <span>Bienvenue sur LevelUpTogo</span>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Votre avenir professionnel commence ici</h1>
    <p>
      LevelUpTogo est une plateforme numérique interactive conçue pour accompagner les jeunes togolais dans leur orientation scolaire, professionnelle et entrepreneuriale.
    </p>
    <div class="hero-buttons">
      <button onclick="window.location.href='orientation.html'">Commencer le Quiz</button>
      <button class="secondary" onclick="window.location.href='formations.html'">Voir les Formations</button>
    </div>
    <div class="illustration">
      <img src="illustration_quiz.png" alt="Illustration Quiz">
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits">
    <h2>Pourquoi faire le quiz ?</h2>
    <p>
      Le quiz d'orientation vous aide à mieux vous connaître et à identifier les domaines de formation
      qui vous correspondent. Grâce à nos suggestions personnalisées, vous pourrez mieux choisir votre futur métier !
    </p>
  </section>

  <!-- Services Section -->
  <section class="services">
    <h2>Nos Services</h2>
    <div class="services-grid">
      <!-- Service Formation -->
      <div class="service-card">
        <div class="service-icon">
          <img src="img1.png" alt="Formation">
        </div>
        <h3>Formations</h3>
        <p>Découvrez nos programmes de formation adaptés aux besoins du marché togolais, avec des parcours personnalisés.</p>
        <a href="formations.html" class="service-link">En savoir plus →</a>
      </div>
      
      <!-- Service Certification -->
      <div class="service-card">
        <div class="service-icon">
          <img src="img2.png" alt="Certification">
        </div>
        <h3>Certifications</h3>
        <p>Validez vos compétences avec des certifications reconnues qui boostent votre employabilité.</p>
        <a href="certifications.html" class="service-link">En savoir plus →</a>
      </div>
      
      <!-- Service Mentorat -->
      <div class="service-card">
        <div class="service-icon">
          <img src="img3.png" alt="Mentorat">
        </div>
        <h3>Mentorat</h3>
        <p>Bénéficiez de l'accompagnement de professionnels expérimentés dans votre domaine.</p>
        <a href="mentorat.html" class="service-link">En savoir plus →</a>
      </div>
      
      <!-- Service Contact -->
      <div class="service-card">
        <div class="service-icon">
          <img src="img4.png" alt="Contact">
        </div>
        <h3>Contact</h3>
        <p>Une question ? Notre équipe est à votre écoute pour vous guider dans votre parcours.</p>
        <a href="contact.html" class="service-link">Nous contacter →</a>
      </div>
    </div>
  </section>

   <!-- Section Mentors -->
  <section class="mentors-section">
    <h2>👨‍🏫 Rencontrez nos mentors</h2>
    <div class="mentors-grid">
        <!-- Mentor 1 -->
        <div class="mentor-card">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                 alt="Mentor John Doe" class="mentor-photo">
            <div class="mentor-info">
                <h3 class="mentor-name">John Doe</h3>
                <p class="mentor-title">Expert en Développement Web</p>
                <p class="mentor-bio">
                    Avec plus de 10 ans d'expérience dans le développement web, John a travaillé sur des projets 
                    pour des entreprises internationales. Il adore partager ses connaissances avec les jeunes 
                    développeurs.
                </p>
                <div class="mentor-social">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Mentor 2 -->
        <div class="mentor-card">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                 alt="Mentor Jane Smith" class="mentor-photo">
            <div class="mentor-info">
                <h3 class="mentor-name">Jane Smith</h3>
                <p class="mentor-title">Spécialiste en Marketing Digital</p>
                <p class="mentor-bio">
                    Jane a dirigé des campagnes marketing pour des marques renommées en Afrique. 
                    Passionnée par l'éducation, elle consacre son temps libre à guider les jeunes 
                    professionnels du marketing.
                </p>
                <div class="mentor-social">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Mentor 3 -->
        <div class="mentor-card">
            <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                 alt="Mentor Kwame Adjo" class="mentor-photo">
            <div class="mentor-info">
                <h3 class="mentor-name">Kwame Adjo</h3>
                <p class="mentor-title">Entrepreneur & Coach Business</p>
                <p class="mentor-bio">
                    Fondateur de 3 startups réussies au Togo, Kwame partage son expérience pratique 
                    en entrepreneuriat. Son approche pragmatique aide les jeunes à concrétiser leurs 
                    idées d'entreprise.
                </p>
                <div class="mentor-social">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Chat System -->
  <div class="chatbot-container">
    <div class="chatbot-window" id="chatbotWindow">
      <div class="chatbot-header">
        <div class="chatbot-title">Conseiller LevelUpTogo</div>
        <div class="chatbot-close" id="chatbotClose">×</div>
      </div>
      <div class="chatbot-messages" id="chatbotMessages">
        <div class="message bot-message">Bonjour ! 👋 Comment puis-je vous aider aujourd'hui ?</div>
      </div>
      <div class="chatbot-input">
        <input type="text" id="chatbotInput" placeholder="Écrivez votre message..." aria-label="Message à envoyer">
        <button class="chatbot-send" id="chatbotSend" aria-label="Envoyer le message">
          <i class="fas fa-paper-plane"></i>
        </button>
      </div>
    </div>
    <div class="chatbot-toggle pulse" id="chatbotToggle" aria-label="Ouvrir le chat">
      <i class="fas fa-comments"></i>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-about">
        <a href="index.html" class="footer-logo">
          <img src="logo_leveluptogo.png" alt="Logo LevelUpTogo">
          LevelUpTogo
        </a>
        <p>
          Plateforme d'orientation et de formation professionnelle pour les jeunes togolais.
        </p>
        <div class="social-links">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <div class="footer-links">
        <h3>Liens rapides</h3>
        <ul>
          <li><a href="index.html">Accueil</a></li>
          <li><a href="orientation.html">Quiz d'orientation</a></li>
          <li><a href="formations.html">Formations</a></li>
          <li><a href="certifications.html">Certifications</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
  
      <div class="footer-links">
        <h3>Ressources</h3>
        <ul>
          <li><a href="#">Blog</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Mentors</a></li>
          <li><a href="#">Partenaires</a></li>
          <li><a href="#">Témoignages</a></li>
        </ul>
      </div>

      <div class="footer-contact">
        <h3>Contactez-nous</h3>
        <p><i class="fas fa-map-marker-alt"></i> Lomé, Togo</p>
        <p><i class="fas fa-phone"></i> +228 12 34 56 78</p>
        <p><i class="fas fa-envelope"></i> contact@leveluptogo.tg</p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 LevelUpTogo - Tous droits réservés. | <a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </div>
  </footer>


  <!-- Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  
        <!-- code php de connexion -->
        

       <?php

           if(isset($_POST['button_con'])){
                //si la formulaire est envoyé
                    echo " Welcome to LevelUp-Togo" ;
                // se connecte a la base de donnee
                include "connexion_bd.php" ;
                // ectraire les infos du formulaire 
                extract($_POST);
                // verification si les champ sont vides 
                if(isset($email) && isset($mdp1) && $email != "" && $mdp1 != ""){
                    // verifions si les idendifiant sont juste 
                    $req = mysqli_query($con, "SELECT * FROM connexion WHERE email = '$email' AND mdp1 = '$mdp1'");
                    if(mysqli_num_rows($req) > 0 ){
                        // si les id sont justes 
                        // Creation d'une session qui contient l'eamil
                       $_SESSION['user'] = $email;

                        // redirection vers la page d'acceuil 
                        header("location:indeX.html");
                        unset($_SESSION['message']);
                        exit();
                    }else {
                        // sinon 
                       $error = "Email ou Mots de passe incorrecte(s) !" ;
                   } 
               }
            } 
            
            
        ?>

  <!-- FORMULAIRE DE CONNEXION -->
  <div class="modal-overlay" id="loginModal">
    <div class="modal-container">
      <span class="close-modal" onclick="hideModal('loginModal')">&times;</span>
      <h2 class="modal-title">Connexion</h2>
            <?php
                // Affichage le message qui dit qu'un compte a dejà creer  
                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'] ;
                }
            
            ?> 
            <?php
                // Affichage d'erreur 
                if(isset($error)){
                    echo "<p style='color:red;'>$error</p>" ;
                }
            
            ?>  

      <form  action="" method="POST" >
        <div class="form-group">
          <label >Email</label>
          <input type="email" name="email">
        </div>
        <div class="form-group">
          <label >Mot de passe</label>
          <input type="password"  name="mdp1">
        </div>
        <input type="submit" value="Se connecter"  name="button_con" class="submit-btn">
        <div class="form-footer">
          Pas encore de compte ? <a href="#" onclick="showRegister(); return false;">S'inscrire</a>
        </div>
      </form>
    </div>
  </div>

  
  <!-- CODE PHP INSCRIPTION -->
  <?php
        if(isset($_POST['button_inscription'])){
            //echo " Votre formulaire est envoyé , vous recevez un mail de confirmation ." ;
             // se connecte a la base de donnee
             include "connexion_bd.php" ;
             // ectraire les infos du formulaire 
             extract($_POST);
             // verification si les champ sont vides 
             if(isset($nom_complet) && isset($email) && isset($mdp1) && isset($mdp2) && $nom_complet !="" && $email != "" && $mdp1 != "" && $mdp2 != ""){
                 // verifions si les idendifiant sont juste 
                 if ($mdp2 != $mdp1){
                    //s'ils sont diff
                    $error = "Les mots de passes sont différents";

                 }else{
                    // s'ils sont exate
                    $req = mysqli_query($con, "SELECT * FROM inscription WHERE  email ='$email'");
                     if(mysqli_num_rows($req) == 0 ){
                        // si ça n'exite pas
                        $req = mysqli_query($con , "INSERT INTO inscription VALUES (NULL , '$email' , '$mdp1' )");
                        if ($req){
                            // si le compte a été creer , vreons une variable pour afficher la page de la connexion
                            $_SESSION['message'] = "<p style='color:red;'> Votre compte a été créer avec succés !</p>";
                            //redirection vers la page 
                            header("location:indeX.html");
                            exit();
                        }
                    }else{
                        // si ça existe 
                        $error = " Cet Email existe déjà !" ; 

                    }
                 }    
                   
            }
         } 
    
  
  
  ?>

  <!-- FORMULAIRE INSCRIPTION -->
    <div class="modal-overlay" id="registerModal">
      <div class="modal-container">
          <!-- <span class="close-modal" onclick="hideModal('registerModal')">&times;</span> -->
          <h2 class="modal-title">Inscription</h2>
          <p class="message_error"></p>
          <?php
                // Affichage d'erreur 
                if(isset($error)){
                    echo "<p style='color:red;'>$error</p>" ;
                }
            
            ?> 

          <form  action="" method="POST">
            <div class="form-group">
              <label >Nom complet</label>
              <input type="text" name="Nom_complet">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email">
            </div>
            <div class="form-group">
              <label >Mot de passe</label>
              <input type="password" name="mdp1" class="mdp1">
            </div>
            <div class="form-group">
              <label>Confirmer le mot de passe</label>
              <input type="password" name="mdp2" class="mdp2">
            </div>
            <button type="submit" name="button_inscription" class="submit-btn">S'inscrire</button>
            <div class="form-footer">
              Déjà un compte ? <a href="#" onclick="showLogin(); return false;">Se connecter</a>
            </div>
        </form>
       <!-- form id="registerForm" action="" method="POST">
            <div class="form-group">
              <label for="registerName">Nom complet</label>
              <input type="text" id="registerName" required name="nom">
            </div>
            <div class="form-group">
              <label for="registerEmail">Email</label>
              <input type="email" id="registerEmail" required name="email">
            </div>
            <div class="form-group">
              <label for="<registerPassword">Mot de passe</label>
              <input type="password" id="registerPassword" required name="mdp1" class="mdp1">
            </div>
            <div class="form-group">
              <label for="registerConfirm">Confirmer le mot de passe</label>
              <input type="password" id="registerConfirm" required name="mdp2" class="mdp2">
            </div>
            <button type="submit" class="submit-btn">S'inscrire</button>
            <div class="form-footer">
              Déjà un compte ? <a href="#" onclick="showLogin(); return false;">Se connecter</a>
            </div>
        </form> -->
      </div>
    </div>
    

  <script>
    /* verification et confirmation du mot des passe
    var mdp1 = document.querySelector('.mdp1');
    var mdp2 = document.querySelector('.mdp2');
    mdp2.onkeyup = function(){
      // evenment lorsqu'on ecrit dans le champ de confirmation de mot de passe
      message_error = document.querySelector('.message_error');
      if(mdp1.value != mdp2.value){ // s'il ne sont pas egaux 
        // alors on affiche 
        message_error.innerText = "Les Mots de passes ne sont pas conformes ! ";

      }else {
        message_error.innerText = "";
      }
    }*/
  
    // Gestion du bloc d'incitation
    function showAuthPromo() {
      // Vérifier si l'utilisateur est déjà connecté (à adapter avec votre système d'authentification)
      const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
      
      if (!isLoggedIn) {
        document.getElementById('authPromo').classList.remove('hidden');
      }
    }

    function continueAsGuest() {
      document.getElementById('authPromo').classList.add('hidden');
      // Optionnel: Stocker en localStorage pour ne pas réafficher pendant cette session
      localStorage.setItem('dismissedAuthPromo', 'true');
    }

    // Fonctions existantes pour les modals
    function showLogin() {
      document.getElementById('authPromo').classList.add('hidden');
      // Ouvrir le modal de connexion existant
      document.getElementById('loginModal').classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function showRegister() {
      document.getElementById('authPromo').classList.add('hidden');
      // Ouvrir le modal d'inscription existant
      document.getElementById('registerModal').classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    // Afficher le bloc au chargement si nécessaire
    window.addEventListener('DOMContentLoaded', () => {
      const dismissed = localStorage.getItem('dismissedAuthPromo') === 'true';
      if (!dismissed) {
        // Délai pour que l'utilisateur voie d'abord la page
        setTimeout(showAuthPromo, 2000);
      }
    });

  
    // Gestion du menu utilisateur
    const userToggle = document.getElementById('userToggle');
    const userDropdown = document.getElementById('userDropdown');

    userToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      userDropdown.classList.toggle('show');
    });

    // Fermer le menu quand on clique ailleurs
    document.addEventListener('click', function() {
      userDropdown.classList.remove('show');
    });

    // Gestion des modals
    function showModal(modalId) {
      document.getElementById(modalId).classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function hideModal(modalId) {
      document.getElementById(modalId).classList.remove('active');
      document.body.style.overflow = '';
    }

    function showLogin() {
      hideModal('registerModal');
      showModal('loginModal');
      return false;
    }

    function showRegister() {
      hideModal('loginModal');
      showModal('registerModal');
      return false;
    }

    // Boutons pour ouvrir les modals
    document.getElementById('loginButton').addEventListener('click', function(e) {
      e.preventDefault();
      showLogin();
    });

    document.getElementById('registerButton').addEventListener('click', function(e) {
      e.preventDefault();
      showRegister();
    });

    // Fermer quand on clique en dehors du modal
    window.addEventListener('click', function(event) {
      if (event.target.classList.contains('modal-overlay')) {
        hideModal(event.target.id);
      }
    });

    /* Gestion de la soumission des formulaires
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const email = document.getElementById('loginEmail').value;
      const password = document.getElementById('loginPassword').value;*/
      
      /* Ici vous ajouteriez la logique de connexion réelle
      console.log('Tentative de connexion avec:', email, password);
      alert('Connexion en cours...');
      hideModal('loginModal');
    });*/

    document.getElementById('registerForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const name = document.getElementById('registerName').value;
      const email = document.getElementById('registerEmail').value;
      const password = document.getElementById('registerPassword').value;
      const confirm = document.getElementById('registerConfirm').value;
      
      if (password !== confirm) {
        alert('Les mots de passe ne correspondent pas !');
        return;
      }
      
      // Ici vous ajouteriez la logique d'inscription réelle
      console.log('Inscription avec:', name, email, password);
      alert('Inscription réussie ! Vous pouvez maintenant vous connecter.');
      hideModal('registerModal');
    });

    // Chatbot System
    const chatbotToggle = document.getElementById('chatbotToggle');
    const chatbotClose = document.getElementById('chatbotClose');
    const chatbotWindow = document.getElementById('chatbotWindow');
    const chatbotMessages = document.getElementById('chatbotMessages');
    const chatbotInput = document.getElementById('chatbotInput');
    const chatbotSend = document.getElementById('chatbotSend');
    
    // Ouvrir le chatbot automatiquement après 3 secondes
    setTimeout(() => {
      openChatbot();
    }, 3000);
    
    // Ouvrir/fermer le chatbot
    chatbotToggle.addEventListener('click', openChatbot);
    chatbotClose.addEventListener('click', closeChatbot);
    
    function openChatbot() {
      chatbotWindow.classList.add('open');
      chatbotToggle.classList.remove('pulse');
      chatbotInput.focus();
    }
    
    function closeChatbot() {
      chatbotWindow.classList.remove('open');
    }
    
    // Envoyer un message
    function sendChatbotMessage() {
      const message = chatbotInput.value.trim();
      if (message) {
        // Ajouter le message de l'utilisateur
        const userMessage = document.createElement('div');
        userMessage.className = 'message user-message';
        userMessage.textContent = message;
        chatbotMessages.appendChild(userMessage);
        
        // Réponse automatique du bot (simplifiée)
        setTimeout(() => {
          const botMessage = document.createElement('div');
          botMessage.className = 'message bot-message';
          
          if (message.toLowerCase().includes('bonjour') || message.toLowerCase().includes('salut')) {
            botMessage.textContent = 'Enchanté ! Comment puis-je vous aider ?';
          } else if (message.toLowerCase().includes('formation')) {
            botMessage.innerHTML = 'Nous avons plusieurs formations disponibles. <a href="formations.html" style="color: #004080; text-decoration: underline;">Découvrez-les ici</a>.';
          } else if (message.toLowerCase().includes('quiz')) {
            botMessage.innerHTML = 'Le quiz d\'orientation est disponible ici : <a href="orientation.html" style="color: #004080; text-decoration: underline;">Commencer le quiz</a>';
          } else if (message.toLowerCase().includes('contact')) {
            botMessage.innerHTML = 'Vous pouvez nous contacter via notre <a href="contact.html" style="color: #004080; text-decoration: underline;">page contact</a>.';
          } else {
            botMessage.textContent = 'Je suis là pour vous aider. Posez-moi vos questions sur nos formations, certifications ou services.';
          }
          
          chatbotMessages.appendChild(botMessage);
          chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        }, 500);
        
        chatbotInput.value = '';
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
      }
    }
    
    // Envoyer avec le bouton ou la touche Entrée
    chatbotSend.addEventListener('click', sendChatbotMessage);
    chatbotInput.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        sendChatbotMessage();
      }
    });

    // Fermer le chatbot quand on clique en dehors
    document.addEventListener('click', function(e) {
      if (!chatbotWindow.contains(e.target) && e.target !== chatbotToggle) {
        closeChatbot();
      }
    });
  </script>
  <script src="scripT.js"></script>
</body>
</html>