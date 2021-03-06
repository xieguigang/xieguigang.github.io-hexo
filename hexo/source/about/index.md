---
title: 谢桂纲的个人简历
date: 1989-10-02 02:43:32
---

```vbnet
Public Function xieguigang() As String
    Return "Hey, there. Hello world!!"
End Function
```

## 联系方式
+ 个人邮箱:  [xie.guigang@gmail.com](mailto://xie.guigang@gmail.com)
+ 工作邮箱:
   + [xie.guigang@gcmodeller.org](mailto://xie.guigang@gcmodeller.org)
   + [guigangxie@sklpb.org](mailto://guigangxie@sklpb.org)
+ 手机: +86 13807837047

## 我的github名片

{% githubCard xieguigang %}

他自称是一名全栈开发人员，但是其实主要精通的是进行服务器后端的开发工作，对于前端的html5开发也略微精通。其从2011年开始学习编程，从2013年开始算起到现在已经有3年的服务器后端的开发经验了。**他是一名开源项目的狂热份子，热衷于开源项目的开发。其目前主要活跃于国外的github社区以及作为codeproject社区的文章审稿人活跃于当前的最大的.NET开源社区之上。已经于2016年夏与美国微软公司签署开源授权协议，现在为美国微软公司的.NET开源项目的源代码贡献开发者之一。**目前正在学习d3js和html5，正在进行GCModeller项目的在线服务平台的前端开发工作。

###### 主要的学习与工作经历

+ 2012年至2015年期间，他在**广西大学**中的学习期间，主要从事进行``GCModeller``微生物基因组计算机辅助设计(CAD)建模系统的软件开发工作。
+ 2015年，在北海创业期间，于**北海思域创想公司**任职技术总监
+ 2015年秋，他在位于美国的西雅图微软公司的**雷德蒙德研究院**有过为期1个月的学习实习经历。
+ 2016年下半年他在位于北京的**国家蛋白质科学中心 凤凰中心**学习和生活，从事生物信息学软件的开发和系统生物学相关的生物动力学模型的建模分析工作，为接下来的2017年申请去美国攻读博士学位的``offer``做准备。

## 主要使用的开发语言和环境
+ VisualBasic.NET, R, Perl, Bash, Shoal(自己开发的用于调试GCModeller计算引擎的脚本语言)
+ 数据分析： Bioconductor, GCModeller
+ 精通的数据可视化环境与工具: d3js, Circos, Cytoscape, Cytoscape.js

## 参与的SCI论文发表


## **私人科研项目**
### GCModeller 微生物基因组计算机辅助设计建模系统 (VB.NET)
> **英文全稱**  genomics CAD(Computer Assistant Design) Modeller System
> **开发时间**	2013.08 - 至今
> **项目主页**	http://gcmodeller.org
> **在线服务**	http://services.gcmodeller.org/
> **API 文档**  http://docs.gcmodeller.org/

GCModeller主要提供了一系列的免费开源工具用于进行原核生物的全基因组的生物网络系统模块的注释建模以及计算数据分析。目前GCModeller主要为国内外的大学以及生物测序公司提供收费的服务支持和数据分析服务。

当前已经开发完成的比较成熟的分析功能模块有：

> 1.	基于序列特征模式以及比较基因组学的全基因组的基因表达调控网络的构建工具；
> 2.	RNA-Seq数据分析套件；本工具主要应用于差异表达基因的功能富集注释以及TSSs转录起始位点注释
> 3.	FBA细胞表型分析套件；在这个模块之中除了常规的FBA分析功能，还建立了一个自有的结合转录组测序数据以及代谢网络模型的遗传约束FBA计算模型
> 4.	细胞网络可视化套件与基因组可视化组件；
> 5.	大规模序列比对LocalBLAST/Clustal分析套件；
> 6.	生物数据挖掘分析组件。
> 7.    基因组序列特性位点的注释工具套件，这个工具套件主要用来分析酶切位点，转录因子结合位点，SNP位点
> 8.    宏基因组分析工具

以及一些通用化的生物信息学数据库的读写模块，这些生物信息学数据库主要包括有NCBI genbank数据库（\*.gb, \*.gff, \*.ptt），对KEGG数据库的DBGET REST API的封装，桑格尔研究所的Xfam家族的Pfam， Rfam， iPfam等数据库的读取，MetaCyc生物模型数据库，对RegPrecise数据库的REST API的封装，等

GCModeller项目目前正在申请**美国微软公司Microsoft .NET Foundation开源基金会**资助项目，GCModeller项目目前是继微软的西雅图雷德蒙德研究院``MBF``项目之后的.NET平台上面的第二大生物信息学分析项目。


**这里列出了基于GCModeller的数据分析服务的SCI论文列表：**
>1. *__Niu XN etc__. Complete sequence and detailed analysis of the first indigenous plasmid from Xanthomonas oryzae pv. Oryzicola* (**doi:** [10.1186/s12866-015-0562-x](http://bmcmicrobiol.biomedcentral.com/articles/10.1186/s12866-015-0562-x))

### sciBASIC_#_
> **英文全稱**   Scientific BASIC sharp
> **开发时间**   2015.11 - 至今
> **Github项目**  https://github.com/xieguigang/VisualBasic_AppFramework
> **API 文档库**  http://framework-docs.xieguigang.me/

**NuGet包安装**
```
PM> Install-Package sciBASIC
```

本编程框架主要是针对VisualBasic语言在服务器端应用进行的拓展，本框架环境极大的拓展了VisualBasic语言的编程语法以及数据处理能力。本编程框架同时也是GCModeller分析套件的基础运行时环境。在本框架之中主要包括了一个完整的.NET程序的调试器系统，命令行解释器系统，大型计算任务多任务进程并行化拓展，SDK API文档自动编译系统，面向大型数据集合的数据框架以及数据挖掘分析套件。

## 個人編程開發框架環境

### 1. GCModeller分布式计算服务器集群环境 (VB.NET)
> **分類**     雲計算環境
> **开发时间**	2016.03 - 至今
> **项目主页**  https://github.com/xieguigang/Microsoft.VisualBasic.Parallel
> **CodeProject知识库文章** ["Easy Distribution Computing in VisualBasic"](http://www.codeproject.com/Articles/1076209/Easy-Distribution-Computing-in-VisualBasic)

本分布式计算环境是GCModeller计算系统的在线服务模块的组件之一，目标是构建一个高性能的在线分析计算平台。
+ 在本项目之中，个人尝试构建了一个面向编程透明的分布式文件系统，以及在远程主机上面执行本地函数指针的运行时环境。
+ 基于Linq表达式的面型对象的数据查询语言Linq脚本
+ 基于Linq脚本的RQL数据源查询系统，RQL语言项目是[http://linq.gcmodeller.org](http://linq.gcmodeller.org)平台的数据源驱动程序


### 2. R语言混合编程API
> **分類**      工程學&amp;科研
> **开发时间**   2016.01 - 2016.03
> **项目主页**   https://github.com/SMRUCC/R.Bioinformatics
> **CodeProject文章**   ["R Statics Language API to VB.NET Language"](http://www.codeproject.com/Articles/1083875/R-Statics-Language-API-to-VB-NET-Language)

本混合编程环境是基于[R.NET](https://rdotnet.codeplex.com/)项目建立的R语言包函数对.NET语言的封装，其目的是为了更加方便快速的进行.NET语言对R语言的混合编程，从而极大的根据现有的R功能包来拓展.NET对数据进行计算分析以及可视化绘图的数据处理能力。GCModeller项目之中的相当一部分的RNA-seq转录组测序数据分析工具都是基于本混合编程的API环境而编写完成的。

### 3. SMRUCC Web Cloud
> **分類**      服務器後臺
> **开发时间**   2016-08
> **Github**    https://github.com/SMRUCC/SMRUCC.WebCloud

自己独立完成开发的用于构建生物信息学相关的Web应用的服务器环境，不依赖于任何外部组件环境，采用简单易用的REST API的模式将服务器后台和Web前端的开发工作完全独立，同时包含有d3.js相关的拓展API，方便开发人员快速的构建出基于D3.js的用于向用户呈现数据的Web App.

平臺特性：
+ 基於d3js混合編程的數據可視化WebApp數據後臺
+ GIS數據可視化的WebApp數據後臺

<!--

## 前端设计
### Surveillance of infectious diseases
> **开发时间**   2016-08
> **项目主页**   http://120.76.195.65/index.html (http://sklpb.org/)
> **开发框架**
>    + Web后台服务器采用自主编写的WebApp Server平台，github: [https://github.com/SMRUCC/REST_Framework](https://github.com/SMRUCC/REST_Framework)
>    + 数据前端采用jQuery+D3.js完成数据前端动态显示

[Surveillance of infectious diseases](http://120.76.195.65/index.html)主要通过对全世界范围内当前流行的塞卡病毒，黄热病毒，西尼罗病毒，流感病毒，埃博拉病毒以及基孔肯亚病毒通过疫情的新闻报道进行监控，并提供实时的疾病疫情统计分析数据，以期帮助

-->

![](https://raw.githubusercontent.com/xieguigang/xieguigang.github.io-hexo/master/images/m.gif)

## 个人娱乐项目

### Zplay-Music
> **分類**      UI前端開發
> **开发时间**   2016.05
> **Github项目**   https://github.com/xieguigang/Zplay-Music

一个个人进行多媒体编程以及UI编程练习的小项目，基于[libzplay](http://libzplay.sourceforge.net/)播放器核心。主要模仿了QQ音乐网页版UI的本地音乐播放器，支持无损音乐的播放以及与Ubuntu系统相似的notify-osd消息通知

--------------------------------------------------
### **谢桂纲的CodeProject社区文章列表**

<iframe src="http://www.codeproject.com/members/flair/10137048?show=RepDesignation,MemberTypes,ArticleCount,MessageCount,AvgArtRating,Reputation" height="150" width="270" scrolling="no" frameborder="no"></iframe>

1. [R Statics Language API to VB.NET Language](http://www.codeproject.com/Articles/1083875/R-Statics-Language-API-to-VB-NET-Language)
2. [Venn Diagram in VisualBasic](http://www.codeproject.com/Articles/1090178/Venn-Diagram-in-VisualBasic)
3. [R language S4Object Serialization to .NET Object](http://www.codeproject.com/Articles/890099/R-language-S-Object-Serialization-to-NET-Object)
4. [Code style guidelines for Microsoft VisualBasic](http://www.codeproject.com/Articles/1101608/Code-style-guidelines-for-Microsoft-VisualBasic)
5. [Easy Document in VisualBasic](http://www.codeproject.com/Articles/1099296/Easy-Document-in-VisualBasic)
6. [Guide line of integrated ShellScript with R Hybrid programming](http://www.codeproject.com/Articles/832975/Guide-line-of-integrated-ShellScript-with-R-Hybrid)
7. [Auto-Generated visual basic source code from SQL](http://www.codeproject.com/Articles/989264/Auto-Generated-visual-basic-source-code-from-SQL)
8. [Visual Basic Using Reflection to Map DataTable in MySQL Database](http://www.codeproject.com/Articles/638976/Visual-Basic-Using-Reflection-to-Map-DataTable-in)
9. [LINQ Script: A Universal Object-Oriented Database Query Language](http://www.codeproject.com/Articles/721827/LINQ-Script-A-Universal-Object-Oriented-Database-Q)
10. [A complex Mathematics expression evaluation module in Visual Basic](http://www.codeproject.com/Articles/646391/A-complex-Mathematics-expression-evaluation-module)
11. [VisualBasic Machine Learning, Step 1: The Q-Learning](http://www.codeproject.com/Articles/1088282/VisualBasic-Machine-Learning-Step-The-Q-Learning)
12. [Modeling the Biochemical System Using VB](http://www.codeproject.com/Articles/664153/Modeling-the-Biochemical-System-Using-VB)
13. [Powerful ShellScript for bioinformatics researchers](http://www.codeproject.com/Articles/820854/Powerful-ShellScript-for-bioinformatics-researcher)
14. [Draw sequence logo](http://www.codeproject.com/Articles/1095279/Draw-sequence-logo)
15. [Easy Distribution Computing in VisualBasic](http://www.codeproject.com/Articles/1076209/Easy-Distribution-Computing-in-VisualBasic)
16. [Simple HTTP Server in VisualBasic](http://www.codeproject.com/Articles/1068466/Simple-HTTP-Server-in-VisualBasic)
17. [A powerful CSV document wrapper library](http://www.codeproject.com/Articles/788006/A-powerful-CSV-document-wrapper-library)
18. [Develop a Plugin extension for your VisualBasic application](http://www.codeproject.com/Articles/703590/Develop-a-Plugin-extension-for-your-VisualBasic-ap)
19. [Levenshtein Edit Distance [Technical Blog]](http://www.codeproject.com/Articles/1055849/Levenshtein-Edit-Distance)
20. [Generate Color Mappings on Circos plot for prokaryote comparative genomics [Technical Blog]](http://www.codeproject.com/Articles/1055851/Generate-Color-Mappings-on-Circos-plot-for-prokary)

------------------------------------------------------------------------------------------------------------------------------------------------------
![](https://raw.githubusercontent.com/xieguigang/xieguigang.github.io-hexo/master/images/my/CIMG0452.JPG)

### 本博客授权协议
本博客采用``Creative Commons Attribution 4.0``授权协议发布，欢迎转载，无需博客作者本人授权。所有的博客图片与文章的Markdown文档源代码均可下载于本人github项目：https://github.com/xieguigang/xieguigang.github.io-hexo