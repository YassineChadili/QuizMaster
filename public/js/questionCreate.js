const openForm = document.querySelector('.open-form');
const multipleForm = document.querySelector('.multiple-choice-form');
let questionNumber = 2;

const open = document.getElementById('open');
const multiple = document.getElementById('choice');

function check_type() {
    if(multiple.checked){
        multipleForm.style.display = "block";
        openForm.style.display = "none";
    }
    else if(open.checked){
        openForm.style.display = "block";
        multipleForm.style.display = "none";
    }
}

function addQuestion() {
    let container = document.querySelector('.choices');
    questionNumber = questionNumber + 1;
    let div = document.createElement('div');
    div.className = `form-input-questions-${questionNumber}`;
    div.innerHTML = `
        <input type="radio" name="right_answer" value="${questionNumber}">
        <input type="text" name="answers[]" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"/>
    `;
    container.appendChild(div);
}

function removeQuestion(){
    if(questionNumber > 1){
        let container = document.querySelector(`.form-input-questions-${questionNumber}`);
        console.log(container);
        container.parentNode.removeChild(container);
        questionNumber--;
    }
}
