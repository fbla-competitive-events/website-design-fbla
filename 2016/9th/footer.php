    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2>Connect with us!</h2><br>
                    <a href="https://facebook.com/breadyxyz" target="_blank"><img src="../img/facebook.svg" class="sm"></a>
                    <a href="https://twitter.com/breadyxyz" target="_blank"><img src="../img/twitter.svg" class="sm"></a>
                    <a href="https://www.instagram.com/breadyxyz/" target="_blank"><img src="../img/instagram.svg" class="sm"></a>
                </div>
                <div class="col-4">
                    <h2>Hours of Operation</h2>
                    <p>Mon. to Sat. 7AM - 9PM</p>
                    <p>Sun. 8AM - 6PM</p>
                    <p id="isOpen"></p>
                    <script>
                        var date = new Date();
                        var hour = date.getHours();
                        var isSunday = (date.getDay == 0);
                        var isOpen = false;
                        if (!isSunday){
                            if (hour >= 7 && hour < 21)
                                isOpen = true;
                            else
                                isOpen = false;
                        }
                        else{
                            if (hour >= 8 && hour <=18)
                                isOpen = true;
                            else
                                isOpen = false;
                        }
                        if (isOpen){
                            document.getElementById("isOpen").innerHTML = "We are currently open! Come in!";
                        }
                        else
                            document.getElementById("isOpen").innerHTML = "We are currently closed for the day!";
                    </script>
                </div>
                <div class="col-4">
                    <h2>Contact us</h2><br>
                    <p><a href="contact/">Contact form</a></p>
                    <p>714.555.2732</p>
                </div>
            </div>
            <div class="row">
                <p>This website is for the FBLA 2016 Website Design Competition. All products depicted are ficticious.</p>
                <p>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></p>
                <p>Additional photos are used under a CC0 non attribution license and/or created/edited by the authors of this page.</p>
            </div>
        </div>
    </footer>
</body>
</html>