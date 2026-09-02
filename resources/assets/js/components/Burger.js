import gsap from 'gsap'

export class Burger {
  constructor () {
    this._menuMobile = document.querySelector('.header-nav__mobile')
    this._burger = document.querySelector('#burger')
    this._items = this._menuMobile.querySelectorAll('& .menu > li')
    this._links = this._menuMobile.querySelectorAll('& .menu a')
    this._endpoint_container = document.querySelector('.mobile-menu__endpoint')
    this._endpoint = this._endpoint_container.querySelector('*[endpoint]')
    console.log(this._items);

    if (!this._menuMobile) return

    this._tl = gsap.timeline({
      paused: true,
    });

    this._tl.to(this._menuMobile.querySelectorAll('& .menu > li > a'), {
      opacity: 1,
      stagger: 0.1,
    })

    this.init()
  }

  init () {
    this._burger.addEventListener('click', () => {
      this._menuMobile.classList.toggle('is-active')

      this._items.forEach(item => {
        item.classList.remove('open');
      })

      if (this._menuMobile.classList.contains('is-active')) {
        this._endpoint.innerHTML = '';
        this._endpoint_container.classList.remove('open');

        this._tl.play();
      } else {
        this._tl.reverse();
      }
    })
  }

}
