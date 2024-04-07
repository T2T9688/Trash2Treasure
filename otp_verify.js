function otp_verify1() {
    // alert("ok1");
    const email = document.getElementById("user_email").value;

    let otp_val1 = Math.floor((Math.random() * 999) + 100);
    let emailbody = `<h2>Your OTP is </h2>${otp_val1}`;
    alert(email);

    Email.send({
        SecureToken : "548b63b9-e913-4e3a-967f-3072030474be",
        To : email,
        From : "kamblesudarshan897@gmail.com",
        Subject : "EMail Verification",
        Body : emailbody,
    }).then(

      message => {
            if(message==="Ok"){
                alert("OTP sent to Your Email "+email);
                const otp_inp = document.getElementById("otp_inp");
                const otp_but = document.getElementById("verifyotp");
                otp_but.addEventListener('click',() => {
                    if(otp_inp.value==otp_val1){
                        alert("Email address is Verified.");
                    }
                    else{
                        alert("Invalid OTP");
                    }
                })
            }
            else{
                alert("Error");
            }
      }
    //   alert(message)
    );
}