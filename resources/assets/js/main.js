import '@css/main.scss'
import '../../../vendor/akyos/akyos-access/resources/assets/js/toc.js'
import '@js/bootstrap'
import {Mask} from "@js/components/Mask";
import {Slider} from "@js/utils/Slider";
import {Stagger} from "@js/components/Stagger";
import {Wipe} from "@js/components/Wipe";
import {Scroll} from "@js/components/Scroll";
import {Header} from "@js/components/Header";
import {Lightbox} from "@js/components/Lightbox";
import {CountNumber} from "@js/components/CountNumber";
import {Button} from "@js/utils/Button";
import {Pagination} from "@js/utils/Pagination";
import {Burger} from "@js/components/Burger";
import {ScrollDown} from "@js/utils/ScrollDown";
import {Listener} from "./Listener";


window.onload = () => {

  const animations = [
    Mask,
    Stagger,
    Wipe,
    Scroll
  ]

  animations.forEach(animation => {
    new animation()
  })

  new Slider()
  new Header()
  new Lightbox()
  new CountNumber()
  new Button()
  new Header()
  new Pagination()
  new Burger()
  new ScrollDown()
  new Listener()
}
