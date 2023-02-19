 
 //print table of given number
 
 document.write("<h1>print table of given number </h1><br>");
 
 let num =prompt("enter the number");
  for( let i=1; i<=10 ; i++){

    document.write( num + " * " +  i  + " = " + num * i +"<br>");
  }

  //factorial programm

  document.write("<br>");
  document.write("<h1>factorial of given number 5!</h1><br>");

  var n =prompt("enter the factorial number ");
function factorial(n){
    if(typeof n =="undefined"){
        n = 1;
    }
    if(n<=0){
     n=0;
    }
    else{
        n = n*n;
    }
    return n;
}
document.write(factorial(n));


// the base and power method
document.write("<br>");
document.write("<h1>base and power</h1><br>");


let base = prompt("enter the base number");
let pow = prompt("enter the power number")
let power =Math.pow(base,pow);
document.write(power);

document.write("<br>");
document.write("<h1>riverse number</h1><br>");

var n,riverse =0,rem;

var n = prompt("enter an integer number");

while(n >0){
    rem = n % 10;

    riverse = riverse * 10 + rem;

    n = Math.floor(n / 10);
}
document.write("the riverse number is ="  + riverse);

document.write("<br>");
document.write("<h1>Pelidrome number </h1><br>");

var p,riverse =0,rem ,original;

var p = prompt("enter an integer number");
   var original = n;

while(p >0){
    rem = p % 10;
    riverse = riverse * 10 + rem;
    p = Math.floor(p/ 10);
}
document.write(riverse +" ");
if(original == riverse){
    document.write("it's palidrome number");
}else{
    document.write("it's  not palidrome number");
}

document.write("<br>");
document.write("<h1>armstrong number </h1><br>");

let sum =0, temp ,rem ;

const p = prompt("enter an integer number");
   
temp = p ;


while(p > 0){
   //finding the one's digit

   let rem  = temp % 10;
   sum += rem * rem * rem ;
   temp = parseInt(temp / 10);
}
document.write(p);




