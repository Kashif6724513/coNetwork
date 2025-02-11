@extends('layout.layout')
@section('content')
    <div class="container mt-5">
        {{-- <div class="card shadow-lg p-3 mb-5"> --}}
            <h1 class="text-center mb-4">Add Student Session</h1>
            {{-- <button class="btn btn-primary w-25 mb-5"><a href="{{route('student.index')}}" class="text-white text-decoration-none">Back</a></button> --}}
            <form action="{{ route('studentSession.store') }}" method="POST">
                @csrf
                <div class="mb-3 col-md-8">
                    <label class="form-label">Session Name</label>
                    <input type="text" name="session" value="{{old('session')}}" placeholder="Enter Session" class="form-control">
                    @error('session')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-8">
                    <label>Session Type</label>
                    <select class="form-select" name="is_active" aria-label="Default select example">
                        <option selected disabled>Select option</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                      @error('is_active')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        {{-- </div> --}}
    </div>
@endsection