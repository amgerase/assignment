function formvalidate(){
    var x = document.forms["form1"]["fname"].value;
    if(x == ""){
        alert("Name can't be blank");
        return false;
    }
}