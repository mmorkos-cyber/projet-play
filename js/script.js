document.querySelector("#close-sidebar").addEventListener("click", function () {
    document.querySelector('.sidebar').styles.display = 'none';
});


document.querySelector("#open-sidebar").addEventListener("click", function () {
    document.querySelector('.sidebar').styles.display = 'flex';
});
