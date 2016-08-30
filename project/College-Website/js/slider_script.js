/* This is the script file which is used to change the image of slider Previous and next */

var c = -1;
var modVal = 7; // modval = no of images

function img_countp() {  // function to increment c by 1 and keep its value between 0-6.
    "use strict";
    c += 1;
    c %= modVal;
    return c;
}

function img_countn() {  // function to decrement c by 1 and keep its value between 0-6.
    "use strict";
    if (c === 0) {c = modVal; }
    c -= 1;
    c %= modVal;
    return c;
}

function change_image_next() { //function to change Image to next Image.
    "use strict";
    var slider_thumbnail;
    img_countp();
    slider_thumbnail = document.getElementById("slider_thumbnail");
    slider_thumbnail.setAttribute("src", "image/image_" + c + ".jpg");
}

function change_image_prev() { //function to change Image to Previous Image.
    "use strict";
    var thumbnail;
    img_countn();
    thumbnail = document.getElementById("slider_thumbnail");
    thumbnail.setAttribute("src", "image/image_" + c + ".jpg");
}