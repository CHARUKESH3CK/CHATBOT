
window.onload = function() {
    var otp = Math.floor(Math.random() * 10000); 
    localStorage.setItem("get_otp",otp);
    }