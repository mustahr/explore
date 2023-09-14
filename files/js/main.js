
function reveal() {
    var reveals = document.querySelectorAll(".reveal");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);


window.onload = function () {
    let element = document.getElementById("loading-animation");
    element.classList.add("loading-none");
};
var elements = document.getElementsByClassName("img");
var currentIndex = 0;
var previousIndex = elements.length - 1;

function addClassToElement() {
    elements[currentIndex].classList.add("image_anime");
    elements[previousIndex].classList.remove("image_anime");
    previousIndex = currentIndex;
    currentIndex = (currentIndex + 1) % elements.length;
}

setInterval(addClassToElement, 5000);




// For the scroll bar
var prevScrollpos = window.pageYOffset;

window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-100px";
    }

    prevScrollpos = currentScrollPos;
};

// input focus 
// const input = document.getElementById("search");
// const button = document.getElementById("search-toggle");

// button.addEventListener("click", function() {
//     alert(input);
//     input.autofocus;
// });

// It creates a canvas element, draws the video on it, gets the image data, averages the RGB values,
// and sets the box shadow of the video element to the average color.//
// function updateShadowColor() {
//     const canvas = document.createElement("canvas");
//     /* Creating a 2D context for the canvas. */
//     const ctx = canvas.getContext("2d");
//     canvas.width = intro.videoWidth;
//     canvas.height = intro.videoHeight;
//     /* It draws the video on the canvas. */
//     ctx.drawImage(intro, 0, 0, canvas.width, canvas.height);
//     /* It gets the image data of the canvas. */
//     const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
//     const { data } = imageData;
//     let sumR = 0, sumG = 0, sumB = 0;
//     /* Looping through the image data and adding the values of the red, green, and blue channels to the
//     sumR, sumG, and sumB variables. */
//     for (let i = 0; i < data.length; i += 4) {
//         sumR += data[i];
//         sumG += data[i + 1];
//         sumB += data[i + 2];
//     }
//     const averageR = sumR / (data.length / 4);
//     const averageG = sumG / (data.length / 4);
//     const averageB = sumB / (data.length / 4);
//     const color = `rgba(${averageR}, ${averageG}, ${averageB}, 1)`;
//     const shadow = `0px 0px 40px ${color}`;
//     const border = `10px solid ${color}`;
//     // document.getElementById("myVideo").style.boxShadow = shadow
//     document.getElementById("myVideo").style.border = border
// }

// setInterval(updateShadowColor, 500);


////////////////////////////////////////////////////////////////