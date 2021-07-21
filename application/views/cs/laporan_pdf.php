<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>id servis</th>
                <th>Customer</th>
                <th>Keluhan</th>
                <th>Teknisi</th>
                <th>biaya Servis</th>
                <th>Tanggal Servis</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($servis as $svs) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $svs['idService']; ?></td>
                    <td><?= $svs['mobil']; ?></td>
                    <td><?= $svs['customer']; ?></td>
                    <td><?= $svs['keluhan']; ?></td>
                    <td><?= $svs['technician']; ?></td>
                    <td><?= $svs['biayaService']; ?></td>
                    <td><?= $svs['tanggal_service']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>