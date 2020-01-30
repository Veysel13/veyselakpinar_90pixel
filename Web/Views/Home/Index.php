

<h3>Home Anasayfa</h3>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Ad</th>
        <th scope="col">Kullanıcı Adı</th>
        <th>Sil</th>
        <th>Guncelle</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($users as $item) {?>
        <tr>
            <th scope="row"><?php echo $item["id"]?></th>
            <td><?php echo $item["full_name"] ?></td>
            <td><?php echo $item["username"] ?></td>
            <th><a href="/delete/<?php echo $item["id"]?>">Sil</a></th>
            <th><a href="/update/<?php echo $item["id"]?>">Güncelle</a></th>
        </tr>
   <?php }?>
    </tbody>
</table>

