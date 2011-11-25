<!DOCTYPE html>
<html>
<head profile="http://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta property="qc:admins" content="25462662476233720176375" />
	<meta name="alexaVerifyID" content="T5Gi9K9vLl0RatjyRZUph9QPOdU" />
	<title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title();
	echo " - "; bloginfo('name'); } elseif (is_single() || is_page() ) { single_post_title(); echo " - "; bloginfo('name'); }
	elseif (is_search() ) { bloginfo('name'); echo "search results:"; echo
	wp_specialchars($s); } else { wp_title('',true); } ?></title>
	<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if (is_singular()){ ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
	<?php } ?>
	<?php 
		if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jrumble.1.1.js"></script>
	<link href="<?php bloginfo('template_directory'); ?>/tipTip.css" type="text/css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.tipTip.minified.js"></script>
	<script src="http://exp.cms.grandcloud.cn/speed_test.php?host_id=238&style=6" type="text/javascript"></script>
	<!-- widget -->
	<script type="text/javascript">
		$(function(){
			$("#sidebar h3").mouseover(function(){
			var $ul = $(this).next("ul");
			if($ul.is(":visible")){
				$(this).next("ul").show(500);
				}else{
					$("#sidebar ul").hide(500)
					$(this).next("ul").show(500);
				}
			});
		});
	</script>
	<!-- widget -->
	<!-- pet -->
	<script type="text/javascript">
	<?php if(is_home()) echo 'var isindex=true;var title="";';else echo 'var isindex=false;var title="',  get_the_title(),'";'; ?>
	<?php if((($display_name = wp_get_current_user()->display_name) != null)) echo 'var visitor="',$display_name,'";'; else if(isset($_COOKIE['comment_author_'.COOKIEHASH])) echo 'var visitor="',$_COOKIE['comment_author_'.COOKIEHASH],'";';else echo 'var visitor="游客";';echo "\n"; ?>
	</script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/spig.js"></script>
	<!-- pet -->
	<!--显示隐藏侧边栏-->
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.close-sidebar').click(function() {
					$("#content").css('background','none');						
					$('.close-sidebar').hide();
			$('.close-sidebar,#sidebar').fadeOut(1000);//在一秒钟内隐藏侧边栏
			$('.show-sidebar').show();
					window.setTimeout(function(){//等侧边栏隐藏完毕 延迟1秒钟后开始将内容部分展开
					 $('#main').animate({
				width: "950px"//内容部分大小 根据你的主题
			},
			1000);
					},1000);

				});
		$('.show-sidebar').click(function() {
			$('.show-sidebar').hide();
					$('.close-sidebar').show();
			$('#main').animate({
				width: "640px"//内容部分原大小
			},
			1000);
					window.setTimeout(function(){//等待内容部分完全收缩后渐显侧边栏
					 $('#sidebar').fadeIn(1000);
					},1000);
					$("#content").css('background','url(<?php bloginfo('template_url');?>/images/content.png) repeat-y 670px 0');
		 });		 					
	});
	</script>
    <!--显示隐藏侧边栏-->
	<!--sidebar-->
	<script src="<?php echo bloginfo('template_url'); ?>/js/side.js"></script>	
	<!--sidebar-->		
	<!-- loading -->
	<script type="text/javascript">
	jQuery(document).ready(function($) {
    $('.post a').click(function(){
    var text = $(this).text();
    $(this).fadeOut('slow')
        .text("正在用力进入中...邪恶了")
        .fadeIn('slow')
        .delay(3000)
        .fadeOut('slow', function(){$(this).text(text);})
        .fadeIn('slow');
		});
	});
	</script>
	<!-- loading -->
	<!-- shangxia START -->
	<?php if (is_single()) { ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/shangxia-single.css" type="text/css" />
	<?php } else { ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/shangxia-other.css" type="text/css" />
	<?php } ?>
	<script type="text/javascript">
	<!--
	jQuery(document).ready(function($){
	var s= $('#shangxia').offset().top;$(window).scroll(function (){$("#shangxia").animate({top : $(window).scrollTop() + s + "px" },{queue:false,duration:500});});
	$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
	$('#shang').click(function(){$body.animate({scrollTop: '0px'}, 400);});
	$('#xia').click(function(){$body.animate({scrollTop:$('#footer').offset().top}, 800);});
	$('#comt').click(function(){$body.animate({scrollTop:$('#comments').offset().top}, 800);});
	});
	-->
	</script>
	<!-- shangxia END -->
	<!-- zscorpio.com Google analytics -->
	<?php global $user_ID; if (!$user_ID){ ?>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-25256494-2']);
		  _gaq.push(['_trackPageview']);
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	<?php } ?>		
	<!-- zscorpio.com Google analytics -->
	<!--抖动-->
	<script type="text/javascript">
	$(function(){						   	
		$('#logo').jrumble({
			rangeX: 2,
			rangeY: 2,
			rangeRot: 1
		});	
		$('.ad').jrumble({
			rangeX: 2,
			rangeY: 2,
			rangeRot: 1
		});	
		$('.icon').jrumble({
			rangeX: 2,
			rangeY: 2,
			rangeRot: 1
		});	
	});
	</script>		
	<!--抖动-->	
	<!--tiptip-->
	<script type="text/javascript">
	  $(document).ready(function() {
		 $(".link").tipTip({maxWidth: "auto", edgeOffset: 10});
	  });
	</script>
	<!--tiptip-->
</head>
<body>
<div id="wrap">
	<div id="header">
	    <div id="logo"><a href="<?php echo get_settings('home'); ?>"><img alt="首页" title="首页" class="tipTip" src="<?php bloginfo('template_url');?>/images/favico.png" /></a></div>
		<div id="name" ><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
		<div id="closeside">
			<a class="close-sidebar" style="cursor:pointer;">关闭侧边栏</a>
			<a class="show-sidebar" style="display:none;cursor:pointer">显示侧边栏</a>
        </div>
		<?php wp_nav_menu( array('menu' => 'header-menu', 'menu_class' => 'menu' )); ?>
	</div>
	<div id="descr">
		<ul>			
			<li><a id="rss_icon" class="icon" href="http://feed.feedsky.com/zscorpio" target="_blank">RSS Feed</a></li>
			<li><a id="goo_icon" class="icon" href="https://plus.google.com/104304137380888729289/posts" target="_blank">google+</a></li>
			<li><a id="face_icon" class="icon" href="https://www.facebook.com/chouscorpio" target="_blank">Facebook</a></li>
			<li><a id="tqq_icon" class="icon" href="http://t.qq.com/patapong" target="_blank">QQ</a></li>
			<li><a id="tsina_icon" class="icon" href="http://weibo.com/zswscorpio" target="_blank">Sina</a></li>		
			<li><a id="twitter_icon" class="icon" href="https://twitter.com/Chouscorpio" target="_blank">Twitter</a></li>
		</ul>
		<?php bloginfo('description'); ?>
	</div>
	<!--
	<div id="leftbar">
		<p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=290601953&site=qq&menu=yes">QQ聊天</a></p>
		<p><a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=q%E8%9D%8E%E7%B4%AB&site=cntaobao&s=1&charset=utf-8">阿里旺旺</a></p>
		<p><a target="_blank" hre="http://card.zscorpio.com/">Scorpio's Card</a></p>
		<p><a target="_blank" hre="http://www.zscorpio.com/">Scorpio's Blog</a></p>	
		<p><a target="_blank" hre="http://center.zscorpio.com/">Scorpio's Center</a></p>		
	</div>
	-->
	<div id="leftside">
		<p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=290601953&site=qq&menu=yes">QQ聊天</a></p>
		<p><a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=q%E8%9D%8E%E7%B4%AB&site=cntaobao&s=1&charset=utf-8">阿里旺旺</a></p>
		<p><a target="_blank" href="http://card.zscorpio.com/">Scorpio's Card</a></p>
		<p><a target="_blank" href="http://www.zscorpio.com/">Scorpio's Blog</a></p>	
		<p><a target="_blank" href="http://center.zscorpio.com/">Scorpio's Center</a></p>		
	</div>	
	<div id="content">