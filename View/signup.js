const signup = document.querySelector('button[type = "submit"]');
console.log(signup)
signup.addEventListener('click', () => {
    var status;
    const formData = new FormData(document.querySelector('form'));

    fetch('http://localhost/WebAssignment/View/function.php', {
        'method': "POST",
        'body': formData,
    })
        .then(res => {
            status = res.status
            return res.text()
        })
        .then(data => {
            alert(data);
            if (status == 200)
                location.href = "/WebAssignment/View/home.php"
        })
        .catch(err => { alert(err) })
})
