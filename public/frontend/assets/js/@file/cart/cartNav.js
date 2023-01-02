var baseUrl = 'http://localhost:8080'
var ctViewUrl = 'http://localhost:8080/cart'
var ctApiUrl = 'http://localhost:8080/cartapis'
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

function showDataOnCartPage(data, hrefUrl, srcUrl, cid) {
    let willShow = 
        `<div class="col-sm-12 col-md-12 col-lg-8 mb-3">
            <div class="card">
                <div class="card-header">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Pilih Semua
                        </label>
                    </div>
                </div>
                <div class="overflow-auto" id="cartpageval" style="height: 375px;">`
    let heightForItem;

    for (let eachData of data) {
        if (eachData.customer_id == cid) {
            willShow += 
            `<div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-3 d-flex align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                        <img src="${srcUrl}" alt="red" width="60" height="60" class="">
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-6 col-6">
                        <h5 class="mb-0 text-truncate" style="font-size: 18px;">${eachData.product_name}</h5>
                        <p class="mb-0 mt-1" style="font-size: 15px;">${new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(eachData.price_product)}</p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-3 justify-content-end">
                        <h5 class="mb-0 text-end" style="font-size: 16px;">
                            <input type="number" class="form-control" id="quantity" value="${eachData.quantity}" style="text-align: center;">
                        </h5>
                    </div>
                </div>
            </div>
            <hr class="my-0">`
        }
    }

    willShow += `</div>
        </div>
    </div>
    <div class="col-sm-0 col-md-0 col-lg-4">
        <div class="card shadow">
            <!-- <h5 class="card-header">Ringkasan Pesanan</h5> -->
            <div class="card-body">
                <h5 class="card-title">Ringkasan Pesanan</h5>
                <div class="d-flex w-100 justify-content-between">
                    <p class="card-text mb-0">Total Harga (133 Px)</p>
                    <p class="card-text mb-0">Rp. 10.125.000</p>
                </div>
                <div class="d-flex w-100 justify-content-between">
                    <p class="card-text mb-0">Total Diskon</p>
                    <p class="card-text mb-0">Rp. 0</p>
                </div>
                <hr>
                <div class="d-flex w-100 justify-content-between mb-3">
                    <h5 class="card-title mb-0">Total Harga</h5>
                    <h5 class="card-title mb-0">Rp. 25.000</h5>
                </div>
                <a href="#" class="btn btn-success w-100">Checkout</a>
            </div>
        </div>
    </div>`

    if (data.length > 0) {
        heightForItem = 93
    } else {
        heightForItem = 0
        document.getElementById('cartstatuslink').href = ''
        document.getElementById('cartstatuslink').innerHTML = 'Tidak ada menu'
    }

    document.getElementById('cartpageval').style.height = `${heightForItem * data.length}px`
    document.getElementById('cartpageval').innerHTML = willShow
}

export { baseUrl, ctViewUrl, ctApiUrl, imgUrl, cid, cartNav, showDataOnNavbar }