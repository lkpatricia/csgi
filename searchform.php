<?php
/*
 * SEARCH FORM
*/

if ( !is_handheld() ) :
?>
<div class="search-form-wrapper">
	<button class="i-search"></button>
</div>

<div class="search-modal mfp-hide" id="search-modal">

	<form role="search" id="search-form" class="search-form">
		<input type="search" placeholder="Search" class="search-input" id="search-input" onfocus="this.value = '';" value="value" />
	</form>

</div>

<form role="search" id="mobile-search-form" class="search-form sm-desk">
	<input type="search" placeholder="Search" class="search-input mobile-input" id="search-input" value="" />
</form>

<?php else : ?>

<form role="search" id="search-form">
	<input type="search" placeholder="Search" class="search-input" id="search-input" value="" />
</form>

<?php endif; ?>