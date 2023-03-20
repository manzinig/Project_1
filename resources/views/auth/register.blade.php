<x-layout>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    </ul>
                </div>
            @endif --}}
                <form class="form" action="{{route('register')}}" method="POST">
                @csrf
                    <input placeholder="Name" class="input" type="text">
                    <input placeholder="Email address or phone number" class="input" type="text">
                    <input placeholder="Password" class="input" type="password" id="password"> 
                    <input placeholder="Confirm Password" class="input" type="password_confirmation" id="password"> 
                    <button id="loginBtn">Register</button>
                    <a id="forgotPassword" href="#">Forgotten password?</a>
                </form>
        </div>
    </div>
</div>
</x-layout>


