function printFactor(n) {
    for (var i = 1; i <= n; i ++){
        if (n % i === 0){ // 例如:4對2取餘數等於0
            console.log(i)

        }

    }

}

printFactor(10);
printFactor(7);
printFactor(11)


