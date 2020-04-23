document.getElementById('submit').addEventListener('click', function () {
    document.querySelector('.pop-up').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click', function () {
    document.querySelector('.copy-done').style.display = 'none';
});

document.getElementById('copy-button').addEventListener('click', function(){
    document.querySelector('.pop-up').style.display = 'none';
    document.querySelector('.copy-done').style.display = 'flex';
});