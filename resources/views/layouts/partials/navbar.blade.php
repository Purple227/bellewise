

<nav class="navbar" role="navigation" aria-label="main navigation" aria-label="dropdown navigation">

  <div class="navbar-brand">

    <a class="navbar-item" href="/">
      <img src="/images/logo.webp" width="112" height="28">
    </a>

@auth
    <!-- Mobile auth user dropdown -->
    <div class="dropdown has-dropdown navbar-item is-hidden-desktop" v-bind:class="{ 'is-active': isDropDown }" @click="openDropDown">
      <div class="dropdown-trigger">
        <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu">
          <span class="fas fa-user orange"></span>
          <span class="icon is-small">
            <i class="fas fa-angle-down light-orange" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <div class="dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content">
          <a href=" {{ route('track') }} " class="dropdown-item">
            Order Status
          </a>
          <a href="{{ route('history') }}" class="dropdown-item">
            My Orders
          </a>
          <a href=" {{ route('favorite') }} " class="dropdown-item">
            My Favorites
          </a>
          <a class="dropdown-item" @click="logoutMethod">
            Logout
          </a>
        </div>
      </div>
    </div>
@endauth


    <a role="button" class="navbar-burger burger navbar-item is-hidden-desktop" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample" v-bind:class="{ 'is-active': isActive }"  @click="addActiveClass">
      <i class="fa fa-bars fa-lg orange is-bold" aria-hidden="true"></i>
    </a>


  </div>

  <div id="navbarBasicExample" class="navbar-menu" v-bind:class="{ 'is-active': isActive }" @click="addActiveClass">
    <div class="navbar-start">

      <a class="navbar-item is-bold {{ Route::currentRouteName() == 'welcome' ? 'active' : '' }}"  href="/">
        Home
      </a>

      <a class="navbar-item is-bold {{ Route::currentRouteName() == 'shop' ? 'active' : '' }}"  href="/shop">
        Order
      </a>

      <a class="navbar-item is-bold {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"  href="/about">
        About
      </a>

      <a class="navbar-item is-bold {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"  href="/contact">
        Contact
      </a>

    </div>

    <div class="navbar-end">


@guest
      <div class="navbar-item">
        <div class="buttons">
          <a href="/register" class="button bg-orange">
            <span class="is-bold has-text-white"> Sign up </span> 
          </a>
          <a href="/login" class="button is-light">
            <span class="is-bold orange"> Log in </span>
          </a>
        </div>
      </div>
@endguest




@auth
      <!-- Desktop auth user dropdown -->
      <div class="dropdown has-dropdown is-hidden-mobile " v-bind:class="{ 'is-active': isDropDown }" @click="openDropDown">
        <div class="dropdown-trigger navbar-item">
          <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu">
            <span class="fas fa-user orange"></span>
            <span class="icon is-small">
              <i class="fas fa-angle-down light-orange" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
          <div class="dropdown-content">
          <a href=" {{ route('track') }} " class="dropdown-item">
            Order Status
          </a>
            <a href=" {{ route('history') }} " class="dropdown-item">
              My Orders
            </a>
            <a href=" {{ route('favorite') }} " class="dropdown-item">
              My Favorites
            </a>
            <a class="dropdown-item" @click="logoutMethod">
              Logout
            </a>
          </div>
        </div>
      </div>
@endauth

    </div>

  </nav>


<div>
  @include('layouts.partials.location')
</div>
