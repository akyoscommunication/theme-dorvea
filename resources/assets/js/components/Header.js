import gsap from 'gsap';

export class Header {
  constructor() {
    this._header = document.querySelector('header');
    this._hero = document.querySelector('.s-hero');
    const menu = this._header.querySelector('.menu');
    this._itemsWithChildren = document.querySelectorAll('.menu-item-has-children');
    // first item level
    this._items = menu.querySelectorAll('& > .menu-item');

    if (this._hero) {
      this._heroHeight = this._hero.clientHeight;
      this._scrollValue = 0;
      this.scroll();

      window.addEventListener('scroll', this.scroll);
    }

    // if (this._itemsWithChildren.length) {
    //   this._itemsWithChildren.forEach(item => {
    //     this.handleSubmenu(item)
    //   })
    // }

    if (this._items.length) {
      this._items.forEach(item => {
        this.handleItem(item)
      })
    }
  }

  scroll = () => {
    this._scrollValue = window.scrollY;

    if (this._scrollValue > this._heroHeight) {
      this._header.classList.add('scrolled');
    } else {
      this._header.classList.remove('scrolled');
    }
  }

  handleItem = (item) => {
    const endpoint_container = this._header.querySelector('.sub-menu-endpoint');
    const endpoint = endpoint_container.querySelector('*[endpoint]');
    const close = endpoint_container.querySelector('.close');
    const isItemWithChildren = item.classList.contains('menu-item-has-children');
    const link = item.querySelector('& > a');

    const submenu = item.querySelector('.sub-menu');

    console.log(link);

    link.addEventListener('click', (e) => {
      console.log(e.target);
      if (isItemWithChildren) {
        e.preventDefault();
      }
    })

    let animation;

    if (submenu) {
      animation = gsap.fromTo(submenu.querySelectorAll('li'), {
        y: 10,
        opacity: 0,
      }, {
        y: 0,
        opacity: 1,
        paused: true,
        stagger: 0.1,
      });
    }

    close.addEventListener('click', () => {
      // gsap reverse animation
      animation.reverse();

      endpoint_container.classList.remove('open');
      endpoint.innerHTML = '';
      item.classList.remove('open');
    })

    const isMobile = window.innerWidth < 768;

    item.addEventListener('mouseenter', (e) => {
      if (item.classList.contains('open')) return;
      
      this._items.forEach(allItem => {
        allItem.classList.remove('open');
      })
      endpoint.innerHTML = '';
      animation.restart();
      item.classList.add('open');

      if (!isItemWithChildren) return;

      if (isMobile) {
        setTimeout(() => {
          submenu.classList.add('open');
          endpoint_container.classList.add('open');
          endpoint.appendChild(submenu);
    
          if (animation) {
            animation.play();
          }
        }, 200);

        return;
      }

      submenu.classList.add('open');
      endpoint_container.classList.add('open');
      endpoint.appendChild(submenu);

      if (animation) {
        animation.play();
      }
    })
  }
}
