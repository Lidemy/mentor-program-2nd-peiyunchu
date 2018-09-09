/*
n=1 , 印出一顆星
n=2 , 印出兩顆星
以此類推
n=30 , 印出 30 顆星
如果 n > 30 , break 
如果 n <= 30 , 印出 n 顆星
這是迴圈問題
可以使用 for loop
*/

function printStars(n){
    var star = ''
    for(var i =1; i <= n; i ++){
        star += '*'

    }
console.log(star)
}

printStars(1);
printStars(3);
printStars(6);



