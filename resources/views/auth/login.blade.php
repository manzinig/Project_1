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
                <form class="form" action="{{route('login')}}" method="POST">
                    @csrf
                    <input placeholder="Email address or phone number" class="input" type="text" value="{{old('email')}}">
                    <input placeholder="Password" class="input" type="password" id="password"> 
                    <button id="loginBtn">Log in</button>
                    <a id="forgotPassword" href="#">Forgotten password?</a>
                    <button class="create" id="createAccountBtn">Create new account <a href="{{route('register')}}"></a></button>
                </form>
            </div>
        </div>
    </div>
</x-layout>