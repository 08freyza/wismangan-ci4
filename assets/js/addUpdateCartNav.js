import {  baseUrl, ctViewUrl, ctApiUrl, imgUrl, cid, cartNav, showDataOnNavbar  } from'./addUpdateCartNav.js'

// save and update product to database 
const addUpdateCart = async (getFormNum, e, storedDataArr) => {
    e.preventDefault();

    var count = 0;
    var id;

    const form = document.getElementById('form' + getFormNum);
    
    let customer_id = form.customerId.value;
    let product_id = form.productId.value;
    let quantity = form.quantity.value;
    let status_cart = form.statusCart.value;

    if (storedDataArr != undefined) {
        storedDataArr.forEach((element) => {
            if (element.customer_id == customer_id && element.product_id == product_id) {
                quantity = String(parseInt(element.quantity) + parseInt(quantity));
                id = element.id;
                count++;
            }
        });
    }
    
    if (count > 0) {
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
        
        var urlencoded = new URLSearchParams();
        urlencoded.append("customer_id", customer_id);
        urlencoded.append("product_id", product_id);
        urlencoded.append("quantity", quantity);
        urlencoded.append("status_cart", status_cart);
        
        var requestOptions = {
            method: 'PUT',
            headers: myHeaders,
            body: urlencoded,
            redirect: 'follow'
        };
    
        await fetch(`http://localhost:8080/carts/${id}`, requestOptions)
            .then(response => response.json())
            .then(result => console.log("data berhasil diupdate!"))
            .catch(error => console.log('Aww, error di aucn :', error));
    } else {
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
        
        var urlencoded = new URLSearchParams();
        urlencoded.append("customer_id", customer_id);
        urlencoded.append("product_id", product_id);
        urlencoded.append("quantity", quantity);
        urlencoded.append("status_cart", status_cart);
        
        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: urlencoded,
            redirect: 'follow'
        };
    
        await fetch("http://localhost:8080/carts", requestOptions)
            .then(response => response.json())
            .then(result => console.log("data berhasil ditambahkan!"))
            .catch(error => console.log('error', error));
    }
}

// document.addEventListener('click', async (e) => {
//     var targetClass = e.target.classList[7];
//     if (targetClass == undefined) {
//         targetClass = e.target.classList[7]
//     }
//     var dataExtracted;
    
//     if (typeof parseInt(targetClass) == 'number' && targetClass != undefined) {
//         e.preventDefault()
//     }
    
//     cartNav(ctApiUrl, ctViewUrl, imgUrl, true)
//         .then((element) => {
//             dataExtracted = element;
//             addUpdateCart(targetClass, e, dataExtracted);
//             cartNav(ctApiUrl, ctViewUrl, imgUrl);
//         }
//     );
// });

export { baseUrl, ctViewUrl, ctApiUrl, imgUrl, cid, cartNav, showDataOnNavbar, addUpdateCart }