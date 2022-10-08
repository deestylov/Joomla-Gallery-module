<?php

/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2012 http://jomla-code.ru
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file

defined('_JEXEC') or die;
?>

<?php
$papkacarus=$params->get('papkacarus');


$filesall = glob($papkacarus.'*.{jpg,png,jpeg}', GLOB_BRACE);
$counter = 1;
// print_r ($filesall);


?>

<script src="/modules/mod_deestylov_gallery/tmpl/lib/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    jQuery.noConflict();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.6.1/lightgallery.min.js" integrity="sha512-2KYdY5Sg3LCcbEnJ6JSoDyFDpgoDHPHl+4ZFE1DV23IVqiCSsjfkmuhJ0Uu6VTkvqaRtQDZ/LyhmMXvWUfymSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.6.1/css/lightgallery.min.css" integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.6.1/plugins/thumbnail/lg-thumbnail.min.js" integrity="sha512-HbdAMrTXUriN/BCnuq4aj1BHa0vPqXMRokZoAI/BAbEfIt49PY5De3jP5u2lDFJetPpx7LkLHm8glbP1NjxxiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.6.1/plugins/zoom/lg-zoom.min.js" integrity="sha512-5u0plpLx7LGRhJ8yg3MN9v7+XAV3EVEcpolQ0j11CAuffZDFw5/O5gD6YVkQuKUcjYx8wff8YZFkSwXw9YyBpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.6.1/css/lg-zoom.min.css" integrity="sha512-vIrTyLijDDcUJrQGs1jduUCSVa3+A2DaWpVfNyj4lmXkqURVQJ8LL62nebC388QV3P4yFBSt/ViDX8LRW0U6uw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.6.1/css/lg-thumbnail.min.css" integrity="sha512-GRxDpj/bx6/I4y6h2LE5rbGaqRcbTu4dYhaTewlS8Nh9hm/akYprvOTZD7GR+FRCALiKfe8u1gjvWEEGEtoR6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />




<style>


@import url(https://fonts.googleapis.com/css?family=Montserrat:500);

:root {
	/* Base font size */
	font-size: 10px;
}

*,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	min-height: 100vh;
	background-color: #fafafa;
}

.container {
	max-width: 100rem;
	margin: 0 auto;
	padding: 0 2rem 2rem;
}

.heading {
	font-family: "Montserrat", Arial, sans-serif;
	font-size: 4rem;
	font-weight: 500;
	line-height: 1.5;
	text-align: center;
	padding: 3.5rem 0;
	color: #1a1a1a;
}

.heading span {
	display: block;
}

.gallery {
	display: flex;
	flex-wrap: wrap;
	/* Compensate for excess margin on outer gallery flex items */
	margin: -1rem -1rem;
}

.gallery-item {
	/* Minimum width of 24rem and grow to fit available space */
	flex: 1 0 24rem;
	/* Margin value should be half of grid-gap value as margins on flex items don't collapse */
	margin: 1rem;
	box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
	overflow: hidden;
}

.gallery-image {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
	transition: transform 400ms ease-out;
}

.gallery-image:hover {
	transform: scale(1.15);
}

/*

The following rule will only run if your browser supports CSS grid.

Remove or comment-out the code block below to see how the browser will fall-back to flexbox styling. 

*/

@supports (display: grid) {
	.gallery {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
		grid-gap: 2rem;
	}

	.gallery,
	.gallery-item {
		margin: 0;
	}
}

    </style>

<div class="container" style="margin-top: 15px;">

	<div id="lightgallery" class="gallery">
    <?php foreach ($filesall as $file) :?>
		<a class="gallery-item" href="<?php echo $file; ?>">
			<img class="gallery-image" src="<?php echo $file; ?>" alt="Фото - <?php echo $counter++; ?>">
		</a>
    <?php endforeach;?>
	</div>
</div>



<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        speed: 500
    });
</script>



<!-- <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
  <script  type="module" src="https://cdpn.io/cpe/boomboom/pen.js?key=pen.js-b0271cf0-7c68-da5a-e0ba-4aa559235b72" crossorigin></script> -->