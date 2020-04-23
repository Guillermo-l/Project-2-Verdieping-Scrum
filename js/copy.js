document.getElementById('copy-button').addEventListener('click', function(){
    document.getElementById('link').select();
    document.execCommand('copy');
})