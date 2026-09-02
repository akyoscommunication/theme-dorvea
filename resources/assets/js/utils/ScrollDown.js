export class ScrollDown {
  constructor() {
    this._scrollDown = document.querySelector('[animation-scrolldown]');

    if (!this._scrollDown) return;

    this.init();
  }

  init() {
    let hero = document.querySelector('.s-hero');
    let heroHeight = hero.offsetHeight;


    this._scrollDown.addEventListener('click', function () {
      window.scrollTo({
        top: heroHeight - 200,
        behavior: 'smooth'
      });
    })
  }
}
