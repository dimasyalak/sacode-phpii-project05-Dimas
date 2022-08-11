<?php

    //inclde header
    require __DIR__ . '/include/header.php';

    // buat variable method request 
    $request_method = strtoupper($_SERVER['REQUEST_METHOD']);

        if($request_method === 'GET'){

            # echo 'gunakan method GET';
            require __DIR__ . '/include/form.php';

        }elseif($request_method === 'POST'){

           # echo 'gunakan method POST';
           require __DIR__ . '/include/proses.php';

        }

    # //inclde form
    # require __DIR__ . '/include/form.php';

    //inclde footer
    require __DIR__ . '/include/footer.php';


?>

