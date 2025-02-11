@extends('layout.layout')
@section('content')
<div class="container mt-5">
    {{-- <div class="card shadow-lg p-3 mb-5"> --}}
        <h1 class="text-center mb-4">Students</h1>
        {{-- <button class="btn btn-primary w-25 mb-5"><a href="{{ route('student.create') }}"
                class="text-white text-decoration-none">Create Student</a></button> --}}
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Session</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td><img src="{{ asset('images/' . $student->student->image) }}" width="80px" alt=""></td>
                        <td>{{ $student->student->name }}</td>
                        <td>{{ $student->student->father_name }}</td>
                        <td>{{ $student->student->phone }}</td>
                        <td>{{ $student->student->email }}</td>
                        <td>{{ optional($student->session)->session }}</td>
                        <td>
                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('student.delete', $student->id) }}"
                                onclick="return confirm('Are you sure? You want to delete?')"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    {{-- </div> --}}
</div>
@endsection

