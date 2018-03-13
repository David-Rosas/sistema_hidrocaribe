<!--

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
        if(v == 'hidden'){
	    Mostrar_Combos(args[0]);
    }else{
     	Ocultar_Combos(args[0]);
     }
}
function MM_showHideLayersCombos() { //v6.0

  var i,p,v,obj,args=MM_showHideLayersCombos.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) {
      v=args[i+2];
      if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}


function mostrarOcultarDiv(e){
	var ele1=document.getElementById('LayerAyuda');
	//alert (ele1.className);
  if (ele1.className=='mensajeoculto'){
     ele1.className='mensajevisible';
  }
  else{
     ele1.className='mensajeoculto';
  }
}

function getAbsoluteElementPosition(element) {
  if (typeof element == "img")
    element = document.getElementById(element)

  if (!element) return { top:0,left:0 };

  var y = 0;
  var x = 0;
  while (element.offsetParent) {
    x += element.offsetLeft;
    y += element.offsetTop;
    element = element.offsetParent;
  }
  return {top:y,left:x};
}

function getTopElement(NameImage){

	  var elemento = document.getElementById(NameImage);
	  var pos = getAbsoluteElementPosition(elemento)

	  return pos.top;

}

function muestraLayerPos(viewObjLayer,getImgAyuda){

	document.getElementById(viewObjLayer).style.top = getTopElement(getImgAyuda);

	MM_showHideLayers(viewObjLayer,'','show');

}


function Mostrar_Combos(layer){
	comboArray = determinarCombos(layer);

for (i=0; i<(5); i++){
		MM_showHideLayersCombos(comboArray[i],'','show');
	}
}

function Ocultar_Combos(layer){

	comboArray = determinarCombos(layer);
		for (i=0; i<(comboArray.length); i++){

		MM_showHideLayersCombos(comboArray[i],'','hide');
	}

}
