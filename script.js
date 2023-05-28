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


const heroImage1 = document.querySelector('.hero #image1');
const heroImage2 = document.querySelector('.hero #image2')

const arrow = document.getElementById("right_arrow")

const toTheLeft1 = [
    {
        transform: "translatex(-100%)"
    }
]

const toTheLeft1Timing = {
    duration: 700, 
    iterations: 1,
};
const toTheLeft2Timing = {
    duration: 699, 
    iterations: 1,
};


arrow.addEventListener("click", ()=>{
    heroImage1.animate(toTheLeft1,toTheLeft1Timing)
    heroImage2.animate(toTheLeft1,toTheLeft2Timing)
    heroImage2.style.display = "block";
})

