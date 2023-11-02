<section>
    <title><?php echo $judul ?> | Web Programming</title>
    <table border="1">
        <?php foreach ($user as $u){
        ?>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>
        <tr>
            <td><?php echo $u-> nama ?></td>
            <td><?php echo $u-> alamat ?></td>
            <td><?php echo $u-> pekerjaan ?></td>
        </tr>
        <?php } ?>
    </table>
</section>