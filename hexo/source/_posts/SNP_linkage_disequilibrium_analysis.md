---
title: 基于SNP的连锁不平衡分析
tags: [遗传学, SNP, 连锁不平衡]
date: 2016-8-22
---

## 一、单核苷酸多态性

#### 1. SNPs概念
SNPs(single nucleotide polymorphisms, SNPs) 指染色体 DNA 序列中的某个位点由于单个核苷酸的变化而引起的多态性，在群体中的频率``>1%``。

![](https://raw.githubusercontent.com/xieguigang/xieguigang.github.io-hexo/master/images/SNP_linkage_disequilibrium_analysis/1.png)
<!--more-->
#### 2. SNPs的基本类型
SNPs属于二等位基因,有两种基本类型：

+ 转换：嘧啶置换嘧啶C-T，嘌呤置换嘌呤G-A
	+ GpC岛SNPs发生率较高，约占总SNPs ``25%``，主要是C-T。可能胞嘧啶是最易发生突变位点；且大多数是甲基化的,自发脱氨基形成胸腺嘧啶。
+ 颠换：嘧啶与嘌呤互换
   ```
    C-A(G-T)
    C-G(G-C)
    T-A(A-T)
   ```
+ 转换:颠换``=2:1``

#### 3. SNPs的特点
**数量多、分布广**：一个个体至少携带300万SNPs，平均300-1000pb有一个SNPs。有学者推测基因组约有1000万个SNPs。
**相对稳定**：每一代中每个核苷酸变异频率极低(10-8)，且这种变化的随机性。
**易于快速筛查和基因分型**：SNPs的二态性标记，非此即彼。有利于实现高通量、自动化的筛查和分析。

#### 4. SNPs的基因型
人体除性染色体外，每个染色体都有两份，个体所拥有的一对等位基因的类型称作基因型。
例如，一SNPs(A/G)，则个体在该位点的基因型则：

![](https://raw.githubusercontent.com/xieguigang/xieguigang.github.io-hexo/master/images/SNP_linkage_disequilibrium_analysis/2.png)

检定个体的基因型，被称作基因分型。

#### 5. 基因型与表现型
**表现型(表型)**：指由不同基因型与环境共同作用,而生物体可观测到的物理或生理性状（如疾病）。
寻找_基因型与表现型_的关系是遗传学的基本目标。