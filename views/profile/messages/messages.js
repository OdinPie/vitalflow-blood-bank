let form = document.querySelector(".text-form");
let message = form.querySelector(".input");
let chatBox = document.querySelector(".chat-box");
function insertChat(event){
    event.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "views/profile/messages/insert-chat.php",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                message.value = "";
            }
        }
    }
    const formdata = new FormData(form);
    xhr.send(formdata);
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "views/profile/messages/get-chat.php",true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                // console.log(data);
                chatBox.innerHTML = data;
            }
        }
    }
    const formdata = new FormData(form);
    xhr.send(formdata);
}, 500);