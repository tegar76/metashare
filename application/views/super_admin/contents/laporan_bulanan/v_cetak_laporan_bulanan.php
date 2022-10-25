<!DOCTYPE html>
<html lang="en">

<body>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>/assets/icons/logo_metashare_small.png">
        <title><?= $title?></title>

		<!-- style -->
		<style>
			body {
				width: 230mm;
				height: 100%;
				margin: 0 auto;
				padding: 0;
				font-size: 12pt;
				background: rgb(204, 204, 204);
                letter-spacing: 0.5px;
                font-family: 'Times New Roman', Times, serif;
                background-color: white;
			}

			* {
				box-sizing: border-box;
				-moz-box-sizing: border-box;
			}

			.main-page {
				width: 210mm;
				min-height: 297mm;
				margin: 10mm auto;
				background: white;
				box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
			}

			.sub-page {
				padding: 1cm;
				/* height: 297mm; cek hwwight a4*/
			}

			@page {
				size: A4;
				margin-top: 20px;
			}

			@media print {

				html,
				body {
					width: 210mm;
					height: 297mm;
				}

				.main-page {
					margin: 0;
					border: initial;
					border-radius: initial;
					width: initial;
					min-height: initial;
					box-shadow: initial;
					background: initial;
					page-break-after: always;
				}
			}

			.title-page {
				text-align: center;
			}

			.title {
				font-size: 18px;
				color: #333333;
				padding-bottom: 5px;
			}

			.sub-title {
				font: 13px;
                color: #333333;
				padding-bottom: 5px;
			}

			.date {
				font-size: 12px;
				color: #6b6b6b;
				text-align: right;
			}

            table {
	            table-layout: fixed;
                width: 100%;
            }

			table,
			th,
			td {
				border: 1px solid;
				border-collapse: collapse;
				font-size: 12px;
				color: #4b4b4b;
				margin-top: 20px;
                text-align: left;
			}

            td, th {
                padding: 3px 7px 3px 7px;
                word-break: break-word; /* fit item */
            }

            thead th {
                background-color: #E3E7ED;
            }

            .footer-total {
                background-color: #e6ffee;
            }

            .column {
            float: left;
            width: 35%;
            }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            .keterangan h4 {
                font-size: 14px;
                font-weight: 400;
                margin-bottom: 7px;
            }
            .keterangan .column {
                font-size: 13px;
                color: #333333;
                margin-bottom: 5px;
            }

		</style>

	</head>

	<body>

		<div class="container">
			<!-- <br> -->
			<!-- <a role="button" href="" class="button" onclick="window.print();return false;">Unduh</a> -->
			<div class="main-page">
				<div class="sub-page">
					<div class="title-page">
						<div class="title">LAPORAN BULANAN</div>
						<div class="sub-title">Bulan September 2022</div>
						<div class="sub-title">Metashare By Paralogy</div>
					</div>
					<div class="date">
						<p>Tanggal Cetak : 01-10-2022 14:00 WIB</p>
					</div>

					<div>
						<table>
							<thead>
								<tr>
									<th style="width: 4%;">No</th>
									<th style="width: 10%;">Tanggal</th>
									<th style="width: 14%;">Nama Kustomer</th>
                                    <th style="width: 10%;">Jenis</th>
                                    <th style="width: 9%;">Kategori</th>
                                    <th style="width: 8%;">Model</th>
                                    <th style="width: 10%;">Harga</th>
                                    <th style="width: 11%;">Keterangan</th>
                                    <th style="width: 7%;">Status</th>
                                    <th style="width: 8%;">Admin</th>
								</tr>
							</thead>
							<tbody>
                                <?php for($i = 1; $i < 51; $i++) :?>
                                <tr>
                                    <td><?= $i?></td>
                                    <td>01-09-2022</td>
                                    <td>Heru Rudiansah</td>
                                    <td>Undangan Pernikahan</td>
                                    <td>Standard</td>
                                    <td>Model A</td>
                                    <td>Rp. 150000</td>
                                    <td>Belum Dikerjakan</td>
                                    <td>Tidak Aktif</td>
                                    <td>Tegar Kusuma</td>
                                </tr>
                                <?php endfor ?>
                                <tr class="footer-total">
                                    <th colspan="6" style="text-align: right; border-right : hidden">Jumlah Harga : </th>
                                    <th colspan="4">Rp. 500000</th>
                                </tr>
							</tbody>
							<!-- Tampilkan Seluruh data -->
						</table>
                        <!-- <div class="keterangan">
                            <h4>Keterangan : </h4>
                            <p>Total Kategori Spesial Yang Terorder : 
                                <span>99</span>
                            </p>
                            <p>Total Kategori Standard Yang Terorder : 
                                <span>99</span>
                            </p>
                            <p>Total Kategori Basic Yang Terorde : 
                                <span>99</span>
                            </p>
                            <p>Total Undangan  Belum Dikerjakan : 
                                <span>99</span>
                            </p>
                            <p>Total Undangan Dalam Proses Pengerjaan : 
                                <span>99</span>
                            </p>
                            <p>Total Undangan Sudah Dikerjakan : 
                                <span>99</span>
                            </p>
                        </div> -->
                       <div class="keterangan">
                            <h4>Keterangan : </h4>
                            <div class="row">
                                <div class="column">Total Kategori Spesial Yang Terorder</div>
                                <div class="column"> : 99</div>
                                <div class="column">Total Kategori Standard Yang Terorder</div>
                                <div class="column"> : 99</div>
                                <div class="column">Total Kategori Basic Yang Terorder</div>
                                <div class="column"> : 99</div>
                                <div class="column">Total Undangan  Belum Dikerjakan</div>
                                <div class="column"> : 99</div>
                                <div class="column">Total Undangan Dalam Proses Pengerjaan</div>
                                <div class="column"> : 99</div>
                                <div class="column">Total Undangan Sudah Dikerjakan</div>
                                <div class="column"> : 99</div>
                            </div>
                       </div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>
