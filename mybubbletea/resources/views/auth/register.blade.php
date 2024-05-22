<x-guest-layout>
  
            <div class="divrad" id="rad1" 
                style=" border: 1px solid rgba(23, 197, 136, 0.3);
                        background-color: rgba(23, 197, 136, 0.2);
                        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
                        width: 370px;
                        height: 330px;
                        position: fixed;
                        top: -1%;
                        left: -1%;">
                    <span style=" color: rgba(23, 197, 136, 1);
                                  font-size: 18px;
                                  font-weight: bold;
                                  position: fixed;
                                  top: 20%;
                                  left: 1%;">
                    
                    we are excited to have you among us!</span>
            </div>
            <div class="divrad" id="rad2"
                 style="border: 1px solid rgba(162, 78, 61, 0.4);
                        background-color: rgba(162, 78, 61, 0.4);
                        border-radius: 30% 70% 70% 30% / 45% 77% 23% 55%  ;
                        width: 370px;
                        height: 330px;
                        position: fixed;
                        bottom: -4%;
                        right: -4%;"> 
                        <span style=" color: rgba(162, 78, 61, 1);
                                  font-size: 18px;
                                  font-weight: bold;
                                  position: fixed;
                                  bottom: 18%;
                                  right: 5%;">
                            we are almost there!
                        </span>
                    </div>

    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <!-- Fistname -->
            <x-input-label for="firstname" :value="__('Firstname')" style="font-size: 18px;"/>
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" 
                         name="firstname" :value="old('firstname')"
                         placeholder="Enter your firstname"
                         required autofocus autocomplete="firstname" 
                         style="border-style: none; 
                                   border-bottom: 1px solid #888; 
                                   border-radius: 0; 
                                   outline: none; 
                                   box-shadow: none;" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />

        <!-- Lastname -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Lastname')" style="font-size: 18px;" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text"
                          name="lastname" :value="old('lastname')" 
                          placeholder="Enter your lastname"
                          required autofocus autocomplete="lastname" 
                          style="border-style: none; 
                                   border-bottom: 1px solid #888; 
                                   border-radius: 0; 
                                   outline: none; 
                                   box-shadow: none;"/>

            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" style="font-size: 18px;"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" 
                          name="email" :value="old('email')" 
                          placeholder="Enter your email"
                          required autocomplete="username" 
                          style="border-style: none; 
                                   border-bottom: 1px solid #888; 
                                   border-radius: 0; 
                                   outline: none; 
                                   box-shadow: none;"/>

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="font-size: 18px;"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                            required autocomplete="new-password" 
                            style="border-style: none; 
                                   border-bottom: 1px solid #888; 
                                   border-radius: 0; 
                                   outline: none; 
                                   box-shadow: none;"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="font-size: 18px;"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" 
                            placeholder="Confirm password"
                            required autocomplete="new-password" 
                            style="border-style: none; 
                                   border-bottom: 1px solid #888; 
                                   border-radius: 0; 
                                   outline: none; 
                                   box-shadow: none;"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        </div>
    </form>
</x-guest-layout>
