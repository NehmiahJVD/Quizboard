//VARIBALES DECLARTION AND ASSIGNMENT

var pos = 0, test4, test_status4, question, choice, choicesCss, chA, chB, chC,chD, correct4 = 0;


//ARRAY OF QUESTIONS

var questionsCss = [
    [ "What does CSS stand for?", "Creative Style Sheets", "Computer Style Sheets", "Cascading Style Sheets","Custom Style Sheets", "C" ],
    [ "Which HTML tag is used to define an internal style sheet?", "style", "sheet", "inline", "css", "A" ],
    [ "Which property is used to change the background color?", "background", "color", "background-color","bgcolor", "C" ],
    [ "Which property is used to change the left margin of an element?", "margin-left", "text-left","bg-left" ,"div-left", "A" ],
    [ "How do you select an element with id 'demo'?", "*demo", "#demo", ".demo", "demo","B" ],
    [ "How do you select all p elements inside a div element?", "div p", "div.p", "div+p",".div.p", "A" ],
    [ "What is the default value of the position property?", "absolute", "static", "fixed","relative", "D" ],
    [ "What to add external font in Css?", "@import", "@font-face", "@font","@fontface", "B" ],
    [ "Which is the correct CSS syntax?", "p: color=black;", "p{color{black;}}", "p{color: black;}","{p{color:black}}", "C" ],
    [ "Which CSS property is used to change the text color of an element?", "text-color", "font-color", "color","fontbg", "C" ],
];


//FUNCTION TO SELECT THE ID OF THE HTML ELEMENTS AUTOMATICALLY THROUGH _


function _(x){
    return document.getElementById(x);
}


//RENDERING QUESTION FUNCTION AND DISPLAYING THE QUESTION AND CHOICES ON DISPLAY


function renderQuestionCss(){
    test4 = _("test4");
    _("scoreCSSDiv").style.display="none";
    score4 = _("scoresCss");

    if(pos >= questionsCss.length){
        test4.innerHTML = "";
        _("scoreCSSDiv").style.display="block";
        score4.value = correct4;
        _("test_status4").innerHTML = "YOU SCORED";
        pos = 0;
        correct4 = 0;
        return false;
    }
    else{
        _("scoreCSSDiv").style.display="none";
        

    }
    _("test_status4").innerHTML = "0"+ (pos+1)+" | "+questionsCss.length;
    question = questionsCss[pos][0];
    chA = questionsCss[pos][1];
    chB = questionsCss[pos][2];
    chC = questionsCss[pos][3];
    chD = questionsCss[pos][4];
    test4.innerHTML = "<h3 id='question' class=''>"+question+"</h3>";
    test4.innerHTML += "<input type='radio' name='choicesCss' value='A'> "+chA+"<br>";
    test4.innerHTML += "<input type='radio' name='choicesCss' value='B'> "+chB+"<br>";
    test4.innerHTML += "<input type='radio' name='choicesCss' value='C'> "+chC+"<br>";
    test4.innerHTML += "<input type='radio' name='choicesCss' value='D'> "+chD+"<br><br>";
    test4.innerHTML +="<button onclick='checkAnswerCss()' class='btnProp text-center'>Next</button>";
}



//CHECKING CORRECT ANSWER


function checkAnswerCss(){
    choicesCss = document.getElementsByName("choicesCss");
    for(var i=0; i<choicesCss.length; i++){
        if(choicesCss[i].checked){
            choice = choicesCss[i].value;
        }
    }
    if(choice == questionsCss[pos][5]){
        correct4++;
    }
    pos++;
    renderQuestionCss();
}


//ADDING TO WINDOWS LOAD

window.addEventListener("load", renderQuestionCss, false);

