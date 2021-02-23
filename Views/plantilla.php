<?php
  if (isset($_GET['ruta'])) {
    // Rutas aplicacion principal
    if (
      $_GET['ruta'] == "start" ||
      $_GET['ruta'] == "consultancies" ||
      $_GET['ruta'] == "efficiency" ||
      $_GET['ruta'] == "ourhands" ||
      $_GET['ruta'] == "online"
    ) {
        include "Views/html/" . $_GET['ruta'] . ".php";
    }
}

?>