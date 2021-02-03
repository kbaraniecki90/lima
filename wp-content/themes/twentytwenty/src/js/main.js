import SmoothScroll from 'smooth-scroll/dist/smooth-scroll'
import '../../bootstrap/js/bootstrap.min.js'
import '../scss/main.scss'
import SoftImage from './modules/SoftImage'


document.addEventListener('DOMContentLoaded', function () {

  window.softImages = [
    new SoftImage('.squared-images-big', 10),
    new SoftImage('.squared-images-small-top', 15),
    new SoftImage('.squared-images-small-bottom', 20)
  ]

  var scroll = new SmoothScroll();

  scroll.animateScroll('a[href*="#"]', '', {
    speed: 500,
    offset: 50
  })
})