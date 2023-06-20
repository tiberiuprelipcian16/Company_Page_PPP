let contactArea = document.getElementById("contactArea");
let commArea = document.getElementById("commArea");
let comentariu = document.getElementById("comentariu");

function showComm(){
    contactArea.style.display = "none";
    commArea.style.display = "inherit";
}

function showContact(){
    contactArea.style.display = "inherit";
    commArea.style.display = "none";
}


function afisare(){
    let nume = document.getElementById('nume').value;
    let mesaj = document.getElementById('mesaj').value;
    comentariu.innerHTML += "<div class=`email`><i class=`bi bi-envelope`></i>" + "<h4>" + nume + "</h4><p>" + mesaj + "</p></div>"; 
}
