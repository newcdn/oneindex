<?php view::layout('layout')?>
<?php view::begin('content');?>
		<h1>Index of <?php $PDLists = array();foreach((array)$navs as $n=>$l){array_push($PDLists,$l);}$ParentDirectory = $PDLists[count($PDLists)-2];echo $ParentDirectory;?></h1>
		<table>
			<tr><th valign="top"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWAQMAAAD6jy5FAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAtJREFUCNdjoBEAAABYAAFwhck+AAAAAElFTkSuQmCC" alt="[ICO]"></th><th>Name</th><th>Last modified</th><th>Size</th><th>Description</th></tr>
			<tr><th colspan="5"><hr></th></tr>
			<tr><td valign="top"><img src="data:image/gif;base64,R0lGODlhFAAWAMIAAP///8z//5mZmWZmZjMzMwAAAAAAAAAAACH+TlRoaXMgYXJ0IGlzIGluIHRoZSBwdWJsaWMgZG9tYWluLiBLZXZpbiBIdWdoZXMsIGtldmluaEBlaXQuY29tLCBTZXB0ZW1iZXIgMTk5NQAh+QQBAAABACwAAAAAFAAWAAADSxi63P4jEPJqEDNTu6LO3PVpnDdOFnaCkHQGBTcqRRxuWG0v+5LrNUZQ8QPqeMakkaZsFihOpyDajMCoOoJAGNVWkt7QVfzokc+LBAA7" alt="[PARENTDIR]"></td><td><a href="<?php echo $ParentDirectory; ?>">Parent Directory</a></td><td>&nbsp;</td><td align="right">  - </td><td>&nbsp;</td></tr>
			<tr><th colspan="5"><hr></th></tr>
		</table>
		<h2><?php e($item['name']);?>: <a href="<?php e($url);?>">Download</a></h2>
		<audio src="<?php e($item['downloadUrl']);?>" controls autoplay style="width: 100%;"  poster="<?php @e($item['thumb'].'&width=176&height=176');?>"></audio>
<?php view::end('content');?>