<?php
include_once __DIR__ . '/../include/header.php';
include_once __DIR__ . '/../include/menu.php';

$row = $db->prepare("SELECT * FROM `contact` ORDER BY `id` DESC ");
$row->execute();

?>

<div class="wui-content">
    <div class="wui-content-header">
        <a href="#" class="wui-side-menu-trigger"><i class="fa fa-bars"></i></a>
    </div>

    <div class="page">
        <div class="page-header">
            <div>Gelen mektublar</div>
        </div>
        <div class="page-main overflow">
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>S/s</th>
                    <th>Ad və Soyad</th>
                    <th>Email</th>
                    <th>Movzu</th>
                    <th>Mesaj</th>
                    <th>Emeliyyat</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $s = 0;
                while ($e = $row->fetch(PDO::FETCH_ASSOC)) {
                    $s++
                    ?>
                    <tr>
                        <td><?php echo $s ?></td>
                        <td><?php echo $e['name'] ?></td>
                        <td><?php echo $e['email'] ?></td>
                        <td><?php echo $e['subject'] ?></td>
                        <td><?php echo $e['text'] ?></td>


                        <td>

                            <a class="delete-icon deleteItem confirm"
                               href="<?php echo $site_url ?>/admin/contact/delete.php?delete=<?php echo $e['id']; ?>">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>

                    </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<?php
include_once __DIR__ . '/../include/footer.php';
?>
