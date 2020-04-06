var basis_url = 'http://localhost:82/php-kmt/publik'

$(function () {
	$('.modal-mhs-tambah').on('click', function(){
		$('#modal-mhs-label').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('#nama').val('');
		$('#npm').val('');
		$('#email').val('');
	});
	$('.modal-mhs-ubah').on('click', function(){
		$('#modal-mhs-label').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		const npm = $(this).data('npm');
		//console.log(npm);
		$.ajax({
			url: basis_url + '/mahasiswa/getubah',
			data: {npm : npm},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#nama').val(data.nama);
				$('#npm').val(data.npm);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
			}
		});
		$('.modal-body form').attr('action', basis_url + '/mahasiswa/ubah');
	});
});