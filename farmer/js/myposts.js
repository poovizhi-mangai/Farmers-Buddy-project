function confirm_del() {
        var ans = confirm("Do you want to delete this post?");
        return ans;
}

function confirm_up() {
        var ans = confirm("Do you want to update this post?");
        return ans;
}

function validate_update(qty,price,desp,doh,doe,opt){
        //alert('qty');
    var qty1 = document.updatepost.quantity.value;
    var price1 = document.updatepost.price.value;
    var desp1 = document.updatepost.desp.value;
    if((qty== qty1) && (price==price1) && (desp==desp1)) {
            if(document.updatepost.selpass.value == 'fruitsandveges') {
                var doh1=document.updatepost.doh.value;
                var doe1=document.updatepost.doe.value;
                if(doh==doh1 && doe==doe1) {
                        alert("NO UPDATIONS");
                        window.location.href="myposts.php";
                }
                else {
                        return true;
                }
            }
            else if(document.updatepost.selpass.value == 'machines') {
                    if(document.updatepost.option.value == opt) {
                        alert("NO UPDATIONS");
                        window.location.href="myposts.php";
                    }
                    else {
                        return true;
                    }
            }
            else if(document.updatepost.selpass.value == 'seeds') {
                alert("NO UPDATIONS");
                window.location.href="myposts.php"; 
            }
    }
    return true;
}