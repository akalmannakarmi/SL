// WAP in js to print multiplication table of any input integer

var a = parseInt(prompt("Enter num"));

for (let i = 1; i <= 10; i++) {
    document.writeln(a," X ",i," = ",a*i,"\n");
}