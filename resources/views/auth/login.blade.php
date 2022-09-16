<div style="background: black">


<div class="container">
    <div class="row">
        <div class="col-6" style="background-color: rgb(14, 209, 69); background-image: radial-gradient(circle at 50% 120.71%, #c3ff00 0, #99ff00 16.67%, #68ff25 33.33%, #00ff3f 50%, #00f251 66.67%, #00e661 83.33%, #00db70 100%);" align="center">
            <br>
            <img src="img/berries.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-6" style="background: rgb(245, 245, 245)">
            <x-guest-layout>
    
                <x-jet-authentication-card>
                    
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                        
                    </x-slot>
            
                    <x-jet-validation-errors class="mb-4" />
            
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
            
                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>
            
                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
            
                            <x-jet-button class="ml-4">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                    </form>
                </x-jet-authentication-card>
            </x-guest-layout>
        </div>
    </div>
</div>

</div>


<link rel="stylesheet" href="/css/admin_custom.css">

<script> console.log('Hi!'); </script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>