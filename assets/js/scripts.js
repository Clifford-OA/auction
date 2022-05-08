function toggleBidForm() {
    var y = document.getElementById('slideThree');
    var x = document.getElementById('bid-form');
    if(y.checked){
        x.style.visibility = 'visible';
    }else {
        x.style.visibility = 'hidden';
    }
}

