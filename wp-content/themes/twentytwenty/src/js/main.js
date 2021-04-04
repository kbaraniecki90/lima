import SmoothScroll from 'smooth-scroll/dist/smooth-scroll'
import '../../bootstrap/js/bootstrap.min.js'
import '../scss/main.scss'
import SoftImage from './modules/SoftImage'
import navbarClosing from './modules/navbarClosing'


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

  if (window.screen.availWidth < 767) {
    const tabsLink = document.querySelectorAll('#realizations button')
    tabsLink.forEach(tabLink => tabLink.addEventListener('click', () => {
      const sectionToScroll = document.querySelector('#realizationsContent')
			scroll.animateScroll(sectionToScroll, '', {
        speed: 250,
				offset: 50
      })
    }))
  }

  $('.gallery').slick({
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    prevArrow: '<button class="slick-arrow slick-prev"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/><path d="M12,4c4.41,0,8,3.59,8,8s-3.59,8-8,8s-8-3.59-8-8S7.59,4,12,4 M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10 c5.52,0,10-4.48,10-10C22,6.48,17.52,2,12,2L12,2z M13,12l0-4h-2l0,4H8l4,4l4-4H13z"/></g></svg></button>',
    nextArrow: '<button class="slick-arrow slick-next"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/><path d="M12,4c4.41,0,8,3.59,8,8s-3.59,8-8,8s-8-3.59-8-8S7.59,4,12,4 M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10 c5.52,0,10-4.48,10-10C22,6.48,17.52,2,12,2L12,2z M13,12l0-4h-2l0,4H8l4,4l4-4H13z"/></g></svg></button>'
  });

  navbarClosing()
})