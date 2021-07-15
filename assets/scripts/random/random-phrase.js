//:)

let phrase = ["A leitura é uma fonte inesgotável de prazer, mas, por incrível que pareça, a quase totalidade não sente esta sede.",
"A leitura de todos os bons livros é uma conversação com as mais honestas pessoas dos séculos passados.",
"A leitura engrandece a alma.",
"A leitura traz ao homem plenitude; o discurso, segurança; e a escrita, precisão.",
"A leitura de um bom livro é um diálogo incessante: o livro fala e a alma responde.",
"Muitos homens iniciaram uma nova era na sua vida a partir da leitura de um livro.",
"Qual Ioga, qual nada! A melhor ginástica respiratória que existe é a leitura, em voz alta, dos Lusíadas.",
"A leitura é para o intelecto o que o exercício é para o corpo.",
"Leitura, antes de mais nada é estímulo, é exemplo.",
"A paixão da leitura é a mais inocente, aprazível e a menos dispendiosa."];

let author = ["Carlos Drummond Andrade",
"René Descartes",
"Voltaire",
"Francis Bacon",
"André Maurois",
"Henry David Thoreau",
"Mario Quintana",
"Joseph Addison",
"Ruth Rocha",
"Marquês de Maricá"];

let rng = Math.floor(Math.random() * author.length);
console.log(rng);

let htmlPhrase = document.querySelector("blockquote#phrase");
let htmlAuthor = document.querySelector("span#author");
htmlPhrase.innerText = phrase[rng];
htmlAuthor.innerText = author[rng];