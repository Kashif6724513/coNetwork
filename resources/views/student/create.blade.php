@extends('layout.layout')
@section('content')
    <div class="container mt-5">
        {{-- <div class="card shadow-lg p-3 mb-5"> --}}
            <h1 class="text-center mb-4">Add Student</h1>
            {{-- <button class="btn btn-primary w-25 mb-5"><a href="{{route('student.index')}}" class="text-white text-decoration-none">Back</a></button> --}}
            <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your name" class="form-control">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Father Name</label>
                        <input type="text" name="father_name" value="{{old('father_name')}}" placeholder="Enter father name" class="form-control">
                        @error('father_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label>Phone</label>
                        <input type="tel" name="phone" value="{{old('phone')}}" placeholder="Enter phone number" class="form-control">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                
                <div class="mb-3 col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Enter your email" class="form-control">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label>Student Session</label>
                    <select class="form-select" name="session" aria-label="Default select example">
                        <option selected disabled>Select option</option>
                        @foreach ($studentSession->where('is_active', 1) as $item)
                            <option value="{{ $item->id }}">{{ $item->session }}</option>
                        @endforeach
                    </select>
                    @error('session')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
                <button type="submit" name="submit" class="btn btn-primary">Create student</button>
            </form>
        {{-- </div> --}}
    </div>
@endsection
