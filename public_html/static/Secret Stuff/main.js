var action_1 = false;
var action_2 = false;
var action_3 = false;

function breakWebpage(n) {
    switch (n) {
        case 1:
        if (action_1 == false) {
            console.log("Vad gör du?")
            document.getElementsByClassName("uncover-box-3")[0].style = "display: block;";
            action_1 = true;
        }
            break;

        case 2:
        if (action_2 == false) {
            console.warn("Har jag glömt stoppa undan något?");
            document.getElementsByClassName("uncover-box-2")[0].style = "display: block;";
            action_2 = true;
        }
            break;  
    
        case 3:
        if (action_3 == false) {
            //console.warn("Alert!\nSecurity Broken!\nSOUND THE ALARM!");
            document.getElementsByClassName("uncover-box-1")[0].style = "display: block;";
        }
            break;

        default:
            break;
    }
}