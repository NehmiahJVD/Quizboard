//VARIBALES DECLARTION AND ASSIGNMENT

var pos = 0, test2, test_status2, question, choice, choices, chA, chB, chC,chD, correct2 = 0;


//ARRAY OF QUESTIONS

var questions = [
    [ "Which one is not a correct variable type in c++?", "float", "int", "real","double", "C" ],
    [ "Which operation is used as Logical 'AND'?", "Operator-&", "Operator-||", "Operator-&&", "Operator +", "C" ],
    [ "An Expression A.B in C++ means___", "A is memeber of object B", "B is memeber of object B", "Product of A and B","None of these", "B" ],
    [ "A C++ code line ends with___", "Semicolon ;", "Full Stop .", "Comma ,","Slash /", "A" ],
    [ "A pointer pointing to a variable that is not initialized is called___", "Void Pointer", "Null Pointer", "Empty pointer", "Wild POinter","B" ],
    [ "Default constructor has _ arguments", "No Argument", "One Argument", "Two Argument","None of these", "A" ],
    [ "A class whose objects cannot be created is known as __", "Absurd Class", "Dead Class", "Super Class","Abstract class", "D" ],
    [ "Reusability of code in C++ is achieved through ___ ", "Polymorphism", "Inheritance", "Encapsulation","Both A and B", "B" ],
    [ "In CPP, memebers of a class are ___ by default.", "Public", "Private", "Protected","Static", "B" ],
    [ "An exception in C++ can be generated using which keyword?", "Thrown", "threw", "throw","throws", "C" ],
];


//FUNCTION TO SELECT THE ID OF THE HTML ELEMENTS AUTOMATICALLY THROUGH _


function _(x){
    return document.getElementById(x);
}


//RENDERING QUESTION FUNCTION AND DISPLAYING THE QUESTION AND CHOICES ON DISPLAY


function renderQuestion(){
    test2 = _("test2");
    _("scoreCppDiv").style.display="none";
    score2 = _("scoresCpp");

    if(pos >= questions.length){
        test2.innerHTML = "";
        _("scoreCppDiv").style.display="block";
        score2.value = correct2;
        _("test_status2").innerHTML = "YOU SCORED";
        pos = 0;
        correct2 = 0;
        return false;
    }
    else{
        _("scoreCppDiv").style.display="none";
        

    }
    _("test_status2").innerHTML = "0"+ (pos+1)+" | "+questions.length;
    question = questions[pos][0];
    chA = questions[pos][1];
    chB = questions[pos][2];
    chC = questions[pos][3];
    chD = questions[pos][4];
    test2.innerHTML = "<h3 id='question' class='text-center'>"+question+"</h3>";
    test2.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
    test2.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
    test2.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br>";
    test2.innerHTML += "<input type='radio' name='choices' value='D'> "+chD+"<br><br>";
    test2.innerHTML +="<button onclick='checkAnswer()' class='btnProp text-center'>Next</button>";
}



//CHECKING CORRECT ANSWER


function checkAnswer(){
    choices = document.getElementsByName("choices");
    for(var i=0; i<choices.length; i++){
        if(choices[i].checked){
            choice = choices[i].value;
        }
    }
    if(choice == questions[pos][5]){
        correct2++;
    }
    pos++;
    renderQuestion();
}


//ADDING TO WINDOWS LOAD

window.addEventListener("load", renderQuestion, false);

