﻿---
title: TypeSchemaProvider
---

# TypeSchemaProvider
_namespace: [Microsoft.VisualBasic.DocumentFormat.Csv.StorageProvider.Reflection](N-Microsoft.VisualBasic.DocumentFormat.Csv.StorageProvider.Reflection.html)_



### Methods

#### __generateMask
```csharp
Microsoft.VisualBasic.DocumentFormat.Csv.StorageProvider.Reflection.TypeSchemaProvider.__generateMask(System.Reflection.PropertyInfo,System.String)
```


|Parameter Name|Remarks|
|--------------|-------|
|[Property]|-|
|[alias]|-|


#### GetInterfaces
```csharp
Microsoft.VisualBasic.DocumentFormat.Csv.StorageProvider.Reflection.TypeSchemaProvider.GetInterfaces(System.Reflection.PropertyInfo,System.Boolean)
```
当目标属性上面没有任何自定义属性数据的时候，会检查是否为简单数据类型，假若是则会自动添加一个NullMask，假若不是，则会返回空集合，则说明这个属性不会被用于序列化和反序列化

|Parameter Name|Remarks|
|--------------|-------|
|[Property]|对于LINQ的Column属性也会接受的|


#### GetProperties
```csharp
Microsoft.VisualBasic.DocumentFormat.Csv.StorageProvider.Reflection.TypeSchemaProvider.GetProperties(System.Type,System.Boolean)
```
返回的字典对象之中的Value部分是自定义属性

#### IsKeyValuePair
```csharp
Microsoft.VisualBasic.DocumentFormat.Csv.StorageProvider.Reflection.TypeSchemaProvider.IsKeyValuePair(System.Reflection.PropertyInfo)
```
这个属性的类型可以同时允许系统的内建的键值对类型，也可以是@"F:Microsoft.VisualBasic.DocumentFormat.Csv.StorageProvider.Reflection.TypeSchemaProvider.KeyValuePairObject"

|Parameter Name|Remarks|
|--------------|-------|
|Property|-|




