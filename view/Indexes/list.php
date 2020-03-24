<?php view::layout('layout')?>
<?php 
$PDLists = array();foreach((array)$navs as $n=>$l){array_push($PDLists,$l);}$PDTitle = $PDLists[count($PDLists)-1];
$Linkend = '/?/';
function file_ico($item){
  $ext = strtolower(pathinfo($item['name'], PATHINFO_EXTENSION));
  if(in_array($ext,['bmp','jpg','jpeg','png','gif','svg'])){
  	return "image";
  }
  if(in_array($ext,['mp4','mkv','webm','avi','mpg','mpeg','rm','rmvb','mov','wmv','mkv','asf','flv'])){
  	return "movie";
  }
  if(in_array($ext,['ogg','mp3','wav','weba','flac','m4a','mid','wma'])){
  	return "sound";
  }
  if(in_array($ext,['exe'])){
  	return "Executable-File";
  }
  if(in_array($ext,['msi'])){
  	return "Windows-Installer";
  }
  if(in_array($ext,['bat','cmd'])){
  	return "Batch-File";
  }
  if(in_array($ext,['sh'])){
  	return "shell";
  }
  if(in_array($ext,['reg'])){
  	return "Windows-Registry";
  }
  if(in_array($ext,['php'])){ //php
  	return "php";
  }
  if(in_array($ext,['html','htm','mhtml'])){ //layout
  	return "HTML";
  }
  if(in_array($ext,['eot','otf','ttf','woff'])){ //layout
  	return "font";
  }
  if(in_array($ext,['txt'])){ //text
  	return "text";
  }
  if(in_array($ext,['js'])){ //script
  	return "script";
  }
  if(in_array($ext,['tar'])){ //tar
  	return "tar";
  }
  if(in_array($ext,['css','less'])){ //text
  	return "style";
  }
  if(in_array($ext,['json','jsonp'])){ //text
  	return "JSON";
  }
  if(in_array($ext,['c'])){
  	return "C";
  }
  if(in_array($ext,['pdf'])){
  	return "pdf";
  }
  if(in_array($ext,['bin','trx'])){
  	return "binary";
  }
  if(in_array($ext,['iso','isz','dmg','hfs','img','dvd'])){
  	return "diskimg";
  }
  if(in_array($ext,['cpp'])){
  	return "CPP";
  }
  if(in_array($ext,['cs'])){
  	return "CSharp";
  }
  if(in_array($ext,['zip','rar','7z','cab','tgz','gz','xz','lz','deb'])){
  	return "compressed";
  }
  if(in_array($ext,['doc','docx','odt','rtf'])){
  	return "word";
  }
  if(in_array($ext,['odp','pot','potm','potx','pps','ppsx','ppsxm','ppt','pptm','pptx'])){
  	return "powerpoint";
  }
  if(in_array($ext,['csv','ods','xls','xlsx'])){
  	return "excel";
  }
  if(in_array($ext,['csv','ods','xls','xlsx'])){
  	return "excel";
  }
  if(in_array($ext,['accdb','mdb','accdt'])){
  	return "access";
  }
  if(in_array($ext,['db','db3','sqlite','sqlite3'])){
  	return "database";
  }
  if(in_array($ext,['sql'])){
  	return "SQL";
  }
  if(in_array($ext,['psd','psb','pdd'])){
  	return "Photoshop";
  }
  if(in_array($ext,['sai','sai2'])){
  	return "SAI";
  }
  if(in_array($ext,['xcf'])){
  	return "GIMP";
  }
  if(in_array($ext,['clip'])){
  	return "CSP";
  }
  if(in_array($ext,['mbp'])){
  	return "MediBang";
  }
  if(in_array($ext,['kra'])){
  	return "Krita";
  }
  if(in_array($ext,['xml'])){
  	return "XML";
  }
  if(in_array($ext,['cfg','conf'])){
  	return "Config";
  }
  return "file";
}
?>
<?php view::begin('content');?>
		<h1>Index of <?php echo $PDTitle;?></h1>
<?php if($head){echo $head;} ?>
		<table>
			<tr><th valign="top"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWAQMAAAD6jy5FAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAtJREFUCNdjoBEAAABYAAFwhck+AAAAAElFTkSuQmCC" alt="[ICO]"></th><th>Name</th><th>Last modified</th><th>Size</th><th>Description</th></tr>
			<tr><th colspan="5"><hr></th></tr>
<?php if(substr(urldecode($PDTitle), 0-strlen($Linkend)) == $Linkend):?>			<tr><td valign="top"><img src="data:image/gif;base64,R0lGODlhFAAWAMIAAP///8z//5mZmWZmZjMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADSxi63P4jEPJqEDNTu6LO3PVpnDdOFnaCkHQGBTcqRRxuWG0v+5LrNUZQ8QPqeMakkaZsFihOpyDajMCoOoJAGNVWkt7QVfzokc+LBAA7" alt="[PARENTDIR]"></td><td><a href="<?php echo get_absolute_path($root.$path.'../../');?>">Parent Directory</a></td><td>&nbsp;</td><td align="right">  - </td><td>&nbsp;</td></tr>
<?php elseif(urldecode($PDTitle) != '/'):?>			<tr><td valign="top"><img src="data:image/gif;base64,R0lGODlhFAAWAMIAAP///8z//5mZmWZmZjMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADSxi63P4jEPJqEDNTu6LO3PVpnDdOFnaCkHQGBTcqRRxuWG0v+5LrNUZQ8QPqeMakkaZsFihOpyDajMCoOoJAGNVWkt7QVfzokc+LBAA7" alt="[PARENTDIR]"></td><td><a href="<?php echo get_absolute_path($root.$path.'../');?>">Parent Directory</a></td><td>&nbsp;</td><td align="right">  - </td><td>&nbsp;</td></tr>
<?php endif;?><?php foreach((array)$items as $item):?><?php if(!empty($item['folder'])):?>			<tr><td valign="top"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWAQMAAAD6jy5FAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAtJREFUCNdjoBEAAABYAAFwhck+AAAAAElFTkSuQmCC" alt="DIR"></td><td><a href="<?php echo get_absolute_path($root.$path.rawurlencode($item['name']));?>"><?php echo $item['name'];?>/</a></td><td align="right"><?php echo date("Y-m-d H:i:s", $item['lastModifiedDateTime']);?>  </td><td align="right"><?php echo onedrive::human_filesize($item['size']);?></td><td>folder</td></tr>
<?php else: $WFMget_fileicons = file_ico($item); ?>			<tr><td valign="top"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWAQMAAAD6jy5FAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAtJREFUCNdjoBEAAABYAAFwhck+AAAAAElFTkSuQmCC" alt="<?php echo $WFMget_fileicons;?>"></td><td><a href="<?php echo get_absolute_path($root.$path).rawurlencode($item['name']);?>" alt="<?php echo $WFMget_fileicons;?>"><?php echo $item['name'];?></a></td><td align="right"><?php echo date("Y-m-d H:i:s", $item['lastModifiedDateTime']);?>  </td><td align="right"><?php echo onedrive::human_filesize($item['size']);?></td><td><?php echo $WFMget_fileicons;?></td></tr>
<?php endif;?><?php endforeach;?>
			<tr><th colspan="5"><hr></th></tr>
		</table>
<?php if($readme){echo $readme;} ?>

		<script>
var item = document.getElementsByTagName("a");
var filelist = new Array("image","movie","sound");
var filelist2 = new Array("word","powerpoint","excel","text","HTML");
for(var i=0;i<item.length;i++){
	item[i].index = i;
	item[i].addEventListener("click",function(n){
		var itemalt = item[this.index].getAttribute("alt");
		var itemhref = item[this.index].getAttribute("href");
		if(itemalt!=""&&itemalt!=null){
			for(var g=0;g<filelist.length;g++){
				if(itemalt == filelist[g]){
					var fromopen = document.createElement("form");
					fromopen.setAttribute("method","post");
					fromopen.setAttribute("action",itemhref);
					fromopen.setAttribute("style","width:0px; height:0px; overflow:hidden;");
					document.body.appendChild(fromopen);
					fromopen.submit();
					fromopen.parentNode.removeChild(fromopen);
					n.preventDefault();
					break;
				}
			}
			for(var g=0;g<filelist2.length;g++){
				if(itemalt == filelist2[g]){
					var fromopen = document.createElement("form");
					fromopen.setAttribute("method","post");
					fromopen.setAttribute("action",itemhref);
					fromopen.setAttribute("target","_blank");
					fromopen.setAttribute("style","width:0px; height:0px; overflow:hidden;");
					document.body.appendChild(fromopen);
					fromopen.submit();
					fromopen.parentNode.removeChild(fromopen);
					n.preventDefault();
					break;
				}
			}
		}
	}, false);
}
		</script>
<?php view::end('content');?>