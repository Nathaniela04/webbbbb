function validateForm() {
    var email = document.getElementById('email').value.trim();
    var umur = document.getElementById('umur').value.trim();
    var nama = document.getElementById('nama').value.trim();
    var hobi = document.getElementById('hobi').value.trim();
    var tgl = document.getElementById('tgl').value.trim();

     var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Email tidak valid');
        return false;
    }
    if (isNaN(umur) || umur <= 0) {
        alert('Umur harus diisi dengan angka positif');
        return false;
    }
    if (nama === '') {
        alert('Nama harus diisi');
        return false;
    }
    if (hobi === '') {
        alert('Hobi harus diisi');
        return false;
    }
    if (tgl === '') {
        alert('Tanggal pengisian harus diisi');
        return false;
    }
    return true;
}

function resetForm() {
    document.getElementById('formInput').reset();
}
