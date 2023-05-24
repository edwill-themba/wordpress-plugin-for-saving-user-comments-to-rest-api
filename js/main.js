const button = document.querySelector('.btn-submit')
const message = document.querySelector('.message');

button.addEventListener('click', async(e) => {
    e.preventDefault();
    // get values from user inputs
    let author = document.querySelector('.author').value
    let comment = document.querySelector('.comment').value
    const url = 'http://127.0.0.1:8000/api/comment';
    // sends user data to the serve using fetch api

    fetch(url, {
            method: 'POST',
            mode: 'cors',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                author: author,
                comment: comment
            })
        })
        .then((response) => response.json())
        .then(data => {
            console.log(data);
            message.style.color = 'green';
            message.innerHTML = 'Thank you,data is saved scuccessfully';

            author = "";
            comment = "";
        })
        .catch((error) => {
            message.style.color = 'red';
            message.innerHTML = `${error} all the fields are required must be greater 3 charactes`;
            console.log('error' + error);
            author = "";
            comment = "";
        })

})