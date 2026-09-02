export class Button {
  constructor() {
    this._btn = document.querySelector('.forminator-button');

    if (!this._btn) return;

    this.init();
  }

  init() {
    let content = this._btn.innerHTML;
    let el = document.createElement('span');

    el.innerHTML = content;

    this._btn.innerHTML = '';
    this._btn.appendChild(el)
  }
}
