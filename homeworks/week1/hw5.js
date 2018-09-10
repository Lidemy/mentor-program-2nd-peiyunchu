function join(str, concatStr) {
    var answer = str[0];
    for (var i = 1; i < str.length; i ++){
        answer += concatStr + str[i]
    }
    return answer 
}

function repeat(str, times) {
    var answer = '';
    for (var i = 1; i <= times; i ++){
        answer += str
    }
    return answer
}

console.log(join([1, 2, 3], ''));
console.log(join(["a", "b", "c"], "!"));
console.log(join(["a", 1, "b", 2, "c", 3], ','));
console.log(repeat('a', 5));
console.log(repeat('yoyo', 2));
console.log(repeat('patty',3))