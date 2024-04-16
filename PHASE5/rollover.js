$(document).ready(() => {
    // process each img tag
    $("#image_rollovers img").each((index, img) => {
        // store the original src attribute
        $(img).data('original-src', $(img).attr('src'));

        // mouse over event
        $(img).mouseover(function () {
            const colorImageSrc = $(this).data('color-image');
            if (colorImageSrc) {
                $(this).attr('src', colorImageSrc);
                console.log("mouseover executed. Color image source:", colorImageSrc);
            } else {
                console.log("Color image source not found.");
            }
        });

        // mouse out event
        $(img).mouseout(function () {
            // retrieve the original src attribute value and set it back
            const originalSrc = $(this).data('original-src');
            $(this).attr('src', originalSrc);
            console.log("mouseout executed. Original image source:", originalSrc);
        });
    });
});
