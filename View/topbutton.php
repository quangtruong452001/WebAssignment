<button onclick="topFunction()" id="myTopButton" title="Go to top"><img src="../images/to_top.png" alt="to_top" width="50" height="50"></button>
<script>
    var myButton = document.getElementById("myTopButton");
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
            myButton.style.display = "block";
        else
            myButton.style.display = "none";
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>