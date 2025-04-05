<?php
	add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/img_view.css">', 0);
?>
<script type="text/javascript">
$(function(){
	$("#imgList li>img").hover(function(){
		$("#mainImg img").attr('src', $(this).attr('src'));
	});

});
</script>
		
<style>

</style>

    <div class="tbl_frm011">
				
			<div id="mainImg">
				<?php
					if ($view['file'][0]['view']) {
						echo "<img src='{$view['file'][0][path]}/{$view['file'][0]['file']}' />";
					}
				?>
			</div>
			
			<?php
				if($view['file'][count]) {
					echo "<ul id='imgList'>";
					for($i=0; $i<10;$i++)
					{
						if($view['file'][$i]['view']){
							echo "<li><img src='{$view['file'][$i][path]}/{$view['file'][$i][file]}' /></li>";
						}
						else if(!($view['file'][$i]['view']))
						{
							echo "<li><img src='{$board_skin_url}/img/no_img.png' /></li>";
						}

					}
					echo "</ul>";
				}
			?>
		
    </div>