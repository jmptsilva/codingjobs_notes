# Compare Operators

## To compare two values

- a == b : equal
- a != b : different / not equal
- a > b : greater than
- a < b : lower than
- a >= b : greater or equal than
- a <= b : lower or equal than

# Condition Logic

You use conditional logic to test something.
To compare values.

IF (pressbutton) THEN
    DISPLAY('you should not have pressed it!')
ELSE
    DISPLAY('Good job.')
ENDIF

.....

var message : string
message = 'whatever'

IF(message == 'whatever') THEN
    DISPLAY('whatever message')
ELSE IF(message == 'hello') THEN
    DISPLAY('hello you too')
END IF

----- 

IF(message == 'whatever') THEN
    DISPLAY('whatever message')
END IF

IF(message == 'hello') THEN
    DISPLAY('hello you too')
END IF

---

IF statements : 
- Execute the code only if the condition is TRUE
- If condition is FALSE, it will continue to check the rest of the else if
- If the condition is TRUE, it will stop

# Logical Operators

AND

- True AND True = True
- True AND False = False
- False AND True = False
- False AND False = False

OR

- True OR True = True
- True OR False = True
- False OR True = True
- False OR False = False

XOR

- True XOR True = False
- True XOR False = True
- False XOR True = True
- False XOR False = False

IF(condition1 AND condition2) THEN
IF(condition1 OR condition2) THEN

# Loops

## For...Loop

BEGIN LoopExample
    var i : integer
START
    FOR (i = 1; i <= 11; i++) DO
        DISPLAY('hello')
    END FOR
END

## While...Loop

BEGIN LoopExample
    var i : integer
    var message : string
    message = 'hi'
START
    
    WHILE (message == 'hi') DO
        DISPLAY('hello')
        message = 'bye'
    END WHILE

END

# Do... While

BEGIN DoWhileExample
    var i : integer
    i = 15
START
    DO
        // negative numbers are forbiden
        IF(i < 0)
            exit

        DISPLAY(i)
        i++
    WHILE (i <= 10)
END

## Exit / Break
You can use exit or break keyword to exit a loop (statement) manually.