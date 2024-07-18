const txtElement = ['Nathaniela isya'];
let count = 0;
let txtIndex = 0;
let currentTxt = ' ';
let Words = ' ';

(function ketik(){
    if(count == txtElement.length){
        count=0;
    }
    currentTxt = txtElement[count];

    Words = currentTxt.slice(0, ++txtIndex);
    document.querySelector('.efek').textContent = Words;
    if(Words.length==currentTxt.length){
        count++;
        txtIndex=0;
    }
    setTimeout(ketik, 500);
}());

const text = document.querySelector(".auto-type");

const textLoad = () => {
    const words = ["Portofolio", "Website", "Profile"];
    let index = 0;
    let wordIndex = 0;
    let currentWord = "";

    const typeWord = () => {
        if (wordIndex < words[index].length) {
            currentWord += words[index].charAt(wordIndex);
            text.textContent = currentWord;
            wordIndex++;
            setTimeout(typeWord, 150); 
        } else {
            setTimeout(eraseWord, 1000); 
        }
    };

    const eraseWord = () => {
        if (currentWord.length > 0) {
            currentWord = currentWord.slice(0, -1);
            text.textContent = currentWord;
            setTimeout(eraseWord, 100); 
                } else {
            wordIndex = 0;
            index = (index + 1) % words.length;
            setTimeout(typeWord, 500); 
        }
    };

    typeWord();
};

textLoad();
