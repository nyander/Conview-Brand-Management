<div class="bg-gray-800">
    <nav class="py-6 flex justify-between mb-10 justify-self-center  w-10/12 mx-auto text-white	">
        <ul class="flex items-center">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </ul>
        

        {{-- Logged in --}}
        <ul class="flex items-center">
            <!-- Right Side Of Navbar -->
            <ul class="flex items-center">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="p-3">
                            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="p-3">
                            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                

                <div class="">

                    <div class="navdropdown inline-block relative">
                      <button class=" text-white font-semibold px-4 rounded inline-flex items-center">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                      </button>
                      <ul class="navdropdown-menu absolute hidden pt-1 w-12/12 bg-gray-800 text-white">
                        <li class=""><a class="rounded-t  hover:bg-gray-400 px-2 block whitespace-no-wrap dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>    
                        @can('manage-users')
                        <li class="">
                            <a href="{{ route('admin.users.index') }}" class="rounded-t hover:bg-gray-400 px-2  block whitespace-no-wrap dropdown-item"> User Management</a>
                        </li>
                        @endcan
                      </ul>
                    </div>
                  </div>
                @endguest
            </ul>
        </ul>        
    </nav>
</div>