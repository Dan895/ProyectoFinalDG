<?php
include_once '../../../Datos/Database.php';
$result = mysqli_query($conn, "SELECT * FROM padre");
?>

<div class="container jumbotron">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <h2 class="text-center">Listado de Padres</h2>
            <?php
            if (mysqli_num_rows($result) > 0) {
                ?>
                <table class="table table-bordered table-dark text-center">
                    <tr>
                        <td scope="col">ID</td>
                        <td scope="col">Nombre</td>
                        <td scope="col">Teléfono</td>
                        <td scope="col">E-mail</td>
                        <td scope="col">Opciones</td>
                    </tr>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row["codigo_Padre"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["telefono"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><a class="btn btn-success"
                                   href="update.php?ID=<?php echo $row["codigo_Padre"]; ?>">Actualizar</a>
                                <a class="btn btn-danger"
                                   href="delete.php?ID=<?php echo $row["codigo_Padre"]; ?>">Eliminar</a></td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                </table>
                <?php
            } else {
                echo "No existen padres";
            }
            ?>
        </div>
    </div>
</div>
