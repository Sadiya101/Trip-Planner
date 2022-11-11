let nameError = document.getElementById('errName');
let mailError = document.getElementById('errmail');
let dobError = document.getElementById('errdob');
let passError = document.getElementById('errPass');
let CpassError = document.getElementById('errCPass');
let fileError = document.getElementById('errFile');
function validateSignupForm(){

    // fileCheck();
    if((!nameCheck() && !emailCheck() && !passCheck() && !cPassCheck()) || (!nameCheck() || !emailCheck() || !passCheck() || !cPassCheck()))
    {
        return false;
    }
    else
    {
        return true;
    }        
}

function nameCheck()
{
    let username = document.getElementById('name').value;
    if(username === "")
        {
            nameError.innerHTML="Username can not be Null";
            return false;
        }  
    else
        {
            nameError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
            return true;
            // if(validName())
            // {
            //     errName.innerHTML= '<i class="fa-solid fa-circle-check"></i>';
            //     return true;   
            // }
            // else
            // {
            //     nameError.innerHTML=" Username can have uppercase, lowercase and digit and special charcter! ";
            //     return false;
            // }
            
        }           
} 

//  function validName() 
//  {
//     let username = document.getElementById('name').value;
//     const alphabet = "abcdefghijklmnopqrstuvwxyz";
//     const alphabetUp = toUpperCase("abcdefghijklmnopqrstuvwxyz");
//     const numbers ="0123456789";
//     const sChar= "-._";
//     if(username.includes(alphabet)||username.includes(alphabetUp) ||username.includes(number) ||username.includes(sChar) )
//     {
//         errName.innerHTML= '<i class="fa-solid fa-circle-check"></i>';
//         return true;   
//     }
//     else
//     {
//         nameError.innerHTML=" Username can have uppercase, lowercase and digit and special charcter! ";
//         return false;
//     }

//  }

function emailCheck()
{
    var email = document.getElementById('email').value;   
    var check = validEmail();
 if(check)
 {
    mailError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
    return true;
 }
 else
 {
    return false;
 }
}
function validEmail()
{
    var email = document.getElementById('email').value;
    if(email === "")
    {
        mailError.innerHTML="Email can not be Null";
        return false;
    }
    var atPos = email.indexOf ("@"); 
    if(atPos < 1) 
    {
        mailError.innerHTML="@ can not be in the first position";
        return false;
    }
    
    var dotPos = email.indexOf(".");
    if(dotPos <= atPos + 2) 
    {
        mailError.innerHTML="Invalid Structure";
        return false;
    }
    if (dotPos === email.length - 1) 
    {
        mailError.innerHTML="'.' can not be in the last position";
        return false;
    }
    return true;

}

function dobCheck()
{
    var date = document.getElementById('dob').value; 
   // var date = this.getValue();
    var CurDate = new Date();
    //Validate birth date some time before today's date and
    //within 120 years
    if(date < CurDate && CurDate.getFullYear() - date.getFullYear() < 120)
    {
        dobError.innerHTML= '<i class="fa-solid fa-circle-check"></i>'; 
        return true;
    } else{
        dobError.innerHTML="Invalid Structure";
       return false;
    }
}

function passCheck()
{
    let  password= document.getElementById('pass').value;
    if(password ===  "")
            {
                passError.innerHTML="Password can not be Null";
                return false;
            } 
    else{
            if(password.length < 8) {
                passError.innerHTML="Password must contain atleast 8 charchters"; 
                return false;
            } 
            else{
                passError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
                return true;
            }
            
        }
}

function cPassCheck()
{
    let  Cpass= document.getElementById('cpass').value;
    let  password= document.getElementById('pass').value;
    if(Cpass ===  "")
            {
                CpassError.innerHTML="Rewrite your password";
                return false;
            } 
    else{
            if(Cpass === password) 
            {
                CpassError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
                return true;
            } 
            else
            {
                CpassError.innerHTML="Password did not matched!"; 
                return false;
                
            }
            
        }

}

function fileCheck()
{
    let  file = document.getElementById('file').value;
    let jpg = email.includes (".jpg"); 
    var jpeg = email.includes (".jpeg"); 
    var png = email.includes (".png"); 
    if(jpg || jpeg || png)
    {
        fileError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
        return true;
    }
    else
    {
        fileError.innerHTML= 'Only .jpg/.jpeg/.png files are acceoted';
        return false;

    }

}


