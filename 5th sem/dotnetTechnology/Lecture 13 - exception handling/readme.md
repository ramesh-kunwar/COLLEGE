# Exception Handling

- A try statement specifies a code block subject to error-handling or clean code.
- The Try block must be followed by a catch block or both.
  The catch block executes when error an error occur in the try block.
- The finally block executes after execution leaves the try block, to perform clean-up and whether or not an error occurred
- A catch block has occur to an exception object that contains information about the error.
- You use a catch block to either componsate for the error or the returns an exception.
- A finally block adds determination to your program, the CLR always endeavours to execute it.
  It's useful for cleanup tasks such as closely network connection.

# Types of Exception

1. IndexOutofRangeException
2. FormatException
3. OverflowException
4. DivideByZeroException

```csharp
try {

}
catch(Excetion ex){
    // handle exceptioin of type exception
}
catch(Exception ex){

}
finally {
    // code cleanup
}
```
