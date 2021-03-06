---
title: R语言实现 广义加性模型 Generalized Additive Models(GAM) 入门
tags: [R, mgcv, GAM, 数据分析, 非线性拟合]
date: 2016-8-30
---

In statistics, a generalized additive model (GAM) is a generalized linear model in which the linear predictor depends linearly on unknown smooth functions of some predictor variables, and interest focuses on inference about these smooth functions. GAMs were originally developed by Trevor Hastie and Robert Tibshirani to blend properties of generalized linear models with additive models.

The model relates a univariate response variable, ``Y``, to some predictor variables, ``xi``. An exponential family distribution is specified for ``Y`` (for example normal, binomial or Poisson distributions) along with a link function ``g`` (for example the identity or log functions) relating the expected value of ``Y`` to the predictor variables via a structure such as

![GAM](https://raw.githubusercontent.com/xieguigang/xieguigang.github.io-hexo/master/images/GAM.png)

The functions ``fi`` may be functions with a specified parametric form (for example a polynomial, or a spline depending on the levels of a factor variable) or may be specified non-parametrically, or semi-parametrically, simply as 'smooth functions', to be estimated by non-parametric means. So a typical GAM might use a scatterplot smoothing function, such as a locally weighted mean, for ``f1(x1)``, and then use a factor model for ``f2(x2)``. This flexibility to allow non-parametric fits with relaxed assumptions on the actual relationship between response and predictor, provides the potential for better fits to data than purely parametric models, but arguably with some loss of interpretability.

<!--more-->

先新建一个txt，叫做 ``Rice_insect.txt``，内容为：（用制表符``Tab``）

```
Year    Adult   Day Precipitation
1973    27285   15  387.3
1974    239     14  126.3
1975    6164    11  165.9
1976    2535    24  184.9
1977    4875    30  166.9
1978    9564    24  146.0
1979    263     3   24.0
1980    3600    21  23.0
1981    21225   13  167.0
1982    915     12  67.0
1983    225     17  307.0
1984    240     40  295.0
1985    5055    25  266.0
1986    4095    15  115.0
1987    1875    21  140.0
1988    12810   32  369.0
1989    5850    21  167.0
1990    4260    39  270.8
```

``Adult``为累计蛾量，``Day``为降雨持续天数，``Precipitation``为降雨量。

输入代码：

```R
library(mgcv)                         # 加载mgcv软件包，因为gam函数在这个包里
Data <- read.delim("Rice_insect.txt") # 读取txt数据，存到Data变量中
Data <- as.matrix(Data)               # 转为矩阵形式

# 查看Data数据：Data，查看第2列：Data[,2]，第2行：Data[2,]
Adult<-Data[,2]
Day<-Data[,3]
Precipitation<-Data[,4]

result1 <- gam(log(Adult) ~ s(Day))   # 此时，Adult为相应变量，Day为解释变量
summary(result1)                      # 输出计算结果
```

此时可以看到：

```R
Family: gaussian
Link function: identity

Formula:
log(Adult) ~ s(Day)

Parametric coefficients:
Estimate Std. Error t value Pr(>|t|)
(Intercept) 7.9013 0.3562 22.18 4.83e-13 ***
---
Signif. codes: 0 ‘***’ 0.001 ‘**’ 0.01 ‘*’ 0.05 ‘.’ 0.1 ‘ ’ 1

Approximate significance of smooth terms:
edf Ref.df F p-value
s(Day) 1.713 2.139 0.797 0.473

R-sq.(adj) = 0.0471 Deviance explained = 14.3%
GCV score = 2.6898 Scale est. = 2.2844 n = 18
```

``Day``的影响水平``p-value=0.473``，解释能力为``14.3%``，说明影响不明显。
其中，``edf``为自由度，理论上，当自由度接近1时，表示是线性关系；当自由度比1大，则表示为曲线关系。
接下来使用另一个解释变量``Precipitation``。输入代码：

```R
result2 <- gam(log(Adult) ~ s(Precipitation))
summary(result2)
```

发现：

```R
Family: gaussian 
Link function: identity

Formula:
log(Adult) ~ s(Precipitation)

Parametric coefficients:
Estimate Std. Error t value Pr(>|t|) 
(Intercept) 7.9013 0.2731 28.94 1.87e-12 ***
---
Signif. codes: 0 ‘***’ 0.001 ‘**’ 0.01 ‘*’ 0.05 ‘.’ 0.1 ‘ ’ 1

Approximate significance of smooth terms:
edf Ref.df F p-value 
s(Precipitation) 5.022 6.032 2.561 0.0774 .
---
Signif. codes: 0 ‘***’ 0.001 ‘**’ 0.01 ‘*’ 0.05 ‘.’ 0.1 ‘ ’ 1

R-sq.(adj) = 0.44 Deviance explained = 60.6%
GCV score = 2.0168 Scale est. = 1.342 n = 18
```

此时``p-value``为0.0774，说明该因子在``P<0.1``水平下影响显著。（一般情况下``p<0.05``为显著。）

接下来画图：

```R
plot(result2,se=T,resid=T,pch=16)
```

![](https://raw.githubusercontent.com/xieguigang/xieguigang.github.io-hexo/master/images/022114475621496.png)

``pch=16``这个是图标的序号，比如改成17就是三角形了。
``log(Adult)``中的``log``是什么意思呢?
``log``是数据变换，取对数可以把大范围的数变成小范围的数，这在将几组相差太大的数据画在同一个坐标轴时特别有用，比如一组数据范围是1～10，第二组数据范围是10～100000000，要是不对第二组取常用对数，第一组在坐标轴上只是一点点，都看不到，对第二组取常用对数后，第二组范围变成1～8了，这样两组数据都能看到了。

下面尝试将两个变量同时作为解释变量。

```R
result3 <- gam(log(Adult)~s(Precipitation)+s(Day))
```

出错：Model has more coefficients than data

解决办法：改成：

```
result3 <- gam(log(Adult)~s(Precipitation,k=9)+s(Day,k=9))
```

k是什么？

> k is the dimension of the basis used to represent the smooth term. If k is not specified then basis specific defaults are used.

``K``的最小值是3，最大值是17，为3、4的时候都是直线，说明太小了体现不出来，在不断增大的过程中发现，K越大，曲线原来越平滑，再大时，曲线就出现了一些弯曲，说明更精准了，再大时，图形就基本不变了，说明也没必要设那么大了。

再

```R
summary(result3)
```

结果：

```R
Family: gaussian 
Link function: identity

Formula:
log(Adult) ~ s(Precipitation, k = 9) + s(Day, k = 9)

Parametric coefficients:
Estimate Std. Error t value Pr(>|t|) 
(Intercept) 7.9013 0.2831 27.91 8.16e-12 ***
---
Signif. codes: 0 ‘***’ 0.001 ‘**’ 0.01 ‘*’ 0.05 ‘.’ 0.1 ‘ ’ 1

Approximate significance of smooth terms:
edf Ref.df F p-value 
s(Precipitation) 4.653 5.572 2.546 0.0848 .
s(Day) 1.000 1.000 0.500 0.4939 
---
Signif. codes: 0 ‘***’ 0.001 ‘**’ 0.01 ‘*’ 0.05 ‘.’ 0.1 ‘ ’ 1

R-sq.(adj) = 0.398 Deviance explained = 59.8%
GCV score = 2.288 Scale est. = 1.4423 n = 18
```

+ R语言基础包函数中文帮助文档(中英文对照v10)   http://www.docin.com/p-585638419.html

> ![R语言实现 广义加性模型 Generalized Additive Models(GAM) 入门](https://raw.githubusercontent.com/xieguigang/xieguigang.github.io-hexo/master/images/qrcode/mgcv_GAM.png)