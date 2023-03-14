<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard|Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
</head>

<body>
    INI ADALAH DASHBOARD , HAI <?= session()->get('full_name'); ?>
    <a href="admin/logout" type="button" class="btn btn-secondary">Logout</a>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- java script untuk element tambahan -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

    <script type="text/javascript">
        //sweetalert funcution
        $(function() {
            <?php if (session()->has("success")) { ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Congrats!',
                    text: '<?= session("success") ?>'
                })
            <?php } elseif (session()->has("Caution")) { ?>
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops, Sorry',
                    text: '<?= session("Caution") ?>'
                })
            <?php } elseif (session()->has("error")) { ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops, Sorry',
                    text: '<?= session("error") ?>'
                })
            <?php } ?>

        });
    </script>

</body>

</html>