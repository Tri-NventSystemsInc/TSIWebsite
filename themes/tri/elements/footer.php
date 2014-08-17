<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
	<div id="footer"> 
			&copy; <?php echo date('Y')?> <a href="<?php echo DIR_REL?>/"><?php echo h(SITE)?></a>.
			&nbsp;&nbsp;
			<?php echo t('All rights reserved.')?>  
	</div>

</div>

<?php Loader::element('footer_required'); ?>

<script type="text/javascript" src="<?php echo $this->getJs('widget/lib/jquery-1.7.1.js')?>"></script>
<script type="text/javascript" src="widget/lib/jquery.ui.core.js"></script>
<script type="text/javascript" src="widget/lib/jquery.ui.widget.js"></script>
<script type="text/javascript" src="widget/lib/jquery.ui.rcarousel.js"></script>
<script type="text/javascript">
	jQuery(function($) {
		function generatePages() {
			var _total, i, _link;
			
			_total = $( "#carousel" ).rcarousel( "getTotalPages" );
			
			for ( i = 0; i < _total; i++ ) {
				_link = $( "<a href='#'></a>" );
				
				$(_link)
					.bind("click", {page: i},
						function( event ) {
							$( "#carousel" ).rcarousel( "goToPage", event.data.page );
							event.preventDefault();
						}
					)
					.addClass( "bullet off" )
					.appendTo( "#pages" );
			}
			
			// mark first page as active
			$( "a:eq(0)", "#pages" )
				.removeClass( "off" )
				.addClass( "on" )
				.css( "background-image", "url(images/page-on.png)" );

		}

		function pageLoaded( event, data ) {
			$( "a.on", "#pages" )
				.removeClass( "on" )
				.css( "background-image", "url(images/page-off.png)" );

			$( "a", "#pages" )
				.eq( data.page )
				.addClass( "on" )
				.css( "background-image", "url(images/page-on.png)" );
		}
		
		$("#carousel").rcarousel(
			{
				visible: 1,
				step: 1,
				speed: 700,
				auto: {
					enabled: true
				},
				width: 780,
				height: 240,
				start: generatePages,
				pageLoaded: pageLoaded
			}
		);
		
		$( "#ui-carousel-next" )
			.add( "#ui-carousel-prev" )
			.add( ".bullet" )
			.hover(
				function() {
					$( this ).css( "opacity", 0.7 );
				},
				function() {
					$( this ).css( "opacity", 1.0 );
				}
			);
	});
</script>

</body>
</html>