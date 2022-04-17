function isPrimeNumber(el) {
    let arr = toArrayOfNum(el);

    for (let i = 0; i < arr.length; i++) {
        if (typeof arr[i] === "object") {
            isPrimeNumber(arr[i]);
        }
        else {
            if (typeof arr[i] !== "number") {
                console.log(arr[i], "is unexpected element");
            } else if (isPrime(arr[i])) {
                console.log(arr[i], " is prime number");
            } else {
                console.log(arr[i], " is not prime number");
            }
        }
    }
    return "Ok";
}

function toArrayOfNum(el) {
    switch (typeof el) {
        case "object":
            return el;
        case "number":
            return [el];
        default:
            console.log(el, "is unexpected element");
            return [];
    }
}

function isPrime(el) { //получаем точно число
    if ((el >= 2)) {
        for (let i = 2; i <= el - 1; i++) {
            if (el % i === 0) {
                return false;
            }
        }
        return true;
    }
    return false;
}