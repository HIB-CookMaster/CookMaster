// Heart Animation
let heartClassList = document.getElementsByClassName('fa-heart');

for(let i = 0; i < heartClassList.length; i ++){
    heartClassList[i].addEventListener("click", (e) => {

        setTimeout(function() {
            e.target.classList.remove("animate__animated", "animate__bounceIn")
        }, 1000);

        if(e.target.classList.contains("text-danger")){
            e.target.classList.remove("text-danger", "fa-solid", "animate__animated", "animate__bounceIn")
            e.target.classList.add("fa-regular", "animate__animated", "animate__bounceIn");

        } else if(!e.target.classList.contains("text-danger")){
            e.target.classList.remove("fa-regular", "animate__animated", "animate__bounceIn")
            e.target.classList.add("text-danger", "fa-solid", "animate__animated", "animate__bounceIn")
        }


    })
}
// Heart Animation end


window.addEventListener('load', function() {
    var loader = document.getElementById('loader');
    loader.style.animation = "fadeOut 0.2s linear forwards";

    // Attend 1 seconde pour que l'animation de fondu soit terminée, puis définit le display à none
    setTimeout(function() {
        loader.style.display = "none";
    }, 200);
});