<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Manage Organizations" />
    <meta name="author" content="Your Name" />
    <title>Organization Management</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/img/15th_guards-logo.png') }}" alt="Logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('recruitment.index') }}">Form</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('organizations.index') }}">Organizations</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="container mt-5 pt-5">
        <!-- Success message -->
        @if(Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Search Form -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <form class="d-flex" action="{{ route('organizations.index') }}" method="GET">
                <input type="text" name="search" placeholder="Search organizations..." class="form-control me-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
            </form>
            <a href="{{ route('organizations.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add Organization</a>
        </div>
        <!-- Organizations Table -->
        <div class="table-responsive">
            <table class="table table-hover table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Units</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($organizations->isEmpty())
                        <tr>
                            <td colspan="5">No organizations found.</td>
                        </tr>
                    @else
                        @foreach ($organizations as $index => $organization)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $organization->name }}</td>
                            <td>{{ $organization->type }}</td>
                            <td>{{ $organization->units }}</td>
                            <td>
                                <a href="{{ route('organizations.edit', $organization['id']) }}" class="btn btn-primary btn-sm me-2"><i class="fas fa-edit"></i> Edit</a>
                                <form method="POST" action="{{ route('organizations.destroy', $organization->id) }}" accept-charset="UTF-8" style="display:inline">
                                    @csrf
                                    @method('DELETE') <!-- Use DELETE method for the deletion -->
                                    
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this organization?')">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </button>
                                </form>
                                <!-- Modal -->  
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-3">
            {{ $organizations->links() }}
        </div>
    </section>

    <!-- Bootstrap core JS and custom scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>