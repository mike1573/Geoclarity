<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/excanvas.min.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/jquery.flot.pie.js"></script>
<script>
//MarkerClusterer compiled
(function(){var d=null;function e(a){return function(b){this[a]=b}}function h(a){return function(){return this[a]}}var j;
function k(a,b,c){this.extend(k,google.maps.OverlayView);this.c=a;this.a=[];this.f=[];this.ca=[53,56,66,78,90];this.j=[];this.A=!1;c=c||{};this.g=c.gridSize||60;this.l=c.minimumClusterSize||2;this.J=c.maxZoom||d;this.j=c.styles||[];this.X=c.imagePath||this.Q;this.W=c.imageExtension||this.P;this.O=!0;if(c.zoomOnClick!=void 0)this.O=c.zoomOnClick;this.r=!1;if(c.averageCenter!=void 0)this.r=c.averageCenter;l(this);this.setMap(a);this.K=this.c.getZoom();var f=this;google.maps.event.addListener(this.c,
"zoom_changed",function(){var a=f.c.getZoom();if(f.K!=a)f.K=a,f.m()});google.maps.event.addListener(this.c,"idle",function(){f.i()});b&&b.length&&this.C(b,!1)}j=k.prototype;j.Q="https://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/images/m";j.P="png";j.extend=function(a,b){return function(a){for(var b in a.prototype)this.prototype[b]=a.prototype[b];return this}.apply(a,[b])};j.onAdd=function(){if(!this.A)this.A=!0,n(this)};j.draw=function(){};
function l(a){if(!a.j.length)for(var b=0,c;c=a.ca[b];b++)a.j.push({url:a.X+(b+1)+"."+a.W,height:c,width:c})}j.S=function(){for(var a=this.o(),b=new google.maps.LatLngBounds,c=0,f;f=a[c];c++)b.extend(f.getPosition());this.c.fitBounds(b)};j.z=h("j");j.o=h("a");j.V=function(){return this.a.length};j.ba=e("J");j.I=h("J");j.G=function(a,b){for(var c=0,f=a.length,g=f;g!==0;)g=parseInt(g/10,10),c++;c=Math.min(c,b);return{text:f,index:c}};j.$=e("G");j.H=h("G");
j.C=function(a,b){for(var c=0,f;f=a[c];c++)q(this,f);b||this.i()};function q(a,b){b.s=!1;b.draggable&&google.maps.event.addListener(b,"dragend",function(){b.s=!1;a.L()});a.a.push(b)}j.q=function(a,b){q(this,a);b||this.i()};function r(a,b){var c=-1;if(a.a.indexOf)c=a.a.indexOf(b);else for(var f=0,g;g=a.a[f];f++)if(g==b){c=f;break}if(c==-1)return!1;b.setMap(d);a.a.splice(c,1);return!0}j.Y=function(a,b){var c=r(this,a);return!b&&c?(this.m(),this.i(),!0):!1};
j.Z=function(a,b){for(var c=!1,f=0,g;g=a[f];f++)g=r(this,g),c=c||g;if(!b&&c)return this.m(),this.i(),!0};j.U=function(){return this.f.length};j.getMap=h("c");j.setMap=e("c");j.w=h("g");j.aa=e("g");
j.v=function(a){var b=this.getProjection(),c=new google.maps.LatLng(a.getNorthEast().lat(),a.getNorthEast().lng()),f=new google.maps.LatLng(a.getSouthWest().lat(),a.getSouthWest().lng()),c=b.fromLatLngToDivPixel(c);c.x+=this.g;c.y-=this.g;f=b.fromLatLngToDivPixel(f);f.x-=this.g;f.y+=this.g;c=b.fromDivPixelToLatLng(c);b=b.fromDivPixelToLatLng(f);a.extend(c);a.extend(b);return a};j.R=function(){this.m(!0);this.a=[]};
j.m=function(a){for(var b=0,c;c=this.f[b];b++)c.remove();for(b=0;c=this.a[b];b++)c.s=!1,a&&c.setMap(d);this.f=[]};j.L=function(){var a=this.f.slice();this.f.length=0;this.m();this.i();window.setTimeout(function(){for(var b=0,c;c=a[b];b++)c.remove()},0)};j.i=function(){n(this)};
function n(a){if(a.A)for(var b=a.v(new google.maps.LatLngBounds(a.c.getBounds().getSouthWest(),a.c.getBounds().getNorthEast())),c=0,f;f=a.a[c];c++)if(!f.s&&b.contains(f.getPosition())){for(var g=a,u=4E4,o=d,v=0,m=void 0;m=g.f[v];v++){var i=m.getCenter();if(i){var p=f.getPosition();if(!i||!p)i=0;else var w=(p.lat()-i.lat())*Math.PI/180,x=(p.lng()-i.lng())*Math.PI/180,i=Math.sin(w/2)*Math.sin(w/2)+Math.cos(i.lat()*Math.PI/180)*Math.cos(p.lat()*Math.PI/180)*Math.sin(x/2)*Math.sin(x/2),i=6371*2*Math.atan2(Math.sqrt(i),
Math.sqrt(1-i));i<u&&(u=i,o=m)}}o&&o.F.contains(f.getPosition())?o.q(f):(m=new s(g),m.q(f),g.f.push(m))}}function s(a){this.k=a;this.c=a.getMap();this.g=a.w();this.l=a.l;this.r=a.r;this.d=d;this.a=[];this.F=d;this.n=new t(this,a.z(),a.w())}j=s.prototype;
j.q=function(a){var b;a:if(this.a.indexOf)b=this.a.indexOf(a)!=-1;else{b=0;for(var c;c=this.a[b];b++)if(c==a){b=!0;break a}b=!1}if(b)return!1;if(this.d){if(this.r)c=this.a.length+1,b=(this.d.lat()*(c-1)+a.getPosition().lat())/c,c=(this.d.lng()*(c-1)+a.getPosition().lng())/c,this.d=new google.maps.LatLng(b,c),y(this)}else this.d=a.getPosition(),y(this);a.s=!0;this.a.push(a);b=this.a.length;b<this.l&&a.getMap()!=this.c&&a.setMap(this.c);if(b==this.l)for(c=0;c<b;c++)this.a[c].setMap(d);b>=this.l&&a.setMap(d);
a=this.c.getZoom();if((b=this.k.I())&&a>b)for(a=0;b=this.a[a];a++)b.setMap(this.c);else if(this.a.length<this.l)z(this.n);else{b=this.k.H()(this.a,this.k.z().length);this.n.setCenter(this.d);a=this.n;a.B=b;a.ga=b.text;a.ea=b.index;if(a.b)a.b.innerHTML=b.text;b=Math.max(0,a.B.index-1);b=Math.min(a.j.length-1,b);b=a.j[b];a.da=b.url;a.h=b.height;a.p=b.width;a.M=b.textColor;a.e=b.anchor;a.N=b.textSize;a.D=b.backgroundPosition;this.n.show()}return!0};
j.getBounds=function(){for(var a=new google.maps.LatLngBounds(this.d,this.d),b=this.o(),c=0,f;f=b[c];c++)a.extend(f.getPosition());return a};j.remove=function(){this.n.remove();this.a.length=0;delete this.a};j.T=function(){return this.a.length};j.o=h("a");j.getCenter=h("d");function y(a){a.F=a.k.v(new google.maps.LatLngBounds(a.d,a.d))}j.getMap=h("c");
function t(a,b,c){a.k.extend(t,google.maps.OverlayView);this.j=b;this.fa=c||0;this.u=a;this.d=d;this.c=a.getMap();this.B=this.b=d;this.t=!1;this.setMap(this.c)}j=t.prototype;
j.onAdd=function(){this.b=document.createElement("DIV");if(this.t)this.b.style.cssText=A(this,B(this,this.d)),this.b.innerHTML=this.B.text;this.getPanes().overlayMouseTarget.appendChild(this.b);var a=this;google.maps.event.addDomListener(this.b,"click",function(){var b=a.u.k;google.maps.event.trigger(b,"clusterclick",a.u);b.O&&a.c.fitBounds(a.u.getBounds())})};function B(a,b){var c=a.getProjection().fromLatLngToDivPixel(b);c.x-=parseInt(a.p/2,10);c.y-=parseInt(a.h/2,10);return c}
j.draw=function(){if(this.t){var a=B(this,this.d);this.b.style.top=a.y+"px";this.b.style.left=a.x+"px"}};function z(a){if(a.b)a.b.style.display="none";a.t=!1}j.show=function(){if(this.b)this.b.style.cssText=A(this,B(this,this.d)),this.b.style.display="";this.t=!0};j.remove=function(){this.setMap(d)};j.onRemove=function(){if(this.b&&this.b.parentNode)z(this),this.b.parentNode.removeChild(this.b),this.b=d};j.setCenter=e("d");
function A(a,b){var c=[];c.push("background-image:url("+a.da+");");c.push("background-position:"+(a.D?a.D:"0 0")+";");typeof a.e==="object"?(typeof a.e[0]==="number"&&a.e[0]>0&&a.e[0]<a.h?c.push("height:"+(a.h-a.e[0])+"px; padding-top:"+a.e[0]+"px;"):c.push("height:"+a.h+"px; line-height:"+a.h+"px;"),typeof a.e[1]==="number"&&a.e[1]>0&&a.e[1]<a.p?c.push("width:"+(a.p-a.e[1])+"px; padding-left:"+a.e[1]+"px;"):c.push("width:"+a.p+"px; text-align:center;")):c.push("height:"+a.h+"px; line-height:"+a.h+
"px; width:"+a.p+"px; text-align:center;");c.push("cursor:pointer; top:"+b.y+"px; left:"+b.x+"px; color:"+(a.M?a.M:"black")+"; position:absolute; font-size:"+(a.N?a.N:11)+"px; font-family:Arial,sans-serif; font-weight:bold");return c.join("")}window.MarkerClusterer=k;k.prototype.addMarker=k.prototype.q;k.prototype.addMarkers=k.prototype.C;k.prototype.clearMarkers=k.prototype.R;k.prototype.fitMapToMarkers=k.prototype.S;k.prototype.getCalculator=k.prototype.H;k.prototype.getGridSize=k.prototype.w;
k.prototype.getExtendedBounds=k.prototype.v;k.prototype.getMap=k.prototype.getMap;k.prototype.getMarkers=k.prototype.o;k.prototype.getMaxZoom=k.prototype.I;k.prototype.getStyles=k.prototype.z;k.prototype.getTotalClusters=k.prototype.U;k.prototype.getTotalMarkers=k.prototype.V;k.prototype.redraw=k.prototype.i;k.prototype.removeMarker=k.prototype.Y;k.prototype.removeMarkers=k.prototype.Z;k.prototype.resetViewport=k.prototype.m;k.prototype.repaint=k.prototype.L;k.prototype.setCalculator=k.prototype.$;
k.prototype.setGridSize=k.prototype.aa;k.prototype.setMaxZoom=k.prototype.ba;k.prototype.onAdd=k.prototype.onAdd;k.prototype.draw=k.prototype.draw;s.prototype.getCenter=s.prototype.getCenter;s.prototype.getSize=s.prototype.T;s.prototype.getMarkers=s.prototype.o;t.prototype.onAdd=t.prototype.onAdd;t.prototype.draw=t.prototype.draw;t.prototype.onRemove=t.prototype.onRemove;
})();
//style for the map		
var iconBase = '<?php echo base_url()?>img/mapicon/';
var styles = [
{
	stylers: [
	{ hue: "#88ff88" },
	{ saturation: 0}
	]
},{
	featureType: "road",
	elementType: "geometry",
	stylers: [
	{ lightness: 100 },
	{ visibility: "simplified" }
	]
},
{
	featureType: "water",
	elementType: "geometry",
	stylers: [
	{ saturation: 50 },
	{ gamma: 1.22 },
	{ color: "#807dff" },
	{ hue: "#003bff" }
	]
}
];



var center = new google.maps.LatLng(39, -99);
var myOptions = {
	zoom: 4,
	center:center,
	mapTypeControlOptions: {
		mapTypeIds: [google.maps.MapTypeId.TERRAIN, 'map_style']
	}
};

var styledMap = new google.maps.StyledMapType(styles,
	{name: "Styled Map"});

	
markers=[];
function initialize() {
	

//getting the JSON Data created from Database based on checkbox filters	
var TaskData=<?php echo $jsonTasks ?>;
var map = new google.maps.Map(document.getElementById("map-company"), myOptions);
map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');

var bounds = new google.maps.LatLngBounds();

	for (var i = 0; i < TaskData.length; ++i) {
			
			if (TaskData[i].SOS_STATUS==='Yes') {
				
				var contentString = '<div id="content">'+
				'<div id="siteNotice">'+
				'</div>'+
				'<h4 id="firstHeading" class="firstHeading"> Contact  Name:'+TaskData[i].contact_name+'</h4>'+
				'<div id="bodyContent">'+
				'<p>This task is in  <b>SOS STATUS</b></p> '+
				'<p>Customer Address :'+ TaskData[i].contact_address +'</br>'+
				'Appoint Start time:' +   TaskData[i].scheduled_Start +'</br>'+
				'Appoint Finish time:' +   TaskData[i].scheduled_End +'</br>'+
				'<font color="red">User:' +TaskData[i].user_email +'</br></font>'+
				'Actual Start time:'+ TaskData[i].actual_Start + '</br>'+
				'Actual End time:'+ TaskData[i].actual_end + '</br>'+

				'postcode:'+ TaskData[i].postcode + '</br>'+
				'current status:' +  TaskData[i].task_Status + '</br>'+
				'contact phone number:' +  TaskData[i].contact_phone + '</br>'+
				'Campaign Code:' +  TaskData[i].Region + '</p>'+
									'</div>'+
				'</div>';

				var iconName = TaskData[i].TasktypeCategory + "-sos.png";
				
				var taskMarkers= new google.maps.Marker({ position: new google.maps.LatLng(TaskData[i].task_lat,
						TaskData[i].task_long),
					draggable:true, 
					title: contentString,
					icon: iconBase + iconName.toLowerCase(),
					clickable: true														
				});
				
				infowindow= new google.maps.InfoWindow({
						content: contentString
				});
				
				google.maps.event.addListener(taskMarkers, 'click', function() {
						infowindow.setContent(this.title);
						infowindow.open(map,this);
				});
				
			markers.push(taskMarkers);	
			}

		if (TaskData[i].SOS_STATUS==='No') {
				var contentString = '<div id="content">'+
				'<div id="siteNotice">'+
				'</div>'+
				'<h4 id="firstHeading" class="firstHeading"> Contact  Name:'+TaskData[i].contact_name+'</h4>'+
				'<div id="bodyContent">'+
				'<p>This task is  <b>  '+ TaskData[i].TasktypeCategory + '</b></p> '+
				'<p>Customer Address :'+ TaskData[i].contact_address +'</br>'+
				'Appoint Start time:' +   TaskData[i].scheduled_Start +'</br>'+
				'Appoint Finish time:' +   TaskData[i].scheduled_End +'</br>'+
				'<font color="red">User:' +TaskData[i].user_email +'</br></font>'+
				'Actual Start time:'+ TaskData[i].actual_Start + '</br>'+
				'Actual End time:'+ TaskData[i].actual_end + '</br>'+

				'postcode:'+ TaskData[i].postcode + '</br>'+
				'current status:' +  TaskData[i].task_Status + '</br>'+
				'contact phone number:' +  TaskData[i].contact_phone + '</br>'+
				'Campaign Code:' +  TaskData[i].Region + '</p>'+
									'</div>'+
				'</div>';

				var iconName = TaskData[i].TasktypeCategory + "-" + TaskData[i].task_Status + ".png";
				if (TaskData[i].task_Status == "CANCELLED") iconName = TaskData[i].TasktypeCategory + "-sos.png";
				var taskMarkers= new google.maps.Marker({ position: new google.maps.LatLng(TaskData[i].task_lat,
						TaskData[i].task_long),
					draggable:true, 
					title: contentString,
					icon: iconBase + iconName.toLowerCase(),
					clickable: true														
				});
				
				infowindow= new google.maps.InfoWindow({
						content: contentString
				});
				
				google.maps.event.addListener(taskMarkers, 'click', function() {
						infowindow.setContent(this.title);
						infowindow.open(map,this);
				});
				
			markers.push(taskMarkers);	
		
			
	}// Sos_status equal to no ending

	var myLatLng = new google.maps.LatLng(TaskData[i].task_lat, TaskData[i].task_long);
	bounds.extend(myLatLng);
}
	map.fitBounds(bounds);
	
	//initializing MarkerClusterer
	//Defining new style
	
	var mcStyles = [
  {
    textColor: 'white',
    url: '<?php echo base_url()?>/img/m1.svg',
    height: 53,
    width: 53
  },
 {
    textColor: 'white',
    url: '<?php echo base_url()?>/img/m2.svg',
    height: 56,
    width: 56
  },
 {
    textColor: 'white',
    url: '<?php echo base_url()?>/img/m3.svg',
    height: 66,
    width: 66
  },
   {
    textColor: 'white',
    url: '<?php echo base_url()?>/img/m4.svg',
    height: 78,
    width: 78
  },
   {
    textColor: 'white',
    url: '<?php echo base_url()?>/img/m5.svg',
    height: 90,
    width: 90
  }
];
	
	var markerCluster = new MarkerClusterer(map,markers,{maxZoom:11, styles: mcStyles});
	google.maps.event.addListener(map,'idle', function() 
      {
	    
		    	var bounds = new google.maps.LatLngBounds();
		        bounds = map.getBounds();
		        var ne = bounds.getNorthEast();
		        var sw = bounds.getSouthWest();
		        
		    	RedrawPichat(ne.lat(), ne.lng(), sw.lat(), sw.lng());			    
		
	  /*var Coords = [
            ne, new google.maps.LatLng(ne.lat(), sw.lng()),
            sw, new google.maps.LatLng(sw.lat(), ne.lng()), ne
       ];*/
     }); // end of listener callbck
		
}  

google.maps.event.addDomListener(window, 'load', initialize);

var data = [];
var prevLat1 = -1000, prevLat2, prevLong1, prevLong2;
function RedrawPichat(lat1, long1, lat2, long2) {
	if (lat1 > lat2 ) {
		var temp = lat1; lat1 = lat2; lat2= temp;
	}
	if (long1 > long2) {
		var temp = long1; long1 = long2; long2 = temp;
	}
	/*
	if (Math.abs(prevLat1-lat1) > 1 || Math.abs(prevLat2-lat2) > 1 || Math.abs(prevLong1-long1) > 1 || Math.abs(prevLong2-long2) > 1 ) {
		prevLat1 = lat1;
		prevLat2 = lat2;
		prevLong1 = long1;
		prevLong2 = long2;
	} else {
		return;
	}   
	*/
	$.ajax({
		type : "post",
		datatype : "json",
		data : {
			lat1 : lat1,
			long1 : long1,
			lat2 : lat2,
			long2 : long2 , 
			seltype : <?php echo $seltype?>
		},
		url : "<?php echo base_url()?>index.php/supervisor/getTasksCountByMap",
		success : function(retStr, code){
			var data = [];
			var retVal = jQuery.parseJSON(retStr);
			if (retVal.Completed == 0 && retVal.Delayed == 0 && retVal.Cancelled == 0 && retVal.Sos == 0 && retVal.Created == 0 && retVal.Progress == 0 && retVal.PendScheduled == 0 && retVal.ReScheduled == 0 ) {
				data[0] = {
						label: "no data", 
						data: 1
				}
			} else {
				var idx = 0;
				if (retVal.Completed > 0) {
					data[idx++] = { label: "Completed", data: retVal.Completed };
				}
				if (retVal.Delayed>0) {
					data[idx++] = { label: "Delayed", data: retVal.Delayed };
				}
				if (retVal.Cancelled>0) {
					data[idx++] = { label: "Cancelled", data: retVal.Cancelled };
				}
				if (retVal.Created>0) {
					data[idx++] = { label: "Created", data: retVal.Created };
				}
				if (retVal.Progress>0) {
					data[idx++] = { label: "Progress", data: retVal.Progress };
				}
				if (retVal.PendScheduled>0) {
					data[idx++] = { label: "Pending Scheduled", data: retVal.PendScheduled };
				}
				if (retVal.ReScheduled>0) {
					data[idx++] = { label: "ReScheduled", data: retVal.ReScheduled };
				}
				if (retVal.Sos>0) {
					data[idx++] = { label: "Sos", data: retVal.Sos };
				}
			}
			var placeholder = $("#placeholder");
			placeholder.unbind();
			
			$.plot('#placeholder', data, {
			    series: {
			        pie: {
			            show: true,
			            radius: 1,
			            label: {
			                show: true,
			                radius: 1,
			                formatter: labelFormatter,
			                background: {
			                    opacity: 0.8
			                }
			            }
			        }
			    }
			});
		}
	});
		
	
}

$(document).ready(function () {
	RedrawPichat(-500, -500, 500, 500);
});
function labelFormatter(label, series) {
	return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
}
</script>  
<style>
.carousel-indicators {
	bottom: -60px;
}
.carousel-indicators li {
  background-color: #999;
  background-color: rgba(70,70,70,.25);
}

.carousel-indicators .active {
  background-color: #444;
}
</style>
<div class="container" style="margin-top:100px;">	
	<div class="row">
		<div class="col-sm-12 text-right">
			<?php 
			
			$zonelist = array('Kwajalein' => -12.00, 'Pacific/Midway' => -11.00, 'Pacific/Honolulu' => -10.00, 'America/Anchorage' => -9.00, 'America/Los_Angeles' => -8.00, 'America/Denver' => -7.00, 'America/Tegucigalpa' => -6.00, 'America/New_York' => -5.00, 'America/Caracas' => -4.30, 'America/Halifax' => -4.00, 'America/St_Johns' => -3.30, 'America/Argentina/Buenos_Aires' => -3.00, 'America/Sao_Paulo' => -3.00, 'Atlantic/South_Georgia' => -2.00, 'Atlantic/Azores' => -1.00, 'Europe/Dublin' => 0, 'Europe/Belgrade' => 1.00, 'Europe/Minsk' => 2.00, 'Asia/Kuwait' => 3.00, 'Asia/Tehran' => 3.30, 'Asia/Muscat' => 4.00, 'Asia/Yekaterinburg' => 5.00, 'Asia/Kolkata' => 5.30, 'Asia/Katmandu' => 5.45, 'Asia/Dhaka' => 6.00, 'Asia/Rangoon' => 6.30, 'Asia/Krasnoyarsk' => 7.00, 'Asia/Brunei' => 8.00, 'Asia/Seoul' => 9.00, 'Australia/Darwin' => 9.30, 'Australia/Canberra' => 10.00, 'Asia/Magadan' => 11.00, 'Pacific/Fiji' => 12.00, 'Pacific/Tongatapu' => 13.00);
	        $index = array_keys($zonelist, $_SESSION['company']->timezone);
	        date_default_timezone_set($index[0]);
			?>
			<span style="font-size:13px;"><?php echo get_phrase('current_time');?>: <?php echo date("Y-m-d H:i")?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<h2 style="margin-top:0px;text-align:left">SuperVisor Dashboard</h2>
		</div>
		<div class="col-sm-6">
			<input type="checkbox" name="seltype[]" id="seltype_0" value="0" onclick="javascript:selectAll();" <?php echo $seltype ==0 ? "checked" : "" ?>>
			<label for="seltype_0"><?php echo get_phrase('all');?></label> &nbsp;&nbsp;
			<input type="checkbox" name="seltype[]" id="seltype_1" value="1" onclick="javascript:selectOne(1);" <?php echo $seltype ==1 ? "checked" : "" ?>>
			<label for="seltype_1"><?php echo get_phrase('delayed');?></label> &nbsp;&nbsp;
			<input type="checkbox" name="seltype[]" id="seltype_2" value="2" onclick="javascript:selectOne(2);" <?php echo $seltype ==2 ? "checked" : "" ?>>
			<label for="seltype_2"><?php echo get_phrase('completed');?></label> &nbsp;&nbsp;
			<input type="checkbox" name="seltype[]" id="seltype_3" value="3" onclick="javascript:selectOne(3);" <?php echo $seltype ==3 ? "checked" : "" ?>>
			<label for="seltype_3"><?php echo get_phrase('sos');?></label> &nbsp;&nbsp;
			<input type="checkbox" name="seltype[]" id="seltype_4" value="4" onclick="javascript:selectOne(4);" <?php echo $seltype ==4 ? "checked" : "" ?>>
			<label for="seltype_4"><?php echo get_phrase('cancelled');?></label> &nbsp;&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div id="map-company" style="width:100%;height:500px;"></div>
		</div>
		<div class="col-sm-3">
			<div id="placeholder" style="width:100%;height:500px;">
			</div>
		</div>
		<div class="col-sm-3">
			<div id="top10sup" style="width:100%;height:430px; background-color:lightgrey;">
				<h4><?php echo get_phrase('top');?> <?php echo $top10UserCount?> <?php echo get_phrase('users');?></h4>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					
					<div class="carousel-inner">
					<?php $idx = 0; foreach ($top10User as $userInfo) { ?>
						<div class="item text-left <?php echo $idx == 0 ? "active" : ""?>" style="padding-left:30px;">
							<?php ++$idx;
							echo "<h5>".get_phrase('top')." ".$idx."</h5>"; 
							echo get_phrase('installer_name').": ".$userInfo->username."<br/>";
							echo get_phrase('vehicle_registration_no').": ".$userInfo->vehicle_reg."<br/>";
							echo get_phrase('phone').": ".$userInfo->mobilephone."<br/>";
							echo get_phrase('total_tasks').": ".$userInfo->cnt."<br/>";
							echo get_phrase('total_completed_tasks').": ".$userInfo->completed_cnt."<br/>";
							echo get_phrase('total_cancelled_tasks').": ".$userInfo->cancelled_cnt."<br/>";
							echo get_phrase('total_delayed_tasks').": ".$userInfo->delayed_cnt."<br/>";
							echo get_phrase('total_sos_tasks').": ".$userInfo->sos_cnt."<br/>";							
							?>
						</div>
					<?php }?>
					</div>
					<!-- <div class="controls">
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						  </a>
				  	</div>  -->
  					<ol class="carousel-indicators">
  						<?php $idx = 0; foreach ($top10User as $userInfo) { ?>
					    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $idx?>" class="<?php echo $idx == 0 ? "active" : ""?>"></li>
					    <?php $idx++; }?>
  					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:30px;">
		<div class="col-md-12">
			
			<div class="form-group">
			<label style="float:left"><?php echo get_phrase('search_user_by_name');?></label>
			<input type="text" class="form-control" id="suser">
			</div>
			<div class="col-md-4 col-md-offset-4">
			<input type="button" class="btn btn-warning btn-block" value="<?php echo get_phrase('generate_tracks');?>" onclick="searchUsers();">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
			<label style="float:left;margin-top:10px"><?php echo get_phrase('search_tasks_for_any_region');?></label>
			<input type="text" class="form-control" id="sregion">
			</div>
			<div class="col-md-4 col-md-offset-4">
			<input type="button" class="btn btn-success btn-block" value="<?php echo get_phrase('search_tasks_for_any_region');?>" onclick="searchRegions();">
			</div>
			
		</div>
	</div>
</div>

<div class="modal fade" id="myModalRegions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="width:800px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo get_phrase('search_tasks_for_any_region');?></h4>
      </div>
      <div class="modal-body">
      		<div class="">
				<table class="table table-bordered" id="table_regions">
					<thead>
						<tr>
							<th><?php echo get_phrase('region');?></th>
							<th><?php echo get_phrase('post_code');?></th>
							<th><?php echo get_phrase('total_tasks');?></th>
							<th><?php echo get_phrase('cancelled');?></th> 
							<th><?php echo get_phrase('completed');?></th>
							<th><?php echo get_phrase('delayed');?></th>
							<th><?php echo get_phrase('sos');?></th>
							<th><?php echo get_phrase('detail');?></th>
						</tr>
					</thead>
					<tbody id="tbody_regions">
						
					</tbody>
				</table>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo get_phrase('close');?></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalUsers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="width:500px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo get_phrase('search_user_by_name');?></h4>
      </div>
      <div class="modal-body">
      		<div class="">
				<table class="table table-bordered" id="table_users">
					<thead>
						<tr>
							<th><?php echo get_phrase('email');?></th>
							<th><?php echo get_phrase('user_name');?></th>
							<th></th>
						</tr>
					</thead>
					<tbody id="tbody_users">
						
					</tbody>
				</table>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo get_phrase('close');?></button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function () {
	$('.carousel').carousel({
        //interval: 3000
    })
});
function selectOne(type) {
	var checkbox = document.getElementById('seltype_' + type);
	if (checkbox.checked) {
		location.href = '?seltype=' + type;
	}	
}
function selectAll() {
	var checkbox = document.getElementById('seltype_0');
	if (checkbox.checked) {
		location.href = '?seltype=0';
	}	
}

//var table_regions = $('#table_regions').dataTable();
function searchRegions() {
	setWait();
	$.ajax({
		type : "post",
		datatype : "json",
		data : {
			region : $('#sregion').val()
		},
		url : "<?php echo base_url()?>index.php/supervisor/getRegions",
		success : function(retStr, code){
			var retlist = jQuery.parseJSON(retStr);
			$('#tbody_regions').empty();
			
			for (i=0;i<retlist.length;i++) {
				var item = retlist[i];
				var htmlItem = "<tr><td>" +item.region + "</td><td>" + item.postcode + "</td><td>" + item.cnt + "</td><td>" + item.cancelled_count + "</td><td>" + item.completed_count + "</td><td>" + item.delayed_count  + "</td><td>" + item.sos_count  + "</td><td><a href='<?php echo base_url()?>index.php/supervisor/region?postcode=" + item.postcode+ "'>track user</a></td></tr>";
				$('#tbody_regions').append(htmlItem);
			}
			if (retlist.length == 0) {
				var htmlItem = "<tr><td colspan='7'>No regions found</td></tr>";
				$('#tbody_regions').append(htmlItem);
			}
			//table_regions.clear().draw();
			unsetWait();
			$('#myModalRegions').modal('show');
		}
	});
}

function searchUsers() {
	setWait();
	$.ajax({
		type : "post",
		datatype : "json",
		data : {
			search : $('#suser').val()
		},
		url : "<?php echo base_url()?>index.php/supervisor/getUsers",
		success : function(retStr, code){
			var retlist = jQuery.parseJSON(retStr);
			$('#tbody_users').empty();
			
			for (i=0;i<retlist.length;i++) {
				var item = retlist[i];
				var htmlItem = "<tr><td>" +item.email + "</td><td>" + item.username + "</td><td><a href='<?php echo base_url()?>index.php/supervisor/trackuser/" + item.user_id+ "'>detail</a></td></tr>";
				$('#tbody_users').append(htmlItem);
			}
			if (retlist.length == 0) {
				var htmlItem = "<tr><td colspan='3'>No regions found</td></tr>";
				$('#tbody_users').append(htmlItem);
			}
			//table_regions.clear().draw();
			unsetWait();
			$('#myModalUsers').modal('show');
		}
	});
}
</script>