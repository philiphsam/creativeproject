<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype=”multipart/form-data” >
        @csrf

        <!-- Firstname -->
        <div>
            <x-input-label for="firstname" :value="__('First name')" />
            <x-text-input id="firstname" class="block mt-1 w-full" placeholder="enter name" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>
<!-- Lastname -->
<div>
            <x-input-label for="lastname" :value="__('Last name')" />
            <x-text-input id="lastname" class="block mt-1 w-full" placeholder="enter sirname" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>
        <!-- contact -->
        <div>
            <x-input-label for="name" :value="__('Contact')" />
            <x-text-input id="contact" class="block mt-1 w-full" placeholder="07xxxxxxxx" type="text" name="contact" :value="old('contact')" required autofocus autocomplete="contact" />
            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
        </div>
        <!-- Role -->
        <div>
            <x-input-label for="name" :value="__('Role')" />
            <x-text-input id="role" class="block mt-1 w-full" type="text" name="role"   required autofocus autocomplete="name" />
            
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>
        <!-- passport -->
        <div>
            <x-input-label for="passport" :value="__('Passport')" />
            <x-text-input id=" " class="block mt-1 w-full" placeholder="upload your photo" type="file" name="passport"  :value="old('passport')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('passport')" class="mt-2" />
        </div>
    
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" placeholder="XX@gmail.com" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" placeholder="enter prefered password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" placeholder="repeat password"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center  mt-4">

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button> 
        </div>    
        <div class="flex items-center  mt-4">
            
                Already registered? 
                <x-primary-button class="ml-4">
                <a href="{{route('login')}}" style="color: white;">LogIn</a>
            </x-primary-button>
           
        </div>
    </form>
</x-guest-layout>
