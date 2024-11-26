let button = document.getElementById("btn");
count = 0;
button. onclick = function() {
    count += 1;
     document.getElementById("x").textContent = count;
     document.getElementById("input").value = count;
    };