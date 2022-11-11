let nameError = document.getElementById('errName');
let passError = document.getElementById('errPass');
function validateForm(){

    if((!nameCheck() && !passCheck()) || (!nameCheck() || !passCheck()))
    {
        return false;

    }
    else
    {
        ajax(); 
        return true;
    }        
}

function nameCheck()
{
    let username = document.getElementById('username').value;
    if(username === "")
        {
            nameError.innerHTML="Username can not be Null";
            return false;
        }  
        else
        {
            errName.innerHTML= '<i class="fa-solid fa-square-check"></i>';
            return true;
            
        }           
} 




function passCheck()
{
    let  password= document.getElementById('password').value;
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


function ajax(){
    let username = document.getElementById('username').value;
    let  password= document.getElementById('password').value;
	
    let json = {'username': username,'password'	: password}
	let userl = JSON.stringify(json);
	let obj = {username: username, password: password}

	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../../controller/Check_Login.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+userl);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			let obj = JSON.parse(this.responseText);
			alert(obj.username);
		}
	}
}



