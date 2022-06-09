const signup = document.querySelector('button[type = "submit"]');
console.log(signup)
if (signup) {
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
                //alert(data);

                if (status == 200)
                    location.href = "/WebAssignment/View/index.php?page=home"
            })
            .catch(err => { alert(err) })
    })
}


const logout = document.querySelector(".logout");
if (logout) {
    logout.addEventListener('click', () => {
        console.log(11);

        fetch("http://localhost/WebAssignment/View/function.php", {

            credentials: 'include',
            mode: 'cors'
        })
            .then(res => res.text())
            .then(data => {
                //alert(data)
                location.href = '/WebAssignment/View/index.php?page=home'
            })
    })
}