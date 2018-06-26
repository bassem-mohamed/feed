function myMemberInfo() {
    var myRequest;
    if(window.XMLHttpRequest){
        myRequest = new XMLHttpRequest();
    }else {
        myRequest = new ActiveXObject("Microsoft.XMLHttp")
    }

    myRequest.onreadystatechange = myDate;
    myRequest.open("POST","select.php",true);
    myRequest.send();
}
myMemberInfo();
function  myDate() {
    var table = document.getElementById("show");
    if (this.readyState == 4 && this.status == 200)
    {
        table.innerHTML = this.responseText;
    }
    else {
        table.innerHTML = "<p> some thing worng</p>"
    }
}
document.getElementById("button").onclick =myMemberInfo;