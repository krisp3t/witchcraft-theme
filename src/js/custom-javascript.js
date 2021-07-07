// Add your custom JS here.

// Witchcraft Theme JS
// WooCommerce onsale absolute positioning fix
jQuery(document).ready(function() {
	let woocommerceLoopImgFix = function () {
		let woocommerceLoopImgMargin = parseFloat(jQuery(".woocommerce-LoopProduct-link img").css("margin-left")) - 0 + "px";
		jQuery(".onsale").css("left", woocommerceLoopImgMargin);
	}
	woocommerceLoopImgFix();
	window.addEventListener('resize', woocommerceLoopImgFix);
});


