<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZDtechnology | Frontend Developer</title>
    <link rel="icon" type="image/png" href="{{ asset('img/icon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body>

    <!-- PARTICLES -->
    <div id="particles-js"></div>

    <!-- WHATSAPP -->
    <a href="https://wa.me/6281340985993" class="whatsapp-float" target="_blank">
        💬
    </a>

    <!-- NAVBAR -->
    <header class="navbar">

        <div class="container nav-content">

            <div class="logo">
                ZD<span>technology</span>
            </div>

            <nav>
                <a href="#about" data-en="About" data-id="Tentang">About</a>
                <a href="#services" data-en="Services" data-id="Layanan">Services</a>
                <a href="#projects" data-en="Projects" data-id="Project">Projects</a>
                <a href="#contact" data-en="Contact" data-id="Kontak">Contact</a>
            </nav>

            <div class="nav-actions">

                <!-- LANGUAGE -->
                <button id="langToggle">
                    ID
                </button>

                <!-- THEME -->
                <button id="themeToggle">
                    🌙
                </button>

            </div>

        </div>

    </header>

    <!-- HERO -->
    <section class="hero">

        <div class="container hero-grid">

            <div class="hero-text" data-aos="fade-right">

                <div class="badge" data-en="AVAILABLE FOR REMOTE WORK" data-id="TERSEDIA UNTUK REMOTE WORK">
                    AVAILABLE FOR REMOTE WORK
                </div>

                <h1 data-en="Frontend Developer Building Modern & Responsive Applications"
                    data-id="Frontend Developer Pembuat Aplikasi Modern & Responsif">

                    Frontend Developer
                    Building Modern &
                    Responsive Applications

                </h1>

                <p data-en="I create elegant, scalable, and user-friendly web & mobile applications using Laravel, Flutter, JavaScript, and modern frontend technologies."
                    data-id="Saya membuat aplikasi web dan mobile yang modern, elegan, responsif, dan mudah digunakan menggunakan Laravel, Flutter, JavaScript, dan teknologi frontend modern.">

                    I create elegant, scalable, and user-friendly web &
                    mobile applications using Laravel, Flutter,
                    JavaScript, and modern frontend technologies.

                </p>

                <div class="hero-buttons">

                    <a href="#projects" class="btn-primary" data-en="View Projects" data-id="Lihat Project">
                        View Projects
                    </a>

                    <a href="https://github.com/Ewin1802" target="_blank" class="btn-secondary">
                        GitHub
                    </a>

                </div>

            </div>

            <div class="hero-image" data-aos="fade-left">

                <div class="glow"></div>

                <img src="{{ asset('img/profile.png') }}" alt="Profile">

            </div>

        </div>

    </section>

    <!-- ABOUT -->
    <section class="about" id="about">

        <div class="container">

            <div class="section-title" data-aos="fade-up" data-en="About Me" data-id="Tentang Saya">

                About Me

            </div>

            <div class="about-card" data-aos="zoom-in">

                <p data-en="Passionate Frontend & Mobile Developer with experience building modern web and mobile applications for businesses, financial systems, and organizational platforms. I specialize in creating responsive interfaces, elegant user experiences, and scalable applications using Laravel, Flutter, JavaScript, and modern frontend technologies. Focused on clean architecture, performance optimization, and delivering digital solutions that help businesses grow efficiently."
                    data-id="Frontend & Mobile Developer yang berpengalaman dalam membangun aplikasi web dan mobile modern untuk kebutuhan bisnis, sistem keuangan, dan platform organisasi. Saya fokus menciptakan tampilan yang responsif, pengalaman pengguna yang elegan, serta aplikasi yang scalable menggunakan Laravel, Flutter, JavaScript, dan teknologi frontend modern. Mengutamakan clean architecture, optimasi performa, dan solusi digital yang membantu bisnis berkembang lebih efisien.">

                    Passionate Frontend & Mobile Developer with experience building
                    modern web and mobile applications for businesses,
                    financial systems, and organizational platforms.

                    I specialize in creating responsive interfaces,
                    elegant user experiences, and scalable applications
                    using Laravel, Flutter, JavaScript,
                    and modern frontend technologies.

                    Focused on clean architecture,
                    performance optimization,
                    and delivering digital solutions
                    that help businesses grow efficiently.

                </p>

            </div>

        </div>

    </section>

    <!-- SERVICES -->
    <section class="services" id="services">

        <div class="container">

            <div class="section-title" data-aos="fade-up" data-en="Services" data-id="Layanan">

                Services

            </div>

            <div class="service-grid">

                <div class="service-card" data-aos="fade-up">
                    <h3>Frontend Development</h3>
                    <p>Modern responsive websites optimized for all devices.</p>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <h3>Flutter Mobile Apps</h3>
                    <p>Cross-platform applications with clean UI/UX.</p>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <h3>Dashboard Systems</h3>
                    <p>Elegant dashboard systems for business solutions.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- PROJECT -->
    <section class="projects" id="projects">

        <div class="container">

            <div class="section-title" data-aos="fade-up" data-en="Featured Projects" data-id="Project Unggulan">

                Featured Projects

            </div>

            <div class="project-grid">

                <div class="project-card" data-aos="zoom-in">

                    <img src="{{ asset('img/project2.png') }}">

                    <div class="project-content">

                        <h3>JurnalDoi App</h3>

                        <p data-en="Free personal finance tracking application built with Flutter and SQLite database. Designed to help users manage income, expenses, financial records, backup & restore data, and daily budgeting with a clean and user-friendly interface."
                            data-id="Aplikasi pencatatan keuangan gratis berbasis Flutter dan database SQLite. Dirancang untuk membantu pengguna mengelola pemasukan, pengeluaran, pencatatan transaksi, backup & restore data, serta budgeting harian dengan tampilan yang modern dan mudah digunakan.">

                            Free personal finance tracking application built with Flutter and SQLite database. Designed
                            to help users manage income, expenses, financial records, backup & restore data, and daily
                            budgeting with a clean and user-friendly interface.

                        </p>

                        <a href="https://play.google.com/store/apps/details?id=com.zdtech.flutter_torang_pe_kas&hl=en"
                            target="_blank">
                            Download on Play Store →
                        </a>

                    </div>

                </div>

                <div class="project-card" data-aos="zoom-in" data-aos-delay="150">

                    <img src="{{ asset('img/project1.png') }}">

                    <div class="project-content">

                        <h3>SPJ Express</h3>

                        <p data-en="Regional government financial reporting platform designed to manage budgeting reports, expenditure records, financial accountability documents, and administrative workflows with responsive dashboard interface and scalable system architecture."
                            data-id="Platform laporan keuangan pemerintah daerah yang dirancang untuk mengelola laporan anggaran, pencatatan belanja, dokumen pertanggungjawaban keuangan, serta alur administrasi dengan dashboard responsif dan arsitektur sistem yang scalable.">

                            Regional government financial reporting platform designed to manage budgeting reports,
                            expenditure records, financial accountability documents, and administrative workflows with
                            responsive dashboard interface and scalable system architecture.

                        </p>

                        <a href="https://spjexpress.orangsonuo.my.id" target="_blank">
                            Live Demo →
                        </a>

                    </div>

                </div>

                <div class="project-card" data-aos="zoom-in" data-aos-delay="300">

                    <img src="{{ asset('img/project3.jpg') }}">

                    <div class="project-content">

                        <h3 data-en="PastiPay Cashier" data-id="PastiPay Kasir">

                            PastiPay Cashier

                        </h3>

                        <p data-en="Premium cashier application developed using Flutter and SQLite database for sales transactions, product management, business operations, and cashier activities. Built with responsive UI, modern design, and optimized performance for small and medium businesses."
                            data-id="Aplikasi kasir premium berbasis Flutter dan database SQLite untuk transaksi penjualan, manajemen produk, operasional bisnis, dan aktivitas kasir. Dibangun dengan tampilan modern, responsif, dan performa yang optimal untuk kebutuhan usaha kecil hingga menengah.">

                            Premium cashier application developed using Flutter and SQLite database for sales
                            transactions, product management, business operations, and cashier activities. Built with
                            responsive UI, modern design, and optimized performance for small and medium businesses.

                        </p>

                        <a href="https://play.google.com/store/apps/details?id=com.zdtech.pastipay&hl=en"
                            target="_blank">
                            Download on Play Store →
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">

        <div class="container">

            <div class="section-title" data-aos="fade-up" data-en="Let's Work Together" data-id="Mari Bekerja Sama">

                Let's Work Together

            </div>

            <div class="contact-box" data-aos="zoom-in">

                <p>
                    Open for freelance projects, remote opportunities, and international collaboration.
                </p>

                <div class="contact-links">

                    <a href="mailto:elantapa@gmail.com">
                        Email
                    </a>

                    <a href="https://github.com/Ewin1802" target="_blank">
                        GitHub
                    </a>

                    <a href="https://wa.me/6281340985993" target="_blank">
                        WhatsApp
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        // AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // DARK MODE
        const themeToggle = document.getElementById('themeToggle');

        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('light-mode');
        });

        // LANGUAGE
        const langToggle = document.getElementById('langToggle');

        let currentLang = 'en';

        langToggle.addEventListener('click', () => {

            currentLang = currentLang === 'en' ? 'id' : 'en';

            langToggle.innerText = currentLang === 'en' ? 'ID' : 'EN';

            document.querySelectorAll('[data-en]').forEach(el => {
                el.innerHTML = el.dataset[currentLang];
            });

        });

        // PARTICLES
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 70
                },
                "color": {
                    "value": "#78ff7c"
                },
                "shape": {
                    "type": "circle"
                },
                "opacity": {
                    "value": 0.4
                },
                "size": {
                    "value": 3
                },
                "move": {
                    "enable": true,
                    "speed": 2
                }
            }
        });
    </script>

</body>

</html>
