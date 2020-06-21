document.getElementById("rad1").addEventListener("click", function() {
    var box1 = document.getElementById("rentadrone")
    var box0 = document.getElementById("home1")
    if (box1.style.display == "none") {
        box1.style.display = "block";
    } else {
        box1.style.display = "none";
    }
})

document.getElementById("rad2").addEventListener("click", function() {
    var box2 = document.getElementById("availservice")
    var box0 = document.getElementById("home1")
    if (box2.style.display == "none") {
        box2.style.display = "block";
        box0.style.display = "none";
    } else {
        box2.style.display = "none";
    }
})