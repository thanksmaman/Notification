let button = document.querySelector("button");
button.addEventListener('click',()=>{
    if(!window.Notification) return ;
   Notification
   .requestPermission()
   .then(showNotification)
});

function showNotification(permission){
    if(permission !== "granted") return;
    let notificationn = new Notification('My Title', {
        body:"Hi, how are you today?",
        icon:"guinee.jpg"
    })
}