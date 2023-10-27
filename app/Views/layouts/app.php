<!DOCTYPE html>
<html lang="en">
<head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NAV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('user')?>">HOME</a>
        </li>
        <div class="nav-item dropdown">
        <button onclick="myFunction()" class="nav-link dropbtn dropdown-toggle" aria-current="page">KELAS</button>
          <div class="dropdown-menu dropdown-content" id="myDropdown" >
          <a class="dropdown-item" href="<?= base_url('user/kelas/1')?>">A</a>
          <a class="dropdown-item" href="<?= base_url('user/kelas/2')?>">B</a>
          <a class="dropdown-item" href="<?= base_url('user/kelas/3')?>">C</a>
          <a class="dropdown-item" href="<?= base_url('user/kelas/4')?>">D</a>
        </div>
        </div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./css/style.css'); ?>">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
    <?= $this->renderSection('content') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.bundle.min.js"></script>
</body>
<script>
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</html>