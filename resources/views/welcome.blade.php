<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mpumalanga Basketball</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            color: #0b1f3a;
        }

        /* Navigation */
        .navbar {
            background: #0b1f3a;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #ffd21f;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links a:hover {
            color: #ffd21f;
        }

        /* Hero */
        .hero {
            min-height: 550px;
            background: #0b1f3a;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px 20px;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            color: white;
            font-size: 58px;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #ffd21f;
        }

        .hero p {
            color: #dce4ef;
            font-size: 21px;
            margin-bottom: 35px;
        }

        .btn {
            display: inline-block;
            background: #ffd21f;
            color: #0b1f3a;
            padding: 15px 30px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: white;
        }

        /* Sections */
        .section {
            padding: 70px 7%;
            text-align: center;
        }

        .section h2 {
            font-size: 34px;
            margin-bottom: 15px;
        }

        .section-intro {
            color: #666;
            margin-bottom: 40px;
        }

        /* Cards */
        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 35px 25px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .card h3 {
            color: #0b1f3a;
            margin-bottom: 10px;
        }

        .card p {
            color: #666;
        }

        .age-card {
            border-top: 5px solid #ffd21f;
        }

        /* Footer */
        footer {
            background: #0b1f3a;
            color: white;
            text-align: center;
            padding: 25px;
        }

        footer span {
            color: #ffd21f;
        }

        /* Mobile */
        @media (max-width: 768px) {

            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero p {
                font-size: 18px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar">

        <div class="logo">
            MPUMALANGA BASKETBALL
        </div>

        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Players</a></li>
            <li><a href="#">Teams</a></li>
            <li><a href="#">Login</a></li>
        </ul>

    </nav>


    <!-- Hero Section -->
    <section class="hero">

        <div class="hero-content">

            <h1>
                MPUMALANGA <span>BASKETBALL</span>
            </h1>

            <p>
                Connecting players, teams and basketball communities
                across Mpumalanga.
            </p>

            <a href="#" class="btn">
                REGISTER AS A PLAYER
            </a>

        </div>

    </section>


    <!-- Districts -->
    <section class="section">

        <h2>Our Districts</h2>

        <p class="section-intro">
            Basketball communities across the three major districts
            of Mpumalanga.
        </p>

        <div class="cards">

            <div class="card">
                <h3>Gert Sibande</h3>
                <p>
                    Gert Sibande Basketball League
                </p>
            </div>

            <div class="card">
                <h3>Nkangala</h3>
                <p>
                    Nkangala Basketball League
                </p>
            </div>

            <div class="card">
                <h3>Ehlanzeni</h3>
                <p>
                    Ehlanzeni Basketball League
                </p>
            </div>

        </div>

    </section>


    <!-- Age Categories -->
    <section class="section">

        <h2>Age Categories</h2>

        <p class="section-intro">
            Basketball development across different age groups.
        </p>

        <div class="cards">

            <div class="card age-card">
                <h3>U13</h3>
                <p>Junior development</p>
            </div>

            <div class="card age-card">
                <h3>U16</h3>
                <p>Youth development</p>
            </div>

            <div class="card age-card">
                <h3>U18</h3>
                <p>Junior competitive basketball</p>
            </div>

            <div class="card age-card">
                <h3>Seniors</h3>
                <p>Senior basketball</p>
            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer>

        <p>
            © 2026 <span>Mpumalanga Basketball</span>.
            All rights reserved.
        </p>

    </footer>

</body>
</html>