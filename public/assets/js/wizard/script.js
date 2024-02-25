let point = 0;

function validation(){}

function checkPoint(password=""){
    const numberPatern = /\d/;
    const variants = ["bg-red-500", "bg-orange-500", "bg-yellow-500", "bg-green-500", "bg-blue-500"];
    if(password.length > 6) point += 10;
    if(numberPatern.test(password)) point += 20;
    if(numberPatern.test(password)) point += 20;

}