let btnContact = document.getElementById('btnContact');
let btnEnvoi = document.querySelector('form button')
let goUp = document.getElementById("goUp");

btnContact.addEventListener('mouseover', function() {
    btnContact.style.animation = "pulse 2s infinite";
})
btnContact.addEventListener('mouseout', function() {
    btnContact.style.animation = "none";
})
btnEnvoi.addEventListener('mouseover', function() {
    btnEnvoi.style.animation = "pulse 2s infinite";
})
btnEnvoi.addEventListener('mouseout', function() {
    btnEnvoi.style.animation = "none";
    btnEnvoi.style.boxShadow = 'none';
})
// btnEnvoi.addEventListener('click', function(e) {
//     e.preventDefault();
// })

window.addEventListener("scroll", function() {

    if(window.scrollY > 300) {
        goUp.classList.remove('animate__fadeOut');
        goUp.style.display = 'block';
        goUp.classList.add("animate__animated");
        goUp.classList.add("animate__fadeIn");
    }
    else {
        goUp.classList.add('animate__fadeOut');
    }
})