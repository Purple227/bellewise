
  <nav class="navbar is-transparent">
    <div class="navbar-brand ">
      <a class="navbar-item" href="/">
        <!-- <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28"> --> <span class="subtitle is-bold light-green is-family-sans-serif ">  Belle  -  <span class="green"> Wise </span> </span>
      </a>


      <div class="is-hidden-desktop is-hidden-fullhd navbar-item">

        <p class="control" style="margin-right: 4px;">
          <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
            <span class="icon">
              <i class="fas fa-cart-plus green"></i>
            </span>
            <span class="green is-bold">
              3
            </span>
          </a>
        </p>

        <div class="dropdown is-right" v-bind:class="{ 'is-active': isDropDown }" @click="openDropDown">
          <button class="button is-primary">
            <i class="fas fa-user has-text-white"></i>
          </span>      <span class="icon is-small">
            <i class="fas fa-angle-down has-text-white"></i>
          </span>
        </button>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
          <div class="dropdown-content">
            <a href="#" class="dropdown-item">
              Dropdown item
            </a>
            <a class="dropdown-item">
              Other dropdown item
            </a>
            <a href="#" class="dropdown-item is-active">
              Active dropdown item
            </a>
            <a href="#" class="dropdown-item">
              Other dropdown item
            </a>
            <hr class="dropdown-divider">
            <a href="#" class="dropdown-item">
              With a divider
            </a>
          </div>
        </div>
      </div>

    </div>

    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample" v-bind:class="{ 'is-active': isActive }"  @click="addActiveClass">
      <span class="green is-bold"></span>
      <span class="green is-bold"></span>
      <span class="green is-bold"></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu" v-bind:class="{ 'is-active': isActive }" @click="addActiveClass">
    <div class="navbar-start">

      <a class="navbar-item is-bold" href="https://bulma.io/" >
        Order
      </a>

      <a href="/contact" class="navbar-item is-bold {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
        Contact 
      </a>

      <a href="/about" class="navbar-item is-bold {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
        About
      </a>

    </div>

    <div class="navbar-end">

      <div class="navbar-item">
        <div class="field is-grouped is-hidden-mobile">

          <p class="control">
            <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
              <span class="icon">
                <i class="fas fa-cart-plus green"></i>
              </span>
              <span class="green is-bold">
                3
              </span>
            </a>
          </p>

          <div class="dropdown is-right" v-bind:class="{ 'is-active': isDropDown }" @click="openDropDown">
            <button class="button is-primary">
              <i class="fas fa-user has-text-white"></i>
            </span>      <span class="icon is-small">
              <i class="fas fa-angle-down has-text-white"></i>
            </span>
          </button>
          <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div class="dropdown-content">
              <a href="#" class="dropdown-item">
                Dropdown item
              </a>
              <a class="dropdown-item">
                Other dropdown item
              </a>
              <a href="#" class="dropdown-item is-active">
                Active dropdown item
              </a>
              <a href="#" class="dropdown-item">
                Other dropdown item
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                With a divider
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
</nav>
