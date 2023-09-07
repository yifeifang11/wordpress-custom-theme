</main>

    <footer>
        <p>&copy; 2023 Chungus Void. All rights reserved.</p>
    </footer>

<script>
        var overlay = document.getElementById("overlay");
        var hamburger = document.getElementById("hamburger");
        var lineTop = document.getElementById("line-top");
        var lineBottom = document.getElementById("line-bottom");
        function openNav() {
            overlay.style.display = "block";
            hamburger.setAttribute("onclick", "closeNav()");
            hamburger.style.paddingTop = "15px";
            lineTop.style.transform = "rotate(45deg)";
            lineBottom.style.transform = "rotate(-45deg)  translateX(5px) translateY(-5px)";
            lineTop.style.width = "40px";
            lineBottom.style.width = "40px";
        }
        function closeNav() {
            overlay.style.display = "none";
            hamburger.setAttribute('onclick', "openNav()");
            hamburger.style.paddingTop = "5px";
            lineTop.style.transform = "rotate(0deg)";
            lineBottom.style.transform = "rotate(0deg)";
            lineTop.style.width = "40px";
            lineBottom.style.width = "30px";
        }
    </script>
</body>
</html>