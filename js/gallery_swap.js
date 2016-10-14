/* DON'T BOTHER PRE-LOADING IMAGES
// Create array of image locations and orientation
var img = [
	"images/store/large/store9.jpg",
	"images/store/large/store1.jpg",
	"images/store/large/store2.jpg",
	"images/store/large/store6.jpg",
	"images/store/large/store5.jpg"
];

// Preload the images
if (document.images) {
	for (var j=0; j<img.length; j++) {
		var imageObj = new Image();
		imageObj.src = img[j];
	}
}
*/

// Stop fade in if another picture is selected
function stop(){$(this).stop();}

$(function() {

	// Get the name of the image
	function filename(source) {
		var source = source;
		var addyArray = new Array();
		addyArray = source.split("/");
		return addyArray;
	};

	// "Swap" the images
		function imageSwap(image,baseAddy,type,fileName) {
			// Define the arguments
			var image = image;
			var baseAddy = baseAddy;
			var imageType = imageType;
			var fileName = fileName;

			// Swap the images with an animation
			image.stop().
				animate({opacity:0},0).
				attr('src',baseAddy + type + fileName).
				animate({opacity:1},300);
		}


	$("div.overlay").on("click", function() {

		// Set address for source
		var base = "images/";

		// Get the sources of clicked thumbnail and large image
		var source = $(this).children('img').attr('src');
		var mainSource = $('img.main').attr('src');

		// Break the source down to just the file name
		var newName = filename(source);
		var oldName = filename(mainSource);
console.log(filename(source));

		// "Swap" the images
		imageSwap($('img.main'),base,'gallery/',newName[2]);
		imageSwap($(this).children('img'),base,'gallery/',oldName[2]);
	});
});
