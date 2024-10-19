<link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

<form action="{{ route('organizations.store') }}" method="POST" class="card p-5">
    @csrf

    <!-- Success message -->
    @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <!-- Error messages -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Name input -->
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
    </div>

    <!-- Type input -->
    <div class="mb-3 row">
        <label for="type" class="col-sm-2 col-form-label">Type: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" required>
        </div>
    </div>

    <!-- Units input -->
    <div class="mb-3 row">
        <label for="units" class="col-sm-2 col-form-label">Units: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="units" name="units" value="{{ old('units') }}" required>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

