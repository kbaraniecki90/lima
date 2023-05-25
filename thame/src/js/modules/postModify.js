export default () => {
  let postInner = document.querySelector('.post-inner');
  let entryContent = document.querySelector('.entry-content');
  let gallery = document.querySelector('.gallery');
  if(!gallery) return
  postInner.appendChild(gallery);
  postInner.classList.add('row');
  entryContent.classList.add('col-12', 'col-xl-5');
  gallery.classList.add('col-12', 'col-xl-6', 'offset-xl-1');
}
