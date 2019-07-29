<!doctype html>
<html>
    <head>
        <title>List Data</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>idMesin</th>
                    <th>idProduk</th>
                    <th>suhu</th>
                    <th>arus</th>
                    <th>kelembapan</th>
                    <th>rpm</th>
                    <th>gas</th>
                    <th>tanggal</th>
                    <th>count1</th>
                    <th>count2</th>
                    <th>count3</th>
                    <th>count4</th>
                    <th>count5</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $indexTable = 1;
                    while($result = $data->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?php echo $indexTable ?></td>
                            <td><?php echo $result['idMesin'] ?></td>
                            <td><?php echo $result['idProduk'] ?></td>
                            <td><?php echo $result['suhu'] ?></td>
                            <td><?php echo $result['arus'] ?></td>
                            <td><?php echo $result['kelembapan'] ?></td>
                            <td><?php echo $result['rpm'] ?></td>
                            <td><?php echo $result['gas'] ?></td>
                            <td><?php echo $result['tanggal'] ?></td>
                            <td><?php echo $result['count1'] ?></td>
                            <td><?php echo $result['count2'] ?></td>
                            <td><?php echo $result['count3'] ?></td>
                            <td><?php echo $result['count4'] ?></td>
                            <td><?php echo $result['count5'] ?></td>
                        </tr>
                    <?php
                        $indexTable++;
                    }    
                ?>
            </tbody>
        </table>
        <br/>
        &copy; <?php echo date("Y");?> Tan Jason
    </body>
</html>
