function verificaNumero(e){
    if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which  > 57)){
        return false;

    }
}
$(document).ready(function (){
    $("#cpf").keypress(verificaNumero);
    $("#rg").keypress(verificaNumero);
    $("#telefone").keypress(verificaNumero);
});


function FormataCpf(evt){
    vr=(navigator.appName == 'Netscape') ?evt.target.value : evt.srcElement.value;
    if(vr.length <= 14){
        if(vr.length == 3) vr = vr+".";  
        if(vr.length == 7) vr = vr+".";  
        if(vr.length == 11) vr = vr+"-"; 
        return vr; 
    }else{
       // vr=(navigator.appName == 'Netscape') ?evt.target.value : evt.srcElement.value;
       if(vr.length == 2) vr = vr+".";  
       if(vr.length == 6) vr = vr+".";  
       if(vr.length == 10) vr = vr+"/";
       if(vr.length == 15) vr = vr+"-";
       return vr; 

   }

}

function FormataCnpj(evt){
    vr=(navigator.appName == 'Netscape') ?evt.target.value : evt.srcElement.value;
    if(vr.length == 2) vr = vr+".";  
    if(vr.length == 6) vr = vr+".";  
    if(vr.length == 10) vr = vr+"/";
    if(vr.length == 15) vr = vr+"-";
    return vr; 

}

function FormataRg(evt){
    vr=(navigator.appName == 'Netscape') ?evt.target.value : evt.srcElement.value;
    if(vr.length == 2) vr = vr+".";  
    if(vr.length == 6) vr = vr+".";  
    if(vr.length == 10) vr = vr+"-"; 
    return vr; 

}

function FormataIe(evt){
    vr=(navigator.appName == 'Netscape') ?evt.target.value : evt.srcElement.value;
    if(vr.length == 3) vr = vr+".";  
    if(vr.length == 7) vr = vr+".";
    return vr; 

}

function FormataCep(evt){
    vr=(navigator.appName == 'Netscape') ?evt.target.value : evt.srcElement.value;
    if(vr.length == 5) vr = vr+"-";
    return vr; 

}

function FormataTel(evt){
    vr=(navigator.appName == 'Netscape') ?evt.target.value : evt.srcElement.value;
    if(vr.length == 0) vr = vr+"(";  
    if(vr.length == 3) vr = vr+")"; 
    if(vr.length == 4) vr = vr+" "; 
    if(vr.length == 6) vr = vr+" ";  
    if(vr.length == 11) vr = vr+"-"; 
    return vr; 

}