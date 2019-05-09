//VARIBALES DECLARTION AND ASSIGNMENT

var pos = 0, test3, test_status3, question, choice, choicesJava, chA, chB, chC,chD, correct3 = 0;

//ARRAY OF QUESTIONS

var questionsJava = [
    [ "To prevent any method from overriding, we declare the method as:", "static", "const", "final","none of these", "C" ],
    [ " The java run time system automatically calls this method while garbage collection.", "finalizer", "finalize", "finally", "None of the above", "B" ],
    [ "Members of a class specified as ______ are accessible only to methods of that class.", "Protected", "Final", "Public","Private", "D" ],
    [ "Java compiler javac translates Java source code into _______", "Assembler language", "Byte code", "Bit code","Machine code", "B" ],
    [ "_______ are used to document a program and improve its readability.", "System cells", "keywords","Comments", "Control structure","C" ],
    [ "In Java, a try block should immediately be followed by one or more ______ blocks.", "Throw", "Run", "Error","Catch", "D" ],
    [ "In object-oriented programming, the process by which one object acquires the properties of another object is called", "Encapsulation", "Polymorphism", "Overloading","Inheritance", "D" ],
    [ "The default value of a static integer variable of a class in Java is __?", "0", "1", "Garbage Value","Null", "A" ],
    [ "In which case, a program is expected to recover?", "If an error occur", "If an exception occur", "All of the above","None of the above", "B" ],
    [ "Java is ______ language.", "Weakly typed", "Strongly typed", "Moderate Typed","None of these", "B" ],
];




//FUNCTION TO SELECT THE ID OF THE HTML ELEMENTS AUTOMATICALLY THROUGH _


function _(x){
    return document.getElementById(x);
}




//RENDERING QUESTION FUNCTION AND DISPLAYING THE QUESTION AND CHOICES ON DISPLAY

function renderQuestionJava(){
    test3 = _("test3");
    _("scoreJavaDiv").style.display ="none";

   score3 = _("scoresJava");
  
    if(pos >= questionsJava.length){
        test3.innerHTML = "";
        _("scoreJavaDiv").style.display ="block";
        score3.value = correct3;
       
        _("test_status3").innerHTML = "YOU SCORED";
        pos = 0;
        correct3 = 0;
        return false;
    }
    else
    {
        _("scoreJavaDiv").style.display ="none";
    }

    _("test_status3").innerHTML = "0"+ (pos+1)+" | "+questionsJava.length;
    question = questionsJava[pos][0];
    chA = questionsJava[pos][1];
    chB = questionsJava[pos][2];
    chC = questionsJava[pos][3];
    chD = questionsJava[pos][4];
    test3.innerHTML = "<h3 id='question'>"+question+"</h3>";
    test3.innerHTML += "<input type='radio' name='choicesJava' value='A'> "+chA+"<br>";
    test3.innerHTML += "<input type='radio' name='choicesJava' value='B'> "+chB+"<br>";
    test3.innerHTML += "<input type='radio' name='choicesJava' value='C'> "+chC+"<br>";
    test3.innerHTML += "<input type='radio' name='choicesJava' value='D'> "+chD+"<br><br>";
    test3.innerHTML += "<button onclick='checkAnswerJava()' class='btnProp text-center'>Next</button>";
}




//CHECKING CORRECT ANSWER


function checkAnswerJava(){
    choicesJava = document.getElementsByName("choicesJava");
    for(var i=0; i<choicesJava.length; i++){
        if(choicesJava[i].checked){
            choice = choicesJava[i].value;
        }
    }
    if(choice == questionsJava[pos][5]){
        correct3++;
    }
    pos++;
    renderQuestionJava();
}

//ADDING TO WINDOWS LOAD


window.addEventListener("load", renderQuestionJava, false);


