async function crtFn(url, hrefUrl, srcUrl) {
    const response = await fetch(url)
    var data = await response.json()
    console.log(data)
    showData(data, hrefUrl, srcUrl)
}

function showData(data, hrefUrl, srcUrl) {
    let willShow = ''
    let heightForItem;
    for (let eachData of data) {
        willShow += 
        `<li class="p-0">
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
    document.getElementById('cartsum').innerHTML = `Keranjang (${data.length})`
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
    }
    document.getElementById('cartval').style.height = `${heightForItem}px`
    document.getElementById('cartval').innerHTML = willShow

}