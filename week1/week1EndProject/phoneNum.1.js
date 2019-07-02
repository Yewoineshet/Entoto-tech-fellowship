function phoneNum(tenChar){

    if(tenChar.length !== 10){
        console.log(false)
}
   else{

  for(var i = 0; i <10; i++)
  {
   if(tenChar[i] === "A" || tecChar[i] ==="B" || tenChar[i] ==="C")
{
    Console.log(2)
}
 else if(tenChar[i] === "D" || tecChar[i] ==="E" || tenChar[i] ==="F")
{
    Console.log(3)
}
 else if(tenChar[i] === "G" || tecChar[i] ==="H" || tenChar[i] ==="I")
{
    Console.log(4)
}

else if(tenChar[i] === "J" || tecChar[i] ==="K" || tenChar[i] ==="L")
{
    Console.log(5)
}

else if(tenChar[i] === "M" || tecChar[i] ==="N" || tenChar[i] ==="O")
{
    Console.log(6)
}

else if(tenChar[i] === "P" || tecChar[i] ==="Q" || tenChar[i] ==="R" || tenChar[i] ==="S")
{
    Console.log(7)
}


if(tenChar[i] === "T" || tecChar[i] ==="U" || tenChar[i] ==="V")
{
    Console.log(8)
}


if(tenChar[i] === "W" || tecChar[i] ==="X" || tenChar[i] ==="Y" || tenChar[i] ==="Z")
{
    Console.log(9)
}

  }
   }
}

const tenChar = ["Entotoproj".toUpperCase.split('')]

 phoneNum(...tenChar)