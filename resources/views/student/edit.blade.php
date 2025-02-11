@extends('layout.layout')
@section('content')
    <div class="container mt-5">
        {{-- <div class="card shadow-lg p-3 mb-5"> --}}
        <h1 class="text-center mb-4">Update Student</h1>
        {{-- <button class="btn btn-primary w-25 mb-5"><a href="{{ route('student.index') }}"
                class="text-white text-decoration-none">Back</a></button> --}}
        <form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" placeholder="Enter your name"
                        value="{{ old('name', $student->name) }}" class="form-control">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label>Father Name</label>
                    <input type="text" name="father_name" placeholder="Enter father name"
                        value="{{ old('father_name', $student->father_name) }}" class="form-control">
                    @error('father_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label>Phone</label>
                    <input type="tel" name="phone" placeholder="Enter phone number"
                        value="{{ old('phone', $student->phone) }}" class="form-control">
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email"
                        value="{{ old('email', $student->email) }}" class="form-control">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label>Student Session</label>
                    <select class="form-select" name="session" aria-label="Default select example">
                        <option selected disabled>Select option</option>
                        @foreach ($studentSession->where('is_active', 1) as $item)
                            <option value="{{ $item->id }}" @if (old('session', $student->session) == $item->id) selected @endif>
                                {{ $item->session }}</option>
                        @endforeach
                    </select>
                    @error('session')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ asset('images/' . $student->image) }}" width="80px" alt="">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update student</button>
        </form>
        {{-- </div> --}}
    </div>
@endsection
