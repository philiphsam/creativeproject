
<x-guest-layout>
    <form method="POST" action="/eventbookings" enctype=”multipart/form-data” >
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
         <!-- Email Address -->
         <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" placeholder="XX@gmail.com" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>
        <!-- Eventname -->
        <div>
            <x-input-label for="name" :value="__('Event Name')" />
            <x-text-input id="role" class="block mt-1 w-full"  placeholder="event you are booking" type="text" name="eventname"   required autofocus autocomplete="name" />
            
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>


        <!-- Slots -->
        <div class="mt-4">
            <x-input-label for="slots" :value="__('Slots needed')" />

            <x-text-input id="slots" class="block mt-1 w-full" placeholder="enter prefered slots" name="slots_needed"
                            type="text" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- VIP / REGULAR -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('VIP / REGULAR')" />

            <x-text-input id="Ticket" class="block mt-1 w-full" placeholder="VIP OR REAGULAR" name="slot_type"
                            type="text"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center  mt-4">

            <x-primary-button class="ml-4">
                {{ __('Book') }}
            </x-primary-button> 
        </div>    
    </form>
</x-guest-layout>
