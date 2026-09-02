import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';

export class Wipe {
  constructor() {
    this._elements = document.querySelectorAll('[animation-wipe]');


    if (!this._elements) {
      return;
    }

    this.init();
  }

  init() {
    gsap.registerPlugin(ScrollTrigger);

    let start = 'top 90%';
    if (window.innerWidth < 600) {
      start = 'top 100%';
    }

    this._elements.forEach((el) => {
      gsap.to(el, {
        scrollTrigger: {
          trigger: el,
          start: start,
          end: 'bottom 10%',
          scrub: true,
          onEnter: (e) => {
            this.enterAnimation(e)
          }
        }
      });
    })
  }

  enterAnimation(e) {
    let target = e.trigger
    target.classList.add('animation-wipe--active')
  }
}
