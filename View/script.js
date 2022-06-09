function load_data(query = '') {
    var form_data = new FormData();

    form_data.append('query', query);

    var ajax_request = new XMLHttpRequest();

    ajax_request.open("POST", "index.php");

    ajax_request.send(form_data);
    if (query.length == 0) {
        document.getElementById("index").innerHTML = "";
        document.getElementById("index").style.border = "0px";
        return;
    }
    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState == 4 && ajax_request.status == 200 && query.length != 0) {
            var response = JSON.parse(ajax_request.responseText);
            // console.log(request)
            var html = '<table class = "table text-white">';
            console.log(response)
            if (response.length > 0) {
                for (var count = 0; count < response.length; count++) {
                    html += '<tr>';

                    html += '<td>' + response[count].name + '</td>';
                    html += '</tr>';

                }
                document.getElementById("index").innerHTML = html;
            }
            html += '</table>';
            console.log(html);


        }
    }
}