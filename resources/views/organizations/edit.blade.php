<link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

<div class="container">
    <h2>Edit Organization</h2>

    <!-- Success message -->
    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Validation Errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Form -->
    <form action="{{ route('organizations.update', $organization->id) }}" method="POST" class="card p-5">
        @csrf
        @method('PATCH')
    
        <!-- Form Fields -->
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $organization->name) }}">
            </div>
        </div>
    
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Type:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $organization->type) }}">
            </div>
        </div>
    
        <div class="mb-3 row">
            <label for="units" class="col-sm-2 col-form-label">Units:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="units" name="units" value="{{ old('units', $organization->units) }}">
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
    