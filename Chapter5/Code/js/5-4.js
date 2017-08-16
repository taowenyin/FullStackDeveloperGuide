// 形状的构造函数
function Shape() { }
// 添加共享数据
Shape.prototype.name = "Shape";
Shape.prototype.toString = function() {
    return this.name;
}

// 多边形的构造函数
function Polygon(lines) {
    this.lines = lines;
}
// 使用原型实现继承
Polygon.prototype = new Shape();
// 防止修改原型造成的意外
Polygon.prototype.constructor = Polygon;
// 添加共享数据
Polygon.prototype.name = "Polygon";
Polygon.prototype.getLines = function() {
    return this.lines;
}

// 矩形的构造函数
function Rectangle(width, height) {
    this.width = width;
    this.height = height;
}
// 使用原型实现继承
Rectangle.prototype = new Polygon(4);
Rectangle.prototype.constructor = Rectangle;
// 添加共享数据
Rectangle.prototype.name = "Rectangle";
Rectangle.prototype.getArea = function() {
    return this.width * this.height;
}

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

// 验证属性时候属于原型
if(myRectangle.hasOwnProperty("lines")) {
    console.log("lines不是myRectangle原型中的属性");
} else {
    console.log("lines是myRectangle原型中的属性");
}
if(myRectangle.hasOwnProperty("width")) {
    console.log("width不是myRectangle原型中的属性");
} else {
    console.log("width是myRectangle原型中的属性");
}