$(document).ready(() =>
{
    // Get image object
    let slideshowImage = $('#slideshow-img');

    // Start the image number at zero
    let currentImage = 0;    

    // Total images
    const imageCount = 5;

    resizeImage();

    // Set starting image
    slideshowImage.attr("src", "images/slideshow-" + currentImage + ".jpeg");

    $('#prev').click(() =>
    {
        // Subtract one to the image number and reset the image
        currentImage = (currentImage == 0) ? imageCount - 1 : currentImage - 1;
        slideshowImage.attr("src", "images/slideshow-" + currentImage + ".jpeg");
        resizeImage();
    });    

    $('#next').click(() =>
    {
        // Add one to the image number and reset the image
        currentImage = (currentImage == (imageCount - 1)) ? 0 : currentImage + 1;
        slideshowImage.attr("src", "images/slideshow-" + currentImage + ".jpeg");
        resizeImage();
    });
});

$(document).resize(() =>
{
    resizeImage();
});

function resizeImage()
{
    $('#slideshow-img').height($('#slideshow-img').width());
}
