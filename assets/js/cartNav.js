var baseUrl = 'http://localhost:8080'
var ctViewUrl = 'http://localhost:8080/cart'
var ctApiUrl = 'http://localhost:8080/carts'
var imgUrl = 'http://localhost:8080/frontend/assets/img/test.png'
var cid = document.querySelector('.cstr').classList[2]

const cartNav = async (ctApiUrl, hrefUrl, srcUrl, a = false) => {
    try {
        const response = await fetch(ctApiUrl)
        var data = await response.json()
        var dataArr = []

        data.forEach(element => {
            if (element.customer_id === cid) {
                dataArr.push(element)
            }
        });

        showDataOnNavbar(dataArr, hrefUrl, srcUrl, cid)

        if (a === true) {
            return dataArr
        }
    } catch (err) {
        console.log('Aww, error di cn : ', err)
        document.getElementById('cartstatuslink').ariaDisabled = true
        document.getElementById('cartstatuslink').href = ''
        document.getElementById('cartstatuslink').innerHTML = 'Tidak ada menu'
    }
}

function showDataOnNavbar(data, hrefUrl, srcUrl, cid) {
    let willShow = ''
    let heightForItem;
    var countCart = 0

    for (let eachData of data) {
        if (eachData.customer_id == cid) {
            willShow += 
            `<li class="cust-cart-item p-0">
                <a href="${hrefUrl}" class="justify-content-center" style="margin: 2px 4px 2px 4px; padding: 12px 18px 12px 18px; color: black;">
                    <div class="col-3">
                        <img src="${srcUrl}" alt="red" width="50" height="50" class="ms-2">
                    </div>
                    <div class="col-6">
                        <h5 class="mb-0 text-truncate" style="font-size: 16px;">${eachData.product_name}</h5>
                        <p class="mb-0 mt-1" style="font-size: 12px;">${new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(eachData.price_product)}</p>
                    </div>
                    <div class="col-3 align-items-center">
                        <h5 class="mb-0 text-end me-2" style="font-size: 16px;">${eachData.quantity} Pt</h5>
                    </div>
                </a>
                <hr class="m-auto" style="width: 87%;">
            </li>`
        }

        countCart = (countCart + parseInt(eachData.quantity))
    }

    document.getElementById('cartsum').innerHTML = `Keranjang (${countCart})`

    if (data.length > 0) {
        if (data.length === 1) {
            heightForItem = 79
        } else if (data.length === 2) {
            heightForItem = 158
        } else {
            heightForItem = 238
        }
    } else {
        heightForItem = 0
        document.getElementById('cartstatuslink').href = ''
        document.getElementById('cartstatuslink').innerHTML = 'Tidak ada menu'
    }

    document.getElementById('cartval').style.height = `${heightForItem}px`
    document.getElementById('cartval').innerHTML = willShow
}

// document.addEventListener('DOMContentLoaded', () => {
//     cartNav(ctApiUrl, ctViewUrl, imgUrl)
// })

export { baseUrl, ctViewUrl, ctApiUrl, imgUrl, cid, cartNav, showDataOnNavbar }