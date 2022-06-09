'use strict'
const signin = document.querySelector('button[type = "submit"]');

signin.addEventListener('click', () => {
    var status;
    const formData = new FormData(document.querySelector('form'));
    fetch('http://localhost/WebAssignment/View/function.php', {
        'method': 'POST',
        'body': formData,
        mode: 'cors',
        credentials: 'include'
    })
        .then(res => {
            status = res.status
            console.log('user cookies is ')
            console.log(res.headers.get('user'))
            return res.text()
        })
        .then(data => {
            console.log(document.cookie)
            //alert(data)
            if (status == 200) {
                let login = document.querySelector(".signin");
                login.innerHTML = data;
                location.href = "/WebAssignment/View/index.php?page=home"
            }
            else
                location.href = "/WebAssignment/View/index.php?page=signin"
        })
        .catch(err => {
            console.log(err)
        })

})
