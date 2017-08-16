// 形状的构造函数
function Shape() {
    this.name = "Shape";
    this.toString = function() {
        return this.name;
    };
}

// 多边形的构造函数
function Polygon(lines) {
    this.name = "Polygon";
    this.lines = lines;
    this.getLines = function () {
        return this.lines;
    }
}

// 矩形的构造函数
function Rectangle(width, height) {
    this.name = "Rectangle";
    this.width = width;
    this.height = height;
    this.getArea = function() {
        return this.width * this.height;
    }
}

// 使用原型实现继承
Polygon.prototype = new Shape();
// 防止修改原型造成的意外
Polygon.prototype.constructor = Polygon;

Rectangle.prototype = new Polygon(4);
Rectangle.prototype.constructor = Rectangle;

// 创建矩形的对象，并获取面积
var myRectangle = new Rectangle(10, 20);
console.log("矩形的面积 = " + myRectangle.getArea() + "，边数 = " + myRectangle.getLines());

// 验证原型链
if(Shape.prototype.isPrototypeOf(myRectangle)) {
    console.log("Shape是myRectangle的原型");
} else {
    console.log("Shape不是myRectangle的原型");
}
if(Polygon.prototype.isPrototypeOf(myRectangle)) {
    console.log("Polygon是myRectangle的原型");
} else {
    console.log("Polygon不是myRectangle的原型");
}
if(Rectangle.prototype.isPrototypeOf(myRectangle)) {
    console.log("Rectangle是myRectangle的原型");
} else {
    console.log("Rectangle不是myRectangle的原型");
}
if(Number.prototype.isPrototypeOf(myRectangle)) {
    console.log("Number是myRectangle的原型");
} else {
    console.log("Number不是myRectangle的原型");
}