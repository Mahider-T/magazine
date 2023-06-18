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

const heroImage = document.querySelector('.hero img');
const photos = ['Images/image2.jpg','Images/image3.jpg','Images/image4.jpg']
function changeHeaderImage(){
    let index = 0;
    
    function changeImage()
    {
        heroImage.src = photos[index];
        (index > 1)? index = 0: index++; 
    }
    window.onload = () => {
        setInterval(changeImage,5000)
    } 
}
// changeHeaderImage();

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
      }
    });
  });
  
observer.observe(document.querySelectorAll('.fade-in'));
  

let linkarray = Array.from(document.getElementsByClassName("nav-link"));
linkarray[0].onclick = function(){
    linkarray[0].style.color = "red";
}

// linkarray.forEach(element => element.onclick =  function(){
//     element.className = "activated";
//     element.siblings.className = "";
// }
// )

$('.navigation a').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
    });
