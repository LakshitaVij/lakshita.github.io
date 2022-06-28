let selected_red= document.getElementById("red");
let selected_blue= document.getElementById("blue");


document.getElementById("red").addEventListener('click', function() {
    console.log("i am clicked")
        // console.log("you have selected red");
        document.body.style.background = "red";
    }
    )

    selected_blue.addEventListener('click', function() {
        console.log("i am clicked");
            // console.log("you have selected red");
            document.body.style.background = "blue";
        }
        )