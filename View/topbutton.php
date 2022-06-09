<button onclick="topFunction()" id="topButton" title="Go to top">Top</button>
<style>
    #topButton {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px; /* Place the button 30px from the right */
        z-index: 99;
        border: none;
        outline: none;
        background-color: white;
        color: #52C1F3;
        cursor: pointer;
        padding: 15px;
        border-radius: 18px;
        font-size: 18px;
    }

    #topButton:hover {
        background-color: Red; /* Add a dark-grey background on hover */
    }
</style>
<script>
    var myButton = document.getElementById("topButton");
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