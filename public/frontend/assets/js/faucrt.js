import { baseUrl, ctViewUrl, ctApiUrl, imgUrl, cid, cartNav, showDataOnNavbar, addUpdateCart } from "./@file/cart/addUpdateCartNav.js"

document.addEventListener('click', async (e) => {
    var targetClass = e.target.classList[7];
    if (targetClass == undefined) {
        targetClass = e.target.classList[7]
    }
    var dataExtracted;
    
    if (typeof parseInt(targetClass) == 'number' && targetClass != undefined) {
        e.preventDefault()
    }
    
    cartNav(ctApiUrl, ctViewUrl, imgUrl, true)
        .then((element) => {
            dataExtracted = element;
            addUpdateCart(targetClass, e, dataExtracted);
            cartNav(ctApiUrl, ctViewUrl, imgUrl);
        }
    );
});