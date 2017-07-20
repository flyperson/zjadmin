<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>123</title>
<style>
html,body{height:100%;overflow:hidden;}
body,div,h2{margin:0;padding:0;}
body{font:12px/1.5 Tahoma;}
.win{position:absolute;top:40%;left:33%;width:400px;height:33px;background:#fc0;cursor:move;}
#win1{position:absolute;top:59%;left:59%;width:400px;height:33px;background:#fc0;cursor:move;}

</style>
<script>
window.onload = function ()
{
    var divs = document.getElementsByTagName('div');
    for(var i = 0, len = divs.length; i < len; i++){
        var oWin = divs[i];
        this.doYourSelf(oWin);
    }
};

function doYourSelf(oWin){
        // var oWin = document.getElementById("win");
         var bDrag = false;
         var disX = disY = 0;
         oWin.onmousedown = function (event){  
              bDrag = true;
              disX = event.clientX - oWin.offsetLeft;
              disY = event.clientY - oWin.offsetTop;  
              return false
         };
         oWin.onmousemove = function (event){
              if (!bDrag)
               return;
              var iL = event.clientX - disX;
              var iT = event.clientY - disY;
              
              //°ÑÍ¼²ã·¶Î§¶¨ÔÚä¯ÀÀÆ÷´°¿ÚÄÚ
              var maxL = document.documentElement.clientWidth - oWin.offsetWidth;
              var maxT = document.documentElement.clientHeight - oWin.offsetHeight;  
              iL = iL < 0 ? 0 : iL;
              iL = iL > maxL ? maxL : iL;   
              iT = iT < 0 ? 0 : iT;
              iT = iT > maxT ? maxT : iT;
              
              oWin.style.marginTop = oWin.style.marginLeft = 0;
              oWin.style.left = iL + "px";
              oWin.style.top = iT + "px";  
              return false
         };
         oWin.onmouseup = function (){
              bDrag = false;    
        };
    }
</script>
</head>
<body>
<div class="win">0</div>
<div class="win">1</div>
<div class="win">2</div>
<div class="win">3</div>
<div class="win">4</div>
<div class="win">5</div>
</body>
</html>