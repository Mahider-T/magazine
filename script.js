const body = document.querySelector('body');
// window.onscroll = () => {
    // if(window.scrollY > 500){
        // alert("Login please sir.")
    // }        
// }

// document.body.addEventListener('click', ()=>{

//     var loginWindow = window.open("", "Login", "width = 500, height = 500, visible = none");
//     // loginWindow.style.display = "none";
//     loginWindow.className = "login-window";
    
//     var usernameInput = document.createElement("input");
//     usernameInput.type = "text";
//     usernameInput.placeholder = "Username";
    
//     var passwordInput = document.createElement("input");
//     passwordInput.type = "password";
//     passwordInput.placeholder = "Password";
    
//     var loginButton = document.createElement("button");
//     loginButton.textContent = "Login";
    
//     loginWindow.appendChild(usernameInput);
//     loginWindow.appendChild(passwordInput);
//     loginWindow.appendChild(loginButton);
    
//     document.body.appendChild(loginWindow);
    
//     loginWindow.style.display = "block";

// })

//if user scrolls "too much" or clicks on anything pop up the sign up or login window.

const header = document.querySelector(".hero h2")

const hero = document.querySelector('.hero');
let background = hero.style.backgroundImage;

const arrow = document.getElementById("right_arrow")

const backgroundGone = [
    {
        transform: "translatex(-100%)"
    }
]

console.log(background)
const backgroundTiming = {
    duration: 2000, 
    iterations: 1,
};

arrow.addEventListener("click", ()=>{
    header.animate(backgroundGone,backgroundTiming)
})

