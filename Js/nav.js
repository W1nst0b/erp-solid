const nav = document.querySelector('#header');
const top = nav.offsetTop;

function fixNav() {
  if (window.scrollY >= top) {
    console.log(top)
  }
}

window.addEventListener('scroll', fixnav)