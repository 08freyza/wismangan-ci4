import { baseUrl, ctViewUrl, ctApiUrl, imgUrl, cid, cartNav, showDataOnNavbar, addUpdateCart } from "./@file/cart/addUpdateCartNav.js"

document.addEventListener('DOMContentLoaded', () => {
    cartNav(ctApiUrl, ctViewUrl, imgUrl)
})