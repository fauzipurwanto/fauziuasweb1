function startlog(){
	var net1 = document.getElementById('username').value + document.getElementById('password').value;
	var net2 = ('admin') + ('admin');


		if (net1 == net2) {
				var logakses = document.getElementById('akses').innerHTML = 'Login Berhasil';
				
		}
		else {
				var logakses = document.getElementById('akses').innerHTML = 'Password Salah';
		}
};