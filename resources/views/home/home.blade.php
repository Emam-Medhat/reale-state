<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('assets/css//home.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <style>
        /* === Reset === */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #f8f9fa;
}

/* === Section Styling === */
.section {
    padding: 50px 0;
    text-align: center;
}

.section-title {
    font-size: 32px;
    color: #333;
}

.section-subtitle {
    font-size: 18px;
    color: #777;
    margin-bottom: 30px;
}

/* === Slider Styling === */
.property-slider {
    width: 100%;
    overflow: hidden;
    position: relative;
}

.slider-wrapper {
    display: flex;
    width: max-content;
}

.item {
    width: 500px;
    background: white;
    padding: 15px;
    margin: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.5s;
}

.item img {
    width: 100%;
    border-radius: 10px;
}

.category {
    display: inline-block;
    background: #f0a500;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    margin-top: 10px;
}

.item h6 {
    color: #f0a500;
    margin-top: 10px;
}

.item h4 a {
    color: #333;
    text-decoration: none;
}

.item ul {
    list-style: none;
    padding: 0;
    margin: 10px 0;
}

.item ul li {
    font-size: 14px;
    color: #555;
}

.item ul li span {
    font-weight: bold;
}

.main-button a {
    display: inline-block;
    background: #f0a500;
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
    transition: 0.3s;
}

.main-button a:hover {
    background: #d48900;
}

    </style>
      <style>
        .hero-image {
            position: relative;
            width: 100%;
            max-width: 600px;
            height: 400px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .hero-image img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .hero-image img.active {
            opacity: 1;
        }
    </style>
</head>
<body>
   @include('home.navbar')
   <br>

<style>
   a.btn:hover {
       background: linear-gradient(90deg, #8f94fb, #4e54c8);
       transform: translateY(-2px);
       box-shadow: 0 6px 16px rgba(0,0,0,0.3);
       text-decoration: none;
   }
</style>

    <section class="hero">
        <div class="container">
        <div class="hero-container">
            <div class="hero-content">
            <h1 class="hero-title">Bidaya Real Estate</h1>
            <p class="hero-subtitle">We provide real estate content online instantly and create access to a large number of people without any obstacles.</p>
            </div>
            <div class="hero-image">
                <img src="{{asset('assets/img/v4.png')}}" class="active">">>
            </div>
        </div>
        </div>
</section>



<section id="Property" class="section section-dark">
    <div class="container">
        <h2 class="section-title">Most Searched</h2>
        <p class="section-subtitle">Explore our most popular designs.</p>

        <div class="property-slider">
            <div class="slider-wrapper">
                @foreach ($property as $item)
                <div class="item card" style="position: relative; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    @php
                        $imagePath = filter_var($item->photo, FILTER_VALIDATE_URL)
                            ? $item->photo
                            : asset('storage/' . $item->photo);
                    @endphp

                    <!-- صورة العقار -->
                    <div class="image-container" style="width: 100%; height: 300px; overflow: hidden; border-top-left-radius: 12px; border-top-right-radius: 12px; position: relative;">
                        <!-- نوع المعاملة (بيع، إيجار) - في اليمين -->
                        <span class="transaction-label"
                              style="position: absolute; top: 10px; right: 10px; background-color: rgba(255, 0, 0, 0.8); color: white;
                                     padding: 5px 10px; font-size: 14px; border-radius: 5px;">
                            {{ $item->transaction_type }}
                        </span>

                        <!-- نوع العقار (فيلا، شقة) - في اليسار -->
                        <span class="property-label"
                              style="position: absolute; top: 10px; left: 10px; background-color: rgba(0, 0, 255, 0.8); color: white;
                                     padding: 5px 10px; font-size: 14px; border-radius: 5px;">
                            {{ $item->property_type }}
                        </span>

                        <img src="{{ $imagePath }}" alt="{{ $item->title }}"
                             onerror="this.onerror=null; this.src='{{ asset('images/placeholder.jpg') }}';"
                             style="width: 100%; height: 100%; object-fit: cover;">
                    </div>

                    <!-- تفاصيل العقار -->
                    <div class="card-content" style="padding: 15px;">
                        <h4 style="font-size: 18px; font-weight: bold; margin-bottom: 5px; color: #333;">
                            {{ $item->title }}
                        </h4>
                        <p style="color: #666; font-size: 14px; margin-bottom: 10px;">
                            <i class="fas fa-map-marker-alt" style="color: #ff5733;"></i> {{ $item->location }}
                        </p>

                        <div class="info" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                            <span style="color: #28a745; font-weight: bold; font-size: 18px;">${{ number_format($item->price, 2) }}</span>
                            <span style="font-size: 14px; color: #666;">
                                <i class="fas fa-calendar-alt" style="color: #007bff;"></i> {{ $item->date_added }}
                            </span>
                        </div>

                        <div class="features" style="display: flex; justify-content: space-around; background: #f8f9fa; padding: 10px; border-radius: 8px;">
                            <div style="text-align: center;">
                                <i class="fas fa-bed" style="color: #6c757d;"></i>
                                <p style="margin: 0; font-size: 14px;">{{ $item->number_of_rooms }} Rooms</p>
                            </div>
                            <div style="text-align: center;">
                                <i class="fas fa-expand" style="color: #6c757d;"></i>
                                <p style="margin: 0; font-size: 14px;">{{ $item->area }} m²</p>
                            </div>
                        </div>

                        <div class="main-button" style="text-align: center; margin-top: 15px;">
                            <a href="" style="background-color: #ff5733; color: white; padding: 10px 20px; font-size: 16px; font-weight: bold; border-radius: 5px; text-decoration: none; transition: 0.3s;">
                                Schedule a visit
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>




      <section id="contact" class="section section-dark">
        <div class="container">
          <h2 class="section-title">Contact Us</h2>
          <p class="section-subtitle">Are you ready to start your journey with us? Contact us to schedule an appointment or inquire about our services.</p>

          <div class="contact-container">
            <div class="contact-form">
              <h3>Start your journey with us</h3>
              <form>
                <div class="form-group">
                  <label for="name" class="form-label">Your Name</label>
                  <input type="text" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Your Email</label>
                  <input type="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="occasion" class="form-label">Choose what suits you best</label>
                  <select id="occasion" class="form-control" required>
                    <option value="" disabled selected>Please choose an option</option>
                    <option value="wedding">Villas</option>
                    <option value="birthday">Houses</option>
                    <option value="corporate">Lands</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="message" class="form-label">Tell us about your Enquiry</label>
                  <textarea id="message" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="button button-primary">Send Enquiry</button>
              </form>
            </div>

            <div class="contact-details">
              <h3>Contact Information</h3>
              <div class="contact-info-item">
                <div class="contact-info-icon">🕒</div>
                <div class="contact-info-content">
                  <h4>working Hours</h4>
                  <p>Tuesday - Friday: 10am - 6pm<br>Saturday: 10am - 4pm<br>Consultations by appointment only</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <div class="container">
          <div class="footer-container">
            <div class="footer-column">
              <h4> more details about Bedaya website</h4>
              <p>We offer an inquiry about everything you want from a modern house in a privileged location in the heart of the city, a property with wonderful city views, a luxuriously designed apartment for elegant and upscale living, and even the designs you need.</p>
              <div class="footer-social">
                <a href="#" class="social-link">f</a>
                <a href="#" class="social-link">in</a>
              </div>
            </div>

            <div class="footer-column">
              <h4>Quick Links</h4>
              <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#Sale"> Sale</a></li>
                <li><a href="#Rent">Rent</a></li>
                <li><a href="#Engineering Companies">Engineering Companies</a></li>
                <li><a href="#Property">Property</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>

            <div class="footer-column">
              <h4> What We Offer</h4>
              <ul class="footer-links">
                <li><a href="#"> Villas</a></li>
                <li><a href="#"> Houses</a></li>
                <li><a href="#"> Lands</a></li>
                <li><a href="#"> Engineering Companies</a></li>
                <li><a href="#">Maintenance</a></li>
              </ul>
            </div>


          <div class="footer-copyright">
            <p>&copy; 2025 All Rights Reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
          </div>
        </div>
      </footer>

      <script src="{{asset('home.js')}}"></script>
      <script>
        // Animation slider
        const sliderWrapper = document.querySelector('.slider-wrapper');
        setInterval(() => {
            sliderWrapper.style.transition = 'transform 1s ease-in-out';
            sliderWrapper.style.transform = 'translateX(-500px)';
            setTimeout(() => {
                sliderWrapper.appendChild(sliderWrapper.firstElementChild);
                sliderWrapper.style.transition = 'none';
                sliderWrapper.style.transform = 'translateX(0)';
            }, 1000);
        }, 3000);
    </script>
</body>
</html>