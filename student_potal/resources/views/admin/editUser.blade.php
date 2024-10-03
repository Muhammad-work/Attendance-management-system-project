
@extends('admin.layout.app')
@extends('admin.nav')
@extends('admin.sidebar')

@section('content')
<div class="continer-wappaer">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Update User</h2>

                <form method="POST" action="{{ route('storUser', $user->id) }}" class="border border-1 p-5 rounded-5"
                    autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{ $user->name }}" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                            required >
                        @error('name')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" value="{{ $user->email }}" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required >
                        @error('email')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Mobile" class="form-label">Mobile</label>
                        <input type="tel" value="{{ $user->mobile }} " name="mobile" id="Mobile"
                            class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile') }}">
                        @error('mobile')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Pictuer" class="form-label">Pictuer</label>
                        <input class="form-control"  type="file"  id="Pictuer" name="picture"
                            class="form-control @error('pictuer')  is-invalid @enderror" value="{{ old('pictuer') }}">
                            <img style="width: 40px" class="mt-3" id="output" src="{{ asset('storage/' . $user->profile_picture ) }}" alt="">
                        @error('pictuer')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection