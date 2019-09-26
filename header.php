<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="img/png" href="img/ra.png" />
  <title>RENALDY</title>
  <link rel="stylesheet" type="text/css" href="dist/semantic.css">	
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="dist/components/progress.css">
  <link rel="stylesheet" type="text/css" href="dist/css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="dist/components/progress.css">
  <link rel="stylesheet" type="text/css" href="dist/components/item.css">
  <link rel="stylesheet" type="text/css" href="dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/label.css">
</head>
<body>
	<?php
	$pendidikan =[
	[ 
		'year' => '2009-2015',
		'school' => 'SDN SIMOKERTO 6 139',
		'location' => 'Surabaya',
		'img' => 'img/sd.jpg',
	],
	[
		'year' => '2015-2018',
		'school' => 'SMPN 27 SURABAYA',
		'location' => 'Surabaya',
		'img' => 'img/smp.jpg',
	],
	[
		'year' => '2018-Sekarang',
		'school' => 'SMKN 2 SURABAYA',
		'location' => 'Surabaya',
		'img' => 'img/smk.jpg',
		],
	];
    $profil =[
        [
            'profil' => 'MY PROFILE',
            '1nama' => 'Perkenalkan nama saya ',
            'nama' => 'Renaldy Permana Sundawa',
            'ttl' => 'Surabaya, 12 Mei 2003',
            'alamat' => 'Jl. Tenggumung baru no 170',
            'no_telp' => ':+6281248689876',
            'email' => 'renaldypermana7@gmail.com',
            'hobi' => 'Berenang dan Berlari',
        ],
    ];
    $keahlian =[
        [
        	'img' => 'img/cpp2.jpg',
            'id' => 'example2',
            'bahasa' => 'C++',
        ],
          [
          	'img' => 'img/html.png',
            'id' => 'example3',
            'bahasa' => 'HTML',
        ],
          [
          	'img' => 'img/java.png',
            'id' => 'example4',
            'bahasa' => 'JAVA',
        ],  [
        	'img' => 'img/css.png',
            'id' => 'example5',
            'bahasa' => 'CSS',
        ],  [
        	'img' => 'img/php.png',
            'id' => 'example6',
            'bahasa' => 'PHP',
        ],  [
        	'img' => 'img/sql.png',
            'id' => 'example7',
            'bahasa' => 'MYSQL',
        ],
    ];
$portofolio =[

        [
          'img' => 'img/dashboard.png',
          'data' => 'dashboard"',
          'keterangan' => 'ini adalah tampilan dashboard',
        ],
        [
          'img' => 'img/data-siswa.png',
          'data' => 'dashboard"',
          'keterangan' => 'ini adalah tampilan data siswa',

        ],
        [
          'img' => 'img/form-izin.png',
          'data' => 'dashboard',
          'keterangan' => 'ini adalah tampilan form izin',
        ],
        [
          'img' => 'img/about.png',
          'data' => 'coffee',
          'keterangan' => 'ini adalah Halaman tentang Blu COFFEESHOP',

        ],
        [
          'img' => 'img/testimoni.png',
          'data' => 'coffee',
          'keterangan' => 'ini adalah halaman testimoni Pelanggan',
        ],
    ];  
$home =[
        [
            'href' => 'v1.php',
            'img' => 'img/v1.jpg',
            'judul' => 'WEBSITE V1',
            'deskripsi' => 'example7',
        ],
        [
          'href' => 'v2.php',
          'img' => 'img/v2.jpg',
          'judul' => 'WEBSITE V2',
          'deskripsi' => 'example7',
        ],
      ];

$portofolio1 = [ 
    [
    'tag'       => 'html dan css',
    'nama'      => 'website administrator',
    'judul'     => 'DASHBOARD SEDERHANA ',
    'deskripsi' => 'Pembuatan Dashboard admin Pegawai/siswa. Menggunakan HTML 5 dan CSS 3.Dengan menu navbar di samping dan ada form dan hasil tabel di administrator tersebut',
    'galery'=> 'administrator',
    'img1' => [
      'img/login.png',
      'img/dashboard.png',
      'img/data-siswa.png',
      'img/form-izin.png'
    ],
    'id' => "0",
  ], [
    'tag'       => 'html dan css',
    'nama'      => 'Blu coffeeshop',
    'judul'     => 'BLU Coffeeshop ',
    'deskripsi' => 'example',
    'galery'=> 'coffeeshop',
    'img1' => [
      'img/coffeeshop.png',
      'img/about.png',
    ],
    'id' => '1',
    ],
 
  ];
	?>