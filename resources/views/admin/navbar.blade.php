<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-KyZXEAg3QhqLMpG8r+Knujsl5+z0I5t9z5lFf5r7MIaqM6jXiFzJ2jQ6lOyyUu1H9VStK2f8l+Xt5VxHxJ53Rg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans';
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #006400;
            padding: 15px;
            color: white;
            text-align: right;
            font-size: 18px;
            font-family: 'Plus Jakarta Sans';
            height: 50px;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            background-color: #062C00;
            padding-top: 2%;
            font-family: 'Inter';
            transition: 0.5s;
        }

        .container {
            margin-left: 250px;
            padding: 16px;
            transition: margin-left 0.5s;
        }

        .container h2 {
            color: #333;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #1f2c38;
        }

        .toggle-btn {
            background: transparent;
            border: none;
            color: white;
            font-size: 25px;
            cursor: pointer;
        }

        .top-right {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
        }

        /* Add styles for card */
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: box-shadow 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .common-style {
            display: inline-block;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-right: 10px;
            margin-bottom: 10px;
            transition: box-shadow 0.3s;
        }

        .card-container {
            display: inline-block;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: box-shadow 0.3s;
            text-align: left;
            padding-left: 270px; /* Tambahkan padding sejajar dengan lebar sidebar */
        }
    </style>
    <title>Beranda Admin</title>
</head>
<body>
    <div class="navbar" style="display: flex;">
        <button class="toggle-btn" onclick="toggleSidebar()" style="align-self: flex-start;">&#9776;</button>
        <h2 id="navbar-title" style="margin-left: auto;align-self: center;">Admin</h2>
    </div>
    <div class="sidebar" id="sidebar">
        <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" d="M6.906.664a1.749 1.749 0 0 1 2.187 0l5.25 4.2c.415.332.657.835.657 1.367v7.019A1.75 1.75 0 0 1 13.25 15h-3.5a.75.75 0 0 1-.75-.75V9H7v5.25a.75.75 0 0 1-.75.75h-3.5A1.75 1.75 0 0 1 1 13.25V6.23c0-.531.242-1.034.657-1.366l5.25-4.2Zm1.25 1.171a.25.25 0 0 0-.312 0l-5.25 4.2a.25.25 0 0 0-.094.196v7.019c0 .138.112.25.25.25H5.5V8.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 .75.75v5.25h2.75a.25.25 0 0 0 .25-.25V6.23a.25.25 0 0 0-.094-.195Z"/></svg></i> Beranda</a>
        <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M17 1H3a2 2 0 0 0-2 2v9h2V3h14Z"/><path fill="currentColor" d="M21 5H7a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h5.53v1.53H11V22h6v-1.48h-1.52V19H21a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Zm0 12H7V7h14Z"/></svg></i> Master Data</a>
        <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 21q-3.775 0-6.388-1.163T3 17V7q0-1.65 2.638-2.825T12 3q3.725 0 6.363 1.175T21 7v10q0 1.675-2.613 2.838T12 21Zm0-11.975q2.225 0 4.475-.638T19 7.025q-.275-.725-2.513-1.375T12 5q-2.275 0-4.463.638T5 7.024q.35.75 2.538 1.375T12 9.025ZM12 14q1.05 0 2.025-.1t1.863-.288q.887-.187 1.675-.462T19 12.525v-3q-.65.35-1.438.625t-1.675.463q-.887.187-1.862.287T12 11q-1.05 0-2.05-.1t-1.888-.288q-.887-.187-1.662-.462T5 9.525v3q.625.35 1.4.625t1.663.463q.887.187 1.887.287T12 14Zm0 5q1.15 0 2.337-.175t2.188-.463q1-.287 1.675-.65t.8-.737v-2.45q-.65.35-1.438.625t-1.675.463q-.887.187-1.862.287T12 16q-1.05 0-2.05-.1t-1.888-.288q-.887-.187-1.662-.462T5 14.525V17q.125.375.788.725t1.662.638q1 .287 2.2.462T12 19Z"/></svg></i> Manajemen Pengaduan</a>
    </div>
    <div class="card-container">
        <div class="card common-style">Card 1</div>
        <div class="card common-style">Card 2</div>
        <div class="card common-style">Card 3</div>
        <div class="card common-style">Card 4</div>
        <div class="card common-style">Card 5</div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const container = document.querySelector('.container');
            const navbarTitle = document.getElementById('navbar-title');

            if (sidebar.style.width === '250px') {
                sidebar.style.width = '0';
                container.style.marginLeft = '0';
                navbarTitle.style.display = 'block'; // Tampilkan kembali tulisan pada samping ikon
            } else {
                sidebar.style.width = '250px';
                container.style.marginLeft = '250px';
                navbarTitle.style.display = 'none'; // Sembunyikan tulisan pada samping ikon
            }
        }
    </script>
</body>
</html>
