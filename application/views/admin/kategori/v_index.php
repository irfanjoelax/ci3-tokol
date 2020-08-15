<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-12"><?= $this->session->flashdata('notif') ?></div>
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Daftar Kategori
        <div class="float-right"><a href="<?= site_url('admin/kategori/tambah'); ?>" class="btn btn-sm btn-<?= $toko['tema_tk'] ?>">Tambah Kategori</a></div>
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
      <table class="table table-hover table-bordered text-center dataTable">
        <thead class="text-white bg-<?= $toko['tema_tk'] ?>">
          <tr>
            <th scope="col" width="30">#</th>
            <th scope="col" class="valign-middle" width="100">Gambar</th>
            <th scope="col" class="valign-middle">Kategori</th>
            <th scope="col" class="valign-middle" width="100">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($kategori as $ktg) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td>
                <img src="<?= base_url('asset/kategori/' . $ktg['foto_ktg']); ?>" width="70">
              </td>
              <td><?= $ktg['nama_ktg']; ?></td>
              <td><a href="<?= site_url('admin/kategori/detail/' . $ktg['slug_ktg']); ?>" class="btn btn-sm btn-secondary">Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php $this->load->view('admin/layouts/footer') ?>
</body>

</html>