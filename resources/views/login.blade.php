@extends("templates.base")


@section("content")
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; min-width: 100vw;">
    <form style="width: 40%;" method="POST">
        @csrf
        <div class="form-group">
            <h2>Login Here</h2>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


</div>

@endsection
