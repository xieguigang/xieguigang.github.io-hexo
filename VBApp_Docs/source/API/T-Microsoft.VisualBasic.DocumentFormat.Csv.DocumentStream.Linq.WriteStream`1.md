﻿---
title: WriteStream`1
---

# WriteStream`1
_namespace: [Microsoft.VisualBasic.DocumentFormat.Csv.DocumentStream.Linq](N-Microsoft.VisualBasic.DocumentFormat.Csv.DocumentStream.Linq.html)_

The stream writer for the data set, you can handling the ultra large dataset 
 serialize into a csv document by using this writer stream object.
 (文件写入流，这个一般是在遇到非常大的文件流的时候才需要使用)

### Methods

#### #ctor
```csharp
Microsoft.VisualBasic.DocumentFormat.Csv.DocumentStream.Linq.WriteStream`1.#ctor(System.String,System.Boolean,System.String)
```


|Parameter Name|Remarks|
|--------------|-------|
|path|-|
|Explicit|Schema parsing of the object strictly?|


#### Ctype``1
```csharp
Microsoft.VisualBasic.DocumentFormat.Csv.DocumentStream.Linq.WriteStream`1.Ctype``1(System.Func{``0,`0})
```
这个是配合@"M:Microsoft.VisualBasic.DocumentFormat.Csv.DocumentStream.Linq.DataStream.ForEach``1(System.Action{``0})"方法使用的

|Parameter Name|Remarks|
|--------------|-------|
|_ctype|-|


#### Flush
```csharp
Microsoft.VisualBasic.DocumentFormat.Csv.DocumentStream.Linq.WriteStream`1.Flush(System.Collections.Generic.IEnumerable{`0})
```
Serialize the object data source into the csv document.
 (将对象的数据源写入Csv文件之中）

|Parameter Name|Remarks|
|--------------|-------|
|source|-|


#### ToArray``1
```csharp
Microsoft.VisualBasic.DocumentFormat.Csv.DocumentStream.Linq.WriteStream`1.ToArray``1(System.Func{``0,`0[]})
```
这个是配合@"M:Microsoft.VisualBasic.DocumentFormat.Csv.DocumentStream.Linq.DataStream.ForEachBlock``1(System.Action{``0[]},System.Int32)"方法使用的

|Parameter Name|Remarks|
|--------------|-------|
|_ctype|-|




