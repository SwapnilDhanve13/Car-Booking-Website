var pixel={pageStatusFlag:false,checkMyReadyState:null,parse:function(){var baseURL=("https:"==document.location.protocol?"https://ssl":"http://www")+".vizury.com/analyze/analyze.php";var params="?account_id=VIZVRM965&section=1&level=";var pixelfireFlag=false;var pixelfirestatus=false;try{pixel.checkMyReadyState=setInterval(function(){pixel.pageloadStatus();if(pixel.pageStatusFlag==true){var currPageUrl=document.URL;var segment="";var level="1";var element="",divTag="",h1Tag="";var catId="";var isCat1=false,isCat2=false;element=document.getElementById("editorial_review");if(element!=null){isCat1=true}divTag=document.getElementsByTagName("div");for(var i=0;i<divTag.length;i++){if(divTag[i]!==undefined&&divTag[i].className=="ks_result2"){isCat2=true}}if(isCat1){element=document.getElementById("maintophead");if(element!=null){h1Tag=element.getElementsByTagName("h1");for(var i=0;i<h1Tag.length;i++){if(h1Tag[i]!==undefined&&h1Tag[i].className=="fl"&&h1Tag[i].innerHTML!=null){catId=h1Tag[i].innerHTML.replace(/(<([^>]+)>)/ig,'').replace(/^\s+|\s+$/g,'');catId=encodeURIComponent(encodeURIComponent(catId));break}}}level="1";segment="e200";params=params+level+"&param="+segment+"&catid="+catId;pixelfireFlag=true}else if(isCat2){element=document.getElementById("leftcontainer");if(element!=null){h1Tag=element.getElementsByTagName("h1");if(h1Tag[0]!==undefined&&h1Tag[0].innerHTML!=null){catId=h1Tag[0].innerHTML.replace(/(<([^>]+)>)/ig,'').replace(/^\s+|\s+$/g,'');catId=encodeURIComponent(encodeURIComponent(catId))}}level="2";segment="e200";params=params+level+"&param="+segment+"&catid="+catId;pixelfireFlag=true}else if(currPageUrl.toLowerCase().indexOf("http://www.gaadi.com/new-car")!=-1){segment="e100";level="1";params=params+level+"&param="+segment;pixelfireFlag=true}if(pixelfireFlag&&!(pixelfirestatus)){var analyze=document.createElement("iframe");analyze.src=baseURL+params;analyze.scrolling="no";analyze.width=1;analyze.height=1;analyze.marginheight=0;analyze.marginwidth=0;analyze.frameborder=0;analyze.style.display='none';var node=document.getElementsByTagName("script")[0];node.parentNode.insertBefore(analyze,node);pixelfirestatus=true}}},3000,"Javascript")}catch(error){var analyze=document.createElement("iframe");analyze.src=baseURL+params+"&param=999";analyze.scrolling="no";analyze.width=1;analyze.height=1;analyze.marginheight=0;analyze.marginwidth=0;analyze.frameborder=0;analyze.style.display='none';var node=document.getElementsByTagName("script")[0];node.parentNode.insertBefore(analyze,node)}},pageloadStatus:function(){if(document.readyState==="interactive"||document.readyState==="complete"){pixel.pageStatusFlag=true;clearInterval(pixel.checkMyReadyState)}else{pixel.pageStatusFlag=false}}};