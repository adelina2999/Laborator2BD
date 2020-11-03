function afisareData(){
    const date = new Date();
    const month = date.getMonth() + 1;
    const footerText = document.getElementById('footer-text')
    footerText.innerHTML = date.getDate() + "." + month + "." + date.getFullYear() 
}
afisareData()

goTopButton = document.getElementById("go-top-button");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        goTopButton.style.display = "block";
    } else {
        goTopButton.style.display = "none";
    }
};

function goTop() {
  document.documentElement.scrollTop = 0; 
}

function generareCitatRandon() {
    const citate = [
        "Iubirea cu greu poate fi definită în cuvinte, cu toate acestea, nu ne putem opri din a căuta definiții, răspunsuri sau povești care să ne amintească, incă o dată, că ea există, e acolo, am trait-o și o putem trăi indiferent de vârstă, moment, că suntem sau nu suntem pregătite.",
        "Când iubim, întotdeauna ne străduim să devenim mai buni. Când ne străduim să devenim mai buni decât suntem, totul în jurul nostru devine mai bun.",
        "Indiferent din ce sunt făcute sufletele noastre, al meu și al lui sunt la fel.",
        "Caut persoanele care să mă iubească nu în ciuda defectelor și vulnerabilității mele, ci datorită lor. Caut prietenii care îmi sunt alături și înoata împreună cu mine spre adâncimi.",
        "Dacă aș fi avut o floare pentru fiecare moment în care m-am gândit la tine, aș putea să mă plimb prin propria mea gradină pentru totdeauna.",
        "Iubește-mă când o merit cel mai puțin, căci atunci am cea mai mare nevoie.",
        "Pentru noi doi, acasă nu este un loc. Este o persoană. Și suntem în sfârșit acasă.",
        "Dacă tu ești o pasăre, sunt și eu o pasăre.",
        "În iubire, totul se schimbă, toate devin însemnate: dintr-un nimic se naște un colos.",
        "Să fii iubit de cineva îți dă putere, iar să iubești pe cineva îți dă curaj.",
        "A iubi înseamnă să te angajezi fără garanţie, să te dăruieşti în totalitate în speranţa că iubirea ta va produce iubire în persoana iubită.",
        "Iubirea este o forţă. Nu este un rezultat; este o cauză.",
        "Dragostea este dorinţa de a contribui la fericirea celuilalt."
    ]
    const numarRandom = Math.floor(Math.random() * 13);
    
    document.getElementById("citat").innerHTML = citate[numarRandom]
}
generareCitatRandon()