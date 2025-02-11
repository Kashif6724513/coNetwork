@extends('layout.layout')
@section('content')
<div class="container mt-5">
    {{-- <div class="card shadow-lg p-3 mb-5"> --}}
        <h1 class="text-center mb-4">Student Session</h1>
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
                    <th scope="col">Session</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sessions as $session)
                    <tr>
                        <th scope="row">{{ $session->id }}</th>
                        <td>{{ $session->session }}</td>
                        <td>{{ $session->is_active ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{route('studentSession.edit',$session->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('studentSession.delete',$session->id)}}"
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

