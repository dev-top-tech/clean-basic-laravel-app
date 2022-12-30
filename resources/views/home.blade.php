@extends("templates.base")

@section("content")
<div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh; min-width: 100vw;">
    <h4>Welcome to Fitness App </h4> <br>
    <p>Click <a href="{{ route('business.profile.get') }}">here</a> to go to the Business Profile Page</p>
</div>
@endsection
