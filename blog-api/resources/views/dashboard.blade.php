<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blog Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <style>
         html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        /* Modified Navbar */
        .navbar {
            background-color: #007bff;
            color: white;
        }

        .navbar a {
            color: white;
        }

        .navbar a:hover {
            color:#edce02;
        }

        .navbar ul {
            display: flex;
            justify-content: space-around;
        }

        .navbar li {
            list-style-type: none;
        }
    </style>
</head>
<body class="bg-gray-100 font-roboto">
    <div class="container mx-auto p-6">
        <div class="bg-white p-4 rounded shadow-md">
            <h1 class="text-3xl font-semibold text-center mb-4">Blog Dashboard</h1>

            <!-- Modified Navbar -->
            <nav class="navbar p-4 rounded mb-4">
                <ul class="flex justify-between">
                    <li>
                        <a href="{{ route('blogs.index') }}" class="text-lg">View All Blogs</a>
                    </li>
                    <li>
                        <a href="{{ route('blogs.create') }}" class="text-lg">Create New Blog</a>
                    </li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-lg text-red-500 hover:text-red-700">Logout</a>
                        </form>
                    </li>
                </ul>
            </nav>

            <div class="text-center">
                <p class="text-lg">Hello, {{ Auth::user()->name }}! Welcome back to your blog dashboard.</p>
            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
