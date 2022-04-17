let EXPR = {
    sign: '',
    a: null,
    b: null,
};

function calc(exp) {

    for (let i = 0; i < exp.length; i++) {
        if (exp[i] === '(') {
            let strBefore = exp[i];
            console.log(strBefore);

            let str = "";
            if (exp.indexOf('(', i) !== -1) {
                str = exp.substring(i, exp.indexOf('('));
                calc(str);
            }
        }
        else {
            console.log(exp[i]);

        }
    }

    return "Ok";
}

function parseSimpleExpression(expr) {
    let ch = ' ';
    let i =  0;

    EXPR.sign = expr[i];
    expr = expr.replace(EXPR.sign, '');

    EXPR.a = parseInt(expr.match(/\d+/), i);
    expr = expr.replace(EXPR.a, '');

    EXPR.b = parseInt(expr.match(/\d+/), i);
    expr = expr.replace(EXPR.b, '');

    return simpleExpr();
}

function simpleExpr() {
    if (typeof EXPR.a !== 'number') {
        console.log('Unexpected value: ', EXPR.a);
        return false;
    } else if (typeof EXPR.b !== 'number') {
        console.log('Unexpected value: ', EXPR.b);
        return false;
    } else {
        switch (EXPR.sign) {
            case '+':
                return EXPR.a + EXPR.b;
            case '-':
                return EXPR.a - EXPR.b;
            case '*':
                return EXPR.a * EXPR.b;
            case '/':
                return EXPR.a / EXPR.b;
            default:
                console.log('Unexpected sign: ', EXPR.sign);
                return false;
        }
    }
}
