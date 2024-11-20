// Dapatkan semua tautan navbar yang memiliki hash (#) untuk target scroll
document.querySelectorAll('.nav a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah perilaku klik default

        // Ambil nilai href dan gunakan untuk mendapatkan elemen target
        const targetId = this.getAttribute('href').split('#')[1];
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            // Scroll ke elemen target dengan efek halus
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
        } else {
            // Jika elemen belum ada (karena belum di halaman index), arahkan ke halaman index terlebih dahulu
            window.location.href = this.getAttribute('href');
        }
    });
});
