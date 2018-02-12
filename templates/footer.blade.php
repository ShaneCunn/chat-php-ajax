<!-- /.container -->

<script>
    Loadchat();

    function Loadchat() {

        $.post('handlers/message.php?action=getMessages', function (response) {

            $("#chat").html(response);


        });
    }

    $(".textarea").keyup(function (e) {
        // alert($(this).val());
        if (e.which == 13) {
            //alert($(this).val());
            $("form").submit();

        }

        $("form").submit(function () {
            var message = $(".textarea").val();
            //alert("form is submitted");

            $.post('handlers/message.php?action=sendMessage&message=' + message, function (response) {
                // alert(response);
                if (response == 1) {

                    document.getElementById('messageform').reset();
                }

            });


            return false;
        });

    })
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>