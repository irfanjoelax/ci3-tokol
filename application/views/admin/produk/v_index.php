<?php $this->load->view('admin/layouts/header') ?>
<div class="container mt-2 mb-2">
  <div class="row">
    <div class="col-12"><?= $this->session->flashdata('notif') ?></div>
    <div class="col-3">
      <?php $this->load->view('admin/layouts/_menu') ?>
    </div>
    <div class="col-9">
      <h4>
        Daftar Produk
        <div class="float-right"><a href="<?= site_url('admin/produk/tambah'); ?>" class="btn btn-sm btn-<?= $toko['tema_tk'] ?>">Tambah Produk</a></div>
      </h4>
      <hr class="bg-<?= $toko['tema_tk'] ?>">
      <table class="table table-hover text-center dataTable">
        <thead class="text-white bg-<?= $toko['tema_tk'] ?>">
          <tr>
            <th scope="col" width="15">#</th>
            <th scope="col" class="valign-middle" width="100">Gambar</th>
            <th scope="col" class="valign-middle">Produk</th>
            <th scope="col" class="valign-middle" width="50">Stok</th>
            <th scope="col" class="valign-middle" width="75">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($produk as $prd) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td>
                <img src="<?= base_url('asset/produk/' . $prd['foto_prd']); ?>" width="70">
              </td>
              <td><?= $prd['nm_prd']; ?></td>
              <td><?= $prd['stok_prd']; ?></td>
              <td><a href="<?= site_url('admin/produk/detail/' . $prd['slug_prd']); ?>" class="btn btn-sm btn-secondary">Detail</a></td>
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