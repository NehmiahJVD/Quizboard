
//VARIBALES DECLARTION AND ASSIGNMENT

var pos = 0, test, test_status, question, choice, choicesHtml, chA, chB, chC,chD, correct = 0;


//ARRAY OF QUESTIONS

var questionsHtml = [
    [ "HTML stands for?", "Hyper Text Markup Language", "High Text Markup Language", "Hyper Tabular Markup Language","None of these", "A" ],
    [ "Which of the following tag is used to mark a begining of paragraph?", "TD", "BR", "P", "TR", "C" ],
    [ " From which tag descriptive list starts?", "LL", "DD", "DL","DS", "C" ],
    [ " Correct HTML tag for largest heading is?", "head", "h6", "heading","h1", "D" ],
    [ "The attribute of form tag is?", "Method", "Action", "Both (a)&(b)", "None of these","C" ],
    [ "Markup tags tell the web browser?", "How to organise page", "How to display page", "How to display message box","Noe of these", "B" ],
    [ "WWW is based on which model ?", "Local-Server", "Client-Server", "3-tier","None of these", "B" ],
    [ "Web page starts with which of the following tags ?", "body", "title", "HTML","Form", "C" ],
    [ "Which tag is used to create a number list?", "LI", "OL", "LI and OL","None of these", "C" ],
    [ "Main container for TR,TD,and TH is ?", "Table", "Group", "Data","None of these", "A" ],
];


//FUNCTION TO SELECT THE ID OF THE HTML ELEMENTS AUTOMATICALLY THROUGH _

function _(x){
    return document.getElementById(x);
}


//RENDERING QUESTION FUNCTION AND DISPLAYING THE QUESTION AND CHOICES ON DISPLAY


function renderQuestionHtml(){
    test = _("test");
    score1 = _("scores");
    _("scoreHtmlDiv").style.display="none";

    if(pos >= questionsHtml.length){
        test.innerHTML = "";
        _("scoreHtmlDiv").style.display="block";
        score1.value = correct;
        _("test_status").innerHTML = "YOU SCORED";
        pos = 0;
        correct = 0;
        return false;
    }
    else{
        _("scoreHtmlDiv").style.display="none";
        

    }
    _("test_status").innerHTML = "0"+ (pos+1)+" | "+questionsHtml.length;
    question = questionsHtml[pos][0];
    chA = questionsHtml[pos][1];
    chB = questionsHtml[pos][2];
    chC = questionsHtml[pos][3];
    chD = questionsHtml[pos][4];
    test.innerHTML = "<h3 id='question' class='text-center'>"+question+"</h3>";
    test.innerHTML += "<input type='radio' name='choicesHtml' value='A'> "+chA+"<br>";
    test.innerHTML += "<input type='radio' name='choicesHtml' value='B'> "+chB+"<br>";
    test.innerHTML += "<input type='radio' name='choicesHtml' value='C'> "+chC+"<br>";
    test.innerHTML += "<input type='radio' name='choicesHtml' value='D'> "+chD+"<br><br>";
    test.innerHTML += "<button onclick='checkAnswerHtml()' class='btnProp text-center'>Next</button>";
}


//CHECKING CORRECT ANSWER

function checkAnswerHtml(){
    choicesHtml = document.getElementsByName("choicesHtml");
    for(var i=0; i<choicesHtml.length; i++){
        if(choicesHtml[i].checked){
            choice = choicesHtml[i].value;
        }
    }
    if(choice == questionsHtml[pos][5]){
        correct++;
    }
    pos++;
    renderQuestionHtml();
}

//ADDING TO WINDOWS LOAD

window.addEventListener("load", renderQuestionHtml, false);


