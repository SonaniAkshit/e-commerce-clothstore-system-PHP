'usestrict'
const upBtn = document.querySelector('.up-button')
const downBtn = document.querySelector('.down-button')

const sidebar = document.querySelector('.sidebar')
const mainSlide = document.querySelector('.main-slide')

const slidesCount = mainSlide.querySelectorAll('div').length

const container = document.querySelector('.container')

let activeSlideIndex = 0

sidebar.style.top = `-${(slidesCount - 1) * 100}vh`

upBtn.addEventListener('click', () => {
  if (activeSlideIndex === slidesCount - 1) {
    activeSlideIndex = 0
  } else {
    activeSlideIndex++
  }
  run()
})
downBtn.addEventListener('click', () => {
  if (activeSlideIndex < 1) {
    activeSlideIndex = slidesCount - 1
  } else {
    activeSlideIndex--
  }
  run()
})

const run = () => {
  mainSlide.style.transform = `translateY(-${activeSlideIndex * height}px)`
  sidebar.style.transform = `translateY(${activeSlideIndex * height}px)`
}

const height = container.clientHeight
