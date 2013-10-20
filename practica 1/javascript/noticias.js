function relacionadas(){
        var myWindow = window.open('','','scrollbars=1,height=600,width=400');
	
        //var html = myWindow.document.createElement('html');
        myWindow.document.write("<html><div id='rel'></div></html>"); 
        var relac = document.getElementById('comentarios').cloneNode('true');
        var pos= myWindow.document.getElementById('rel');
        
        pos.appendChild(relac);

}  


function validarUsuario(nombre){
    return nombre!="";
}
