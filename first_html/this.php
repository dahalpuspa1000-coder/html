<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <script>
        function hello(a,b){
return a+b;
        }
        
    </script>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color:blueviolet;
        }

        /* Navigation Bar */
        nav {
            background-color:rgb(233, 233, 76);
            padding: 15px 30px;
            display: flex;
            justify-content: flex-start;
            gap: 20px; /* space between nav items */
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #45a049;
        }

        /* Main Dashboard Content */
        .dashboard {
            padding: 30px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
    </style>
</head>
<body>
  

    <!-- Navigation -->
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
    </nav>
      <main>
        <aside>
            <section class ="dikshya">
                <div class ="dikshya-content">
                    <div id="Profile",class="card">
                        
                    </div>
                    <h1>Welcome to dashboard</h1>
                    <p>Manage Everything from one place</p>
                    <button>Get started</button>
                </div>
            </section>
        </aside>
    </main>

    <!-- Dashboard Content -->
    <div class="dashboard">
        <div id="home" class="card">
            <h1>Welcome to Dashboard</h1>
            <p>This is the home section.</p>
        </div>

        <div id="about" class="card">
            <h2>About</h2>
            <p>This section contains information about the dashboard.</p>
        </div>

        <div id="contact" class="card">
            <h2>Contact</h2>
            <p>Here you can put contact details or a contact form.</p>
        </div>
    </div>
    

</body>
</html>
