<link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
<form action="{{ route('recruitment.update', $recruitment['id']) }}" method="POST" class="card p-5">
    @csrf
    @method('PATCH')

    @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $recruitment['name']) }}">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email: </label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $recruitment['email']) }}">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="phone" class="col-sm-2 col-form-label">Phone: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $recruitment['phone']) }}">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="message" class="col-sm-2 col-form-label">Message: </label>
        <div class="col-sm-10">
            <textarea class="form-control" id="message" name="message">{{ old('message', $recruitment['message']) }}</textarea>
        </div>
    </div>   

    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>

