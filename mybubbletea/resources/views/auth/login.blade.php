<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="divrad" id="rad3"
                 style="background-image: url('the-a-bulles (1).png');
                        background-size: cover;
                        width: 410px;
                        height: 410px;
                        position: fixed;
                        bottom: -10%;
                        left: -8%;
                        transform: rotate(25deg);"> 
            </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <span style="color: #444; font-size: 1.5em; opacity: 0.75;">Member Access&nbsp;<i class="fa-solid fa-user"></i></span>
        <br/>
        <hr/>
        <br/>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')"  style="font-size: 18px;"/><br/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" placeholder="Enter your email"
             name="email" :value="old('email')" 
             required autofocus autocomplete="username" 
             style="border-style: none; 
             border-bottom: 1px solid #888; 
             border-radius: 0; outline: none; 
             box-shadow: none; background-image:url('enveloppe-de-courrier-electronique.png'); 
             background-size: 17px 17px; background-origin: padding-box; background-repeat:no-repeat; 
             padding-left: 25px; padding-top:0; padding-bottom: 0;"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="outline: none;"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="font-size: 18px;"/><br/>
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Enter your password"
                            style="border-style: none; 
                                   border-bottom: 1px solid #888; 
                                   border-radius: 0; 
                                   outline: none; 
                                   box-shadow: none; 
                                   background-image:url('cadenas-verrouille.png'); 
                                   background-size: 17px 17px; 
                                   background-origin: padding-box; 
                                   background-repeat:no-repeat; 
                                   padding-left: 25px; padding-top:0; padding-bottom: 0;" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" style="outline: none;"/>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
            
        </div>
        <div class="register">
            <br/>
            <span style="color: #929AA6; font-style: italic;">Not registered ? So click here &nbsp;</span>
            @if (Route::has('register'))
                          <a href="{{ route('register') }}" style="color: #444; font-weight: bold">Register</a>
                        @endif
            </div>
    </form>
</x-guest-layout>
