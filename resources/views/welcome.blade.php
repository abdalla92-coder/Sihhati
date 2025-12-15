<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صحتي - البوابة الصحية</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #0d7e8a;
            --primary-dark: #0a636d;
            --secondary-color: #4CAF50;
            --accent-color: #FF9800;
            --light-color: #f5f9fa;
            --dark-color: #333;
            --gray-color: #666;
            --light-gray: #eee;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            background-color: #f8f9fa;
            color: var(--dark-color);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header and Navigation */
        header {
            background-color: white;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            color: var(--primary-color);
            font-size: 28px;
        }

        .logo-text {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .logo-arabic {
            font-size: 24px;
            color: var(--primary-dark);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 16px;
            transition: var(--transition);
            padding: 5px 0;
            position: relative;
        }

        nav a:hover {
            color: var(--primary-color);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: var(--transition);
        }

        nav a:hover::after {
            width: 100%;
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 16px;
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .btn-outline:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .mobile-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--primary-color);
        }

        /* Hero Section */
        .hero {
            padding: 80px 0;
            background: linear-gradient(to left, rgba(13, 126, 138, 0.1), rgba(76, 175, 80, 0.05));
            position: relative;
            overflow: hidden;
        }

        .hero-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .hero-content {
            flex: 1;
        }

        .hero-image {
            flex: 1;
            text-align: center;
        }

        .hero-image img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 20px;
            color: var(--primary-dark);
            line-height: 1.3;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: var(--gray-color);
            max-width: 500px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .hero-buttons .btn {
            padding: 12px 30px;
            font-size: 17px;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background-color: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            color: var(--primary-dark);
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--gray-color);
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: var(--light-color);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background-color: rgba(13, 126, 138, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .feature-icon i {
            font-size: 30px;
            color: var(--primary-color);
        }

        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--primary-dark);
        }

        .feature-card p {
            color: var(--gray-color);
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .service-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            height: 150px;
            background-color: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-icon i {
            font-size: 60px;
            color: var(--primary-color);
        }

        .service-content {
            padding: 25px;
        }

        .service-content h3 {
            margin-bottom: 10px;
            color: var(--primary-dark);
        }

        .service-content p {
            color: var(--gray-color);
            margin-bottom: 15px;
        }

        .service-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .service-link:hover {
            gap: 10px;
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .cta p {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta .btn {
            background-color: white;
            color: var(--primary-color);
            font-size: 18px;
            padding: 15px 40px;
        }

        .cta .btn:hover {
            background-color: var(--light-color);
        }

        /* Footer */
        footer {
            background-color: #1a2a3a;
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            font-size: 22px;
            margin-bottom: 25px;
            color: #fff;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
            padding-right: 5px;
        }

        .contact-info {
            list-style: none;
        }

        .contact-info li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .contact-info i {
            color: var(--primary-color);
            margin-top: 3px;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #2a3a4a;
            color: #bbb;
            font-size: 15px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-container {
                flex-direction: column;
            }

            .hero-content {
                text-align: center;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .mobile-toggle {
                display: block;
            }

            nav ul {
                position: fixed;
                top: 70px;
                right: -100%;
                flex-direction: column;
                background-color: white;
                width: 80%;
                height: calc(100vh - 70px);
                padding: 30px;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
                transition: var(--transition);
            }

            nav ul.active {
                right: 0;
            }

            .auth-buttons {
                display: none;
            }

            .hero h1 {
                font-size: 34px;
            }

            .section-title h2 {
                font-size: 30px;
            }

            .features-grid, .services-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 28px;
            }

            .hero p {
                font-size: 16px;
            }

            .btn {
                padding: 8px 20px;
                font-size: 15px;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .hero-buttons .btn {
                width: 100%;
                max-width: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container nav-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div>
                    <div class="logo-text">Sihhati</div>
                    <div class="logo-arabic">صحتي</div>
                </div>
            </div>

            <div class="mobile-toggle" id="mobileToggle">
                <i class="fas fa-bars"></i>
            </div>

            <nav>
                <ul id="navMenu">
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">الخدمات الطبية</a></li>
                    <li><a href="#">الحجوزات</a></li>
                    <li><a href="#">السجلات الصحية</a></li>
                    <li><a href="#">الاستشارات</a></li>
                    <li><a href="#">اتصل بنا</a></li>
                </ul>
            </nav>

            <div class="auth-buttons">
                <button class="btn btn-outline">تسجيل الدخول</button>
                <button class="btn btn-primary">إنشاء حساب</button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <h1>بوابتك الشاملة للرعاية الصحية الذكية</h1>
                <p>منصة "صحتي" توفر لك جميع الخدمات الطبية تحت سقف واحد. احجز مواعيدك، استشر الأطباء، تابع سجلك الصحي، واحصل على الرعاية التي تستحقها من منزلك.</p>
                <div class="hero-buttons">
                    <button class="btn btn-primary">ابدأ رحلتك الصحية</button>
                    <button class="btn btn-outline">تعرف على خدماتنا</button>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="صحة وطبيب">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>لماذا تختار منصة "صحتي"؟</h2>
                <p>نقدم لك تجربة صحية متكاملة تجمع بين التكنولوجيا الحديثة والرعاية الطبية المتميزة</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>حجز مواعيد سريع</h3>
                    <p>احجز مواعيدك مع أفضل الأطباء والمستشفيات في جميع التخصصات بضغطة زر واحدة</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>استشارات طبية أونلاين</h3>
                    <p>احصل على استشارات طبية من أطباء معتمدين عبر الفيديو أو الدردشة في أي وقت</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-medical"></i>
                    </div>
                    <h3>السجل الصحي الإلكتروني</h3>
                    <p>احتفظ بسجل صحي متكامل يمكنك مشاركته مع مقدمي الرعاية الصحية بسهولة وأمان</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>خدماتنا الصحية الشاملة</h2>
                <p>نوفر مجموعة واسعة من الخدمات الطبية لتلبية جميع احتياجاتك الصحية</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <div class="service-content">
                        <h3>عيادات التخصصات</h3>
                        <p>احجز مع أفضل الأطباء في جميع التخصصات الطبية</p>
                        <a href="#" class="service-link">استعرض الأطباء <i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-prescription-bottle-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>صيدلية إلكترونية</h3>
                        <p>اطلب أدويتك واحصل عليها في منزلك مع التوصيل السريع</p>
                        <a href="#" class="service-link">اطلب الآن <i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-vial"></i>
                    </div>
                    <div class="service-content">
                        <h3>الفحوصات المخبرية</h3>
                        <p>احجز فحوصات مخبرية منزلية أو في أقرب مركز لموقعك</p>
                        <a href="#" class="service-link">اعرف المزيد <i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <div class="service-content">
                        <h3>الطوارئ المنزلية</h3>
                        <p>خدمات طبية طارئة تصل إليك في أسرع وقت عند الحاجة</p>
                        <a href="#" class="service-link">الاتصال بالطوارئ <i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>ابدأ رحلتك نحو صحة أفضل اليوم</h2>
            <p>انضم إلى ملايين المستخدمين الذين يثقون بمنصة "صحتي" لإدارة صحتهم والعناية بأنفسهم وعائلاتهم</p>
            <button class="btn">إنشاء حساب مجاني</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>منصة صحتي</h3>
                    <p>نحن منصة رعاية صحية شاملة تهدف إلى تقديم خدمات طبية متميزة عبر الإنترنت، نسعى لجعل الرعاية الصحية في متناول الجميع.</p>
                    <div style="margin-top: 20px; display: flex; gap: 15px;">
                        <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-facebook"></i></a>
                        <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>روابط سريعة</h3>
                    <ul class="footer-links">
                        <li><a href="#">الرئيسية</a></li>
                        <li><a href="#">عن المنصة</a></li>
                        <li><a href="#">الخدمات الطبية</a></li>
                        <li><a href="#">الباقات والاشتراكات</a></li>
                        <li><a href="#">الأسئلة الشائعة</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>اتصل بنا</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> عمان، الأردن</li>
                        <li><i class="fas fa-phone"></i> +962 6 123 4567</li>
                        <li><i class="fas fa-envelope"></i> info@sihhati.com</li>
                        <li><i class="fas fa-clock"></i> الأحد - الخميس: 8 صباحًا - 5 مساءً</li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>جميع الحقوق محفوظة &copy; 2023 منصة "صحتي" - Sihhati Health Platform</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileToggle').addEventListener('click', function() {
            document.getElementById('navMenu').classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-bars');
            this.querySelector('i').classList.toggle('fa-times');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('#navMenu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('navMenu').classList.remove('active');
                document.getElementById('mobileToggle').querySelector('i').classList.remove('fa-times');
                document.getElementById('mobileToggle').querySelector('i').classList.add('fa-bars');
            });
        });

        // Button interactions
        document.querySelectorAll('.btn-primary').forEach(button => {
            button.addEventListener('click', function() {
                alert('مرحباً بك في منصة "صحتي"! سيتم توجيهك إلى صفحة التسجيل.');
            });
        });

        document.querySelectorAll('.btn-outline').forEach(button => {
            button.addEventListener('click', function() {
                alert('شكراً لاهتمامك! ستتعرف الآن على خدماتنا المتكاملة.');
            });
        });
    </script>
        <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
