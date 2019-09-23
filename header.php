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
            'id' => 'id="example2"',
            'bahasa' => 'C++',
        ],
          [
          	'img' => 'img/html.png',
            'id' => 'id="example3"',
            'bahasa' => 'HTML',
        ],
          [
          	'img' => 'img/java.png',
            'id' => 'id="example4"',
            'bahasa' => 'JAVA',
        ],  [
        	'img' => 'img/css.png',
            'id' => 'id="example5"',
            'bahasa' => 'CSS',
        ],  [
        	'img' => 'img/php.png',
            'id' => 'id="example6"',
            'bahasa' => 'PHP',
        ],  [
        	'img' => 'img/sql.png',
            'id' => 'id="example7"',
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
	?>