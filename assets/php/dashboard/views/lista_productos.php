<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="../../../assets/img/varios/logo.png " type="image/x-icon">

  <!--=============== BOOTSTRAP ===============-->
  <?php require_once('_bootstrap.php') ?>

  <title>Dashboard</title>
</head>

<body>
  <?php require_once('_nav.php') ?>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Precio</th>
          <th scope="col">Categoría</th>
          <th scope="col">Acciones</th>
          <th scope="col"><a href="agregar_producto.php" style="text-decoration: none;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg>
</a></th>
        </tr>
      </thead>
      <tbody>
        <?php if(count($productos) > 0): ?>

        <?php foreach($productos as $pro): ?>
        <tr>
          <td><?php echo $pro -> id ?></td>
          <td><?php echo $pro -> nombre ?></td>
          <td>$<?php echo number_format($pro -> precio, 2, ',', '.') ?></td>
          <td><?php echo $pro -> nombre_categoria ?></td>
          <td>
            <a class="text text-primary" href="modificar_producto.php?ide=<?php echo $pro -> id ?>">Editar</a>
            <a class="text text-danger" href="#" onClick="eliminarProducto('eliminar_producto.php?ide=<?php echo $pro -> id ?>')">Eliminar</a>
          </td>
        </tr>
        <?php endforeach ?>

        <?php else: ?>

        <tr>
          <td colspan="5" class="text-center">No se han encontrado registros</td>
        </tr>

        <?php endif ?>

      </tbody>
    </table>

    <nav aria-label="...">
      <ul class="pagination">
        <?php if($paginas['anterior']): ?>
        <li class="page-item">
          <a class="page-link" href="?pag=<?php echo $paginas['primera'] ?>" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a>
        </li>
        <li class="page-item">
          <a class="page-link" href="?pag=<?php echo $paginas['anterior'] ?>"><?php echo $paginas['anterior'] ?></a>
        </li>
        <?php endif ?>
        <li class="page-item active">
          <span class="page-link disabled" href="#"><?php echo $paginas['actual'] ?></span>
        </li>
        <?php if($paginas['siguiente']): ?>
        <li class="page-item">
          <a class="page-link" href="?pag=<?php echo $paginas['siguiente'] ?>"><?php echo $paginas['siguiente'] ?></a>
        </li>
        <li class="page-item">
          <a class="page-link" href="?pag=<?php echo $paginas['ultima'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></a>
        </li>
        <?php endif ?>
      </ul>
    </nav>
  </div>

  <!--=============== ELIMINAR PRODUCTO JS ===============-->
  <script>
    function eliminarProducto(p_url_eliminar) {
     
      Swal.fire({
        title: 'Está segura/o?',
        text: "Este registro no se podrá recuperar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isConfirmed) {
          location.href = p_url_eliminar;
        }
      });
    }
</script>

  <!--=============== ALERTA ===============-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>