var addOne = function (arg) {
    return arg + 1;
}

function func(args, callback) {
    var a = [];

    for (var i = 0; i < args.length; i++) {
        a[i] = callback(args[i] * 3);
    }

    return a;
}

var arr = [2, 3, 4, 5];

console.log(func(arr, addOne));

console.log("对象练习：");

var person = {
    name: "李雷",
    age: 50,
    job: "engineer",
    sayHello: function() {
        console.log("你们好，我的名字叫" + this.name);
    }
}
console.log("Person name = " + person.name);
console.log("Person age = " + person.age);
console.log("Person job = " + person.job);
person.sayHello();

// 通过new关键字创建对象
function Person(name, age, job) {
    this.name = name;
    this.age = age;
    this.job = job;
    this.sayHello = function() {
        console.log("你们好，我是一个对象，我的名字叫" + this.name);
    }
}
var classPerson = new Person("李雷", 50, "engineer");
classPerson.sayHello();

var objectPerson = new Object();
objectPerson.name = "李雷";
objectPerson.age = 50;
objectPerson.job = "engineer";
objectPerson.sayHello = function() {
    console.log("你们好，我的名字叫Object李雷");
    };

// 调用成员函数
objectPerson.sayHello();

var strTmp = "Hello String";
var strObj = new String("Hello String Obj");

// 在后台把strTmp转化为String对象后在进行操作
console.log(strTmp[0]);
// strObj中字符串已经转化为字符数组，因此可以通过索引操作
console.log(strObj[0]);

// 得到当前时间
var currDate = new Date();
console.log(currDate);
// 字符串解析后得到制定时间
var strDate = new Date("2017 08 15 13:17");
console.log(strDate);
// 传递时间参数后得到制定时间
var paramsDate = new Date(2017, 07, 15, 13, 17, 00, 50);
console.log(paramsDate);