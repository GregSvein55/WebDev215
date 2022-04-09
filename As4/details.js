function addRating(event){

    document.getElementById("rating").stepUp();
   
}

function subRating(event){

    document.getElementById("rating").stepDown();

}

function hideButton(){

    var num = document.getElementById("rating");

    if(rating == 0){
        document.getElementById("minus").style.visibility="hidden";
    }
    else if(rating == 5){
        document.getElementById("plus").style.visibility="hidden";
    }
    else{
        document.getElementById("plus").style.visibility="visible";
        document.getElementById("minus").style.visibility="visible";
    }


}