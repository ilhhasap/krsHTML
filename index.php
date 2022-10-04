<?php

    require('db/index.php');
    
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KRS - 210103020</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700&family=Montserrat:ital,wght@0,700;1,700&display=swap');

    * {
        font-family: 'Inter' !important;
    }

    .text-small {
        font-family: 'Inter';
        font-weight: 700;
        font-size: 18px;
    }

    .text-small span {
        font-weight: normal;
    }

    .krs-title {
        font-family: 'Montserrat';
        font-weight: 700;
        font-style: italic;
        text-decoration: underline;
    }
    </style>
</head>

<body>


    <div class="container text-center pt-5 p-5">
        <!-- Membuat 1 Baris Horizontal -->
        <div class="d-flex flex-row mb-3 justify-content-between">
            <!-- Membuat 2 Kolom Vertical (Untuk Logo dan Text KRS ) -->
            <div class="d-flex flex-column p-2">
                <div class="p-2">
                    <img src="assets/logo.png" width="800px">
                </div>
                <div class="p-2 text-end">
                    <h1 class="krs-title"> Kartu Rencana Studi</h1>
                </div>
            </div>
            <!-- Menempelkan Foto, 1 row dengan Logo dan KRS  -->
            <div class="p-2">
                <img src="assets/photo.png" width="200px">
            </div>
        </div>

        <!-- Membuat 1 Baris Horizontal -->
        <div class="d-flex flex-row justify-content-between">
            <!-- Membagi 2 Kolom (Kiri dan kanan) -->

            <!-- Membuat bbrp kolom vertikal -->
            <div class="d-flex flex-column text-start">
                <div class="">
                    <pre class="text-small">No. Daftar               :   <span><?= "202120347"?></pre>
                </div>
                <div class="">
                    <pre class="text-small">NIM                            :   <span><?= "210103020"?></pre>
                </div>
                <div class="">
                    <pre class="text-small">Nama                        :   <span><?= "Ilham Tristadika Saputra"?></pre>
                </div>
                <div class="">
                    <pre class="text-small">Program Studi      :   <span><?= "Teknik Informatika"?></pre>
                </div>
            </div>
            <!-- Membuat bbrp kolom vertikal -->
            <div class="d-flex flex-column text-start">
                <div class="">
                    <pre
                        class="text-small">Pembimbing Akademik       :   <span><?= "Dessy Ambarsari, S.E., M.M,"?></pre>
                </div>
                <div class="">
                    <pre class="text-small">Jenjang                                      :   <span><?= "S1"?></pre>
                </div>
                <div class="">
                    <pre class="text-small">Jenis Daftar                             :   <span><?= "Regular"?></pre>
                </div>
                <div class="">
                    <pre
                        class="text-small">Semester                                  :   <span><?= "2022/2023 Ganjil"?></pre>
                </div>
            </div>
        </div>

        <!-- TABEL -->
        <div class="d-flex mt-4">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr class="align-middle">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Kelas</th>
                        <th rowspan="2">Kode Mata Kuliah</th>
                        <th rowspan="2">Mata Kuliah</th>
                        <th rowspan="2">SKS</th>
                        <th colspan="2">Paraf Pengawas Ujian</th>
                    <tr>
                        <th>UTS</th>
                        <th>UAS</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datas as $data) : ?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $data['kelas'];?></td>
                        <td><?= $data['kode'];?></td>
                        <td class="text-start"><?= $data['matkul'];?></td>
                        <td><?= $data['sks'];?></td>
                        <td><?= $data['uts'];?></td>
                        <td><?= $data['uas'];?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <!-- AKHIR TABEL -->
        </div>
        <!-- AKHIR TABEL -->


        <div class="d-flex flex-row justify-content-between">

            <!-- Bagian 1 -->
            <div class="">
                <img src="assets/barcode.png" width="200">
            </div>

            <!-- Bagian 2 -->
            <div class="d-flex flex-column justify-content-between">
                <div class="">
                    Mengesahkan, <br><br> Pembimbing Akademik
                </div>
                <div class="fw-bold">
                    Dessy Ambarsari, S.E., M.M,
                </div>
            </div>

            <!-- Bagian 3 -->
            <div class="d-flex flex-column justify-content-between">
                <div class="">
                    Surakarta,____________________ <br> <br>
                    Mahasiswa
                </div>
                <div class="fw-bold">
                    ILHAM TRISTADIKA SAPUTRA
                </div>
            </div>

            <!-- Bagian 4 -->
            <div class="text-small">
                <pre>Jumlah SKS        : <span>23</span></pre>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>