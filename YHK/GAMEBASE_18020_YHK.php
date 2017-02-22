<!DOCTYPE html>
<head>
<meta charset="utf-8">
<script type="text/javascript">
function get_url(v){
	window.open('http://adsense.clicking.com.tw/YHK/LPG/GAMEBASE_YHK_LPG.php?yhk='+v+'&yhk_type=GAMEBASE_YHK_18020');
}
</script>
<style type="text/css">
#yhk_ads{
	font-size:10pt;
	font-weight:normal;
    letter-spacing:1px;
	line-height:100%;
	font-family:微軟正黑體,新細明體,Arial;
	font color:#111111;
}
#yhk_ads ul{margin:0px;padding:0px;list-style:none;cursor:pointer;display:inline-block;}
#yhk_ads li{float:left;padding:0px;}
#yhk_ads a{font-size: 12px;color:#fff;text-decoration:none;margin:0px;padding:0px;}
#yhk_ads a:hover{background: none;text-decoration: underline;}
</style>
</head>
<body>
<?php
$hotkeywords = array(
array('keyword'=>'線上遊戲','desc'=>'線上遊戲排行熱榜'),
array('keyword'=>'遊戲','desc'=>'2017最好玩的遊戲'),
array('keyword'=>'遊戲 免費','desc'=>'免費遊戲區-免下載直接玩'),
array('keyword'=>'網頁 遊戲','desc'=>'2017網頁遊戲代表作'),
array('keyword'=>'網頁遊戲','desc'=>'鄉民大推網頁遊戲'),
array('keyword'=>'好玩遊戲','desc'=>'好玩遊戲新改版，快來！'),
array('keyword'=>'免費 遊戲','desc'=>'最新免費網頁遊戲'),
array('keyword'=>'最新遊戲','desc'=>'PC最新遊戲-100%激爽好玩'),
array('keyword'=>'手遊','desc'=>'超人氣手遊快來下載'),
array('keyword'=>'手機遊戲','desc'=>'超人氣手機遊戲瘋狂襲台'),
array('keyword'=>'pokemon go','desc'=>'成為寶可夢大師吧'),
array('keyword'=>'寶可夢','desc'=>'寶可夢專家抓寶必備'),
);

//print_r($hotkeywords);exit;
shuffle($hotkeywords);

//echo "<pre>";print_r($hotkeywords);echo "</pre>";exit;
?>

<div id="yhk_ads" class="yhk_ads">
	<ul>
	    <?php foreach($hotkeywords as $key=>$val){ ?>
		<li><a href="javascript:void(0)" onclick="get_url('<?php echo $val['keyword']; ?>');"><?php echo $val['desc']; ?></a> </li>
		<?php
		if($key==0){
		    break;
		}
        }
		?>
	</ul>
</div>
</body>
</html>
