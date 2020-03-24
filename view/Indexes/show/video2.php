<?php view::layout('layout')?>
<?php 
//仅支持教育版和企业版
if(strpos($item['downloadUrl'],"sharepoint.com") == false){
	header('Location: '.$item['downloadUrl']);exit();
}
$item['thumb'] = onedrive::thumbnail($item['path']);
$mpd =  str_replace("thumbnail","videomanifest",$item['thumb'])."&part=index&format=dash&useScf=True&pretranscode=0&transcodeahead=0";
?>
<?php view::begin('content');?>
		<h1>Index of <?php $PDLists = array();foreach((array)$navs as $n=>$l){array_push($PDLists,$l);}$ParentDirectory = $PDLists[count($PDLists)-2];echo $ParentDirectory;?></h1>
		<table>
			<tr><th valign="top"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWAQMAAAD6jy5FAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAtJREFUCNdjoBEAAABYAAFwhck+AAAAAElFTkSuQmCC" alt="[ICO]"></th><th>Name</th><th>Last modified</th><th>Size</th><th>Description</th></tr>
			<tr><th colspan="5"><hr></th></tr>
			<tr><td valign="top"><img src="data:image/gif;base64,R0lGODlhFAAWAMIAAP///8z//5mZmWZmZjMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADSxi63P4jEPJqEDNTu6LO3PVpnDdOFnaCkHQGBTcqRRxuWG0v+5LrNUZQ8QPqeMakkaZsFihOpyDajMCoOoJAGNVWkt7QVfzokc+LBAA7" alt="[PARENTDIR]"></td><td><a href="<?php echo $ParentDirectory; ?>">Parent Directory</a></td><td>&nbsp;</td><td align="right">  - </td><td>&nbsp;</td></tr>
			<tr><th colspan="5"><hr></th></tr>
		</table>
		<h2><?php e($item['name']);?>: <a href="<?php e($url);?>">Download</a></h2>
		<link class="dplayer-css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dplayer/dist/DPlayer.min.css">
		<script src="https://cdn.jsdelivr.net/npm/dashjs/dist/dash.all.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/dplayer/dist/DPlayer.min.js"></script>
		<div style="max-width:100%;" id="dplayer"></div>
		<script>
const dp = new DPlayer({
	container: document.getElementById('dplayer'),
	lang:'zh-cn',
	video: {
		url: '<?php echo $mpd;?>',
		pic: '<?php @e($item['thumb']);?>',
		type: 'dash'
	}
});
	</script>
<?php view::end('content');?>