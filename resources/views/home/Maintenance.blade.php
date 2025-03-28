<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب خدمة الصيانة | موقع العقارات</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #dc2626;
            --light-color: #f8fafc;
            --dark-color: #1e293b;
            --gray-color: #64748b;
            --success-color: #16a34a;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Tajawal', 'Segoe UI', sans-serif;
        }
        
        @font-face {
            font-family: 'Tajawal';
            src: url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');
        }
        
        body {
            background-color: #f1f5f9;
            color: var(--dark-color);
            line-height: 1.6;
            direction: ltr;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            /* background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); */
            color: white;
            padding: 2rem 0;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
        }
        
        header h1 {
            margin-bottom: 0.5rem;
            font-size: 2.2rem;
            position: relative;
        }
        
        header p {
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
        }
        
        .main-content {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .form-section {
            flex: 2;
            background-color: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .form-section:hover {
            transform: translateY(-3px);
        }
        
        .info-section {
            flex: 1;
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 20px;
            height: fit-content;
        }
        
        h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 3px;
        }
        
        h3 {
            color: var(--dark-color);
            margin-bottom: 1rem;
            font-size: 1.4rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark-color);
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            background-color: #f8fafc;
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            background-color: white;
        }
        
        textarea {
            height: 140px;
            resize: vertical;
        }
        
        .checkbox-group {
            margin: 1rem 0;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .checkbox-item input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary-color);
        }
        
        .checkbox-item label {
            margin-bottom: 0;
            font-weight: normal;
            cursor: pointer;
        }
        
        .file-upload {
            margin: 1.5rem 0;
        }
        
        .file-upload-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.8rem 1rem;
            background-color: #f8fafc;
            border: 1px dashed #cbd5e1;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .file-upload-label:hover {
            background-color: #f1f5f9;
            border-color: var(--primary-color);
        }
        
        .file-upload-label i {
            color: var(--primary-color);
        }
        
        #file-name {
            margin-top: 0.5rem;
            font-size: 0.9rem;
            color: var(--gray-color);
        }
        
        .btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 8px -1px rgba(37, 99, 235, 0.4);
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        .emergency-info {
            background-color: #fff1f2;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            border-right: 4px solid var(--accent-color);
            position: relative;
        }
        
        .emergency-info::before {
            content: "\f071";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            top: 1rem;
            left: 1rem;
            color: var(--accent-color);
            font-size: 1.2rem;
        }
        
        .emergency-info h3 {
            padding-right: 1.5rem;
            color: var(--accent-color);
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 1rem;
            padding: 0.8rem;
            background-color: #f8fafc;
            border-radius: 8px;
        }
        
        .info-item i {
            color: var(--primary-color);
            font-size: 1.2rem;
            min-width: 24px;
        }
        
        .faq-item {
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 1.5rem;
        }
        
        .faq-item:last-child {
            border-bottom: none;
        }
        
        .faq-item h4 {
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .faq-item h4::before {
            content: "\f059";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: var(--primary-color);
            font-size: 0.9rem;
        }
        
        .success-message {
            display: none;
            background-color: #f0fdf4;
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            border-left: 4px solid var(--success-color);
            text-align: center;
        }
        
        .success-message i {
            color: var(--success-color);
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .success-message h3 {
            color: var(--success-color);
            margin-bottom: 0.5rem;
        }
        
        @media (max-width: 992px) {
            .main-content {
                flex-direction: column;
            }
            
            .info-section {
                position: static;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 576px) {
            .form-section, .info-section {
                padding: 1.5rem;
            }
            
            header {
                padding: 1.5rem 0;
            }
            
            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    @include('home.navbar')
    <div class="container">
        <header style="    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
            <h1><i class="fas fa-tools"></i> Maintenance Service Request</h1>
            <p>We're here to help you solve any property issues quickly and efficiently</p>
        </header>
        
        <div class="main-content">
            <section class="form-section">
                <h2>Maintenance Request Form</h2>
                <p>Please fill in all required fields and we'll respond within 24 hours</p>
                
                <form id="maintenanceForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required placeholder="Enter your full name">
                    </div>
                    
                    <div class="form-group">
                        <label for="property">Unit/Property Number</label>
                        <input type="text" id="property" name="property" required placeholder="Example: A102 or 56">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required placeholder="Enter phone number">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email (optional)</label>
                        <input type="email" id="email" name="email" placeholder="example@domain.com">
                    </div>
                    
                    <div class="form-group">
                        <label>Required Maintenance Type</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="electricity" name="maintenance_type" value="electricity">
                                <label for="electricity">Electrical</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="plumbing" name="maintenance_type" value="plumbing">
                                <label for="plumbing">Plumbing</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="ac" name="maintenance_type" value="ac">
                                <label for="ac">AC/Cooling</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="carpentry" name="maintenance_type" value="carpentry">
                                <label for="carpentry">Carpentry</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="painting" name="maintenance_type" value="painting">
                                <label for="painting">Painting</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="other" name="maintenance_type" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Detailed Problem Description</label>
                        <textarea id="description" name="description" required placeholder="Describe the problem you're facing in detail..."></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="priority">Request Priority</label>
                        <select id="priority" name="priority">
                            <option value="normal">Normal (2-3 days)</option>
                            <option value="urgent">Urgent (24 hours)</option>
                        </select>
                    </div>
                    
                    <div class="form-group file-upload">
                        <label>Attach Problem Photo (optional)</label>
                        <label for="photo" class="file-upload-label">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Choose File</span>
                        </label>
                        <input type="file" id="photo" name="photo" accept="image/*" style="display: none;">
                        <div id="file-name"></div>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">I agree to the <a href="#" style="color: var(--primary-color);">Terms of Service</a> and authorize entry to the unit if needed</label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn">
                        <i class="fas fa-paper-plane"></i> Submit Request
                    </button>
                </form>
                
                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle"></i>
                    <h3>Your request has been submitted successfully!</h3>
                    <p>We'll contact you as soon as possible</p>
                </div>
            </section>
            
            <section class="info-section">
                <div class="emergency-info">
                    <h3><i class="fas fa-exclamation-triangle"></i> For Emergencies Only</h3>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>0123456789</strong>
                            <p style="font-size: 0.9rem; color: var(--gray-color);">Available 24/7</p>
                        </div>
                    </div>
                </div>
                
                <h3><i class="fas fa-clock"></i> Working Hours</h3>
                <div class="info-item">
                    <i class="fas fa-calendar-day"></i>
                    <div>
                        <strong>Sunday to Thursday</strong>
                        <p style="font-size: 0.9rem; color: var(--gray-color);">8 AM - 5 PM</p>
                    </div>
                </div>
                
                <h3><i class="fas fa-tachometer-alt"></i> Average Response Time</h3>
                <div class="info-item">
                    <i class="fas fa-stopwatch"></i>
                    <div>
                        <strong>24-48 hours</strong>
                        <p style="font-size: 0.9rem; color: var(--gray-color);">For normal requests</p>
                    </div>
                </div>
                
                <h3><i class="fas fa-question-circle"></i> Frequently Asked Questions</h3>
                <div class="faq-item">
                    <h4>Are there any charges for maintenance service?</h4>
                    <p>Depends on the type of issue and property warranty. You'll be informed about costs before work begins.</p>
                </div>
                
                <div class="faq-item">
                    <h4>How can I track my request status?</h4>
                    <p>Updates will be sent via SMS or email at each stage of the repair process.</p>
                </div>
                
                <div class="faq-item">
                    <h4>What issues are covered by the service?</h4>
                    <p>All electrical, plumbing, AC, basic carpentry issues, plus painting and general maintenance work.</p>
                </div>
            </section>
        </div>
        </div>
    
    <script>
        document.getElementById('maintenanceForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // إخفاء النموذج وإظهار رسالة النجاح
            this.style.display = 'none';
            document.getElementById('successMessage').style.display = 'block';
            
            // هنا يمكنك إضافة كود إرسال النموذج إلى الخادم
            // مثلاً باستخدام fetch أو XMLHttpRequest
            
            // انتقل إلى أعلى الصفحة لرؤية رسالة النجاح
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // عرض اسم الملف عند اختياره
        document.getElementById('photo').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name || 'لم يتم اختيار ملف';
            document.getElementById('file-name').textContent = `الملف المختار: ${fileName}`;
        });
        
        // تأثيرات عند التمرير
        window.addEventListener('scroll', function() {
            const formSection = document.querySelector('.form-section');
            const position = formSection.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (position < screenPosition) {
                formSection.style.transform = 'translateY(0)';
            }
        });
    </script>
</body>
</html>