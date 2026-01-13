document.addEventListener('DOMContentLoaded', function() {
    
    const tombolHapus = document.querySelectorAll('.btn-danger');
    tombolHapus.forEach(tombol => {
        tombol.addEventListener('click', function(e) {
            if (!confirm('Yakin ingin menghapus data mahasiswa ini?')) {
                e.preventDefault();
            }
        });
    });

    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const nim = document.querySelector('input[name="nim"]').value;
            const nama = document.querySelector('input[name="nama"]').value;

            if (nim.length < 5) {
                alert('NIM terlalu pendek!');
                e.preventDefault();
            } else if (nama.trim() === "") {
                alert('Nama tidak boleh kosong!');
                e.preventDefault();
            }
        });
    }

    const notification = document.querySelector('.alert');
    if (notification) {
        setTimeout(() => {
            notification.style.display = 'none';
        }, 3000);
    }
});