console.log('main.js --> start');

function toggleFaqsClass() {
    this.parentElement.classList.toggle('in');
}

var faqSelector = '.collapse-list > .collapse-item > div:first-child';
var faqSelectorRs = document.querySelectorAll(faqSelector);

if (faqSelectorRs.length){
    for(let i=0;i<faqSelectorRs.length;i++){
        faqSelectorRs[i].onclick = toggleFaqsClass;
    }
}