function validateform() {
    var pdt = document.sellfruitsandveges.pdt.value;
    if (!pdt || pdt.length === 0 || /^\s*$/.test(pdt)){
        alert("Enter fruit/vegetable name");
        return false;
    }
    var post = document.sellfruitsandveges.name.value;
    if (!post || post.length === 0 || /^\s*$/.test(post)){
        alert("Enter post name");
        return false;
    }
    if (!document.getElementById('fruits').checked && !document.getElementById('vegetables').checked) {
        alert("select category");
        return false;
    }
    return true;
}
function validateform1() {
    var pdt = document.sellseeds.pdt.value;
    if (!pdt || pdt.length === 0 || /^\s*$/.test(pdt)){
        alert("Enter fruit/vegetable name");
        return false;
    }
    var post = document.sellseeds.name.value;
    if (!post || post.length === 0 || /^\s*$/.test(post)){
        alert("Enter post name");
        return false;
    }
    return true;
}
function validateform2() {
    var pdt = document.sellmachines.pdt.value;
    if (!pdt || pdt.length === 0 || /^\s*$/.test(pdt)){
        alert("Enter fruit/vegetable name");
        return false;
    }
    var post = document.sellmachines.name.value;
    if (!post || post.length === 0 || /^\s*$/.test(post)){
        alert("Enter post name");
        return false;
    }
    if (!document.getElementById('sell').checked && !document.getElementById('rent').checked) {
        alert("select option");
        return false;
    }
    return true;
}