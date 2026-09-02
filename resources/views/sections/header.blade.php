<header class="header-wrap">

  <div class="container header">
    <div class="header-brand">
      <a href="{!! home_url() !!}">
        <x-image variant="logo" :lg="$options['logo']"/>
      </a>
    </div>

    <div class="header-nav">

      <div class="header-nav__mobile">

        <div id="burger">
          <p>MENU</p>
          <span></span>
        </div>

        <div class="mobile-menu">
          <div class="mobile-menu-container">
            @menu('mobile_navigation')

            <div class="mobile-menu__endpoint sub-menu-endpoint">
              <div class="close">
                <p>FERMER</p>
              </div>
              <div endpoint>
              </div>
            </div>
          </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</header>
