# Properteis & Indexers

## Properties

- Properties looks like fields from outside, but internally they contain logic like methods do

## Indexers

- Indexers provides a natural syntax for accessing elements in a class or struct that encapsulate a list or dictionary of value
- Syntax

```csharp
    <modifier><return type> this[argument list]
    {
        get
        {
            // your get block code
        }
        set
        {
            // your set block code
        }
    }
```

**modifier**s

- can be private, public, protected or internal

**return type**

- can be any valid c# types

**this**

- this is special keyword in c# to indicate the object of current class

**[argument list]**

- The formal argument list specifies the parameters of indexers
