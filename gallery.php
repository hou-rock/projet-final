<script type="text/javascript">
		$(document).ready(function() {
			/*  Simple image gallery. Uses default settings*/
			$('.fancybox').fancybox(); 

			 /*  Different effects*/

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});
		});
	</script>

<div class="Arborescence">Gallery</div>

<table width="800">

			 <tr>
			  <td colspan="8" height="32"><span style="color:#676767">Choisissez votre fond d’écran parmi les plus belles photos des automobiles BMW.
			  Il vous suffit ensuite de télécharger le fichier sur votre ordinateur, de l’ouvrir et de l’installer comme fond d’écran.<br><br></span></td>
				</tr>
				<tr>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_Z4_01.jpg" data-fancybox-group="gallery" title="BMW Série Z4 Roadster"><img src="img/gallery/BMW_Z4_01.jpg" width="87" height="65" alt="" /></a>
					</td> 
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_Z4_02.jpg" data-fancybox-group="gallery" title="BMW Série Z4 Roadster"><img src="img/gallery/BMW_Z4_02.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_1S3P_01.jpg" data-fancybox-group="gallery" title="BMW Série 1 trois portes"><img src="img/gallery/BMW_1S3P_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_1S3P_02.jpg" data-fancybox-group="gallery" title="BMW Série 1 trois portes"><img src="img/gallery/BMW_1S3P_02.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_1S5P_01.jpg" data-fancybox-group="gallery" title="BMW Série 1 cinq portes"><img src="img/gallery/BMW_1S5P_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_1S5P_02.jpg" data-fancybox-group="gallery" title="BMW Série 1 cinq portes"><img src="img/gallery/BMW_1S5P_02.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_3B_01.jpg" data-fancybox-group="gallery" title="BMW Série 3 Berline"><img src="img/gallery/BMW_3B_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_3B_02.jpg" data-fancybox-group="gallery" title="BMW Série 3 Berline"><img src="img/gallery/BMW_3B_02.jpg" width="87" height="65" alt="" /></a>
					</td>
				</tr>
				
				<tr>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_5B_01.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_5B_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_5B_02.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_5B_02.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S7_01.jpg" data-fancybox-group="gallery" title="BMW Série 7"><img src="img/gallery/BMW_S7_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S7_02.jpg" data-fancybox-group="gallery" title="BMW Série 7"><img src="img/gallery/BMW_S7_02.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_X6_01.jpg" data-fancybox-group="gallery" title="BMW X6"><img src="img/gallery/BMW_X6_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_X6_02.jpg" data-fancybox-group="gallery" title="BMW X6"><img src="img/gallery/BMW_X6_02.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_X1_01.jpg" data-fancybox-group="gallery" title="BMW X1"><img src="img/gallery/BMW_X1_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_X1_02.jpg" data-fancybox-group="gallery" title="BMW X1"><img src="img/gallery/BMW_X1_02.jpg" width="87" height="65" alt="" /></a>
					</td>
				</tr>
				
				<tr>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S6G_01.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_S6G_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S6G_02.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_S6G_02.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S6C_01.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_S6C_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S6C_02.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_S6C_02.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S6Co_01.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_S6Co_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S6Co_02.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_S6Co_02.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S5G_01.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_S5G_01.jpg" width="87" height="65" alt="" /></a>
					</td>
					<td width="103">
						<a class="fancybox-effects-c" href="img/gallery/BMW_S5G_02.jpg" data-fancybox-group="gallery" title="BMW Série 5 Berline"><img src="img/gallery/BMW_S5G_02.jpg" width="87" height="65" alt="" /></a>
					</td>
				</tr>	
</table>
