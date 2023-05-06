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


