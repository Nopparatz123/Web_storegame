// fetch api

function registerUser(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let email = document.getElementById("email").value;

    fetch('./backend/routes/auth.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ 
            action: "register", 
            username: username, 
            password: password, 
            email: email 
        })
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        if(data.status === "success") {
            window.location.href = "/Web_storegame/login";   
        }
    })
    .catch(error => console.error('error:', error))
}
