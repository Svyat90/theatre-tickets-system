// const logoImg = document.getElementById('logo')

const headerBlack = document.querySelector('.header-black')

if (!headerBlack) {
  // logoImg.setAttribute('src', './img/header-logo-white.png')
}



const headerSearch = document.getElementById('header-search')

const searchButton = document.getElementById('search-button')



searchButton.onclick = e => {

  e.preventDefault()

  headerSearch.classList.toggle('active')

}

