﻿---
title: STDIO
---

# STDIO
_namespace: [Microsoft.VisualBasic.Terminal](N-Microsoft.VisualBasic.Terminal.html)_

A standard input/output compatibility package that makes VisualBasic console
 program easily running on the Linux server or mac osx operating system.
 (一个用于让VisualBasic应用程序更加容易的运行于Linux服务器或者MAC系统之上的标准输入输出流的系统兼容包)

### Methods

#### __testEquals
```csharp
Microsoft.VisualBasic.Terminal.STDIO.__testEquals(System.String,System.Char)
```


|Parameter Name|Remarks|
|--------------|-------|
|input|-|
|compare|大写的|


#### cat
```csharp
Microsoft.VisualBasic.Terminal.STDIO.cat(System.String[])
```
不换行

|Parameter Name|Remarks|
|--------------|-------|
|out|-|


#### Format
```csharp
Microsoft.VisualBasic.Terminal.STDIO.Format(System.String,System.String[])
```
Formatting a string using some formation arguments.(使用一些指定的格式化参数来格式化一个字符串)

|Parameter Name|Remarks|
|--------------|-------|
|s|-|
|Args|-|


#### MsgBox
```csharp
Microsoft.VisualBasic.Terminal.STDIO.MsgBox(System.String,Microsoft.VisualBasic.MsgBoxStyle)
```


|Parameter Name|Remarks|
|--------------|-------|
|prompt|-|
|style|
 Value just allow:
 @"F:Microsoft.VisualBasic.MsgBoxStyle.AbortRetryIgnore",
 @"F:Microsoft.VisualBasic.MsgBoxStyle.OkCancel",
 @"F:Microsoft.VisualBasic.MsgBoxStyle.OkOnly",
 @"F:Microsoft.VisualBasic.MsgBoxStyle.RetryCancel",
 @"F:Microsoft.VisualBasic.MsgBoxStyle.YesNo",
 @"F:Microsoft.VisualBasic.MsgBoxStyle.YesNoCancel"|


#### Printf
```csharp
Microsoft.VisualBasic.Terminal.STDIO.Printf(System.String,System.String[])
```
Output the string to the console using a specific formation.(按照指定的格式将字符串输出到终端窗口之上，请注意，这个函数除了将数据流输出到标准终端之外，还会输出到调试终端)

|Parameter Name|Remarks|
|--------------|-------|
|s|A string to print on the console window.(输出到终端窗口之上的字符串)|
|args|Formation parameters.(格式化参数)|


#### scanf
```csharp
Microsoft.VisualBasic.Terminal.STDIO.scanf(System.String@,System.ConsoleColor)
```
Read the string that user input on the console to the function paramenter.
 (将用户在终端窗口之上输入的数据赋值给一个字符串变量)

|Parameter Name|Remarks|
|--------------|-------|
|s|-|




### Properties

#### Eschs
A dictionary list of the escape characters.(转义字符列表)
#### IFormater
A dictionary list of the method of format a string provider class object.
 (标准输入输出对象的格式化方法所提供的对象的字典)
