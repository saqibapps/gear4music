# gear4music
 
Batch Processing System

Assumptions

- Each consignment is one parcel only.
- Each consignment data passed into the batch process function has been validated and correct.


Implementation

- MVC structure partially implemented
- OO PHP


Execution

Please run the index.php file in the public folder.
A batch file will be created during execution and placed in the data folder. 
The batch file will contain consignment data from the test data created in the index.php file.  


Improvements

- No security has been added. 
- More checks should be added to consignment data
- Checks to see if filehandles are actually available or have failed. Failure will cause script to crash.
- Possible have the batchprocessing class extend the CLass file.
- An mvc setup to handle the opening, writing and closing the batch file

