var F = ""; 
var H = "f";        
        
if(varJs0 == F){
    varJs0 = "f";
}

if(varJs1 == F){
    varJs1 = "f";
}   
        
if(varJs2 == F){
    varJs2 = "f";
}

if(varJs3 == F){
    varJs3 = "f";
}  
        
if(varJs4 == F){
    varJs4 = "f";
}

if(varJs5 == F){
    varJs5 = "f";
}   
        
if(varJs6 == F){
    varJs6 = "f";
}

if(varJs7 == F){
    varJs7 = "f";
}

function myFunction(x) {
    if (x.matches) { // If media query matches
        if(varJs0 == H){
            document.getElementById('btnUserMb').style.display = 'none'; 
        }
        if(varJs1 == H){
            document.getElementById('btnPonMb').style.display = 'none';
        }
        if(varJs2 == H){
            document.getElementById('btnEvaMb').style.display = 'none';
        }
        if(varJs3 == H){
            document.getElementById('btnCeMb').style.display = 'none';
        }
        if(varJs4 == H){
            document.getElementById('btnCoMb').style.display = 'none';
        }
        if(varJs5 == H){
            document.getElementById('btnSecMb').style.display = 'none';
        }
        if(varJs6 == H){
            document.getElementById('btnMemMb').style.display = 'none';
        }
        if(varJs7 == H){
            document.getElementById('btnAdmMb').style.display = 'none';
        }
        
        
        //document.body.style.backgroundColor = "yellow";
        
    } else {
        if(varJs0 == H){
            document.getElementById('btnUserPc').style.display = 'none'; 
        }
        if(varJs1 == H){
            document.getElementById('btnPonPc').style.display = 'none';
        }
        if(varJs2 == H){
            document.getElementById('btnEvaPc').style.display = 'none';
        }
        if(varJs3 == H){
            document.getElementById('btnCePc').style.display = 'none';
        }
        if(varJs4 == H){
            document.getElementById('btnCoPc').style.display = 'none';
        }
        if(varJs5 == H){
            document.getElementById('btnSecPc').style.display = 'none';
        }
        if(varJs6 == H){
            document.getElementById('btnMemPc').style.display = 'none';
        }
        if(varJs7 == H){
            document.getElementById('btnAdmPc').style.display = 'none';
        }
        
        //document.body.style.backgroundColor = "blue";
        
    }
}
var x = window.matchMedia("(max-width: 768px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

//alert(varJs0 + " = 0 | " + varJs1 + " = 1 | " + varJs2 + " = 2 | " + varJs3 + " = 3 | " + varJs4 + " = 4 | " + varJs5 + " = 5 | " + varJs6 + " = 6 | " + varJs7 + " = 7 ");