<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                @if  (Auth::user()->role=="admin")
                <h3>Welcome Admin</h3>


                <h5>Click here to invite new people for registration</h5>
                <a href="{{URl('invite')}}">Invitation link here</a>
                    
                @else
                    <h3>Welcome Mr.{{Auth::user()->name}}</h3>
                    <h4>Please Complete the Profile by clicking the update profile </h4>

                    <br>
                    <br>
                    <a href="{{URL('user/profile')}}">Update Profile</a>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
