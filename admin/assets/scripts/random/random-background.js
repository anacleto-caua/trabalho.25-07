//:)

let backgrounds = 4; 
rng = Math.floor(Math.random() * backgrounds);
console.log(rng);

document.write(`<style>body{background-image: url(images/backgrounds/IF-bg-${rng}.jpg);}</style>`);