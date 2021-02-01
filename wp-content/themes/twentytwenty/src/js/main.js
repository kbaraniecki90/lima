import SoftImage from './modules/SoftImage'


document.addEventListener('DOMContentLoaded', function () {

  window.softImages = [
    new SoftImage('.squared-images-big', 10),
    new SoftImage('.squared-images-small-top', 15),
    new SoftImage('.squared-images-small-bottom', 20)
  ]

})