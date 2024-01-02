<div class="navbar bg-base-100 fixed z-10">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a 
          href="{{ route('barang.index') }}"
          >Barang</a></li>
        <li><a 
          href="{{ route( 'history.index') }}"
          >History</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl"
    href="{{ route('home') }}"
    
    >
      <img width="70" src="{{ asset('asset/image/logosyam.png') }}" alt="syam">
    </a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a
        href="{{ route('barang.index') }}"
        >Barang</a></li>
      <li><a 
        href="{{ route( 'history.index') }}"
        >History</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    @if (Auth::user())
    <a href="{{  route('keranjang.index') }}">
    <div class="indicator mr-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
    </div>
  </a>
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="{{ url('asset/icon/profileicon.png') }}" alt="img">

          {{-- <img alt="Tailwind CSS Navbar component" src="/images/stock/photo-1534528741775-53994a69daeb.jpg" /> --}}
        </div>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-60 p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a href="{{ route( 'profile.edit') }}">
            Profile
          </a>
        </li>
        <li><a>Settings</a></li>
        <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>

            {{-- <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link> --}}
        </form>
        </li>
      </ul>
    </div>
    @else
        <a href="{{ route('login') }}">Login</a>
    @endif
    
  </div>
</div>