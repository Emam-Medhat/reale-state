<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا - موقع عقارات مميز</title>
    <style>
        body {
            font-family: 'Tajawal', Arial, sans-serif;
            background-color: #ecf0f1;
            margin: 0;
            padding: 0;
            direction: rtl;
            line-height: 1.6;
        }
        .header {
            background: linear-gradient(135deg, #3498db, #2ecc71);
            color: #fff;
            text-align: center;
            padding: 60px 20px;
        }
        .header h1 {
            font-size: 48px;
            margin: 0;
        }
        .header p {
            font-size: 20px;
            margin: 10px 0 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }
        .contact-section {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 40px;
        }
        .contact-form {
            flex: 1;
            min-width: 300px;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        .contact-form h2 {
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 28px;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin: 15px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #3498db;
            outline: none;
        }
        .contact-form textarea {
            height: 150px;
            resize: none;
        }
        .contact-form button {
            width: 100%;
            padding: 15px;
            background-color: #2ecc71;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .contact-form button:hover {
            background-color: #27ae60;
        }
        .contact-info {
            flex: 1;
            min-width: 300px;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        .contact-info h2 {
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 28px;
        }
        .contact-info p {
            font-size: 18px;
            color: #7f8c8d;
            margin: 20px 0;
            display: flex;
            align-items: center;
        }
        .contact-info p i {
            margin-left: 10px;
            color: #3498db;
            font-size: 24px;
        }
        .map-section {
            margin-top: 60px;
            text-align: center;
        }
        .map-section iframe {
            width: 100%;
            height: 400px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #2c3e50;
            color: #fff;
            margin-top: 60px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    @include('home.navbar')

    <div class="header">
        <h1>تواصل معانا النهاردة!</h1>
        <p>فريقنا جاهز يساعدك في كل استفساراتك عن العقارات</p>
    </div>
    <div class="container">
        <div class="contact-section">
            <div class="contact-form">
                <h2>ابعتلنا رسالتك</h2>
                <input type="text" placeholder="اسمك الكامل" required>
                <input type="email" placeholder="البريد الإلكتروني" required>
                <input type="tel" placeholder="رقم التليفون" required>
                <textarea placeholder="اكتب استفسارك أو رسالتك هنا" required></textarea>
                <button type="submit">إرسال الرسالة</button>
            </div>
            <div class="contact-info">
                <h2>معلومات التواصل</h2>
                <p><i>📞</i> 0123-456-7890</p>
                <p><i>✉️</i> info@realestate.com</p>
                <p><i>📍</i> 123 شارع العقارات، الدور الخامس، القاهرة، مصر</p>
            </div>
        </div>
        <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.123456789!2d31.235711615!3d30.04441981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDAyJzM5LjkiTiAzMcKwMTQnMDguNiJF!5e0!3m2!1sar!2seg!4v1616601234567!5m2!1sar!2seg" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <footer>
        <p>جميع الحقوق محفوظة © 2025 - موقع عقارات مميز</p>
    </footer>
</body>
</html>