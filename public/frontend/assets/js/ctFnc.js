function ctFnc(url) {
    const baseUrl = url
    fetch(baseUrl).then((data) => {
            if (data.ok) {
                return data.json();
            }
            throw new Error('Something went wrong');
        })
        .then((responseJson) => {
            // document.getElementById('cartval').innerHTML = responseJson
            // return responseJson
            // console.log(responseJson)
            // document.getElementById('cartval').innerHTML = "<?php $dtCt = " + responseJson + "; ?>"
            document.getElementById('cartval').innerHTML = JSON.stringify(responseJson)
        })
        .catch((error) => {
            console.log(error)
        });
};