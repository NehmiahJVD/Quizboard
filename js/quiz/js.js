//VARIBALES DECLARTION AND ASSIGNMENT

var pos = 0, test5, test_status5, question, choice, choicesJs, chA, chB, chC,chD, correct5 = 0;


//ARRAY OF QUESTIONS

var questionsJs = [
    [ "Inside which HTML element do we put the JavaScript?", "javascript tag", "code tag", "script tag","js tag", "C" ],
    [ "How do you write 'Hello World' in an alert box?", "alert()", "alertBox()", "msgBox()", "confirm()", "A" ],
    [ "How do you create a function in JavaScript?", "function:Myfunction()", "function()", "function=Myfunction()","function Myfunction()", "D" ],
    [ "Which event occurs when the user clicks on an HTML element?", "onclick", "onchange","on-click", "onclk", "A" ],
    [ "How do you declare a JavaScript variable?", "variable carName", "sring carName", "v carName", "var carName","D" ],
    [ "Which of the following is the correct syntax to print a page using JavaScript?", "window.print()", "document.print()", "browser.print()","log.print()", "A" ],
    [ "What is the correct syntax for referring to an external script called 'script.js'?", "require('')", "@import", "lang=''","src=''", "D" ],
    [ "Syntax of a anonymous function", "Anon(){}", "()=>{}", "function=>(){}","Anonymous(){}", "B" ],
    [ "How many paramters an event listener have?", "One", "Three", "Two","No", "C" ],
    [ "Is DOM Manipulation a feature of javascript?", "Yes", "Maybe", "No","Not related", "A" ],
];


//FUNCTION TO SELECT THE ID OF THE HTML ELEMENTS AUTOMATICALLY THROUGH _


function _(x){
    return document.getElementById(x);
}


//RENDERING QUESTION FUNCTION AND DISPLAYING THE QUESTION AND CHOICES ON DISPLAY


function renderQuestionJs(){
    test5 = _("test5");
    _("scoreJSDiv").style.display="none";

    score5 = _("scoresJs");

    if(pos >= questionsJs.length){
        test5.innerHTML = "";
        _("scoreJSDiv").style.display="block";
        score5.value = correct5;

        _("test_status5").innerHTML = "YOU SCORED";
        pos = 0;
        correct5 = 0;
        return false;
    }
    else{
        _("scoreJSDiv").style.display="none";
        

    }
    _("test_status5").innerHTML = "0"+ (pos+1)+" | "+questionsJs.length;
    question = questionsJs[pos][0];
    chA = questionsJs[pos][1];
    chB = questionsJs[pos][2];
    chC = questionsJs[pos][3];
    chD = questionsJs[pos][4];
    test5.innerHTML = "<h3 id='question' class=''>"+question+"</h3>";
    test5.innerHTML += "<input type='radio' name='choicesJs' value='A'> "+chA+"<br>";
    test5.innerHTML += "<input type='radio' name='choicesJs' value='B'> "+chB+"<br>";
    test5.innerHTML += "<input type='radio' name='choicesJs' value='C'> "+chC+"<br>";
    test5.innerHTML += "<input type='radio' name='choicesJs' value='D'> "+chD+"<br><br>";
    test5.innerHTML +="<button onclick='checkAnswerJs()' class='btnProp text-center'>Next</button>";
}



//CHECKING CORRECT ANSWER


function checkAnswerJs(){
    choicesJs = document.getElementsByName("choicesJs");
    for(var i=0; i<choicesJs.length; i++){
        if(choicesJs[i].checked){
            choice = choicesJs[i].value;
        }
    }
    if(choice == questionsJs[pos][5]){
        correct5++;
    }
    pos++;
    renderQuestionJs();
}


//ADDING TO WINDOWS LOAD

window.addEventListener("load", renderQuestionJs, false);

