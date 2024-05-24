document.addEventListener('DOMContentLoaded', function () {
    const copyButton = document.getElementById('copyButton');
    if (copyButton) {
        copyButton.addEventListener('click', function () {
            const shortUrl = document.querySelector('.result a').href;
            navigator.clipboard.writeText(shortUrl).then(() => {
                alert('Kısaltılmış URL kopyalandı: ' + shortUrl);
            }).catch(err => {
                console.error('Kopyalama hatası: ', err);
            });
        });
    }
});
