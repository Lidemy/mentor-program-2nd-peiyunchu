/*
/*
英文字串裡第一個字母在陣列裡是第0組
假如第一個字母是大寫 , 就回傳大寫
假如第一個字母是小寫 , 也回傳大寫
假如第一個不是字母 , 則不受影響

*/

function capitalize(str){
    var first = str[0].toUpperCase() //利用str[0]當成第一個字母
    return first + str.slice(1) // 第一個字母加上之後都不用變動的字元

}

console.log(capitalize('patty'))
console.log(capitalize('nick'))
console.log(capitalize(',hello'))
