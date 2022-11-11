let errReq = document.getElementById('errReq');
    function SHotels() {
        if(Check())
        {
            let find = document.getElementById("F_Hotels").value;
             let hotel = {'fHotels': find};
             let json = JSON.stringify(hotel);
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../../view/ShowHInfo.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
             xhttp.send('data='+json);
            xhttp.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                let h= JSON.parse(this.responseText);
                alert(h.find);
                }
            } 
            return true;
        }
        else
            {
                return false;
            }
}
function Check(){
    let find = document.getElementById("F_Hotels").value;
        if(find === "")
        {
            errReq.innerHTML="Write something to find";
            return false;
        }  
        else
        {
            errReq.innerHTML= '<i class="fa-solid fa-square-check"></i>';
            return true;
        }
    }
