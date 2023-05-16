<?php include("inc_header.php") ?>
<?php
$katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
?>
<h1>Halaman Admin</h1>
<p>
  <a href="halaman_input.php">
    <input type="button" class="btn btn-primary" value="buat halaman baru" />
  </a>
</p>
<form class="row g-3" method="get">
  <div class="col-auto">
    <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="katakunci"
      value="<?php echo $katakunci ?>" />
  </div>
  <div class="col-auto">
    <input type="submit" name="cari" value="Cari tulisan" class="btn btn-secondary" />
  </div>
</form>
<table class="table table-striped">
  <thead>
    <tr>
      <th class="col-1">#</th>
      <th>Judul</th>
      <th>Kutipan</th>
      <th class="col-2">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, sapiente!</td>
      <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
      <td>
        <span class="badge text-bg-warning">edit</span>
        <span class="badge text-bg-danger">delete</span>
      </td>
    </tr>
  </tbody>
</table>
<?php include("inc_footer.php") ?>