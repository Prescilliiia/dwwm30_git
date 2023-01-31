const output = document.querySelector("#output");

const blockquote = document.createElement('blockquote');


const text = output.innerHTML;

const cite = output.querySelector('cite');

blockquote.innerHTML = text;

output.innerHTML = "";

output.appendChild(blockquote);


