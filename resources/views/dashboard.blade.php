<x-app-layout >
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ Auth::user()->role }} {{ __(' Dashboard window') }}
        </h3>
    </x-slot>
            <div class="mt-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                       


                    <!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userprofile.css">
    <title>userprofile</title>
    <style>
        .containers{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            /* flex-wrap: wrap; */
            justify-items: center;

        }
        .cont1{
            background-color: purple;
            width: 250px;
            height: 650px;
            padding-bottom: 5%;
            padding-right: 10%;
            padding-left: 5%;
            margin-left: 1%;
        }
        
        .cont2{
            background-color:white;
            width: 300px;
            height: 650px;
        }
        .cont3{
            /* background-color: rgb(186, 159, 159);
            width: 700px;
            height: 650px;
            border-radius: 10%;
            margin-top: 5%;
            margin-right: 1%;
            margin-left: 0%;
            padding-left: 10%;
            padding-right: 10%; */
        }
        .column {
  float: left;
  width: 33.33%;
  padding: 5px;
}


.row::after {
  content: "";
  clear: both;
  display: table;
}
.column{
    height:50%;
    width:33%;
    margin-left:30%;
}
    </style>
</head>
<body>
    <div class="containers">
        
        <div class="cont1"><form>
            <img src="images/pic7.jpeg">
            <!-- <h1>USER PROFILE</h1><br> -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}</div>

                            <div class="ml-1">
                                <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /> 
                                </svg>-->
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        
                    </x-slot>
                </x-dropdown>
            </div>

              <h2>ACTIVITIES</h2>

    <ul>
        <li>*Poetry</li>
        <li>*Comedy</li>
        <li>*Singing</li>
        <li>*Dancing</li>
    </ul><br>
 
            
             <a href="{{ url('events') }}" ><h2>EVENTS</h2></a><br>
             <a href="{{ url('eventsbooked') }}" ><h2>EVENT BOOKINGS</h2></a><br>
             <a href="{{ url('members') }}" ><h2>MEMBERS</h2></a><br>
             <a href="{{ url('artistsbooked') }}" ><h2>ARTIST BOOKINGS</h2></a><br>
             <a href="{{ url('registered_members') }}" ><h2>REGISTERED MEMBERS</h2></a><br>
             
             
            
              </form></div> <br>
              
        <div class="cont2">
            <div class="vertical">
                <hr>

            </div>
        </div>
        <nav>
            
        </nav>
        <div class="cont3">
            Hello, {{ Auth::user()->role }} {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
            <h5>WELCOME TO OUR SOCIETY</h5>
            <div class="row">
  <div class="column">
    <img src="Assets/pass1.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="Assets/pass4.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="images/pic7.jpeg" alt="Mountains" style="width:100%">
  </div>
</div>

            </div>
        </div>
        </div>
    </div>
</body>

                       

                                

                       
                    </div>
               
            </div>
      
</x-app-layout>
