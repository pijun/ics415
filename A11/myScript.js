function toggleAnswer(answer,question){
    if($(answer).is(":visible")){
        $(answer).hide();
        $(question).text($(question).text()+ "+");

    }else{
        $(answer).show();
        $(question).text($(question).text())+ "-";

    }
}

$(document).ready(function(){
    $("dd").hide();
});