<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aulia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <table class="table">
            <tr class="customer-table">
                <th>customer_id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>phone</th>
                <th>email</th>
                <th>street</th>
                <th>city</th>
                <th>state</th>
                <th>zip_code</th>
            </tr>
            <?php foreach($customers as $customer) { ?>
                <tr>
                    <td><?php echo $customer->customer_id ?></td>
                    <td><?php echo $customer->first_name ?></td>
                    <td><?php echo $customer->last_name ?></td>
                    <td><?php echo $customer->phone ?></td>
                    <td><?php echo $customer->email ?></td>
                    <td><?php echo $customer->street ?></td>
                    <td><?php echo $customer->city ?></td>
                    <td><?php echo $customer->state ?></td>
                    <td><?php echo $customer->zip_code ?></td>
                </tr>
            <?php } ?>  
        </table>
    </body>
</html>
