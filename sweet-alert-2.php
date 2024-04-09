<?php

session_start();

if(isset($_SESSION["tipo"]) && isset ($_SESSION["msg"])){
    echo "
    <script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true; 
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
            Toast.fire({
                icon: 'info',]
                tittle: 'Loren Ipsum dolor sit amet, consetetur sadipscing elitr.'
            });

        });
        </script>

    ";

}




?>