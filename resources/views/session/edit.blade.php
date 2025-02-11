@extends('layout.layout')
@section('content')
    <div class="container mt-5">
        {{-- <div class="card shadow-lg p-3 mb-5"> --}}
            <h1 class="text-center mb-4">Add Student Session</h1>
            {{-- <button class="btn btn-primary w-25 mb-5"><a href="{{route('student.index')}}" class="text-white text-decoration-none">Back</a></button> --}}
            <form action="{{ route('studentSession.update',$session->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Session Name</label>
                    <input type="text" name="session" value="{{ old('session',$session->session) }}" placeholder="Enter Session" class="form-control">
                    @error('session')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <select class="form-select" name="is_active" aria-label="Default select example">
                        <option selected>Select option</option>
                        <option value="1" {{ old('is_active', $session->is_active ?? '') == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active', $session->is_active ?? '') == '0' ? 'selected' : '' }}>Inactive</option>
                      </select>
                      @error('is_active')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        {{-- </div> --}}
    </div>
@endsection