// 通过new关键字创建对象
function Person(name, age, job) {
    this.name = name;
    this.age = age;
    this.job = job;
    this.sayHello = function() {
        console.log("你们好，我是一个对象，我的名字叫" + this.name);
    }
}

Person.prototype.home = "苏州";
Person.prototype.getHome = function() {
    console.log("我的家在" + this.home);
};

var classPerson = new Person("李雷", 50, "engineer");
classPerson.sayHello();
classPerson.getHome();
