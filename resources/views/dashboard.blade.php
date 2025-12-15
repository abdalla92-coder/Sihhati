<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Care Dashboard</title>
    {{-- Vite assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #f2f7fb;
        }

        header {
            background-color: #0d6efd;
            color: white;
            padding: 20px 40px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        nav {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 10px 40px;
        }

        nav a {
            text-decoration: none;
            margin-right: 20px;
            color: #0d6efd;
            font-weight: 600;
        }

        nav a:hover {
            color: #0056b3;
        }

        .container {
            padding: 40px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }

        .card h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #0d6efd;
        }

        .card p {
            color: #555;
        }

        footer {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Health Care System Dashboard</h1>
</header>

<nav>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/patients') }}">Patients</a>
    <a href="{{ url('/appointments') }}">Appointments</a>
    <a href="{{ url('/doctors') }}">Doctors</a>
    <a href="{{ url('/reports') }}">Reports</a>
    <a href="{{ url('/logout') }}">Logout</a>
</nav>

<div class="container">
    <h2>Quick Overview</h2>
    <div class="cards">
        <div class="card">
            <h2>Patients</h2>
            <p>Manage patient records and details</p>
        </div>
        <div class="card">
            <h2>Appointments</h2>
            <p>Schedule and track appointments</p>
        </div>
        <div class="card">
            <h2>Doctors</h2>
            <p>Doctor availability and profiles</p>
        </div>
        <div class="card">
            <h2>Reports</h2>
            <p>Medical reports and analytics</p>
        </div>
    </div>
</div>

<footer>
    &copy; {{ date('Y') }} Health Care System. All Rights Reserved.
</footer>

</body>
</html>
