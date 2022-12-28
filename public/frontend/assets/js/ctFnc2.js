function crtFn(baseUrl) {
    fetch(baseUrl).then((data) => {
            if (data.ok) {
                return data.json();
            }
            throw new Error('Something went wrong');
        })
        .then((responseJson) => {
            return responseJson
        })
        .catch((error) => {
            return error
        });
}