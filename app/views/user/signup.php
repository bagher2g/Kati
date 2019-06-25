<html>
    <head>
        <title><?php echo $data['title'] ?></title>
    </head>
    <body>
        <h1></h1>

        <?= form_open('user/send_active_code', 'post') ; ?>

        <?= @textbox('pnumber', $data['pnumber'], '', ['placeholder' => 'شماره تلفن']) ; ?>
        <?= @submit('ارسال') ; ?>
    </body>
</html>
