<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar | Bidaya Real Estate</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* === Basic Reset === */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* === Navbar Styling === */
        /* === Navbar Styling === */
.top-bar {
    /* background: linear-gradient(135deg, #1a1a1a, #333); */
    padding: 20px 0;
    position: fixed; /* تفعيل الوضع الثابت */
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease-in-out;
}

/* إضافة padding للـ body عشان المحتوى ما يتراكمش تحت النافبار */
body {
    padding-top: 80px; /* قيمة الـ padding تساوي ارتفاع النافبار تقريبًا */
}

        .wrapper {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .brand {
            color: #fff;
            font-size: 28px;
            font-weight: 600;
            text-decoration: none;
            letter-spacing: 1px;
            transition: 0.3s ease;
        }

        .brand:hover {
            color: #f0a500;
            text-shadow: 0 0 5px rgba(240, 165, 0, 0.5);
        }

        .menu-items {
            list-style: none;
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .menu-item {
            text-decoration: none;
            color: #ddd;
            font-size: 16px;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .menu-item:hover {
            color: #f0a500;
            background-color: rgba(240, 165, 0, 0.1);
        }

        /* Login Button */
        .action-btn {
            background-color: #f0a500;
            padding: 10px 20px;
            border-radius: 25px;
            color: #fff;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .action-btn:hover {
            background-color: #d48900;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(240, 165, 0, 0.4);
        }

        /* === Mobile Menu Button === */
        .toggle-btn {
            font-size: 28px;
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            display: none;
            transition: 0.3s ease;
        }

        .toggle-btn:hover {
            color: #f0a500;
        }

        /* === Responsive Design === */
        @media (max-width: 768px) {
            .menu-items {
                display: none;
                flex-direction: column;
                background: rgba(0, 0, 0, 0.95);
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                padding: 20px 0;
                text-align: center;
                border-radius: 0 0 15px 15px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            }

            .menu-items.visible {
                display: flex;
            }

            .menu-item {
                padding: 15px 0;
                font-size: 18px;
            }

            .toggle-btn {
                display: block;
            }
        }
    </style>
</head>
<body>

    <header class="top-bar" style="background-color:brown !important">
        <div class="wrapper">
            <nav class="nav-bar">
                <img style="    width: 50px;" src="{{ asset('img/real.png') }}" alt="emam">

                <ul class="menu-items">

                    <li><a href="{{url('/')}}" class="menu-item">Home</a></li>
                    {{-- <li><a href="{{url('sale')}}" class="menu-item">Sale</a></li>
                    <li><a href="{{url('Rent')}}" class="menu-item">Rent</a></li> --}}
                    <li><a href="{{url('en')}}" class="menu-item">Engineering</a></li>
                    {{-- <a href="{{route('Maintenance')}}" class="menu-item">Maintenance Request</a></li> --}}
                    <a href="{{route('Maintenance')}}" class="menu-item">Maintenance Request</a>



                    <li><a href="{{url('property')}}" class="menu-item">Property</a></li>
                    <li><a href="{{url('contact')}}" class="menu-item">Contact</a></li>
                    <li><a href="{{url('Login')}}" class="menu-item action-btn">Login</a></li>
                </ul>
                <button class="toggle-btn">☰</button>
            </nav>
        </div>
    </header>

    <script>
        // Mobile menu toggle
        const toggleButton = document.querySelector(".toggle-btn");
        const menuList = document.querySelector(".menu-items");

        toggleButton.addEventListener("click", () => {
            menuList.classList.toggle("visible");
        });
    </script>

</body>
</html>