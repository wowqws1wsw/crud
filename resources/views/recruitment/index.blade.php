<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Recruitment Management</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body id="page-top">
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

    <div class="container mt-5">
        @if(Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        <form class="d-flex me-3" action="{{ route('recruitment.index') }}" method="GET">
            <input type="text" name="search" placeholder="look for recruits..." class="form-control me-2">
            <button type="submit" class="btn btn-primary">Search</button>
        </form> 

        <table class="table table-striped table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($recruitments->isEmpty())
                    <tr>
                        <td colspan="7">No recruitments found.</td>
                    </tr>
                @else
                    @foreach ($recruitments as $index => $message)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at->format('Y-m-d H:i') }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('recruitment.edit', $message->id) }}" class="btn btn-primary me-2">Edit</a>
                            <form method="POST" action="{{ route('recruitment.destroy', $message->id) }}" accept-charset="UTF-8" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this recruitment?')">
                                    <i class="fa fa-trash-o"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <div class="d-flex justify-content-end my-3">
            {{ $recruitments->links() }} <!-- Pagination links -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script href="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>

