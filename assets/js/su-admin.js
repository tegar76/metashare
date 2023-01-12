function base_url() {
	var pathparts = location.pathname.split("/");
	if (location.host == "localhost:8080" || location.host == "localhost") {
		var url = location.origin + "/" + pathparts[1].trim("/") + "/"; // http://localhost/siberhyl/
	} else {
		var url = location.origin + "/"; // http://localhost/
	}
	return url;
}
const BASEURL = base_url();

$(document).ready(function () {
	var csrfName = $(".csrf_token").attr("name");
	var csrfHash = $(".csrf_token").val();
	$("#data-admin").DataTable();
	$("#data-admin").on("click", ".delete-admin", function (e) {
		e.preventDefault();
		var code = $(e.currentTarget).attr("code-admin");
		var dataJson = {
			[csrfName]: csrfHash,
			code: code,
		};
		Swal.fire({
			title: "Hapus Data Admin",
			text: "Anda yakin ingin menghapus data admin ini!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Ya, Hapus!",
		}).then((result) => {
			if (result.value) {
				$.ajax({
					type: "POST",
					url: BASEURL + "su-admin/master-data/delete_admin",
					data: dataJson,
					beforeSend: function () {
						swal.fire({
							imageUrl: BASEURL + "assets/logo/rolling.png",
							title: "Menghapus Data Admin",
							text: "Silahkan Tunggu",
							showConfirmButton: false,
							allowOutsideClick: false,
						});
					},
					success: function (data) {
						if (data.success == false) {
							swal.fire({
								icon: "error",
								title: "Menghapus Data Admin Gagal",
								text: data.message,
								showConfirmButton: false,
								timer: 1500,
							});
						} else {
							swal.fire({
								icon: "success",
								title: "Menghapus Data Admin Berhasil",
								text: data.message,
								showConfirmButton: false,
								timer: 1500,
							});
							window.location = BASEURL + "su-admin/master-data/data_admin";
						}
					},
					error: function () {
						swal.fire(
							"Penghapusan Data Admin Gagal",
							"Anda tidak dapat menghapus data admin yang masih bertugas!!",
							"error"
						);
					},
				});
			}
		});
	});
});
