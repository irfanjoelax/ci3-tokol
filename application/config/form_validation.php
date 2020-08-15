<?php
$config = array(
    'login' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
                'valid_email' => 'Harap masukkan %s yang benar.',
            ),
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        )
    ),
    'admin_kategori' => array(
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        )
    ),
    'admin_produk' => array(
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        ),
        array(
            'field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required|numeric',
            'errors' => array(
                'required' => '%s diisi dahulu.',
                'numeric'  => '%s harus angka'
            ),
        ),
        array(
            'field' => 'diskon',
            'label' => 'Diskon',
            'rules' => 'required|numeric',
            'errors' => array(
                'required' => '%s diisi dahulu.',
                'numeric'  => '%s harus angka'
            ),
        ),
        array(
            'field' => 'stok',
            'label' => 'Stok',
            'rules' => 'required|numeric',
            'errors' => array(
                'required' => '%s diisi dahulu.',
                'numeric'  => '%s harus angka'
            ),
        ),
        array(
            'field' => 'berat',
            'label' => 'Berat',
            'rules' => 'required|numeric',
            'errors' => array(
                'required' => '%s diisi dahulu.',
                'numeric'  => '%s harus angka'
            ),
        ),
        array(
            'field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        ),
    ),
    'pengaturan' => array(
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        ),
        array(
            'field' => 'sejak',
            'label' => 'Sejak',
            'rules' => 'required|numeric',
            'errors' => array(
                'required' => '%s diisi.',
                'numeric'  => '%s angka'
            ),
        ),
        array(
            'field' => 'telepon',
            'label' => 'Telepon',
            'rules' => 'required|numeric',
            'errors' => array(
                'required' => '%s diisi dahulu.',
                'numeric'  => '%s harus angka'
            ),
        ),
        array(
            'field' => 'wa',
            'label' => 'Whatsapp',
            'rules' => 'required|numeric',
            'errors' => array(
                'required' => '%s diisi dahulu.',
                'numeric'  => '%s harus angka'
            ),
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email',
            'errors' => array(
                'required' => '%s diisi dahulu.',
                'valid_email'  => '%s harus valid'
            ),
        ),
        array(
            'field' => 'fb',
            'label' => 'Facebook',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        ),
        array(
            'field' => 'ig',
            'label' => 'Instagram',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        ),
        array(
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        ),
    ),
    'informasi' => array(
        array(
            'field' => 'judul',
            'label' => 'Judul Informasi',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        ),
        array(
            'field' => 'isi',
            'label' => 'Isi Informasi',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Harap masukkan %s terlebih dahulu.',
            ),
        ),
    ),
);
