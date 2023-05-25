export default () => {
  const toggler = document.querySelector('.navbar-toggler');
  const menu = document.querySelector('.navbar-collapse');
  const body = document.querySelector('body');
  body.addEventListener('click', () => menu.classList.contains('show') ? toggler.click() : '')
}
