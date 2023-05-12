<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="ticketCounterView" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title><?= $title_pdf; ?></title>
    <style>
        html body {
            font-family: 'poppins', sans-serif;
            margin-top: 6px;
        }

        section .top-section {
            display: flex;
            flex-direction: column;
        }

        table tr th {

            font-size: 1.25em;
            width: 200px;
            height: 35px;
            text-align: left;
        }
    </style>
</head>

<body>
    <section class="top-section" style="border-bottom: solid;border-radius: 5px;margin:5px,5px;padding: 5px,5px">
        <div>
            <img src="./assets/img/logo.png" width="50"><span>arecounter</span>
        </div>
        <div style="border-bottom: dashed; padding: 1px 3px;text-align:center" class="cop-tickets">
            <h2><i>Ticket Counter</i></h2>
            <small>counter nomor for loading on warehouse PT. ABC</small>
        </div>
    </section>
    <section class="content">
        <table style="border: solid;border-radius: 5px;margin:20px,20px;padding: 20px;width: 100%">
            <?php foreach ($dataBooking as $b) : ?>
                <img src="./assets/img/logo.png" width="50">
                <tr>
                    <th>Counter Number</th>
                    <td>:</td>
                    <td><?= $b['counter_code']; ?></td>
                </tr>
                <tr>
                    <th>Counter Record</th>
                    <td>:</td>
                    <td><?= $b['record_code']; ?></td>

                </tr>
                <tr>
                    <th>Delivery Number</th>
                    <td>:</td>
                    <td><?= $b['do_no']; ?></td>

                </tr>
                <tr>
                    <th>Shipper Name</th>
                    <td>:</td>
                    <td><?= $b['shipper']; ?></td>

                </tr>
                <tr>
                    <th>Driver Name</th>
                    <td>:</td>
                    <td><?= $b['driver_name']; ?></td>

                </tr>
                <tr>
                    <th>Police No</th>
                    <td>:</td>
                    <td><?= $b['pol_no']; ?></td>

                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <footer>
        <p>
            save this tickets for your proof, and show to the staff officer/warehouse on Loading Gate Locket
        </p>
    </footer>
</body>

</html>