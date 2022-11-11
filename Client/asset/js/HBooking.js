let nameError = document.getElementById('errName');
let mailError = document.getElementById('errmail');
let conError = document.getElementById('errcon');
let hError = document.getElementById('errHN');
let roomError = document.getElementById('errR');
let costError = document.getElementById('errCost');
function validateHbooking(){

    if((!nameCheck() && !emailCheck() && !conCheck() && !hCheck() && !rCheck() && !costCheck()) || (!nameCheck() || !emailCheck() || !conCheck() || !hCheck() || !rCheck() || !costCheck()))
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
    let name = document.getElementById('name').value;
    if(name === "")
        {
            nameError.innerHTML="Username is required";
            return false;
        }  
    else
        {
            nameError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
            return true;
            
        }           
} 
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
        mailError.innerHTML="Email is required";
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
function conCheck()
{
    let  contact= document.getElementById('contact').value;
    if(contact ===  "")
            {
                conError.innerHTML="Contact No. is required";
                return false;
            } 
    else{
            if(contact.length != 11) {
                conError.innerHTML="Contact_No must contain atleast 11 digits"; 
                return false;
            } 
            else{
                conError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
                return true;
            }
            
        }
}
function hCheck()
{
    let hName = document.getElementById('hName').value;
    if(hName === "")
        {
            hError.innerHTML="Hotel is required!";
            return false;
        }  
    else
        {
            hError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
            return true;
            
        }           
} 
function rCheck()
{
    let room = document.getElementById('nRoom').value;
    if(room === "")
        {
            roomError.innerHTML="Room No. is required!";
            return false;
        }  
    else
        {
            roomError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
            return true;
            
        }           
} 
function costCheck()
{
    let cost = document.getElementById('tAmount').value;
    if(cost === "")
        {
            costError.innerHTML="Total amount is required!";
            return false;
        }  
    else
        {
            costError.innerHTML= '<i class="fa-solid fa-square-check"></i>';
            return true;
            
        }           
} 