function doSomething() {
    var checkedValue = 0;
    var totBoxes = 0;
    var inputElements = document.getElementsByClassName('messageCheckbox');
    for(var i=0; inputElements[i]; ++i){
        totBoxes++;
        if(inputElements[i].checked){
            checkedValue = checkedValue+1;
        }
    }
    var percentageValue = Math.round((checkedValue/totBoxes)*100);
    document.getElementById('form-value').innerText = "Your Score is : " + percentageValue.toString()+"%";
    return false;
}

function doSavings() {
    var checkedValue = 0;
    var totBoxes = 0;
    var inputElements = document.getElementsByClassName('savings');
    for(var i=0; inputElements[i]; ++i){

        if(inputElements[i].checked){
            totBoxes++;
            checkedValue = checkedValue + Number(inputElements[i].value);
        }
    }
    var percentageValue = Math.round((checkedValue/totBoxes));
    document.getElementById('savings-value').innerText = "Your Savings is : " + percentageValue.toString()+"%";
    return false;
}


$('#exampleModal').on('shown.bs.modal', function () {
    $('#exampleModal').trigger('focus')
})

$(window).on("scroll", function() {
    var scrollPos = $(window).scrollTop();
    if (scrollPos <= 0) {
        $(".fixed-btn").fadeOut();
    } else {
        $(".fixed-btn").fadeIn();
    }
});