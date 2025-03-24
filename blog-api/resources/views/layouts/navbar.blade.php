<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blog App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('blogs.index') }}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blogs.create') }}">Create Blog</a>
                </li>
            </ul>
            <form class="d-flex ms-lg-3" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>

<!-- Optional: Add custom styles -->
<style>
    /* Navbar style improvements */
    .navbar {
        border-bottom: 2px solid #007bff;
    }

    .navbar-brand {
        font-size: 1.5rem;
        font-weight: bold;
        color: #fff;
    }

    .navbar-nav .nav-link {
        color: #f8f9fa !important;
        font-size: 1rem;
        margin-left: 15px;
    }

    .navbar-nav .nav-link:hover {
        color: #ffcc00 !important;
    }

    .btn-outline-light {
        border-color: #fff;
        color: #fff;
    }

    .btn-outline-light:hover {
        background-color: #ffcc00;
        border-color: #ffcc00;
    }

    @media (max-width: 768px) {
        .navbar-collapse {
            text-align: center;
        }

        .navbar-nav .nav-link {
            margin: 10px 0;
        }
    }
</style>
