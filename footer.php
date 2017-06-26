    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    <!--SCRIPTS -->
    <script type="application/javascript">
        
 
        //menge
        function showMenge(newValue)
        {
            document.getElementById("auswahlmenge").value=newValue;
        }
        function waehleSorte(newValue)
        {
            document.getElementById("auswahlsorte").value=newValue;
        }

        //dimension
        /* global x, y, z, sum*/
        function rechnung() {
            x = document.getElementById("range1").innerHTML;
            y = document.getElementById("range2").innerHTML;
            z = document.getElementById("range3").innerHTML;
            sum = parseInt(x) * parseInt(y) * parseInt(z);
            document.getElementById("auswahlmenge").value = sum;
        }
        
        function showValue3(newValue)
        {
        	document.getElementById("range3").innerHTML=newValue;
        }
        
        function showValue2(newValue)
        {
        	document.getElementById("range2").innerHTML=newValue;
        }

        function showValue1(newValue)
        {
        	document.getElementById("range1").innerHTML=newValue;
        }

        function mainInfo(id) {
           $.get("index.php?mainid=" + encodeURIComponent(id), function (data) {
                    $("#test2").html(data);
                   
            })
   
        };
    </script>
    <!--SCRIPT -->
</body>

</html>