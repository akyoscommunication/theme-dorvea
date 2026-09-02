export class Pagination {
  constructor() {
    this._next = document.querySelector('.c-pagination .next')
    this._prev = document.querySelector('.c-pagination .prev')

    if (this._next) {
      this._next.innerHTML = '';
      this._next.innerHTML = "<svg width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
        "<path d=\"M1.4 13L0 11.6L9.6 2H1V0H13V12H11V3.4L1.4 13Z\" fill=\"currentColor\"/>\n" +
        "</svg>\n";
    }

    if (this._prev) {
      this._prev.innerHTML = '';
      this._prev.innerHTML = "<svg width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
        "<path d=\"M1.4 13L0 11.6L9.6 2H1V0H13V12H11V3.4L1.4 13Z\" fill=\"currentColor\"/>\n" +
        "</svg>\n";
    }
  }
}
