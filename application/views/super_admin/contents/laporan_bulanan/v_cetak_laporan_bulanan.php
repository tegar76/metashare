<!DOCTYPE html>
<html lang="en">

<body>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/icons/logo_metashare_small.png">
		<title><?= $title ?></title>

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
				color: #5b5b5b;
				text-align: right;
			}

			.address {
				font-size: 12px;
				color: #6b6b6b;
				margin-left: 140px;
				margin-right: 140px;
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

			td,
			th {
				padding: 3px 7px 3px 7px;
				word-break: break-word;
				/* fit item */
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
						<div class="sub-title">Bulan <?= $date_report ?></div>
						<div class="address">Gang Bugenvile Karangmiri,Sumampir, Kec Purwokerto Utara, Kab. Banyumas, Jawa Tengah 53125 Telp.087899703471</div>
					</div>
					<div class="date">
						<p>Tanggal Cetak : <?= $export_date ?> WIB</p>
					</div>

					<div>
						<table>
							<thead>
								<tr>
									<th style="width: 5%;">No</th>
									<th style="width: 7%;">Kode</th>
									<th style="width: 9%;">Tanggal</th>
									<th style="width: 10%;">Sumber Order</th>
									<th style="width: 11%;">Nama Kustomer</th>
									<th style="width: 9%;">Jenis</th>
									<th style="width: 10%;">Kategori</th>
									<th style="width: 8%;">Model</th>
									<th style="width: 8%;">Harga</th>
									<th style="width: 12%;">Keterangan</th>
									<th style="width: 8%;">Status</th>
									<th style="width: 8%;">Admin</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($report as $item) : ?>
									<tr>
										<td><?= $item['nomor']; ?></td>
										<td><?= $item['code']; ?></td>
										<td><?= $item['date']; ?></td>
										<td><?= $item['source']; ?></td>
										<td><?= $item['customer']; ?></td>
										<td><?= $item['type']; ?></td>
										<td><?= $item['category']; ?></td>
										<td><?= $item['model']; ?></td>
										<td><?= $item['price']; ?></td>
										<td><?= $item['desc']; ?></td>
										<td><?= $item['status']; ?></td>
										<td><?= $item['admin']; ?></td>
									</tr>
								<?php endforeach ?>
									<th colspan="6" style="text-align: right; border-right : hidden">Jumlah Harga : </th>
									<th colspan="4">Rp. <?php echo $total ?></th>
								</tr>
							</tbody>
							<!-- Tampilkan Seluruh data -->
						</table>
						<div class="keterangan">
							<div>
								<h4>Dari Jenis Undangan Pernikahan Digital </h4>
								<div class="row">
									<div class="column">Total Kategori Spesial Yang Terorder</div>
									<div class="column"> : <?= $totalRow['special'] ?></div>
									<div class="column">Total Kategori Standard Yang Terorder</div>
									<div class="column"> : <?= $totalRow['standard'] ?></div>
									<div class="column">Total Kategori Basic Yang Terorder</div>
									<div class="column"> : <?= $totalRow['basic'] ?></div>
								</div>
							</div>
							<div style="margin-top: -10px;">
								<h4>Dari Sumber Order </h4>
								<div class="row">
									<div class="column">Marketplace</div>
									<div class="column"> :  <?= $totalRow['marketplace'] ?></div>
									<div class="column">Shopee</div>
									<div class="column"> : <?= $totalRow['shopee'] ?></div>
									<div class="column">Lazada</div>
									<div class="column"> : <?= $totalRow['lazada'] ?></div>
									<div class="column">Tokopedia</div>
									<div class="column"> : <?= $totalRow['tokopedia'] ?></div>
								</div>
							</div>
							<div>
								<h4>Keterangan : </h4>
								<div class="row">
									<div class="column">Total Undangan Belum Dikerjakan</div>
									<div class="column"> : <?= $totalRow['unprocessed'] ?></div>
									<div class="column">Total Undangan Dalam Proses Pengerjaan</div>
									<div class="column"> : <?= $totalRow['processed'] ?></div>
									<div class="column">Total Undangan Sudah Dikerjakan</div>
									<div class="column"> : <?= $totalRow['finished'] ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>
