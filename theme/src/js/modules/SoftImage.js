export default class {
	constructor (selector, shift = 25) {
		this.shift = shift
    this.image = document.querySelector(selector)
		this.wrapper = this.image
		this.height = window.innerHeight
		if (this.image) {
			window.addEventListener('scroll', () => {
				this.scrollHandler()
			})
		}
	}

	scrollHandler () {
		let progress = this.image.getBoundingClientRect().top / (this.height)
		let shift = this.shift * progress + 'vh'
		this.imageMove(shift)
	}

	imageMove (shift) {
		this.wrapper.style.top = shift
	}
}
