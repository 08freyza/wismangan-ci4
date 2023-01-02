import {  baseUrl, ctViewUrl, ctApiUrl, imgUrl, cid, cartNav, showDataOnNavbar  } from'./cartNav.js'

// save and update product to database 
const addUpdateCart = async (getFormNum, e, storedDataArr) => {
    e.preventDefault();

    var count = 0;
    var id;

    const form = document.getElementById('form' + getFormNum);
    
    try {
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
        
            await fetch(`http://localhost:8080/cartapis/${id}`, requestOptions)
                .then(response => response.json())
                .then(result => console.log("Updating Data Successful."))
                .catch(error => console.log('Aww, the error is :', error));
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
        
            await fetch("http://localhost:8080/cartapis", requestOptions)
                .then(response => response.json())
                .then(result => console.log("Adding Data Successful."))
                .catch(error => console.log('Aww, the error is :', error));
        }
    } catch (error) {
        console.log("No problem.")
    }

}

export { baseUrl, ctViewUrl, ctApiUrl, imgUrl, cid, cartNav, showDataOnNavbar, addUpdateCart }