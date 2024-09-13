@extends('_layouts.lite')
@section('content')
  <div class="col-md-8 mx-auto">
    <div class="card card-md">
      <div class="card-body">
        <h2 class="h2 text-center mb-4">Admin Login</h2>
        <form action="./" method="get" autocomplete="off" novalidate="">
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
          </div>
          <div class="mb-2">
            <label class="form-label">
              Password
            </label>
            <div class="input-group input-group-flat">
              <input type="password" class="form-control" placeholder="Your password" autocomplete="off">
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
