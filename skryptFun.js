document.querySelectorAll('.funfact').forEach(item => {
    var header = item.querySelector('.funFactHeader');

    header.addEventListener('click', event => {
        var body = item.querySelector('.funFactBody')
        if(body.classList.contains("active"))
        {
            body.classList.remove("active");
        }
        else
        {
            body.classList.add("active");
        }
    });
});
