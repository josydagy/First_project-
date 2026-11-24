<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dagi| Information Systems & Cybersecurity Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="#" class="brand-logo">
                <span class="brand-dot"></span>
                <span>Dagi.</span>
            </a>

            <nav>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#projects">Works</a></li>
                    <li><a href="#services">Skills</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="nav-actions">
                <button id="theme-toggle" class="theme-btn" aria-label="Toggle Dark/Light Mode">
                    <i class="fas fa-sun" id="theme-icon"></i>
                </button>
                <a href="#contact" class="btn-pill">Let's Talk <i class="fas fa-arrow-right"></i></a>
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-grid">
            <div class="hero-left">
                <div class="status-badge">
                    <span class="status-dot"></span>
                    Available for internships & junior roles • IS Graduating Student
                </div>

                <h1>
                    Building Secure <br>
                    Systems &amp; Apps <span class="accent-text">People Trust.</span>
                </h1>

                <p class="hero-sub">
                    I'm <strong>Degefe Yosef</strong>, a fourth-year Information Systems student focused on full-stack web &amp; mobile development, network administration, and practical cybersecurity.
                </p>

                <div class="hero-actions">
                    <a href="#projects" class="btn-emerald">View My Works</a>
                    <a href="Degefe_Yosef_CV.pdf" download class="btn-dark-outline">
                        Download CV <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <div class="hero-right">
                <div class="portrait-frame">
                    <!-- Replace profile.jpg with your actual photo -->
                    <img src="my.jpg" alt="Dagi" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="portrait-fallback">
                        <i class="fas fa-user-shield"></i>
                        <span>Degefe Yosef</span>
                        <small>Information Systems • Security &amp; Dev</small>
                    </div>
                </div>

                <div class="floating-socials">
                    <a href="https://github.com/" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://tryhackme.com/" target="_blank" aria-label="TryHackMe"><i class="fas fa-terminal"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Focus Strip -->
    <section class="focus-strip">
        <div class="container">
            <p class="strip-label">Core platforms &amp; practical environments in my workflow</p>
            <div class="strip-items">
                <span><i class="fab fa-linux"></i> Kali Linux</span>
                <span><i class="fas fa-network-wired"></i> Cisco NetAcad</span>
                <span><i class="fas fa-shield-halved"></i> TryHackMe</span>
                <span><i class="fas fa-database"></i> PHP &amp; MySQL</span>
                <span><i class="fab fa-android"></i> Android &amp; SQLite</span>
                <span><i class="fab fa-git-alt"></i> Git &amp; GitHub</span>
            </div>
        </div>
    </section>

    <!-- Metrics Row -->
    <section class="metrics-section">
        <div class="container metrics-grid">
            <div class="metric-card">
                <i class="fas fa-folder-open"></i>
                <h3>4+</h3>
                <p>Systems &amp; Apps Built</p>
            </div>
            <div class="metric-card">
                <i class="fas fa-certificate"></i>
                <h3>Cisco</h3>
                <p>Networking Badges</p>
            </div>
            <div class="metric-card">
                <i class="fas fa-bug-slash"></i>
                <h3>THM</h3>
                <p>Security &amp; Recon Labs</p>
            </div>
            <div class="metric-card">
                <i class="fas fa-graduation-cap"></i>
                <h3>2027</h3>
                <p>IS Graduation Target</p>
            </div>
        </div>
    </section>

    <!-- Featured Works -->
    <section id="projects" class="section">
        <div class="container">
            <div class="section-header-row">
                <div>
                    <h2 class="section-heading">Featured Works</h2>
                    <p class="section-sub">Selected software, mobile, and security lab projects</p>
                </div>
                <a href="https://github.com/" target="_blank" class="btn-ghost-sm">View All Works <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="works-grid">
                <!-- Work 1 -->
                <article class="work-card">
                    <div class="work-thumb thumb-teal">
                        <i class="fas fa-boxes-stacked"></i>
                        <span class="work-tag">Capstone System</span>
                    </div>
                    <div class="work-body">
                        <div class="work-top">
                            <h3>Etete Supermarket System</h3>
                            <a href="#" class="ext-icon" aria-label="Project details"><i class="fas fa-arrow-up-right-from-square"></i></a>
                        </div>
                        <p class="work-cat">PHP • MySQL • Role-Based Inventory</p>
                        <p class="work-desc">Admin, Storekeeper/Sales, and Customer workflows with stock and order tracking.</p>
                    </div>
                </article>

                <!-- Work 2 -->
                <article class="work-card">
                    <div class="work-thumb thumb-slate">
                        <i class="fas fa-utensils"></i>
                        <span class="work-tag">Android App</span>
                    </div>
                    <div class="work-body">
                        <div class="work-top">
                            <h3>ATOT Hotel Menu App</h3>
                            <a href="#" class="ext-icon" aria-label="Project details"><i class="fas fa-arrow-up-right-from-square"></i></a>
                        </div>
                        <p class="work-cat">Java • XML • Offline SQLite</p>
                        <p class="work-desc">Categorized hotel menu app with custom icons and local offline database storage.</p>
                    </div>
                </article>

                <!-- Work 3 -->
                <article class="work-card">
                    <div class="work-thumb thumb-emerald">
                        <i class="fas fa-radar"></i>
                        <span class="work-tag">Cybersecurity</span>
                    </div>
                    <div class="work-body">
                        <div class="work-top">
                            <h3>Network &amp; Recon Labs</h3>
                            <a href="#" class="ext-icon" aria-label="Project details"><i class="fas fa-arrow-up-right-from-square"></i></a>
                        </div>
                        <p class="work-cat">Kali Linux • Nmap • OpenVPN</p>
                        <p class="work-desc">Port scanning, service enumeration, and VPN lab exercises in VirtualBox &amp; TryHackMe.</p>
                    </div>
                </article>

                <!-- Work 4 -->
                <article class="work-card">
                    <div class="work-thumb thumb-dark">
                        <i class="fas fa-id-card"></i>
                        <span class="work-tag">Mobile Utility</span>
                    </div>
                    <div class="work-body">
                        <div class="work-top">
                            <h3>Digital Student ID</h3>
                            <a href="#" class="ext-icon" aria-label="Project details"><i class="fas fa-arrow-up-right-from-square"></i></a>
                        </div>
                        <p class="work-cat">Android • Local Storage</p>
                        <p class="work-desc">Campus digital ID card prototype (ዲጂታል መታወቂያ) built for quick local verification.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Services / Core Capabilities -->
    <section id="services" class="section section-alt">
        <div class="container">
            <div class="section-header-row">
                <div>
                    <h2 class="section-heading">Capabilities I Offer</h2>
                    <p class="section-sub">Technical areas I build, configure, and secure</p>
                </div>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>Web &amp; Backend Dev</h3>
                    <p>Building structured web apps with PHP, MySQL, HTML, CSS, JavaScript, and Node.js.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-shield-halved"></i></div>
                    <h3>Network &amp; Security</h3>
                    <p>Subnetting, Nmap reconnaissance, OpenVPN setups, and TryHackMe lab practice.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-mobile-screen-button"></i></div>
                    <h3>Offline Mobile Apps</h3>
                    <p>Developing Android utilities in Java/Kotlin using Room and SQLite local storage.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-server"></i></div>
                    <h3>System &amp; Lab Admin</h3>
                    <p>Working across Linux CLI, VirtualBox, XAMPP, and Git workflows for reliable deployment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container about-box">
            <div>
                <span class="mini-label">About Me</span>
                <h2 class="section-heading">Information Systems Student Focused on Practical Execution</h2>
                <p class="about-copy">
                    I am Degefe Yosef, a fourth-year Information Systems undergraduate preparing for graduation and entry-level roles in cybersecurity, systems/network administration, and software development. I enjoy turning academic concepts and lab experiments into working systems.
                </p>
            </div>
            <div class="about-highlights">
                <div class="highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Hands-on labs in Kali Linux, VirtualBox &amp; TryHackMe</span>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Database-driven web systems &amp; offline-first Android apps</span>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Continuous learning via Cisco Networking Academy</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section section-alt">
        <div class="container">
            <div class="cta-banner">
                <div>
                    <h2>Let's work together on your next project or team.</h2>
                    <p>Open to junior software, network, and cybersecurity opportunities.</p>
                </div>
                <a href="mailto:josydagy@gmail.com" class="btn-emerald">Email Directly <i class="fas fa-paper-plane"></i></a>
            </div>

            <div class="contact-grid">
                <form id="contactForm" class="contact-card">
                    <div class="input-row">
                        <input type="text" id="name" placeholder="Your Name" required>
                        <input type="email" id="email" placeholder="Your Email" required>
                    </div>
                    <textarea id="message" rows="4" placeholder="Tell me about a role, internship, or project..." required></textarea>
                    <button type="submit" class="btn-emerald">Send Message</button>
                    <p id="formStatus" class="form-status"></p>
                </form>

                <div class="contact-side">
                    <div class="side-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email</strong>
                            <span>josydagy@gmail.com</span>
                        </div>
                    </div>
                    <div class="side-item">
                        <i class="fas fa-location-dot"></i>
                        <div>
                            <strong>Location</strong>
                            <span>Ethiopia • Remote &amp; On-site Ready</span>
                        </div>
                    </div>
                    <div class="side-item">
                        <i class="fas fa-graduation-cap"></i>
                        <div>
                            <strong>Degree</strong>
                            <span>B.Sc. in Information Systems (4th Year)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-inner">
            <a href="#" class="brand-logo">
                <span class="brand-dot"></span>
                <span>Degefe.</span>
            </a>
            <p>© 2026 Dagi. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>