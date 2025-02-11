<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body{
      overflow-x: hidden;
    }
  </style>
  <body>
    <div class="row flex-nowrap over-flow">
        <div class="bg-dark col-auto col-md-2 min-vh-100" style="width: 20%;">
          <div class="bg-dark p-2">
            {{-- <a class="d-flex text-decoration-none mt-1 align-item-center text-white">
              <span class="fs-4 d-none d-sm-inline">Attendance Bar</span>
            </a> --}}
            <ul class="nav nav-pills flex-column mt-4">
              <li class="nav-item">
                <a href="" class="nav-link text-white">
                  <i class="fs-5  bi bi-speedometer"></i><span class="fs-4 ms-2 d-none d-sm-inline">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('student.create')}}" class="nav-link text-white">
                  <i class="fs-8 bi bi-person"></i><span class="fs-7 ms-2 d-none d-sm-inline">Add Student</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('student.index')}}" class="nav-link text-white">
                  <i class="fs-8 bi bi-person"></i><span class="fs-7 ms-2 d-none d-sm-inline">View Student</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('studentSession.create')}}" class="nav-link text-white">
                  <i class="fs-8 bi bi-file-earmark-minus"></i><span class="fs-7 ms-2 d-none d-sm-inline">Student Session</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('studentSession.index')}}" class="nav-link text-white">
                  <i class="fs-8 bi bi-file-earmark-minus"></i><span class="fs-7 ms-2 d-none d-sm-inline">View Student Session</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- content -->
        <div class="p-3" style="width: 80%;">
          @yield('content')
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>