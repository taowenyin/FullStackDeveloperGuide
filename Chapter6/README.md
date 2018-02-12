# 第六章 响应式前端框架Bootstrap的使用

古人云：“书山有路勤为径，学海无涯苦作舟”。千百年之前的圣贤就已经知道这个世界上是没有捷径可以走的，路都是需要一步一个脚印踏出来的，但在这个过程中有些部分是可以通过自己的智慧来缩短时间，从而实现事半功倍的效果。前端开发是一个完整的PHP技术栈中非常重要的一部分，是与用户交互的重要接口，然而在过去由于移动终端、平板等设备相对比较缺乏，因此前端开发主要针对的是PC端，但是目前由于这些设备的大量普及，使得前端应用的开发不得不考虑这些平台，并且这些平台都有其自身的特性，如移动端的屏幕是垂直的，而PC端的屏幕是水平的，在过去要实现这个特征，那么就必须开发完整的两套软件来应对不同的设备，这对开发人员来说是效率非常低，而且容易出错，因此这几年由一个IT界的龙头企业陆续开发出了基于响应式的前端框架，使用这些框架可以让前端开发人员只需要进行一次编码即可以在PC、平板、手机等平台上进行使用，而不需要为各个平台进行单独的定制开发，从而大大提高了开发效率，降低了人力成本。本章主要讲解一种主流的响应式框架，读者关键要理解其中的设计思路和思想，然后再根据具体的项目来举一反三。

#### 本章内容

> * Bootstrap简介与库文件的导入
> * 响应式的栅格系统运作原理的理解
> * 响应式的排版元素和表单元素的应用
> * 响应式的导航栏与常用组件的应用
> * Bootstrap框架与JavaScript插件的组合应用

## 6.1 Bootstrap简介与库文件的导入

随着互联网技术的发展，特别是移动互联网技术的发展，用户已经不能满足于使用笨重的PC进行信息的查询，而是希望能够在公交、地铁、沙发等环境下通过对更加便携的设备进行操作来时时刻刻获取想要的信息。这看似简单的需求，但对于IT界来说却是一个不小的挑战，因为在过去谁都没有想到过会有这样的一天到来，即移动设备上能够浏览的内容和PC上浏览器的内容是相同的，而且展示方式又是非常的优雅和美观，然而这一天就这样到了，并且这样的便携设备操作时时刻刻在我们身边上演。

在过去要解决这个问题，那么就必须由两组人员来完成，其中一组专门用于开发PC端的网站，而另一组则是开发移动端的网站，然后再在服务器端通过判断User-Agent来获取用户是通过PC访问还是通过移动端访问，然后再跳转到不同的页面中。在这个过程中存在三点问题，分别如下：

**1、成本较高：** 由于需要有两组人员同时开发，并且要做到系统调用和信息的一致性，因此不论开发的时间成本还是人力成本都相对较高。

**2、可维护性较低：** 由于针对不同设备，因此代码之间的统一性较弱，影响了程序的可维护性。

**3、一致性较低：** 由于针对的设备不同，以及开发人员的不同，因此PC和移动端之间较难做到一致性，使得用户感受存在差异。

针对以上存在的问题，2010年起Twitter公司的几名前端工程师成立兴趣小组，就开始研究和开发建立能够帮助设计师和开发人员快速构建统一的、美观的，并且能够跨平台的前端工具包，经过1年多的打磨将其在GitHub开源，并命名为Bootstrap，Bootstrap的Logo如图6-1所示。从而普惠全世界的开发人员。严格来说，Bootstrap其本质是一个CSS的框架，开发人员只需在相应的标签上添加需要的CSS类就可以实现不同的功能。而在其内部，Bootstrap使用标准的HTML5和CSS3作为开发基础，因此要让Bootstrap的特性都发挥出来，那么开发的目标浏览器也需要能够支持HTML5和CSS3，到笔者撰写为止，各大浏览器提供商所提供的最新浏览器都能很好的支持Bootstrap。此外，在Bootstrap中，还通过引入第三方JavaScript标准库JQuery来实现各类UI组件的交互，例如导航条、下拉菜单等。因此可以说，Bootstrap为前端开发人员提供了一站式的前端解决方案。

![Bootstrap-Logo](Screenshot/bootstrap-logo.png)

图6-1 Bootstrap的图标

### 6.1.1 Bootstrap框架的引入

由于Bootstrap采用MIT的开源许可证，在法律上允许任何人修改它的代码，并变为自己的代码，同时还可以用于商业用途，因此Twitter为Bootstrap提供了最为宽松的版权协议，也因为这个，在Bootstrap官网（https://v3.bootcss.com/getting-started/）提供针对三类不同开发者的Bootstrap源码，分别是：

**1、针对普通开发者：** 大多数开发者都属于这一类，包括笔者也是，这类开发者主要使用Bootstrap工具进行各类B/S系统的开发，因此Twitter为这类开发者提供了系统开发所必须的JavaScript、CSS和字体文件，即用于生产环境的源码，只需要导入到页面中就可以使用。

**2、针对需要定制Bootstrap的开发者：** 这类开发者通常需要基于Bootstrap源码进行二次深度定制，从而形成自己的产品，因此针对这类开发者Twitter提供了编译为生产环境所需的Bootstrap源码，包括CSS的预编译文件Less、JavaScript和字体文件。

**3、针对使用Sass作为CSS预编译工具的开发者：** 而第三类确切的说也属于第二类，只是该类的开发者使用的CSS预编译语言不是Less，而是Sass，因此Twitter提供了从Less移植到Sass的工具，可以帮助这类开发者快速构建基于Sass的Bootstrap源码。

因此，本章的内容主要针对的是普通开发者，进入Bootstrap官网后就可以看到提供的下载链接，如图6-2所示。此外，为了使Bootstrap能提供更好的跨区域访问速度，Bootstrap联合国内的云服务商提供了免费的CDN加速服务，需要特别注意的是，因为Bootstrap中所有的JavaScript插件，包括UI组件都依赖于JQuery进行开发，因此在引入Bootstrap核心JavaScript库之前，需要引入JQuery才能提供完整的功能，并且JQuery的版本需要在1.9.1以上，在具体代码如下：

```html
<!-- 最新版本的Bootstrap核心CSS文件 -->
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<!-- 最新版本的Bootstrap主题文件 -->
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">

<!-- 最新版本的JQuery核心JavaScript文件 -->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

<!-- 最新版本的Bootstrap核心JavaScript文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
```

![Bootstrap-download](Screenshot/bootstrap-download.png)

图6-2 Bootstrap下载地址

下载并解压缩Bootstrap后，就可以看到如图6-3所示的目录结构，其中CSS目录存放Bootstrap的样式文件，JS目录存放Bootstrap的核心库文件，Fonts目录存放Bootstrap所使用的字体文件，在这些文件里面会看到有xxx.min.xxx和xxx.map这两类较为特殊文件，其中带min的文件表示经过压缩后的文件，CSS和JavaScript的压缩与图片、视频等多媒体文件的压缩方式不同，CSS和JavaScript的压缩通常是把文件中的空格、换行等内容进行替换和删除，从而减少文件的体积，而另外一个带map的文件，叫源码映射表，因为经过压缩的CSS和JavaScript文件在开发时无法精确的对源码进行调试，所以需要通过map文件把压缩后的文件转化为开发人员能够读懂，并且格式化的源码，从而方便程序的调试。

![bootstrap-Source](Screenshot/bootstrap-source.png)

图6-3 Bootstrap的源码目录结构

### 6.1.2 Bootstrap基础模板的理解

几乎所有软件工程师都是从Hello World开始编写，Bootstrap也提供了类似与Hello World的基础模板，具体如示例代码6-1所示。

```html
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Hello Bootstrap</title>

    <!-- 导入Bootstrap的样式库 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js是为了让IE8支持HTML5的元素，以及响应式布局核心的媒体查询（Media Queries）功能 -->
    <!-- 当使用file://方式访问本文件时，Respond.js库无效 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>你好，世界！</h1>

    <!-- 引入使用Bootstrap插件所必须的JQuery库 -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 引入完整的Bootstrap核心库 -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
```

例6-1 Bootstrap的HelloWorld

**第4行：** 表示设置当前文档的编码方式为UTF-8，当浏览器读到该meta时就会采用执行的编码方式进行文件的解码，同时笔者也建议今后所有的源代码文档都采用UTF-8进行编码，方便在各系统间进行移植。

**第5行：** 表示告诉IE浏览器采用最高级模式进行文档渲染，而不考虑向下兼容的问题，即IE7就采用IE7的模式进行渲染，IE10就采用IE10的模式进行渲染，因为目前有该meta的网页通常都是使用HTML5进行编写，因此只有文档渲染模式越新，那么所支持的HTML5越完整。此外，网上还有一种是修改content的值为"IE=edge,chrome=1"以提高浏览器对HTML5的兼容性，由于该方法需要在IE浏览器中安装Google的一款插件——Chrome Frame才能使用，但是目前该插件已经在2014年1月停止更新，所以该方法目前无法使用。

**第6行：** 表示设置移动端浏览器的视区大小，viewport表示该meta的类型为视区，content中的width表示设备宽度，initial-scale表示缩放比例，而user-scalable表示是否允许用户对页面进行缩放，笔者建议设置为no，此时用户只能够滚动屏幕的方式来查看内容，使得开发出来的网页看上去更像原生应用，当然这个设置可以根据每个项目不同的需求进行删减。这里需要特别说明的是4-6行必须放在head标签的最前面，其他内容后它们之后。

**第10行：** 表示导入一个Bootstrap的样式库，这里需要根据自己的情况进行定制，例如Bootstrap放在本地，那么就需要通过相对布局引入，如果使用CDN服务，那么就要把这行换做CDN地址。

**第14-17行：** 表示当通过浏览器的判断当前访问的浏览器版本是否小于IE9，因为IE9是支持HTML5，因此不需要判断。如果浏览器版本小于IE9，则引入html5shiv.min.js使得浏览器能够支持HTML5中的新增标签，同时引入respond.min.js使得浏览器能够支持媒体查询（Media Queries）功能，从而实现响应式的布局，关于媒体查询的内容会在下一节中重点讲解。

**第23行：** 表示导入Bootstrap插件必须的JQuery库，这里需要根据自己的情况进行定制，例如JQuery放在本地，那么就需要通过相对布局引入，如果使用CDN服务，那么就要把这行换做CDN地址。

**第25行：** 表示导入Bootstrap核心库，这里需要根据自己的情况进行定制，例如Bootstrap放在本地，那么就需要通过相对布局引入，如果使用CDN服务，那么就要把这行换做CDN地址。

目前国内浏览器厂商都会提供两种浏览器模式，即兼容模式（采用IE作为内核）和高速模式（采用WebKit作为内核），然而很多浏览器为了兼容更多的网站会采用兼容模式作为其默认模式，这使得采用较低版本的IE浏览器内核时，基于Bootstrap 构建的网站展现效果很糟糕。目前，国内浏览器厂商为了解决这个问题，在保持兼容性的同时也能够较好的支持HTML5相关特性，因此国内的浏览器在解析页面的同时提供了”renderer“元信息的支持，开发人员可以在head中填下如下元信息，使得浏览器在浏览器该页面时采用高速模式进行浏览器，从而实现对HTML5和Bootstrap更好的支持。

```html
<meta name="renderer" content="webkit">
```

## 6.2 响应式的栅格系统运作原理的理解

1692年，新登基的法国国王路易十四国王为了使法国的印刷制品的质量能有质的提升，命令成立一个管理印刷产品质量的皇家特别委员会。委员会的成员首要任务是设计出科学的、合理的，并且重视功能性的新字体。当时，该委员会由数学家尼古拉斯加宗担任支持，他们以罗马字体为基础，每个字体设计了由64个基本方格组成的基本单元，并且每个方格中还被分成了36个小格，通过把字体放在严谨的几何网格网络中进行设计和排版，从大大提升了当时法国印刷制品的品质。同时，这也是世界上最早的栅格系统雏形。

目前栅格系统广泛的用于各类设计系统中，例如UI设计、图标设计、字体设计等，通过栅格系统的应用可以使产品设计的质量更高，同时栅格系统还能为设计提供很好的参考，工作效率大幅提升。所谓栅格系统，就是把一个页面分为若干行，以及若干列，其中行的高度不一定要相同，但是每列的宽度却是固定的，如图6-4所示。在Bootstrap中提供了一套把页面进行12等分的栅格系统，并且这个栅格系统中的每一列的宽度都会根据当前页面的宽度进行自动计算，同时列和列之间还能进行合并。

![grid-system](Screenshot/grid-system.png)

图6-4 栅格系统的概念

### 6.2.1 响应式布局的核心——媒体查询

随着终端设备的种类越来越多，屏幕分辨率、屏幕尺寸也越来越复杂，早起的网页设计已经无法提供在各种终端上进行完善的显示，例如在1024*768的显示器上进行设计网页，在1080P的显示器上就会显得各种尺寸都很小，而反过来又会显的很大。因此，为了解决这个问题从CSS 2.1开始加入了各种多媒体类型的定义，如显示器、移动设备等，通过这些媒体类型的设计可以帮助开发人员针对这些不同的设备进行不同的CSS样式设计。当浏览器在进行页面显示时，会根据当前屏幕的大小查询相应的媒体类型，以及该媒体类型中的CSS设置，从而显示不同效果。可以说，目前所有的响应式布局都是在此特性的基础上进行构建，也包括Bootstrap，因此了解媒体查询的使用对深入理解响应式布局和Bootstrap至关重要。

媒体查询的设置语法如下：

```css
@media not|only 设备类型 [and (设备特征)] {样式列表}
```

**1、@media：** 表示该设置为一个媒体查询设置。

**2、not|only：** 当该值为not时，表示设置除指定设备类之外的设备类型样式列表。

**3、设备类型：** 表示媒体查询所支持的设备类型，其中sceen是最为常用的设备类型，如表6-1所示。

表6-1 媒体查询支持的设备类型

| 设备类型 | 说明 |
| :-: | :- |
| all | 适用于所有的设备 |
| aural | 适用于语音和音频合成器 |
| braille | 适用于触觉反馈设备 |
| embossed | 适用于凸点文字（盲文）印刷设备 |
| handheld | 适用于小型或者手提设备 |
| print | 适用于打印机 |
| projection | 适用于投影图像,如幻灯片 |
| sceen | 适用于计算机显示器 |
| tty | 适用于使用固定间距字符格的设备,如电传打字机和终端 |
| tv | 适用于电视类设备 |

**4、and （设备特征）：** 在媒体查询的语法中设备特征的数量可以从0-N个，通过设备特性的匹配可以对设备类型进行精确的匹配，从而显示不同的效果。同时，大多数的设备特征都是支持max和min的前缀，例如max-width、min-width分别表示最大、最小宽度，具体如表6-2所示。

表6-2 可设置的设备特征

| 设备特征 | 特性值规范 | 是否支持max/min | 说明 |
| :-: | :- | :-: | :- |
| color | 整数值 | 是 | 匹配设备使用多少位的色深,如果是彩色则该值为8，如果不是彩色设备则为0，如果RGB三色的位数不一样，那么就使用最小的位数作为该值 |
| color-index | 整数值 | 是 | 匹配色彩表中的颜色数，例如要匹配的色彩表中有256个颜色，那么该值就为256 |
| aspect-ratio | 浏览器宽高比值，如16/9、4/3 | 是 | 匹配浏览器的宽度值和高度值的比例 |
| device-aspect-ratio | 设备宽高比值，如16/9、4/3 | 是 | 匹配设备分辨率的宽度值与高度值的比例 |
| device-height | 整数值 | 是 | 匹配设备分辨率的高度值 |
| device-width | 整数值 | 是 | 匹配设备分辨率的宽度值 |
| grid |  0或1 | 否 | 匹配设备是网格设备还是位图设备。如果设备是基于网格的，如只能显示一种字体的电话，该值为1，否则为0 |
| height | 整数值 | 是 | 匹配浏览器的高度 |
| width | 整数值 | 是 | 匹配浏览器的宽度 |
| monochrome | 整数值 | 是 | 匹配一个带灰度的黑白设备每个像素的比特数，如果该设备不是黑白设备，则该值为0，如果是具有256阶灰度的设备，则该值为8 |
| orientation | landscape/portrait | 否 | 匹配设备是处于横屏还是竖屏，landscape表示横屏，即宽度大于高度，portrait表示竖屏，即高度大于宽度 |
| resolution | 分辨率，如300dpi | 是 | 匹配设备的物理分辨率，即像素密度 |
| scan | progressive/interlace | 否 | 匹配设备的扫描方式,其中progressive代表逐行扫描，interlace代表隔行扫描 |

从上面的语法解释不难看出，在前端页面设计中大部分的物理特性都可以通过媒体查询的方式进行检索和过滤，通过这种方式就可以开发人员就可以针对不同的物理特性去设置不同的内容，下面通过一个简单的例子来进行说明，具体如示例代码6-2所示。

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>媒体查询示例</title>

    <style>
        html {
            font-size: 10px;
        }
        h2 {
            font-size: 2rem;
        }
        span {
            font-size: 1rem;
        }
        /* 媒体查询设置 */
        @media screen and (min-width: 320px) and (max-width: 420px) {
            html {
                font-size: 5px;
            }
        }
        @media screen and (min-width: 421px) and (max-width: 520px) {
            html {
                font-size: 10px;
            }
        }
        @media screen and (min-width: 521px) and (max-width: 620px) {
            html {
                font-size: 15px;
            }
        }
        @media screen and (min-width: 621px) and (max-width: 720px) {
            html {
                font-size: 20px;
            }
        }
        @media screen and (min-width: 721px) and (max-width: 820px) {
            html {
                font-size: 25px;
            }
        }
        @media screen and (min-width: 821px) and (max-width: 920px) {
            html {
                font-size: 30px;
            }
        }
        @media screen and (min-width: 921px) {
            html {
                font-size: 35px;
            }
        }
    </style>
</head>
<body>
    <div>
        <h2>苏州工业园区服务外包职业学院</h2>
        <span>嵌入式技术与应用专业</span>
    </div>
</body>
</html>
```

例6-2 媒体查询的示例

在上面的代码中，设置了多个媒体查询，在这些查询中都以浏览器的最大宽度和最小宽度作为设备特征，当浏览器宽度属于某个范围内时，就会修改HTML根标签的字号。这里需要特别说明的是，在样式列表中还定义了h2和span标签的字号，并且这个字号设置的单位不是px而rem，rem是一个相对字号单位，其相对的目标是HTML根标签内设置的字号。因此当浏览器大小发生改变时，除了修改HTML根标签的字号，其实还同时修改了h2和span的字号。也因为rem单位的特殊性和相对性，所以自从有了响应式页面的需求，该单位才开始崭露头角成为现在响应式页面的字号单位的主流，示例代码的结果如图6-5所示。

![media-query](Screenshot/media-query.png)

图6-5 栅格系统的效果图

### 6.2.2 Bootstrap中栅格系统的实现