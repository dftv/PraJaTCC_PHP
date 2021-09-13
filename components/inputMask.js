function mask(obj, fun) {
    valObj = obj;
    valFun = fun;
    setTimeout("execMask()", 1);
}

function execMask() {
    valObj.value = valFun(valObj.value)
}

function phone_mask(x) {
    x = x.replace(/\D/g, "");
    x = x.replace(/^(\d{2})(\d)/g, "($1) $2");
    x = x.replace(/(\d)(\d{4})$/, "$1-$2");
    return x;
}

function CPF_mask(x) {
    x = x.replace(/\D/g, "");
    x = x.replace(/(\d{3})(\d)/, "$1.$2");
    x = x.replace(/(\d{3})(\d)/, "$1.$2");
    x = x.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    return x;
}

function CEP_Mask(x) {
    x = x.replace(/\D/g, "");
    x = x.replace(/^(\d{2})(\d)/, "$1.$2");
    x = x.replace(/\.(\d{3})(\d)/, ".$1-$2");
    return x;
}

window.onload = function () {
    let phone_singup = document.getElementById("phone_singup");
    let CPF_singup = document.getElementById("CPF_singup");

    phone_singup.onkeyup = function () {
        mask(this, phone_mask);
    }

    CPF_singup.onkeyup = function () {
        mask(this, CPF_mask);
    }
}